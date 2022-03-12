<?php
session_start();
if($_SESSION['idUser'] ==-1)
	header('Location: index.php');
else
exec('./killfoundry.sh');
?>
