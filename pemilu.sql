-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2019 pada 09.38
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_voting`
--

CREATE TABLE `hasil_voting` (
  `bukti_pilihan` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `no_kandidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `no_urut` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`no_urut`, `foto`, `nama`, `visi`, `misi`) VALUES
(1, 'foto-jokowi-maruf-amin-di-surat-suara-pilpres-2019.jpg', 'JOKOWI & MA\'RUF', 'SWADIKHAP', 'HAIYAAA'),
(2, 'prabowo.jpg', 'PRABOWO & SANDI', 'ADIL', 'MAKMUR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `no_laporan` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`no_laporan`, `nik`, `deskripsi`) VALUES
(1, 12173362, 'aku pengen cepet kelar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `provinsi` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `status_perkawinan` varchar(12) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `email`, `password`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `alamat`, `rt`, `rw`, `kecamatan`, `kelurahan`, `kota`, `provinsi`, `jenis_kelamin`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`) VALUES
(23456, 'aqonlimited@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', '', ''),
(123456, 'aqonlimited@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'jodi', 'bekasi', '2019-05-24', 'bekasi', 1, 2, 'btg', 'btg', 'bekas', 'jabar', 'laki', 'islam', 'belum kawin', 'wiraswasta', 'wni'),
(12173362, 'afaliffurqon9@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'alif furqon', 'Jakarta', '1997-09-08', 'bantar gebang', 2, 9, 'bantar gebang', 'bantar gebang', 'bekasi', 'jawa barat', 'laki-laki', 'islam', 'belum kawin', 'wiraswasta', 'wni');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_voting`
--
ALTER TABLE `hasil_voting`
  ADD PRIMARY KEY (`bukti_pilihan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `no_kandidat` (`no_kandidat`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_voting`
--
ALTER TABLE `hasil_voting`
  MODIFY `bukti_pilihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `no_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_voting`
--
ALTER TABLE `hasil_voting`
  ADD CONSTRAINT `hasil_voting_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_voting_ibfk_2` FOREIGN KEY (`no_kandidat`) REFERENCES `kandidat` (`no_urut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
