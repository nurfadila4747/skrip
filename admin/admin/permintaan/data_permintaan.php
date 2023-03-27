<div class="card card-info">
	<div class="card-header bg-blue">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Permintaan Pembuatan Surat</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
						<th>No</th>
						<th>Nama</th>
						<th>NIK</th>
						<th>Jenis Kelamin</th>
						<th>TTL</th>
						<th>Alamat</th>
						<th>Jenis Surat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from tb_permintaan where status=''");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['jekel']; ?>
						</td>
						<td>
							<?php echo $data['tempat_lh']; ?>, 
							<?php echo $data['tgl_lahir']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['jenis_surat']; ?>
						</td>
						<td>
							<a href="?page=edit-permintaan&kode=<?php echo $data['id_permintaan']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-permintaan&kode=<?php echo $data['id_permintaan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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

	<div class="card card-info">
	<div class="card-header bg-blue">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Permintaan Pembuatan Surat</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
						<th>No</th>
						<th>Nama</th>
						<th>NIK</th>
						<th>Jenis Kelamin</th>
						<th>TTL</th>
						<th>Alamat</th>
						<th>Jenis Surat</th>
						<th>Hubungi</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from tb_permintaan where status='Selesai'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['jekel']; ?>
						</td>
						<td>
							<?php echo $data['tempat_lh']; ?>, 
							<?php echo $data['tgl_lahir']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['jenis_surat']; ?>
						</td>
						<td>
							<?php echo $data['hubungi']; ?>
						</td>
						<td>
							<?php echo $data['status']; ?>
						</td>
						<td>
							<a href="?page=del-permintaan&kode=<?php echo $data['id_permintaan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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