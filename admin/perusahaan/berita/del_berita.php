<?php
if(isset($_GET['kode'])){
    $sql_cek = "select * from tb_berita where id_berita='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php
    $pdf= $data_cek['filee'];
    if (file_exists("../pdf/$pdf")){
        unlink("../pdf/$pdf");
    }

    $sql_hapus = "DELETE FROM tb_berita WHERE id_berita='".$_GET['kode']."'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);
    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'page.php?page=prs-data-berita'
        ;}})</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'page.php?page=prs-data-berita'
        ;}})</script>";
    }
