<?php

$input = file('input.txt');

function part1($input) {
    array_walk($input, fn(&$item, $i) => $item = array_sum(array_slice($input, $i, 3)));
    array_walk($input, fn(&$item, $i) => $item = (int) ($i > 0 && $item > $input[$i-1]));
    echo array_sum($input);
}

part1($input);