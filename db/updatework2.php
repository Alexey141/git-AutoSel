<?php require_once 'connect.php';
$id = $_POST['id'];
$Name = $_POST['Name'];
$phone = $_POST['phone'];
mysqli_query($connect, "UPDATE `workers` SET  `Name` = '$Name', `phone` = '$phone' WHERE `workers`.`id` = '$id'");
header('location: workesEdit.php');
?>