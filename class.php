<?php 

session_start();

	//Membuat class database
	class database{
		public $host = "localhost";
		public $user = "root";
		public $password = "";
		public $dbname = "bismillah";

		//Membuat fungsi untuk koneksi
		function koneksi(){
			mysql_connect( $this->host, $this->user, $this->password );
			mysql_select_db($this->dbname);
		}		

	}

	//Membuat class untuk user
	class user{
		//Membuat fungsi untuk user
		function user_login($user, $password){

			$password = md5($password);

			//1. Memcocokan data username dan pasword pada table user
			$ambildata = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$password'");
			$hitung = mysql_num_rows($ambildata);
			$pecah = mysql_fetch_array($ambildata);

			if ($hitung>0) {
				//login
				$_SESSION['id_user'] = $pecah['id_user'];
				$_SESSION['username'] = $pecah['username'];
				$_SESSION['password'] = $pecah['password'];

				return true;
			} else{
				//gagal login
			}

		}

		function user_logout(){
			session_destroy();
		}
	}

	//Membuat class kategori untuk menampilkan isi kategori
	class kategori{
		function tampil_kategori(){
			$ambildata = mysql_query("SELECT * FROM kategori");
				if(mysql_num_rows($ambildata) > 0){
					while ($ad = mysql_fetch_assoc($ambildata))
						$data[] = $ad;
						return $data;
					
				} else{
					echo "kategori kosong";
				}

		}

		function tambah_kategori($kategori){
			mysql_query("INSERT INTO kategori (kategori) VALUES ('$kategori')");
		}

		function hapus_kategori($id){
			mysql_query("DELETE FROM kategori WHERE id_kategori ='$id'");
		}

		function ambil_kategori($id){
			$ambildata = mysql_query("SELECT * FROM kategori WHERE id_kategori ='$id'");	
			$ad = mysql_fetch_assoc($ambildata);
			$data[] = $ad;

			return $data;
		}
	}

	//Membuat instance baru untuk class database
	$db = new database();
	$db->koneksi();

	$user = new user();

	$kategori = new kategori();

?>