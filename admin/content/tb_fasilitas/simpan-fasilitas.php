<?php
include ('../../config/koneksi.php');

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['fotoFasilitas']['name'];
$ukuran   = $_FILES['fotoFasilitas']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='fasilitas.php'</script>");

} elseif ($ukuran < 10220350){
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['fotoFasilitas']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

    $sql = mysqli_query($connect,"INSERT INTO tb_fasilitas VALUES('','$nama','$keterangan','$xx')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Fasilitas'); window.location.href='fasilitas.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Fasilitas'); window.location.href='fasilitas.php'</script>");
    }

} elseif ($ukuran > 10220350) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='fasilitas.php'</script>");
}
?>