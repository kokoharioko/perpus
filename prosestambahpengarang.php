<?php
	include "koneksi.php";
	$id = $_POST['idpeng'];
	$nmpeng = $_POST['nmpeng'];

	$query ="insert into t_pengarang values ('".$id."','".$nmpeng."')";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:pengarang.php");
	}
	else
	{
		echo "Kesalahan saat input data";
	}
?>
