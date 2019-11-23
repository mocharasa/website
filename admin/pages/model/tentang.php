<?php 

require "../../../config/main.php";
$value = $_POST['tentang'];
mysql_query("UPDATE profil SET tentang='$value' WHERE id='1'");
header('Location:../../index.php?page=data_tentang');	
?>