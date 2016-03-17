<?php

umask(0111);

function autoload($className)
{
    $filename = "File/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register("autoload");

$book = new FileObject("book.txt");
var_dump($book->gets(1));
var_dump($book->gets(1));
var_dump($book->gets(1));
var_dump($book->gets(1));

var_dump($book->getErrors());

$test = new FileObject("pob.txt");
var_dump($test->read());

var_dump($test->getErrors());
