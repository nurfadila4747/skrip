 <div class="card card-info">
	<div class="card-header bg-dark">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Umum PBPH</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=ekspor-umum" class="btn btn-dark bg-teal">
					<i class="fa fa-download"></i> Ekspor Data</a> 
					
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
					    <th>No</th>
						<th>No SK</th>
						<th>Nama Perusahaan</th>
						<th>Jenis</th>
						<th>Alamat</th>
						<th>Email</th>
						<th>No Telpon</th>
						<th>Kawasan</th>
						<th>Aksi</th>
					
					</tr>
				</thead>
				<tbody>

					<?php
            $no = 1;
			$sql = $koneksi->query("SELECT s.id_umum, s.umum_id, s.pbphh, s.jenis, s.alamat, s.email, s.notelp, a.kota
			from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan");
			while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['umum_id']; ?>
						</td>
						<td>
							<?php echo $data['pbphh']; ?>
						</td>
						<td>
							<?php echo $data['jenis']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['email']; ?>
						</td>
						<td>
							<?php echo $data['notelp']; ?>
						</td>
						<td>
							<?php echo $data['kota']; ?>
						</td>
						
												
						<td>
							<a href="?page=ptg-view-umum&kode=<?php echo $data['id_umum']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-thumbtack"></i>
							</a>
							<a href="?page=ptg-edit-umum&kode=<?php echo $data['id_umum']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=ptg-del-umum&kode=<?php echo $data['id_umum']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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