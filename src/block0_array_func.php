<?php

$a = array(1, 2, 3);

function test($v)
{
    $v[0] = 77;
    var_dump($v);
}

test($a);
var_dump($a);

