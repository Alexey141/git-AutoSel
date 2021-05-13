<html>
<head>
	<title>Авторизация</title>
</head>

<link rel="stylesheet" href="style.css" type="text/css">
	
  <body link="black" vlink="black" alink="black">
      <div id="left">
          <h2><p>Авторизация</p></h2>
		  
		  <div class="font">
			<a href = "main.php">Главная<br></a> 
			<a href = "workes.php">Работники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
		  </div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
      </div>
	  
      <div id="right">
	  <center>
		<h2 style="margin: 200px">
			<?php
				$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
				$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
				$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
				$password = md5($password);
				require_once 'connect.php';
				$result = $connect->query("SELECT * FROM `users` WHERE `name` = '$name' AND `phone` = '$phone' AND `password` = '$password'");
				
				$user = $result->fetch_assoc();
				if(@count($user) == 0) {
					echo "<color>Такой пользователь не найден</color>";
					echo "<br>";
					echo "<br>";
					echo "<a href='main.php'>Вернуться</a>";
					exit();
				}
				setcookie('user', $user['name'], time() + 3600 * 2 * 24, "/");
				
				$connect->close();
				header('Location: main.php');
			?>
		</h2>
		</center>
      </div> 
  </body>

</html>
