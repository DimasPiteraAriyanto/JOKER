<?php 
include 'koneksi.php';

$namaBarang = $_POST['nama_barang'];
$jenisBarang = $_POST['jenis_barang'];
$hargaBeli = $_POST['harga_jual'];
$hargaJual = $_POST['harga_beli'];
$stok = $_POST['stok'];



mysqli_query($koneksi,"INSERT INTO tb_barang (nama_barang, jenis_barang, harga_beli, harga_jual, stok) 
VALUES ('$namaBarang','$jenisBarang', '$hargaBeli', '$hargaJual', '$stok')") or die(mysqli_error($koneksi));
 

 header("location:index.php");
?>

