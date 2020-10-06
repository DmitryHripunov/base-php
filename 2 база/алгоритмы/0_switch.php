<?php

$a = 1;
$b = 5;

$tmp = $a;
$a   = $b;
$b   = $tmp;


[$a, $b] = [$b, $a];


var_dump($a, $b);
