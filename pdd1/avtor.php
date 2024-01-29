<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet" />
	<link href="./css/avtor.css" rel="stylesheet" />
	<title>НАРУШЕНИЯМ.НЕТ</title>
</head>
<body>
	
	<!-- Шапка сайта -->
	<header class="header">
		<a class="header-text-left" href="index.php">
			<span class="header-txt-left">НАРУШЕНИЯМ.НЕТ</span>
			<span class="header-txt-left">Безопасность Уважение Надежность</span>
		</a>
		<div class="header-text-right">
			<div class="header-img-right"></div>
			<span class="header-txt-right">всегда на связи</span>
		</div>
	</header>

	<!-- Оставить заяку -->

	<div class="zaivka">
		<div class="logo"></div>
		<form method="post" action="lk.php">
			<div class="number-auto">
				<span class="zaivka-text">Введите почту</span>
				<input type="email" name="email" class="pole-number-auto">	
			</div>
			<div class="naryshenie">
				<span class="zaivka-text">Введите пароль</span>
				<input type="password" name="password" class="pole-number-auto">
			</div>
			<button class="button-voiti" type="submit" value="Войти">Войти</button>
		</form>
			<div class="social-link"></div>
			<a href="#" class="zaivka-text">Зарегистрироваться</a>
			<a href="#" class="zaivka-text">Забыли пароль?</a>
		</div>

</html>

