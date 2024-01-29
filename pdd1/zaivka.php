<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet" />
	<link href="./css/zaivka.css" rel="stylesheet" />
	<title>НАРУШЕНИЯМ.НЕТ</title>
</head>
<body>
	
	<!-- Шапка сайта -->
	<header class="header">
		<a class="header-text-left" href="indexLK.php">
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
			<form method="post" action="lkz.php">
			<div class="number-auto">
				<span class="zaivka-text">Регистрационный номер автомобиля</span>
				<input type="number" name="number" class="pole-number-auto">	
			</div>
			<div class="naryshenie">
				<span class="zaivka-text">Описание нарушения</span>
				<input type="description" name="description" class="pole-naryshenie">
			</div>
			<button class="button-voiti">Отправить</button>
			</form>
		</div>

</body>
</html>