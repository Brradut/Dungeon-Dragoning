<?php
session_start();
if ($_SESSION['idUser']==-1)
	header('Location: index.php');
function getWorlds(){
require_once 'dbconnect.php';
$statement=$connection->prepare('SELECT path FROM worlds WHERE owner=:id');
$statement->bindValue(':id', $_SESSION['idUser'], PDO::PARAM_INT);
$statement->execute();
$rez = $statement->fetchAll();
return $rez;
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Lumile tale bro</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
<script>
	function startWorld(path){
		var request = new XMLHttpRequest();
		request.onreadystatechange = function(){
			if(request.readyState == 4){
				if(request.status == 200){
				$('#mainDiv').html(request.responseText);
				}
				else{
				alert('eroare dubioasa');
				}
			}
		}
		request.open('GET', 'startWorld.php?path=' + path, true);
		request.send('');
	}
	function closeWorld(){
		var request = new XMLHttpRequest();
		request.onreadystatechange= function(){
			if(request.readyState=200){
				alert('lume inchisa');
			}else{
				alert('eroare dubioasa');
			}
		}
		request.open('POST', 'endWorld.php', true);
		request.send('');
	}

</script>
</head>
<body>
<div id="mainDiv">
	<?php
	$i = exec("ps -ef | grep foundry | sed -n '1p'| awk '{print $10}' | awk -F= '{print $2}'");
	if($i == '' || $i == ' ')
		$i = 'NICIUNA';
	echo 'Momentan este pornita lumea <strong>' . $i . '</strong>' . '   <button onClick="{closeWorld()}">Inchide-o</button>'
?>
	<br><br>Lumile tale: 
	<ul>
		<?php
		foreach(getWorlds() as $world){
		echo '<li><button onClick="{startWorld('."'". $world['path'] . "'" . ')}">' . $world['path'] . '</button></li>';
		}		
		?>
	</ul>
</div>
</body>
</html>
