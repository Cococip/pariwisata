<?php
include ('../../config/koneksi.php');

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['fotoKegiatan']['name'];
$ukuran   = $_FILES['fotoKegiatan']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='kegiatan.php'</script>");

} elseif ($ukuran < 2044070){
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['fotoKegiatan']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

    $sql = mysqli_query($connect,"INSERT INTO tb_kegiatan VALUES('','$nama','$keterangan','$xx')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Kegiatan Sekolah'); window.location.href='kegiatan.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Kegiatan Sekolah'); window.location.href='kegiatan.php'</script>");
    }

} elseif ($ukuran > 2044070) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='kegiatan.php'</script>");
}
?>