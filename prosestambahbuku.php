<?php
	include "koneksi.php";
	$id = $_POST['idbuku'];
	$nama = $_POST['namabuku'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengrg'];
    $harga = $_POST['hrg'];
	$query ="insert into t_buku values ('".$id."','".$nama."','".$penerbit."','".$pengarang."','".$harga."')";
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:transaksibuku.php");
	}
	else
	{
		echo "Kesalahan saat input data ";
	}
?>
