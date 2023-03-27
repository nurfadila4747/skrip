
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Log RKTPH</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>ID RKT</th>
						<th>Nama Perusahaan</th>
						<th>Alamat</th>
						<th>Email</th>
						<th>Kawasan</th>
						<th>Keperluan</th>
						<th>Waktu</th>
						<th>Status</th>
						<th>Berkas RKT</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT i.id_izin, s.id_umum, s.umum_id, s.pbphh, s.alamat, s.email, a.kota, i.keperluan, i.keterangan, i.tgl_out, i.tgl_in, i.berkas, i.status, i.author
			  from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan 
			  inner join tb_rkt i on s.id_umum=i.id_umum where author='$data_id'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_izin']; ?>
						</td>
						<td>
							<?php echo $data['umum_id']; ?>
							-
							<?php echo $data['pbphh']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['email']; ?>
						</td>
						<td>
							<?php echo $data['kota']; ?>
						</td>
						<td>
							<?php echo $data['keperluan']; ?>
							-
							<?php echo $data['keterangan']; ?>
						</td>
						<td>
							<?php  $tgl = $data['tgl_out']; echo date("d/M/Y", strtotime($tgl))?>
							<span class="badge badge-success">
								s/d
							</span>
							<?php  $tgl = $data['tgl_in']; echo date("d/M/Y", strtotime($tgl))?>
						</td>
					
						    <td>
							<?php
	//menhecek data yg dipilih sebelumnya
	if ($data['status'] == "Proses") { ?>
		<span class="badge badge-info">
			Proses
		</span>

	<?php }elseif ($data['status'] == "Verifikasi") { ?>
		<span class="badge badge-success">
			Verifikasi
		</span>

	<?php }elseif ($data['status'] == "Ditolak") { ?>
		<span class="badge badge-danger">
			Ditolak
		</span>

	<?php }elseif ($data['status'] == "Berakhir") { ?>
		<span class="badge badge-warning">
			Berakhir
		</span>
		<?php } 
													
?>
							</td>
							<td>
								<?php echo $data['berkas']; ?>
							</td>

						<td>
						    <?php $tatus=$data['status']; ?>
								<?php if($tatus == 'Verifikasi'){ ?>
								<a href="?page=reading&kode=<?php echo $data['id_izin']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>
								<?php }else{ ?>

						    <a href="?page=reading&kode=<?php echo $data['id_izin']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>

							<a href="?page=prs-edit-izin&kode=<?php echo $data['id_izin']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>

							<a href="?page=prs-del-izin&kode=<?php echo $data['id_izin']; ?>" title="Hapus"
							 class="btn btn-success btn-sm">
								<i class="fa fa-trash"></i>
								<?php } ?>
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