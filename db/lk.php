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
			<a href="exit.php">Выход</a>
			<h4><p>Привествуем вас - <?=$_COOKIE['user']?></p></h4>
		  </div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
      </div>
	  
      <div id="right">
	  <center>
        <div class="area">Личный кабинет</div>
		<div class="middle">
		  <h2>Редактирование</h2>
		  <a href="workesEdit.php" class="btn btn1">Сотрудники</a>
		  <a href="autoEdit.php" class="btn btn2">Автомобили</a>
		  <a href="usersEdit.php" class="btn btn3">Пользователи</a>
		</div>
		
		<div class="centr">
		  <h2>Заявки</h2>
		  <a href="" class="btn btn1">Рассматриваемые</a>
		  <a href="" class="btn btn2">Принятые</a>
		  <a href="" class="btn btn3">Отклонённые</a>
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
	
  <body link="black" vlink="black" alink="black">
      <div id="left">
          <h2><p>Личный кабинет</p></h2>
		  
		  <div class="font">
			<a href = "main.php">Главная<br></a>  
			<a href = "workes.php">Сотрудники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
			<a href="exit.php">Выход</a>
			<h4><p>Привествуем вас - <?=$_COOKIE['user']?></p><h4>
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
			
			<div class="centr">
				<h2>Отзывы</h2>
				<a href="workes.php" class="btn btn1">Написать отзыв</a>
				<a href="workesEdit.php" class="btn btn1">Мои отзывы</a>
			</div>
				
			<div class="middle">
				<h2>Заявки</h2>
				<a href="" class="btn btn1">Подать заявку</a>
				<a href="" class="btn btn1">Все заявки</a>
			</div>
	  </center>
      </div> 
  </body>
</html>

<?php endif;?>