<?php 
		if (isset($_GET['aksi'])) {
			if (isset($_GET['aksi']) == "hapus") {
				$kategori->hapus_kategori($_GET['id']);
				echo "<script>alert('Kategori telah dihapus');</script>";
				echo "<script>window.location='index.php?page=katproduk'</script>";
			}
		}

 ?>

<h2>Kategori Produk</h2>

<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$kate = $kategori->tampil_kategori();

			$no = 1;
			//print_r($kate);  Menampilkan data kategori array

			foreach($kate as $gori){

		 ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $gori['kategori'] ?></td>
			<td>
				<a href="/bismillah?page=ubahkat&id=<?php echo $gori['id_kategori'] ?>">Ubah</a>
				<a href="/bismillah?page=katproduk&aksi=hapus&id=<?php echo $gori['id_kategori'] ?>">Hapus</a>
			</td>
		</tr>

		<?php 
			$no++; }
		 ?>
	</tbody>
</table>
<br>

<a href="/bismillah?page=tambahkategori"><button>Tambah</button></a>