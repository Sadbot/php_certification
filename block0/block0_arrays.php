<?php

$a = [1,2,3];
echo "a = ";
var_dump($a);

$b = [3,2,6];
echo "b = ";
var_dump($b);

$arr1 = ['kludge1'=>'test', 'kludge2'=>'test3', 'kludge6'=>'spoke'];
echo "arr1 = ";
var_dump($arr1);

$arr2 = ['kludge1'=>'test', 'kludge346436'=>'test3'];
echo "arr1 = ";
var_dump($arr1);

echo "a === b";
var_dump($a === $b);
echo "a == b";
var_dump($a == $b);
echo "a < b";
var_dump($a < $b);
echo "a > b";
var_dump($a > $b);
echo "arr1 === arr2";
var_dump($arr1 === $arr2);
echo "arr1 == arr2";
var_dump($arr1 == $arr2);
echo "arr1 < arr2";
var_dump($arr1 < $arr2);
echo "arr1 > arr2";
var_dump($arr1 > $arr2);