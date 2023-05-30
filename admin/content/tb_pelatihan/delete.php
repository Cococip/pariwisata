<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($connect, "SELECT * FROM tb_pelatihan WHERE id_pelatihan='$id'");
$data = mysqli_fetch_array($pilih);
$fotop = $data['fotop'];
unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak

$qHapus     = mysqli_query($connect, "DELETE FROM tb_pelatihan WHERE id_pelatihan = '$id'");
 
if($qHapus){
    header('location:pelatihan.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>