<?php 
	include 'class.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form role="form" method="POST">
		Username : <input type="text" name="usr"><br>
		Password : <input type="password" name="pwd"><br>

		<button type="submit" name="login">Login</button>

	</form>

	<?php 
		if (isset($_POST['login'])) {
			$coba_login = $user -> user_login($_POST['usr'], $_POST['pwd']);

			if ($coba_login) {
				echo "<script>alert('Login Sukses')</script>";
				echo "<script>window.location='index.php'</script>";
			} else{
				echo "<script>alert('Login Gagal')</script>";
				echo "<script>window.location='login.php'</script>";
			}
		}

	?>
</body>
</html>