<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Вход в учетную запись</title>
	<link rel="stylesheet" type="text/css" href="../Styles/GeneralStyle.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
	<div class="wrapper">
		<form method="post" action="../Include/auth.php" autocomplete="off">
			<h1>Авторизация</h1>
			<div class="input-box">
				<input type="text" name="inpLogin" placeholder="Логин" maxlength="35" required />
				<i class="bx bxs-user"></i>
			</div>
			<div class="input-box">
				<input type="password" name="inpPassword" id="inpPassword" placeholder="Пароль" maxlength="35" required />
				<i class="bx bxs-lock-alt"></i>
			</div>
			<div class="show-forgot-password">
				<label><input type="checkbox" name="chbShowPassword" onclick="VisibleForPassword()" />Показать пароль</label>
				<a href="#">Забыли пароль?</a>
			</div>
			<button type="submit" class="btnAuthorization">Войти</button>
			<div class="register-link">
				<p>Нет учетной записи? <a href="./Registration.php">Зарегистрироваться</a></p>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		function VisibleForPassword(){
			var password = document.getElementById("inpPassword");
			if(password.type === "password")
			{
				password.type = "text";
			}
			else
			{
				password.type = "password";
			}
		}
	</script>
</body>
</html>

