<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
 <body link="black" vlink="black" alink="black">
 <script>
	function myFunction() {
	  // Объявить переменные
	  var input, filter, ul, li, a, i;
	  input = document.getElementById("mySearch");
	  filter = input.value.toUpperCase();
	  ul = document.getElementById("myMenu");
	  li = ul.getElementsByTagName("li");

	  // Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
	  for (i = 0; i < li.length; i++) {
		a = li[i].getElementsByTagName("a")[0];
		if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
		  li[i].style.display = "";
		} else {
		  li[i].style.display = "none";
		}
	  }
	}
</script>
	<div id ="left">
		<h2><p>Автомобили</p></h2>
		<div class="font">
			<a href = "main.php">Главная<br></a>  
			<a href = "workes.php">Сотрудники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
		  </div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
	</div>
		<div id="right"><br>
		
		<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Поиск">
		<ul id="myMenu">
			<li><a href="carsMerc.php">Mercedes</a></li>
			<li><a href="carsBMW.php">BMW</a></li>
			<li><a href="carsAudi.php">Audi</a></li>
			<li><a href="carsVols.php">Volkswagen</a></li>
		</ul>
	<center>	
			
			
			<div class="product-item">
				<img src="http://s43.radikal.ru/i100/0908/3b/0827cda89093.jpg">
				<div class="product-list">
				<center>
					<table>
		
						<tr>
						<?php 
							$cont = mysqli_query($connect, "SELECT * FROM `autoname` WHERE id_name = '2'");
							$cont = mysqli_fetch_all($cont);
							foreach ($cont as $conts) 
							{	
						?>
							
							<tr>
								<td><?= $conts[1] ?></td>
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
					<a href="#zatemnenie" class="button">Подробнее</a>
				</div>
			</div>
			
			<br>
			
		</div>
	</center>	
  </body>
</html>