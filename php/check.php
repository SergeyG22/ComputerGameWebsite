<?php

$checkout = $_POST['rememberme'];

if($checkout == 'on'){
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['log']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pwd']),FILTER_SANITIZE_STRING);

	 if(mb_strlen($email) < 5 || mb_strlen($email) > 50) {
		header('Location: /index-registry-email-incorrect.html');
		exit();
	}	
	else if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
		header('Location: /index-registry-login-incorrect.html');
		exit();
	}
	else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 50) {
		header('Location: /index-registry-password-incorrect.html');
		exit();
	}
	
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "mysql";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "CREATE TABLE `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`email` varchar(55) NOT NULL,
    `username` varchar(25) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;";

if ($conn->query($sql)) {
   echo "Таблица users создана успешно!";
}

$pass = md5($pass."h4vsptklb7");
$conn->query("INSERT INTO users(email, username, password) VALUES('$email', '$login', '$pass')");

$conn->close();

header('Location: /index-registry-completed.html');

 }
 else{
	header('Location: /index-registry.html'); 
 }
	
?>