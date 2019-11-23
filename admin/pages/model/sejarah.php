<?php 
require "../../../config/main.php";
$value = $_POST['sejarah'];
mysql_query("UPDATE profil SET sejarah='$value' WHERE id='1'");
header('Location:../../index.php?page=data_sejarah');	
?>