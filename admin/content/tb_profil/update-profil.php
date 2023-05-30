<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_profil WHERE id_ptofil ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto1'];
 }
}

$judul= $_POST['judul'];
$deskripsi1 = $_POST['deskripsi1'];
$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto1']['name'];

if(!empty($filename)){
    $filename = $filename;
} else {
    $filename = $_FILES['foto1'][$gambar];
}

$ukuran   = $_FILES['foto1']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='profil.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto1']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_profil SET judul='$judul',deskripsi1='$deskripsi1',foto1='$xx' WHERE id_ptofil='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:profil.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='profil.php'</script>");
        }
    } elseif ($ukuran > 10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='profil.php'</script>");
    }
}
?>