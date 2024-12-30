<?php
session_start();
if(!$_SESSION['isLoggedIn'])
{
    header("Location: login.php"); 
}
echo "Selamat datang, ",$_SESSION
['username'],"-",$_SESSION['username'];

include "connection.php";
?>
<a href="logout.php">Logout</a>

<?php
    $dbh = $koneksi->query("SELECT * FROM buku");
    $bukus = $dbh->fetch(PDO::FETCH_ASSOC);
    ?>

<a href="input.php">Input</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    <?php
    while($bukus = $dbh->fetch(PDO::FETCH_ASSOC))
    {
        $no = 1;

    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php echo $bukus['judul']?></td>
        <td><?php echo $bukus['tahun']?></td>
        <td>Edit | Hapus</td>
    </tr>
    <?php
    $no++;
    }
?>

</table>