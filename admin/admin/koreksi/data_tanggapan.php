
    <!-- project  -->
    <div class="project_area">
<form action="" method="post" class="tulisan_input2">
<input type="text" name="cr" placeholder="Cari Data Pengaduan" style="width:20%; padding:8px; margin-top:5px; margin-bottom:5px" class="form_input" />
<input type="submit" style="margin-top:10px" class="btn btn-outline-dark my-2 my-sm-0" style="padding:8px" name="cari" value="Cari Data" />
</form>    
            <table class="table1" align="center" width="100%">
		    <tr>
			<th>No</th>
			<th>Tgl Pengaduan</th>
			<th>Nama</th>
			<th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th><a class="btn btn-dark" style="float:left; width:70%" href="laporan_masarakat.php" role="button"><i class="fa fa-print"></i> Cetak</a> </th>
		</tr>
<?php
$batas =10;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;
	$halaman = 1;
    }
	else{
		$posisi = ($halaman-1) * $batas;
	}
$no =1 +$posisi;
$cari = $_POST ['cr'];
if ($cari !=''){
$query = mysqli_query ($conn, "SELECT * FROM pengaduan WHERE nama_pengadu LIKE '%".$cari."%'
	OR nik LIKE '%".$cari."%' OR tgl_pengaduan LIKE '%".$cari."%' OR status LIKE '%".$cari."%'");}else{
	$query = mysqli_query ($conn, "SELECT * FROM pengaduan LIMIT $posisi,$batas");
}
if (mysqli_num_rows ($query)){
while ($data = mysqli_fetch_array ($query)){
?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $data['tgl_pengaduan'] ?></td>
<td><?php echo $data['nama_pengadu'] ?></td>
<td><?php echo $data['nik'] ?></td>
<td><?php echo $data['isi_laporan'] ?></td>
<td><a href="http://localhost/ukom_aipp/image/<?php echo $data['foto'];?>"><img src="image/<?php echo $data['foto'];?>" height="55px"></a></td>
<td><?php echo $data['status'] ?></td>
<form method="post" action="edit_selesai.php?id=<?php echo $data['id_pengaduan'] ?>">
<input type="hidden" name="id" class="form_input2" value="<?php echo $data['id_pengaduan']?>">
<input type="hidden" name="tgl" class="form_input2" value="<?php echo $data['tgl_pengaduan']?>">
<input type="hidden" name="nama" class="form_input2" value="<?php echo $data['nama_pengadu']?>"></td>
<input type="hidden" name="nik" class="form_input2" value="<?php echo $data['nik']?>">
<input type="hidden" name="isi" class="form_input2" value="<?php echo $data['isi_laporan']?>">
<input type="hidden" name="tlp" class="form_input2" value="<?php echo $data['tlp']?>">
<input type="hidden" name="foto" class="form_input2" value="<?php echo $data['foto']?>">
<input type="hidden" name="status" class="form_input2" value="Selesai">
<td>
<button type="submit" class="btn btn-success" name="simpan">Selesai</button>
<a onClick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger" href="hapus_data.php?idd=<?php echo $data['id_pengaduan'] ?>" role="button"><i class="fa fa-remove"></i>Hapus</a>
<div class="dropdown">
<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" style="width:auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i></button>
  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="tanggapan_adm.php?id=<?php echo $data['id_pengaduan'] ?>">Tanggapi</a>
        <a class="dropdown-item" href="tanggapan_adm_cek.php?id=<?php echo $data['isi_laporan'] ?>">Lihat Tanggapan</a>
	</div>
</div>
</form></td>
</tr>
<?php }}else{
	echo '<tr><td colspan="8" align="center">TIDAK ADA DATA!!!</td></tr>';
}?>
</table>
<?php
	$query2		= mysqli_query($conn, "SELECT * FROM pengaduan");
	$jmldata	= mysqli_num_rows($query2);
	$jmlhalaman	= ceil($jmldata/$batas);
?>
<nav aria-label="page navigation example">
<ul class="pagination">
<li class="page-item"><a class="page-link" style="color:blue">Halaman</a></li>
	<?php
	for($i=1;$i<=$jmlhalaman;$i++)
	if ($i != $halaman){
		echo "<li class='page-item'><a class='page-link' href=\"data_pengaduan.php?halaman=$i\">$i</a></li>";
	}
	else{
		echo " <li class='page-item'><a class='page-link'>$i</a></li>";
	}
	?>

    </div>
    <!--/ project  -->