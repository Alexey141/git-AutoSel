<?php require_once 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
mysqli_query($connect, "UPDATE `users` SET  `name` = '$name', `phone` = '$phone', `email` = '$email', `password` = '$password' WHERE `users`.`id` = '$id'");
header('location: usersEdit.php');
?>