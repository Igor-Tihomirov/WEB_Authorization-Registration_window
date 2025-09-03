<?php
	//Подключение к БД
	require_once('db.php');

	//Получение данных из формы
	$login = $_POST['inpLogin'];
	$password = $_POST['inpPassword'];

	//Проверка на заполненность полей ввода
	if(empty($login) || empty($password))
	{
		echo "Заполните все поля";
	}
	else
	{		
		//Хэширование пароля
		$hashedPassword = md5($password);

		//Проверка, существует ли пользователь с таким логином и паролем
		$sql = "SELECT * FROM `Users` WHERE Login = '$login' AND Password = '$hashedPassword'";
		$result = $conn->query($sql);

		if($result->num_rows == 1)
		{			
			echo "Добро пожаловать";
		}
		else
		{
			echo "Вы ввели неправилные логин или пароль";
		}					
	}
?>