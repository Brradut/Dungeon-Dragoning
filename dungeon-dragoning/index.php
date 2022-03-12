<?php
session_start();
$_SESSION['idUser'] = -1;
?>
<DOCTYPE html>
<html>
	<head>
	<title>Dungeon Mastering</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"type="text/javascript"></script>
		<script type="text/javascript">
			function inregistrare(){
				$('#main').html('<form action="./register.php" method="post">'+
								'<label for="username">Username:</label><input id="username" type="text" name="username"></input><br>'+
								'<label for="password">Password:</label><input id="password" type="text" name="password"></input><br>'+
								'<label for="email">Email:</label><input id="email" type="text" name="email"></input><br>'+
								'<input type="submit" value="Inregistrare"></input>'+'</form>');
			}
			function login(){
				$('#main').html('<form action="./login.php" method="post">'+
								'<label for="username">Username:</label><input id="username" type="text" name="username"></input><br>'+
								'<label for="password">Password:</label><input id="password" type="text" name="password"></input><br>'+
								'<input type="submit" value="Login"></input>'+'</form>');
			}
		</script>
	</head>
	<div id="main">
		<button onClick="{}">Inregistrare</button><br>
		<button onClick="{login()}">Log in</button><br>
	</div>

</html>
