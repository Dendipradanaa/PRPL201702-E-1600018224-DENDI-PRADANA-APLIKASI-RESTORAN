-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2018 pada 16.51
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalres`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `namapelanggan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggalpesan` date NOT NULL,
  `order1` int(11) NOT NULL,
  `order2` int(11) NOT NULL,
  `order3` int(11) NOT NULL,
  `order4` int(11) NOT NULL,
  `order5` int(11) NOT NULL,
  `order6` int(11) NOT NULL,
  `order7` int(11) NOT NULL,
  `order8` int(11) NOT NULL,
  `order9` int(11) NOT NULL,
  `order10` int(11) NOT NULL,
  `order11` int(11) NOT NULL,
  `order12` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `totalbarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`namapelanggan`, `alamat`, `tanggalpesan`, `order1`, `order2`, `order3`, `order4`, `order5`, `order6`, `order7`, `order8`, `order9`, `order10`, `order11`, `order12`, `totalharga`, `totalbarang`) VALUES
('Bpk. Iqbal', 'Jl. pakel Baru Sel.', '2018-05-06', 1, 0, 1, 0, 0, 1, 0, 1, 0, 2, 0, 0, 106000, 6),
('Bpk. Azizi', 'Jl. Janturan', '2018-05-08', 1, 1, 2, 0, 0, 0, 1, 3, 0, 0, 0, 0, 177000, 8),
('Bpk. Rijal', 'Bantul Hujung', '2018-05-06', 50, 100, 50, 0, 0, 0, 50, 100, 50, 50, 0, 0, 11150000, 450);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
