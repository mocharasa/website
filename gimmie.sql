-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 02:06 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gimmie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `tgl`, `nama`, `pesan`) VALUES
(3, '2019-02-11', 'fsfsdfsd', '<p>Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda Silahkan sampaikan kritik dan saran anda</p>\r\n'),
(4, '2019-02-11', 'Diar', '<p>Gimmie drink mantap.</p>\r\n\r\n<p>rasanya enak, murah harganya</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `no_telp`, `no_wa`, `alamat`, `pin`, `fb`, `ig`) VALUES
(1, '087778889900', '087778889900', '<p>Kp. Cimaung RT 010 RW 010<br />\r\nKec. Purwakarta<br />\r\nKab. Purwakarta</p>\r\n', '1234abcd', 'http://facebook.com/gimmiedrink', '@gimmiedrink');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `rasa` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `rasa`, `jenis`, `harga`, `gambar`) VALUES
(2, 'Gimmie Green Thai Tea Chocho Topping', 'Thai Tea', 'Milk Tea', 11000, '11022019132254line2.png'),
(3, 'Gimmie Red Velvet Chocho Topping', 'Red Velvet', 'Milk Shake', 11000, '11022019134520Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visimisi` text NOT NULL,
  `struktur` text NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `sejarah`, `visimisi`, `struktur`, `tentang`) VALUES
(1, '<p>gimmie drink didirikan oleh egi ramdhani dan kawan2</p>\r\n', '<p>Visi : Menciptakan produk berkualitas hieginies yang sehat dan ekonomis</p>\r\n\r\n<p>Misi :</p>\r\n\r\n<ol>\r\n	<li>Menyediakan minuman bergengsi bagi mahasiswa kere</li>\r\n	<li>Memfasilitasi keinginan malas belanja mahasiswa agar dapat COD</li>\r\n</ol>\r\n', '<p>Struktur Organisasi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Owner : Egi</p>\r\n\r\n<p>CEO : Thami</p>\r\n\r\n<p>Marketing : Diar</p>\r\n', '<p>Gimmie Dink merupakan usaha mikro yang bergerak dibidang industri minuman.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
