<?php 
require_once 'config.php';

if (isset($_POST['id_penduduk'])) {
  $id = $_POST['id_penduduk'];

  $select = mysqli_query($con, "SELECT * FROM penduduk WHERE id_penduduk=$id");
  $row = mysqli_fetch_array($select);

  // Konversi tanggal ke bahasa indonesia
function tanggal($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
    return($result);
}

 ?>
<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle"><strong> <?php echo $row['nama'] ?> </strong></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">NIK</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['nik'] ?>">
    </div>
  </div>
 
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Lengkap </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext" value=": <?php echo $row['nama'] ?>"  >
    </div>
  </div>
    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Tempat, Tanggal Lahir </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['tmp_lahir'].', '.tanggal($row['tgl_lahir']) ?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Alamat </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['alamat'] ?>">
    </div>
  </div>
    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Jenis Kelamin </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['gendre'] ?>">
    </div>
  </div>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agama </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['agama'] ?>">
    </div>
  </div>
     
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Status </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['status'] ?>">
    </div>
  </div>
     
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Pekerjaan </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['pekerjaan'] ?>">
    </div>
  </div>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">No Telepon </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value=": <?php echo $row['kontak'] ?>">
    </div>
  </div>
 
</div>

<?php } 

/*detail Request Surat*/
if (isset($_POST['id_req'])) {
  $id = $_POST['id_req'];

  $select = mysqli_query($con, "SELECT * FROM ((request 
                                INNER JOIN penduduk ON request.id_penduduk=penduduk.id_penduduk)
                                INNER JOIN surat ON surat.id_surat=request.id_surat) WHERE id_req=$id");
  $row = mysqli_fetch_array($select);

$c = mysqli_query($con, "SELECT max(no_surat) AS Large FROM cetaksurat");
$n = mysqli_fetch_array($c);

$nomor =$n['Large']+1;

 ?>
<div class="modal-body">

  <input type="hidden" name="id" value="<?php echo $row['id_req'] ?>">

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">NIK Pemohon</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value="<?php echo $row['nik'] ?>">
    </div>
  </div>
 
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Pemohon </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $row['nama'] ?>"  >
    </div>
  </div>
    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Jenis Surat </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value="<?php echo $row['jenis_surat'] ?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Alamat </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value="<?php echo $row['alamat'] ?>">
    </div>
  </div>
    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Jenis Kelamin </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value="<?php echo $row['gendre'] ?>">
    </div>
  </div>
<?php if ($row['id_surat']==1) { ?>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Keperluan </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="keperluan" value="<?php echo $row['keperluan'] ?>">
    </div>
  </div>
<?php }if ($row['id_surat']==3) { ?>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Yang Benar </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="keperluan" value="<?php echo $row['keperluan'] ?>">
    </div>
  </div>
<?php }if ($row['id_surat']==2) { ?>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Ayah </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="keperluan" value="<?php echo $row['keperluan'] ?>">
    </div>
  </div>
<?php } ?>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">No Telepon </label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext"  value="<?php echo $row['kontak'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">No Surat </label>
    <div class="col-sm-9">
      <input type="text" name="nomor" class="form-control"  value="<?php echo $nomor ?>">
    </div>
  </div>
</div>

<?php } ?>