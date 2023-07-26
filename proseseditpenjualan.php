<?php
	include "koneksi.php";
	$idb = $_POST['idbuku'];
    $hrg = $_POST['harga'];
    $jlh = $_POST['jumlah'];
	$ttl = $_POST['total'];
	$query = "update t_penjualan set harga = '".$hrg."', jumlah_terjual = '".$jlh."', total_harga ='".$ttl."' where id_buku = '".$idb."'" ;
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:penjualan.php");
	}
	else
	{
		echo "Kesalahan saat Edit data buku";
	}
?>
