<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
 <body link="black" vlink="black" alink="black">
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
		<div class="area">Автомобили</div>
		<br>
			<table>
					<tr>
						<th>№</th>
						<th>Марка</th>
						<th>Год</th>
						<th>Двигатель</th>
						<th>Мощность</th>
						<th>Трансмиссия</th>
						<th>Привод</th>
						<th>Тип кузова</th>
						<th>Цвет</th>
						<th>Пробег, км</th>
						<th>Руль</th>
					</tr>
					<tr>
						<?php 
							$cont = mysqli_query($connect, "SELECT * FROM `cars`");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts) 
							{
						?>
					<tr>
						<td><?= $conts[0] ?></td>
						<td><?= $conts[1] ?></td>
						<td><?= $conts[2] ?></td>
						<td><?= $conts[3] ?></td>
						<td><?= $conts[4] ?></td>
						<td><?= $conts[5] ?></td>
						<td><?= $conts[6] ?></td>
						<td><?= $conts[7] ?></td>
						<td><?= $conts[8] ?></td>
						<td><?= $conts[9] ?></td>
						<td><?= $conts[10] ?></td>
						<td><a href="updateauto.php?id=<?= $conts[0] ?>" style="color: #53DF00">Изменить</a></td>
						<td><a href="deleteauto.php?id=<?= $conts[0] ?>" style="color: red">Удалить</a></td>
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
				<form action="addauto.php" method="post">
					<h2>Добавить новый автомобиль</h2>
					<br>
					<input class="" type="text" name="marka" id="marka" placeholder="Введите марку" required><br><br>
					<input class="" type="text" name="yers" id="yers" placeholder="Введите год"required><br><br>
					<input class="" type="text" name="engine" id="engine" placeholder="Введите двигатель"required><br><br>
					<input class="" type="text" name="power" id="power" placeholder="Введите мощность"required><br><br>
					<input class="" type="text" name="transmission" id="transmission" placeholder="Введите трансмиссию"required><br><br>
					<input class="" type="text" name="privod" id="privod" placeholder="Введите привод"required><br><br>
					<input class="" type="text" name="type" id="type" placeholder="Введите тип кузова"required><br><br>
					<input class="" type="text" name="color" id="color" placeholder="Введите цвет"required><br><br>
					<input class="" type="text" name="mileage" id="mileage" placeholder="Введите пробег"required><br><br>
					<input class="" type="text" name="rudder" id="rudder" placeholder="Введите руль(сторона)"required><br><br>
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