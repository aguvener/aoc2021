<?php

$file = fopen('input.txt', 'r');

while($val = fgets($file)){
    $arry = explode(" ", $val);
    if ($arry[0] === "up"): @$z -= (int) $arry[1]; elseif ($arry[0] === "down"): @$z += $arry[1]; else: @$x += $arry[1]; endif;
}

print($z * $x).PHP_EOL;