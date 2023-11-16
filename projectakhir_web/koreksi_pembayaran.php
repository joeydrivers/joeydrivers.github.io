<?php

require 'koneksi.php';

if (isset($_POST['nama_pemesan']) && isset($_POST['nohp_pemesan']) && isset($_FILES['bukti_transfer'])) {
    $nama_pemesan = $_POST['nama_pemesan'];
    $nohp_pemesan = $_POST['nohp_pemesan'];
    $bukti_transfer = $_FILES['bukti_transfer']['name'];
    date_default_timezone_set('Asia/Makassar');
    $tanggal_sekarang = date("Y-m-d H:i:s");
    $x = explode('.', $bukti_transfer);
    $extensi = strtolower(end($x));
    $bukti_transfer_baru = $tanggal_sekarang ."-". $nama_pemesan .".". $extensi;
    $bukti_transfer_baru = str_replace(array(" ", ":"), "_", $bukti_transfer_baru);

    $tmp = $_FILES['bukti_transfer']['tmp_name'];

    if (move_uploaded_file($tmp, 'imgupload/' . $bukti_transfer_baru)) {
        $result = mysqli_query($conn, "INSERT INTO pembayaran (nama_pemesan,nohp_pemesan,bukti_transfer	) VALUES ('$nama_pemesan', '$nohp_pemesan', '$bukti_transfer_baru')");
        if ($result) {
            echo "<script>
                alert('Pembayaran berhasil direkam.');
            </script>";
        } else {
            echo "<script>
                alert('Pembayaran gagal direkam.');
            </script>";
        }
    } else {
        echo "Gagal mengunggah bukti transfer.";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_user.css">
    <title>Payment</title>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                </div>
                <ul class="menu">
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                    <button id="popupButton">Info Pemesanan Tiket</button>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero payment">
            <div class="container">
                <h2>Selamat pesanan Anda telah dibayar, admin akan mengkonfirmasi lagi via telepon
                    sekitar 1-2 jam setelah pembayaran, Terimakasih.
                </h2>
                <a href="dashboard_user.php" class="btn">Kembali ke dashboard</a>
            </div>
        </section>



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