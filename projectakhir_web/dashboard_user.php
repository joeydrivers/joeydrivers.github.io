<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login_user.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_user.css">
    <title>Booking</title>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                </div>
                <ul class="menu">
                    <li><a href="logout_user.php">Log out</a></li>
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                    <button id="popupButton">Info Pemesanan Tiket</button>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <section class="booking">
                <div class="container">
                    <h2>Formulir Pemesanan Tiket</h2>
                    <form method="post" action="hasil_pesanan.php">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" required>

                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" required></textarea>

                        <label for="no_hp">Nomor Telepon:</label>
                        <input type="tel" id="no_hp" name="no_hp" required>

                        <label for="tujuan">Tujuan (asal Samarinda):</label>
                        <select id="tujuan" name="tujuan" required>
                            <option value="Wahau">Wahau</option>
                            <option value="Sangatta">Sangatta</option>
                            <option value="Bontang">Bontang</option>
                            <option value="Berau">Berau</option>
                            <option value="Malinau">Malinau</option>
                            <option value="Banjarmasin">Banjarmasin</option>
                            <option value="Makassar">Makassar</option>
                            <option value="Pare-pare">Pare-pare</option>
                            <option value="Toraja">Toraja</option>
                            <option value="Palopo">Palopo</option>
                        </select>

                        <label for="tanggal">Tanggal Keberangkatan:</label>
                        <input type="date" id="tanggal" name="tanggal" required>

                        <label for="tipe_bus">Tipe Bus:</label>
                        <select id="tipe_bus" name="tipe_bus" required>
                            <option value="ekonomi">Ekonomi</option>
                            <option value="bisnis">Bisnis</option>
                            <option value="vip">VIP</option>
                        </select>

                        <div id="harga_tiket">
                            <label for="harga">Harga Tiket:</label>
                            <input type="text" id="harga" name="harga" readonly>
                        </div>

                        <script>
                            document.getElementById("tipe_bus").addEventListener("change", function() {
                                var tipeBus = this.value;
                                var hargaTiket = document.getElementById("harga");
                                if (tipeBus === "ekonomi") {
                                    hargaTiket.value = "Rp. 100.000";
                                } else if (tipeBus === "bisnis") {
                                    hargaTiket.value = "Rp. 200.000";
                                } else if (tipeBus === "vip") {
                                    hargaTiket.value = "Rp. 300.000";
                                }
                            });
                        </script>

                        <button type="submit" id="submitButton">Submit</button>
                    </form>
                </div>
            </section>
        </section>
    </main>
    <section class="about">
            <div class="container">
                <h2>Merk Bus : </h2>
                <ul>-Mercedes Benz</ul>
                <ul>-Scania</ul>
                <ul>-Dong Feng</ul>
                <ul>-MAN</ul>
                <ul>-HINO</ul>
                <ul>-Nissan Diesel</ul> 
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
        <p>&copy; 2023 PO. Rajawali Trans - Travel Bus</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>