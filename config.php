<?php
$servername = "localhost";
$username = "";
$password = ""; // Tetap kosong jika MySQL root tidak memiliki password
$dbname = "login_system";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
    echo "Koneksi berhasil!";
}
?>
