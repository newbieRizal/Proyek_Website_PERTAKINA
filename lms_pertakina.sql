-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2024 pada 10.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'adminPertakina', 'pertakinaBlitar123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(50) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Bahasa Inggris'),
(2, 'Bahasa Jepang'),
(3, 'Bahasa Korea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_admin`
--

CREATE TABLE `super_admin` (
  `id_superAdmin` int(20) NOT NULL,
  `username_super` varchar(20) NOT NULL,
  `password_super` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `super_admin`
--

INSERT INTO `super_admin` (`id_superAdmin`, `username_super`, `password_super`) VALUES
(0, 'superAdminPertakina', 'pertakinaBlitar12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(50) NOT NULL,
  `judul_vidio` varchar(50) NOT NULL,
  `img_vidio` varchar(100) NOT NULL,
  `url_vidio` varchar(200) NOT NULL,
  `durasi_vidio` varchar(20) NOT NULL,
  `deskripsi_vidio` varchar(1000) NOT NULL,
  `sinopsis_vidio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `judul_vidio`, `img_vidio`, `url_vidio`, `durasi_vidio`, `deskripsi_vidio`, `sinopsis_vidio`) VALUES
(1, 'Grammar untuk pemula', 'https://storyblok-image.ef.com/unsafe/1200x600/filters:focal(608x351:609x352):quality(90)/f/60990/1', 'https://www.youtube.com/embed/P4wgwrAIFfA?si=wxOw0Yo-kk85Hboz', '17.35 menit', 'Brikut adalah pengenalan mengenai apa itu Part of Speech. Part of Speech merupakan materi yang paling dasar (basic) yang harus diketahui dalam belajar Grammar (Bahasa Inggris)', 'Brikut adalah pengenalan mengenai apa itu Part of Speech. Part of Speech merupakan materi yang paling dasar (basic) yang harus diketahui dalam belajar Grammar (Bahasa Inggris)'),
(2, 'HIRAGANA', 'https://i0.wp.com/365nihongo.com/wp-content/uploads/2023/01/%E3%81%84%E3%81%91-pond-10.png?resize=10', 'https://www.youtube.com/embed/icK6kVTegDA?si=8A5y5mLsxVdVrui9\"', '38.09 menit', 'HIRAGANA adalah huruf utama yang paling banyak digunakan dalam Bahasa Jepang. Buat Kalian Pemula yg baru mulai Belajar Bahasa Jepang, ini adalah Video Pertama yg Harus Kalian Tonton.', 'HIRAGANA adalah huruf utama yang paling banyak digunakan dalam Bahasa Jepang. Buat Kalian Pemula yg baru mulai Belajar Bahasa Jepang, ini adalah Video Pertama yg Harus Kalian Tonton.'),
(3, 'Belajar Bahasa Korea: Perkenalan Diri (자기 소개)', 'https://newsroom.korea.net/upload/content/editImage/20191130022327982_7ICW67LW.png', 'https://www.youtube.com/embed/Yy1ps5b_eN0?si=3QGDfDlXRtYY_-YL', '05.33 menit', 'Pada episode kali ini kita akan belajar cara memperkenalkan diri menggunakan bahasa Korea. Tonton videonya sampai selesai supaya kamu paham dengan penjelasan yang disampaikan.', '안녕하세요. 만나서 반갑습니다. 저는 빌 스미스라고 해요.\r\n[Annyeong-haseyo. Mannaseo ban-gapsseumnida. Jeoneun Bill Smith-rago haeyo.] Apa kabar. Gembira sekali bertemu dengan anda. Saya Bill Smith.\r\n저는 IBM 서울 지사에서 근무하고 있어요.\r\n[Jeoneun IBM Seoul jisa-esoe geunmuhago isseoyo.] Sedang bekerja di kantor perwakilan IBM Seoul.\r\n저는 미국 시카고에서 왔어요.\r\n[ Jeoneun miguk sikago-eseo wasseoyo.] Saya datang dari Chicago, Amerika Serikat.\r\n한국에 온 지 일년 됐어요.\r\n[ Han-guge on ji ilnyeon dwaesseoyo.] Sudah satu tahun di Korea.\r\n아내와 두 아이가 있어요.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id_superAdmin`),
  ADD UNIQUE KEY `username_super` (`username_super`);

--
-- Indeks untuk tabel `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
