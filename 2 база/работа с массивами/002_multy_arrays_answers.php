<?php
// Многомерные массивы

// 1. Создайте массив matrix целых чисел от 1 до 9 в виде матрицы 3х3
// # Момент на видео 13:05
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

// 2. Выведите центральный элемент (на строке 2 в столбце 2) из этой матрицы
// # Момент на видео 15:28
var_dump($matrix[1][1]);

// 3. Выведите последний элемент в первой строке из этой матрицы
var_dump($matrix[0][2]);

// 4. Выведите сумму элементов из этой матрицы, расположенных ниже и левее диагонали 1 5 9
var_dump($matrix[1][0] + $matrix[2][0] + $matrix[2][1]);

// 5. Создайте массив, users описывающий следующих пользователей
// - Никита, 29 лет, плотник
// - Вася, 13 лет, футболист
// - Николай Николаевич, 77 лет, профессиональный игрок в DotA
// Массив должен быть ассоциативным с полями: имя, возраст, профессия
// # Момент на видео 13:05
$users = [
    [
        'name' => 'Никита',
        'age' => 29,
        'profession' => 'плотник',
    ],
    [
        'name' => 'Вася',
        'age' => 13,
        'profession' => 'плотник',
    ],
    [
        'name' => 'Николай Николаевич',
        'age' => 77,
        'profession' => 'профессиональный игрок в DotA',
    ],
];

// 6. Добавьте в массив users еще одного участника: Виталий, 30 лет, программист
// # Момент на видео 17:12
$users[] = [
    'name' => 'Виталий',
    'age' => 30,
    'profession' => 'программист',
];

// 7. Создайте массив, описывающий загадочного пользователя (mysteriousUser) - с тем же набором полей, что и в массиве users
// В качестве имени укажите ему имя 3-го пользователя из массива users
// В качестве возраста, выберите ему возраст первого пользователя из массива users
// А профессию укажите из 2-го пользователя
// и выведите его на экран
$mysteriousUser = [
    'name' => $users[2]['name'],
    'age' => $users[0]['age'],
    'profession' => $users[1]['profession'],
];
var_dump($mysteriousUser);
