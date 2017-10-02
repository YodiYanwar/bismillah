<?php 
	include 'class.php';

	//mencgah user untuk bisa langsung masuk tanpa login dengan mengecek session
	if (empty($_SESSION['id_user'])) {
		echo "<script>alert('Anda harus login dulu')</script>";
		echo "<script>window.location='login.php'</script>";		
	}

	//Memanggil fungsi logout
	if (isset($_GET['aksi'])) {
		if ($_GET['aksi'] == 'logout') {
			
			$user -> user_logout();
			
			echo "<script>alert('Anda telah logout')</script>";
			echo "<script>window.location='login.php'</script>";
		}
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<a href="/bismillah">Home</a><br>
	<a href="/bismillah?page=produk">Produk</a><br>
	<a href="/bismillah?page=katproduk">Kategori Produk</a><br>
	<a href="/bismillah?page=pelanggan">Pelanggan</a><br>
	<a href="/bismillah?page=supplier">Supplier</a><br><br>
	<a href="/bismillah/login.php">LOGIN</a><br><br>
	
	<i>
		<?php 
			if(isset($_GET['page'])){
				if ($_GET['page'] == 'produk') {
					include 'produk.php';
				}
				elseif ($_GET['page'] == 'pelanggan') {
					include 'pelanggan.php';
				}				
				elseif ($_GET['page'] == 'supplier') {
					include 'supplier.php';
				}
				elseif ($_GET['page'] == 'katproduk') {
					include 'kategori.php';
				}				
				elseif ($_GET['page'] == 'tambahkategori') {
					include 'tambahkategori.php';
				}
				elseif ($_GET['page'] == 'ubahkat') {
					include 'ubahkategori.php';
				}
			} 
			else{
				include 'home.php';
			}

		 ?>

	</i>
	<br><br>
	<a href="/bismillah/index.php?aksi=logout">LOGOUT</a><br><br>
</body>
</html>