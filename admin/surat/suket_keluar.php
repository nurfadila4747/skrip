<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Surat Keluar Sks PPKH</h3>
	</div>
	<form action="./report/cetak_keluar.php" target="_blank" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
					<select name="id_datang" id="id_datang" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php
				// ambil data dari database
				$query = "select * from tb_umum";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_umum'] ?>">
							<?php echo $row['pbphh'] ?>
							-
							<?php echo $row['alamat'] ?>
						</option>
						<?php
				}
				?>
					</select>
				</div>
			</div>

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Surat</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="surat" name="surat" placeholder="415.12/59/PRM-01/IX/2021" required="">
			</div>
		</div>

		</div>
		<div class="card-footer">

			<input type="submit" name="Cetak" value="Cetak Surat" class="btn btn-info"></input>
		</div>
	</form>
</div>