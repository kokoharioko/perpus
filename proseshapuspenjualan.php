<?php
	include "koneksi.php";
	$idb = $_GET['idbk'];
	
	$query = "delete from t_penjualan where id_buku = '".$idb."'";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:penjualan.php");
	}
	else
	{
		echo "Kesalahan saat Hapus buku";
	}
?>
