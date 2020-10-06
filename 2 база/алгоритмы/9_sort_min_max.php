<?php

$data = [];

for ($i = 0; $i < 10; $i++) {
    $data[] = rand(0, 9);
}

echo implode(' ', $data) . PHP_EOL;

for ($i = 0; $i < count($data) - 1; $i++) {
    $k = $i;
    for ($j = $i + 1; $j < count($data); $j++) {
        if ($data[$k] > $data[$j]) {
            $k = $j;
        }
    }

    $tmp = $data[$k];
    $data[$k] = $data[$i];
    $data[$i] = $tmp;
}

echo implode(' ', $data) . PHP_EOL;
