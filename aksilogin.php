<?php
include "connection.php";
$e = $_POST['email'];
$p = $_POST['password'];

// Hashing the password with MD5 (not recommended for security)
$hashedPassword = md5($p);

// Query database with hashed password
$dbh = $koneksi->query("SELECT * FROM users WHERE email = '".$e."' AND password= '".$hashedPassword."'");

if ($dbh->rowCount() == 1) { 
    $users = $dbh->fetch(PDO::FETCH_ASSOC);
    
    // Now, you can verify the MD5 hash if you want (although MD5 is not recommended for password hashing)
    if ($hashedPassword == $users['password']) {
        session_start();
        $_SESSION['username'] = $users['username'];
        $_SESSION['isLoggedIn'] = true;
        header("Location: home.php");
        exit();
    } else {
        echo "Email atau password salah";
    }
} else {
    echo "User tidak ditemukan";
}
?>
