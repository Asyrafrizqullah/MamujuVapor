<?php
require('database/connection.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Checkout</h1>
        <div class="row">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Pengiriman</label>
                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan Alamat Pengiriman"></textarea>
                    </div>
                    <a href="pembayaran.php" class="btn btn-lg btn-warning shadow-sm my-4">Lanjutkan Pembayaran</a>
                </form>
            </div>
            <div class="col-md-4">
                <h2>Ringkasan Belanja</h2>
                <ul class="list-group">
                    <li class="list-group-item">Produk 1 - Rp 100,000</li>
                    <li class="list-group-item">Produk 2 - Rp 150,000</li>
                </ul>
                <h4>Total: Rp 250,000</h4>
            </div>
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