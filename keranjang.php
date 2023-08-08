<?php

require_once('database/connection.php');

session_start();

$nama = '';
$email = '';
if (isset($_SESSION['logged_in'])) {
    $nama = $_SESSION['nama'];
    $email = $_SESSION['email'];
}

$hotel = mysqli_query($conn, "SELECT GROUP_CONCAT(imgurl.imageUrl) as img, hotel.*, (SELECT MIN(kamar.hargaKamar) FROM kamar WHERE kamar.hotelId=hotel.idHotel) as harga FROM imgUrl JOIN hotel ON imgUrl.hotelId=hotel.idHotel GROUP BY hotel.idHotel ORDER BY hotel.ratingHotel DESC LIMIT 3");

while ($data = mysqli_fetch_array($hotel)) {
    $dataHotel[] = $data;
}
$result = mysqli_query($conn, "SELECT diskon.*,kamar.* FROM diskon JOIN kamar on diskon.idKamar = kamar.idKamar ") or die(mysqli_error($conn));
while ($data = mysqli_fetch_array($result)) {
    $rows[] = $data;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="./Assets/Images/logo.png" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./Assets/css/details.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                    <a class="nav-link" href="product.php"> Product </a>
                    <a class="nav-link active" href="keranjang.php">Keranjang</a>
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
        <div class="container mt-5">
            <h1>Keranjang Belanja</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Produk A</td>
                        <td>Rp 100,000</td>
                        <td>2</td>
                        <td>Rp 200,000</td>
                    </tr>
                    <tr>
                        <td>Produk B</td>
                        <td>Rp 150,000</td>
                        <td>1</td>
                        <td>Rp 150,000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-right">Total</th>
                        <th>Rp 350,000</th>
                    </tr>
                </tfoot>
            </table>
            <div class="text-center">
                <a href="checkout.php" class="btn btn-lg btn-warning shadow-sm my-4">Checkout</a>
            </div>
        </div>

        <!-- Include Bootstrap JS (Popper.js and jQuery required for some components to work) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <?php
        require_once('footer.php');
        ?>
    </body>

    </html>