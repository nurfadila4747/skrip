<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Surat Keterangan Domisili</h3>
	</div>
	<form action="./report/cetak_pindah.php" target="_blank" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="id_pend" id="id_pend" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php
				// ambil data dari database
				$query = "select * from tb_pdd where status='Pindah'";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_pend'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama'] ?>
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

			<input type="submit" name="Cetak" value="Cetak Surat" class="btn btn-info">
		</div>
	</form>
</div>