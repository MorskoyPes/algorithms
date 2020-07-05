<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>test1</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="notes.php" method="POST">
		<p>Введите искомый E-mail:</p>
		<input type="text" name="email">
		<input type="submit" value="Искать"><br>
	</form>

	<?php
	//Устанавливаем соединение с бд
		$servername = "localhost";
		$username   = "root";
		$password   = "";
		$database   = "task";


		$mysqli = new mysqli($servername, $username, $password, $database);
		if ($mysqli->connect_error) {
			die("Соединение не удалось: ") . $connection->connect_error;
		}
		//Устанавливаем кодировку, потому что ?????
		$mysqli->set_charset("utf8");

		$email = $_POST['email'];
		//Пишем Join запрос в бд
		$result = $mysqli->query("SELECT u.id as Id,
																		u.email as Email,
																	 i.name as Name,
																	 i.sname as Sname
														 FROM user u INNER JOIN user_info i ON u.id=i.user_id
														 WHERE email = '".$email."'");
		//Проверяем прошел ли запрос
		if (!$result) {
    $message  = 'Неверный запрос: ' . mysql_error() . "\n";
    $message .= 'Запрос целиком: ' . $query;
    die($message);
		}
		//Выводим циклом все значения уже слитой бд
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    	if ($email === $row['Email']){
			echo $row['Email'] . " - " .
    			$row['Name'] . " " .
    			$row['Sname'] . " [id = ".
    			$row['Id'] . "]";
    	}
    	else {
    		echo "Записей для email ".$email." не обнаружено";
    	}
		}
 ?>
</body>
</html>
