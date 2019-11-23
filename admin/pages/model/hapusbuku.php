<?php
// Load file koneksi.php
require "../../../config/main.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

$query 	= "DELETE FROM bukutamu WHERE id='".$id."'";
$sql 	= mysql_query($query); // Eksekusi/Jalankan query dari variabel $query

if($sql){ // Cek jika proses hapus ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("Location:../../index.php?page=data_bukutamu"); // Redirect ke halaman produk
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='../../index.php'>Kembali</a>";
}
?>
