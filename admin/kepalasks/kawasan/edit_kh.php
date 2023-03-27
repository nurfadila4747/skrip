<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kawasan WHERE id_kawasan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Kawasan Hutan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_kawasan" name="id_kawasan" value="<?php echo $data_cek['id_kawasan']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten/Kota</label>
				<div class="col-sm-3">

				<select name="kota" id="kota" class="form-control">
                <option value="">-- Pilih --</option>
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['kota'] == "KABUPATEN BERAU") echo "<option value='KABUPATEN BERAU' selected>KABUPATEN BERAU</option>";
                else echo "<option value='KABUPATEN BERAU'>KABUPATEN BERAU</option>";

                if ($data_cek['kota'] == "KOTA BALIKPAPAN") echo "<option value='KOTA BALIKPAPAN' selected>KOTA BALIKPAPAN</option>";
                else echo "<option value='KOTA BALIKPAPAN'>KOTA BALIKPAPAN</option>";

				if ($data_cek['kota'] == "KOTA BONTANG") echo "<option value='KOTA BONTANG' selected>KOTA BONTANG</option>";
                else echo "<option value='KOTA BONTANG'>KOTA BONTANG</option>";

				if ($data_cek['kota'] == "KOTA SAMARINDA") echo "<option value='KOTA SAMARINDA' selected>KOTA SAMARINDA</option>";
                else echo "<option value='KOTA SAMARINDA'>KOTA SAMARINDA</option>";

				if ($data_cek['kota'] == "KABUPATEN KUTAI BARAT") echo "<option value='KABUPATEN KUTAI BARAT' selected>KABUPATEN KUTAI BARAT</option>";
                else echo "<option value='KABUPATEN KUTAI BARAT'>KABUPATEN KUTAI BARAT</option>";

				if ($data_cek['kota'] == "KABUPATEN KUTAI TIMUR") echo "<option value='KABUPATEN KUTAI TIMUR' selected>KABUPATEN KUTAI TIMUR</option>";
                else echo "<option value='KABUPATEN KUTAI TIMUR'>KABUPATEN KUTAI TIMUR</option>";

				if ($data_cek['kota'] == "KABUPATEN KUTAI KARTANEGARA") echo "<option value='KABUPATEN KUTAI KARTANEGARA' selected>KABUPATEN KARTANEGARA</option>";
                else echo "<option value='KABUPATEN KUTAI KARTANEGARA'>KABUPATEN KUTAI KARTANEGARA</option>";

				if ($data_cek['kota'] == "KABUPATEN MAHAKAM ULU") echo "<option value='KABUPATEN MAHAKAM ULU' selected>KABUPATEN MAHAKAM ULU</option>";
                else echo "<option value='KABUPATEN MAHAKAM ULU'>KABUPATEN MAHAKAM ULU</option>";

				if ($data_cek['kota'] == "KABUPATEN PASER") echo "<option value='KABUPATEN PASER' selected>KABUPATEN PASER</option>";
                else echo "<option value='KABUPATEN PASER'>KABUPATEN PASER</option>";

				if ($data_cek['kota'] == "KABUPATEN PENAJAM PASER UTARA") echo "<option value='KABUPATEN PENAJAM PASER UTARA' selected>KABUPATEN PENAJAM PASER UTARA</option>";
                else echo "<option value='KABUPATEN PENAJAM PASER UTARA'>KABUPATEN PENAJAM PASER UTARA</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HL</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hl" name="hl" value="<?php echo $data_cek['hl']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HPT</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hpt" name="hpt" value="<?php echo $data_cek['hpt']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp" name="hp" value="<?php echo $data_cek['hp']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HPK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hpk" name="hpk" value="<?php echo $data_cek['hpk']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KSA</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="ksa" name="ksa" value="<?php echo $data_cek['ksa']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $data_cek['jumlah']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-kh" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
   
    $sql_ubah = "UPDATE tb_kawasan SET 
		kota='".$_POST['kota']."',
		hl='".$_POST['hl']."',
		hpt='".$_POST['hpt']."',
		hp='".$_POST['hp']."',
		hpk='".$_POST['hpk']."',
		ksa='".$_POST['ksa']."',
		jumlah='".$_POST['jumlah']."'
		WHERE id_kawasan='".$_POST['id_kawasan']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kh';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-khe';
        }
      })</script>";
    }}
