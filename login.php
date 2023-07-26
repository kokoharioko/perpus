<html>
	<link href = "style.css" rel = "stylesheet"> 
<div id = "mypages">
	
	<div id ="header" overflow: hidden;> 
	<div id ="menu">
	<ul id ="listmenu">
	<li> <a href = "index.php">Home<a></li>
	<li> <a href = "logout.php">Logout <a></li> 
	</ul> 
	</div>
	</div>
	<div id ="side">
	SIDEBAR <img src ="gambar/1.jpeg" width = "200" height ="300" /> </div>
	<div id ="content">
	<div id = "kotaklogin">
	<form action="proseslogin.php" method="post">
			<p style="color:red;"> <?php
			if(isset($_GET['error']) == 1)
			{
				echo "username/password salah";
			}
			?></p>
			<p> username : <input type="text" name="username" id="uusername" value ="" required /> </p>
			<p> password : <input type="text" name="password" id="ppassword" value ="" required /> </p>
			<input type="submit" value="Login" id="tblogin"/>
		</form>
		</div>
	</div>
	<div style ="clear:both";> </div>
	<div id = "bottom">
 </div>
</div>
</html>