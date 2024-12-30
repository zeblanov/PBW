<?php
include "connection.php";

// Pastikan data POST ada
if (isset($_POST['email']) && isset($_POST['password'])) {
    $e = $_POST['email'];
    $p = $_POST['password'];

    // Query untuk memeriksa email, password, dan status aktif
    $dbh = $koneksi->query("SELECT * FROM akademik WHERE email = '".$e."' AND active = 1");

    // Cek jika pengguna ditemukan
    if ($dbh->rowCount() == 1) {
        $users = $dbh->fetch(PDO::FETCH_ASSOC);

        // Jika password cocok, menggunakan password_verify() jika password terenkripsi
        if (password_verify($p, $users['password'])) {
            // Mulai sesi dan set variabel sesi
            session_start();
            $_SESSION['username'] = $users['username'];
            $_SESSION['isLoggedIn'] = true;

            // Redirect ke halaman home.php
            header("Location: home.php");
            exit;  // Pastikan setelah redirect, tidak ada output lagi
        } else {
            echo "Email atau password salah";
        }
    } else {
        echo "User tidak ditemukan";
    }
} else {
    echo "Email atau password belum diisi.";
}
?>
