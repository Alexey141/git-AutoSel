<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
 <body link="black" vlink="black" alink="black">
	<div id ="left">
		<h2><p>Изменение данных</p></h2>
		<div class="font">
			<a href = "usersEdit.php">Назад<br></a>
		</div>
		<div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		</div>
	</div>
		<div id="right"><br>
			<center>
				<h2>
					Вы действительно хотите удалить данные?
				</h2>
			
				<?php
					$mysql = new mysqli('localhost', 'root', '', 'bd_autosel');
					$id = $_GET['id'];
					$result = $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
					$rt = $result->fetch_assoc();
				?>
				<div class="txtDelet">
					<p>Номер пользователя: <?=$rt['id']?></p>
					<p>Имя: <?=$rt['name']?></p>
					<p>Телефон: <?=$rt['phone']?></p>
					<p>Почта: <?=$rt['email']?></p>
				</div>
				
				<?php 
					echo "<a style='padding: 10px; color: #53DF00' href='deletuser2.php?id=$rt[id]'>Удалить</a>"; 
					echo " ";
					echo " ";
					echo " ";
					echo "<a style='color: red' href='usersEdit.php'>Не удалять</a>"
				?>
			</center>
		</div>	
  </body>
</html>