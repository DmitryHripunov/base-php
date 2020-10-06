<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data/mainMenu.php';

$sendAuth = isset($_POST['send']);
$getLogin = isset($_GET['login']) && $_GET['login'] == 'yes';

if($sendAuth) {
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

<body>
<header class="header">
	<a href="/" class="logo"><img src="/img/logo.png" width="68" height="23"
						alt="Project"
		> </a>

	<div class="clearfix">
		<div class="clear">
      <?php
        titlesMenu\getMenu($mainMenu, 'sort', $isSort = false, 'main-menu')
      ?>
		</div>
	</div>

	<table class="auth-table" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="right-collum-index">
				<div class="project-folders-menu">
					<ul class="project-folders-v ">
						<li <?= $getLogin ? 'class="project-folders-v-active"' : '' ?>
										class="project-folders"
						>
							<a href="/?login=yes">&nbsp;Авторизация</a>
						</li>

						<li>
							<a href="#">Регистрация</a>
						</li>

						<li>
							<a href="#">Забыли пароль?</a>
						</li>
					</ul>

            <?php if($getLogin) { ?>
							<div class="index-auth">
								<form class=auth-form action="/?login=yes" method="post">
									<table width="100%" border="0" cellspacing="0" cellpadding="0"
									>
										<tr>
											<td class="iat">

												<label for="login_id">Ваш e-mail:</label>

												<input id="login_id" size="30" name="login"
																value="<?= $_POST['login'] ?? '' ?>"
												>
											</td>
										</tr>

										<tr>
											<td class="iat">
												<label for="password_id">Ваш пароль:</label>

												<input id="password_id" size="30" value=""
																type="password" name="password"
												>
											</td>
										</tr>

										<tr>
											<td>
												<input class="form-submit" type="submit" value="Войти"
																name="send"
												>
											</td>
										</tr>
									</table>
								</form>
							</div>

                <?php
                if($sendAuth) {
                    if($isAuth) {
                        include $_SERVER['DOCUMENT_ROOT'] .
                            '/include/success.php';
                    } else {
                        include $_SERVER['DOCUMENT_ROOT'] .
                            '/include/error.php';
                    }
                }
            } ?>

					<div class="clearfix"></div>
				</div>
			</td>
		</tr>
	</table>

	<div class="left-collum-index">
		<h1><?= titlesMenu\getTitle($mainMenu, 'path', 'title')?></h1>
	</div>

</header>

