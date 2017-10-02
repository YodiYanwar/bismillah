<h2>Edit Kategori</h2>

<form method="POST">
	<label>Kategori</label>
	<input type="text" name="kategori"/><br>
	<button type="submit" name="update">Ubah</button>
</form>

<?php 

	if (isset($_POST['ubah'])) {
		$kategori->ubah_kategori($_POST['kategori']);
		echo "<script>alert('Data kategori tersimpan')</script>";
		echo "<script>window.location='index.php?page=katproduk'</script>";
	}
 ?>