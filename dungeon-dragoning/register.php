<?php
require_once 'dbconnect.php';


$command = "INSERT INTO users(username, password, email) VALUES(:username, :password, :email)";
$statement = $connection->prepare($command);
$statement->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
$statement->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$statement->execute();
#header('Location: index.html');
echo 'BRAVO BOSS ESTI INREGISTRAT FELICITARI WOO';
$connection=null;
?>
