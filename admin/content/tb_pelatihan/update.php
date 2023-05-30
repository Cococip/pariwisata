<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_pelatihan WHERE id_pelatihan ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['fotop'];
 }
}

$nama_p = $_POST['nama_p'];
$ket_p = $_POST['ket_p'];
$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['fotop']['name'];

if(!empty($filename)){
    $filename = $filename;
} else {
    $filename = $_FILES['fotop'][$gambar];
}

$ukuran   = $_FILES['fotop']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($image,$ekstensi)){
    // echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='pelatihan.php'</script>");
}else{
    if($ukuran < 2044070){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['fotop']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_pelatihan SET nama_p='$nama_p',ket_p='$ket_p',fotop='$xx' WHERE id_pelatihan='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:pelatihan.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='pelatihan.php'</script>");
        }
    } elseif ($ukuran > 2044070) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='pelatihan.php'</script>");
    }
}
?>