<?php
// Load file koneksi.php
require "../../../config/main.php";

// Ambil data
$id = $_GET['id'];

$query2 = "DELETE FROM admin WHERE id='".$id."'";
$sql2 = mysql_query($query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses hapus ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("Location:../../index.php?page=admin"); // Redirect ke halaman produk
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='../../index.php'>Kembali</a>";
}
?>
