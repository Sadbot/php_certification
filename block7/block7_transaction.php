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
    echo "{$pid}: error db: ", $e->getMessage(), "<br>";
}

try {
    echo "{$pid}: Begin Transaction! <br>";

    $db->exec("SET TRANSACTION ISOLATION LEVEL READ UNCOMMITTED");

    $db->beginTransaction();

    $stmt = $db->query("SELECT `enum` FROM `persons` WHERE id=1");
    $stmt->execute();
    $num = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "{$pid}: enum = {$num['enum']} <br>";

    sleep(2);

    $stmt = $db->prepare("UPDATE `persons` SET `enum`=:num WHERE `id`=1");
    $stmt->execute(['num'=>++$num['enum']]);

    echo "{$pid}: enum = {$num['enum']} <br>";

    $db->commit();

    echo "{$pid}: Commit update transaction! <br>";
} catch (PDOException $e) {
    $db->rollBack();
    echo "{$pid}: error transaction: ", $e->getMessage(), "<br>";
}
