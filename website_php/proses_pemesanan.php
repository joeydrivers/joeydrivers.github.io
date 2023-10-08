<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $tujuan = $_POST["tujuan"];
    $tanggal = $_POST["tanggal"];
    header("Location: halaman_terimakasih.html");
}
?>
