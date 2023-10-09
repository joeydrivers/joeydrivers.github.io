<?php
if(isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['tujuan']) && isset($_POST['tanggal'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $tujuan = $_POST['tujuan'];
    $tanggal = $_POST['tanggal'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Terima Kasih</title>
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
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="halaman2.html">Tentang Owner/Contact Person</a></li>
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                    <button id="popupButton">Info Pemesanan Tiket</button>
                </ul> 
            </div>
        </nav>
    </header>

    <main>
        <section class="terimakasih">
            <div class="logo">
                <h1>Terima Kasih, Anda Telah Melakukan Pemesanan Tiket</h1>
                <p>Berikut adalah data yang Anda input:</p>
                <ul>
                    <li><strong>Nama Lengkap: </strong> <?php echo $_POST["nama"]; ?></li>
                    <li><strong>Alamat: </strong> <?php echo $_POST["alamat"]; ?> </li>
                    <li><strong>Nomor Telepon: </strong> <?php echo $_POST["no_hp"]; ?> </li>
                    <li><strong>Tujuan: </strong> <?php echo $_POST["tujuan"]; ?> </li>
                    <li><strong>Tanggal Keberangkatan: </strong> <?php echo $_POST["tanggal"]; ?> </li>
                    <br>
                    <li>Harap Di ScreenShot sebagai bukti valid tiket</li>
                    <li>Tunjukkan tiket ke supir</li>

                    <a href="index.html" class="btn">KEMBALI</a>
                </ul>
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
