<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Perizinan Berusaha
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table id="data-izin" class="table table-bordered table-striped">
		
				<thead class="table-info">
					<tr>
						<th>No</th>
						<th>ID RKT</th>
						<th>Nama Perusahaan</th>
						<th>Alamat</th>
						<th>Email</th>
						<th>Kawasan</th>
						<th>Keperluan</th>
						<th>Waktu</th>
						<th>Status</th>
						<th>Berkas RKT</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;

				$sql = $koneksi->query("SELECT i.id_izin, s.id_umum, s.umum_id, s.pbphh, s.alamat, s.email, s.notelp, a.kota, i.keperluan, i.keterangan, i.tgl_out, i.tgl_in, berkas, status
				from tb_umum s inner join tb_kawasan a on s.id_kawasan=a.id_kawasan 
				inner join tb_rkt i on s.id_umum=i.id_umum");
			  
			//   var_dump($sql->fetch_assoc());
			while ($data= $sql->fetch_assoc()) {
				?>
					<tr>
						<td>
							<?= $no++; ?>
						</td>
						<td>
							<?= $data['id_izin']; ?>
						</td>
						<td>
							<?= $data['umum_id']; ?>
							-
							<?= $data['pbphh']; ?>
						</td>
						<td>
							<?= $data['alamat']; ?>
						</td>
						<td>
							<?= $data['email']; ?>
						</td>
						<td>
							<?= $data['kota']; ?>
						</td>
						<td>
							<?= $data['keperluan']; ?>
							-
							<?= $data['keterangan']; ?>
						</td>
						<td>
							<?php  $tgl = $data['tgl_out']; echo date("d/M/Y", strtotime($tgl))?>
							<span class="badge badge-success">
								s/d
							</span>
							<?php  $tgl = $data['tgl_in']; echo date("d/M/Y", strtotime($tgl))?>
						</td>
					
						    <td>
								
<?php
	//menhecek data yg dipilih
	if ($data['status'] == "Proses") { ?>
		<span class="badge badge-info">
			Proses
		</span>

	<?php }elseif ($data['status'] == "Verifikasi") { ?>
		<span class="badge badge-success">
			Verifikasi
		</span>

	<?php }elseif ($data['status'] == "Ditolak") { ?>
		<span class="badge badge-danger">
			Ditolak
		</span>

	<?php }elseif ($data['status'] == "Berakhir") { ?>
		<span class="badge badge-warning">
			Berakhir
		</span>
		<?php } 
													
?>
							</td>
							<td>
								<?php echo $data['berkas']; ?>
							</td>

						<td>
						    <a href="?page=reading&kode=<?php echo $data['id_izin']; ?>" title="File PDF"
								 class="btn btn-primary btn-sm d-block my-1">
									<i class="fa fa-book"></i>
								</a>

							<a href="?page=edit-izin&kode=<?php echo $data['id_izin']; ?>" title="Verifikasi"
							 class="btn btn-success btn-sm d-block my-1">
								<i class="fa fa-edit"></i>
							</a>

							<a href="https://api.whatsapp.com/send?phone=<?php echo $data['notelp']; ?>&text=Kepada Yth%20<?php echo $data['pbphh']; ?>,
								%20Silahkan%20Melakukan%20Kelengkapan%20Data%20dan%20Berkas%20PBPH%20Untuk%20Periode%202023%20*Seksi PPKH*"
								 target=" _blank" title="Pesan WhatsApp" class="btn btn-success btn-sm d-block my-1"> 
								 WA
								</a>

							<a href="?page=del-izin&kode=<?php echo $data['id_izin']; ?>" onclick="return confirm('Benarkah Anda Ingin Menghapus Data ini ?')"
							 title="Hapus" class="btn btn-warning btn-sm d-block my-1">
								<i class="fa fa-trash"></i>
	                        </a>

						</td>
					</tr>

					<?php
                  }
                ?>
				</tbody>
				<tfoot>
					<tr>
						<th>No</th>
						<th>ID RKT</th>
						<th>Nama Perusahaan</th>
						<th>Alamat</th>
						<th>Email</th>
						<th>Kawasan</th>
						<th>Keperluan</th>
						<th>Waktu</th>
						<th>Status</th>
						<th>Berkas RKT</th>
						<th>Aksi</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->

 <!-- jquery -->
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <!-- jquery datatable -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    
        <!-- script tambahan  -->
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
        </script>
    
        <!-- fungsi datatable -->
        <script>
            $(document).ready(function () {
                
            });

	$(document).ready(function () {
		// Setup - add a text input to each footer cell
		var a = 0;
		$('#data-izin tfoot th').each(function () {
			if (a++ != 10) {
				var title = $(this).text();
				$(this).html('<input type="text" class="form-control" placeholder="' + title + '" />');
			}else{
				$(this).html('');
			}
			
		});
	
		// DataTable
		var table = $('#data-izin').DataTable({
			initComplete: function () {
				// Apply the search
				this.api()
					.columns()
					.every(function () {
						var that = this;
	
						$('input', this.footer()).on('keyup change clear', function () {
							if (that.search() !== this.value) {
								that.search(this.value).draw();
							}
						});
					});

					var r = $('#data-izin tfoot tr');
					r.find('th').each(function(){
						$(this).css('padding', 8);
					});
					$('#data-izin thead').append(r);
					$('#search_0').css('text-align', 'center');
			},
			
			
			// script untuk membuat export data 
            // dom: 'Bfrtip',
            dom: 'Bflrtip',
            buttons: [
                {
					extend: 'copy',
					className: 'btn btn-info mx-1',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
					}
				},
                {
					extend: 'csv',
					className: 'btn btn-info mx-1',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
					}
				},
                {
					extend: 'excel',
					className: 'btn btn-info mx-1',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
					}
				},
                
                {
					extend: 'print',
					className: 'btn btn-info mx-1',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
					}
				},
				{
					extend: 'pdf',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
					},
					className: 'btn btn-info mx-1',
					customize: function ( doc ) {
						doc.pageMargins = [10, 1, 10,1]
					}
				},
            ]
            })		
                    
		
	});
			
</script>