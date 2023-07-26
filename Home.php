<?php
session_start();
if(!empty($_SESSION['username']))
	{
?>

<html>
	<link href = "style.css" rel = "stylesheet"> 
<div id = "mypages">

	<div id ="header" overflow: hidden;> <p style = "font-family:Comic Sans MS;"> SELAMAT DATANG DI TOKO BUKU APA ADANYA </p>
	<div id ="menu">
	
	<ul id ="listmenu">
	<li> <a href = "Home.php">HALAMAN DEPAN<a></li>
	<li> <a href = "transaksibuku.php">BUKU<a></li>
	<li> <a href = "pengarang.php">PENGARANG<a></li>
	<li> <a href = "penjualan.php">DATA PENJUALAN<a></li>
	<li> <a href = "stok.php">STOK BUKU<a></li>
	<li> <a href = "logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a> </li>

	</div>
	</div>
	<div id ="side">
	<img src ="gambar/buku.jpg" width = "500" height ="700" /> </div>
	<div id ="content">
	<div id = "kontenatas"> 
	<img src ="gambar/books.jpg" width = "1300" height ="700" />
	</div>
	</div>
	<div style ="clear:both";> </div>
	<div id = "bottom">
	©TOKO BUKU KOKO</div>
</div>
</html>
<?php
} else {header("location:index.php");}?>