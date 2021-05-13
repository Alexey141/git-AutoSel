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
			<a href = "workesEdit.php">Назад<br></a>
		</div>
		<div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		</div>
	</div>
		<div id="right"><br>
				<?php 
					$id = $_GET['id'];
					$name = mysqli_query($connect, "SELECT * FROM `workers` WHERE `id` = '$id'");
					$name = mysqli_fetch_assoc($name);
				?>

				<center>
						<form action="updatework2.php" method="post">
							<h2>Изменение выбранного Сотрудника</h2><br>
							<input type="number" name="id" value="<?= $name['id'] ?>"><br><br>
							<input type="text" name="Name" placeholder="Введите Имя" value="<?= $name['Name'] ?>"><br><br>
							<input type="text" id="phone" name="phone" placeholder="Введите телефон" value="<?= $name['phone'] ?>"><br><br>	
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