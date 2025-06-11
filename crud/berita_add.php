<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contect="with=device-width, initial-scale=1.0">
        <title>Admin - Website SMPN 2 Prambon</title>
        <link rel="stylesheet" href="add.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">

</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Berita</h1><br>
        <form class="form" action="eberita_add.php" method="post">
            <input type="text" name="judul" placeholder="judul">
            <input type="text" name="berita" placeholder="berita">
            <input type="img" name="foto" placeholder="foto">
            <a>
                <button name="submit" class="button">Tambah</button>
            </a>
        </from>
</body>
<?php
    if(isset($_POST ['submit'])) {
        $judul = $_POST ['judul'];
        $berita = $_POST ['berita'];
        $foto = $_POST ['foto'];

        include_once("../koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO berita(judul, berita, foto) 
        VALUES ('$judul', '$berita', '$foto')");
        header("location:berita_tabel.php");
    }
?>
</html>