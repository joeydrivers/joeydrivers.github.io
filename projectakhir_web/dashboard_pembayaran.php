<?php
require "koneksi.php";

$result = mysqli_query($conn, "SELECT * from pembayaran");
$pembayaran = [];
while ($row = mysqli_fetch_array($result)) {
    $pembayaran[] = $row;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_user.css">
    <title>dashboard</title>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                </div>
                <ul class="menu">
                    <li><a href="dashboard_admin.php">KEMBALI</a></li>
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="dash-main">
            <h1>Data Pembayaran</h1>
            <h3>Waktu Menunjukan:<?php date_default_timezone_set('Asia/Makassar');echo date("l Y/m/d H:i:s");?></h3>
            <hr><br>
            <div class="leading-btn">
            </div><br>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembayar</th>
                        <th>No Telepon Pembayar</th>
                        <th>Bukti Transfer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($pembayaran as $pg) : ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $pg["nama_pemesan"] ?></td>
                            <td><?php echo $pg["nohp_pemesan"] ?></td>
                            <td><img src="imgupload/<?php echo $pg['bukti_transfer']; ?>" alt=" " width="50px" height="50px"></td>
                            <td class="action">
                                <a href="delete_pembayaran.php?id=<?= $pg['id'] ?>"><button>Delete</button></a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
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