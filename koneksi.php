<?php
$databaseHost     = "localhost";
$databaseName     = "projectsekolah";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli) {
    // echo "Koneksi DB berhasil.<br/>";
} else {
    echo "Koneksi gagal: " . mysqli_connect_error();
}
?>