<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Surat Masuk</h3>
	</div>
	<form action="./report/cetak_lahir.php" target="_blank" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masuk</label>
				<div class="col-sm-6">
					<select name="lahir" id="lahir" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php
				// ambil data dari database
				$query = "select * from tb_lahir";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_lahir'] ?>">
							<?php echo $row['nama_lahir'] ?>
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