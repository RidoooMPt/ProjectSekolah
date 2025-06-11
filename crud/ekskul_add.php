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
        <h1 class="title">Tambah Ekstrakurikuler</h1><br>
        <form class="form" action="ekskul_add.php" method="post">
            <input type="text" name="nama" placeholder="nama">
            <input type="img" name="foto" placeholder="foto">
            <a>
                <button name="submit" class="button">Tambah</button>
            </a>
        </from>
</body>
<?php
    if(isset($_POST ['submit'])) {
        $nama = $_POST ['nama'];
        $foto = $_POST ['foto'];

        include_once("../koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO ekstrakurikuler(nama, foto) 
        VALUES ('$nama', '$foto')");
        header("location:ekskul_tabel.php");
    }
?>
</html>