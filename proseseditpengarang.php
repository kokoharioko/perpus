<?php
	include "koneksi.php";
	$id = $_POST['idpeng'];
	$nmpeng = $_POST['nmpeng'];

	$query = "update t_pengarang set nama_pengarang = '".$nmpeng."' where id_pengarang = '".$id."'" ;
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:pengarang.php");
	}
	else
	{
		echo "Kesalahan saat Edit data";
	}
?>
