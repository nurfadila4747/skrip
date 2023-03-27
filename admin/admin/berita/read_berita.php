<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_berita WHERE id_berita='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

	}
	
	$file="https://drive.google.com/file/d/1_JGP3Cd0wrOmMaHX7o1H3NFnPB55mUng/preview";
?>
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			Dokumen :
			<?php echo $data_cek['judul'];?></h3>
	</div>

				<!-- /.box-header -->
				<!-- form start -->

				<div class="box-body">

				<object type="application/pdf" data="../pdf/<?php echo $data_cek['filee'];?>"
					 width="100%" height="700px">
				</object>


				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<b><b>Sistem Informasi PBPH DISHUT 2023</b></b>
				</div>
			</div>
			<!-- /.box -->
