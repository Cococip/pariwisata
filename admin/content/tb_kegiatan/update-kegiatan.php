<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_kegiatan WHERE id_kegiatan ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto'];
 }
}

$nama_kegiatan = $_POST['nama'];
$ket_kegiatan = $_POST['keterangan'];
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
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='kegiatan.php'</script>");
}else{
    if($ukuran < 2044070){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_kegiatan SET nama_kegiatan='$nama_kegiatan',ket_kegiatan='$ket_kegiatan',foto='$xx' WHERE id_kegiatan='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:kegiatan.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='kegiatan.php'</script>");
        }
    } elseif ($ukuran > 2044070) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='kegiatan.php'</script>");
    }
}
?>