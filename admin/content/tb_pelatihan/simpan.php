<?php
include ('../../config/koneksi.php');

$nama_p = $_POST['nama_p'];
$ket_p = $_POST['ket_p'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['fotop']['name'];
$ukuran   = $_FILES['fotop']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='pelatihan.php'</script>");

} elseif ($ukuran < 2044070){
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['fotop']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

    $sql = mysqli_query($connect,"INSERT INTO tb_pelatihan VALUES('','$nama_p','$ket_p','$xx')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah pelatihan'); window.location.href='pelatihan.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah pelatihan'); window.location.href='pelatihan.php'</script>");
    }

} elseif ($ukuran > 2044070) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='pelatihan.php'</script>");
}
?>