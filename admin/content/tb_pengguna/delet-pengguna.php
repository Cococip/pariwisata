<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($connect, "SELECT * FROM tb_pengunjung WHERE id_pengunjung='$id'");
$data = mysqli_fetch_array($pilih);
$foto = $data['foto'];
unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak

$qHapus     = mysqli_query($connect, "DELETE FROM tb_pengunjung WHERE id_pengunjung = '$id'");
 
if($qHapus){
    header('location:pengguna.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>