<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
 <body link="black" vlink="black" alink="black">
	<div id ="left">
		<h2><p>Заявки</p></h2>
		<div class="font">
			<a href = "main.php">Главная<br></a> 
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
			<a href = "lk.php">Назад<br></a>
		</div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
	</div>
		<div id="right"><br>
			<center>
			<div class="area">Заявки</div>
			<br>
			<table>
					<tr>
						<th>№</th>
						<th>Имя</th>
						<th>Телефон</th>
					</tr>
					<tr>
						<?php 
							$cont = mysqli_query($connect, "SELECT * FROM `application`");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts) 
							{
						?>
					<tr>
						<td><?= $conts[0] ?></td>
						<td><?= $conts[1] ?></td>
						<td><?= $conts[2] ?></td>
					</tr>
						<?php
							}
						?>
					</tr>
			</table>
			</center>
		</div>	
  </body>
</html>