<?php
$splBeginTime = microtime(true);

$a = new SplFixedArray(100000);
$count = 100000;

for ($i = 0; $i < $count; $i++) {
//    $a->setSize($i+1);

    $a[$i] = $i;
}
$spltime = bcsub(microtime(true), $splBeginTime, 5);
echo "SPL array with 100000 elements ", $spltime, "<br/>";


$arrBeginTime = microtime(true);

$b = [];

for ($i = 0; $i < $count; $i++) {
    $b[$i] = $i;
}

$arrtime = bcsub(microtime(true), $arrBeginTime, 5);
echo "array with 100000 elements ", $arrtime, "<br/>";


echo "Difference: ", bcdiv($spltime, $arrtime, 5), "%";