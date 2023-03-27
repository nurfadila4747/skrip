<?php
$data_id = $_SESSION["ses_id"];
$petugas = $_SESSION["ses_nama"];
$tanggal = date("Y-m-d");
//kode
$carikode = mysqli_query($koneksi,"SELECT id_koreksi FROM tb_koreksi order by id_koreksi desc");
$datakode = mysqli_fetch_array($carikode);
$kode = isset($datakode['id_koreksi']) ? $datakode['id_koreksi'] :'';
$urut = substr($kode, 1, 3); 
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1){
$format = "K"."00".$tambah;
 	}else if (strlen($tambah) == 2){
 	$format = "K"."0".$tambah;
			}else (strlen($tambah) == 3){
			$format = "K".$tambah
				}
  
?>


<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data
		</h3>
	</div>

	<div class="card-body">
	<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">
							<label>ID</label>
					<input type="text" name="id_koreksi" id="id_koreksi" class="form-control" value="<?php echo $format; ?>"
		 readonly/>
		 </div>
	</div>

	<div class="card-body">
	<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Izin</label>
				<div class="col-sm-8">
				<select name="id_izin" id="id_izin" class="form-control select2bs4" required>
						<option selected="selected">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_rkt";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_izin'] ?>">
							<?php echo $row['id_izin']; ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-6">
				<select name="id_umum" id="id_umum" class="form-control select2bs4" readonly>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_umum";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_umum'] ?>">
							<?php echo $row['umum_id'] ?>
							|
							<?php echo $row['pbphh'] ?>
						</option>
						<?php
                        }
                        ?>
						</readonly>
						</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama & Alamat</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="pbphh" name="pbphh" placeholder="Nama" readonly>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Isi Keperluan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="ket" name="ket" placeholder="Keperluan" required>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-2 col-form-label">File RKT</label>
			<div class="col-sm-10">
					<input type="text" class="form-control" id="berkas" name="berkas" placeholder="File RKT" readonly/>
			</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-koreksi" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
        $sql_simpan = "INSERT INTO tb_koreksi (id_koreksi, id_izin, ket, statusku) VALUES (
            '".$_POST['id_koreksi']."',
			'".$_POST['id_izin']."',
            '".$_POST['ket']."',
		    '".$data_id."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

		if ($query_simpan) {
			echo "<script>
			Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=data-koreksi';
				}
			})</script>";
			}else{
			echo "<script>
			Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-koreksi';
				}
			})</script>";}}


		?>
		<script src="././dist/lookup.js"></script>
		<script>
			$(document).ready(function() {
				$('#id_umum').change(function() {
					var id_umum = $(this).val();
					$.ajax({
						url: "plugins/proses-ajax.php",
						method: "POST",
						data: {
							id_umum: id_umum
						},
						success: function(data) {
							$('#nama').val(data);
						}
					});
				});
			});
		</script>