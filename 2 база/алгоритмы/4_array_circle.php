<?php

$data = [1, 2, 3, 4, 5];

$tmp = $data[count($data) - 1];
for ($i = count($data) - 1; $i > 0; $i--) {
    $data[$i] = $data[$i - 1];
}
$data[0] = $tmp;

//array_unshift($data, array_pop($data));

var_dump($data);