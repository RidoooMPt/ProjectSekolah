<?php
include_once '../koneksi.php';

$id = $_GET['id']; // Ambil id ekstrakurikuler dari parameter URL

// Hapus data ekstrakurikuler dari database
$delete = mysqli_query($mysqli, "DELETE FROM ekstrakurikuler WHERE id_ekstrakurikuler = $id") or die(mysqli_error($mysqli));

if($delete) {
    // Redirect kembali ke halaman ekstrakurikuler.php setelah berhasil menghapus
    header("Location: ekskul_tabell.php");
    exit();
} else {
    echo "Gagal menghapus ekstrakurikuler.";
}
?>