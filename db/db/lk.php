<?php if(@$_COOKIE['user'] == 'Admin'): ?>
<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
	
  <body link="black" vlink="black" alink="black">
      <div id="left">
          <h2><p>Личный кабинет</p></h2>
		  
		  <div class="font">
			<a href = "main.php">Главная<br></a> 
			<a href = "workes.php">Сотрудники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
			<a href = "comments.php">Отзывы<br></a>
			<h4><p>Привествуем вас - <?=$_COOKIE['user']?></p></h4>
			<a href="exit.php">Выход</a>
		  </div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
      </div>
	  
      <div id="right">
	  <center>
        <div class="area">Личный кабинет администратора</div>
		<div class="leftlk">
		  <h2>Редактирование</h2>
		  <a href="workesEdit.php" class="btn btn1">Сотрудники</a>
		  <a href="autoEdit.php" class="btn btn2">Автомобили</a>
		  <a href="usersEdit.php" class="btn btn3">Пользователи</a>
		  <a href="applicEdit.php" class="btn btn1">Заявки на звонок</a>
		</div>
	  </center>
      </div> 
	  
  </body>
</html>

<?php else: ?>

<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script>
		$(function(){
			$("#phone").mask("7 (999) 999-99-99");
		});
	</script>
	
  <body link="black" vlink="black" alink="black">
      <div id="left">
          <h2><p>Личный кабинет</p></h2>
		  
		  <div class="font">
			<a href = "main.php">Главная<br></a>  
			<a href = "workes.php">Сотрудники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
			<a href = "comments.php">Отзывы<br></a>
			<h4><p>Привествуем вас - <?=$_COOKIE['user']?></p></h4>
			<a href="exit.php">Выход</a>
		  </div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
      </div>
	  
      <div id="right">
	  <center>
	  <div class="area">Личный кабинет</div>	
		<table>
					<tr>
						<th>Имя</th>
						<th>Телефон</th>
						<th>Почта</th>
					</tr>
					<tr>
						<?php 
							$name = $_COOKIE['user'];
							$cont = mysqli_query($connect, "SELECT * FROM `users` WHERE name = '$name' ");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts)
							{
						?>
					<tr>
						<td><?= $conts[1] ?></td>
						<td><?= $conts[2] ?></td>
						<td><?= $conts[3] ?></td>
						<td><a href="updatelk.php?id=<?= $conts[0] ?>" style="color: #53DF00">Изменить</a></td>
					</tr>
						<?php
							}
						?>
					</tr>
		</table>
			
			<div class="leftlk">
				<h2>Доступные функции</h2>
				<a href="#zatemnenie" class="btn btn1">Запросить звонок</a>
				<a href="#zatemnenie2" class="btn btn1">Написать отзыв</a>
			</div>
			
			<div id="zatemnenie">
			<div id="okno">
				<form action="addapplic.php" method="post">
					<h2>Запрос звонка</h2>
					<br>
					<input type="text" name="name" id="name" placeholder="Введите имя" required><br><br>
					<input type="text" name="phone" id="phone" placeholder="Введите телефон"required><br><br>
					<div class="product-item">
					<div class="product-list">
						<button type="submit" class="button">Отправить</button>
					</div>
					</div>
					<div class="positExit"><a href="#" class="bt" >X</a></div>
				</form>	
			</div>
			</div>
			
			<div id="zatemnenie2">
			<div id="okno2">
				<form action="addcomment.php" method="post">
					<h2>Написать отзыв</h2>
					<br>
					<input type="text" name="name" id="name" placeholder="Введите имя" required><br><br>
					<textarea name="comment" id="comment" placeholder="отзыв" required cols="40" rows="10" maxlength="150"></textarea>
					<div class="product-item">
					<div class="product-list">
						<button type="submit" class="button">Отправить</button>
					</div>
					</div>
					<div class="positExit"><a href="#" class="bt" >X</a></div>
				</form>	
			</div>
			</div>
			
	  </center>
      </div> 
  </body>
</html>

<?php endif;?>