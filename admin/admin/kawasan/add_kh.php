<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Kawasan Hutan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten/Kota</label>
				<div class="col-sm-3">
					<select name="kota" id="kota" class="form-control">
						<option>- Pilih -</option>
						<option>KABUPATEN BERAU</option>
						<option>KOTA BALIKPAPAN</option>
						<option>KOTA BONTANG</option>
						<option>KOTA SAMARINDA</option>
						<option>KABUPATEN KUTAI BARAT</option>
						<option>KOTA KUTAI TIMUR</option>
						<option>KOTA KUTAI KARTANEGARA</option>
						<option>KOTA MAHAKAM ULU</option>
						<option>KOTA PASER</option>
						<option>KOTA PENAJAM PASER UTARA</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HL</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hl" name="hl" placeholder="HL" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HPT</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hpt" name="hpt" placeholder="HPT" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp" name="hp" placeholder="HP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HPK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hpk" name="hpk" placeholder="HPK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KSA</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="ksa" name="ksa" placeholder="KSA" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kh" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data

        $sql_simpan = "INSERT INTO tb_pbph (kota, hl, hpt, hp, hpk, ksa, jumlah) VALUES (
            '".$_POST['kota']."',
            '".$_POST['hl']."',
			'".$_POST['hpt']."',
			'".$_POST['hp']."',
            '".$_POST['hpk']."',
			'".$_POST['ksa']."',
			'".$_POST['jumlah']."')";
			
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kh';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-kh';
          }
      })</script>";
    }}
     //selesai proses simpan data
