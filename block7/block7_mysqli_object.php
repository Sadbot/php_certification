<?php
$mysqli = new mysqli('localhost', 'root', '071293', 'test');

if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    die();
}

if ($stmt = $mysqli->prepare("SELECT id,name FROM test WHERE id=? LIMIT 15")) {
    $id = 1;
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->bind_result($col1, $col2);
    $stmt->fetch();

    $stmt->close();
}

printf("%d %s\n", $col1, $col2);

$mysqli->close();
