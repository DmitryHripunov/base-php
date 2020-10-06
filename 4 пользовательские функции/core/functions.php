<?php

namespace date;
/**
 * функция возвращает текущее значение года в полном формате
 *
 * @return string значение текущего года в формате string
 */
function getDate(): string {
    return date('Y');
}

namespace titlesMenu;
/**
 * функция возвращает название класса в зависимости от условия
 *
 * @param string $path активный путь url
 *
 * @return string $style класс заданный пользователем
 */
function getClassLink($path): string {
    $style  = 'nav-menu';

    if(!isCurrentUrl($path)) {
        return $style;
    }
    return $style . ' nav-menu-active';
}

/**
 * функция возвращает список меню
 *
 * @param array  $menu   ассоциативный массив
 * @param string $sort   ключ ассотивного массива
 * @param bool   $isSort вспомогательная переменная для сортировки массива
 * @param string $ulClass    '' добавляется пользователем название класса
 *
 * @return string $route шаблон меню
 */
function getMenu($menu, $sort, $isSort = true, $ulClass = ''): string {
    usort($menu, function($a, $b) use ($menu, $sort, $isSort) {
        return $isSort ? $a[$sort] < $b[$sort] : $a[$sort] > $b[$sort];
    });

    return include $_SERVER['DOCUMENT_ROOT'] . '/template/menuList.php';
}

/**
 * функция возвращает заголовок активного раздела меню
 *
 * @param array  $menu  ассоциативный массив
 * @param string $path  ключ ассоциативного массива url путь
 * @param string $title ключ ассоциативного массива заголовок
 *
 * @return string заголовок
 */
function getTitle($menu, $path, $title) : string {
    $mainTitle = "Страница не найдена";
    foreach ($menu as $key) {
        if(isCurrentUrl($key[$path])) {
         $mainTitle = $key[$title];
         break;
        }
    }
    return $mainTitle;
}

/**
 * функция возвращает URI, который был предоставлен для доступа к этой странице.
 *
 * @param string $url активная страница
 *
 * @return string URI, который был предоставлен для доступа к этой странице
 */
function isCurrentUrl($url) : string {
    return  $url == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

//function createStr($title) {
//    return mb_strimwidth($title, 0, 15, "...");
//}
