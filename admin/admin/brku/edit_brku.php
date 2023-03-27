<?php
$tanggal = date("Y-m-d");
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_brku WHERE id_brku='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Data Berita
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">


			<input type='hidden' class="form-control" name="id_brku" value="<?php echo $data_cek['id_brku']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Berkas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_cek['judul']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penerbit</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $data_cek['penerbit']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-2 col-form-label">Berita Lama</label>
				<div class="col-sm-10">
				<input class="form-control" value="<?php echo $data_cek['filee']; ?>" readonly/>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Berita Baru</label>
				<div class="col-sm-2">
				<input type="file" id="filee" name="filee">
					<p class="help-block">
						<font color="red">"Format File Wajib Pdf"</font>
				</div>
			</div>



		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-brku" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

$sumber = $_FILES['filee']['tmp_name'];
$target = '../pdf/';
$nama_file = $_FILES['filee']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $pdf= $data_cek['filee'];
            if (file_exists("../pdf/$pdf")){
			unlink("../pdf/$pdf");}

		$sql_ubah = "UPDATE tb_brku SET
			judul='".$_POST['judul']."',
			penerbit='".$_POST['penerbit']."',
			tgl='".$tanggal."',
			filee='".$nama_file."'
			WHERE id_brku='".$_POST['id_brku']."'";
   		$query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_brku SET
			judul='".$_POST['judul']."',
			penerbit='".$_POST['penerbit']."',
			tgl='".$tanggal."'
			WHERE id_brku='".$_POST['id_brku']."'";
	   $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-brku';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-brku';
            }
        })</script>";
    }}
