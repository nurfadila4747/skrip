<?php
$pass_acak = mt_rand(1000, 9999);

//kode 9 digit
  
$carikode = mysqli_query($koneksi,"SELECT id_anggota FROM tb_anggota order by id_anggota desc");
$datakode = mysqli_fetch_array($carikode);
$kode = isset($datakode['id_anggota']) ? $datakode['id_anggota'] :'';
$urut = substr($kode, 3, 3);
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1){
$format = "AKN"."00".$tambah;
 	}else if (strlen($tambah) == 2){
 	$format = "AKN"."0".$tambah;
			}else (strlen($tambah) == 3){
			$format = "AKN".$tambah
				}
?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID User</label>
				<div class="col-sm-6">
					<input type="text" name="id_anggota" id="id_anggota" class="form-control" value="<?php echo $format; ?>"
						readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama User</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis User</label>
				<div class="col-sm-4">
					<select name="jenis_anggota" id="jenis_anggota" class="form-control">
						<option>- Pilih -</option>
						<option>Perusahaan</option>
						<option>Koperasi</option>
						
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-dprs" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_anggota (id_anggota,nama,jenis_anggota,password) VALUES (
           '".$_POST['id_anggota']."',
          '".$_POST['nama']."',
          '".$_POST['jenis_anggota']."',
          '".$pass_acak."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-dprs';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-dprs';
          }
      })</script>";
    }}
     //selesai proses simpan data
