<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Log Perizinan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
					    <th>No</th>
						<th>Nama Perusahaan</th>
						<th>Kawasan</th>
						<th>Keperluan</th>
						<th>Waktu</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>

				<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT s.id_umum, s.umum_id, s.pbphh,s.alamat, s.email, a.kota, i.id_izin, i.keperluan, i.keterangan, i.tgl_out, i.tgl_in
			  from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan 
			  inner join tb_izin i on s.id_umum=i.id_umum where status='0' order by tgl_out desc");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['umum_id']; ?>-
							<?php echo $data['pbphh']; ?>
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
								S/d
							</span>
							<?php  $tgl = $data['tgl_in']; echo date("d/M/Y", strtotime($tgl))?>
						</td>
						<td>
							<span class="badge badge-danger">
								Masa SK Telah Berakhir
							</span>
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