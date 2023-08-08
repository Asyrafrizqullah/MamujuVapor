<?php
require('database/connection.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Pembayaran</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Detail Pembayaran</h2>
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Pemilik Kartu</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pemilik Kartu">
                    </div>
                    <div class="form-group">
                        <label for="nomor_kartu">Nomor Kartu</label>
                        <input type="text" class="form-control" id="nomor_kartu" placeholder="Masukkan Nomor Kartu">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_exp">Tanggal Kadaluarsa</label>
                        <input type="text" class="form-control" id="tanggal_exp" placeholder="MM/YY">
                    </div>
                    <a href="status.php" class="btn btn-lg btn-warning shadow-sm my-4">bayar</a>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Ringkasan Pembayaran</h2>
                <ul class="list-group">
                    <!-- List items here -->
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