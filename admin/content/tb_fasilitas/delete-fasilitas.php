<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($connect, "SELECT * FROM tb_fasilitas WHERE id_fasilitas='$id'");
$data = mysqli_fetch_array($pilih);
$foto = $data['foto'];
unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak

$qHapus     = mysqli_query($connect, "DELETE FROM tb_fasilitas WHERE id_fasilitas = '$id'");
 
if($qHapus){
    header('location:fasilitas.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>