<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_profil2 WHERE id_profil2 ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto2'];
 }
}

$judul2= $_POST['judul2'];
$deskripsi2 = $_POST['deskripsi2'];
$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto2']['name'];

if(!empty($filename)){
    $filename = $filename;
} else {
    $filename = $_FILES['foto2'][$gambar];
}

$ukuran   = $_FILES['foto2']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='profil2.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto2']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_profil2 SET judul2='$judul2',deskripsi2='$deskripsi2',foto2='$xx' WHERE id_pRofil2='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:profil2.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='profil2.php'</script>");
        }
    } elseif ($ukuran > 10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='profil2.php'</script>");
    }
}
?>