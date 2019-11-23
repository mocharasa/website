<?php
require "config/main.php";

$user 	= $_POST['user'];
$pass   = $_POST['pass'];

$hasil  = mysql_query("SELECT * FROM admin WHERE username='$user' AND password='$pass'");
$hitung = mysql_num_rows($hasil);
$data   = mysql_fetch_array($hasil);

if ($hitung > 0){
	session_start();
	$_SESSION['username'] 	= $data['username'];
	$_SESSION['password'] 	= $data['password'];
	$_SESSION['nama'] 		= $data['nama'];
	
	header('Location:admin/index.php');
}else{
   echo "<script>alert('GAGAL..!!!!!, Silakan Ulangi Lagi'); window.location = 'login.php'</script>";
}
?>