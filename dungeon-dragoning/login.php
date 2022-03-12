<?php
session_start();
require_once 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];
if($username == '' || $password == ''){
	echo 'CAMPURILE NU POT FI GOALE LMAO';
	$_SESSION['idUser'] = -1;
}else{
$statement = $connection->prepare('SELECT id, password FROM users WHERE username=:username');
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->execute();
$rez = $statement->fetch();
if( $rez['password'] === $password){
	$_SESSION['idUser'] = $rez['id'];
	header("Location: main.php");
}else{
	echo 'PAROLA PROASTA SORRY';
	$_SESSION['idUser'] = -1;
}
}
?>
