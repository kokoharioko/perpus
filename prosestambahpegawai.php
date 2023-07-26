<?php
	include "koneksi.php";
	$id = $_POST['idpeg'];
	$nm = $_POST['nmpeg'];
	$gol = $_POST['gol'];
	$jk = $_POST['jk'];
	
	$query = "insert into pegawai values('".$id."','".$nm."','".$gol."','".$jk."')";
	$hasil = mysqli_query($koneksi,$query);
	
	if($hasil)
	{
		header("location:home.php");
	}
	else
	{
		echo "Error saat input data";
	}
?>