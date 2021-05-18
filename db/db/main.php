<?php if(@$_COOKIE['user'] != ''): ?>
<?php require_once 'connect.php'; ?>
<html>
 <head>
          <title>АвтоПодбор</title>
 </head>
	<link rel="stylesheet" href="style.css" type="text/css">
	
  <body link="black" vlink="black" alink="black">
      <div id="left">
          <h2><p>Меню</p></h2>
		  
		  <div class="font">
			<a href = "main.php">Главная<br></a>
			<a href = "workes.php">Сотрудники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
			<a href = "comments.php">Отзывы<br></a>
			<a href = "lk.php">Личный кабинет</a>
			<h4><p>Привествуем вас - <?=$_COOKIE['user']?></p><h4>
		  </div>
		  <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
      </div>
	  
      <div id="right">
	  <center>
        <div class="area">АвтоПодбор</div>
		<div class="txt">
		<p>С умом подходите к выбору автомобиля, а мы вам обязательно в этом поможем</p>  
		</div>
		<h2>Что мы проверяем:</h2> 
		<br><br><br>
		<div class="m1">
		<div class="photo" data-title="Приборы. Проверка правильной работы бортового компьютера и его показаний.">
			<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon.png" alt="">
		</div>
		</div>
		
		<div class="m2">
		<div class="photo" data-title="Впуск. Проверям работу всех электронных систем и механических узлов, контролируемых этими
                                системами.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_1.png" alt="">
		</div>
		</div>
		
		<div class="m3">
		<div class="photo" data-title="Двигатель. Проверка состояния двигателя, замер компрессии.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_2.png" alt="">
		</div>
		</div>
		
		<div class="m4">
		<div class="photo" data-title="КПП. Собственный алгоритм проверки АКПП. Проверка уровня жидкости и компьютерная диагностика.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_4.png" alt="">
		</div>
		</div>
		
		<div class="m5">
		<div class="photo" data-title="АКБ. Проверка даты выпуска, напряжения, срока службы и работоспособности.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_5.png" alt="">
		</div>
		</div>
		
		<div class="m6">
		<div class="photo" data-title="Турбина. Проверка состояния турбины, давления наддува, отсутствия подтеков масла.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_6.png" alt="">
		</div>
		</div>
		
		<div class="m7">
		<div class="photo" data-title="Кузов. Проверка кузова на предмет перекраса, ремонта, снятия-установки элементов.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_7.png" alt="">
		</div>
		</div>
		
		<div class="m8">
		<div class="photo" data-title="Юр. чистоту. Криминалистическая экспертиза автомобиля. Проверка в ГИБДД и Бюро Кредитных Историй.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_8.png" alt="">
		</div>
		</div>
		
		<div class="m9">
		<div class="photo" data-title="Салон. По состоянию салона можно определить отношение человека к автомобилю. Также, не скрыть и
                                использование автомобиля в такси.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_9.png" alt="">
		</div>
		</div>
		
		<div class="m10">
		<div class="photo" data-title="Выпуск. Современные автомобили с нормами токсичности Евро 3 и выше, имеют дорогостоящие элементы
                                в системе выхлопа,
                                такие как нейтрализатор выхлопных газов, стоимость которого достигает 80 тыс руб.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_10.png" alt="">
		</div>
		</div>
		
		<div class="m11">
		<div class="photo" data-title="Колеса. Равномерность износа, дата производства, состояние и марка шин - важный момент при
                                покупке автомобиля.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_11.png" alt="">
		</div>
		</div>
		
		<div class="m12">
		<div class="photo" data-title="Амортизаторы. Это один из самых важных элементов подвески. Они напрямую влияют на управляемость
                                автомобиля,
                                на его устойчивость и плавность хода автомобиля.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_12.png" alt="">
		</div>
		</div>
		
		<div class="m13">
		<div class="photo" data-title="Рулевое управление. Наличие люфтов, течей, стуков в рулевом управлении. Уровень рабочей жидкости,
                                состояние рулевой рейки и работоспособность усилителя руля.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_13.png" alt="">
		</div>
		</div>
		
		<div class="m14">
		<div class="photo" data-title="Тормоза. Проверяем состояние тормозных механизмов, дисков, колодок, антиблокировочной,
                                антипробуксовочной систем и антизаноса.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_14.png" alt="">
		</div>
		</div>
		<img src="photo\3.png">
		<div class="txtmain">
		<p>
			<div class="colortxt">ПОМНИТЕ!</div> Приобретая автомобиль с пробегом — зачастую задача не из простых и связана с большим числом рисков. 
			В большинстве случаев продавцы намеренно скрывают реальное состоянии транспортного средства, тщательно и искусно маскируют недостатки, что позволяет выгоднее продать автомобиль. 
			Особенно часто потенциальным покупателям приходится сталкиваться c автомобилями, которые побывали в ДТП, которые имеют смотанный пробег, технически неисправности, 
			а также угнанные и залоговые автомобили. Именно поэтому перед покупкой необходимо пройти все этапы, связанные с диагностикой автомобиля, чтобы быть уверенным в чистоте сделки. 
		</p>
		</div>
	  </center>
      </div> 
  </body>
