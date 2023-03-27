<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


<div class="card card-info">
	<div class="card-header bg-dark">
		<a href="?page=data-pokok" class="btn btn-warning">Kembali</a> &nbsp;
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class="table table-bordered table-striped">
			
				<thead>
					<tr style="text-align: center;">
                    <th>No</th>
						<th>Nama Perusahaan</th>
						<th>Jenis PBPH</th>
						<th>Nomor SK</th>
						<th>Luas SK</th>
						<th>Keterangan</th>
                        <th>Provinsi</th>
                        <th>Tanggal SK</th>
                        <th>Info SK</th>
                        <th>Sumber 1</th>
                        <th>Sumber 2</th>
                        <th>Jenis SK</th>
                       
        
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $total = 0;
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
							<?php echo $data['ket']; ?>
						</td>
						<td>
							<?php echo $data['provinsi']; ?>
						</td>
						<td>
							<?php echo $data['tgl']; ?>
						</td>
                        <td>
							<?php echo $data['info']; ?>
						</td>
                        <td>
							<?php echo $data['sumber1']; ?>
						</td>
                        <td>
							<?php echo $data['sumber2']; ?>
						</td>
                        <td>
							<?php echo $data['jenissk']; ?>
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
				title : 'Data Pokok Tambahan PBPH'

			},
			{
				extend : 'excel',
				title : 'Data Pokok Tambahan PBPH'

			},
            {
				extend : 'print',
				title : 'Data Pokok Tambahan PBPH'

			},
        ]
    } );
} );
	</script>