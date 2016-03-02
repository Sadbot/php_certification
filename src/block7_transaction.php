<?php

$pid = getmypid();

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=UTF8;', 'root', '071293', [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_AUTOCOMMIT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    echo "{$pid}: Begin Transaction! \n";
    $db->beginTransaction();
    $db->exec("UPDATE `persons` SET `name`='Transaction',`surname`='Transaction',`gender`=0 WHERE id>=10 AND id<=11");
    $db->exec("UPDATE `persons` SET `name`='Ivan',`surname`='Ivanov',`gender`=1 WHERE `id`=1");

//    sleep(5);

    $db->commit();
    echo "{$pid}: Commit transaction! \n";
} catch (PDOException $e) {
    echo "{$pid}: error db: ", $e->getMessage(), "\n";
} catch (Exception $e) {
    $db->rollBack();
    echo "{$pid}: Error: ", $e->getMessage(), "\n";

}