<?php
include ('../../config/koneksi.php');

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['fotoPrestasi']['name'];
$ukuran   = $_FILES['fotoPrestasi']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='prestasi.php'</script>");

} elseif ($ukuran < 10220350){
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['fotoPrestasi']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

    $sql = mysqli_query($connect,"INSERT INTO tb_prestasi VALUES('','$nama','$keterangan','$xx')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Prestasi'); window.location.href='prestasi.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Prestasi'); window.location.href='prestasi.php'</script>");
    }

} elseif ($ukuran > 10220350) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='prestasi.php'</script>");
}
?>