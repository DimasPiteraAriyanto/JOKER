<table border="0" cellspacing="2" cellpadding="2">
<form action="simpan.php" method="post">
	<tr>
	<th>Nama Barang :</th>
	<th>Harga Beli  :</th>
	<th>Harga Jual  :</th>
	<th>Stok :</th>
	</tr>
		<td><input type="text" name="nama_barang"/></td>
		<td>Rp. <input type="text" name="harga_beli"/></td>
	 	<td>Rp. <input type="text" name="harga_jual"/></td> 
		<td><input type="number" name="stok"/></td>
	</table>
	<fieldset>
    <legend>Pilih Jenis Barang</legend>
    <input type="radio" name="jenis_barang" id="PB" value="PB" /><label for="PB">Pecah Belah</label><br />
    <input type="radio" name="jenis_barang" id="BB" value="BB"  /><label for="BB">Bahan Baku</label><br />
    <input type="radio" name="jenis_barang" id="BM" value="BM" /><label for="BM">Bahan Mentah</label><br />
	<input type="radio" name="jenis_barang" id="SJ" value="SJ" /><label for="SJ">Siap Jual</label><br />
	</fieldset>
	
	<input type="submit" value="Simpan"/>
</form>

