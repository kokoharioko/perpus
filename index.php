<?php session_start();
	if (isset($_SESSION['username']))
	{
		header("location:home.php");
	}
	else
	{
?>
<html>

	<link href = "style.css" rel = "stylesheet"> 
<div id = "mypages">

	<div id ="header" overflow: hidden;> <p style = "font-family:Comic Sans MS;"> TOKO BUKU APA ADANYA </p>
	<div id ="menu">
	
	<ul id ="listmenu">
	<li> <a href = "index.php">Home<a></li> 
	</div>
	</div>
	<div id ="side">
<img src ="gambar/buku.jpg" width = "500" height ="700" /> </div>
	<div id ="content">  SELAMAT DATANG SILAHKAN LOGIN
	<div id = "kotaklogin">
		<form id="Home" action="proseslogin.php" method="post">
			<p style="color:red;"> <?php
			if(isset($_GET['error']) == 1)
			{
				echo "username/  password salah";
			}
			?> </p>
			<p> USERNAME : 
				<input placeholder="username harus diisi" type="text" name="username" id="username" value ="" required /> </p>
			<p> PASSWORD : 
				<input placeholder="password harus diisi" type="text" name="password" id="password" value ="" required /> </p>
			<input type="submit" value="Login" name="submit"/>
		</form>
		</div>
	</div>
	<div style ="clear:both";> </div>
	<div id = "bottom"> ©TOKO BUKU KOKO
	 </div>
</div>
</html>
		<?php } ?>