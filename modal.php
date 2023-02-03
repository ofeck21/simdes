<!-- Modal Request Surat -->
<div class="modal fade" id="requestSurat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Request Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
        <div class="modal-body">
            <div class="form-group">
              <label>NIK :</label>
              <input type="text" name="nik" id="nik" placeholder="Nomor Induk Keluarga" class="form-control" required>
              <span id="warning-nik" style="color: #f98275;"></span>
            </div>
            <div class="form-group">
              <label>Jenis Surat :</label>
              <select name="jenisSurat" id="jenisSurat" class="form-control" required>
                <option value="">-- Pilih Jenis Surat --</option>
                <option value="1">Surat Keterangan Tidak Berijazah</option>
                <option value="2">Surat Keterangan Tidak Mampu</option>
                <option value="3">Surat Keterangan Beda Nama</option>
                <option value="4">Surat Keterangan Berdomisili</option>
              </select>
              <span id="warning-surat" style="color: #f98275;"></span>
            </div>
            <div class="form-group">
              <label>Keterangan/Keperluan/Nama Ayah/Nama Yang Benar :</label>
              <input type="text" name="keperluan" placeholder="Keterangan/Keperluan/Nama Ayah/Nama Yang Benar" class="form-control" required>
              <small class="form-text text-muted">Catatan: <br>Jika Surat Keterangan Tidak Berijazah/Domisili Isi Keperluan, <br> Jika Surat Keterangn Beda Nama Isi Nama Yang Benar,<br> Jika Surat Keterangan Tidak Mampu Isi Nama Ayah,</small>
            </div>
            <div class="form-group">
              <label>Nomor Telepon :</label>
              <input type="text" name="tlp" id="tlp" placeholder="Nomor Telepon" class="form-control" required>
              <span id="warning-tlp" style="color: #f98275;"></span>
            </div>
            <div class="alert alert-danger">
              Perhatian : <hr>
              - Pastikan nomor yang anda masukan dapat dihubungi, karena pemberitahuan proses permohonan surat akan di kirim ke nomor tersebut.<br>
              - Proses permohonan surat akan di verifikasi paling lambat 1x24 jam (pada jam kerja).
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="request" class="btn btn-primary">Request</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Request Surat -->

<!-- Modal Request Surat Tertentu -->
<div class="modal fade" id="mintaSurat" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Request Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form method="POST" action="">
        <div class="modal-body">
            <div class="form-group">
              <label>NIK :</label>
              <input type="text" name="nik" id="nik2" placeholder="Nomor Induk Keluarga" class="form-control" required>
              <span id="warning-nik" style="color: #f98275;"></span>
            </div>
            <div class="form-group">
              <label>Jenis Surat :</label>
              <select name="jenisSurat" id="jenisSurat" class="form-control" required>
                <option class="surat"></option>
                <option value="1">Surat Keterangan Tidak Berijazah</option>
                <option value="2">Surat Keterangan Tidak Mampu</option>
                <option value="3">Surat Keterangan Beda Nama</option>
                <option value="4">Surat Keterangan Berdomisili</option>
              </select>
              <span id="warning-surat" style="color: #f98275;"></span>
            </div>
            <div class="form-group">
              <label>Keterangan/Keperluan/Nama Ayah/Nama Yang Benar :</label>
              <input type="text" name="keperluan" placeholder="Keterangan/Keperluan/Nama Ayah/Nama Yang Benar" class="form-control" required>
              <small class="form-text text-muted">Catatan: <br>Jika Surat Keterangan Tidak Berijazah/Domisili Isi Keperluan, <br> Jika Surat Keterangn Beda Nama Isi Nama Yang Benar,<br> Jika Surat Keterangan Tidak Mampu Isi Nama Ayah,</small>
            </div>
            <div class="form-group">
              <label>Nomor Telepon :</label>
              <input type="text" name="tlp" id="tlp" placeholder="Nomor Telepon" class="form-control" required>
              <span id="warning-tlp" style="color: #f98275;"></span>
            </div>
            <div class="alert alert-danger">
              Perhatian : <hr>
              - Pastikan nomor yang anda masukan dapat dihubungi, karena pemberitahuan proses permohonan surat akan di kirim ke nomor tersebut.<br>
              - Proses permohonan surat akan di verifikasi paling lambat 1x24 jam (pada jam kerja).
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="request" class="btn btn-primary">Request</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
  
</div>
</div>
<!-- end modal Request Surat Tertentu -->