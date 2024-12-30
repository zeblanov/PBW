<?php
include "connection.php";
session_start();

if(!isset($_SESSION['isLoggedIn']))
{
    header("Location: login.php"); 
}

$judul = $_POST['judul'];
$tahun = $_POST['tahun'];


$dbh=$koneksi->prepare("INSERT INTO buku (judul,tahun,created_by,created_at) VALUES (?,?,?,?)");
$dbh->execute([$judul,$tahun,$_SESSION['username'],date("y-m-d H:i:s")]);

header("Location: home.php");