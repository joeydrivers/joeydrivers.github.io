<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $tujuan = $_POST["tujuan"];
    $tanggal = $_POST["tanggal"];
    $tipe_bus = $_POST["tipe_bus"];
    $harga = "";

    if ($tipe_bus === "ekonomi") {
        $harga = "Rp. 100.000";
    } elseif ($tipe_bus === "bisnis") {
        $harga = "Rp. 200.000";
    } elseif ($tipe_bus === "vip") {
        $harga = "Rp. 300.000";
    }

    $result = mysqli_query($conn, "UPDATE penumpang1 SET id='$id', nama='$nama', alamat='$alamat', no_hp='$no_hp', tujuan='$tujuan', tipe_bus='$tipe_bus', harga='$harga', tanggal='$tanggal' WHERE id=$id");

    if ($result) {
        echo "<script>
            alert('Data berhasil diedit');
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diedit');
        </script>";
    }
}

$result = mysqli_query($conn, "SELECT * FROM penumpang1 WHERE id=$id");
$penumpang1 = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_user.css">
    <title>edit</title>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo"></div>
                <ul class="menu">
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <section class="booking">
                <div class="container">
                    <h2>Bukti Pemesanan Tiket</h2>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = $_POST["nama"];
                        $alamat = $_POST["alamat"];
                        $no_hp = $_POST["no_hp"];
                        $tujuan = $_POST["tujuan"];
                        $tanggal = $_POST["tanggal"];
                        $tipe_bus = $_POST["tipe_bus"];
                        $harga = "";

                        if ($tipe_bus === "ekonomi") {
                            $harga = "Rp. 100.000";
                        } elseif ($tipe_bus === "bisnis") {
                            $harga = "Rp. 200.000";
                        } elseif ($tipe_bus === "vip") {
                            $harga = "Rp. 300.000";
                        }

                        echo "<table>";
                        echo "<tr><td>Nama Lengkap:</td><td>$nama</td></tr>";
                        echo "<tr><td>Alamat:</td><td>$alamat</td></tr>";
                        echo "<tr><td>Nomor Telepon:</td><td>$no_hp</td></tr>";
                        echo "<tr><td>Tujuan:</td><td>$tujuan</td></tr>";
                        echo "<tr><td>Tanggal Keberangkatan:</td><td>$tanggal</td></tr>";
                        echo "<tr><td>Tipe Bus:</td><td>$tipe_bus</td></tr>";
                        echo "<tr><td>Harga Tiket:</td><td>$harga</td></tr>";
                        echo "</table>";

                        echo ' <li><a href="dashboard_admin.php" class="btn">LKEMBALI KE DASHBOARD</a></li>';
                    }
                    ?>
                </div>
            </section>
        </section>
        <section class="about">
            <div class="container">
            <h2>Tujuan : </h2>
                <ul>-Samarinda</ul>
                <ul>-Wahau</ul>
                <ul>-Sangatta</ul>
                <ul>-Bontang</ul>
                <ul>-Berau</ul>
                <ul>-Malinau</ul>
                <ul>-Banjarmasin</ul>
                <ul>-Makassar</ul>
                <ul>-Pare-pare</ul>
                <ul>-Toraja</ul>
                <ul>-Palopo</ul>
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
