<?php

$content = "
<style>
*{
	font-family: Times;
}

.logo{
	margin-right:30px;
}
.header{
	text-align:center;
}
table{margin:auto;}
.headtop{
	font-size:18px;
}
.headcen{
	font-size:23px;
	font-style:bold;
}
.headbot{
	font-size:25px;
	font-style:bold;
}
.surat{
	text-align:center;
	margin-top:20px;
	text-transform:uppercase;
	font-size:14px;
	padding:10px;
}
.penerima{
	margin:20px;
}
table tr td{
	padding:5px;
}
.ttd{
	text-align:center;
	width:200px;
	margin-left:400px;
	margin-top:20px;
}
</style>
";

$content .= "
<page backleft='25mm' backright='25mm' backtop='15mm' backbottom='20mm' >

	<div class='header'>
		<table>
			<tr>
			<td><img src='img/pamekasan.png' width='70' height='70' class='logo'></td>
			<td><span class='headtop'>PEMERINTAH KABUPATEN PAMEKASAN</span><br>
				<span class='headcen'>KECAMATAN PROPPO</span><br>
				<span class='headbot'>KEPALA DESA JAMBRINGIN</span><br>
			</td>
			</tr>
		</table>
	</div><hr>

	<div class='surat'>
		<u><span>$row[jenis_surat]</span></u><br>
		<strong>Nomor :</strong> $nomor / 423.505.22 / 201
	</div>

	<div class='isisurat'>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan di bawah ini Kepala Desa Jambringin, Kecamatan Proppo, Kabupaten Pamekasan menerangkan dengan sebenaranya, bahwa :
		</p>
	</div>

	<div class='penerima'>
		<table>
			<tr>
				<td>Nama Lengkap </td>
				<td> : </td>
				<td> $row[keperluan] </td>
			</tr>
			<tr>
				<td>NIK </td>
				<td> : </td>
				<td> $row[nik] </td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir </td>
				<td> : </td>
				<td> $row[tmp_lahir], ".tanggal($row['tgl_lahir'])." </td>
			</tr>
			<tr>
				<td>Pekerjaan </td>
				<td> : </td>
				<td> $row[pekerjaan] </td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td> : </td>
				<td> $row[alamat] </td>
			</tr>
			<tr>
				<td colspan='3'><strong>Dengan </strong></td>
			</tr>
			<tr>
				<td>Nama Lengkap </td>
				<td> : </td>
				<td> $row[nama] </td>
			</tr>
			<tr>
				<td>NIK </td>
				<td> : </td>
				<td> $row[nik] </td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir </td>
				<td> : </td>
				<td> $row[tmp_lahir], ".tanggal($row['tgl_lahir'])." </td>
			</tr>
			<tr>
				<td>Pekerjaan </td>
				<td> : </td>
				<td> $row[pekerjaan] </td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td> : </td>
				<td> $row[alamat] </td>
			</tr>
		</table>
	</div>

	<div class='isisurat'>
		<p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Orang tersebut di atas adalah benar-benar penduduk Desa Jambringin Kecamatan Proppo Kabupaten Pamekasan dan kedua nama tersebut di atas benar-benar satu orang. Kemudian keterangan yang benar dari kedua keterangan di atas berdasarkan pengakuan yang bersangkutan adalah :
		</p>
		<table>
			<tr>
				<td>Nama Lengkap </td>
				<td> : </td>
				<td> $row[keperluan] </td>
			</tr>
			<tr>
				<td>NIK </td>
				<td> : </td>
				<td> $row[nik] </td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir </td>
				<td> : </td>
				<td> $row[tmp_lahir], ".tanggal($row['tgl_lahir'])." </td>
			</tr>
			<tr>
				<td>Pekerjaan </td>
				<td> : </td>
				<td> $row[pekerjaan] </td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td> : </td>
				<td> $row[alamat] </td>
			</tr>
		</table>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian Surat keterangan Ini Dibuat Dengan Sebenarnya Dan Dapat Dipergunakan Bilamana  Perlu.
		</p>
	</div>

	<div class='ttd'>
		Proppo, ";

$content .= date('d-m-Y');

$content .="<br><br>
		<strong>KEPALA DESA JAMBRINGIN</strong>
		<br><br><br><br><br>
		<strong><u>MUHENDAN</u></strong>
	</div>
</page>
";
?>