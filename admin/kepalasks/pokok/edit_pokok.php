<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pokok WHERE id_pokok='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Pokok Tambahan PBPH</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_pokok" name="id_pokok" value="<?php echo $data_cek['id_pokok']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
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
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nosk" name="nosk" value="<?php echo $data_cek['nosk']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Luas SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="luassk" name="luassk" value="<?php echo $data_cek['luassk']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="ket" name="ket" value="<?php echo $data_cek['ket']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Provinsi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $data_cek['provinsi']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $data_cek['tgl']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Info SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="info" name="info" value="<?php echo $data_cek['info']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sumber 1</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sumber1" name="sumber1" value="<?php echo $data_cek['sumber1']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sumber 2</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sumber2" name="sumber2" value="<?php echo $data_cek['sumber2']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jenissk" name="jenissk" value="<?php echo $data_cek['jenissk']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Berlaku</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="berlaku" name="berlaku" value="<?php echo $data_cek['berlaku']; ?>"
					/>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pokok" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
   
    $sql_ubah = "UPDATE tb_pokok SET 
		nama='".$_POST['nama']."',
		jenis='".$_POST['jenis']."',
		nosk='".$_POST['nosk']."',
		luassk='".$_POST['luassk']."',
		ket='".$_POST['ket']."',
		provinsi='".$_POST['provinsi']."',
		tgl='".$_POST['tgl']."',
		info='".$_POST['info']."',
		sumber1='".$_POST['sumber1']."',
		sumber2='".$_POST['sumber2']."',
		jenissk='".$_POST['jenissk']."',
		berlaku='".$_POST['berlaku']."'
		WHERE id_pokok='".$_POST['id_pokok']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pokok';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pokok';
        }
      })</script>";
    }}
