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
                <h2>Formulir Pembayaran Tiket</h2>
                <form method="post" action="koreksi_pembayaran.php" enctype="multipart/form-data">
                    <label for="nama">Nama Pemesan:</label>
                    <input type="text" id="nama_pemesan" name="nama_pemesan" required>

                    <label for="no_hp">Nomor HP Pemesan:</label>
                    <input type="tel" id="nohp_pemesan" name="nohp_pemesan" required>

                    <label for="bukti_transfer">Bukti Transfer (Foto):</label>
                    <input type="file" id="bukti_transfer" name="bukti_transfer" required>

                    <button type="submit" id="submitButton">Submit</button>
                </form>
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