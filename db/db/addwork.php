<?php require_once 'connect.php'; 
$Name = $_POST['Name'];
$phone = $_POST['phone'];
mysqli_query($connect, "INSERT INTO `workers` (`Name`, `phone`) VALUES ('$Name', '$phone')");
header('location: workesEdit.php')
?> 