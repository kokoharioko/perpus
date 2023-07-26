<?php
	include "koneksi.php";
	$idb = $_POST['idbuk'];
	$harga = $_POST['hrga'];
	$jlh = $_POST['jlhjual'];
    $ttl = $_POST['totl'];

	$query ="insert into t_penjualan values ('".$idb."','".$harga."','".$jlh."','".$ttl."')";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:penjualan.php");
	}
	else
	{
		echo "Kesalahan saat input data";
	}
?>
