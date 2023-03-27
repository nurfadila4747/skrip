<?php

$sql = $koneksi->query("SELECT COUNT(id_kawasan) as kawasan  from tb_kawasan");
  while ($data= $sql->fetch_assoc()) {
    $kawasan=$data['kawasan'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pbph) as pbph  from tb_pbph");
  while ($data= $sql->fetch_assoc()) {
    $pbph=$data['pbph'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_masuk) as sumas  from tb_sumas");
  while ($data= $sql->fetch_assoc()) {
    $sumas=$data['sumas'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_umum) as umum  from tb_umum");
  while ($data= $sql->fetch_assoc()) {
    $umum=$data['umum'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pokok) as pokok  from tb_pokok");
  while ($data= $sql->fetch_assoc()) {
    $pokok=$data['pokok'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_izin) as izin  from tb_rkt");
  while ($data= $sql->fetch_assoc()) {
    $izin=$data['izin'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_izin) as masa  from tb_rkt where status='1'");
  while ($data= $sql->fetch_assoc()) {
    $masa=$data['masa'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_izin) as back  from tb_rkt where status='0'");
  while ($data= $sql->fetch_assoc()) {
    $back=$data['back'];
  }
?>

<div class="row">
<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
	<h3><?php echo $kawasan;  ?></h3>
	<p>Data Kawasan Hutan</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=data-kh" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->

<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
	<h3><?php echo $umum;  ?></h3>
	<p>Data Umum PBPH</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=data-umum" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->

<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
	<h3><?php echo $pbph;  ?></h3>
	<p>Data Pokok PBPH</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=data-pokok" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->

<!-- ./col -->
<div class="col-lg-4 col-6">
<!-- small box -->
<div class="small-box bg-green">
<div class="inner">
	<h3><?php echo $sumas;  ?></h3>
	<p>Data Surat Masuk</p>
</div>
<div class="icon">
	<i class="fa fa-mail-bulk" aria-hidden="true"></i>
</div>
	<a href="index.php?page=data-masuk" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	
	<!-- ./col -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>
					<?php echo $masa;  ?>
				</h3>

				<p>Melakukan Perizinan</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="index.php?page=data-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $back;  ?>
				</h3>

				<p>Perizinan Selesai</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="index.php?page=log-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->


