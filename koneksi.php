<?php
	$koneksi = mysqli_connect("localhost","root","") or die("Tidak Terkoneksi");
	mysqli_select_db($koneksi,"db_buku") or die ("Tidak ada database");
	function query($query)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
function caritabel1($keyword) {
	$query = "SELECT * FROM t_buku WHERE 
	id_buku LIKE '%$keyword%' 
	or nama_buku LIKE '%$keyword%'
	or penerbit LIKE '%$keyword%'
	or pengarang LIKE '%$keyword%'
	or harga LIKE '%$keyword%'";
	return query($query);
}
function caritabel2($keyword) {
	$query = "SELECT * FROM t_pengarang WHERE 
	id_pengarang LIKE '%$keyword%' 
	or nama_pengarang LIKE '%$keyword%' ";
	return query($query);
}
function caritabel3($keyword) {
	$query = "SELECT * FROM t_penjualan WHERE 
	id_buku LIKE '%$keyword%' 
	or harga LIKE '%$keyword%' 
	or jumlah_terjual LIKE '%$keyword%'
	or total_harga LIKE '%$keyword%'";
	return query($query);
}
function caritabel4($keyword) {
	$query = "SELECT * FROM t_stok WHERE 
	nama_buku LIKE '%$keyword%' 
	or stok_tersedia LIKE '%$keyword%' ";
	return query($query);
}
?>