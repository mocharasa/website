<?php 

require "../../../config/main.php";
$value = $_POST['struktur'];
mysql_query("UPDATE profil SET struktur='$value' WHERE id='1'");
header('Location:../../index.php?page=data_struktur');	
?>