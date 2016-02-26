<?php
//create table test ( id int not null auto_increment, primary key(id), word varchar(255) );

function sqli($get = 1)
{
    try {
        $db = new PDO('mysql:dbname=test;host=localhost;charset=UTF8', 'root', '071293');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $pe) {
        echo $pe->getMessage();
    }

    $sql = "SELECT * from test where id={$get}";
    $stmt = $db->query($sql);

    var_dump($stmt->fetchAll());
}

sqli($_GET['test']);

