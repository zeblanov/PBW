<?php
session_start();
if(isset($_SESSION['isLoggedIn']))
{
  if($_SESSION['isLoggedIn'])
  {
    header("Location: home.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<style>
/* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #fff0e5; /* Soft yellow background */
    margin: 0;
    padding: 0;
}

.card {
    background-color: #ffefd5; /* Light yellow card background */
    border-radius: 8px;
}

h3 {
    color: #e69900; /* Dark orange for headings */
}

.form-label {
    color: #e69900; /* Dark orange for labels */
}

.btn-primary {
    background-color: #ffcc00; /* Bright yellow for buttons */
    border-color: #e69900;
}

.btn-primary:hover {
    background-color: #e69900; /* Darker orange on hover */
    border-color: #b46500;
}

.form-check-label {
    color: #e69900; /* Dark orange for checkbox labels */
}
</style>


<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="card shadow p-4">
        <h3 class="text-center mb-4">Login</h3>
        <form action="aksilogin.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>





























<!-- <style>
        /* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #ffe4e1; /* Latar belakang pink muda */
    margin: 0;
    padding: 0;
}

.card {
    background-color: #ffccd5; /* Latar belakang card pink lembut */
    border-radius: 8px;
}

h3 {
    color: #c71585; /* Pink tua untuk judul */
}

.form-label {
    color: #c71585; /* Pink tua untuk label */
}

.btn-primary {
    background-color: #ff69b4; /* Pink cerah untuk tombol */
    border-color: #d43f8d;
}

.btn-primary:hover {
    background-color: #d43f8d; /* Pink lebih gelap saat hover */
    border-color: #b03060;
}

.form-check-label {
    color: #c71585; /* Pink tua untuk label checkbox */
}
</style>
 -->
</html>



