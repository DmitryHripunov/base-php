<?php
$sendForm = isset($_POST['send']);
$getLogin = isset($_GET['login']) && $_GET['login'] == 'yes';

if($sendForm) {
    include $_SERVER['DOCUMENT_ROOT'] . '/data/usersLogin.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/data/usersPassword.php';
    $indexLogin = array_search($_POST['login'], $usersLogin);
    $isAuth     = $indexLogin !== false &&
        $_POST['password'] == $usersPassword[$indexLogin];
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/css/styles.css" rel="stylesheet">
    <script src="/js/main.js" defer></script>
    <title>Project - ведение списков</title>
</head>