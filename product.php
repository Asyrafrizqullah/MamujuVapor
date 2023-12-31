<?php
require_once('header.php');

$hotel = mysqli_query($conn, "SELECT GROUP_CONCAT(imgurl.imageUrl) as img, hotel.*, (SELECT MIN(kamar.hargaKamar) FROM kamar WHERE kamar.hotelId=hotel.idHotel) as harga FROM imgUrl JOIN hotel ON imgUrl.hotelId=hotel.idHotel GROUP BY hotel.idHotel ORDER BY hotel.ratingHotel DESC");

$rows = [];


if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    // die($keyword);
    $hotel = mysqli_query($conn, "SELECT GROUP_CONCAT(imgurl.imageUrl) as img, hotel.*, (SELECT MIN(kamar.hargaKamar) FROM kamar WHERE kamar.hotelId=hotel.idHotel) as harga FROM imgUrl JOIN hotel ON imgUrl.hotelId=hotel.idHotel WHERE hotel.namaHotel LIKE '%$keyword%' OR hotel.kotaHotel LIKE '%$keyword%'  GROUP BY hotel.idHotel ORDER BY hotel.ratingHotel DESC");
}
while ($data = mysqli_fetch_array($hotel)) {
    $rows[] = $data;
}
?>
<section class="container search-section">
    <form action="" method="POST">
        <div class="row justify-content-center">
            <div class="col-6">
                <input type="text" id="" class="form-control search-bar" placeholder="Cari Produk" name="keyword">
            </div>
            <div class="col-2">
                <button class="btn btn-warning search-button" type="submit" name="search">
                    Cari
                </button>
            </div>
        </div>
    </form>
</section>
<main class="container my-5 daftar-hotel">
    <div class="row">

        <?php
        if (count($rows) > 0) {
            foreach ($rows as $hotel) {
                $image = explode(",", $hotel['img']);
        ?>
                <div class="col-4">
                    <div class="card-hotel">
                        <div class="rating"> ⭐ <?= $hotel['ratingHotel'] ?></div>
                        <div class="price">Rp. <?= (empty($hotel['harga'])) ? "100000" : $hotel['harga'] ?></div>
                        <a href="detail-produk.php?id=<?= $hotel['idHotel'] ?>">
                            <img src="Assets/Images/hotel/<?= $image[0] ?>" alt="">
                            <div class="layer-shadow">
                                <h5><?= $hotel['namaHotel'] ?></h5>
                                <h7><?= $hotel['kotaHotel'] ?></h7>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="row">
                <div class="col-12">
                    <p class="text-center">Pencarian Keyword <?= $keyword ?> tidak ditemukan</p>
                </div>
            </div>
        <?php } ?>

    </div>
</main>
<?php
require_once('footer.php');
?>