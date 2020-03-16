<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div class="content">
<?php
	include "menu.php";
?>
	<h1>Личный сайт студента GeekBrains</h1>
	<div class="center">
	<img src="Img/photo512.jpg">
		<div class="box_text">
			<p><b>Добрый день!</b>Меня зовут <i>Павел Ремизов</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>
			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains.</a></p>
			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал:
			<a href="riddle.php">Загадки</a>
			<a href="guessingGame.html">Угадайка</a>
			<a href="#">Угадайка мультиплеер</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Pavel Remizov
</div>
	
</body>
</html>