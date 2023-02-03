<?php 
if (isset($_POST['request'])) {
 	$nik		= $_POST['nik'];
	$surat 		= $_POST['jenisSurat'];
	$ke 		= $_POST['keperluan'];
	$hp 		= $_POST['tlp'];

	$sp = mysqli_query($con, "SELECT * FROM penduduk WHERE nik = $nik ");
	$pd = mysqli_fetch_array($sp);

	$qs = mysqli_query($con, "SELECT * FROM surat WHERE id_surat = $surat");
	$js = mysqli_fetch_array($qs);

	  // Konversi tanggal ke bahasa indonesia
function tanggal($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
    return($result);
}

	require_once 'request.php';
 } 
 elseif (isset($_POST['lanjut'])) {
 	$id_surat	 	= $_POST['id_surat'];
 	$id_penduduk	= $_POST['id_penduduk'];
 	$ke 			= $_POST['keperluan'];
 	$hp 			= $_POST['hp'];

 	$req = mysqli_query ($con, "INSERT INTO request (id_req, id_penduduk, id_surat, tgl_req, status, kontak, keperluan) VALUES (null, '$id_penduduk', '$id_surat', CURRENT_TIMESTAMP, 0, '$hp', '$ke') ");

 	if ($req) {
 		echo '<script>
			swal("Permohonan Surat Berhasil !", {
                    icon: "success"
                  })
                  .then((value) => {
                    window.location.href = "index.php";
                  });
		</script>';
 	}else{
 		echo "<script>
			alert('Gagal !');
			location=(href='index.php');
		</script>";
 	}

 }


?>
