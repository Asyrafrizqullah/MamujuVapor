<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamuju Vapor</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../css/details.css">

</head>
<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="../../utama/index.php" class="logo">Mamuju Vapor</a>

    <nav class="navbar">
        <a href="../../utama/index.php">home</a>
        <a href="#products">products</a>
        <a href="#featured">featured</a>
        <a href="#review">review</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="../login/index.php" class="fas fa-user"></a>
    </div>

</header>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-primary" onclick="openPopup()">Buka Pop Up</button>
            </div>
        </div>
    </div>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup" id="popup">
            <div class="popup-header">
                <h4>Transaksi Berhasil</h4>
                <button class="close-btn" onclick="closePopup()">&times;</button>
            </div>
            <div class="popup-body">
                <p>Terima kasih telah melakukan transaksi. Berikut adalah detail transaksi Anda:</p>
                <ul>
                    <li>Nama Barang: Sepatu</li>
                    <li>Jumlah Barang: 2</li>
                    <li>Total Harga: Rp. 500.000,-</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>