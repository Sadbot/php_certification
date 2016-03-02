<?php
$pid = getmypid();

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=UTF8;', 'root', '071293', [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_AUTOCOMMIT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    echo "{$pid}: Begin transaction! \n";

    $db->beginTransaction();

    $select = $db->query("SELECT * FROM `persons` WHERE id=10");

    if (!$select && $db->inTransaction()) {
        echo "{$pid}: Cannot read transacted field! \n";
        $db->rollBack();
    } else {
        echo "{$pid}: Read transacted field! \n";
    }

    $insert = $db->exec("INSERT INTO `persons`(`name`, `surname`, `gender`) VALUES ('Petruha','Petruhin',1)");

    if (!$insert && $db->inTransaction()) {
        echo "{$pid}: Cannot insert new field! \n";
    } else {
        echo "{$pid}: Insert new {$insert} field(s)! \n";
    }

    if ($db->inTransaction()) {
        $db->commit();
        echo "{$pid}: Commit transaction! \n";
    }

} catch (PDOException $e) {
    echo "{$pid}: error db: ", $e->getMessage(), "\n";
} catch (Exception $e) {
    echo "{$pid}: Error: ", $e->getMessage(), "\n";

}