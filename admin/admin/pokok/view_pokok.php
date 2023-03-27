<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_pokok where id_pokok ='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-thumbtack"></i> Detail Pokok Cadangan PBPH</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					<td style="width: 150px">
						<b>Nama Perusahaan</b>
					</td>
					<td>:
						<?php echo $data_cek['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jenis</b>
					</td>
					<td>:
						<?php echo $data_cek['jenis']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nomor SK</b>
					</td>
					<td>:
						<?php echo $data_cek['nosk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Luas SK</b>
					</td>
					<td>:
						<?php echo $data_cek['luassk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Keterangan</b>
					</td>
					<td>:
						<?php echo $data_cek['ket']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Provinsi</b>
					</td>
					<td>:
						<?php echo $data_cek['provinsi']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Tanggal SK</b>
					</td>
					<td>:
						<?php echo $data_cek['tgl']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Info SK</b>
					</td>
					<td>:
						<?php echo $data_cek['info']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Sumber 1</b>
					</td>
					<td>:
						<?php echo $data_cek['sumber1']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Sumber 2</b>
					</td>
					<td>:
						<?php echo $data_cek['sumber2']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Jenis SK</b>
					</td>
					<td>:
						<?php echo $data_cek['jenissk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status Berlaku</b>
					</td>
					<td>:
						<?php echo $data_cek['berlaku']; ?>
					</td>
				</tr>
				
			</tbody>
		</table>
		
		<script>
		window.print();
	    </script>

	</div>
</div>