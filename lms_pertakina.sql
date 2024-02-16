-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 08:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_pertakina`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'adminPertakina', 'pertakinaBlitar123');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id_superAdmin` int NOT NULL,
  `username_super` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password_super` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id_superAdmin`, `username_super`, `password_super`) VALUES
(0, 'superAdminPertakina', 'pertakinaBlitar12');

-- --------------------------------------------------------

--
-- Table structure for table `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int NOT NULL,
  `judul_vidio` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `img_thumbnail` blob,
  `url_vidio` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `durasi_vidio` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_vidio` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `sinopsis_vidio` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori_video` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `judul_vidio`, `img_thumbnail`, `url_vidio`, `durasi_vidio`, `deskripsi_vidio`, `sinopsis_vidio`, `kategori_video`) VALUES
(1, 'Grammar untuk pemula', 0x6769726c5f7368656c6c5f686172655f3136373332305f3139323078313038302e6a7067, 'https://www.youtube.com/embed/-aphfHDiehs', '17.35 menit', 'Brikut adalah pengenalan mengenai apa itu Part of Speech. Part of Speech merupakan materi yang paling dasar (basic) yang harus diketahui dalam belajar Grammar (Bahasa Inggris)', 'Brikut adalah pengenalan mengenai apa itu Part of Speech. Part of Speech merupakan materi yang paling dasar (basic) yang harus diketahui dalam belajar Grammar (Bahasa Inggris)', 'Bahasa Inggris'),
(2, 'HIRAGANA', '', 'https://www.youtube.com/embed/icK6kVTegDA?si=8A5y5mLsxVdVrui9', '38.09 menit', 'HIRAGANA adalah huruf utama yang paling banyak digunakan dalam Bahasa Jepang. Buat Kalian Pemula yg baru mulai Belajar Bahasa Jepang, ini adalah Video Pertama yg Harus Kalian Tonton.', 'HIRAGANA adalah huruf utama yang paling banyak digunakan dalam Bahasa Jepang. Buat Kalian Pemula yg baru mulai Belajar Bahasa Jepang, ini adalah Video Pertama yg Harus Kalian Tonton.', 'Bahasa Jepang'),
(3, 'Belajar Bahasa Korea: Perkenalan Diri (자기 소개)', '', 'https://www.youtube.com/embed/Yy1ps5b_eN0?si=3QGDfDlXRtYY_-YL', '05.33 menit', 'Pada episode kali ini kita akan belajar cara memperkenalkan diri menggunakan bahasa Korea. Tonton videonya sampai selesai supaya kamu paham dengan penjelasan yang disampaikan.', '안녕하세요. 만나서 반갑습니다. 저는 빌 스미스라고 해요.\r\n[Annyeong-haseyo. Mannaseo ban-gapsseumnida. Jeoneun Bill Smith-rago haeyo.] Apa kabar. Gembira sekali bertemu dengan anda. Saya Bill Smith.\r\n저는 IBM 서울 지사에서 근무하고 있어요.\r\n[Jeoneun IBM Seoul jisa-esoe geunmuhago isseoyo.] Sedang bekerja di kantor perwakilan IBM Seoul.\r\n저는 미국 시카고에서 왔어요.\r\n[ Jeoneun miguk sikago-eseo wasseoyo.] Saya datang dari Chicago, Amerika Serikat.\r\n한국에 온 지 일년 됐어요.\r\n[ Han-guge on ji ilnyeon dwaesseoyo.] Sudah satu tahun di Korea.\r\n아내와 두 아이가 있어요.\r\n', 'Bahasa Korea'),
(5, 'Grammar untuk pemulafd yhucxfvgxc ', '', 'https://www.youtube.com/embed/Y_AuEwIwm8E', '17.35 menitfdf', 'ytytytyty~ music\r\n\r\nSetiap Kali kita bertemu\r\n\r\nAku lihat kamu sayang padaku\r\n\r\nKu tahu kamu suka padaku\r\n\r\nTapi kamu ragu bilang begitu\r\n\r\n\r\npre reff\r\n\r\n\r\nTerlalu lama\r\n', '~ music\r\n\r\nSetiap Kali kita bertemu\r\n\r\nAku lihat kamu sayang padaku\r\n\r\nKu tahu kamu suka padaku\r\n\r\nTapi kamu ragu bilang begitu\r\n\r\n\r\npre reff\r\n\r\n\r\nTerlalu lama\r\n', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id_superAdmin`),
  ADD UNIQUE KEY `username_super` (`username_super`);

--
-- Indexes for table `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
