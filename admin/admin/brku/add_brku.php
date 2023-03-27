<?php
$id = $_SESSION["ses_id"];
$petugas = $_SESSION["ses_nama"];
$tanggal = date("Y-m-d");
//kode
  
$carikode = mysqli_query($koneksi,"SELECT id_brku FROM tb_brku order by id_brku desc");
$datakode = mysqli_fetch_array($carikode);
$kode = isset($datakode['id_brku']) ? $datakode['id_brku'] :'';
$urut = substr($kode, 2, 3); 
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1){
$format = "BR"."00".$tambah;
 	}else if (strlen($tambah) == 2){
 	$format = "BR"."0".$tambah;
			}else (strlen($tambah) == 3){
			$format = "BR".$tambah
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
							<label>Id Berkas</label>
							<input type="text" name="id_brku" id="id_brku" class="form-control" value="<?php echo $format; ?>"
							 readonly/>
						</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Berkas</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="judul" name="judul" placeholder="Nama">
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penerbit</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload RKT</label>
				<div class="col-sm-2">
					<input type="file" id="filee" name="filee">
					<p class="help-block">
						<font color="red">"Format File Wajib Pdf"</font>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-brku" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	if (isset($_FILES['filee']['name'])) {
		$sumber = $_FILES['filee']['tmp_name'];
		$target = '../pdf/';
		$nama_file = $_FILES['filee']['name'];
		$pindah = move_uploaded_file ($sumber, $target.$nama_file);
	} 

    if (isset ($_POST['Simpan'])){
		
		if(!empty($sumber)){
			$sql_simpan = "INSERT INTO tb_brku (id_brku,judul,penerbit,tgl,filee) VALUES (
			   '".$_POST['id_brku']."',
			  '".$_POST['judul']."',
			  '".$_POST['penerbit']."',
			  '".$tanggal."',
			  '".$nama_file."')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=data-brku';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=add-brku';
          }
	  })</script>";
		}
		}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, File Berkas Kosong',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-brku';
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