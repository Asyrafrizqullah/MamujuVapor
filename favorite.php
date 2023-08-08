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
    <title>Favorit</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <a class="nav-link" href="keranjang.php">Keranjang</a>
                <a class="nav-link active" href="favorite.php">Favorit</a>
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
        <h1>Favorit</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image1.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Produk 1</h5>
                        <p class="card-text">Deskripsi singkat tentang produk favorit Anda.</p>
                        <a href="detail-produk.php" class="btn btn-lg btn-warning shadow-sm my-4">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image2.jpg" class="card-img-top" alt="Produk 2">
                    <div class="card-body">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text">Deskripsi singkat tentang produk favorit Anda.</p>
                        <a href="detail-produk.php" class="btn btn-lg btn-warning shadow-sm my-4">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
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