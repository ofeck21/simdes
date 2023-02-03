<?php  
$pd = mysqli_query($con, "SELECT * FROM  penduduk ORDER BY id_penduduk DESC") ;

?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-secondary text-white">
				<a href="#tambahData" class="btn btn-sm btn-info pull-right" data-toggle="modal" data-target="#tambah">Tambah Data</a>
				<h4>Data Penduduk Desa Jambringin</h4>
			</div>
			<div class="card-body">
				<table class="table table-hover table-bordered" id="table">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kontak</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						if (mysqli_num_rows($pd) == 0 ) {
						 	echo "<tr><td colspan='100%'>Tidak Ada Permohonan Surat</td></tr>";
						 } else{
						$no = 1;
						while ($row = mysqli_fetch_array($pd)) { ?>

						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $row['nik'] ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td><?php echo $row['alamat'] ?></td>
							<td><?php echo $row['kontak'] ?></td>
							<td>
								<a href="#edit" id="<?php echo $row[0]?>" class="btn btn-sm btn-secondary" title="Detail" data-toggle="modal" data-target="#detail" data-id='<?php echo $row['id_penduduk'] ?>'><i class="fa fa-exclamation-circle"></i></a>
								<a href="#edit" id="<?php echo $row[0]?>" class="btn btn-sm btn-secondary" title="Ubah"  data-toggle="modal" data-target="#edit" data-id='<?php echo $row['id_penduduk'] ?>'><i class="fa fa-edit"></i></a>
								<a href="?peduduk&hapus_data=<?php echo $row[0]?>" onclick="return confirm('Apa Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
							
					<?php
					$no++;		
						}
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<br>
