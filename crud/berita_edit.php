<?php
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}
$id = $_GET['id'];

$result =  mysqli_query($mysqli, "SELECT * FROM berita WHERE id=$id");

while($berita_data = mysqli_fetch_array($result))
{
    $judul = $berita_data['judul'];
    $berita = $berita_data['berita'];
    $foto = $berita_data['foto'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin - Website SMPN 2 Prambon</title>
    <style>
        /* CSS dari edit.css digabung di sini */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0; padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #00c8b6;
            color: white;
            padding: 20px;
            text-align: center;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 300px;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        td {
            padding: 10px;
            vertical-align: middle;
        }
        input[type="text"] {
            width: 100%;
            padding: 6px 8px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #00c8b6;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #00c8b6;
        }
        footer {
            margin-top: auto;
            background-color: #00c8b6;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h3>Formulir Edit Ekstrakurikuler</h3>
    </header>

    <form method="POST" action="berita_update.php">
        <table>
            <tr>
                <td>judul</td>
                <td><input type="text" name="judul" value="<?php echo htmlspecialchars($judul); ?>"></td>
            </tr>
            <tr>
                <td>berita</td>
                <td><input type="text" name="berita" value="<?php echo htmlspecialchars($berita); ?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto" value="<?php echo htmlspecialchars($foto); ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>

    <footer>
        <p>&copy; 2025 ProjectSekolah. Kelompok 14. All rights reserved.</p>
    </footer>
</body>
</html>
