<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_pengunjung WHERE id_pengunjung ='$id'");


$nama = $_POST['nama_peng'];
$umur = $_POST['umur_peng'];
$alamat = $_POST['alamat_peng'];
$telp = $_POST['telp_peng'];
$pekerjaan = $_POST['pekerjaan_peng'];
$username = $_POST['username'];
$password = md5($_POST['password']);


    $sql = mysqli_query($connect,"UPDATE tb_pengunjung SET nama_peng='$nama',umur_peng='$umur',alamat_peng='$alamat',telp_peng='$telp',pekerjaan_peng='$pekerjaan',username='$username',password='$password' WHERE id_pengunjung='$id'");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Matur suwun'); window.location.href='pengguna.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Pengunjung'); window.locatxion.href='../index.php'</script>");
    }

?>  