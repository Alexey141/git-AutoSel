<?php require_once 'connect.php'; 
$name = $_POST['name'];
$phone = $_POST['phone'];
mysqli_query($connect, "INSERT INTO `application` (`name`, `phone`) VALUES ('$name', '$phone')");
header('location: lk.php')
?> 