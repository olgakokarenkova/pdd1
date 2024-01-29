<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet" />
	<link href="./css/registr.css" rel="stylesheet" />
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
		<form method="post" action="lkr.php">
			<div class="number-auto">
				<span class="zaivka-text">Введите Фамилию</span>
				<input type="text" name="surname" id="surname" class="pole-number-auto">	
			</div>
			<div class="number-auto">
				<span class="zaivka-text">Введите Имя</span>
				<input type="text" name="name" id="name" class="pole-number-auto">
			</div>
			<div class="number-auto">
				<span class="zaivka-text">Введите Отчество</span>
				<input type="text" name="patronymic" id="patronymic" class="pole-number-auto">	
			</div>
			<div class="number-auto">
				<span class="zaivka-text">Придумайти логин</span>
				<input type="text" name="login" id="login" class="pole-number-auto">	
			</div>
			<div class="number-auto">
				<span class="zaivka-text">Введите электронную почту</span>
				<input type="text" name="email" id="email" class="pole-number-auto">	
			</div>
			<div class="number-auto">
				<span class="zaivka-text">Придумайте пароль</span>
				<input type="password" name="password" id="password" class="pole-number-auto">	
			</div>
			<button class="button-voiti" type="submit" value="Зарегистрироваться">Зарегистрироваться</button>
		</form>
			<div class="social-link"></div>
		</div>
</body>
</html>
