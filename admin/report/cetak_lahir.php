<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['lahir'];
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
	<title>DISHUT KALTIM</title>
	<link rel="icon" href="kaltim.png">
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
				<tr>
				<td><img src="kaltim.png" height="70px" width="80px"></td>
				<td><b>
					<center>
						<font size="4">PEMERINTAH PROVINSI KALIMANTAN TIMUR</font><br>
						<font size="4">KANTOR DINAS KEHUTANAN</font><br>
						<font size="4">KOTA SAMARINDA</font><br>
					</center></b>
				</td>
				</tr>
			</table>
			<font size="2">Alamat Jl. Kesuma Bangsa, Sungai Pinang Luar, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124</font><br>
			___________________________________________________________________________________________
		

		<?php
			$sql= "SELECT l.id_lahir, l.nama_lahir, l.tempat_lh, l.tgl_lh,p.nama, l.jekel, l.bidan, k.kepala from 
			  tb_lahir l inner join tb_kk k on k.id_kk=l.id_kk inner join tb_pdd p on p.id_pend=l.id_pend where id_lahir='$id'";
			$sql_tampil = "select * from tb_lahir where id_lahir='$id'";

			$query_tampil = mysqli_query($koneksi, $sql);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<br>
	<center>
			<b><u><font size="4">SURAT KELUAR</font><br></u></b>
			<table>
				<tr>
					<td>Nomor : <?php echo $_POST ['surat'] ?></td>
				</tr>
			</table>
	</center>

	<p><span style="padding-left: 20px;">Yang bertandatangan dibawah ini:</span> <br></p>
		<table style="padding-left: 40px;">
			<tbody>
				<tr>
				<td>Nama</td>
				<td>:</td>
				<td>NANANG HAYANI</td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td>19760506 200901 1 011</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>SKS PKKNK</td>
			</tr>
			</tbody>
		</table>
	<br>

	<p><span style="padding-left: 20px;"> Menerangkan adanya surat perintah tugas :</span>
	<br></p>
	<table style="padding-left: 40px;">
		<tbody>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_lahir']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal & Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>, 
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td>
					<?php echo $data['kepala']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama Bidan</td>
				<td>:</td>
				<td>
					<?php echo $data['bidan']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<p><span style="padding-left: 20px;">Demikian Surat keterangan ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya.</span></P>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
		<span style="padding-left:50%;"> Dinas Kehutanan</span>
		<?php echo $tgl; ?>
		<br><span style="padding-left:50%;"> SKS PKKNK</span>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<b><u><span style="padding-left:60%;">NANANG HAYANI</span></u></b><br>
		<span style="padding-left:55%;">NIP. 19760506 200901 1 001</span>
	


	<script>
		window.print();
	</script>

</body>

</html>