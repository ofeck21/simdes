    <!-- Page Content -->
    <div class="container">
<hr>
      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-12 col-md-12 mb-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Anda Meminta "<?php echo $js['jenis_surat'] ?>"</h4>
            </div>
            <div class="card-body" style="height: 530px;">
              <?php 
              if (mysqli_num_rows($sp) == 0) {
                echo '<script>
                  swal("Maaf, NIK Tidak Ditemukan !", {
                    title:"Oops !",
                    icon: "warning"
                  })
                  .then((value) => {
                    window.location.href = "index.php";
                  });
                </script>';
              }else{
               ?>
                <form method="POST" action="">
                  <input type="hidden" name="id_penduduk" value="<?php echo $pd[0] ?>">
                  <input type="hidden" name="id_surat" value="<?php echo $js[0] ?>">
                  <input type="hidden" name="hp" value="<?php echo $hp ?>">
                  <input type="hidden" name="keperluan" value="<?php echo $ke ?>">

                  <div class="form-group row" align="right">
                    <label for="staticEmail" class="col-sm-4 col-form-label">NIK :</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="nik" value="<?php echo $pd['nik'] ?>">
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Nama Lengkap :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['nama'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['tmp_lahir'],', ', tanggal($pd['tgl_lahir']) ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Alamat :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['alamat'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['gendre'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['agama'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['status'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row" align="right">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" value="<?php echo $pd['pekerjaan'] ?>" readonly>
                    </div>
                  </div>

                  <a href="?layanan" class="btn btn-lg btn-secondary">Batal</a>
                  <input type="submit" name="lanjut" value="Lanjut" class="btn btn-lg btn-info">
                </form>
              <?php } ?>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->