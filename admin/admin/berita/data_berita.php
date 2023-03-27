<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i>RKTPH ONLINE</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-berita" class="btn btn-dark bg-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div> <br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Berkas</th>
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
								<?php echo $data['id_berita']; ?>
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
						    <a href="?page=readingg&kode=<?php echo $data['id_berita']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-book"></i>
								</a>

							<a href="?page=edit-berita&kode=<?php echo $data['id_berita']; ?>" title="Edit Berita"
								 class="btn btn-primary btn-sm">
									<i class="fa fa-edit"></i>
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