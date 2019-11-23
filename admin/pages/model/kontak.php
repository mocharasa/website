<?php 

require "../../../config/main.php";
$no_telp	= $_POST['no_telp'];
$no_wa 		= $_POST['no_wa'];
$pin		= $_POST['pin'];
$fb			= $_POST['fb'];
$ig			= $_POST['ig'];
$alamat		= $_POST['alamat'];
mysql_query("UPDATE kontak SET no_telp='$no_telp', no_wa='$no_wa', pin='$pin', fb='$fb', ig='$ig', alamat='$alamat' WHERE id='1'");
header('Location:../../index.php?page=data_kontak');
	
?>