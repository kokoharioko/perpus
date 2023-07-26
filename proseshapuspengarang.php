<?php
	include "koneksi.php";
	$id = $_GET['idprg'];
	
	$query = "delete from t_pengarang where id_pengarang = '".$id."'";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:pengarang.php");
	}
	else
	{
		echo "Kesalahan saat Hapus data";
	}
?>
