<?php
include ('../../config/koneksi.php');

$nama = $_POST['nama_peng'];
$umur = $_POST['umur_peng'];
$alamat = $_POST['alamat_peng'];
$telp = $_POST['telp_peng'];
$pekerjaan = $_POST['pekerjaan_peng'];
$username = $_POST['username'];
$password = md5($_POST['password']);


    $sql = mysqli_query($connect,"INSERT INTO tb_pengunjung VALUES('','$nama','$umur','$alamat','$telp','$pekerjaan','$username','$password')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Matur suwun'); window.location.href='pengguna.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Pengunjung'); window.locatxion.href='../index.php'</script>");
    }

?>  