<?php 
	session_start();
	if(!empty($_SESSION['username']))
	{
	
?>

<?php
include "koneksi.php"; #untuk koneksi php
$query = "select * from t_penjualan";
$hasil = mysqli_query($koneksi,$query); #buat 1 variabel, ada 2 parameter koneksi dan query untuk menjalankan perintah
if(isset($_POST["cari"]))
{
	$hasil = caritabel3($_POST["keyword"]);
}
?>
<html>
<script src ="jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link href = "style.css" rel = "stylesheet" > 
<div id = "mypages">
<div id = "mypages">

	<div id ="header" overflow: hidden;> <p style = "font-family:Comic Sans MS;"> TOKO BUKU APA ADANYA </p>
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
	<div id ="side"> <img src ="gambar/buku.jpg" width = "500" height ="700" /> </div>
	<div id ="content">
	<form action="penjualan.php" method="post">
	<input type="text" id="cari" name="keyword"  autofocus=""placeholder="Silahkan input pencarian">
    <button type="submit" name="cari">Cari</button>
	</form>
    <a href="tambahpenjualan.php">TAMBAH DATA</a>
	<div id = "kontenatas"> TABEL DATA PENJUALAN<br>
	<table border="3" align="center"> 
					<tr>
						<td> Id buku </td>
						<td> Harga </td>
						<td> Jumlah terjual </td>
						<td> Total </td>
						<td colspan="2">Aksi</td>
						
					</tr>
					<?php $i = 1; ?>
					<?php foreach($hasil as $row) : ?>
						<tr>
							<td><?php echo $row['id_buku'];?></td>
							<td><?php echo $row['harga'];?></td>
							<td><?php echo $row['jumlah_terjual'];?></td>
							<td><?php echo $row['total_harga'];?></td>
							<td><a href="editpenjualan.php?idbuku=<?php echo $row['id_buku']; ?>&hrga=<?php echo $row['harga'];?> &jlhjual=<?php echo $row['jumlah_terjual'];?>  &ttal=<?php echo $row['total_harga'];?>" >Edit</a></td>

							<td><a href="proseshapuspenjualan.php?idbk=<?php echo $row['id_buku']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> </td>
						</tr>
					<?php $i++;?>
					<?php endforeach;?>
	</table>
	</div>
	</div>
	<div style ="clear:both";> </div>
	<div id = "bottom"> 	©TOKO BUKU KOKO
</div>
</div>

</html>
					<?php } else {header("location:index.php");}?>