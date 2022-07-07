-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2022 pada 04.03
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kel` varchar(100) NOT NULL,
  `rtrw` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `luas` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `aset` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `pengurus` varchar(100) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `kec`, `kel`, `rtrw`, `tipe`, `nama`, `alamat`, `luas`, `kapasitas`, `aset`, `lokasi`, `pengurus`, `kegiatan`, `gambar`) VALUES
(20, 'Kambu', 'Padaleu', '01/01', 'Masjid', 'Al Muhajirin', 'BTN Kendari Permai', '200 x 200', '1000', 'Karpet', 'https://www.google.com/maps/place/Masjid+Al-Muhajirin/@-4.0234817,122.5181251,17z/data=!3m1!4b1!4m5', 'Asdar/082293926259', 'Penyembelihan Hewan Kurban', 'WhatsApp Image 2022-07-06 at 22.33.56.jpeg'),
(21, 'Kambu', 'Andonohu', '00/00', 'Musala', 'Namira', 'Andonuhu', '100 x 100', '100', 'Karpet, Mic', 'https://www.google.com/maps/place/Masjid+Al-Muhajirin/@-4.0234817,122.5181251,17z/data=!3m1!4b1!4m5', 'Asdar/082293926259', 'Idul Fitri', 'WhatsApp Image 2022-07-07 at 09.54.12.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('sadmin', 'c5edac1b8c1d58bad90a246d8f08f53b', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