</html>

<?php else: ?>

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
			$("#phone1").mask("7 (999) 999-99-99");
		});
	</script>
      <div id="left">
          <h2><p>Меню</p></h2>
		  
		  <div class="font">
			<a href = "main.php">Главная<br></a> 
			<a href = "workes.php">Сотрудники<br></a>
			<a href = "cars.php">Автомобили<br></a>
			<a href = "Company.php">О нас<br></a>
			<a href = "comments.php">Отзывы<br></a>
			<a href = "#zatemnenie">Личный кабинет</a>
		  </div>
		 <div class="posit">
			<h3><p>© АвтоПодбор. Все права защищены.</p></h3>
		  </div>
      </div>
	    
	<div id="zatemnenie">
    <div id="okno">
    <div class="font">Авторизация</div>
		<form method="post" action="auth.php">
			<br>
			<input type="text" required name="name" id="name" placeholder="Введите имя" >
			<br><br>
			
			<input type="text" required name="phone" id="phone" placeholder="Введите номер телефона" >
			<br><br>
			
			<input type="password" required id="password-input" placeholder="Введите пароль" name="password">
			<br><br>
			
			<button class="bt" type="submit">Войти</button>
			<br>
			
			<div class="positExit"><a href="#" class="bt" >X</a></div>
			<div class="positReg">
				<a href="#zatemnenie2" class="bt6">Зарегистрироваться</a>
			</div>
		</form>
    </div>
    </div>
	
	<div id="zatemnenie2">
    <div id="okno2">
	<div class="font">Регистрация</div>
		<form method="post" action="check.php">
			<br>
			<input type="text" required name="name" id="name" placeholder="Введите имя" >
			<br><br>
			
			<input type="text" required name="phone" id="phone1" placeholder="Введите номер телефона" >
			<br><br>
			
			<input type="text" required name="email" id="email" placeholder="Введите почту" >
			<br><br>
			
			<input type="password" required id="password-input" placeholder="Введите пароль" name="password">
			<br><br>
			<button class="bt" type="submit">Зарегистрироваться</button><br>
			
			<div class="positExit"><a href="#" class="bt" >X</a></div>
			<div class="positLog">
				<a href="#zatemnenie" class="bt6">Eсть аккаунт</a>
			</div>
		</form>
	</div>
	</div>

      <div id="right">
	  <center>
        <div class="area">АвтоПодбор</div>
		<div class="txt">
		<p>С умом подходите к выбору автомобиля, а мы вам обязательно в этом поможем</p>  
		</div>
		<h2>Что мы проверяем:</h2> 
		<br><br><br>
		<div class="m1">
		<div class="photo" data-title="Приборы. Проверка правильной работы бортового компьютера и его показаний.">
			<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon.png" alt="">
		</div>
		</div>
		
		<div class="m2">
		<div class="photo" data-title="Впуск. Проверям работу всех электронных систем и механических узлов, контролируемых этими
                                системами.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_1.png" alt="">
		</div>
		</div>
		
		<div class="m3">
		<div class="photo" data-title="Двигатель. Проверка состояния двигателя, замер компрессии.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_2.png" alt="">
		</div>
		</div>
		
		<div class="m4">
		<div class="photo" data-title="КПП. Собственный алгоритм проверки АКПП. Проверка уровня жидкости и компьютерная диагностика.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_4.png" alt="">
		</div>
		</div>
		
		<div class="m5">
		<div class="photo" data-title="АКБ. Проверка даты выпуска, напряжения, срока службы и работоспособности.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_5.png" alt="">
		</div>
		</div>
		
		<div class="m6">
		<div class="photo" data-title="Турбина. Проверка состояния турбины, давления наддува, отсутствия подтеков масла.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_6.png" alt="">
		</div>
		</div>
		
		<div class="m7">
		<div class="photo" data-title="Кузов. Проверка кузова на предмет перекраса, ремонта, снятия-установки элементов.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_7.png" alt="">
		</div>
		</div>
		
		<div class="m8">
		<div class="photo" data-title="Юр. чистоту. Криминалистическая экспертиза автомобиля. Проверка в ГИБДД и Бюро Кредитных Историй.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_8.png" alt="">
		</div>
		</div>
		
		<div class="m9">
		<div class="photo" data-title="Салон. По состоянию салона можно определить отношение человека к автомобилю. Также, не скрыть и
                                использование автомобиля в такси.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_9.png" alt="">
		</div>
		</div>
		
		<div class="m10">
		<div class="photo" data-title="Выпуск. Современные автомобили с нормами токсичности Евро 3 и выше, имеют дорогостоящие элементы
                                в системе выхлопа,
                                такие как нейтрализатор выхлопных газов, стоимость которого достигает 80 тыс руб.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_10.png" alt="">
		</div>
		</div>
		
		<div class="m11">
		<div class="photo" data-title="Колеса. Равномерность износа, дата производства, состояние и марка шин - важный момент при
                                покупке автомобиля.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_11.png" alt="">
		</div>
		</div>
		
		<div class="m12">
		<div class="photo" data-title="Амортизаторы. Это один из самых важных элементов подвески. Они напрямую влияют на управляемость
                                автомобиля,
                                на его устойчивость и плавность хода автомобиля.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_12.png" alt="">
		</div>
		</div>
		
		<div class="m13">
		<div class="photo" data-title="Рулевое управление. Наличие люфтов, течей, стуков в рулевом управлении. Уровень рабочей жидкости,
                                состояние рулевой рейки и работоспособность усилителя руля.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_13.png" alt="">
		</div>
		</div>
		
		<div class="m14">
		<div class="photo" data-title="Тормоза. Проверяем состояние тормозных механизмов, дисков, колодок, антиблокировочной,
                                антипробуксовочной систем и антизаноса.">
		<img src="https://xn----7sbecl2dbcfoo.xn--p1ai/wp-content/themes/v.2.0/images/icon_14.png" alt="">
		</div>
		</div>
		<img src="photo\3.png">
		<div class="txtmain">
		<p>
			<div class="colortxt">ПОМНИТЕ!</div> Приобретая автомобиль с пробегом — зачастую задача не из простых и связана с большим числом рисков. 
			В большинстве случаев продавцы намеренно скрывают реальное состоянии транспортного средства, тщательно и искусно маскируют недостатки, что позволяет выгоднее продать автомобиль. 
			Особенно часто потенциальным покупателям приходится сталкиваться c автомобилями, которые побывали в ДТП, которые имеют смотанный пробег, технически неисправности, 
			а также угнанные и залоговые автомобили. Именно поэтому перед покупкой необходимо пройти все этапы, связанные с диагностикой автомобиля, чтобы быть уверенным в чистоте сделки. 
		</p>
		</div>
	  </center>
      </div> 
  </body>
</html>

<?php endif;?>