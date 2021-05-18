<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" href="style.css">

</head>
<body link="black" vlink="black" alink="black" bgcolor= "#086FA1" >
<center>
	<h2>Регистрация</h2>
<div class="container mt-4">
  <form method="post" action="check.php">

		<input type="text" name="names" id="names" placeholder="Введите ФИО" >
	<br>
	<br>
		<input type="text" name="telephone" id="telephone" placeholder="Введите номер телефона" >
	<br>	
	<br>
		<input type="text" name="inn" id="inn" placeholder="Введите ИНН" >
	<br>
	<br>
		<input type="password" id="password-input" placeholder="Введите пароль" name="password">
	<br>
	<br>	
<div>
	<a href="Main.php" class="button">На главную</a>
	<button class="button button2" type="submit">Зарегистрироваться</button>
</div>	
	<br>
	<br>
<div class="sh">
	<a href="loginhim.php">Eсть аккаунт</a>
</div>
	</center>
  </form>
 </div>
</body>
</html>