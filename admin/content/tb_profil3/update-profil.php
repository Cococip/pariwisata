<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_profil3 WHERE id_profil3 ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto3'];
 }
}

$judul3= $_POST['judul3'];
$deskripsi3 = $_POST['deskripsi3'];
$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto3']['name'];

if(!empty($filename)){
    $filename = $filename;
} else {
    $filename = $_FILES['foto3'][$gambar];
}

$ukuran   = $_FILES['foto3']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='profil3.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto3']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_profil3 SET judul3='$judul3',deskripsi3='$deskripsi3',foto3='$xx' WHERE id_pRofil3='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:profil3.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='profil3.php'</script>");
        }
    } elseif ($ukuran > 10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='profil3.php'</script>");
    }
}
?>