<div class="card card-info">
	<div class="card-header bg-dark">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pokok Tambahan PBPH</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pokok" class="btn btn-dark bg-green">
					<i class="fa fa-edit"></i> Tambah Data</a> &nbsp;
				<a href="?page=ekspor-pokok" class="btn btn-dark bg-teal">
					<i class="fa fa-download"></i> Ekspor Data</a> &nbsp;
				
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
						<th>No</th>
						<th>Nama Perusahaan</th>
						<th>Jenis PBPH</th>
						<th>Nomor SK</th>
						<th>Luas SK</th>
						<th>Aksi</th>
					
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from tb_pokok");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['jenis']; ?>
						</td>
						<td>
							<?php echo $data['nosk']; ?>
						</td>
						<td>
							<?php echo $data['luassk']; ?>
						</td>
						
												
						<td>
							<a href="?page=view-pokok&kode=<?php echo $data['id_pokok']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-thumbtack"></i>
							</a>
							<a href="?page=edit-pokok&kode=<?php echo $data['id_pokok']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pokok&kode=<?php echo $data['id_pokok']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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