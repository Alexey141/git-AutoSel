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
			<a href = "autoEdit.php">Назад<br></a>
		</div>
		<div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		</div>
	</div>
		<div id="right"><br>
				<?php 
					$id = $_GET['id'];
					$name = mysqli_query($connect, "SELECT * FROM `cars` WHERE `id` = '$id'");
					$name = mysqli_fetch_assoc($name);
				?>

				<center>
						<form action="updateauto2.php" method="post">
							<h2>Изменение выбранного автомобиля</h2><br>
							<input type="number" name="id" value="<?= $name['id'] ?>"><br><br>
							<input type="text" name="marka" placeholder="Введите марку" value="<?= $name['marka'] ?>"><br><br>
							<input type="text" name="yers" placeholder="Введите год" value="<?= $name['yers'] ?>"><br><br>
							<input type="text" name="engine" placeholder="Введите двигатель" value="<?= $name['engine'] ?>"><br><br>
							<input type="text" name="power" placeholder="Введите мощность" value="<?= $name['power'] ?>"><br><br>
							<input type="text" name="transmission" placeholder="Введите трансмиссию" value="<?= $name['transmission'] ?>"><br><br>
							<input type="text" name="privod" placeholder="Введите привод" value="<?= $name['privod'] ?>"><br><br>
							<input type="text" name="type" placeholder="Введите тип кузова" value="<?= $name['type'] ?>"><br><br>
							<input type="text" name="color" placeholder="Введите цвет" value="<?= $name['color'] ?>"><br><br>
							<input type="text" name="mileage" placeholder="Введите пробег" value="<?= $name['mileage'] ?>"><br><br>
							<input type="text" name="rudder" placeholder="Введите руль(сторона)" value="<?= $name['rudder'] ?>"><br><br>
							<div class="product-item">
							<div class="product-list">
								<button type="submit" class="button">Изменить</button>
							</div>
							</div>
						</form>	
				</center>
		</div>	
  </body>
</html>