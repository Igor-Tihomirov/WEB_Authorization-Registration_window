<?php
	//Подключение к БД
	require_once('db.php');

	//Получение данных из формы
	$login = $_POST['inpLogin'];
	$password = $_POST['inpPassword'];
	$repeatPassword = $_POST['inpRepeatPassword'];
	$email = $_POST['inpEmail'];
	$permission = $_POST['chbPermission'];

	//Проверка на заполненность полей ввода
	if(empty($login) || empty($password) || empty($repeatPassword) || empty($email) || empty($permission))
	{
		echo "Заполните все поля";
	}
	else
	{
		//Проверка на соответствие двух паролей
		if($password != $repeatPassword)
		{
			echo "Пароли не совпадают";
		}
		else
		{
			//Проверка на отсутствие ползователей с одиннаковыми логинами
			$sql = "SELECT * FROM `Users` WHERE Login = '$login'";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				echo "Пользователь с таким логином уже существует";
			}
			else
			{
				//Хэширование пароля
				$hashedPassword = md5($password);

				//Добавление пользователя в БД
				$sql = "INSERT INTO `Users` (Login, Password, Email) VALUES ('$login', '$hashedPassword', '$email')";
				if($conn->query($sql) === TRUE)
				{
					echo "Успешная регистрация";
				}
				else
				{
					echo "Ошибка: " . $conn->error;
				}				
			}						
		}
	}	
?>