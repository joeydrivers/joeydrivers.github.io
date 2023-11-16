<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: dashboard_admin.php");
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['user'] = $username;
        header("Location: dashboard_admin.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <div class="form-container">
            <h1>Masuk</h1><hr>
            <?php
                if (isset($error)) {
                    echo "<p style='color: red;'>Username dan password salah</p>";
                }
            ?>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" class="textfield" required>
                <input type="password" name="password" placeholder="Password" class="textfield" required>
                <div class="remember">
                    <input type="checkbox" name="remember" value="true">
                    <label for="remember">Ingat username ini</label>
                </div>
                <input type="submit" name="masuk" value="Masuk" class="login-btn">
                <a href="index.html" class="login-btn">Balik ke beranda</a>
            </form>
        </div>
    </div>
</body>
</html>
