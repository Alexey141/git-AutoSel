<?php require_once 'connect.php'; 
$marka = $_POST['marka'];
$yers = $_POST['yers'];
$engine = $_POST['engine'];
$power = $_POST['power'];
$transmission = $_POST['transmission'];
$privod = $_POST['privod'];
$type = $_POST['type'];
$color = $_POST['color'];
$mileage = $_POST['mileage'];
$rudder = $_POST['rudder'];
mysqli_query($connect, "INSERT INTO `cars` (`marka`, `yers`, `engine`, `power`, `transmission`, `privod`, `type`, `color`, `mileage`, `rudder`) VALUES 
	('$marka', '$yers', '$engine', '$power', '$transmission', '$privod', '$type', '$color', '$mileage', '$rudder')");
header('location: autoEdit.php')
?> 