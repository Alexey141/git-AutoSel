<?php require_once 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
mysqli_query($connect, "UPDATE `users` SET  `name` = '$name', `phone` = '$phone', `email` = '$email' WHERE `users`.`id` = '$id'");
header('location: usersEdit.php');
?>