<?php
include 'koneksi.php'; //Include file koneksi
$key = $_GET['term']; // Menerima kiriman data dari inputan pengguna

$query="SELECT * FROM t_buku WHERE nama_buku LIKE '%".$key."%' "; // query sql untuk menampilkan data danau dengan operator LIKE

$hasil=mysqli_query($koneksi,$query); //Query dieksekusi

//Disajikan dengan menggunakan perulangan
while ($row = mysqli_fetch_array($hasil)) {
    $data[] = $row['nama_buku'];
}
//Nilainya disimpan dalam bentuk json
echo json_encode($data);
?>