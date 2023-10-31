<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HOME - PT. DriverMuda Pakinta'ki</title>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <h1>PT. DRIVERMUDA PAKINTA'KI</h1>
                    <h1>Spesialis Travel & Rental Mobil</h1>
                </div>
                <ul class="menu">
                    <li><a href="logout_admin.php">Log out</a></li>
                    <li><a href="halaman2.html">Tentang Owner/Contact Person</a></li>
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                    <button id="popupButton">Info Pemesanan Tiket</button>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Selamat Datang di PT. DriverMuda Pakinta'ki</h1>
                <h1>Travel & Rental Mobil</h1>
                <p>Siap mengantar anda kemanapun, melayani lintas tujuan Area Kalimantan dan Sulawesi.</p>
                <a href="booking.html" class="btn">Daftar Sekarang</a>
                <a href="dashboard.php" class="btn">Data Penumpang</a>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <h2>Deskripsi Unit : </h2>
                <p>Xenia XI 1300cc 2010</p>
                <p>Body Red Maroon, full audio Special Lntas</p>
                <p>Velg First Racing 14</p>
                <p>Ban Dunlop 185/70- R14</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 PT. DriverMuda Pakinta'ki ~ Travel & Rental Mobil</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
