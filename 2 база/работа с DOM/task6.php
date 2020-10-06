<?php
$studensCount = rand(1, 1000);

if($studensCount % 10 === 1 && $studensCount % 100 != 11) {
    echo 'на учёбе ' . $studensCount . ' студент';
} elseif($studensCount % 100 === 11) {
    echo 'на учёбе ' . $studensCount . ' студентов';
} elseif($studensCount % 10 >= 2 && $studensCount % 10 <= 4 &&
    $studensCount % 100 != 12 && $studensCount % 100 != 14 &&
    $studensCount % 100 != 13) {
    echo 'на учёбе ' . $studensCount . ' студента';
} else {
    echo 'на учёбе ' . $studensCount . ' студентов';
}