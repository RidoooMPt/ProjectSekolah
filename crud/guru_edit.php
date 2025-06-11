<?php
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}
$id = $_GET['id'];

$result =  mysqli_query($mysqli, "SELECT * FROM guru WHERE id=$id");

while($guru_data = mysqli_fetch_array($result))
{
    $nama = $guru_data['nama'];
    $mapel = $guru_data['mapel'];
    $foto = $guru_data['foto'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin - Website SMPN 2 Prambon</title>
    <style>
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
        <h3>Formulir Edit guru</h3>
    </header>

    <form method="POST" action="guru_update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>"></td>
            </tr>
            <tr>
                <td>Mapel</td>
                <td><input type="text" name="mapel" value="<?php echo htmlspecialchars($mapel); ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
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
