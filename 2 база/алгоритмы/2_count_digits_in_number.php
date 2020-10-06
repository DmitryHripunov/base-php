<?php

$value = 123456781234567890;
$counts = [];

for ($i = 0; $i < 10; $i++) {
    $counts[] = 0;
}

//while ($value > 0) {
//    $counts[$value % 10]++;
//
//    $value = (int) ($value / 10);
//}



foreach (str_split((string) $value) as $number) {
    $counts[$number]++;
}

foreach ($counts as $number => $count) {
    echo "Число $number встретилось $count" . PHP_EOL;
}
