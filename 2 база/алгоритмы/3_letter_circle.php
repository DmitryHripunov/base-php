<?php

$word = 'Hello World';

$word = substr($word, strlen($word) - 1, 1) . substr($word, 0, strlen($word) - 1);

echo $word;