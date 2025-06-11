<?php
include("../koneksi.php");

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];

    // Buat query update — perhatikan TABEL dan FIELD-nya
    $result = mysqli_query($mysqli, 
        "UPDATE ekstrakurikuler 
         SET kritik = '$kritik', '$saran' 
         WHERE id = $id");

    header('Location: KritikSaran_tabel.php');
} else {
    die("Akses dilarang...");
}
?>
