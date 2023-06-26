-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 04:08 AM
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
-- Database: `itapurnama`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Polisi Tangkap 4 Pemuda Pelaku Tawuran Pakai Air Softgun di Jakut', 'Kanit Reskrim Polsek Tanjung Priok AKP Alex Candra mengatakan, pihaknya berhasil mengamankan empat orang tersebut di masing-masing kediamannya. Dan salah satunya merupakan ketua geng dari kelompok yang terlibat tawuran.', '1.jpg'),
(3, '3.000 Penari Kecak Tampil Menggelegar di Puncak Bulan Bung Karno 2023', 'Mulanya, ribuan wanita yang tampak mengenakan baju merah dengan angka 3 dipunggung, serta riasan khas Bali berlari masuk dalam Stadion GBK. Mereka langsung kompak membuat formasi awal.', '7.jpg'),
(4, 'Pengunjung Mabuk Ganja Rusak Pagar Kandang, Sembilan Monyet Berbahaya Kabur dari Kebun Binatang', 'Ada sembilan kera jambul yang melarikan diri dari kebun binatang di Děčín, Czechia tanggal 12 Juni. Namun media Mirror yang dikutip Sabtu (24/6/2023) menyebut bahwa tujuh di antaranya telah ditangkap kembali, sementara dua di antaranya masih kabur.', '3.jpg'),
(5, 'First Facebook, now TikTok: how Geopop built a 7 million-strong community with science explainers', 'This interview was first published by Italian journalist Francesco Zaffarano in his biweekly Substack newsletter, Mapping journalism on social platforms. The original is available at this link. Sign up for the newsletter here. \r\n\r\nGeopop is an Italian social media-born cross-platform outlet that produces video explainers about science and its relationship with our daily life. The project was started as a hobby by geologist Andrea Moccia in 2018 and expanded into a joint venture with publisher Ciaopeople Media Group in 2020. Geopop has grown quickly since then, and now has 1.6 million followers on TikTok.', 'andrea_moccia_1.jpg'),
(6, 'Iron Man', 'Iron Man is a superhero appearing in American comic books published by Marvel Comics. Co-created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby, the character first appeared in Tales of Suspense #39 (cover dated March 1963), and received ', 'iron-man-14.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
