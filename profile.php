<!-- <?php
session_start();
include "connection.php";

// Cek apakah pengguna sudah login
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php"); // Redirect ke login jika tidak login
    exit();
}

// Ambil data pengguna dari sesi
$username = $_SESSION['username'];
$email = ''; // Variabel untuk email
$password = ''; // Variabel untuk password (hanya akan diupdate)
$updateSuccess = false;
$errorMessage = '';

$user = [];

// Ambil data pengguna dari database
$dbh = $koneksi->prepare("SELECT * FROM users WHERE username = :username");
$dbh->bindParam(':username', $username);
$dbh->execute();

if ($dbh->rowCount() == 1) {
    $user = $dbh->fetch(PDO::FETCH_ASSOC);
    $email = $user['email'];  // Ambil email dari database
} else {
    $errorMessage = "Pengguna tidak ditemukan.";
    $user = null;
}

// Proses update data profile
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Cek apakah password diubah dan apakah password konfirmasi sama
    if (!empty($newPassword) && $newPassword !== $confirmPassword) {
        $errorMessage = "Password dan konfirmasi password tidak cocok.";
    } else {
        // Jika password diubah, hash password baru
        $hashedPassword = !empty($newPassword) ? password_hash($newPassword, PASSWORD_DEFAULT) : $user['password'];

        // Update ke database
        $updateQuery = $koneksi->prepare("UPDATE users SET username = :username, email = :email, password = :password WHERE username = :currentUsername");
        $updateQuery->bindParam(':username', $newUsername);
        $updateQuery->bindParam(':email', $newEmail);
        $updateQuery->bindParam(':password', $hashedPassword);
        $updateQuery->bindParam(':currentUsername', $username);

        if ($updateQuery->execute()) {
            $_SESSION['username'] = $newUsername;  // Update username session
            $updateSuccess = true;
        } else {
            $errorMessage = "Terjadi kesalahan saat memperbarui data.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Edit Data</title>
    <style>
   

/* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #fce4ec; /* Latar belakang pink muda */
    margin: 0;
    padding: 0;
}

.container {
    width: 60%;
    margin: 30px auto;
    background-color: #f8bbd0; /* Latar belakang kontainer pink lembut */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 8px;
}

header {
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    font-size: 24px;
    color: #880e4f; /* Warna teks pink tua */
}

nav {
    background-color: #ec407a; /* Pink cerah untuk navigasi */
    border-radius: 8px;
    padding: 10px 0;
    margin-bottom: 20px;
}

nav ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: #ffffff; /* Warna teks putih */
    text-decoration: none;
    font-size: 18px;
}

nav ul li a:hover {
    text-decoration: underline;
}

section {
    text-align: left;
}

form {
    max-width: 500px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 16px;
    color: #880e4f; /* Warna teks pink tua */
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    margin-top: 5px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    background-color: #f48fb1; /* Pink terang untuk tombol */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #f06292; /* Pink lebih gelap saat hover */
}

.success {
    color: green;
    font-weight: bold;
}

.error {
    color: red;
    font-weight: bold;
}
</style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Profil Pengguna</h1>
        </header>

        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

        <section>
            <?php if ($updateSuccess): ?>
                <p class="success">Data profile berhasil diperbarui!</p>
            <?php elseif ($errorMessage): ?>
                <p class="error"><?php echo $errorMessage; ?></p>
            <?php endif; ?>

            <form action="profile.php" method="POST">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" 
            value="<?php echo htmlspecialchars($user['username'] ?? ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" 
            value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password (Kosongkan jika tidak ingin mengubah):</label>
        <input type="password" name="password">
    </div>
    <div class="form-group">
        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" name="confirm_password">
    </div>
    <button type="submit">Update Profil</button>
</form>

        </section>

    </div>

</body>
</html> -->
