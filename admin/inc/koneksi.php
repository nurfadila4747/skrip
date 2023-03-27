<?php
$koneksi = new mysqli ("localhost","root","","skripsiku");


function selectAllData() {
    $query = "SELECT * FROM tb_izin";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO tb_izin VALUES ('".$data['id_izin']. "','" . $data['id_umum'] . "','" . $data['keperluan'] . "','" . $data['keterangan'] . "','" . $data['tgl_out'] . "','" . $data['tgl_in'] . "','" . $data['status'] . "','" . $data['berkas'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
 ?>
