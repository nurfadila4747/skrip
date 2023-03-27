<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_permintaan WHERE id_permintaan='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_permintaan" name="id_permintaan" value="<?php echo $data_cek['id_permintaan']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data_cek['nama_lengkap']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jekel" name="jekel" value="<?php echo $data_cek['jekel']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat & Tanggal Lahir</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" value="<?php echo $data_cek['tempat_lh']; ?>"
					readonly/>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $data_cek['tgl_lahir']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Surat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jenis_surat" name="jenis_surat" value="<?php echo $data_cek['jenis_surat']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email/ WhatsApp</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hubungi" name="hubungi" value="<?php echo $data_cek['hubungi']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-3">
					<select name="status" id="status" class="form-control">
						
			<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['status'] == "Selesai") echo "<option value='Selesai' selected>Selesai</option>";
                	else echo "<option value='Selesai'>Selesai</option>";
            ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-permintaan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_permintaan SET 
		nama_lengkap='".$_POST['nama_lengkap']."',
		nik='".$_POST['nik']."',
		jekel='".$_POST['jekel']."',
		tempat_lh='".$_POST['tempat_lh']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_surat='".$_POST['jenis_surat']."',
		hubungi='".$_POST['hubungi']."',
		status='".$_POST['status']."'
		WHERE id_permintaan='".$_POST['id_permintaan']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-permintaan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-permintaan';
        }
      })</script>";
    }}
