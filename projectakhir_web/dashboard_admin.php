<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login_admin.php");
    exit();
}
require "koneksi.php";

$result = mysqli_query($conn, "SELECT * from penumpang1");
$penumpang1 = [];
while ($row = mysqli_fetch_array($result)) {
    $penumpang1[] = $row;
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
                    <li><a href="logout_admin.php">log out</a></li>
                    <li><a href="dashboard_pembayaran.php">Cek Pembayaran Tiket</a></li>
                    <button id="darkModeButton">Dark Mode</button>
                    <button id="lightModeButton">Light Mode</button>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="dash-main">
            <h1>Data Penumpang</h1>
            <h3>Waktu Menunjukan : <?php date_default_timezone_set('Asia/Makassar');echo date("l d/m/Y H:i:s");?></h3>
            <hr><br>
            <div class="leading-btn">
            </div><br>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>TUJUAN</th>
                        <th>Tanggal</th>
                        <th>Tipe Bus</th>
                        <th>Harga Tiket</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($penumpang1 as $pg) : ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $pg["nama"] ?></td>
                            <td><?php echo $pg["alamat"] ?></td>
                            <td><?php echo $pg["no_hp"] ?></td>
                            <td><?php echo $pg["tujuan"] ?></td>
                            <td><?php echo $pg["tanggal"] ?></td>
                            <td><?php echo $pg["tipe_bus"] ?></td>
                            <td><?php echo $pg["harga"] ?></td>
                            <td class="action">
                                <a href="edit.php?id=<?= $pg['id'] ?>"><button>Edit</button></a>
                                <a href="delete_penumpang1.php?id=<?= $pg['id'] ?>"><button>Delete</button></a>
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