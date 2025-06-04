<?php
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}
$id = $_GET['id'];

$result =  mysqli_query($mysqli, "SELECT * FROM ekstrakurikuler WHERE id=$id");

while($ekstrakurikuler_data = mysqli_fetch_array($result))
{
    $nama = $ekstrakurikuler_data['nama'];
    $gambar = $ekstrakurikuler_data['gambar'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin - TiketBudaya</title>
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
            background-color: #2c3e50;
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
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #3498db;
        }
        footer {
            margin-top: auto;
            background-color: #2c3e50;
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

    <form method="POST" action="ekskul_update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="gambar" value="<?php echo htmlspecialchars($gambar); ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>

    <footer>
        <p>&copy; 2024 projectsekolah. All rights reserved.</p>
    </footer>
</body>
</html>
