<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_mendu'];
	}

	date_default_timezone_set("asia/makassar");
	$tanggal = date("m/y");
	$tgl = date("d F Y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIDA PARIANUM</title>
	<link rel="icon" href="kutim.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body>
	<center>
			<table>
				<td><img src="kutim.png" height="70px" width="80px"></td>
				<td><b>
					<center>
						<font size="4">PEMERINTAH KABUPATEN KUTAI TIMUR</font><br>
						<font size="4">KANTOR DESA PERSIAPAN PARIANUM</font><br>
						<font size="4">KECAMATAN MUARA BENGKAL</font><br>
					</center></b>
				</td>
			</table>
			<font size="2">Alamat: Jln. Mulawarwan RT. 06 Desa Persiapan Parianum, Kec. Muara Bengkal Kode Pos (75656)</font><br>
			___________________________________________________________________________________________
		
</center>
		<?php
			$sql_tampil = "SELECT m.id_mendu, m.tgl_mendu, m.tempat_mendu, m.sebab, p.nik, p.nama, p.tempat_lh, p.tgl_lh, p.desa, p.rt, p.rw, p.agama, p.kawin, p.pekerjaan from tb_mendu m inner join tb_pdd p on 
			m.id_pdd=p.id_pend
			where id_mendu ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	<br>
	<center>
			<b><u><font size="4">SURAT KETERANGAN KEMATIAN</font><br></u></b>
			<table style="padding-left: 40px;">
				<tr>
					<td>Nomor : <?php echo $_POST ['surat'] ?></td>
				</tr>
			</table>
	</center>

	<p><span style="padding-left: 20px;">Yang bertandatangan dibawah ini:</span><br></p>
		<table style="padding-left: 40px;">
			<tbody>
				<tr>
				<td>Nama</td>
				<td>:</td>
				<td>RODIANSYAH</td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td>19760506 200901 1 011</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>PJ. Kepala Desa Persiapan Parianum</td>
			</tr>
			</tbody>
		</table>
	<br>

	<p><span style="padding-left: 20px;">Dengan ini menerangkan bahwa yang bersangkutan dibawah benar telah <b>Meninggal Dunia</b> :</span><br></p>
	<table style="padding-left: 40px;">
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat dan Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>, 
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['desa']; ?>, RT.
					<?php echo $data['rt']; ?>, RW.
					<?php echo $data['rw']; ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $data['agama']; ?>
				</td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td>:</td>
				<td>
					<?php echo $data['kawin']; ?>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>
					<?php echo $data['pekerjaan']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Meninggal</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_mendu']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat Meninggal</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_mendu']; ?>
				</td>
			</tr>
			<tr>
				<td>Sebab</td>
				<td>:</td>
				<td>
					<?php echo $data['sebab']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<p><span style="padding-left: 20px;">Demikian Surat keterangan ini kami berikan dengan sebenarnya untuk dipergunakan 
		sebagaimana mestinya.</span></P>
	<br>
	<br>
	<br>
	<br>
	
	<span style="padding-left:50%;"> Parianum,</span>
		<?php echo $tgl; ?>
		<br><span style="padding-left:50%;"> PJ KEPALA DESA PERSIAPAN PARIANUM</span>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<b><u><span style="padding-left:60%;">RODIANSYAH</span></u></b><br>
		<span style="padding-left:55%;">NIP. 19760506 200901 1 001</span>


	<script>
		window.print();
	</script>

</body>

</html>