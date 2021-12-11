<?php
$file = fopen('input.txt', 'r');
$prev = 0;
$i = 0;
while($now = fgets($file)){
    if($now > $prev){
        $i++;
    }
    $prev = $now;
}
fclose($file);
echo $i;