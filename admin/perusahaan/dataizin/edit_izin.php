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
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>"
					/>
				</div>
			</div>


			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">File RKT Lama</label>
					<input class="form-control" value="<?php echo $data_cek['berkas']; ?>" 
					readonly/>
			</div>

			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Upload RKT Baru</label>
						<input type="file" name="berkas" id="berkas">
					<p class="help-block">
				<font color="red">Format file .Pdf"</p>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=prs-data-izin" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

$sumber = $_FILES['berkas']['tmp_name'];
$target = '../pdf/';
$nama_file = $_FILES['berkas']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $pdf= $data_cek['berkas'];
            if (file_exists("../pdf/$pdf")){
			unlink("../pdf/$pdf");}

		$sql_ubah = "UPDATE tb_rkt SET
			keperluan='".$_POST['keperluan']."',
			keterangan='".$_POST['keterangan']."',
			tgl='".$tanggal."',
			berkas='".$nama_file."'
			WHERE id_rkt='".$_POST['id_rkt']."'";
   		$query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_buku SET
			keperluan='".$_POST['keperluan']."',
			keterangan='".$_POST['keterangan']."',
			tgl='".$tanggal."'
			WHERE id_rkt='".$_POST['id_rkt']."'";
	   $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=prs-data-izin';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=prs-data-izin';
        }
      })</script>";
    }}
