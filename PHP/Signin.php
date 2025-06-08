<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signin-style.css">
</head>
<body>

<div class="signup-container">
    <h2>Buat Akun Baru</h2>
    <form action="signin.php" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit" name="signup">Daftar Sekarang</button>
        <p class="login-text">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </form>
</div>

</body>
</html>
