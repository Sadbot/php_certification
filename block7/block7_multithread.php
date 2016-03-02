<?php

declare(ticks = 1);

$child1 = pcntl_fork();
if ($child1 != 0) {
    $child2 = pcntl_fork();
    if ($child2 != 0) {
        echo "Parent\n";
    } else {
        echo "Child-worker 2\n";
        require 'block7_transaction.php';
    }
} else {
    echo "Child-worker 1\n";
    require 'block7_transaction_konkurent.php';
}

// detach from the controlling terminal
if (posix_setsid() == -1) {
    die("could not detach from terminal");
}

// setup signal handlers
pcntl_signal(SIGTERM, "sig_handler");
pcntl_signal(SIGHUP, "sig_handler");

$firstChildIsFree = true;
$secondChildIsFree = true;
// loop forever performing tasks
while (1) {
    $changes = file_get_contents('test.txt');
    if (!empty($changes)) {
        $got2execution = false;
        //Если первый воркер свободен - активизируем его отправкой сигнала
        if ($firstChildIsFree) {
            //Собственно отправка сигнала
            posix_kill($child1, SIGHUP);
            //Устанавливаем значение переменной статуса - воркер занят
            $firstChildIsFree = false;
            $got2execution = true;
        } elseif ($secondChildIsFree) {
            posix_kill($child2, SIGHUP);
            $secondChildIsFree = false;
            $got2execution = true;
        }
        if ($got2execution) {
            //Задача выполненa, очищаем файл
            file_put_contents('test.txt', '');
        } else {
            echo "No free workers\n";
        }
    }
}

function sig_handler($signo)
{
    switch ($signo) {
        case SIGTERM:
            // handle shutdown tasks
            exit;
            break;
        case SIGHUP:
            // handle restart tasks
            break;
        default:
            // handle all other signals
    }
}