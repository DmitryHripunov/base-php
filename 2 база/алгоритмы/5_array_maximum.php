<?php

$data = [];

for ($i = 0; $i < rand(3, 5); $i++) {
    $data[] = rand(0, 9);
}

$index = 0;

foreach ($data as $i => $value) {
    if ($value > $data[$index]) {
        $index = $i;
    }
}


var_dump($data);
echo PHP_EOL;
echo "$index => {$data[$index]}" . PHP_EOL;