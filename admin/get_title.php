<?php 

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'data_sejarah':
			$title = "Sejarah";
			break;
		case 'data_visimisi':
			$title = "Visi & Misi";
			break;
		case 'data_struktur':
			$title = "Struktur Organisasi";
			break;
		case 'data_tentang':
			$title = "Tentang";
			break;
		case 'data_produk':
			$title = "List Produk";
			break;
		case 'data_tambahproduk':
			$title = "Tambah Produk Baru";
			break;
		case 'data_editproduk':
			$title = "Edit Produk";
			break;
		case 'data_bukutamu':
			$title = "Buku Tamu";
			break;
		case 'data_lihatbuku':
			$title = "Buku Tamu";
			break;
		case 'data_kontak':
			$title = "Kontak";
			break;
		case 'admin':
			$title = "Manajemen Admin";
			break;
			
		default:
			$title = "Halaman Tidak Ditemukan";
			break;
	}	
	echo $title;
}
else {
	$title = "Dashboard Admin";
	echo $title;
}

 ?>