<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_rkt WHERE id_izin='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">


			<input type='hidden' class="form-control" name="id_izin" value="<?php echo $data_cek['id_izin']; ?>"
			 readonly/>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
					<select name="id_umum" id="id_umum" class="form-control select2bs4" required>
						<option selected="">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_umum";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_umum'] ?>" <?=$data_cek[
						 'id_umum']==$row[ 'id_umum'] ? "selected" : null ?>>
							<?php echo $row['umum_id'] ?>
							|
							<?php echo $row['pbphh'] ?>
						</option>
						<?php
                        }
                        ?>
						<readonly/>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keperluan</label>
				<div class="col-sm-4">
					<select name="keperluan" id="keperluan" class="form-control">
						<option value="">- Pilih -</option>
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['keperluan'] == "Upload RKT") echo "<option value='Upload RKT' selected>Upload RKT</option>";
                else echo "<option value='Upload RKT'>Upload RKT</option>";

                if ($data_cek['keperluan'] == "Revisi RKT") echo "<option value='Revisi RKT' selected>Revisi RKT</option>";
                else echo "<option value='Revisi RKTi'>Revisi RKT</option>";
            ?>
			<readonly/>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Aktif</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_out" name="tgl_out" value="<?php echo $data_cek['tgl_out']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Berakhir</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_in" name="tgl_in" value="<?php echo $data_cek['tgl_in']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-2 col-form-label">File RKT Lama</label>
							<input class="form-control" value="<?php echo $data_cek['berkas']; ?>" readonly/>
						</div>

						<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
							<select name="status" id="status" class="form-control">
								<option value="">-- Pilih Status --</option>
								<?php
										//menhecek data yg dipilih sebelumnya
										if ($data_cek['status'] == "Proses") echo "<option value='Proses' selected>Proses</option>";
										else echo "<option value='Proses'>Proses</option>";

										if ($data_cek['status'] == "Verifikasi") echo "<option value='Verifikasi' selected>Verifikasi</option>";
										else echo "<option value='Verifikasi'>Verifikasi</option>";

										if ($data_cek['status'] == "Ditolak") echo "<option value='Ditolak' selected>Ditolak</option>";
										else echo "<option value='Ditolak'>Ditolak</option>";

										if ($data_cek['status'] == "Berakhir") echo "<option value='Berakhir' selected>Berakhir</option>";
										else echo "<option value='Berakhir'>Berakhir</option>";
									?>
						</select>
					</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-izin" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_rkt SET 
		status='".$_POST['status']."'
		WHERE id_izin='".$_POST['id_izin']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-izin';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-izin';
        }
      })</script>";
    }}
