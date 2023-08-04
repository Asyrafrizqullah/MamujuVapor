<?php
session_start();
require_once('../database/connection.php');

$nama = 'nama';
$email = 'email';

if (isset($_SESSION['logged_in'])) {
    $nama = $_SESSION['nama'];
    $email = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mamuju Vapor</title>
    <link rel=" stylesheet" href="../css/details.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header>
        <a href="./index.php" class="logo"><img src="../../Asset/Images/logo.jpg" alt=""></a>

        <ul class="navbar">
            <li><a href="#home">home</a></li>
            <li><a href="#">products</a></li>
            <li><a href="#">page</a></li>
        </ul>
        <div class="nav-icon">
            <a href=""><i class="bx bx-search"></i></a>
            <a href=""><i class="bx bx-cart"></i></a>
            <a href=""><i class="bx bx-heart"></i></a>


            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
                <div class="profile-menu">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle">
                            <img src="../../Asset/Images/logo.jpg" alt="User Avatar" class="rounded-circle">
                            <span class="user-name"><?php echo $_SESSION['nama']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="./profile/profile.php">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="./login/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>

            <?php else : ?>
                <div class="profile-menu">
                    <div class="dropdown">
                        <a href="./login/login.php" class="dropdown-toggle">
                            <span class="user-name bx bx-user"></span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </header>