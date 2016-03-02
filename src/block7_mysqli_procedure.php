<?php

$mysqli = mysqli_connect('localhost', 'root', '071293', 'test');

if (!$mysqli) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    die();
}

$id = 1;

$stmt = mysqli_prepare($mysqli, "SELECT id,name FROM test WHERE id = ? LIMIT 15");

if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'i', $id);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $col1, $col2);

    while (mysqli_stmt_fetch($stmt)) {
        printf("%d %s\n", $col1, $col2);
    }

    mysqli_stmt_close($stmt);
}


mysqli_close($mysqli);