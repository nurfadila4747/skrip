<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Perizinan Berusaha
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<div class="row">
				<div class="col-md-4">
					<form action="" method="post">
					<div class="input-group mb-3">
						<input type="number" name="cari_tahun" placeholder="2023" min="2010" max="2099" step="1" class="form-control">
						<button class="ml-2 btn btn-outline-secondary" type="submit" id="button-addon2">Cari Tahun</button>
					</div>
					</form>
				</div>
			</div>
			
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

			  if ($_POST['cari_tahun'] ?? '') {
				// var_dump('ada');
				$sql = $koneksi->query("SELECT i.id_izin, s.id_umum, s.umum_id, s.pbphh, s.alamat, s.email, s.notelp, a.kota, i.keperluan, i.keterangan, i.tgl_out, i.tgl_in, berkas, status
				from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan 
				inner join tb_rkt i on s.id_umum=i.id_umum WHERE YEAR(i.tgl_in) = " . $_POST['cari_tahun'] );
			  }else{
				//   var_dump('kosong');
				$sql = $koneksi->query("SELECT i.id_izin, s.id_umum, s.umum_id, s.pbphh, s.alamat, s.email, s.notelp, a.kota, i.keperluan, i.keterangan, i.tgl_out, i.tgl_in, berkas, status
				from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan 
				inner join tb_rkt i on s.id_umum=i.id_umum" );
			  }
			  
			  
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
	//menhecek data yg dipilih
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
						    <a href="?page=reading&kode=<?php echo $data['id_izin']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>

							<a href="?page=edit-izin&kode=<?php echo $data['id_izin']; ?>" title="Verifikasi"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>

							<a href="https://api.whatsapp.com/send?phone=<?php echo $data['notelp']; ?>&text=Kepada Yth%20<?php echo $data['pbphh']; ?>,
								%20Silahkan%20Melakukan%20Kelengkapan%20Data%20dan%20Berkas%20PBPH%20Untuk%20Periode%202023%20*Seksi PPKH*"
								 target=" _blank" title="Pesan WhatsApp" class="btn btn-success btn-sm"> 
								 WA
								</a>

							<a href="?page=del-izin&kode=<?php echo $data['id_izin']; ?>" onclick="return confirm('Benarkah Anda Ingin Menghapus Data ini ?')"
							 title="Hapus" class="btn btn-warning btn-sm">
								<i class="fa fa-trash"></i>
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