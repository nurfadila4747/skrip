<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_kawasan where id_kawasan ='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-thumbtack"></i> Detail Kawasan Hutan</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					<td style="width: 150px">
						<b>Kabupaten/Kota</b>
					</td>
					<td>:
						<?php echo $data_cek['kota']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>HL</b>
					</td>
					<td>:
						<?php echo $data_cek['hl']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>HPT</b>
					</td>
					<td>:
						<?php echo $data_cek['hpt']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>HP</b>
					</td>
					<td>:
						<?php echo $data_cek['hp']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>HPK</b>
					</td>
					<td>:
						<?php echo $data_cek['hpk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>KSA</b>
					</td>
					<td>:
						<?php echo $data_cek['ksa']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jumlah</b>
					</td>
					<td>:
						<?php echo $data_cek['jumlah']; ?>
					</td>
				</tr>
			
				
			</tbody>
		</table>

		<script>
		window.print();
	    </script>
		
	</div>
</div>