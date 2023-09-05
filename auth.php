<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/auth.css">
	<link rel="shortcut icon" href="img/header/cactus.png" type="image/png">

	<title>cactus</title>
</head>
<body class="authorization">

	<?php
		if(isset($_COOKIE['user']) == false):
	?>
		<form class="form" action="validation/auth.php" method="post">
			<div class="content__form">
				<a href="index.html"><div class="left-arrow"></div></a>
				<h1 class="form__title">Authorization</h1>
			</div>

			<div class="form__group">
				<label class="form__label1">Username</label>
				<input class="form__input1" type="text" id="login" name="login">
			</div>
			<div class="form__group">
				<label class="form__label2">Password</label>
				<input class="form__input2" type="password" id="password" name="password">
			</div>
			<button class="form__button" type="submit">login</button>

			<h1 class="form__password">If you don't have an account, <a href="reg.html" class="link__password">sign up!</a></h1>
		</form>
	<?php else: ?>
		<p class="php__title">Привет <?=$_COOKIE['user']?>. Чтобый выйти нажмите <a class="php__link" href="exit.php">здесь</a>.</p>
	<?php endif;?>
</body>
</html>