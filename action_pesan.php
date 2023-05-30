<?php
include ('../config/koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];


    $sql = mysqli_query($connect,"INSERT INTO tb_pesan VALUES('','$nama','$email','$subject','$pesan')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Pesan anda berhasil dikirim'); window.location.href='index.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Maaf pesan anda gagal terkirim'); window.locatxion.href='index.php'</script>");
    }

?>  