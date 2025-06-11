<?php
include_once '../koneksi.php';

$id = $_GET['id']; // Ambil id berita dari parameter URL

// Hapus data berita dari database
$delete = mysqli_query($mysqli, "DELETE FROM berita WHERE id = $id") or die(mysqli_error($mysqli));

if($delete) {
    // Redirect kembali ke halaman berita.php setelah berhasil menghapus
    header("Location: berita_tabel.php");
    exit();
} else {
    echo "Gagal menghapus berita.";
}
?>