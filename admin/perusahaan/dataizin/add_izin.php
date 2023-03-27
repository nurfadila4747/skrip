<?php

$tanggal = date("Y-m-d");
//kode
$data_id = $_SESSION["ses_id"];
  
$carikode = mysqli_query($koneksi,"SELECT id_izin FROM tb_rkt order by id_izin desc");
$datakode = mysqli_fetch_array($carikode);
$kode = isset($datakode['id_izin']) ? $datakode['id_izin'] :'';
$urut = substr($kode, 3, 3); 
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1){
$format = "RKT"."00".$tambah;
 	}else if (strlen($tambah) == 2){
 	$format = "RKT"."0".$tambah;
			}else (strlen($tambah) == 3){
			$format = "RKT".$tambah
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
						<div class="form-group">
							<label>ID RKT</label>
							<input type="text" name="id_izin" id="id_izin" class="form-control" value="<?php echo $format; ?>"
							 readonly/>
						</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-5">
					<select name="id_umum" id="id_umum" class="form-control select2bs4" required>
						<option selected="selected">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_umum";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_umum'] ?>">
							<?php echo $row['umum_id']; ?>
							|
							<?php echo $row['pbphh'];  ?>
						</option>
						<?php
                        }
                        ?>
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
				<label class="col-sm-2 col-form-label">Keperluan</label>
				<div class="col-sm-2">
					<select name="keperluan" id="keperluan" class="form-control">
						<option>- Pilih -</option>
						<option>Upload RKT</option>
						<option>Revisi RKT</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Aktif</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_out" name="tgl_out">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Berakhir</label>
				<div class="col-sm-2">
					<input type="date" class="form-control" id="tgl_in" name="tgl_in">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload RKT</label>
				<div class="col-sm-2">
					<input type="file" id="berkas" name="berkas">
					<p class="help-block">
						<font color="red">"Format File Wajib Pdf"</font>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=prs-data-izin" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	if (isset($_FILES['berkas']['name'])) {
		$sumber = $_FILES['berkas']['tmp_name'];
		$target = '../pdf/';
		$nama_file = $_FILES['berkas']['name'];
		$pindah = move_uploaded_file ($sumber, $target.$nama_file);
	} 

    if (isset ($_POST['Simpan'])){
		
		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_rkt (id_izin, id_umum, keperluan, keterangan, tgl_out, tgl_in,berkas,author) VALUES (
            '".$_POST['id_izin']."',
			'".$_POST['id_umum']."',
            '".$_POST['keperluan']."',
            '".$_POST['keterangan']."',
            '".$_POST['tgl_out']."',
            '".$_POST['tgl_in']."',
			'".$nama_file."',
			'".$data_id."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'page.php?page=prs-data-izin';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'page.php?page=prs-add-izin';
          }
	  })</script>";
		}
		}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, File Buku Kosong',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'page.php?page=prs-add-izin';
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