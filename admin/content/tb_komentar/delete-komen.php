<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($connect, "SELECT * FROM tb_komentar WHERE id_komentar='$id'");
$data = mysqli_fetch_array($pilih);

$qHapus     = mysqli_query($connect, "DELETE FROM tb_komentar WHERE id_komentar = '$id'");
 
if($qHapus){
    header('location:komentar.php');
} else {
    header('location:Foto?komentar=Gagal-Di Hapus');
}
?>