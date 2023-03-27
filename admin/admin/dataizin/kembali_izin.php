<?php
	$petugas = $_SESSION["ses_nama"];

	$sql = $koneksi->query("SELECT * from tb_telegram");
  	while ($data= $sql->fetch_assoc()) {
    $id_chat=$data['id_chat'];
  }
?>

<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT s.pbphh, s.alamat, i.id_izin FROM tb_umum s inner join tb_rkt i on s.id_umum=i.id_umum WHERE id_izin='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		
		$pbphh=$data_cek['pbphh'];
		$alamat=$data_cek['alamat'];
    }
	$sql_ubah = "UPDATE tb_rkt SET status='0'
	WHERE id_izin='".$_GET['kode']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
	mysqli_close($koneksi);

	if ($query_ubah) {
		echo "<script>
	Swal.fire({title: 'Data Berhasil di Perbarui',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {if (result.value)
		{window.location = 'index.php?page=data-izin';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Proses Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {if (result.value)
		{window.location = 'index.php?page=data-izin';
		}
	})</script>";
	}