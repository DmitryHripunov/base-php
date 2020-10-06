<?php

$data = [];

for ($i = 0; $i < 10; $i++) {
    $data[] = rand(0, 9);
}

echo implode(' ', $data) . PHP_EOL;

for ($i = 0; $i < count($data); $i++) {
    for ($j = $i + 1; $j < count($data); $j++) {
        if ($data[$j] < $data[$i]) {
            $tmp = $data[$j];
            $data[$j] = $data[$i];
            $data[$i] = $tmp;
        }
    }
}

echo implode(' ', $data) . PHP_EOL;