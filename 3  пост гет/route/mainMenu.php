<?php
 include $_SERVER['DOCUMENT_ROOT'] . '/route/about.php';

$mainMenu =
     [
        'title' => 'О нас',
        'path' => /route/about.php,
        'sort' => '2',
    ],
    [
        'title' => 'Контакты',
        'path' => /route/contacts.php,
        'sort' => '2',
    ],
    [
        'title' => 'Новости',
        'path' => /route/news.php,
        'sort' => '2',
    ],
    [
        'title' => 'Каталог',
        'path' => /route/catalog.php,
        'sort' => '2',
    ],

?>