<?php
// Load file koneksi.php
require "../../../config/main.php";
$id		= $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nama 	= $_POST['nama'];
$user 	= $_POST['user'];
$pass 	= $_POST['pass'];
	// Proses simpan ke Database
	$sql = mysql_query("UPDATE admin SET nama='".$nama."',username='".$user."',password='".$pass."' WHERE id='".$id."'");	

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("Location:../../index.php?page=admin"); // Redirect ke halaman produk
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=''>Kembali Ke Form</a>";
	}
?>
