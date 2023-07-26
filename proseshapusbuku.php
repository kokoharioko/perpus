<?php
	include "koneksi.php";
	$id = $_GET['idbk'];
	
	$query = "delete from t_buku where id_buku = '".$id."'";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:transaksibuku.php");
	}
	else
	{
		echo "Kesalahan saat Hapus buku";
	}
?>
