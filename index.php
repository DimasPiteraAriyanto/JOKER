<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="form.php">Tambah Barang</a>
      <a class="nav-item nav-link" href="edit.php">Edit Barang</a>
      <a class="nav-item nav-link" href="delete.php">Hapus Barang</a>
    </div>
    </div>
    </nav>

    <table border="1">
		<tr>
			<th>KODE</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Stok</th>
            <th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
                        $sql = mysqli_query($koneksi,"SELECT * FROM tb_barang") or die (mysqli_error($koneksi));
                        if(mysqli_num_rows($sql) > 0){
                        while($data = mysqli_fetch_array($sql)) { 
			?>
			<tr>
				<td><?php echo $data['kode_barang']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jenis_barang']; ?></td>
				<td><?php echo $data['harga_beli']; ?></td>
				<td><?php echo $data['harga_jual']; ?></td>
				<td><?php echo $data['stok']; ?></td>
				<td>
                    <!--edit.php?kode_barang kode barang adalah id-->
					<a href="edit.php?kode_barang=<?php echo $data['kode_barang']; ?>">EDIT</a> ||
                    <a href="delete.php?kode_barang=<?php echo $data['kode_barang']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
    } else {
        echo "<tr><td colspan=\"6\" align=\"center\">Data Tidak Dapat Ditemukan</td></tr>";
    }
		?>
	</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>