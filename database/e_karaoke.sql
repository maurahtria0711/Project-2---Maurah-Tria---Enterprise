-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Nov 2022 pada 12.19
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_karaoke`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `idkamar` varchar(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`idkamar`, `tipe`, `jumlah`, `harga`, `gambar`) VALUES
('001', 'Standard', 5, 150000, '111.jpg'),
('002', 'Standar 1 Set Plus Minuman', 3, 450000, '222.jpg'),
('003', 'VIP Plus Layanan dan Minuman', 2, 650000, '333.jpg'),
('004', 'Executive', 1, 1000000, '44.jpg'),
('005', 'Executive Untuk Rapat', 1, 2000000, '55.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `idkontak` int(11) NOT NULL,
  `idtamu` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pesanuser` text NOT NULL,
  `pesanadmin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Maurah Tria Rahmayami', '4dfaa62e63999db3395f493384b2a5af');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpesan` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `norek` varchar(15) NOT NULL,
  `namarek` varchar(50) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idpesan` int(11) NOT NULL,
  `tglpesan` datetime NOT NULL,
  `batasbayar` datetime NOT NULL,
  `idkamar` varchar(15) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `idtamu` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `lamahari` int(11) NOT NULL DEFAULT '0',
  `totalbayar` int(11) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'Pending...'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokkamar`
--

CREATE TABLE `stokkamar` (
  `idkamar` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stokkamar`
--

INSERT INTO `stokkamar` (`idkamar`, `tipe`, `stok`) VALUES
('001', 'Standard', 5),
('002', 'Standar 1 Set Plus Minuman', 3),
('003', 'VIP Plus Layanan dan Minuman', 2),
('004', 'Executive', 1),
('005', 'Executive Untuk Rapat', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `idtamu` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`idtamu`, `username`, `email`, `nama`, `alamat`, `telepon`, `password`, `foto`) VALUES
(14, 'Maurah', 'maurahtriarahmayami@gmail.com', 'Maurah Tria Rahmayami', 'Padang', '082384615559', 'f31ed336984a2a6abec47e78e2ec811d', 'usericon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkontak`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `stokkamar`
--
ALTER TABLE `stokkamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`idtamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `idtamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
