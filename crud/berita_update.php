<?php
include("../koneksi.php");

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $berita = $_POST['berita'];
    $foto = $_POST['foto'];

    // Buat query update — perhatikan TABEL dan FIELD-nya
    $result = mysqli_query($mysqli, 
        "UPDATE berita 
         SET judul = '$judul', '$berita', foto = '$foto' 
         WHERE id = $id");

    header('Location: berita_tabel.php');
} else {
    die("Akses dilarang...");
}
?>
