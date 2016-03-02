<?php
function simple()
{
    $current = 2;
    $simp = true;
    while (true) {

        for ($d = 2; $d * $d <= $current; $d++) {
            if ($current % $d == 0)
                $simp = false;
        }

        if ($simp) {
            yield $current;
        }

        $current++;
        $simp = true;
    }
}

foreach (simple() as $line) {
    echo $line, "\n";
    sleep(1);
}