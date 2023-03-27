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
<div class="small-box bg-green">
<div class="inner">
	<h3><?php echo $kawasan;  ?></h3>
	<p>Data Kawasan Hutan</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=ptg-data-kh" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->

<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-green">
<div class="inner">
	<h3><?php echo $umum;  ?></h3>
	<p>Data Umum PBPH</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=ptg-data-umum" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->

<div class="col-lg-4 col-6">
	<!-- small box -->
<div class="small-box bg-green">
<div class="inner">
	<h3><?php echo $pbph;  ?></h3>
	<p>Data Pokok PBPH</p>
</div>
<div class="icon">
	<i class="fa fa-users" aria-hidden="true"></i>
</div>
	<a href="index.php?page=ptg-data-pokok" class="small-box-footer">Selengkapnya
	<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
	<!-- ./col -->
	
	<!-- ./col -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>
					<?php echo $masa;  ?>
				</h3>

				<p>Laporan RKTPH</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="index.php?page=ptg-data-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
		</div>
		</div>
	
	
	<div class="card card-info">
	<div class="card-header bg-dark">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Perusahaan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
					        <th>No</th>
							<th>Id User</th>
							<th>Nama User</th>
							<th>Jenis User</th>
							<th>Status</th>
							<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query ("SELECT i.id_anggota, i.nama, i.jenis_anggota, i.password, s.status, a.pbphh, a.notelp
			   from tb_rkt s inner join tb_umum a on s.id_umum=a.id_umum
			  inner join tb_anggota i on s.id_izin=i.id_izin");
			  while ($data= $sql->fetch_assoc()) {
			?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_anggota']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['jenis_anggota']; ?>
						</td>

						<td>
							<?php $stt = $data['status']  ?>
							<?php if($stt == 'Proses'){ ?>
							<span class="badge badge-success">Sudah Mengupload</span>
							<?php }elseif($stt == 'Verifikasi'){ ?>
							<span class="badge badge-success">Sudah Mengupload</span>
							<?php }elseif($stt == 'Ditolak'){ ?>
							<span class="badge badge-danger">Belum Mengupload</span>
							<?php }elseif($stt == 'Berakhir'){ ?>
							<span class="badge badge-warning"></span>RKTPH Berakhir
						</td>
						<?php } ?>

						<td>
							<a href="https://api.whatsapp.com/send?phone=<?php echo $data['notelp']; ?>&text=Kepada Yth%20<?php echo $data['pbphh']; ?>,
								%20Silahkan%20Melakukan%20Upload%20Data%20dan%20Berkas%20RKTPH%20Untuk%20Periode%202023%20*Seksi PPKH*"
								 target=" _blank" title="Pesan WhatsApp" class="btn btn-success btn-sm"> 
								 WA
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

