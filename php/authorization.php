<?php

$login = filter_var(trim($_POST['log']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pwd']),FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
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

$pass = md5($pass."h4vsptklb7");

$result = $conn->query("SELECT * FROM users WHERE username ='$login' AND password='$pass'");
$user = $result->fetch_assoc();

if(count($user) == 0){
	header('Location: /index-authorization-failed.html');
	exit();
}

setcookie('user',$user['username'],time() + 3600, "/");

$conn->close();
  header('Location: /php/index.php');
?>