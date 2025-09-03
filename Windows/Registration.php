<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Создание учетной записи</title>
	<link rel="stylesheet" type="text/css" href="../Styles/GeneralStyle.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
	<div class="wrapper">
		<form method="post" action="../Include/reg.php" autocomplete="off">
			<h1>Регистрация</h1>
			<div class="input-box">
				<input type="text" name="inpLogin" placeholder="Логин" maxlength="35" required />
				<i class="bx bxs-user"></i>
			</div>
			<div class="input-box">
				<input type="email" name="inpEmail" placeholder="Почта" maxlength="50" required />
				<i class='bx bxs-envelope'></i>
			</div>
			<div class="input-box">
				<input type="password" name="inpPassword" id="inpPassword" placeholder="Пароль" maxlength="35" required />
				<i class="bx bxs-lock-alt"></i>				
			</div>
			<div class="show-forgot-password">
				<label><input type="checkbox" name="chbShowPassword" onclick="VisibleForPassword()"/>Показать пароль</label>				
			</div>
			<div class="input-box password-repeat">
				<input type="password" name="inpRepeatPassword" id="inpPasswordReplay" placeholder="Повторите пароль" maxlength="35" required />
				<i class="bx bxs-lock-alt"></i>				
			</div>
			<div class="show-forgot-password">
				<label><input type="checkbox" name="chbShowPasswordReplay" onclick="VisibleForPasswordReplay()" />Показать пароль</label>
			</div>
			<div class="permission">
				<label><input type="checkbox" name="chbPermission"/>Согласие на обработку данных</label>	
				<i class='bx bxs-analyse'></i>			
			</div>
			<button type="submit" class="btnAuthorization">Создать</button>
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
		function VisibleForPasswordReplay(){
			var password = document.getElementById("inpPasswordReplay");
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
