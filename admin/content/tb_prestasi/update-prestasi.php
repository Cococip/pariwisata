<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_prestasi WHERE id_prestasi ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto'];
 }
}

$nama_prestasi = $_POST['nama'];
$ket_prestasi = $_POST['keterangan'];
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
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='prestasi.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_prestasi SET nama_prestasi='$nama_prestasi',ket_prestasi='$ket_prestasi',foto='$xx' WHERE id_prestasi='$id'";
        $update = mysqli_query($connect, $qUpdate);
        if ($update) {
            header('location:prestasi.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='prestasi.php'</script>");
        }
    } elseif ($ukuran > 10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='prestasi.php'</script>");
    }
}
?>