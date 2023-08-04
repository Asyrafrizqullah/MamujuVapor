-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 03:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mamujuvapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `ID_Transaksi` int(11) NOT NULL,
  `ID_Produk` int(11) NOT NULL,
  `Jumlah_Produk` int(11) NOT NULL,
  `Harga_Produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_Kategori` int(11) NOT NULL,
  `Nama_Kategori` varchar(50) NOT NULL,
  `Deskripsi_Kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_Kategori`, `Nama_Kategori`, `Deskripsi_Kategori`) VALUES
(1, 'Mod', 'Kategori untuk perangkat mod vapor'),
(2, 'Pod', 'Kategori untuk perangkat pod vapor'),
(3, 'Liquid', 'Kategori untuk cairan penghasil asap'),
(4, 'Kawat', 'Kategori untuk kawat pembangun coil'),
(5, 'RDA/RTA', 'Kategori untuk perangkat RDA dan RTA'),
(6, 'Aksesori', 'Kategori untuk aksesori vapor'),
(7, 'Baterai', 'Kategori untuk baterai vapor'),
(8, 'Charger', 'Kategori untuk charger baterai'),
(9, 'Coil', 'Kategori untuk coil'),
(10, 'Tank', 'Kategori untuk tank vapor');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `Nama_Pelanggan` varchar(50) NOT NULL,
  `Alamat_Pelanggan` varchar(255) NOT NULL,
  `Nomor_Telepon_Pelanggan` varchar(20) NOT NULL,
  `Email_Pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat_Pelanggan`, `Nomor_Telepon_Pelanggan`, `Email_Pelanggan`) VALUES
(1, 'John Doe', 'Jl. Pahlawan No. 123', '081234567890', 'johndoe@gmail.com'),
(2, 'Jane Doe', 'Jl. Merdeka No. 456', '082345678901', 'janedoe@yahoo.com'),
(3, 'Peter Parker', 'Jl. Spiderman No. 789', '083456789012', 'peterparker@gmail.com'),
(4, 'Mary Jane', 'Jl. Gwen Stacy No. 234', '084567890123', 'maryjane@yahoo.com'),
(5, 'Bruce Wayne', 'Jl. Wayne Manor No. 456', '085678901234', 'brucewayne@gmail.com'),
(6, 'Clark Kent', 'Jl. Daily Planet No. 678', '086789012345', 'clarkkent@yahoo.com'),
(7, 'Barry Allen', 'Jl. Central City No. 901', '087890123456', 'barryallen@gmail.com'),
(8, 'Diana Prince', 'Jl. Themyscira No. 234', '088901234567', 'dianaprince@yahoo.com'),
(9, 'Arthur Curry', 'Jl. Atlantis No. 567', '089012345678', 'arthurcurry@gmail.com'),
(10, 'Tony Stark', 'Jl. Stark Tower No. 890', '081234567890', 'tonystark@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(50) NOT NULL,
  `Deskripsi_Produk` text NOT NULL,
  `Harga_Produk` int(11) NOT NULL,
  `Stok_Produk` int(11) NOT NULL,
  `Gambar_Produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Deskripsi_Produk`, `Harga_Produk`, `Stok_Produk`, `Gambar_Produk`) VALUES
(1, 'Geekvape Aegis Legend Limited Edition', 'Mod vapor dengan desain tahan air, debu, dan guncangan', 900000, 10, 'aegis.jpg'),
(2, 'Vaporesso Target PM80 SE', 'Pod vapor dengan output maksimal 80W', 500000, 15, 'pm80se.jpg'),
(3, 'Smok Nord 4', 'Pod vapor dengan output maksimal 80W dan kapasitas baterai 2000mAh', 650000, 20, 'nord4.jpg'),
(4, 'Geekvape Zeus X RTA', 'Alat vapor dengan sistem pengisian atas dan kapasitas e-juice 4,5ml', 750000, 5, 'zeusx.jpg'),
(5, 'Vandy Vape Kylin M', 'Alat vapor RDA dengan desain mesh coil dan kapasitas e-juice 4,5ml', 850000, 7, 'kylinm.jpg'),
(6, 'Coilology Performance Coil', 'Kawat untuk membuat coil vapor dengan bahan SS316L', 100000, 50, 'coilology.jpg'),
(7, 'Nasty Juice Slow Blow', 'Liquid e-juice dengan rasa jeruk dan lemonade', 80000, 100, 'slowblow.jpg'),
(8, 'Yummy Vape Blue Raspberry', 'Liquid e-juice dengan rasa blue raspberry dan aniseed', 90000, 80, 'blueraspberry.jpg'),
(9, 'Vampire Vape Heisenberg', 'Liquid e-juice dengan rasa buah-buahan dan mint', 85000, 90, 'heisenberg.jpg'),
(10, 'Moo Shake Banana Milkshake', 'Liquid e-juice dengan rasa banana milkshake', 75000, 120, 'bananamilkshake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `Tanggal_Transaksi` date NOT NULL,
  `Total_Bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `email`, `password`, `phone`, `alamat`) VALUES
(1, 'Asyraf', 'asyrafrizqullah01@gmail.com', 'Asyraf0611', '082296420613', 'Jl.urip sumoharjo No.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`,`ID_Produk`),
  ADD KEY `ID_Produk` (`ID_Produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_Kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `ID_Pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_Produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`ID_Transaksi`) REFERENCES `transaksi` (`ID_Transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`ID_Produk`) REFERENCES `produk` (`ID_Produk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
