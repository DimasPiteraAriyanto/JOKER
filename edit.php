<?php
include 'index.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>
<?php
	include 'koneksi.php';
	$id = $_GET['kode_barang'];
	$sql = mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE kode_barang='$id'") or die (mysqli_error($koneksi));
    while($data = mysqli_fetch_array($sql)) { 
	
		?>
		
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Barang</td>
					<td>
						<input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>">
						<input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga Beli</td>
					<td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>"></td>
				</tr>
				<tr>
					<td>Harga Jual</td>
					<td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" name="stok" value="<?php echo $data['stok']; ?>"></td>
				</tr>
				<tr>
				<fieldset>
				<legend>Pilih Jenis Barang</legend>
				<input type="radio" name="jenis_barang" id="PB" value="PB" <?php if($data['jenis_barang']=='PB') echo 'checked'?>/><label for="PB" >Pecah Belah</label><br />
				<input type="radio" name="jenis_barang" id="BB" value="BB" <?php if($data['jenis_barang']=='BB') echo 'checked'?>/><label for="BB" >Bahan Baku</label><br />
				<input type="radio" name="jenis_barang" id="BM" value="BM" <?php if($data['jenis_barang']=='BM') echo 'checked'?>/><label for="BM" >Bahan Mentah</label><br />
				<input type="radio" name="jenis_barang" id="SJ" value="SJ" <?php if($data['jenis_barang']=='SJ') echo 'checked'?>/><label for="SJ">Siap Jual</label><br />
				</fieldset>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>