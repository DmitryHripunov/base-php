<?php

$data = [];
$size = 3;

for ($i = 0; $i < $size; $i++) {
    $data[$i] = [];
    for ($j = 0; $j < $size; $j++) {
        $data[$i][$j] = rand(0, 9);
    }
}

foreach ($data as $line) {
    echo implode(' ', $line) . PHP_EOL;
}

$sum = 0;
for ($i = 1; $i < $size; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $sum += $data[$i][$j];
    }
}
echo $sum . PHP_EOL;