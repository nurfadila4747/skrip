<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Umum PBPH</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">No SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="umum_id" name="umum_id" placeholder="No SK" required>
				</div>
			</div>

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pbphh" name="pbphh" placeholder="Nama Perusahaan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis</label>
				<div class="col-sm-3">
					<select name="jenis" id="jenis" class="form-control">
						<option>- Pilih -</option>
						<option>HA</option>
						<option>HT</option>
						<option>HA&HT</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="email" name="email" placeholder="email" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telpon</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="notelp" name="email" placeholder="telpon" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Wilayah Kerja</label>
				<div class="col-sm-4">
					<select name="id_kawasan" id="id_kawasan" class="form-control select2bs4" required>
						<option selected="selected">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_kawasan";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_kawasan'] ?>">
							<?php echo $row['kota'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kwl" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data

        $sql_simpan = "INSERT INTO tb_umum (umum_id, id_kawasan, pbphh, jenis, alamat, email, notelp) VALUES (
            '".$_POST['umum_id']."',
			'".$_POST['id_kawasan']."',
			'".$_POST['pbphh']."',
            '".$_POST['jenis']."',
			'".$_POST['alamat']."',
			'".$_POST['email']."',
			'".$_POST['notelp']."')";
			
			
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-umum';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-umum';
          }
      })</script>";
    }}
     //selesai proses simpan data