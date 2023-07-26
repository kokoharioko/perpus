<?php
	include "koneksi.php";
	$nmb = $_POST['nmbuk'];
	$stk = $_POST['stkter'];

	$query ="insert into t_stok values ('".$nmb."','".$stk."')";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:stok.php");
	}
	else
	{
		echo "Kesalahan saat input data";
	}
?>
