<?php
include("../koneksi.php");

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $foto = $_POST['foto']; 

    $result = mysqli_query($mysqli, 
        "UPDATE guru 
         SET nama = '$nama', mapel = '$mapel', foto = '$foto' 
         WHERE id = $id");

    if ($result) {
        header('Location: guru_tabel.php');
    } else {
        die("Gagal memperbarui data: " . mysqli_error($mysqli));
    }
} else {
    die("Akses dilarang...");
}
?>