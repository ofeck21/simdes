<?php
/*proses hapus anggota*/
if (isset($_GET['hapus_data'])) {
	$id = $_GET['hapus_data'];

	$hps = mysqli_query($con, "DELETE FROM penduduk WHERE id_penduduk=$id");
	$hapus = mysqli_query($con, "DELETE FROM request WHERE id_penduduk=$id");

	if ($hps) {
		echo "<script>
			swal({
				  position: 'center',
				  type: 'success',
				  title: 'Data Telah Dihapus !',
				  showConfirmButton: false,
				  timer: 2500
				});
				location=(href='?penduduk');
			</script>";
	}else{
		echo "<script>
			swal({
				  position: 'center',
				  type: 'error',
				  title: 'Data Gagal Dihapus !',
				  showConfirmButton: false,
				  timer: 2500
				});
				location=(href='?penduduk');
			</script>";
	}
}

?>