<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
 <body link="black" vlink="black" alink="black">
	<div id ="left">
		<h2><p>Сотрудники</p></h2>
		<div class="font">
			<a href = "main.php">Главная<br></a> 
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
		</div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
	</div>
		<div id="right"><br>

			<center>
			<div class="product-item">
				<img src="https://randus.org/photos/m/c7bb3c19bfb71000.jpg">
				<div class="product-list">
				<center>
					<table>
		
						<tr>
						<?php 
							$cont = mysqli_query($connect, "SELECT * FROM `workers` WHERE id = '1'");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts) 
							{
						?>
						
							<tr>
								<td class="name"><?= $conts[1] ?></td>
							</tr>
							<tr>
								<td class="price"><?= $conts[2] ?></td>
							</tr>
						<?php
							}
						?>
						</tr>
					</table>
				</center>	
					<a href=".php" class="button">Отзывы</a>
				</div>
			</div>

			<div class="product-item">
				<img src="https://randus.org/photos/m/000038387c7c38f8.jpg">
				<div class="product-list">
				<center>
					<table>
		
						<tr>
						<?php 
							$cont = mysqli_query($connect, "SELECT * FROM `workers` WHERE id = '2'");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts) 
							{	
						?>
							
							<tr>
								<td class="name"><?= $conts[1] ?></td>
							</tr>
							<tr>
								<td class="price"><?= $conts[2] ?></td>
							</tr>
						<?php
							}
						?>
						</tr>
					</table>
				</center>	
					<a href="#zatemnenie" class="button">Отзывы</a>
				</div>
			</div>
		</div>
	</center>	
  </body>
</html>