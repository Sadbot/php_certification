<?php
opcache_reset();

$pid = getmypid();

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=UTF8;', 'root', '071293', [
        // PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_AUTOCOMMIT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch (PDOException $e) {
    echo "{$pid}: error db: ", $e->getMessage(), '<br>';
}

try {
    echo "{$pid}: Begin Transaction! <br>";

    $db->exec('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;');

    $db->beginTransaction();

    $stmt = $db->prepare("SELECT * FROM `persons` WHERE `name`='Cheruhin' AND `surname`='Sergey'");
    $stmt->execute();
    $person = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($person);

    sleep(2);

    $db->query("INSERT INTO `persons`(`name`, `surname`, `gender`, `enum`) VALUES ('Cheruhin','Sergey', 1, 1)");

    $db->commit();



    echo "{$pid}: Commit update transaction! <br>";
} catch (PDOException $e) {
    $db->rollBack();
    echo "{$pid}: error transaction: ", $e->getMessage(), '<br>';
}
