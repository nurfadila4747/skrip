<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_keluar" name="id_keluar" placeholder="No Surat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Surat</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_surat" name="tgl_surat" placeholder="Tgl Surat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tujuan Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Perilal Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Disposisi</label>
				<div class="col-sm-4">
					<select name="id_pengguna" id="id_pengguna" class="form-control select2bs4" required>
						<option selected="selected">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_pengguna";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_pengguna'] ?>">
							<?php echo $row['nama_pengguna'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kel" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_sukel (id_keluar, id_pengguna, tgl_surat, tujuan, perihal) VALUES (
            '".$_POST['id_keluar']."',
			'".$_POST['id_pengguna']."',
            '".$_POST['tgl_surat']."',
            '".$_POST['tujuan']."',
            '".$_POST['perihal']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-keluar';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-keluar';
          }
      })</script>";
    }}
     //selesai proses simpan data
