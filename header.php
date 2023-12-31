<?php

require_once('database/connection.php');

session_start();

$nama = '';
$email = '';
if (isset($_SESSION['logged_in'])) {
  $nama = $_SESSION['nama'];
  $email = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./Assets/Images/logo.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./Assets/css/details.css" />
  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a href="index.php" class="logo"><img src="#" alt=""></a>
      <span class="brand-text-icon">Mamuju Vapor</span>
      </a>
      <nav class="navbar-nav navbar-center">
        <a class="nav-link" href="index.php"> Home </a>
        <a class="nav-link" href="history.php"> History </a>
        <a class="nav-link active" href="product.php"> Product </a>
        <a class="nav-link" href="keranjang.php">Keranjang</a>
        <a class="nav-link" href="favorite.php">Favorit</a>
      </nav>
      <nav class="navbar navbar-nav" style="position: absolute; top: 0; right: 0">
        <?php if (!isset($_SESSION['logged_in'])) : ?>
          <a class="nav-link" href="login.php"> Login </a>
          <form action="register.php">
            <button class="btn btn-warning nav-link">Sign Up</button>
          </form>
        <?php else : ?>
          <a class="nav-link"> <?= $nama ?> </a>
          <form action="logout.php">
            <button class="btn btn-warning nav-link">Logout</button>
          </form>
        <?php endif; ?>
      </nav>
    </nav>
  </header>