<?php  
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	if ($username=='' || $password=='') {
		echo "<script>
			swal('Username atau Password Tidak Boleh Kosong !',{
				icon:'warning',
				button: false,
				timer:1500
			});
		</script>";
	}else{
		$cek = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");

		if (mysqli_num_rows($cek) > 0) {
			$_SESSION['simdes'] = $username;
			echo "<script>
			swal('Login Berhasil !',{
				icon:'success',
				button: false,
				timer:1500
			});
			location=(href='index.php');
		</script>";
		}else{
			echo "<script>
			swal('Login Gagal !',{
				icon:'error',
				button: false,
				timer:1500
			});
		</script>";
		}
	}
}
?>