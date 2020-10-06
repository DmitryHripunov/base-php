<?php
$result3 = [
    'authors' => [
        'fedor@com'              => [
            'authorName'      => 'Федор Михайлович Достоевский',
            'authorYearBirth' => '1821 г. р.',
        ], 'acutagava@email.com' => [
            'authorName'      => 'Акутагава, Рюноскэ',
            'authorYearBirth' => '1892 г. р.',
        ], 'jack@mail.com'       => [
            'authorName' => 'Джек Лондон', 'authorYearBirth' => '1876 г. р.',
        ], 'thehov@mail.ru'      => [
            'authorName'      => 'Антон Павлович Чехов',
            'authorYearBirth' => '1860 г. р.',
        ],
    ],

    'books' => [
        [
            'bookName' => 'БЕСЫ', 'authorEmail' => 'fedor@com',
        ], [
            'bookName'    => 'В стране водяных',
            'authorEmail' => 'acutagava@email.com',
        ], [
            'bookName' => 'Мартин Иден', 'authorEmail' => 'jack@mail.com',
        ], [
            'bookName' => 'Черный Монах', 'authorEmail' => 'thehov@mail.ru',
        ],
    ],
];

foreach ($result3['books'] as $valueBook) {
    $authorKey
        = $result3['authors'][$valueBook['authorEmail']]; // сохраняем в переменную email авторов

    echo 'Книга ' . $valueBook['bookName'] . ', ее написал '
        . $authorKey['authorName'] . '
  ' . $authorKey['authorYearBirth'] . ' (' . $valueBook['authorEmail'] . ') <br>';
}


//перемешиваем книги
shuffle($result3['books']);

foreach ($result3['books'] as $valueBook) {
    $authorKey
        = $result3['authors'][$valueBook['authorEmail']]; // сохраняем в переменную email авторов

    echo 'Книга ' . $valueBook['bookName'] . ', ее написал '
        . $authorKey['authorName'] . '
  ' . $authorKey['authorYearBirth'] . ' (' . $valueBook['authorEmail'] . ') <br>';
}
