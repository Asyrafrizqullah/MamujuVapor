<?php
require('database/connection.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Transaksi</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Status Transaksi</h1>
        <div class="alert alert-success" role="alert">
            Transaksi Anda telah berhasil diproses.
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Detail Transaksi</h2>
                <ul class="list-group">
                    <li class="list-group-item">Nomor Transaksi: 12345</li>
                    <li class="list-group-item">Total Pembayaran: Rp 250,000</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Detail Pengiriman</h2>
                <ul class="list-group">
                    <li class="list-group-item">Nama Penerima: John Doe</li>
                    <li class="list-group-item">Alamat Pengiriman: Jl. Contoh No. 123</li>
                </ul>
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