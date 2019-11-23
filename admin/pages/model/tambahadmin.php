<?php
// Load file koneksi.php
require "../../../config/main.php";

// Ambil Data yang Dikirim dari Form
$nama 	= $_POST['nama'];
$user 	= $_POST['user'];
$pass 	= $_POST['pass'];
	// Proses simpan ke Database
	$query = "INSERT INTO admin (nama,username,password) VALUES('".$nama."', '".$user."', '".$pass."')";
	$sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("Location:../../index.php?page=admin"); // Redirect ke halaman admin
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=''>Kembali Ke Form</a>";
	}
?>
