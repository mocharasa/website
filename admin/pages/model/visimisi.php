<?php 

require "../../../config/main.php";
$value = $_POST['visimisi'];
mysql_query("UPDATE profil SET visimisi='$value' WHERE id='1'");
header('Location:../../index.php?page=data_visimisi');	
?>