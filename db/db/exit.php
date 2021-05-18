<?php 
	setcookie('user', $user['name'], time() - 3600 * 2 * 24, "/");
	header('Location: main.php');
?>