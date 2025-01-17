<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = $_POST["id"];

    mysqli_query($mysqli, "SET FOREIGN_KEY_CHECKS = 0");

    // Query untuk melakukan update data obat
    $query = "DELETE FROM pasien WHERE id = $id";

    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
        mysqli_query($mysqli, "SET FOREIGN_KEY_CHECKS = 1");
        // Jika berhasil, redirect kembali ke halaman index atau sesuaikan dengan kebutuhan Anda
        echo '<script>';
        echo 'alert("Data pasien berhasil dihapus!");';
        echo 'window.location.href = "../../pasienAdmin.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
    mysqli_query($mysqli, "SET FOREIGN_KEY_CHECKS = 1");
}

// Tutup koneksi
mysqli_close($mysqli);
?>