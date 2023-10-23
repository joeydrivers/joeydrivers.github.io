<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from travel");
$travel = [];
while ($row = mysqli_fetch_array($result)) {
    $travel[] = $row;
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
        <section class="dash-main">
            <h1>Data Penumpang</h1>
            <hr><br>
            <div class="leading-btn">
                <a href="booking.html"> <button class="add-btn">Tambah</button></a>
            </div><br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>TUJUAN</th>
                        <th>Tanggal</th>
                        <th>Identitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($travel as $pg) : ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $pg["nama"] ?></td>
                            <td><?php echo $pg["alamat"] ?></td>
                            <td><?php echo $pg["no_hp"] ?></td>
                            <td><?php echo $pg["tujuan"] ?></td>
                            <td><?php echo $pg["tanggal"] ?></td>
                            <td><img src="img_upload/<?php echo $pg['gambar']; ?>" alt=" " width="50px" height="50px"></td>
                            <td class="action">
                                <a href="edit.php?id=<?= $pg['id'] ?>"><button>Edit</button></a>
                                <a href="delete.php?id=<?= $pg['id'] ?>"><button>Delete</button></a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
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