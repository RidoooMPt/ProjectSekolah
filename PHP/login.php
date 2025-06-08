<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>

<div class="login-container">
    <h2>Login ke Akun Anda</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit" name="login">Login</button>
        <p class="signup-text">Belum punya akun? <a href="signin.php">Sign up di sini</a></p>
    </form>
</div>

</body>
</html>
