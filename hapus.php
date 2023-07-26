<?php
	include "koneksi.php";
	$id = $_GET['id_pegawai'];
	
	$query = "delete from pegawai where id_pegawai = '".$id."'";
	$hasil = mysqli_query($koneksi,$query);
	
	if($hasil)
	{
		header("location:Home.php");
	}
	else
	{
		echo "Error saat hapus data";
	}
?>