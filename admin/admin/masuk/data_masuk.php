<div class="card card-info">
	<div class="card-header bg-blue">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Surat Masuk</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-masuk" class="btn btn-primary bg-green">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
						<th>No</th>
						<th>Nomor Surat</th>
						<th>Pengirim</th>
						<th>Tanggal Surat</th>
						<th>Tanggal Terima</th>
						<th>Perihal</th>
						<th>Disposisi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT s.id_masuk, s.pengirim, s.tgl_surat, s.tgl_terima, s.perihal, a.nama_pengguna
			  from tb_sumas s inner join tb_pengguna a on s.id_pengguna=a.id_pengguna");
			  while ($data= $sql->fetch_assoc()) {
			  ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_masuk']; ?>
						</td>
						<td>
							<?php echo $data['pengirim']; ?>
						</td>
						<td>
							<?php echo $data['tgl_surat']; ?>
						</td>
						<td>
							<?php echo $data['tgl_terima']; ?>
						</td>
						<td>
							<?php echo $data['perihal']; ?>
						</td>
						<td>
							<?php echo $data['nama_pengguna']; ?>
						</td>
						
						<td>
							<a href="?page=edit-masuk&kode=<?php echo $data['id_masuk']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-masuk&kode=<?php echo $data['id_masuk']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
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