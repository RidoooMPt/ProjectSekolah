<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - ekstrakurikuler</title>
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #00A99D; /* Warna dari gambar */
            color: #fff;
        }

        .navlist {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navlist li {
            margin: 0 15px;
        }

        .navlist li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
        }

        .navlist li a.active, .navlist li a:hover {
            color: #ffdd57;
        }

        #menu-icon {
            display: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1.2em;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .table thead tr {
            background-color: #00A99D; /* Warna dari gambar */
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .table th, .table td {
            padding: 12px 15px;
            border: 1px solid #ffffff;
        }

        .table tbody tr {
            border-bottom: 1px solid #ffffff;
        }

        .table tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }

        .table tbody tr:last-of-type {
            border-bottom: 2px solid #00A99D; /* Warna dari gambar */
        }

        .table tbody tr:hover {
            background-color: #ffffff;
        }

        .table a {
            text-decoration: none;
            color: #00A99D; /* Warna dari gambar */
            font-weight: bold;
            margin-right: 10px;
        }

        .table a:hover {
            color: #00c8b6; /* Warna lebih muda */
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5em;
            color: #00A99D; /* Warna dari gambar */
        }

        img {
            width: 100%;
            max-width: 200px;
            border-radius: 10px;
        }

        .btn-tambah {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #00A99D;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .btn-tambah:hover {
            background-color: #00c8b6;
        }
    </style>
</head>
<body>
    <header>
        <ul class="navlist">
            <li><a href="ekskul_tabel" class="active">Ekskul</a></li>
            <li><a href="">Event</a></li>
            <li><a href="">Transaksi</a></li>
            <li><a href="../beranda.php">Log Out</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <center><h1>Tabel ekstrakurikuler</h1></center>
    <a href="ekskul_add.php" class="btn-tambah">Tambah ekstrakurikuler</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama ekstrakurikuler</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        include '../koneksi.php';
        $query_mysqli = mysqli_query($mysqli, "SELECT * FROM ekstrakurikuler") or die(mysqli_error());

        while($data = mysqli_fetch_array($query_mysqli)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><img src="<?php echo $data['gambar']; ?>" alt="Gambar Ekstrakurikuler"></td>
                <td>
                    <a href='ekskul_edit.php?id=<?php echo $data['id'];?>'>Edit</a>
                    <a href='ekskul_delete.php?id=<?php echo $data['id'];?>'>Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>
