<?php
require 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE from penumpang1 WHERE id='$id'");
if ($result) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'dashboard_admin.php'
    </script>";
} else {
    echo "<script>
        alert('data gagal dihapus');
        document.location.href = 'dashboard_admin.php'
    </script>";
}
?>