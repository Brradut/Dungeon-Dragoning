<?php
session_start();
if($_SESSION['idUser']==-1){
header('Location: index.php');
}else{
$path = $_GET['path'];
echo '<a href="http://toliveistolearn.com:42069/setup">Apasa aici ca sa ajungi la foundry wowiee s-ar putea sa nu fie gata though</a>';
exec('bash -c "exec nohup setsid ./startWorld.sh '. $path . ' > ./foundryLogs.txt 2>&1 &"');
}
?>



