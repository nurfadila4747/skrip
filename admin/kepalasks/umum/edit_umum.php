<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_umum WHERE id_umum='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Umum PBPH</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_umum" name="id_umum" value="<?php echo $data_cek['id_umum']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="umum_id" name="umum_id" value="<?php echo $data_cek['umum_id']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pbphh" name="pbphh" value="<?php echo $data_cek['pbphh']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis</label>
				<div class="col-sm-3">

				<select name="jenis" id="jenis" class="form-control">
                <option value="">-- Pilih --</option>
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['jenis'] == "HA") echo "<option value='HA' selected>HA</option>";
                else echo "<option value='HA'>HA</option>";

                if ($data_cek['jenis'] == "HT") echo "<option value='HT' selected>HT</option>";
                else echo "<option value='HT'>HT</option>";

				if ($data_cek['jenis'] == "HA&HT") echo "<option value='HA&HT' selected>HA&HT</option>";
                else echo "<option value='HA&HT'>HA&HT</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telpon</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $data_cek['notelp']; ?>"
					/>
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
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-umum" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_umum SET 
		pbphh='".$_POST['pbphh']."',
		jenis='".$_POST['jenis']."',
		alamat='".$_POST['alamat']."',
		email='".$_POST['email']."',
		notelp='".$_POST['notelp']."',
		id_kawasan='".$_POST['id_kawasan']."'
		WHERE id_umum='".$_POST['id_umum']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-umum';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-umum';
        }
      })</script>";
    }}
