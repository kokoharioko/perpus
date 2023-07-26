<?php
	include "koneksi.php";
	$id = $_POST['idbuku'];
	$nama = $_POST['namabuku'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengrg'];
    $harga = $_POST['harga'];
	$query = "update t_buku set nama_buku = '".$nama."', penerbit = '".$penerbit."', pengarang = '".$pengarang."', harga ='".$harga."' where id_buku = '".$id."'" ;
	$hasil = mysqli_query($koneksi,$query);
	if($hasil)
	{
		header("location:transaksibuku.php");
	}
	else
	{
		echo "Kesalahan saat Edit data buku";
	}
?>
