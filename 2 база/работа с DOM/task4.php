<?php
$result4 = [
    'authors' => [
        'fedor@com'              => [
            'authorName'      => 'Федор Михайлович Достоевский',
            'authorYearBirth' => '1821 г. р.',
        ],
        'acutagava@email.com' => [
            'authorName'      => 'Акутагава, Рюноскэ',
            'authorYearBirth' => '1892 г. р.',
        ],
        'jack@mail.com'       => [
            'authorName' => 'Джек Лондон', 'authorYearBirth' => '1876 г. р.',
        ],
        'thehov@mail.ru'      => [
            'authorName'      => 'Антон Павлович Чехов',
            'authorYearBirth' => '1860 г. р.',
        ],
    ],

    'books' => [
        [
            'bookName' => 'БЕСЫ', 'authorEmail' => 'fedor@com',
        ],
        [
            'bookName'    => 'В стране водяных',
            'authorEmail' => 'acutagava@email.com',
        ], 
        [
            'bookName' => 'Мартин Иден', 'authorEmail' => 'jack@mail.com',
        ], 
        [
            'bookName' => 'Черный Монах', 'authorEmail' => 'thehov@mail.ru',
        ],
    ],
];

$title = 'Онлайн библиотека';
$red   = (bool)rand(0, 1);
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <style type="text/css">.red {
		  color: red;
	  }</style>
</head>
<body>
  <h1 <?= $red ? 'class="red"' : ' ' ?>>
    <?= $title ?>
  </h1>

  <div>Авторов на портале: <?= count($result4['authors']) ?></div>

  <!-- Выведите все книги -->
  <?php
  foreach ($result4['books'] as $valueBook) {
      $authorKey = $result4['authors'][$valueBook['authorEmail']];

      echo 'Книга ' . $valueBook['bookName'] . ', ее написал '
          . $authorKey ['authorName'] . '
      ' . $authorKey['authorYearBirth'] . ' (' . $valueBook['authorEmail'] . ') <br>';
  }
  ?>

</body>
</html>
