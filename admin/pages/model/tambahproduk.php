<?php
// Load file koneksi.php
require "../../../config/main.php";

// Ambil Data yang Dikirim dari Form
$nama 	= $_POST['nama'];
$jenis 	= $_POST['jenis'];
$rasa 	= $_POST['rasa'];
$harga 	= $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp 	= $_FILES['gambar']['tmp_name'];
	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan fotonya
$path = "../../../images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO produk (nama,rasa,jenis,harga,gambar) VALUES('".$nama."', '".$rasa."', '".$jenis."', '".$harga."', '".$fotobaru."')";
	$sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("Location:../../index.php?page=data_produk"); // Redirect ke halaman produk
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=''>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href=''>Kembali Ke Form</a>";
}
?>
