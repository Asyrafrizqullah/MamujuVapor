<?php
require('database/connection.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="product-image.jpg" class="img-fluid" alt="Produk">
            </div>
            <div class="col-md-6">
                <h1>Nama Produk</h1>
                <p>Deskripsi singkat tentang produk.</p>
                <h2>Harga: Rp 200,000</h2>
                <a href="keranjang.php" class="btn btn-lg btn-warning shadow-sm my-4">Tambahkan Keranjang</a>

            </div>
        </div>
        <div class="mt-4">
            <h3>Spesifikasi</h3>
            <ul>
                <li>Spesifikasi 1: Nilai 1</li>
                <li>Spesifikasi 2: Nilai 2</li>
                <!-- Tambahkan spesifikasi lainnya di sini -->
            </ul>
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