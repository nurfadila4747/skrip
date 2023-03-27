<div class="card card-info">
	<div class="card-header bg-dark">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kawasan Hutan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kh" class="btn btn-dark bg-green">
					<i class="fa fa-edit"></i> Tambah Data</a> &nbsp;
				<a href="?page=ekspor-kh" class="btn btn-dark bg-teal">
					<i class="fa fa-download"></i> Ekspor Data</a> &nbsp;
				
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
						<th>No</th>
						<th>Kabupaten/Kota</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $total = 0;
              $sql = $koneksi->query("select * from tb_kawasan");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['kota']; ?>
						</td>
						
												
						<td>
							<a href="?page=view-kh&kode=<?php echo $data['id_kawasan']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-thumbtack"></i>
							</a>
							<a href="?page=edit-kh&kode=<?php echo $data['id_kawasan']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-kh&kode=<?php echo $data['id_kawasan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
			<br>
			<div>
				<a href="?page=add-kh" class="btn btn-dark bg-teal">
					<i class="fa fa-edit"></i>Total HL</a> &nbsp;
				<a href="?page=add-kw" class="btn btn-dark bg-teal">
					<i class="fa fa-edit"></i>Total HPT</a> &nbsp;
				<a href="?page=add-kw" class="btn btn-dark bg-teal">
					<i class="fa fa-edit"></i>Total HP</a> &nbsp;
				<a href="?page=add-kw" class="btn btn-dark bg-teal">
					<i class="fa fa-edit"></i>Total HPK</a> &nbsp;
				<a href="?page=add-kw" class="btn btn-dark bg-teal">
					<i class="fa fa-edit"></i>Total KSA</a>
			</div>
		</div>
	</div>
	<!-- /.card-body -->