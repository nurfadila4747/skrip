<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


<div class="card card-info">
	<div class="card-header bg-dark">
		<a href="?page=data-umum" class="btn btn-warning">Kembali</a> &nbsp;
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class="table table-bordered table-striped">
			
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
						
        
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $total = 0;
              $sql = $koneksi->query("SELECT s.id_umum, s.pbphh, s.jenis, s.alamat, s.email, s.notelp, a.kota
			  from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_umum']; ?>
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

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

	<script>
		$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
			{
				extend : 'pdf',
				title : 'Data Umum PBPH'

			},
			{
				extend : 'excel',
				title : 'Data Umum PBPH'

			},
            {
				extend : 'print',
				title : 'Data Umum PBPH'

			},
        ]
    } );
} );
	</script>