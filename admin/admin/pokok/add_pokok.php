<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pokok Tambahan PBPH</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perusahaan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis</label>
				<div class="col-sm-3">
					<select name="jenis" id="jenis" class="form-control">
						<option>- Pilih -</option>
						<option>HA</option>
						<option>HT</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nosk" name="nosk" placeholder="Nomor SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Luas SK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="luassk" name="luassk" placeholder="Luas SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Provinsi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Info SK</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="info" name="info" placeholder="Info SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sumber 1</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sumber1" name="sumber1" placeholder="Sumber 1" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sumber 2</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sumber2" name="sumber2" placeholder="Sumber 2" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis SK</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="jenissk" name="jenissk" placeholder="Jenis SK" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Berlaku</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="berlaku" name="berlaku" placeholder="Status Berlaku" required>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pokok" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data

        $sql_simpan = "INSERT INTO tb_pokok (nama, jenis, nosk, luassk, ket, provinsi, tgl,
		info, sumber1, sumber2, jenissk, berlaku) VALUES (
            '".$_POST['nama']."',
            '".$_POST['jenis']."',
			'".$_POST['nosk']."',
			'".$_POST['luassk']."',
            '".$_POST['ket']."',
			'".$_POST['provinsi']."',
			'".$_POST['tgl']."',
			'".$_POST['info']."',
			'".$_POST['sumber1']."',
			'".$_POST['sumber2']."',
			'".$_POST['jenissk']."',
			'".$_POST['berlaku']."')";
			
			
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pokok';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pokok';
          }
      })</script>";
    }}
     //selesai proses simpan data
