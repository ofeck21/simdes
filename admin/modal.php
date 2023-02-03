<!-- Modal Detail Penduduk -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="hasil-data"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<!-- End Modal Detail Penduduk -->

<!-- Modal Tambah Penduduk -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h5 class="modal-title" id="exampleModalCenterTitle"><strong> Tambah Data </strong></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		</div>
		<form method="POST" action="">
		<div class="modal-body">

		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label" >NIK </label>
		    <div class="col-sm-9">
		      <input type="text" name="nik" class="form-control" placeholder="Nomor Induk Keluarga">
		    </div>
		  </div>
		 
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Nama Lengkap </label>
		    <div class="col-sm-9">
		      <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"  >
		    </div>
		  </div>
		    
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Tempat, Tanggal Lahir </label>
		    <div class="col-sm-5">
		      <input type="text" name="tmp_lahir" class="form-control"  placeholder="Tempat Lahir" >
		    </div>
		    <div class="col-sm-4">
		      <input type="date" name="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir">
		    </div>
		  </div>
		  
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Alamat </label>
		    <div class="col-sm-9">
		      <input type="text" name="alamat" class="form-control" placeholder="Alamat">
		    </div>
		  </div>
		    
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Jenis Kelamin </label>
		    <div class="col-sm-9">
		      <select name="gendre" class="form-control">
		      	<option value="">Pilih...</option>
		      	<option value="Laki-Laki">Laki-Laki</option>
		      	<option value="Perempuan">Perempuan</option>
		      </select>
		    </div>
		  </div>
		      
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Agama </label>
		    <div class="col-sm-9">
		      <input type="text" name="agama" class="form-control" placeholder="Agama">
		    </div>
		  </div>
		     
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Status </label>
		    <div class="col-sm-9">
		      <select name="status" class="form-control">
		      	<option value="">Pilih...</option>
		      	<option value="Kawin">Kawin</option>
		      	<option value="Belum Kawin">Belum Kawin</option>
		      </select>
		    </div>
		  </div>
		     
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">Pekerjaan </label>
		    <div class="col-sm-9">
		      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
		    </div>
		  </div>
		      
		  <div class="form-group row">
		    <label class="col-sm-3 col-form-label">No Telepon </label>
		    <div class="col-sm-9">
		      <input type="text" name="tlp" class="form-control" placeholder="No Telepon">
		    </div>
		  </div>
		 
		</div>
        <div class="modal-footer">
        	<button type="submit" name="tambahData" class="btn btn-primary">Tambah</button>
          	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </form>
  </div>
</div>
<!-- End Modal Tambah Penduduk -->

<!-- Modal Detail Penduduk -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="hasil-data"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<!-- End Modal Detail Penduduk -->

<!-- Modal Edit Penduduk -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h5 class="modal-title" id="exampleModalCenterTitle"><strong> Ubah Data </strong></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		</div>
		<form method="POST" action="">
		<div class="modal-body">

		  <div class="hasil-data"></div>
		 
		</div>
        <div class="modal-footer">
        	<button type="submit" name="ubahData" class="btn btn-primary">Simpan</button>
          	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </form>
  </div>
</div>
<!-- End Modal edit Penduduk -->

<!-- Modal Proses Surat -->
<div class="modal fade" id="proses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h5 class="modal-title" id="exampleModalCenterTitle"><strong> Permohonan Surat </strong></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		</div>
		<form method="POST" action="cetak.php">
		<div class="modal-body">

		  <div class="hasil-data"></div>
		 
		</div>
        <div class="modal-footer">
        	<button type="submit" name="cetakSurat" class="btn btn-primary">Cetak</button>
          	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </form>
  </div>
</div>
<!-- End Modal Proses Surat -->