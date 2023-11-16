<?php
require 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM penumpang1 where id=$id");
    $penumpang1 =[];
while($row=mysqli_fetch_array($result)){
    $penumpang1[] = $row;
}
$penumpang1 = $penumpang1[0];
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
                <div class="logo">
                </div>
                <ul class="menu">
                    <li><a href="index.html">Beranda</a></li>
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
                    <h2>Formulir Pemesanan Tiket</h2>
                    <form method="post" action="edit_penumpang1.php">

                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>" required>

                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" value="<?= $penumpang1['nama'] ?>" required>

                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" value="<?= $penumpang1['alamat'] ?>" required></textarea>

                        <label for="no_hp">Nomor Telepon:</label>
                        <input type="tel" id="no_hp" name="no_hp" value="<?= $penumpang1['no_hp'] ?>" required>

                        <label for="tujuan">Tujuan:</label>
                        <select type="tujuan" id="tujuan" name="tujuan" value="<?= $penumpang1['tujuan'] ?>" required>
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
                        <input type="date" id="tanggal" name="tanggal" value="<?= $penumpang1['tanggal'] ?>" required>

                        <label for="tipe_bus">Tipe Bus:</label>
                        <select id="tipe_bus" name="tipe_bus" value="<?= $penumpang1['tipe_bus'] ?>" required>
                            <option value="ekonomi">Ekonomi</option>
                            <option value="bisnis">Bisnis</option>
                            <option value="vip">VIP</option>
                        </select>

                        <div id="harga_tiket">
                            <label for="harga">Harga Tiket:</label>
                            <input type="text" id="harga" name="harga" value="<?= $penumpang1['harga'] ?>" readonly>
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