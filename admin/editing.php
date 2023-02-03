<?php 
require_once 'config.php';
if (isset($_POST['id_penduduk'])) {
	$id = $_POST['id_penduduk'];

	$q = mysqli_query($con, "SELECT * FROM penduduk WHERE id_penduduk=$id");
	$row = mysqli_fetch_array($q);
}
 ?>
 <input type="hidden" name="id" value="<?php echo $id ?>">

  <div class="form-group row">
    <label class="col-sm-3 col-form-label" >NIK </label>
    <div class="col-sm-9">
      <input type="text" name="nik" class="form-control" value="<?php echo $row['nik'] ?>">
    </div>
  </div>
 
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Lengkap </label>
    <div class="col-sm-9">
      <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>" >
    </div>
  </div>
    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Tempat, Tanggal Lahir </label>
    <div class="col-sm-5">
      <input type="text" name="tmp_lahir" class="form-control"  value="<?php echo $row['tmp_lahir'] ?>">
    </div>
    <div class="col-sm-4">
      <input type="date" name="tgl_lahir" class="form-control"   value="<?php echo $row['tgl_lahir'] ?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Alamat </label>
    <div class="col-sm-9">
      <input type="text" name="alamat" class="form-control"  value="<?php echo $row['alamat'] ?>">
    </div>
  </div>
    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Jenis Kelamin </label>
    <div class="col-sm-9">
      <select name="gendre" class="form-control">
      	<option  value="<?php echo $row['gendre'] ?>">-- <?php echo $row['gendre'] ?> --</option>
      	<option value="Laki-Laki">Laki-Laki</option>
      	<option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agama </label>
    <div class="col-sm-9">
      <input type="text" name="agama" class="form-control"  value="<?php echo $row['agama'] ?>">
    </div>
  </div>
     
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Status </label>
    <div class="col-sm-9">
      <select name="status" class="form-control">
      	<option  value="<?php echo $row['status'] ?>">--  <?php echo $row['status'] ?> --</option>
      	<option value="Kawin">Kawin</option>
      	<option value="Belum Kawin">Belum Kawin</option>
      </select>
    </div>
  </div>
     
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Pekerjaan </label>
    <div class="col-sm-9">
      <input type="text" name="pekerjaan" class="form-control"  value="<?php echo $row['pekerjaan'] ?>">
    </div>
  </div>
      
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">No Telepon </label>
    <div class="col-sm-9">
      <input type="text" name="tlp" class="form-control"  value="<?php echo $row['kontak'] ?>">
    </div>
  </div>