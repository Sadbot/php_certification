<?php
$get = strip_tags($_GET['test']);
$post = htmlentities($_POST['test'], ENT_QUOTES, 'UTF-8');

echo $get, $post;

try {
    $mysql = new PDO('mysql:dbname=test;host=localhost;charset=UTF8', 'root', '071293');
    $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $pe) {
    echo $pe->getMessage();
}

$stmt = $mysql->prepare("INSERT into `test` VALUES (:value)");
$stmt->bindParam(':value', $get, PDO::PARAM_STR);

$stmt->execute();
