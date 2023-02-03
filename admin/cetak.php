<?php  
require_once 'config.php';

$id= $_POST['id'];

$nomor = $_POST['nomor'];


$select = mysqli_query($con, "SELECT * FROM ((request 
                                INNER JOIN penduduk ON request.id_penduduk=penduduk.id_penduduk)
                                INNER JOIN surat ON surat.id_surat=request.id_surat) WHERE id_req=$id");
$row = mysqli_fetch_array($select);




if (isset($_POST['cetakSurat'])) {
	$q = "INSERT INTO cetaksurat (id_penduduk, id_surat, no_surat) VALUES ('$row[id_penduduk]', '$row[id_surat]', '$nomor')";
	$u = mysqli_query($con, "UPDATE request SET status=1 WHERE id_req=$id");
	$a = mysqli_query($con, $q);
	if ($a==false && $u==false) {
		echo "<script>
			swal('Gagal !',{
				icon:'error',
				button: false,
				timer:3500
			});
			location=(href='index.php');
		</script>";
	}
}


if (isset($_POST['keperluan'])) {
	$keperluan = $_POST['keperluan'];
}



  // Konversi tanggal ke bahasa indonesia
function tanggal($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1]. " ". $tahun;
    return($result);
}

if ($row['id_surat']==1) {
	require_once 'tidakberijazah.php';
}elseif ($row['id_surat']==2) {
	require_once 'tidakmampu.php';
}elseif ($row['id_surat']==3) {
	require_once 'bedanama.php';
}elseif ($row['id_surat']==4) {
	require_once 'berdomisili.php';
}else{
	die('Error: Jeni Surat Tidak Ditemukan'.$id);
}


require_once 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('P', 'A4', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output($id.'_cetak.pdf');
?>