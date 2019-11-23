<?php
// Load file koneksi.php
require "../../../config/main.php";

// Ambil data 
$id = $_GET['id'];

// Query untuk menampilkan data 
$query = "SELECT * FROM produk WHERE id='".$id."'";
$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
$data = mysql_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("../../../images/".$data['gambar'])) // Jika foto ada
	unlink("../../../images/".$data['gambar']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data 
$query2 = "DELETE FROM produk WHERE id='".$id."'";
$sql2 = mysql_query($query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses hapus ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("Location:../../index.php?page=data_produk"); // Redirect ke halaman produk
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='../../index.php'>Kembali</a>";
}
?>
