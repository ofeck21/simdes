<?php  
$belum = mysqli_query($con, "SELECT * FROM (( request 
				        	INNER JOIN penduduk ON request.id_penduduk = penduduk.id_penduduk) 
				        	INNER JOIN surat ON request.id_surat = surat.id_surat ) WHERE request.status = 0") ;

?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h4 class="card-header bg-danger text-white">Data Permohonan Surat Belum Di Proses</h4>
			<div class="card-body">
				<table class="table table-hover table-bordered" id="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Pemohon</th>
							<th>Jenis Surat</th>
							<th>Kontak</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						if (mysqli_num_rows($belum) == 0 ) {
						 	echo "<tr><td colspan='100%'>Tidak Ada Permohonan Surat</td></tr>";
						 } else{
						$no = 1;
						while ($row = mysqli_fetch_array($belum)) { ?>

						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td><?php echo $row['jenis_surat'] ?></td>
							<td><?php echo $row['kontak'] ?></td>
							<td><a href="#proses" class="btn btn-sm btn-info" data-toggle="modal" data-target="#proses" data-id='<?php echo $row['id_req'] ?>'>Proses</a></td>
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