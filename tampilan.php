<?php 

if (isset($_GET['page'])) {
	$path = $_GET['page'].".php";
	if (file_exists($path)) {
		require_once($path);
	}
	else {
		require_once("404.php");
	}
}
else {
	require_once("beranda.php");
}

 ?>