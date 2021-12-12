<?php

$file = fopen('input.txt', 'r');

while($val = fgets($file)){
    $arry = str_split($val);
    for ($i = 0; $i <= 11; $i++){
        @$mrgd[$i] .= $arry[$i];
    }
}

for ($i = 0; $i <= 11; $i++){
    $final = array_count_values(str_split($mrgd[$i]));
    arsort($final);
    @$gamma .= (string) array_keys($final)[0];
    @$epsilon .= (string) array_keys($final)[1];
}

print(bindec($gamma) * bindec($epsilon)).PHP_EOL;