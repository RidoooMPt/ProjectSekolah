<?php
include_once '../koneksi.php';

$id = $_GET['id']; // Ambil id guru dari parameter URL

// Hapus data guru dari database
$delete = mysqli_query($mysqli, "DELETE FROM guru WHERE id = $id") or die(mysqli_error($mysqli));

if($delete) {
    // Redirect kembali ke halaman guru.php setelah berhasil menghapus
    header("Location: guru_tabel.php");
    exit();
} else {
    echo "Gagal menghapus guru.";
}
?>