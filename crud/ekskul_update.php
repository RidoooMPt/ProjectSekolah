<?php
include("../koneksi.php");

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];

    // Buat query update — perhatikan TABEL dan FIELD-nya
    $result = mysqli_query($mysqli, 
        "UPDATE ekstrakurikuler 
         SET nama = '$nama', foto = '$foto' 
         WHERE id = $id");

    header('Location: ekskul_tabel.php');
} else {
    die("Akses dilarang...");
}
?>
