<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'; ?>

<body>
<div class="header">
	<div class="logo"><img src="/img/logo.png" width="68" height="23"
						alt="Project"
		>
	</div>

	<div class="clearfix"></div>
</div>

<div class="clear">
	<ul class="main-menu">
		<li>
			<a href="/">Главная</a>
		</li>
		<li>
			<a href="#">О нас</a>
		</li>
		<li>
			<a href="#">Контакты</a>
		</li>
		<li>
			<a href="#">Новости</a>
		</li>
		<li>
			<a href="#">Каталог</a>
		</li>
	</ul>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="left-collum-index">
			<h1>Возможности проекта —</h1>

			<p>
				Вести свои личные списки, например покупки в магазине, цели, задачи и
				многое другое. Делится списками с друзьями и просматривать списки
				друзей. </p>
		</td>

		<td class="right-collum-index">
			<div class="project-folders-menu">
				<ul class="project-folders-v ">
					<li <?=$getLogin  ? 'class="project-folders-v-active"' : '' ?>
									class="project-folders"
					>
						<a href="/?login=yes">Авторизация</a>
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
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
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

											<input id="password_id" size="30" value="" type="password"
															name="password"
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
              if($sendForm) {
                  if($isAuth) {
                      include $_SERVER['DOCUMENT_ROOT'] .
                          '/include/success.php';
                  } else {
                      include $_SERVER['DOCUMENT_ROOT'] . '/include/error.php';
                  }
              }
          } ?>

				<div class="clearfix"></div>
			</div>
		</td>
	</tr>
</table>

<div class="clearfix">
	<ul class="main-menu bottom">
		<li>
			<a href="#">Главная</a>
		</li>
		<li>
			<a href="#">О нас</a>
		</li>
		<li>
			<a href="#">Контакты</a>
		</li>
		<li>
			<a href="#">Новости</a>
		</li>
		<li>
			<a href="#">Каталог</a>
		</li>
	</ul>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'; ?>