<?php 

include 'koneksi.php';


$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];

$sql_update = "UPDATE tb_barang SET nama_barang='$nama_barang', 
jenis_barang='$jenis_barang',
harga_beli='$harga_beli', 
harga_jual='$harga_jual',  
stok='$stok' 
WHERE kode_barang='$kode_barang'";
$update = mysqli_query($koneksi, $sql_update);
 
header("location:index.php");
?>