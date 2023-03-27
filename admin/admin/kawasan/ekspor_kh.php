<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


<div class="card card-info">
	<div class="card-header bg-dark">
		<a href="?page=data-kh" class="btn btn-warning">Kembali</a> &nbsp;
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class="table table-bordered table-striped">
			
				<thead>
					<tr style="text-align: center;">
						<th>No</th>
						<th>Kabupaten/Kota</th>
						<th>Jumlah HL</th>
						<th>Jumlah HPT</th>
						<th>Jumlah HP</th>
						<th>Jumlah HPK</th>
						<th>Jumlah KSA</th>
						<th>Total</th>
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
							<?php echo $data['hl']; ?>
						</td>
						<td>
							<?php echo $data['hpt']; ?>
						</td>
						<td>
							<?php echo $data['hp']; ?>
						</td>
						<td>
							<?php echo $data['hpk']; ?>
						</td>
						<td>
							<?php echo $data['ksa']; ?>
						</td>
						<td>
							<?php echo $data['jumlah']; ?>
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
				title : 'Data Kawasan Hutan'

			},
			{
				extend : 'excel',
				title : 'Data Kawasan Hutan'

			},
            {
				extend : 'print',
				title : 'Data Kawasan Hutan'

			},
        ]
    } );
} );
	</script>