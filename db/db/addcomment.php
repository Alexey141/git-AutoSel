<?php require_once 'connect.php'; 
$name = $_POST['name'];
$comment = $_POST['comment'];
mysqli_query($connect, "INSERT INTO `comments` (`name`, `comment`) VALUES ('$name', '$comment')");
header('location: lk.php')
?> 