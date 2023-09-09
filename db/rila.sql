-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2014 at 08:08 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rila`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `no_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`no_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13141266 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no_anggota`, `nama_siswa`, `jenis_kelamin`, `alamat`, `no_tlp`, `kelas`, `status`) VALUES
(12141013, 'Ghanu Nandora', 'Laki-laki', 'JL.Malabar 2 No.3', '083813452672', '11 IPS 2', 'Aktif'),
(13141020, 'Leondy', 'Laki-laki', 'JL.Perintis kemerdekaan 1 No. 2', '081311188842', '10', 'Aktif'),
(13141034, 'Ratih Kusuma Millennium ', 'Perempuan', 'JL.Veteran No.3 ', '085719195672', '10', 'Aktif'),
(13141087, 'Caesar Bagus Reyaldi', 'Laki-laki', 'JL.Gede 6 No.36 ', '081367893421', '10 ', 'Non-aktif'),
(13141107, 'Nasrul Salim', 'Laki-laki', 'JL.Gatot Subroto KM.8', '089610303022', '12 IPA 2', 'Aktif'),
(13141175, 'Fikri Muhamad Zaky', 'Laki-laki', 'JL.Gatot Subroto KM.3', '085766324121', '11 IPA 4', 'Aktif'),
(13141185, 'Nurmaqiah', 'Perempuan', 'JL.Perintis kemerdekaan 1 No. 4', '081554673298', '12 IPS 1', 'Aktif'),
(13141195, 'Toby Harfian', 'Laki-laki', 'JL.Pangrango 2 No.5', '083878785431', '12 IPS 4', 'Aktif'),
(13141211, 'Irfan Bintang Maulana', 'Laki-laki', 'JL.Karang 1 No. 125', '085718848883', '10 ', 'Aktif'),
(13141222, 'Shaina Maria', 'Perempuan', 'JL.Gede 4 No.10', '083813425637', '12 IPS 2', 'Aktif'),
(13141230, 'Rosa Maesarah', 'Perempuan', 'JL.Gatot Subroto KM.1', '085734523784', '11 IPS 3', 'Aktif'),
(13141243, 'Citra Boeana', 'Perempuan', 'JL.Bango 3 No.12', '081345627184', '11 IPA 2', 'Aktif'),
(13141264, 'Ratu Adelia', 'Perempuan', 'JL.Alamanda1 No.4', '085734527123', '12 IPA 2', 'Aktif'),
(13141265, 'Hanisah Fabiola', 'Perempuan', 'Dasanah', '11111111111', '12 IPA 1', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `kategori_id` int(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `sumber_buku` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `thn_terbit` int(11) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kategori_id`, `pengarang`, `penerbit`, `jumlah_buku`, `sumber_buku`, `isbn`, `thn_terbit`, `tanggal_masuk`, `status`) VALUES
(15, 'Biologi 1', 8, 'Djamber. W', 'Balai pustaka', 9, 'sumbangan', '1-85435-628-3', 2003, '2006-04-18 06:34:27', 'Baru'),
(16, 'Biologi 2', 8, 'Moh Amien', 'Departemen Pendidikan Nasional', 9, 'Sumbangan', '0-7172-0119-8', 2003, '2006-04-18 06:36:23', 'Baru'),
(17, 'Biologi 3', 8, 'Sukarno', 'Balai Pustaka', 9, 'Sumbangan', '0-13-125087-6', 2003, '2006-04-18 06:39:17', 'Baru'),
(18, 'Terampil Berbahasa Indonesia 1', 1, 'Imam Syafiie', 'Departemen P & k', 35, 'Sumbangan', '..', 1994, '2006-04-18 06:41:53', 'Baru'),
(19, 'Majalah dari Kedutaan Jepang', 1, 'Kedutaan Jepang', 'Kedutaan Jepang', 19, 'Sumbangan', '0-13-050841-1', 2007, '2010-05-11 06:44:44', 'Baru'),
(20, 'Menjadi Manusia Pembelajar', 9, 'Andrias Hareta', 'Kompas', 5, 'Block Green I', '0-13-050841-1', 2005, '2010-05-14 06:47:44', 'Perlu penggantian'),
(21, 'The New book Of Knowledge Inggris', 1, 'Donna M Lusardi', 'Scholastic Library Publishing Inc', 21, 'Block Green I', '0-7172-2043-5', 2006, '2011-01-11 06:49:53', 'Baru'),
(22, 'Habis Gelap Terbit Terang', 9, 'Armijn Pane', 'Balai Pustaka', 6, 'RAPBS', '0-87475-450-x', 2006, '2011-05-11 06:52:58', 'Baru'),
(23, 'Kamus Besar Ekonomi', 4, 'Sigit Winarno SE', 'CV Pustaka Grafika', 7, 'RAPBS', '971-570-124-8', 2003, '2011-06-11 06:55:27', 'Baru'),
(24, 'Kumpulan Puisi Kehidupan', 9, 'Susilowati Susmono', 'Citra Andhikana', 9, 'Sumbangan', '978-0-07-873830-2', 2005, '2011-07-11 06:57:35', 'Hilang'),
(25, 'Geografi', 4, 'Tim Geografi Jakarta', 'Erlangga', 18, 'Sumbangan', '971-07-1574-7', 2004, '2011-06-13 06:59:24', 'Rusak'),
(26, 'Matematika XI IPA', 7, 'Sri Retnaningsih', 'PT Pabelan', 6, 'Sumbangan', '978-971-0315-33-8', 2005, '2011-08-08 07:01:25', 'Baru'),
(27, 'Kumpulan Rumus Matematika', 7, 'Sri Lestari ST', 'PT Kawan Pustaka', 5, 'Block Green I', '971-07-2324-3', 2003, '2011-10-05 07:02:56', 'Baru'),
(28, 'Aplikasi Database', 3, 'Tim Penelitian dan Pengembangan Madcoms', 'Salemba Infotek', 4, 'Block Green I', '0-02-817934-x', 2003, '2011-10-23 07:05:25', 'Rusak'),
(29, 'Developing Skills', 1, 'L6 Alexander', 'Lanisius', 3, 'Block Green I', '0-394-53597-9', 1987, '2011-11-11 07:07:02', 'Lama'),
(30, 'Kuliah Itu Gampang', 9, 'Wiko Saputra', 'Visi Media', 10, 'Block Green I', '0-382-03575-5', 2006, '2012-01-07 09:22:50', 'Lama'),
(31, 'Bahasa Indonesia Jilid 1', 1, 'Sri H Raharjo', 'Erlangga', 20, 'Block Green I', '0-395-35487-0', 2004, '2012-01-10 09:25:32', 'Lama'),
(32, 'Bahasa Indonesia Jilid II ', 1, 'Sri H Raharjo', 'Erlangga', 20, 'Block Green I', '123-132', 2005, '2012-01-10 19:00:10', 'Archive'),
(34, 'abc', 1, 'abc', 'abc', 10, 'abc', '123abc', 2000, '2014-07-12 15:03:56', 'Baru'),
(35, 'ola', 1, 'ola', 'ola', 3, 'ola', '123123123', 1234, '2014-07-14 13:20:36', 'Lama');

-- --------------------------------------------------------

--
-- Table structure for table `buku_hilang`
--

CREATE TABLE IF NOT EXISTS `buku_hilang` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` int(11) NOT NULL,
  `no_member` varchar(50) NOT NULL,
  `tgl_hilang` date NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detil_peminjaman`
--

CREATE TABLE IF NOT EXISTS `detil_peminjaman` (
  `id_detil_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL,
  `tgl_pengembalian` varchar(100) NOT NULL,
  PRIMARY KEY (`id_detil_peminjaman`),
  UNIQUE KEY `id_peminjaman` (`id_peminjaman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=179 ;

--
-- Dumping data for table `detil_peminjaman`
--

INSERT INTO `detil_peminjaman` (`id_detil_peminjaman`, `id_buku`, `id_peminjaman`, `status_peminjaman`, `tgl_pengembalian`) VALUES
(164, 16, 484, 'returned', '2014-07-12 16:42:27'),
(162, 15, 482, 'returned', '2014-07-12 16:48:04'),
(163, 15, 483, 'returned', '2014-03-21 00:30:51'),
(178, 20, 498, 'returned', '2014-07-15 11:49:12'),
(177, 16, 497, 'pending', ''),
(176, 19, 496, 'pending', ''),
(175, 16, 495, 'pending', ''),
(174, 29, 494, 'pending', ''),
(173, 28, 493, 'returned', '2014-07-12 16:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_peminjam` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`jenis_peminjam`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis_peminjam`) VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Contruction');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`),
  UNIQUE KEY `category_id` (`kategori_id`),
  KEY `classid` (`kategori_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=801 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Bahasa'),
(2, 'Akutansi'),
(3, 'TIK'),
(4, 'Ilmu Pengetahuan Sosial'),
(5, 'Agama'),
(6, 'Majalah'),
(7, 'Matematika'),
(8, 'Ilmu Pengetahuan Alam'),
(9, 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `no_anggota` bigint(50) NOT NULL,
  `tgl_peminjaman` varchar(100) NOT NULL,
  `tgl_transaksi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=499 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `no_anggota`, `tgl_peminjaman`, `tgl_transaksi`) VALUES
(484, 12141013, '2014-03-20 23:50:27', '21/03/2014'),
(483, 13141020, '2014-03-20 23:49:34', '21/03/2014'),
(482, 13141034, '2014-03-20 23:38:22', '03/01/2014'),
(495, 13141034, '2014-07-14 10:01:38', '14/07/2014'),
(494, 13141185, '2014-07-12 16:48:28', '12/07/2014'),
(493, 13141175, '2014-07-12 16:10:16', '12/07/2014'),
(496, 13141034, '2014-07-14 10:02:46', '14/07/2014'),
(497, 13141034, '2014-07-14 10:09:02', '14/07/2014'),
(498, 12141013, '2014-07-15 11:48:49', '15/07/2014');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_depan`, `nama_belakang`) VALUES
(2, 'admin', 'admin', 'Jany', 'Apriliany');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
