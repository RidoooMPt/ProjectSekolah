<?php
include("../koneksi.php");

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];

    // Buat query update — perhatikan TABEL dan FIELD-nya
    $result = mysqli_query($mysqli, 
        "UPDATE ekstrakurikuler 
         SET nama = '$nama', gambar = '$gambar' 
         WHERE id = $id");

    header('Location: ekskul_tabel.php');
} else {
    die("Akses dilarang...");
}
?>
