<?php
	include "koneksi.php";
	$nm = $_GET['nama'];
	
	$query = "delete from t_stok where nama_buku = '".$nm."'";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:stok.php");
	}
	else
	{
		echo "Kesalahan saat Hapus data";
	}
?>
