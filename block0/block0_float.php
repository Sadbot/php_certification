<?php

$a = "1000000.0000001";
echo 'a = ',$a,"<br/>";

$b = '5346346.1006777';
echo 'b = ', $b, "<br/>";

$c = bcadd($a, $b, 14);
echo 'a+b = ',$c, '<br/>';
$d = bcdiv($a,$b,14);
echo 'a/b = ',$d, '<br/>';
