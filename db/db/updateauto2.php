<?php require_once 'connect.php';
$id = $_POST['id'];
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
mysqli_query($connect, "UPDATE `cars` SET  `marka` = '$marka', `yers` = '$yers', `engine` = '$engine', `power` = '$power', `transmission` = '$transmission', `privod` = '$privod', 
`type` = '$type', `color` = '$color', `mileage` = '$mileage', `rudder` = '$rudder' WHERE `cars`.`id` = '$id'");
header('location: autoEdit.php');
?>