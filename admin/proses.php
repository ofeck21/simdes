<?php  
/*Proses Tambah Data*/
if (isset($_POST['tambahData'])) {
	$nik 	= $_POST['nik'];
	$nama 	= $_POST['nama'];
	$tmp 	= $_POST['tmp_lahir'];
	$tgl 	= $_POST['tgl_lahir'];
	$alamat	= $_POST['alamat'];
	$gendre	= $_POST['gendre'];
	$agama	= $_POST['agama'];
	$status	= $_POST['status'];
	$pkj	= $_POST['pekerjaan'];
	$tlp	= $_POST['tlp'];

	if ($nik != "" || $nama != "" || $tmp != "" || $tgl != "" || $alamat != "" || $gendre != "" || $status != "" || $pkj != "" || $tlp != "" || $agama != "") {
		$tambah = mysqli_query($con, "INSERT INTO penduduk (id_penduduk, nik, nama, alamat, tmp_lahir, tgl_lahir, gendre, kontak, agama, status, pekerjaan) VALUES (null, '$nik', '$nama', '$alamat', '$tmp', '$tgl', '$gendre', '$tlp', '$agama', '$status', '$pkj') ");

		if ($tambah) {
			echo "<script>
			swal('Data Telah Ditambahkan !',{
				icon:'success',
				button: false,
				timer:3500
			});
			location=(href='?penduduk');
		</script>";
		}else{
			echo "<script>
			swal('Data Gagal Ditambahkan !',{
				title:'Gagal !',
				icon:'error',
				button: false,
				timer:3500
			});
		</script>";
		}
	}else{
		echo "<script>
			swal('Harap Isi Form Dengan Lengkap !',{
				title:'Gagal !',
				icon:'warning',
				button: false,
				timer:3500
			});
		</script>";
	}
}

/*Proses Edit Data*/
if (isset($_POST['ubahData'])) {
	$id 	= $_POST['id'];
	$nik 	= $_POST['nik'];
	$nama 	= $_POST['nama'];
	$tmp 	= $_POST['tmp_lahir'];
	$tgl 	= $_POST['tgl_lahir'];
	$alamat	= $_POST['alamat'];
	$gendre	= $_POST['gendre'];
	$agama	= $_POST['agama'];
	$status	= $_POST['status'];
	$pkj	= $_POST['pekerjaan'];
	$tlp	= $_POST['tlp'];


	if ($id != "" || $nik != "" || $nama != "" || $tmp != "" || $tgl != "" || $alamat != "" || $gendre != "" || $status != "" || $pkj != "" || $tlp != "" || $agama != "") {
		$update = mysqli_query($con, "UPDATE penduduk  SET nik='$nik', nama='$nama', alamat='$alamat', tmp_lahir='$tmp', tgl_lahir='$tgl', gendre='$gendre', kontak='$tlp', agama='$agama', status='$status', pekerjaan='$pkj' WHERE id_penduduk=$id");

		if ($update) {
			echo "<script>
			swal('Data Telah Ditambahkan !',{
				icon:'success',
				button: false,
				timer:3500
			});
			location=(href='?penduduk');
		</script>";
		}else{
			echo "<script>
			swal('Data Gagal Ditambahkan !',{
				title:'Gagal !',
				icon:'error',
				button: false,
				timer:3500
			});
		</script>";
		}
	}else{
		echo "<script>
			swal('Harap Isi Form Dengan Lengkap !',{
				title:'Gagal !',
				icon:'warning',
				button: false,
				timer:3500
			});
		</script>";
	}
}
?>