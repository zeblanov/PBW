<?php
include "connection.php";
session_start();

if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: login.php");
    exit();
}

$id = $_POST['id'];
$tahun = $_POST['tahun'];
$judul = $_POST['judul'];

// Pastikan koneksi database (PDO) aktif
try {
    // Siapkan query SQL menggunakan prepared statement
    $query = "UPDATE buku SET judul = ?, tahun = ?, updated_by = ?, updated_at = ? WHERE id = ?";
    $stmt = $koneksi->prepare($query);

    // Eksekusi query dengan parameter
    $stmt->execute([
        $judul,
        $tahun,
        $_SESSION['username'], // Ambil username dari session
        date("Y-m-d H:i:s"),   // Waktu sekarang
        $id
    ]);

    // Redirect ke halaman home3.php
    header("Location: home.php");
    exit();

} catch (PDOException $e) {
    // Tangani error jika ada
    echo "Error: " . $e->getMessage();
    exit();
}
?>