<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
 <body link="black" vlink="black" alink="black">
 <script>
		$(function(){
			$("#phone").mask("7 (999) 999-99-99");
		});
</script>
	<div id ="left">
		<h2><p>Изменение данных</p></h2>
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
			<div class="area">Сотрудники</div>
			<br>
			<table>
					<tr>
						<th>№</th>
						<th>Имя</th>
						<th>Телефон</th>
					</tr>
					<tr>
						<?php 
							$cont = mysqli_query($connect, "SELECT * FROM `workers`");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts) 
							{
						?>
					<tr>
						<td><?= $conts[0] ?></td>
						<td><?= $conts[1] ?></td>
						<td><?= $conts[2] ?></td>
						<td><a href="updatework.php?id=<?= $conts[0] ?>" style="color: #53DF00">Изменить</a></td>
						<td><a href="deletework.php?id=<?= $conts[0] ?>" style="color: red">Удалить</a></td>
					</tr>
						<?php
							}
						?>
					</tr>
			</table>
			</center>
			<div class="sprava">
				<a href="#zatemnenie" class="bat btn4">Добавить</a>
			</div>
			<div id="zatemnenie">
			<div id="oknoAdd">
				<form action="addwork.php" method="post">
					<h2>Добавить нового сотрудника</h2>
					<br>
					<input class="" type="text" name="Name" id="Name" placeholder="Введите имя" required><br><br>
					<input type="text" id="phone" name="phone" placeholder="Введите телефон"required><br><br>
					<div class="product-item">
					<div class="product-list">
						<button type="submit" class="button">Добавить</button>
					</div>
					</div>
					<div class="positExit"><a href="#" class="bt" >X</a></div>
				</form>	
			</div>
			</div>
		</div>	
  </body>
</html>