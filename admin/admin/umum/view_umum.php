<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_umum where id_umum ='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-thumbtack"></i> Detail Umum PBPH</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	
	<div class="card-body p-0">
		<table class="table">
			<tbody>
			
			<tr>
					<td style="width: 150px">
						<b>No SK</b>
					</td>
					<td>:
						<?php echo $data_cek['id_umum']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama Perusahaan</b>
					</td>
					<td>:
						<?php echo $data_cek['pbphh']; ?>
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
						<b>Alamat</b>
					</td>
					<td>:
						<?php echo $data_cek['alamat']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Email</b>
					</td>
					<td>:
						<?php echo $data_cek['email']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Telpon</b>
					</td>
					<td>:
						<?php echo $data_cek['notelp']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Kawasan</b>
					</td>
					<td>:
						<?php echo $data_cek['id_kawasan'];
						  ?>
					</td>
				</tr>

				
			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-umum" class="btn btn-warning">Kembali</a> &nbsp;
			
		</div>
			
		</div>
	</div>
</div>

	
			