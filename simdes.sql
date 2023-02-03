-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2018 pada 09.17
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetaksurat`
--

CREATE TABLE `cetaksurat` (
  `id_cetak` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `tgl_cetak` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gendre` enum('Laki-Laki','Perempuan') NOT NULL,
  `kontak` varchar(35) NOT NULL,
  `agama` varchar(35) NOT NULL,
  `status` enum('Kawin','Belum Kawin') NOT NULL,
  `pekerjaan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `gendre`, `kontak`, `agama`, `status`, `pekerjaan`) VALUES
(2, '12345', 'Mohammad Hurdi', 'Pamekasan', 'Pamekasan', '2018-06-05', 'Laki-Laki', '12324145', 'Islam', 'Kawin', 'Pegawai'),
(5, '1234', 'Mohammad Rofik', 'Pamekasan', 'Pamekasan', '2018-06-05', 'Laki-Laki', '12324145', 'Islam', 'Belum Kawin', 'Pegawai'),
(6, '4321', 'Sadam Husain', 'Pamekasan', 'Pamekasan', '2018-06-14', 'Laki-Laki', '12324145', 'Islam', 'Belum Kawin', 'Mahasiswa'),
(7, '123456', 'Hannanah', 'Proppo', 'Pamekasan', '2018-06-06', 'Perempuan', '12324145', 'Islam', 'Kawin', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id_req` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `tgl_req` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `keperluan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `jenis_surat` varchar(150) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `jenis_surat`, `keterangan`) VALUES
(1, 'Surat Keterangan Tidak Berijazah', 'Tidak Memiliki Ijazah'),
(2, 'Surat Keterangan Tidak Mampu', ''),
(3, 'Surat Keterangan Beda Nama', ''),
(4, 'Surat Keterangan Berdomisili', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cetaksurat`
--
ALTER TABLE `cetaksurat`
  ADD PRIMARY KEY (`id_cetak`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_req`),
  ADD KEY `id_penduduk` (`id_penduduk`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cetaksurat`
--
ALTER TABLE `cetaksurat`
  MODIFY `id_cetak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
