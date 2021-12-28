<?php 
include 'koneksi.php';
include 'index.php';
 
$id = $_GET['kode_barang'];
 
mysqli_query($koneksi,"DELETE from tb_barang where kode_barang='$id'");

header("location:index.php");
 
?>