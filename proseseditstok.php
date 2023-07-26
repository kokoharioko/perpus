<?php
	include "koneksi.php";
	$nmbk = $_POST['nmbuku'];
	$stk = $_POST['stktersedia'];

	$query = "update t_stok set stok_tersedia = '".$stk."' where nama_buku = '".$nmbk."'" ;
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:stok.php");
	}
	else
	{
		echo "Kesalahan saat Edit data";
	}
?>
