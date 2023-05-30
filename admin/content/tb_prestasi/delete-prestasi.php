<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($connect, "SELECT * FROM tb_prestasi WHERE id_prestasi='$id'");
$data = mysqli_fetch_array($pilih);
$foto = $data['foto'];
unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak

$qHapus     = mysqli_query($connect, "DELETE FROM tb_prestasi WHERE id_prestasi = '$id'");
 
if($qHapus){
    header('location:prestasi.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>