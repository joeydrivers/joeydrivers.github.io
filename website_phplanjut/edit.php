<?php
require 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM travel where id=$id");
    $travel =[];
while($row=mysqli_fetch_array($result)){
    $travel[] = $row;
}
$travel = $travel[0];

if (isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['tujuan']) && isset($_POST['tanggal']) && isset($_FILES['gambar'])) {
    $id = $_POST["id"];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $tujuan = $_POST['tujuan'];
    $tanggal_post = $_POST['tanggal'];
    $gambar = $_FILES['gambar']['name'];
    date_default_timezone_set('Asia/Makassar');
    $timestamp = date("Y-m-d H-i-s");
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = $timestamp . $nama . $extensi;
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, "img_upload/" . $gambar_baru)) {
        $result = mysqli_query($conn, "UPDATE travel SET nama='$nama', alamat='$alamat', no_hp='$no_hp', tujuan='$tujuan', tanggal='$tanggal_post', gambar='$gambar_baru' WHERE id='$id'");

        if ($result) {
            echo "<script>
                alert('Data berhasil terubah');
            </script>";
        } else {
            echo "<script>
                alert('Data gagal terubah');
            </script>";
        }
    } else {
        echo "Gagal upload gambar";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BOOKING - PT. DriverMuda Pakinta'ki</title>
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
        <section class="hero">
            <section class="booking">
                <div class="container">
                    <h2>Formulir Pemesanan Tiket</h2>
                    <form method="post" action="proses_pemesanan_edit.php" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" id="id" name="id" value="<?=$id?>" required>

                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" value="<?=$travel['nama']?>" required>
                    
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" value="<?=$travel['alamat']?>" required></textarea>
                    
                        <label for="no_hp">Nomor Telepon:</label>
                        <input type="tel" id="no_hp" name="no_hp" value="<?=$travel['no_hp']?>" required>
                    
                        <label for="tujuan">Tujuan:</label>
                        <input type="text" id="tujuan" name="tujuan" value="<?=$travel['tujuan']?>" required>
                    
                        <label for="tanggal">Tanggal Keberangkatan:</label>
                        <input type="date" id="tanggal" name="tanggal" value="<?=$travel['tanggal']?>" required>

                        <label for="prodi">Identitas</label>
                        <input type="file" name="gambar" id="gambar" value="<?=$travel['gambar']?>" required>
                    
                        <button type="submit" id="submitButton">Submit</button>
                    </form>
                </div>
            </section>
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
