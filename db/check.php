
<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$password = md5($password);
	require_once 'connect.php';
	$connect->query("INSERT INTO `users` (`name`, `phone`, `email`, `password`) VALUES ('$name', '$phone', '$email', '$password')");

	$connect->close();

	header('Location: main.php');
?>