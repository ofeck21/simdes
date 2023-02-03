<?php  
$sudah = mysqli_query($con, "SELECT * FROM (( cetaksurat 
				        	INNER JOIN penduduk ON cetaksurat.id_penduduk = penduduk.id_penduduk) 
				        	INNER JOIN surat ON cetaksurat.id_surat = surat.id_surat )") ;
?>

<!-- Layout Sudah -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h4 class="card-header bg-success text-white">Data Surat Keluar</h4>
			<div class="card-body">
				<table class="table table-hover table-bordered" id="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal Cetak</th>
							<th>No Surat</th>
							<th>Pemohon</th>
							<th>Jenis Surat</th>
							<th>Kontak</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					if (mysqli_num_rows($sudah) == 0 ) {
						 	echo "<tr><td colspan='100%'>Tidak Ada Permohonan Surat Yang Sudah Diproses.</td></tr>";
						 } else{ 
						$no = 1;
						while ($row = mysqli_fetch_array($sudah)) { ?>

						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $row['tgl_cetak'] ?></td>
							<td><?php echo $row['no_surat'] ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td><?php echo $row['jenis_surat'] ?></td>
							<td><?php echo $row['kontak'] ?></td>
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