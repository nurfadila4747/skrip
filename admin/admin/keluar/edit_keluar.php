<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_sukel WHERE id_keluar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Surat</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_keluar" name="id_keluar" value="<?php echo $data_cek['id_keluar']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Surat</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_surat" name="tgl_surat" value="<?php echo $data_cek['tgl_surat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tujuan Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $data_cek['tujuan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Perihal Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perihal" name="perihal" value="<?php echo $data_cek['perihal']; ?>"
					/>
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
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-masuk" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_sukel SET 
		tgl_surat='".$_POST['tgl_surat']."',
		tujuan='".$_POST['tujuan']."',
		perihal='".$_POST['perihal']."',
		id_pengguna='".$_POST['id_pengguna']."'
		WHERE id_keluar='".$_POST['id_keluar']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-keluar';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-keluar';
        }
      })</script>";
    }}
