<?php
include "koneksi.php";

	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$query = "select*from user where username='".$uname."' and password='".($pass)."'";
	$hasil = mysqli_query($koneksi,$query);
	
	if(mysqli_num_rows($hasil) > 0)
	{
		session_start();
		$_SESSION['username'] = $uname;
		$_SESSION['password'] = $pass;
		header("location:Home.php");
	}
	else
	{
		header("location:index.php?error=1");
	}
?>