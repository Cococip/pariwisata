<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_fasilitas WHERE id_fasilitas ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto'];
 }
}

$nama_fasilitas = $_POST['nama'];
$ket_fasilitas = $_POST['keterangan'];
$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if(!empty($filename)){
    $filename = $filename;
} else {
    $filename = $_FILES['foto'][$gambar];
}

$ukuran   = $_FILES['foto']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='fasilitas.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_fasilitas SET nama_fasilitas='$nama_fasilitas',ket_fasilitas='$ket_fasilitas',foto='$xx' WHERE id_fasilitas='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:fasilitas.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='fasilitas.php'</script>");
        }
    } elseif ($ukuran > 10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='fasilitas.php'</script>");
    }
}
?>