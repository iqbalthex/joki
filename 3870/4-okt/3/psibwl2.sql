-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2022 pada 11.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psibwl`
--

CREATE DATABASE IF NOT EXISTS `psibwl`;
USE `psibwl`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(1) NOT NULL,
  `tpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jurusan` char(2) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `tpt_lhr`, `tgl_lhr`, `jurusan`, `umur`, `alamat`) VALUES
('135310150', 'Rian Hidayat', '1', '', '1997-08-05', 'TK', 20, ''),
('135310156', 'Safitri Ayu', '2', '', '1995-09-01', 'TK', 22, ''),
('135410156', 'Ahmad Riko', '1', '', '1995-02-23', 'TI', 22, ''),
('135410189', 'Wawan Setiawan', '1', '', '1993-02-13', 'TI', 23, ''),
('135510190', 'Marshel Saraun', '1', '', '1993-10-23', 'MI', 23, ''),
('135510191', 'Nacha Saraun', '2', '', '1995-01-13', 'MI', 20, ''),
('135510920', 'Dani Hermawan', '1', '', '1996-05-05', 'SI', 23, ''),
('135518322', 'Nita Daniyatun', '2', '', '1994-09-05', 'TI', 23, ''),
('135518900', 'Mili Wilian', '2', '', '1995-10-08', 'SI', 22, ''),
('135610157', 'Dahlan Iskan', '1', '', '1998-03-26', 'SI', 20, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
