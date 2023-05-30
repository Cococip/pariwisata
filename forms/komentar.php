<?php
include ('../config/koneksi.php');

$namak = $_POST['namak'];
$isi = $_POST['isi'];


    $sql = mysqli_query($connect,"INSERT INTO tb_komentar VALUES('','$namak','$isi')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Matur suwun'); window.location.href='review.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Komentar'); window.locatxion.href='../index.php'</script>");
    }

?>  