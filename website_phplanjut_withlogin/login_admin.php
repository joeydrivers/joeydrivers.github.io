<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['user'] = $username;
        header("Location: index.php");
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
    <link rel="stylesheet" href="style_login.css">
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
            </form>
        </div>
    </div>
</body>
</html>
