<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Perizinan Berusaha</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-koreksi" class="btn btn-dark bg-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div> <br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>ID</th>
						<th>ID RKT</th>
						<th>Nama Perusahaan</th>
						<th>Keperluan</th>
						<th>Berkas RKT</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT i.id_koreksi, s.id_izin, a.umum_id, a.pbphh, i.ket, s.berkas, i.statusku
			  from tb_rkt s inner join tb_umum a on s.id_umum=a.id_umum
			  inner join tb_koreksi i on s.id_izin=i.id_izin");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_koreksi']; ?>
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
							<?php echo $data['ket']; ?>
						</td>

						<td>
							<?php echo $data['berkas']; ?>
						</td>
			
						<td>
<?php
	//menhecek data yg dipilih sebelumnya
	if ($data['statusku'] == "Proses") { ?>
		<span class="badge badge-info">
			Proses
		</span>

	<?php }elseif ($data['statusku'] == "Selesai") { ?>
		<span class="badge badge-success">
			Selesai
		</span>
		<?php } 
													
?>
							</td>	

						<td>
						<?php $tatus=$data['statusku']; ?>
								<?php if($tatus == 'Selesai'){ ?>
								<a href="?page=reading&kode=<?php echo $data['id_koreksi']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>
								<?php }else{ ?>

						    <a href="?page=reading&kode=<?php echo $data['id_koreksi']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>

							<a href="?page=edit-izin&kode=<?php echo $data['id_koreksi']; ?>" title="Verifikasi"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>

							<a href="https://api.whatsapp.com/send?phone=<?php echo $data['notelp']; ?>&text=Kepada Yth%20<?php echo $data['pbphh']; ?>,
								%20Silahkan%20Melakukan%20Tinjauan%20Langsung%20dengan%20Koordinator%20Seksi%20PPKH%20*Seksi PPKH*"
								 target=" _blank" title="Pesan WhatsApp" class="btn btn-success btn-sm"> 
								 WA
								</a>

							<a href="?page=del-izin&kode=<?php echo $data['id_koreksi']; ?>" onclick="return confirm('Benarkah Anda Ingin Menghapus Data ini ?')"
							 title="Hapus" class="btn btn-warning btn-sm">
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