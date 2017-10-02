<h2>Tambah Kategori</h2>

<form method="POST">
	<label>Kategori</label>
	<input type="text" name="kategori"/><br>
	<button type="submit" name="save">Simpan</button>
</form>

<?php 

	if (isset($_POST['save'])) {
		$kategori->tambah_kategori($_POST['kategori']);
		echo "<script>alert('Data kategori tersimpan')</script>";
		echo "<script>window.location='index.php?page=katproduk'</script>";
	}
 ?>