<?php 
include ('config/main.php');
$tgl	= date('Y-m-d');
$nama	= $_POST['nama'];
$pesan	= $_POST['pesan'];
    $sql_insert = "INSERT INTO bukutamu (tgl, nama, pesan) VALUES ('$tgl', '$nama', '$pesan')";
    if(mysql_query($sql_insert))
    {
    header('Location:index.php?page=bukutamu');
    }
    else
    {
    echo "error is ".mysql_error();
	}
?>