<?php

$id = isset($_GET['id']) ? $_GET['id'] : 1;

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=UTF8;', 'root', '071293', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);


    $db->exec("CREATE TABLE IF NOT EXISTS `persons` (
                `id` int NOT NULL AUTO_INCREMENT,
                `name` varchar(25) NOT NULL,
                `surname` varchar(25) NOT NULL,
                `gender` int(1) NOT NULL default 0,
                PRIMARY KEY (`id`)
                ) ENGINE=InnoDB AUTO_INCREMENT=1;");

    $db->exec("INSERT INTO `persons`(`name`, `surname`, `gender`) VALUES ('Ivan','Ivanov',1)");
    $db->exec("INSERT INTO `persons`(`name`, `surname`, `gender`) VALUES ('Natalya','Ivanov',2)");
    $db->exec("INSERT INTO `persons`(`name`, `surname`, `gender`) VALUES ('Andrew','Treskov',1)");

    $stmt = $db->prepare("select * from `persons` where id=? LIMIT 15");
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $result = $stmt->execute();

    if(!$result) {
        throw new Exception('Error in execute!');
    }

    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($arr);

} catch (Exception $e) {
    echo "error db: ", $e->getMessage();
}
