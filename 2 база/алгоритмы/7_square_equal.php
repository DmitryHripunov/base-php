<?php

//$a * $x ** 2 + $b * $x + $c = 0;

$a = $argv[1];
$b = $argv[2];
$c = $argv[3];

echo "Решаем уравнение: {$a}x ** 2 + {$b}x + $c = 0;" .PHP_EOL;

$D = $b * $b - 4 * $a * $c;

if ($D < 0) {
    echo 'Нет корней уравнения';
} elseif ($D == 0) {
    $x = -$b / 2 / $a;
    echo "У уравнения одно решение: $x";
} else {
    $x1 = (sqrt($D) - $b) / 2 / $a;
    $x2 = (-sqrt($D) - $b) / 2 / $a;
    echo "Корни уравнения: $x1, $x2";
}

// (-b +- sqrt(d)) / 2a

echo PHP_EOL;
