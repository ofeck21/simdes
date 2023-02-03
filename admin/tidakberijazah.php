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
	margin-top:30px;
	margin-bottom:15px;
	text-transform:uppercase;
	font-size:14px;
	padding:10px;
}
.penerima{
	margin:25px;
	font-size:16px;
}
.penerima table tr td{
	padding:8px;
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
<page backleft='25mm' backright='25mm' backtop='20mm' backbottom='20mm' >

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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan di bawah ini Kepala Desa Jambringin, Kecamatan Proppo, Kabupaten Pamekasan menerangkan bahwa :
		</p>
	</div>

	<div class='penerima'>
		<table>
			<tr>
				<td>Nama Lengkap </td>
				<td> : </td>
				<td> $row[nama] </td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir </td>
				<td> : </td>
				<td> $row[tmp_lahir], ".tanggal($row['tgl_lahir'])." </td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td> : </td>
				<td> $row[gendre] </td>
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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Orang tersebut di atas adalah benar-benar penduduk Desa Jambringin Kecamatan Proppo Kabupaten Pamekasan, dan yang bersangkutan <strong>$row[keterangan]</strong>.<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surat Keterangan ini dipergunakan Untuk: $keperluan<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian Surat Keterangan ini saya buat dengan sebenarnya dan dapat dipergunakan sebangaimana mestinya.
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