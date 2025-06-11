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
        <h1 class="title">Tambah Guru</h1><br>
        <form class="form" action="guru_add.php" method="post">
            <input type="text" name="nama" placeholder="nama">
            <input type="text" name="mapel" placeholder="mapel">
            <input type="img" name="foto" placeholder="foto">
            <a>
                <button name="submit" class="button">Tambah</button>
            </a>
        </from>
</body>
<?php
    if(isset($_POST ['submit'])) {
        $nama = $_POST ['nama'];
        $mapel = $_POST ['mapel'];
        $foto = $_POST ['foto'];

        include_once("../koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO guru(nama, mapel, foto) 
        VALUES ('$nama', '$mapel', '$foto')");
        header("location:guru_tabel.php");
    }
?>
</html>