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
  
	$sql = $koneksi->query("SELECT count(id_anggota) as agt from tb_anggota");
	while ($data= $sql->fetch_assoc()) {
	
		$agt=$data['agt'];
	}

  $sql = $koneksi->query("SELECT COUNT(id_izin) as masa  from tb_rkt");
  while ($data= $sql->fetch_assoc()) {
    $masa=$data['masa'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_izin) as back  from tb_rkt");
  while ($data= $sql->fetch_assoc()) {
    $back=$data['back'];
  }
?>

<div class="row">
<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
	<h3><?php echo $masa;  ?></h3>
	<p>Log RKTPH</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="page.php?page=prs-data-izin" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->

<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
	<h3><?php echo $back;  ?></h3>
	<p>Log RKUPH</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=ptg-log-izin" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
</div>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i><b>PANDUAN RKTPH ONLINE</b></h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Berkas</th>
						<th>Penerbit</th>
						<th>Tgl Terbit</th>
						<th>Nama File</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

				<?php
                  $no = 1;
                  $sql = $koneksi->query("SELECT * from tb_berita");
                  while ($data= $sql->fetch_assoc()) {
                ?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>

							<td>
								<?php echo $data['judul']; ?>
							</td>
							<td>
								<?php echo $data['penerbit']; ?>
							</td>
							<td>
								<?php echo $data['tgl']; ?>
							</td>
							<td>
								<?php echo $data['filee']; ?>
							</td>

						<td>
						    <a href="?page=prs-reading&kode=<?php echo $data['id_berita']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>

						</td>
					</tr>

					<?php
                  }
                ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div> </div>

	<!-- /.card-body -->
	<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i>PANDUAN RKUPH ONLINE</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Berkas</th>
						<th>Penerbit</th>
						<th>Tgl Terbit</th>
						<th>Nama File</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

				<?php
                  $no = 1;
                  $sql = $koneksi->query("SELECT * from tb_brku");
                  while ($data= $sql->fetch_assoc()) {
                ?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['judul']; ?>
							</td>
							<td>
								<?php echo $data['penerbit']; ?>
							</td>
							<td>
								<?php echo $data['tgl']; ?>
							</td>
							<td>
								<?php echo $data['filee']; ?>
							</td>

						<td>
						    <a href="?page=prs-reading-rku&kode=<?php echo $data['id_brku']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>

						</td>
					</tr>

					<?php
                  }
                ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->


