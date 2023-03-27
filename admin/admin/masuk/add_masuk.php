<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		    <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_masuk" name="id_masuk" placeholder="Nomor Surat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pengirim</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Nama Pengirim" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Surat</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_surat" name="tgl_surat" placeholder="Tgl Surat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Terima Surat</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_terima" name="tgl_terima" placeholder="Tgl Surat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hal Surat</label>
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
			<a href="?page=data-masuk" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_sumas (id_masuk, id_pengguna, pengirim, tgl_surat, tgl_terima, perihal) VALUES (
            '".$_POST['id_masuk']."',
			'".$_POST['id_pengguna']."',
			'".$_POST['pengirim']."',
            '".$_POST['tgl_surat']."',
            '".$_POST['tgl_terima']."',
            '".$_POST['perihal']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-masuk';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-masuk';
          }
      })</script>";
    }}
     //selesai proses simpan data
