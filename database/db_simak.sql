-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 02:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(3) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `jumlah` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `id_asisten` int(5) NOT NULL,
  `asisten_praktikum` varchar(70) NOT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `id_daftar` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(3) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_asisten`
--

CREATE TABLE `daftar_asisten` (
  `id_daftar` int(5) NOT NULL,
  `pilihan_praktikum1` varchar(50) NOT NULL,
  `pilihan_praktikum2` varchar(50) NOT NULL,
  `pilihan_praktikum3` varchar(50) NOT NULL,
  `nilai_kimia_organik` char(3) NOT NULL,
  `semester` char(2) NOT NULL,
  `jam_kosong` varchar(30) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_asisten`
--

INSERT INTO `daftar_asisten` (`id_daftar`, `pilihan_praktikum1`, `pilihan_praktikum2`, `pilihan_praktikum3`, `nilai_kimia_organik`, `semester`, `jam_kosong`, `status`, `id_mahasiswa`) VALUES
(1, 'Termodinamika', 'Struktur dan Dasar Reaksi Anorganik', 'Kinetika Kimia', 'A-', '8', 'Senin I (08:00-12:00)', '1', 24),
(2, 'Struktur dan Dasar Reaksi Anorganik', 'Termodinamika', 'Kinetika Kimia', 'A', '8', 'Rabu (full day)', '1', 25),
(3, 'Kimia Dasar II', 'Kimia Pemisahan', 'Kimia Analisis Instrument', 'B', '8', 'Rabu I (08:00-12:00)', '1', 26),
(4, 'Kimia Pemisahan', 'Kimia Dasar II', 'Kimia Dasar II', 'B', '8', 'Jumat I (08:00-12:00)', '1', 27),
(5, 'Kimia Organik : Identifikasi Dan Sintesis', 'Metabolisme Biomolekul', 'Kimia Pemisahan', 'A', '8', 'Rabu (full day)', '1', 33),
(6, 'Kimia Organik : Identifikasi Dan Sintesis', 'Metabolisme Biomolekul', 'Kimia Pemisahan', 'A', '8', 'Rabu (full day)', '1', 34),
(7, 'Metabolisme Biomolekul', 'Kimia Analisis Instrument', 'Kimia Pemisahan', 'A-', '8', 'Senin II (13:00:16:00)', '1', 35),
(8, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Pemisahan', 'A', '8', 'Rabu I (08:00-12:00)', '1', 64),
(9, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Pemisahan', 'Termodinamika', 'A', '8', 'Rabu I (08:00-12:00)', '1', 70),
(10, 'Termodinamika', 'Metabolisme Biomolekul', 'Struktur dan Dasar Reaksi Anorganik', 'B', '8', 'Kamis II (13:00:16:00)', '1', 71),
(11, 'Termodinamika', 'Kinetika Kimia', 'Kimia Dasar II', 'A', '8', 'Senin II (13:00:16:00)', '1', 72),
(12, 'Kimia Pemisahan', 'Kimia Analisis Instrument', 'Kimia Dasar II', 'A+', '7', 'Kamis (full day)', '1', 83),
(13, 'Metabolisme Biomolekul', 'Kimia Pemisahan', 'Metabolisme Biomolekul', 'B', '8', 'Kamis I (08:00-12:00)', '1', 85),
(14, 'Kimia Dasar II', 'Kimia Pemisahan', 'Kimia Dasar II', 'A', '8', 'Senin I (08:00-12:00)', '1', 88),
(15, 'Kimia Pemisahan', 'Kinetika Kimia', 'Kimia Dasar II', 'A', '8', 'Senin I (08:00-12:00)', '1', 89),
(16, 'Metabolisme Biomolekul', 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Pemisahan', 'A-', '8', 'Kamis (full day)', '1', 90),
(17, 'Metabolisme Biomolekul', 'Termodinamika', 'Kimia Pemisahan', 'B+', '8', 'Senin (full day)', '1', 102),
(18, 'Struktur dan Dasar Reaksi Anorganik', 'Metabolisme Biomolekul', 'Metabolisme Biomolekul', 'A', '8', 'Rabu I (08:00-12:00)', '1', 126),
(19, 'Kinetika Kimia', 'Kimia Organik : Identifikasi Dan Sintesis', 'Struktur dan Dasar Reaksi Anorganik', 'B+', '8', 'Selasa I (08:00-12:00)', '1', 134),
(20, 'Kimia Dasar II', 'Kimia Dasar II', 'Kimia Pemisahan', 'A', '8', 'Selasa I (08:00-12:00)', '1', 136),
(21, 'Kinetika Kimia', 'Metabolisme Biomolekul', 'Kimia Analisis Instrument', 'A-', '8', 'Selasa I (08:00-12:00)', '1', 139),
(22, 'Kimia Organik : Identifikasi Dan Sintesis', 'Kimia Dasar II', 'Kinetika Kimia', 'A', '8', 'Selasa I (08:00-12:00)', '1', 140),
(23, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'Struktur dan Dasar Reaksi Anorganik', 'A-', '6', 'Rabu II (13:00:16:00)', '1', 137),
(24, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'A-', '6', 'Rabu II (13:00:16:00)', '1', 161),
(25, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur Dan Fungsi Biomolekul', 'Metabolisme Biomolekul', 'A+', '8', 'Kamis (full day)', '1', 167),
(26, 'Kimia Organik : Identifikasi Dan Sintesis', 'Kimia Dasar II', 'Metabolisme Biomolekul', 'A', '8', 'Selasa II (13:00:16:00)', '1', 174),
(27, 'Kimia Dasar II', 'Kimia Dasar II', 'Kimia Dasar II', 'A', '8', 'Selasa I (08:00-12:00)', '1', 175),
(28, 'Kimia Organik : Identifikasi Dan Sintesis', 'Kimia Dasar II', 'Metabolisme Biomolekul', 'A', '8', 'Selasa II (13:00:16:00)', '1', 176),
(29, 'Metabolisme Biomolekul', 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'A', '8', 'Kamis I (08:00-12:00)', '1', 187),
(30, 'Metabolisme Biomolekul', 'Struktur Dan Fungsi Biomolekul', 'Termodinamika', 'A', '8', 'Senin II (13:00:16:00)', '1', 212),
(31, 'Kimia Dasar II', 'Kimia Dasar II', 'Kimia Dasar II', 'A-', '8', 'Selasa I (08:00-12:00)', '1', 227),
(32, 'Kimia Pemisahan', 'Metabolisme Biomolekul', 'Kinetika Kimia', 'B+', '8', 'Kamis II (13:00:16:00)', '1', 247),
(33, 'Metabolisme Biomolekul', 'Kinetika Kimia', 'Kimia Pemisahan', 'A-', '8', 'Kamis II (13:00:16:00)', '1', 248),
(34, 'Metabolisme Biomolekul', 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Pemisahan', 'A-', '8', 'Kamis II (13:00:16:00)', '1', 249),
(35, 'Termodinamika', 'Kimia Organik : Isolasi, Pemurnian, Dan Karakteris', 'Kimia Dasar II', 'A-', '8', 'Senin II (13:00:16:00)', '1', 250),
(36, 'Termodinamika', 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'A-', '8', 'Senin I (08:00-12:00)', '1', 253),
(37, 'Kinetika Kimia', 'Kimia Dasar II', 'Kimia Dasar II', 'A-', '8', 'Rabu (full day)', '1', 254),
(38, 'Kinetika Kimia', 'Struktur dan Dasar Reaksi Anorganik', 'Kinetika Kimia', 'A-', '7', 'Rabu II (13:00:16:00)', '1', 299),
(39, 'Struktur dan Dasar Reaksi Anorganik', 'Metabolisme Biomolekul', 'Metabolisme Biomolekul', 'A', '8', 'Rabu I (08:00-12:00)', '1', 326),
(40, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'Termodinamika', 'A+', '8', 'Rabu (full day)', '1', 332),
(41, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Organik : Identifikasi Dan Sintesis', 'Metabolisme Biomolekul', 'A+', '8', 'Rabu (full day)', '1', 335),
(42, 'Kimia Organik : Identifikasi Dan Sintesis', 'Kimia Organik : Identifikasi Dan Sintesis', 'Kinetika Kimia', 'A-', '8', 'Selasa (full day)', '1', 336),
(43, 'Kimia Organik : Identifikasi Dan Sintesis', 'Kimia Organik : Identifikasi Dan Sintesis', 'Struktur dan Dasar Reaksi Anorganik', 'A', '8', 'Selasa (full day)', '1', 337),
(44, 'Struktur dan Dasar Reaksi Anorganik', 'Sintesis dan Identifikasi Molekul Anorganik', 'Kimia Dasar II', 'A', '10', 'Kamis II (13:00:16:00)', '1', 338),
(45, 'Kimia Dasar II', 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'C', '10', 'Selasa I (08:00-12:00)', '1', 339),
(46, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'Kinetika Kimia', 'A+', '8', 'Rabu (full day)', '1', 340),
(47, 'Kimia Dasar II', 'Termodinamika', 'Kimia Organik : Identifikasi Dan Sintesis', 'A', '8', 'Selasa I (08:00-12:00)', '1', 342),
(48, 'Kimia Dasar II', 'Kimia Dasar II', 'Metabolisme Biomolekul', 'A', '8', 'Selasa I (08:00-12:00)', '1', 356),
(49, 'Kinetika Kimia', 'Metabolisme Biomolekul', 'Kinetika Kimia', 'B', '8', 'Selasa I (08:00-12:00)', '1', 357),
(50, 'Metabolisme Biomolekul', 'Metabolisme Biomolekul', 'Kimia Dasar II', 'A-', '8', 'Kamis I (08:00-12:00)', '1', 358),
(51, 'Kimia Dasar II', 'Struktur dan Dasar Reaksi Anorganik', 'Metabolisme Biomolekul', 'A-', '8', 'Senin II (13:00:16:00)', '1', 369),
(52, 'Kimia Pemisahan', 'Metabolisme Biomolekul', 'Struktur dan Dasar Reaksi Anorganik', 'A-', '6', 'Kamis (full day)', '1', 373),
(53, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'Struktur dan Dasar Reaksi Anorganik', 'A', '6', 'Rabu II (13:00:16:00)', '1', 251),
(54, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'Struktur dan Dasar Reaksi Anorganik', 'A', '6', 'Rabu II (13:00:16:00)', '1', 287),
(55, 'Kinetika Kimia', 'Kimia Dasar II', 'Kimia Dasar II', 'A-', '8', 'Senin I (08:00-12:00)', '1', 381),
(56, 'Kimia Dasar II', 'Kinetika Kimia', 'Kimia Dasar II', 'A', '8', 'Selasa I (08:00-12:00)', '1', 382),
(57, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'A', '6', 'Rabu II (13:00:16:00)', '1', 282),
(58, 'Struktur dan Dasar Reaksi Anorganik', 'Kimia Dasar II', 'Kimia Organik : Isolasi, Pemurnian, Dan Karakteris', 'A-', '6', 'Rabu (full day)', '1', 276),
(59, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'A', '6', 'Rabu II (13:00:16:00)', '1', 278),
(60, 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'Struktur dan Dasar Reaksi Anorganik', 'B', '6', 'Rabu II (13:00:16:00)', '1', 275),
(61, 'Kimia Organik : Identifikasi Dan Sintesis', 'Metabolisme Biomolekul', 'Struktur Dan Fungsi Biomolekul', 'A-', '8', 'Rabu I (08:00-12:00)', '1', 388),
(62, 'Kimia Dasar II', 'Kimia Organik : Identifikasi Dan Sintesis', 'Kimia Dasar II', 'A', '7', 'Selasa I (08:00-12:00)', '1', 389);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_peminjaman_alat`
--

CREATE TABLE `daftar_peminjaman_alat` (
  `id_daftar` int(5) NOT NULL,
  `jumlah_peminjaman` varchar(10) NOT NULL,
  `id_peminjaman` int(5) DEFAULT NULL,
  `id_alat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_peminjaman_bahan`
--

CREATE TABLE `daftar_peminjaman_bahan` (
  `id_daftar` int(5) NOT NULL,
  `jumlah_peminjaman` varchar(10) NOT NULL,
  `id_peminjaman` int(5) DEFAULT NULL,
  `id_bahan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `nip`) VALUES
(1, 'Prof. Dr. Nurbaity, M.Si', '19470926 197502 2 001'),
(2, 'Dr. Muktiningsih N., M.Si', '19640511 198903 2 001'),
(3, 'Dr. Sukro Muhab, M.Si', '19660417 199203 1 003'),
(4, 'Dr. Maria Paristiowati, M.Si', '19671020 199203 2 001'),
(5, 'Dr. Yusmaniar, M.Si', '19620626 199602 2 001'),
(6, 'Prof. Dr. Erdawati, M.Sc.', '19510912 198103 2 001'),
(7, 'Drs. Zulhipri, M.Si', '19580703 198903 1 001'),
(8, 'Dr. Imam Santoso, M.Si', '19640917 199003 1 018'),
(9, 'Drs. Suhartono, M.Kes', '19550712 198303 1 001'),
(10, 'Dra. Zulmanelis D., M.Si', '19560501 198803 2 001'),
(11, 'Dr. Agung Purwanto, M.Si', '19640202 199102 1 001'),
(12, 'Dr. A. Ridwan, M.Si', '19630807 198803 1 003'),
(13, 'Dra. Tritiyatma H, M.Si', '19611225 198701 2 001'),
(14, 'Dr. Ucu Cahyana, M.Si', '19660820 199403 1 002'),
(15, 'Dr. Moersilah, M.Si', '19580523 199703 2 001'),
(16, 'Dr. Suwirman N, M.Pd.', '19520405 198010 1 001'),
(17, 'Dr. Afrizal, M.Si', '19730416 199903 1 002'),
(18, 'Irma Ratna K.,M.Sc, Tech', '19721204 200501 2 001'),
(19, 'Drs. Darsef Darwis, M.Si', '19650806 199003 1 004'),
(20, 'Dr. Fera Kurniadewi, M.Si', '19761231 200112 2 002'),
(21, 'Irwan Saputra, M.Si.', '19741018 200604 1 001'),
(22, 'Dr. Setia Budi, M.Sc.', '19790621 200501 1 001'),
(23, 'Yuli Rahmawati, M.Sc.,Ph.D', '19800730 200501 2 003'),
(24, 'Arif Rahman, M.Sc', '19790216 200501 1 003'),
(25, 'Ella Fitriani, M.Pd', '19900511 201504 2 001'),
(26, 'Hanhan Dianhar, M.Si', '19900929 201504 1 003');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(3) NOT NULL,
  `nama_hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktikum`
--

CREATE TABLE `jadwal_praktikum` (
  `id_jadwal` int(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `peserta` tinyint(3) NOT NULL DEFAULT '0',
  `kuota` varchar(3) NOT NULL,
  `id_praktikum` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_praktikum`
--

INSERT INTO `jadwal_praktikum` (`id_jadwal`, `hari`, `jam`, `lokasi`, `peserta`, `kuota`, `id_praktikum`) VALUES
(31, 'Senin', 'II (13:00-17:00)', 'LAB. KIMIA FISIK', 0, '', 22),
(32, 'Senin', 'III (08:00-16:00)', 'LAB. KIMIA ANALITIK', 0, '', 23),
(33, 'Senin', 'II (13:00-17:00)', 'LAB. KIMIA ORGANIK', 1, '', 24),
(34, 'Selasa', 'I (08:00-12:00)', 'LAB. KIMIA FISIK', 1, '', 25),
(35, 'Selasa', 'I (08:00-12:00)', 'LAB. KIMIA DASAR', 0, '', 26),
(36, 'Selasa', 'III (08:00-16:00)', 'LAB. KIMIA ANALITIK', 1, '', 27),
(37, 'Selasa', 'I (08:00-12:00)', 'LAB. KIMIA ORGANIK', 1, '', 28),
(38, 'Selasa', 'II (13:00-17:00)', 'LAB. KIMIA FISIK', 1, '', 29),
(39, 'Selasa', 'II (13:00-17:00)', 'LAB. KIMIA ORGANIK', 1, '', 30),
(40, 'Rabu', 'I (08:00-12:00)', 'LAB. KIMIA FISIK', 1, '', 31),
(41, 'Rabu', 'I (08:00-12:00)', 'LAB. KIMIA DASAR', 0, '', 32),
(42, 'Rabu', 'III (08:00-16:00)', 'LAB. KIMIA ANALITIK', 1, '', 33),
(43, 'Rabu', 'I (08:00-12:00)', 'LAB. KIMIA ORGANIK', 0, '', 34),
(44, 'Rabu', 'II (13:00-17:00)', 'LAB. KIMIA FISIK', 1, '', 35),
(45, 'Kamis', 'I (08:00-12:00)', 'LAB. KIMIA FISIK', 0, '', 36),
(46, 'Kamis', 'III (08:00-16:00)', 'LAB. KIMIA ANALITIK', 0, '', 37),
(47, 'Kamis', 'I (08:00-12:00)', 'LAB. KIMIA ORGANIK', 1, '', 38),
(48, 'Kamis', 'II (13:00-17:00)', 'LAB. KIMIA DASAR', 0, '', 39),
(49, 'Kamis', 'II (13:00-17:00)', 'LAB. KIMIA ORGANIK', 1, '', 40),
(50, 'Jumat', 'I (08:00-12:00)', 'LAB. KIMIA ANALITIK', 1, '', 42),
(51, 'Jumat', 'II (13:00-17:00)', 'LAB. KIMIA FISIK', 1, '', 41),
(52, 'Jumat', 'II (13:00-17:00)', 'LAB. KIMIA ORGANIK', 1, '', 43),
(53, 'Senin', 'I (08:00-12:00)', 'LAB. KIMIA ANALITIK', 1, '', 44),
(54, 'Rabu', 'III (08:00-16:00)', 'LAB. KIMIA ORGANIK', 1, '', 45),
(55, 'Kamis', 'I (08:00-12:00)', 'LAB. KIMIA ANALITIK', -1, '', 46),
(56, 'Kamis', 'II (13:00-17:00)', 'LAB. KIMIA FISIK', 1, '', 47);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL,
  `noreg` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `program_studi` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `url_foto` varchar(50) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `id_tahun` int(3) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `noreg`, `nama`, `program_studi`, `email`, `alamat`, `no_hp`, `url_foto`, `status`, `id_tahun`, `id_user`) VALUES
(11, '1303617063', 'Intan Megantari', 'Pendidikan Kimia', 'Intanmgntr@gmail.com', 'Jl,. Batu Jambrud Rt 08/Rw 02 No.47 Batu Ampar, Kramat Jati, Jakarta Timur', '089533628428', './upload/INTAN_MEGANTARI.jpeg', '0', 6, 407),
(12, '1303617027', 'Fajar Priambodo', 'Pendidikan Kimia', 'prfajar@gmail.com', 'Harapan Indah Jl. Cempaka Indah III Blok OF No. 20, Kel. Pejuang, Kec. Medan Satria, Kota Bekasi', '087783133797', './upload/FAJAR_PRIAMBODO.jpg', '0', 6, 403),
(13, '1307617025', 'Hasna Khairunnisa', 'Kimia', 'hasnakhrnns@gmail.com', 'Jl. Manggis 3 B1 No.13 Komp. Angkasa Puri, Bekasi', '085693079451', './upload/Hasna_Khairunnisa.jpg', '0', 6, 441),
(14, '1307617017', 'Gayatri Citra Dewi', 'Kimia', 'gayatricitrad17.gcd@gmail.com', 'Jl. Hidup Baru, Gg. Karya 7 no. 24 rt.14 rw.03, Gandaria Utara, Kebayoran Baru, Jakarta Selatan', '085771552032', './upload/Gayatri_Citra_Dewi.jpg', '0', 6, 439),
(15, '1307617031', 'Siti Nurhasanah', 'Kimia', 'sitinurhasanah1601@gmail.com', 'Jl. Ulujami raya Rt 09/01 Pesanggrahan Jakarta Selatan', '082298044372', './upload/nana.jpg', '0', 6, 456),
(16, '1307617023', 'Aisyah Rahmah Tianny', 'Kimia', 'aisyahtianny@gmail.com', 'Jalan Kresna no. 42, Jatirahayu - Pondok Melati, Bekasi', '081288994570', './upload/Aisyah_Rahmah_Tianny.jpg', '0', 6, 428),
(17, '1307617010', 'aulia siti pathoni', 'Kimia', 'auliapathonisiti@gmail.com', 'bugel mas indah blok c24 no.2', '081388655343', './upload/Aulia_siti_pathoni-kimia_2017-1307617010.', '0', 6, 432),
(18, '1307617006', 'Irvan Maulana', 'Kimia', 'irvanmaulana0808@gmail.com', 'dusun krajan IV rt 010/04 desa pulokalapa kec lemahabang kab karawang', '085718481916', './upload/Irvan_Maulana.jpg', '0', 6, 442),
(19, '1307617008', 'Rizky Fauziah Hanum', 'kimia', 'rizkyfauziah32@gmail.com', 'jl.swadaya murni IV rt002/011 lubang buaya, cipayung, Jakarta Timur.', '083894229805', './upload/Rizky_Fauziah.jpg', '0', 6, 455),
(20, '1307617003', 'Ester Magdalena Sitompul', 'Kimia', 'estermagdalena0146@gmail.com', 'Jl. Sawo 4 No. 32 Pondok Makmur, Kotabumi, Tangerang', '081281689840', './upload/ESTER.JPG', '0', 6, 437),
(21, '1303617061', 'DILIVIVA VENESIA', 'Pendidikan Kimia', 'dilivivavenesia@gmail.com', 'Rumdis Banpres TNI AL blok C1 no. 6 Ciangsana, Gunung Putri, Bogor', '085717977653', './upload/DILIVIVA_VENESIA.jpeg', '0', 6, 398),
(22, '1303617064', 'Anita Puji Lestari', 'Pendidikan Kimia', 'anitapuji15@gmail.com', 'Jalan HJ Baping Gang Mandar RT 005 RW 009 Ciracas Jakarta Timur. Kode pos 13740', '085899414162', './upload/ANITA_PUJI_LESTARI.jpg', '0', 6, 392),
(23, '1303617057', 'dessy intan hariani', 'Pendidikan Kimia', 'dessyintanhariani@gmail.com', 'desa cisaat blok 3 rt 03/05 kec.waled kab.cirebon jawa barat', '081221750121', './upload/DESSY_INTAN_HARIANI.jpeg', '0', 6, 397),
(24, '3325140714', 'Maulidya', 'Kimia', 'Mlidya3@gmail.com', 'Jalan Delta Serdang RT.02 RW. 07 No.29 Kemayoran, Jakarta Pusat', '085777687296', './upload/Webp_net-compress-image.jpg', '0', 3, 51),
(25, '3325140703', 'Ananda Ico Novtiar Turmiasaputri', 'KIMIA', 'anandaico21@gmail.com', 'Asrama Polri Ciledug Tangerang', '08159419460', './upload/IMG-20150210-WA0003.jpg', '0', 3, 32),
(26, '3325140710', 'NOPRIDAWATI', 'KIMIA', 'nopridawatisihombing@gmail.com', 'jalan pratekan no 49A', '085289049201', './upload/IMG-20171110-WA0000.jpg', '0', 3, 53),
(27, '3325140701', 'ELIDA TOGATOROP', 'KIMIA', 'elida4344@gmail.com', 'jalan pratekan no 49A', '085210771908', './upload/IMG_20171110_115012_1510542598672_1519627', '0', 3, 460),
(28, '1307617027', 'Nabilla Alya Pramudiyasih', 'Kimia', 'alyaprmdysh@gmail.com', 'Jalan Kayu Mas Utara U272', '08975924799', './upload/IMG20171212144656.jpg', '0', 6, 450),
(29, '1307617029', 'Kifka rizki aredesya putri', 'Kimia', 'Kifkaaredesyaa@gmail.com', 'Grand Depok City sektor gardenia blok N4 no 28', '085882766973', './upload/1513132105006.jpg', '0', 6, 445),
(30, '1307617015', 'Suprihatin', 'Kimia', 'suprihatinxia2015@gmail.com', 'Ds Kayen RT 04/RW 07 kec Kayen Kab Pati,Jawa Tengah', '087875742356', './upload/Suprihatin.jpg', '0', 6, 458),
(31, '1307617022', 'Siti Rahmawati', 'Kimia', 'sitiamah9@gmail.com', 'Jalan Cipeucang 4 No. 43 RT 011 RW 013 Kec. Koja Kel. Koja Jakarta Utara', '081290343130', './upload/_20180226_125124.jpg', '0', 6, 457),
(32, '1307617011', 'Dian Pertiwi', 'Kimia', 'dianprtw99@gmail.com', 'jalan mawar III rt 06 rw 05, bintaro, pesanggrahan, jakarta selatan', '083192896757', './upload/IMG-20171212-WA0002.jpg', '0', 6, 435),
(33, '3325140707', 'Dian angrianis', 'KIMIA', 'email.dianangrianis@gmail.com', 'Perumahan Bekasi Elok 2blok G1 no 20 Tambun Utara', '081932671192', './upload/IMG_20171109_220859_(1).JPG', '0', 3, 40),
(34, '3325140712', 'Dewi Aini', 'Kimia', 'dewiaini54@gmail.com', 'Jl. Tanah Pasir Rt 018 Rw 07 No.34. Penjaringan, Jakarta Utara', '083890040616', './upload/IMG_20171110_132005_691.jpg', '0', 3, 39),
(35, '3325140700', 'Noer Azizah', 'Kimia', 'noerazizah3@gmail.com', 'jalan sultan agung bekasi barat', '085776315823', './upload/IMG_2017-09-08-17-39-40-237-1.jpg', '0', 3, 52),
(36, '3315163483', 'Miptah Paridi', 'Pendidikan Kimia', 'miftahparidi28@gmail.com', 'Jalan gaga utama No.11 Rt 005 Rw 009 Kelurahan Semanan Kecamatan Kalideres Jakarta Barat', '081287610397', './upload/IMG-20171124-WA0004.jpg', '0', 5, 261),
(37, '3315160639', 'Rizkahana Syehfia', 'Pendidikan Kimia', 'rizkahana3@gmail.com', 'Jl. H. Ten 4 no. 45 , Rt 04 Rw 06 rawamangun, Jakarta Timur', '089678789724', './upload/WhatsApp_Image_2018-02-27_at_10_38_25.jpe', '0', 5, 312),
(38, '3315160700', 'Avitasari', 'Pendidikan Kimia', 'avitasarii@gmail.com', 'jl.guru mughni gg.kembang', '081316241010', './upload/Avita.jpg', '0', 5, 285),
(39, '3315161162', 'Shinta Yuliana', 'Pendidikan Kimia', 'shintayuliana98@gmail.com', 'Jalan Kemuning IVB No 35, RT 10/06, Pejaten Timur, Pasar Minggu, Jakarta Selatan', '085780889102', './upload/1519665547881.jpg', '0', 5, 314),
(40, '3315160520', 'Ratna Sari', 'Pendidikan Kimia', 'rsratna98@gmail.com', 'Bantarkemang rt 05/07 Baranangsiang Bogor Timur', '085770208297', './upload/WhatsApp_Image_2018-02-27_at_10_38_26.jpe', '0', 5, 309),
(41, '3315160055', 'Farisa Riyani', 'Pendidikan Kimia', 'farissariyani@gmail.com', 'Pedurenan Jl.Bersama Rt 02/05 No 43 Jatiluhur Jatiasih Bekasi', '089517311237', './upload/IMG-20180227-WA0000.jpg', '0', 5, 294),
(42, '3315160775', 'Rizka Dwie Suci Wulandari', 'Pendidikan Kimia', 'dwierizka@gmail.com', 'Kelapadua, Jl Tebing no 6 Rt 004/007 Pasir Gunung Selatan, Cimanggis, Depok', '089580461162', './upload/WhatsApp_Image_2018-02-27_at_10_43_08.jpe', '0', 5, 311),
(43, '3315160575', 'Vivi Oktaviani', 'Pendidikan Kimia', 'vivioktaviani99@gmail.com', 'jalan peninggaran raya rt09/09 no 61 kebayoran lama jakarta selatan', '081385701748', './upload/Screenshot_2018-02-26-20-06-20-34.png', '0', 5, 317),
(44, '3315165487', 'MeidyAhsani Putri', 'Pendidikan Kimia', 'meidyahsani@gmail.com', 'jl. Jatibaru Rt.14 RW 006 Desa tanjungsari, Cikarang Utara, Kab. Bekasi, Jawa Barat', '081281410821', './upload/IMG20171108113847.jpg', '0', 5, 300),
(45, '3315160803', 'Fadhillah Arifin', 'Pendidikan Kimia', 'arifin.fadhillah@gmail.com', 'Jl.Remaja RT001/01 No.33 Kelurahan Ceger Kecamatan Cipayung Jakarta Timur', '082111528929', './upload/DSC_0199.JPG', '0', 5, 292),
(46, '3315165343', 'Ekarisa Majanur', 'Pendidikan Kimia', 'eckarisa@gmail.com', 'Jln Pemuda 3A', '081314949193', './upload/IMG_20180227_103059.jpg', '0', 5, 253),
(47, '3315162377', 'Tahra Anisa Fatin', 'Pendidikan Kimia', 'tahra.anisa@gmail.com', 'Jl. IPN Kebon Nanas Rt 09 rw 006 Cipinang Besar Selatan, Jatinegara Jakarta Timur', '081236299555', './upload/IMG_20180227_102912.jpg', '0', 5, 278),
(48, '3315160416', 'Wahdiyati Laisa Ajeng Pratiwi', 'Pendidikan Kimia', 'wahdiyatilaisa7@gmail.com', 'Jalan Kapuk Kebon Jambu RT 008/01 Kapuk,Cengkareng,Jakarta Barat', '083895550803', './upload/IMG20171108111327.jpg', '0', 5, 461),
(49, '3315160257', 'RIFA SEPTIYANI', 'PENDIDIKAN KIMIA', 'rifa.septiyani@gmail.com', 'Jalan jatijajar 2 rt 01 rw 08 kecamatan tapos kota depok', '085945472612', './upload/rifa_septiyanii_2.jpg', '0', 5, 310),
(50, '3325160209', 'IBNU MASUD MAULIDINA', 'KIMIA', 'IBNUMASUDMAULIDINA@YAHOO.COM', 'JALAN PAHLAWAN KOMARUDIN 2, RT. 011/05 NO. 97, PENGGILINGAN, CAKUNG, JAKARTA TIMUR', '085709264770', './upload/FOTO.jpg', '0', 5, 320),
(51, '3325165213', 'MUHAMMAD ARKENT SHANGKARA', 'KIMIA', 'ARKENT9BIL2013@GMAIL.COM', 'JL. W.R.SUPRATMAN NO.16 RT01/RW01 PONDOK RANJI, CIPUTAT TIMUR, TANGERANG SELATAN', '08567011170', './upload/IMG-20180226-WA0003.jpg', '0', 5, 348),
(52, '3325160021', 'ESNAWAN WIBISONO', 'KIMIA', 'WESNAWAN@GMAIL.COM', 'JL. ANGGUR 3 BLOK B 11/05 RT 008 / RW 010 GRAHA INDAH, BEKASI SELATAN', '089604419908', './upload/1519224366111.jpg', '0', 5, 318),
(53, '3325163515', 'Dewi Septianingtyas', 'Kimia', 'septianingtyas.dewi@gmail.com', 'Jl. Gama 2 Blok C1 RT006/05, No.5, Duren Jaya, Bekasi Timur', '081316330537', './upload/IMG_20180226_193013-iloveimg-compressed.j', '0', 5, 345),
(54, '3325160260', 'Niken Kurnia Liman', 'Kimia', 'nikenkurnia24@gmail.com', 'Cipondoh Makmur Blok C1/10 RT.006 RW.004', '085774286794', './upload/Pas_Foto_Jas_Lab.jpg', '0', 5, 321),
(55, '3325160768', 'Bryan Valentino', 'Kimia', 'bryan.valentino98@outlook.com', 'PPA Jatiasih indah Blok C9/384, Jatiasih, Kota Bekasi', '08997481052', './upload/bryan.jpg', '0', 5, 326),
(56, '3315160636', 'Dina Fauziyah', 'Pendidikan Kimia', 'inonkdina@gmail.com', 'Komplek Puspiptek Blok III J no.9, Setu, Tangerang Selatan', '082211347340', './upload/IMG_20180227_091823.jpg', '0', 5, 290),
(57, '3315161543', 'Novan Ricky Santoso', 'Pendidikan Kimia', 'novanrickysantoso@gmail.com', 'Jln. Asgo 1, RT 011/003, No. 28A. Kel. Rambutan, Kec. Ciracas, Jakarta Timur', '089630891258', './upload/IMG_20160721_110009.jpg', '0', 5, 303),
(58, '3315161750', 'Cindy Ermantia Annisa', 'Pendidikan Kimia', 'cindy.ermantia@gmail.com', 'Kav. DKI blok D1 nomor 35', '085750406234', './upload/1490402999437.jpg', '0', 5, 288),
(59, '3315162559', 'Nur Wakhid Hasyim', 'Pendidikan Kimia', 'wakhidhsym@gmail.com', 'jl Jambu II RT 03/02 no 80 Cipedak, Jagakarsa, Jak-Sel', '083806006132', './upload/P_20171123_223519_p_1.jpg', '0', 5, 268),
(60, '3315160427', 'I Gusti Putu Anom Kresna Wardhana', 'Pendidikan Kimia', 'anomkresna21@gmail.com', 'Komplek 201, Jl. Cendrawasih II Blok A2 RT 04 RW 14 NO 09 Kel. Sukamaju baru Kec. Tapos kota Depok P', '082213307853', './upload/Pas_Foto_Anom.jpg', '0', 5, 297),
(61, '3315160224', 'Dian Fitriani', 'Pendidikan Kimia', 'dianfitriani1101@gmail.com', 'Jl. Kenari Asri II A 17 No. 11 A Villa Tangerang Elok Pasar Kemis, Kab. Tangerang', '085777345246', './upload/IMG-20180227-WA0015.jpg', '0', 5, 289),
(62, '3315161075', 'Vhya Syahkuan-za', 'Pendidikan Kimia', 'vsyahkuanza@gmail.com', 'Taman Griya Kencana Blok C 7 No.2 Kelurahan Kencana Kecamatan Tanah Sareal - Kota Bogor 16167', '085711029370', './upload/IMG-20180227-WA0017.jpg', '0', 5, 462),
(63, '3315160236', 'Bella Indra Safera', 'Pendidikan Kimia', 'bellasafera22@gmail.com', 'jalan ikan mas no.16, rt.002, rw.016, kel. kedungwaringin, kec. Tanah Sareal, Cimanggu, Kota Bogor, ', '087770160756', './upload/PicsArt_02-27-01_26_41.jpg', '0', 5, 287),
(64, '3325140698', 'Eka Puji Astuti', 'Kimia', 'ekapujiastti@gmail.com', 'Jl.Buni No.61 Munjul, Cipayung', '085890948874', './upload/Untitled-4_copy.JPG', '0', 3, 43),
(65, '3315160771', 'Anggie Nurfilaely Fauziah', 'Pendidikan Kimia', 'anggienurfilaely12@gmail.com', 'jalan setia 1, gang muttaqin 3 No 54 Rt 005/012, Jatiwaringin, Pondok Gede, Bekasi', '089688553719', './upload/IMG-20180226-WA0014.jpg', '0', 5, 463),
(66, '3315161562', 'Rahma Paramitha', 'Pendidikan Kimia', 'rahmapmitha@gmail.com', 'Jalan Raden Fatah Gg . H. Abdullah , Parung Serab, Ciledug, Kota Tangerang', '085780231156', './upload/IMG_20180227_135515.jpg', '0', 5, 308),
(67, '3315161564', 'NIKE CRISTINA', 'PENDIDIKAN KIMIA', 'nikecristina8@gmail.com', 'jalan j rawasari no.30', '082298479287', './upload/IMG_20170307_150711.jpg', '0', 5, 302),
(68, '3325160590', 'Devi Indrawati Syafei', 'Kimia', 'deviindrawati988@gmail.com', 'Jl. Pemuda 3 RT 07/01 no.28 Rawamangun', '082141280923', './upload/IMG_20180214_202550.jpg', '0', 5, 324),
(69, '3315162724', 'M. Ashari Maghful', 'Pendidikan Kimia', 'ashari.maghful@gmail.com', 'Jl. Asri No.15 Rt. 10 Rw. 07 Halim Perdana Kususmah, Makasar, Jakarta Timur', '089530335648', './upload/DSC_0803.jpg', '0', 5, 260),
(70, '3325141800', 'Rofhi Datul Ulfa', 'Kimia', 'rofhidatululfa.17@gmail.com', 'jl. Sawah Barat Dalam 2 RT 01/ RW 06 NO. 305 Pondok Bambu, Jakarta Timur', '085716994693', './upload/IMG_20171110_121402.jpg', '0', 3, 59),
(71, '3325141794', 'Fadhil Hisyam Murtadha', 'Kimia', 'fadhilhisyam17@gmail.com', 'Jl. Mantang blok M gg.3 no.18 rt.008/07, kec. Koja, Jakarta Utara', '08998211335', './upload/Fadhil_H__M_.jpeg', '0', 3, 46),
(72, '3325143686', 'Arie Restu Nurhidayani', 'Kimia', 'ar.nurhidayani@gmail.com', 'Jl. Kencana 7, Perum.Griya asri 2 blok G7 No.12A, Rt11/Rw26. Kel. Sumber Jaya, Kec. Tambun Selatan, ', '087804216230', './upload/foto_(1).jpg', '0', 3, 34),
(73, '3315151052', 'Novita Lutfi Kurniawati', 'Pendidikan Kimia', 'novitalutfi.nl@gmail.com', 'Vila Mutiara Cikarang Blok H13 no 11 Cikarang selatan Kabupaten Bekasi', '089625265523', './upload/Pas_foto.jpg', '0', 4, 188),
(74, '3315151603', 'Dyah Ayu Pratiwi', 'Pendidikan Kimia', 'dyahayupratiwi78@gmail.com', 'Perum Telaga Murni D 16/46. Cikarang Barat - Bekasi', '081282388930', './upload/tiwi_3x4.jpg', '0', 4, 177),
(75, '3315150381', 'lintang rizkyta ananda', 'Pendidikan Kimia', 'lintangrizkyta21@gmail.com', 'jalan otto iskandar dinata kampung tarikolot Rt.01/RW.09 kecamatan rangkasbitung, kabupaten lebak, B', '08988937727', './upload/46_34_4_m+biru_copy.jpg', '0', 4, 182),
(76, '3315151239', 'Abimanyu Harleningjawi Tjitrohendra Utomo', 'Pendidikan Kimia', 'emailmanyu@gmail.com', 'Jl. Batu Ampar V RT.04/05 No.16 Kramat Jati', '085959696565', './upload/3x4.jpg', '0', 4, 167),
(77, '3315150742', 'NOVIA RAHMAYANTI', 'PENDIDIKAN KIMIA', 'noviarahmayanti27@gmail.com', 'Jalan H. Taiman Ujung Z1 Rt 006/04 No.21 Kel. Tengah Kec. Kramat Jati Jakarta Timur 13540', '087823112059', './upload/Novia_Rahmayanti_(1).jpg', '0', 4, 187),
(78, '3315152283', 'Annisa Aulia Harmin', 'Pendidikan Kimia', 'annisaharmin@gmail.com', 'Jl. Gondangsari Rt/rw 015/09 Kalisari, Pasar Rebo, jakarta Timur', '087709850757', './upload/IMG_20160919_212611.jpg', '0', 4, 208),
(79, '3315151504', 'Siti Aisah', 'Pendidikan Kimia', 'sitiaisah.67sa@gmail.com', 'jalan narogong sakti VII Blok F17 No 15 Bekasi Timur', '081284802848', './upload/SITI_AISAH-1.jpg', '0', 4, 197),
(80, '3315150597', 'Widia Purwaningsih', 'Pendidikan Kimia', 'widiapurwaningsih5@gmail.com', 'kp. utan rt 004/02 jaka setia bekasi selatan', '081280347191', './upload/Widia_Purwaningsih_PKA15_3315150597.jpg', '0', 4, 203),
(81, '3315150810', 'Marchia Marthalena Marintan', 'Pendidikan Kimia', 'marmarchi41@gmail.com', 'Perum Permata Timur 2 blok BB no 7, Bekasi', '087887706565', './upload/01.jpg', '0', 4, 183),
(82, '3315150808', 'Devina Dwi Astari', 'Pendidikan Kimia', 'devinaastarikerokittypoyococo9@gmail.com', 'Jalan Inpres 19 rt 002/09 no.60 Larangan Selatan', '085933211792', './upload/IMG_20171201_120637.jpg', '0', 4, 176),
(83, '3315140681', 'Abdul Latif', 'Pendidikan Kimia', 'tilayabdul@gmail.com', 'Jl. Penggilingan Rt 008/06 Cakung Jakarta Timur', '081222505675', './upload/IMG_20170420_113149.jpg', '0', 3, 65),
(84, '3315151613', 'nadhirah Isnaenia', 'Pendidikan Kimia', 'nadhirahisnaenia@gmail.com', 'Jalan duren tiga selatan rt 005/02', '08989581842', './upload/IMG-20180227-WA0017_(1).jpg', '0', 4, 185),
(85, '3315143679', 'Amalia Dwi Kurnia', 'Pendidikan Kimia', 'adwikurnia5@gmail.com', 'Kp. Jatibulak Rt 06/01. Jalan Cempaka 2. Kel. Jatimulya Kec. Tambun Selatan Kab. Bekasi', '085814600087', './upload/e95347c1-3397-4023-a91d-e82c0bce0d9a.JPG', '0', 3, 464),
(86, '3315153513', 'Nurmayanti Chodijah', 'Pendidikan Kimia', 'nurmayantichodijah3@gmail.com', 'Griya Asri 2 blok j 26 no 52, Tambun Selatan, Bekasi', '088212528901', './upload/foto_nurma.jpg', '0', 4, 232),
(87, '3315152919', 'Kartika Puji Rahayu', 'Pendidikan Kimia', 'kartikapuji07@gmail.com', 'jl. Pemuda Asli 3, Rawamangun-Jakarta Timur', '085715407408', './upload/IMG_20180228_095101.jpg', '0', 4, 224),
(88, '3325140715', 'Nur\'an Nissa', 'Kimia', 'nuranissa398@gmail.com', 'Jl. Tanjung Pura V RT.003 RW.005 No.66 Jakarta Barat', '089635932686', './upload/Screenshot_2016-08-31-20-23-46-1.png', '0', 3, 466),
(89, '3325141798', 'Rafi Afrizal', 'Kimia', 'rafi.afrizal@gmail.com', 'Jl. HM. Sabar No.25A RT 003 RW 01 Kel. Rambutan, Kec. Ciracas Jakarta Timur 13830', '089654770877', './upload/IMG_20180228_102637.jpg', '0', 3, 465),
(90, '3315143683', 'Erica Ika Sulistyani', 'Pendidikan Kimia', 'ericaikas@gmail.com', 'Jl. Rafika RT.006 RW.012 No.55 Pancoran Mas. Depok', '085817940624', './upload/2018-02-28_06_01_45_1.jpg', '0', 3, 112),
(91, '3315153750', 'Difla Rahmah M', 'Pendidikan Kimia', 'diflarm5@gmail.com', 'Komp.Deppen Jl.Media III blok AC 19 Rt/Rw 002/016 Sukatani Tapos Depok', '089561397470', './upload/Rahmaniah_difla.jpg', '0', 4, 215),
(92, '3315153012', 'Fajar Indah Pertiwi', 'Pendidikan Kimia', 'findahp354@gmail.com', 'Kp. Tanah Merah Atas gg. Dukuh No. 58 RT 006/008 Rawa Badak Selatan Koja Jakarta Utara', '085697359822', './upload/Fajar_Indah_Pertiwi.jpg', '0', 4, 219),
(93, '3315152935', 'Elisabet Anantia', 'Pendidikan Kimia', 'elisabetanantia@gmail.com', 'jalan sinar asih I D no.184', '081280478097', './upload/34589.jpg', '0', 4, 218),
(94, '3315152538', 'Muhamad Nur Kholis', 'Pendidikan Kimia', 'muhnurkholis12@gmail.com', 'Serang, Banten', '081287493351', './upload/Photo_-_Copy.jpg', '0', 4, 228),
(95, '3325151513', 'MUHAMAD MULYADI', 'KIMIA', 'mulyadimuhamad6@gmai.com', 'Jl. Damai Raya No.5 RT 001 RW 02 Petukangan Selatan, Pesanggrahan, Jakarta Selatan', '083877442243', './upload/IMG-20180228-WA0036.jpg', '0', 4, 146),
(96, '3315153162', 'Rani Wahyuningsih', 'Pendidikan Kimia', 'raniwningsih@gmail.com', 'Jl. Siaga E No 210 Sepanjang Jaya Rawa Lumbu Bekasi Timur', '085819065856', './upload/1490831598690.jpg', '0', 4, 235),
(97, '3315153156', 'Dian Styariyani', 'Pendidikan Kimia', 'dianstyariyani@gmail.com', 'Jl. Raya Kapin Gg. Rambutan I No. 79 RT 11/08 Pondok kelapa, Jakarta Timur', '083871896061', './upload/pasfotom.jpg', '0', 4, 214),
(98, '3315152054', 'Windha Utari', 'Pendidikan Kimia', 'windha.utari18@gmail.com', 'Jl. Harmet RT. 10/007 No. 64 Pekayon, Pasar Rebo Jakarta Timur', '081908187205', './upload/foto_(2).jpg', '0', 4, 243),
(99, '3315154435', 'Rainy Suluya', 'Pendidikan Kimia', 'rainysuluya51@gmail.com', 'gang masjid rt 02/02, Kaliabang Tengah, Bekasi Utara', '085885101216', './upload/IMG-20180228-WA0000.jpg', '0', 4, 467),
(100, '3315152374', 'Bestiana Desti', 'Pendidikan Kimia', 'bestianadesti12@gmail.com', 'jalan gunung tambora raya no:6 pinang - kota Tangerang', '083813967461', './upload/foto_besti.jpg', '0', 4, 211),
(101, '3315153288', 'Rifka Aprilliana', 'Pendidikan Kimia', 'rifka.aprilliana@outlook.com', 'jalan satu maret RT oo9 RW 04 kelurahan-pegadungan kecamatan-kalideres Jakarta Barat', '085894312610', './upload/IMG-20160511-WA0013.jpg', '0', 4, 236),
(102, '3325143690', 'Hary Setyo Briantomo', 'Kimia', 'hary.setyo@yahoo.co.id', 'JL. Pinang Ranti 2 RT 11/ RW 01 nomer 74, Makasar, Jakarta Timur', '081230091916', './upload/IMG-20171109-WA0004.jpg', '0', 3, 49),
(103, '3315154623', 'Rifkah Nabilah', 'Pendidikan Kimia', 'nabila.rifkah@gmail.com', 'Jl. Bangka 2G No. 39 RT.007 RW.03, Jakarta Selatan', '085847657800', './upload/3X41.jpg', '0', 4, 237),
(104, '3315153031', 'Siti Nurhasanah', 'Pendidikan Kimia', 'sitinurhasanah28@gmail.com', 'Jl. Damai No. 43 Srengseng Sawah, jagakarsa, jakarta Selatan', '081519544375', './upload/1487661717197.jpg', '0', 4, 238),
(105, '3325151769', 'Annisaa Endah Wijianti', 'Kimia', 'ansendah@gmail.com', 'Jalan H.Poleng No: 08 pondok aren, jurang mangu barat, tangerang selatan', '083871128370', './upload/IMG-20180228-WA0041.jpg', '0', 4, 132),
(106, '3325151607', 'Fitriana Dewi', 'Kimia', 'fitridewi1097@gmail.com', 'perum telaga murni blok E12A/30 cikarang barat, bekasi', '085772129115', './upload/IMG-20171205-WA0014.jpg', '0', 4, 138),
(107, '3325151392', 'Dilma Punama Ubit', 'Kimia', 'purnama.dilma@gmail.com', 'jalan bhakti no 19 cilandak timur, pasar minggu, jakarta selatan', '085810584071', './upload/1519780524596.jpg', '0', 4, 134),
(108, '3325152404', 'Egie Julio', 'Kimia', 'egiejulio@gmail.com', 'Jalan Gunung Raya no.65 RT 05 RW 011 Kelurahan Cireundeu, Kecamatan Ciputat Timur, Kota Tangerang Se', '081382702934', './upload/IMG-20180228-WA0019-01.jpeg', '0', 4, 137),
(109, '3325150368', 'Mochamad Ridho Fuazi', 'Kimia', 'fuazi.ridho@gmail.com', 'Jalan Rawamangun Muka Barat RT 009/RW 012 no.6D Rawamangun, Pulogadung, Jakarta Timur 13220', '083871538504', './upload/IMG-20180228-WA0009-01.jpeg', '0', 4, 144),
(110, '1303617019', 'SHELYANA TAURUS FITA', 'PENDIDIKAN KIMIA', 'shelyyana58@gmail.com', 'Perumahan Cikande Permai Blok G2/17, Serang-Banten', '081808908332', './upload/SHELYANA_TAURUS_F_(1).jpeg', '0', 6, 424),
(111, '1303617002', 'ELIANA RIANI', 'PENDIDIKAN KIMIA', 'elianariani@gmail.com', 'Jl. Delima IV gg. 1 No. 36 RT 018/03 Perumnas Klender, Jakarta Timur', '082298291343', './upload/PicsArt_02-27-05_26_02.jpg', '0', 6, 361),
(112, '1303617012', 'Narmada Putri Keransz', 'Pendidikan Kimia', 'nmd.keransz@gmail.com', 'Vila Ilhami, Jalan Mina Raya II Blok J3 No 9, Karawaci, Tangerang', '087808200988', './upload/Foto_Lab-1.jpg', '0', 6, 369),
(113, '1303617071', 'ILMI ZAKIAH AMALIA', 'PENDIDIKAN KIMIA', 'ailmizakiah@gmail.com', 'JALAN TARUNA JAYA, GG.BRONANG RT.004 RW.013 NO. 22C CIBUBUR-CIRACAS-JAKARTA TIMUR', '087889466685', './upload/ILMI.jpg', '0', 6, 365),
(114, '1303617022', 'FATHIYAH RIZKI HARLIANTI', 'PENDIDIKAN KIMIA', 'fathiyah090599@gmail.com', 'Perum. Taman Persada Blok A17 No. 8 RT 002 RW 010, Cibarusah, Bekasi, Jawa Barat', '085781261263', './upload/PhotoGrid_1519823969361.jpg', '0', 6, 363),
(115, '1303617073', 'Rahma Komala Dewi', 'PENDIDIKAN KIMIA', 'komala.rahma@gmail.com', 'Komp. Ditbekangad Jl. Gati III RT 04/ RW 05 No. 52 Cibinong Bogor', '081298441614', './upload/RAHMA_KOMALA_DEWI.jpg', '0', 6, 417),
(116, '1303617047', 'Rizki Ameilia Lubis', 'Pendidikan Kimia', 'rizkiameilial@gmail.com', 'Jl. Pengasinan RT 04/RW 03 No.58 Sawangan- Depok', '083871146915', './upload/RIZKI_AMELIA_L.jpeg', '0', 6, 420),
(117, '1303617062', 'Eis Tria Ningrum', 'PENDIDIKAN KIMIA', 'eistria98@gmail.com', 'jl. Tampuk Pinangpura kel. Kacang Pedang Kec. Gerunggang', '082176945715', './upload/EIS_TRIA_NINGRUM.jpeg', '0', 6, 400),
(118, '1303617035', 'Kristina Fitry Sitanggang', 'PENDIDIKAN KIMIA', 'kristinafitry20@gmail.com', 'Jl Kolonel Liberty Malau Tarutung', '081262135380', './upload/KRISTINA_FS.jpg', '0', 6, 408),
(119, '1303617013', 'Salsabilla Aurani', 'PENDIDIKAN KIMIA', 'Salsabillaaurani24@gmail.com', 'Perumahan Griya Yasa Lestari Blok B4 No 8 Bojonggede, Bogor, Jawa Barat', '085771347608', './upload/SALSABILA_AURANI.jpeg', '0', 6, 421),
(120, '1303617009', 'Bintang Phylosophie', 'PENDIDIKAN KIMIA', 'bintangphy@gmail.com', 'Jl. Balai Pustaka I No.6 Rawamangun', '085920673479', './upload/BINTANG_PHYLOSOPHIE.jpeg', '0', 6, 396),
(121, '1303617074', 'Desiawati Mary Pangestu', 'Pendidikan Kimia', 'desiawatimary19@gmail.com', 'Jl. Kemang Raya. Kota Depok', '089635543161', './upload/20171212_123625.jpg', '0', 6, 358),
(122, '1303617051', 'Nurul Chandra Waskitaningtyas', 'Pendidikan Kimia', 'ncwcw17@gmail.com', 'Jl. Nakula rt 03/08 n0.8 Kel. Harjamukti Kec. Cimanggis Depok', '085693216675', './upload/NURUL_CHANDRA_WASKITANINGTYAS.jpg', '0', 6, 415),
(123, '1303617026', 'Rizaldi Fikri Ramadhan', 'Pendidikan Kimia', 'rizaldif1@gmail.com', 'Jl. Bekasi Timur IV no.41 rt 002/007 Jatinegara, Jakarta Timur', '081316528395', './upload/RIZALDI_FIKRI_R.jpeg', '0', 6, 419),
(124, '1303617032', 'RAISYAH AYU R A ARSAD', 'PENDIDIKAN KIMIA', 'raisyahayu99@gmail.com', 'Jl. Daksinapati Timur 2 no. 22', '081355773723', './upload/1513174758656.jpg', '0', 6, 373),
(125, '1303617078', 'Dinda Labibah Sani', 'Pendidikan Kimia', 'sketsadinda@gmail.com', 'Kota Wisata Cluster Toronto YB 2 No.11, Limusnunggal, Cileungsi', '089696052767', './upload/d1nda.jpg', '0', 6, 359),
(126, '3315140695', 'Diah Hidayatul Khusna', 'Pendidikan Kimia', 'khusna1312@gmail.com', 'Jl. haji ten IV Rt 06/ Rw 01 9A Rawamangun Pulogadung Jakarta Timur', '085887476660', './upload/IMG_20171116_104759.jpg', '0', 3, 77),
(127, '1303617046', 'Salsabila Luthfiyah', 'Pendidikan KImia', 'salsa.luthfiy@gmail.com', 'Puri Harapan Blok D5 No. 26, Setia Asih, Tarumajaya, Bekasi Utara.', '081284024424', './upload/Salsabila_Luthfiyah.jpg', '0', 6, 377),
(128, '1303617070', 'Kurnia Ika Cahyarani', 'Pendidikan Kimia', 'kurniaikaac@gmail.com', 'Perumahan Ciluar Asri Blok A2/5 RT07/009 Ciluar, Bogor Utara, Bogor', '085723464894', './upload/KURNIA_IKA_CAHYARANI-01.jpeg', '0', 6, 366),
(129, '1303617040', 'Ega Yodela', 'Pendidikan Kimia', 'ega.yodela@gmail.com', 'Perumahan Taman royal 3 cluster akasia 2 blok AS 11/11 Tangerang', '081287287414', './upload/IMG-20180227-WA0011.jpg', '0', 6, 360),
(130, '1303617023', 'Sugihharti', 'Pendidikan Kimia', 'harti_sugih@yahoo.co.id', 'Jalan Skip Ujung Rt 002 Rw 007 No.14', '087885646089', './upload/3x42.jpg', '0', 6, 381),
(131, '1307617012', 'Mega Gladiani Sutrisno', 'Kimia', 'megagladiani99@gmail.com', 'Bumi Pasarkemis Indah Blok H1/11 RT 07/02 kec Pasarkemis kab.Tangerang prov.Banten 15560', '085280379269', './upload/MEGA_G.JPG', '0', 6, 448),
(132, '1303617024', 'Sarah Hanani', 'Pendidikan Kimia', 'sarahhanani17@gmail.com', 'Jl. H. Disan No.97 RT 002/007 Kel. Srengseng Sawah Kec. Jagakarsa Jakarta Selatan 12640', '088210942163', './upload/Webp_net-resizeimage_(1).jpg', '0', 6, 378),
(133, '1303617010', 'liza erliana', 'Pendidikan Kimia', 'lizaerliana23@gmail.com', 'jalan pemuda asli 1', '085366193020', './upload/Liza_Erliana_-_1303617010.jpg', '0', 6, 385),
(134, '3315140688', 'Winda Eka Pratiwi', 'Pendidikan Kimia', 'windapratiwi17@gmail.com', 'Jalan tanah pasir RSB Blok i, Jakarta Utara', '081280946793', './upload/IMG-20171112-WA0004.jpg', '0', 3, 468),
(135, '3325152464', 'Hafiza Muslimah', 'Kimia', 'hafizamuslimah86@gmail.com', 'jl kramat no 39 rt 004 rw 02 lubang buaya, cipayung, jakarta timur 13810', '085695712416', './upload/IMG_20171206_070323.jpg', '0', 4, 139),
(136, '3315141720', 'Meri Shintya', 'Pendidikan Kimia', 'merishintya@gmail.com', 'medang lestari', '085776808895', './upload/image1.jpeg', '0', 3, 118),
(137, '3315150075', 'Wahyuni Putri', 'Pendidikan Kimia', 'Wahyunip23@gmail.com', 'Jl. harapan Indah X no 95A 10/05 Pangkalan jati III Makasar Cipinang Melayu Jakarta Timur', '081384676993', './upload/1519953253028.jpg', '0', 4, 202),
(138, '3325163372', 'Anita Nur Octavia', 'Kimia', 'anitanuroctavia41@gmail.com', 'Jl. Camar No.9 RT/RW:03/07 Kel. Jatiraden Kec. Jatisampurna Kota Bekasi', '085714509214', './upload/1473325966011.jpg', '0', 5, 344),
(139, '3315141727', 'Annisa Heldiana', 'Pendidikan Kimia', 'annisa.heldiana@yahoo.com', 'Jalan Delima Jaya No.10 Rt 02/08 Kp.Setu Rempoa Tangerang Selatan', '085811853138', './upload/IMG-20180302-WA0007.jpg', '0', 3, 107),
(140, '3315140693', 'Shabrina Nur Fitriningsih', 'Pendidikan Kimia', 'shabrinanurf@gmail.com', 'Jl. flores 3 mutiara gading timur F4/15 Bekasi', '08562257769', './upload/IMG_20161208_094100.jpg', '0', 3, 93),
(141, '3315162506', 'Fitri Sumalia Dewi', 'Pendidikan Kimia', 'fitrisumaliaaa@gmail.com', 'perumahan taman alamanda blok d4 no 18 karangsatria tambun utara', '089502104240', './upload/P_20170328_130338_1_1.jpg', '0', 5, 254),
(142, '3315163223', 'Rizki saputri', 'Pendidikan Kimia', 'rizkisaputri14@gmail.com', 'Reni Jaya Blok G9 No. 4 Pondok Petir, Bojongsari, Depok', '081511093919', './upload/2017-11-25_09_40_36_1.jpg', '0', 5, 273),
(143, '3315162374', 'Laila Eki Rahayu', 'Pendidikan Kimia', 'lailaeki99@gmail.com', 'Perumahan Pesona Gading Blok L3 no 55, Cibitung, Bekasi', '088213086981', './upload/laila_eki_rahayu.jpg', '0', 5, 258),
(144, '3315165477', 'Sarifatul Zulfah', 'Pendidikan Kimia', 'sarifatulzulfah14@gmail.com', 'Komp. LP Klas I Jl. Moh. Yamin I 004/004 no. 34 Babakan, Tangerang', '087889927275', './upload/IMG_8569.JPG', '0', 5, 276),
(145, '3315163945', 'Nurhasanah Nurul Ratnasari', 'Pendidikan Kimia', 'nurul.cookies@gmail.com', 'jl. Pulo Sirih Timur 2 CA/21 Taman Galaxy Indah', '081286276722', './upload/MAKEUP_20160811203928_save.jpg', '0', 5, 269),
(146, '3315163529', 'sela nur avivah', 'Pendidikan Kimia', 'nuravivahsela@gmail.com', 'jalan bojong pulo Rt.09/04 no.173 rawa buaya, cengkareng, jakarta barat', '089530536786', './upload/IMG_20180301_225300.jpg', '0', 5, 277),
(147, '3315161560', 'Hati Jelita', 'Pendidikan Kimia', 'hatijelita@gmail.com', 'Jl.F RT002/05 No.22, Kelapa Dua, Kebon Jeruk, Jakarta Barat', '085719763100', './upload/PicsArt_02-27-08_50_46.jpg', '0', 5, 256),
(148, '3315162802', 'Tinne Okta Triani Putri', 'Pendidikan Kimia', 'tinneoktaa@gmail.com', 'Puri Nirwana 1 Blok N No.23 RT 03 RW 16 Pabuaran, Cibinong, Bogor', '087776315133', './upload/4x6_n_-_Copy.jpg', '0', 5, 280),
(149, '3315164506', 'Aulia Dian Martha', 'Pendidikan Kimia', 'auliamartha@gmail.com', 'Jl. Tumenggung Wiradiredja Puri Babakan Sakinah no.21, RT 4 RW 9, Cimahpar, Bogor, Jawa Barat', '081386789343', './upload/IMG-20180302-WA0021.jpg', '0', 5, 246),
(150, '3315163146', 'Chika Annisa Noviarni', 'Pendidikan Kimia', 'chikannisa24@gmail.com', 'Jl. Makmur No.02 Rt.03 Rw.07 Lubang buaya, Cipayung, Jakarta Timur', '081284930952', './upload/20171124_074903.jpg', '0', 5, 247),
(151, '3315162149', 'Dewi Larasati', 'Pendidikan Kimia', 'dewi.larasati0997@gmail.com', 'Jl. Puspa 1 RT 012/006 No:2A Kel : UKS Kec : Matraman Jak-Tim 13120', '081287424303', './upload/IMG_20180227_085012.jpg', '0', 5, 469),
(152, '3325162270', 'Natalia Christina', 'Kimia', 'nataliachristina95@ymail.com', 'Vila Mahkota Pesona blok ii1 no 63 RT/RW 10/25, Bojong Kulur,Gn.Putri,Kab.Bogor', '085813431253', './upload/2016-03-10_21_13_24.jpg', '0', 5, 338),
(153, '3315153267', 'Elis Nidaliana', 'Pendidikan Kimia', 'enidaliana@gmail.com', 'Jalan H. Radin, Kelurahan Petukangan Utara, Kecamatan Pesanggrahan, jakarta selatan', '081384224353', './upload/IMG_20180302_100549.jpg', '0', 4, 217),
(154, '3315161026', 'Marini A.F Sianipar', 'Pendidikan Kimia', 'anggythafivani98@gmail.com', 'jalan murdai 1 Jakarta Pusat', '085252954800', './upload/20180227_101509.jpg', '0', 5, 299),
(155, '3325162818', 'Mila Alawiyah', 'Kimia', 'milalawiyah07@gmail.com', 'Komp. Kelapa Gading Blok C7 KSB', '089666757132', './upload/IMG-20180302-WA0005.jpg', '0', 5, 470),
(156, '3325160790', 'Sakiro Widya Silvani', 'Kimia', 'sakirowidyasilvani@gmail.com', 'desa jagapura wetan kec gegesik kab cirebon', '083898537261', './upload/13301520_962099920577785_3781203047526214', '0', 5, 327),
(157, '3325153160', 'Amir Mahmud', 'Kimia', 'amirmahmud.edu@gmail.com', 'Jalan Kampung Pulo RT 07 RW 05 Kelurahan Pinang Ranti Kecamatan Makasar, Jakarta Timur', '08158022412', './upload/IMG-20180302-WA00071.jpg', '0', 4, 131),
(158, '3325153505', 'Driyo Sumbogo', 'Kimia', 'driyosumbogo0512@gmail.com', 'jalan Bintara VI Rt.03/06 No.271 Bintara, Bekasi Barat', '081314378787', './upload/IMG-20180302-WA0008.jpg', '0', 4, 136),
(159, '3315141726', 'Nashir Abdul Latif', 'Pendidikan Kimia', 'nashiralam28@gmail.com', 'Jl. Mangga No 22 Beji Depok', '083871395017', './upload/unnamed.png', '0', 3, 471),
(160, '3315154285', 'Maulana Latif', 'Pendidikan Kimia', 'maulanalatif.ml@gmail.com', 'Jalan Raya Cisauk-Lapan Suradita RT 06 RW 01, Kec. Cisauk, Kab. Tangerang, Banten', '089532285613', './upload/IMG_20180305_100053.jpg', '0', 4, 227),
(161, '3315150528', 'Arum Nurannisa', 'Pendidikan Kimia', 'arumnurannisa13@gmail.com', 'jalan remaja 2 no 36, jatinegarakaum, pulogadung, jakarta timur', '083875392813', './upload/12320_(1)_(1).jpg', '0', 4, 173),
(162, '3325152977', 'Lintang Dhanasmoro', 'Kimia', 'lintang.dhana@gmail.com', 'jalan salak bawah no.27 rt 05/12 jatimekar jatiasih bekasi', '081546250967', './upload/IMG-20180228-WA0020_(1).jpg', '0', 4, 142),
(163, '3325152166', 'Aulia Al Azizi', 'kimia', 'aulia.alazizi@gmail.com', 'jalan daksinapati timur 2, rawamangun jakarta timur', '081291084744', './upload/IMG-20180228-WA0003.jpg', '0', 4, 133),
(164, '3315151954', 'Isti Indriyani', 'Pendidikan Kimia', 'indristi21@gmail.com', 'Komp.DKI Blok G3/14. RT 018/ RW 002. Pondok Kelapa', '085884440136', './upload/99,_new.jpg', '0', 4, 180),
(165, '3315151439', 'Ajeng Mutiasari Oktavia', 'Pendidikan Kimia', 'ajengmutiasarioktavia@yahoo.co.id', 'Jalan Sawo Kecik V Bukit Duri Tebet Jakarta Selatan', '089603820952', './upload/Ajeng????Hafidzah_20180210_194858_1.jpg', '0', 4, 170),
(166, '3315150764', 'Ai Kartini', 'Pendidikan Kimia', 'aikartini1213@gmail.com', 'Jalan Kayujati V Rt/Rw 011/05, Kelurahan Rawamangun, Kecamatan Pulo gadung, Jakarta Timur', '085759263912', './upload/00000001_(6).JPG', '0', 4, 169),
(167, '3315141739', 'Adi Wicaksono', 'Pendidikan Kimia', 'wicaksonoadi07@gmail.com', 'Kp. Rawadas RT 006/03 No. 68, Kel. Pondok Kopi, Duren Sawit, Jakarta Timur', '081319884535', './upload/IMG-20171116-WA0007.jpg', '0', 3, 66),
(168, '3315150446', 'Yosua Andreas', 'Pendidikan Kimia', 'yosuaandre@rocketmail.com', 'Perumahan THB blok S7 No 12, bekasi utara', '083887813059', './upload/thumbnail_(1).jpg', '0', 4, 204),
(169, '3315151964', 'Nur Azmi Permatasari', 'Pendidikan Kimia', 'nurazmipermatasari@gmai.com', 'Jl.Ampel RT 03/RW 12 Pabuaran, Cibinong Bogor', '088211165088', './upload/j.jpg', '0', 4, 189),
(170, '3315152940', 'Iftitah Hauriyah', 'Pendidikan Kimia', 'hauriyahsofia@gmail.com', 'Kemang Ifi Graha a5 no.12 c', '085973010033', './upload/1520177411449.jpg', '0', 4, 223),
(171, '3315153846', 'Firda Nurfaida', 'Pendidikan Kimia', 'fnurfaida4@gmail.com', 'jln.raya batugede rt.04 rw.04 no.04 Bojonggede Bogor', '082133922239', './upload/IMG_5215.jpeg', '0', 4, 221),
(172, '3315150026', 'Johanes Erwin Tantaruna', 'Pendidikan Kimia', 'johaneserwin97@gmail.com', 'jl. gg maat kp.utan no.97 Cengkareng, Cengkareng Timur, Jakarta Barat , Kode Pos : 11730', '087782000938', './upload/FB_IMG_14558011584677757-1.jpg', '0', 4, 222),
(173, '1307617001', 'Tifania Putri Setyaningrum', 'Kimia', 'tifaniaps@gmail.com', 'Jl. Raya centex, gg. jengki no. 73', '085881251005', './upload/IMG-20170919-WA0000.jpg', '0', 6, 459),
(174, '3325140708', 'Firman Yulianto', 'Kimia', 'firman.yulianto30@gmail.com', 'Jalan Damai No.22A RT02 RW05 Petukangan Selatan, Pesanggrahan, Jakarta Selatan', '083878437096', './upload/20171109_133514.jpg', '0', 3, 48),
(175, '3315143667', 'Nabilla Tama Dika', 'Pendidikan Kimia', 'nabillatama@gmail.com', 'Jalan Mangga Besar 13 RT003/RW03 No: 10, Sawah Besar, Jakarta Pusat 10730', '082122681069', './upload/Nabilla_Tama_Dika.jpg', '0', 3, 476),
(176, '3325141801', 'Nufaisa Azizah', 'Kimia', 'nufaisaazizah29@gmail.com', 'Jalan Swadaya 6 RT 06 RW 13 Bojonggede, Kab Bogor', '08172324488', './upload/20171109_133901.jpg', '0', 3, 54),
(177, '1307617026', 'Ellena Giofanny m', 'Kimia', 'ellenagiofanny@gmail.com', 'Kp. Pekopen Kobra Rt 3 Rw 5 No.56', '08991018856', './upload/LINE_P20170916_070507605.jpg', '0', 6, 436),
(178, '1307617020', 'Nita Aresanti', 'Kimia', 'nitaaresanti@gmail.com', 'Kaliabang Rorotan RT 03/06 no 87 Bekasi Utara, Kota Bekasi', '085891171995', './upload/Foto_Nita_tebaru.jpg', '0', 6, 452),
(179, '1307617032', 'Devi Aliefiyardi Aulia Widowati', 'Kimia', 'devialiefiyardi22@gmail.com', 'Jalan Haji Sulaiman, Petukangan Utara, Pesanggrahan, Jakarta selatan', '083806143051', './upload/Devi_Aliefiyardi_Aulia_Widowati_-_1307617', '0', 6, 433),
(180, '1307617018', 'Fitri Nulandari', 'Kimia', 'nulandari45@gmail.com', 'Perumahan Mangun Jaya Indah 2, Jalan Camar 3 Blok E8 No. 16', '08970631414', './upload/IMG_20170919_WA0014_jpg.jpg', '0', 6, 438),
(181, '1307617034', 'MAHARANIANSKA AZZAHRA', 'KIMIA', 'maharanianskaazzahra@gmail.com', 'jalan danau belida blok c 2 no. 83, pejompongan, jakarta pusat', '081585451013', './upload/IMG_09941.JPG', '0', 6, 447),
(182, '1307617002', 'Auladina Yasyfa', 'KIMIA', 'auladinayasyfaa@gmail.com', 'jl betok III NO. 50b Jati rawamangun', '081310045936', './upload/Auladina_Yasyfa.jpg', '0', 6, 431),
(183, '1307617009', 'Diah Wahyu Istiqomah', 'KIMIA', 'diahwahyuistiqomah@gmail.com', 'Jalan Kayu tinggi Rt.003/Rw.06 kel Cakung Timur, kec. cakung, Jakarta Timur', '085780922851', './upload/Diah_Wahyu_I.jpg', '0', 6, 434),
(184, '1307617005', 'Ratna Nur Kusumawati', 'Kimia', 'ratnank99@gmail.com', 'Jalan Dakota Blok D no.16. RT/RW 06/08. bumi dirgantara permai, AURI. Jatisari-Jatiasih, Bekasi.', '089604277301', './upload/IMG_20160401_164937.jpg', '0', 6, 453),
(185, '1307617007', 'Lita Amalia Ramadhanti', 'Kimia', 'litaamalia0201@gmail.com', 'Jalan kramat selatan No.65, 001/04 kel.tengah, kec.kramat jati jakarta timur', '081286301143', './upload/LITA_AMALIA_RAMADHANTI.jpg', '0', 6, 446),
(186, '1307617004', 'Alfian Putra Utama', 'Kimia', 'alfianvanputra@gmail.com', 'Kampung Warudoyong Rt 014/Rw 008 Kelurahan Jatinegara Kecamatan Cakung Kota Jakarta Timur', '083898711231', './upload/ALFIAN_PUTRA_UTAMA.jpg', '0', 6, 429),
(187, '3315141742', 'Nuratut Alfiyah', 'Pendidikan Kimia', 'nuratutalfiyah@gmail.com', 'jalan Pemuda 3 no.14 Rawamangun Jakarta Timur', '085642624933', './upload/IMG-20171114-WA0000.jpg', '0', 3, 121),
(188, '1303617006', 'ANISA UMAYAH', 'PENDIDIKAN KIMIA', 'anisaumayah1@gmail.com', 'Jl. Raya Ceger No. 39 Rt 005 Rw 001 Kel. Ceger Kec. Cipayung Jakarta Timur', '08811185739', './upload/ANISA_UMAYAH.jpg', '0', 6, 391),
(189, '1307617019', 'Natasya Sutedja', 'Kimia', 'natasyas127@gmail.com', 'Jalan medan V, perumahan pura c7 no 37, bojong gede- bogor', '085775980242', './upload/IMG-20171115-WA0002.jpg', '0', 6, 451),
(190, '1307617021', 'Agnes Triselia Yudia', 'Kimia', 'agnes.rikta@gmail.com', 'Jl.Sulaiman gang amal 2 No. 31 Rt/Rw: 007/04', '089561578986', './upload/IMG_9412.jpg', '0', 6, 427),
(191, '1307617016', 'Ivan Fadilah', 'Kimia', 'ivfadilah98@gmail.com', 'Jl.Industri Kp.Kongsi Gg.Dahlia RT.01/08 No.67. Kec.Cikarang Utara Bekasi', '082117317568', './upload/Foto_Profil.JPG', '0', 6, 443),
(192, '1307617013', 'Annisa Auliya', 'Kimia', 'annisaauliya29@gmail.com', 'Jalan Jaha RT 012 RW 01 No. 34C, Kalisari, Pasar Rebo, Jakarta Timur', '089689512343', './upload/Annisa_Auliya.JPG', '0', 6, 430),
(193, '1307617024', 'Reza Maulana', 'Kimia', 'rezamaulana85@gmail.com', 'metro permata 1 blok k4 no 11 karang tengah', '087871042586', './upload/Reza_Maulana_-_1307617024.JPG', '0', 6, 454),
(194, '1303617069', 'MARIO ADITYA P', 'PENDIDIKAN KIMIA', 'aadityasetyo16@gmail.com', 'Jl. Swasembada Barat XXV No.60 Kb. Bawang Tg. Priok JakUt', '081310639818', './upload/MARIO_ADITYA_P.jpg', '0', 6, 411),
(195, '1303617028', 'ANDI YUSUF EFFENDI', 'PENDIDIKAN KIMIA', 'andiyusufeffendi@gmail.com', 'jl. pesantren gg. aban Rt 002/04 no 58 kreo selatan, larangan, kota tangerang, banten 15156', '081212133933', './upload/ANDI_YUSUF_EFENDI.jpeg', '0', 6, 389),
(196, '1303617056', 'AFIF AMINUDIN', 'PENDIDIKAN KIMIA', 'afifaminudin22@gmail.com', 'Perum. Taman Sentosa Blok J2 No. 12B, Sukaresmi, Cikarang Selatan', '087779188849', './upload/AFIF_AMINUDIN.jpeg', '0', 6, 386),
(197, '1303617015', 'NISA AMALIA RAHMAWATI', 'PENDIDIKAN KIMIA', 'nisaamaliaa10@gmail.com', 'jl. raya Bekasi KM.23 RT007/Rw02 Cakung Barat Cakung Jakarta Timur', '081237479270', './upload/NISA_AMALIA_RAHMAWATI.jpg', '0', 6, 414),
(198, '1303617004', 'OCTAVIANO HARTANTO', 'PENDIDIKAN KIMIA', 'octavianohartanto@gmail.com', 'Pondok Ungu Permai Blok E11 No.3 RT 008 RW 014 Kel. Kaliabang Tengah, Kec. Bekasi Utara, Kota Bekasi', '083807296780', './upload/OCTAVIANO_HARTANTO.jpg', '0', 6, 416),
(199, '1303617059', 'TITIS NURMAULAH YUSUP', 'PENDIDIKAN KIMIA', 'nurmaulahtitis@gmail.com', 'batu panca warna no 48 RT 002/Rw 011', '089664384787', './upload/TITIS_NURMAULAH_Y.jpeg', '0', 6, 426),
(200, '1303617018', 'M. A. ASHMI KAREPESINA', 'Pendidikan Kimia', 'arulkarlat@gmail.com', 'Jl. Dipati Ukur Kp. Uwung Hilir Kel. Uwung Jaya Cibodas Tangerang', '081323874587', './upload/M__A__ASHMI_KAREPESINA.jpg', '0', 6, 410),
(201, '1303617066', 'AYU MELYNDA', 'PENDIDIKAN KIMIA', 'ayumelynda98@gmail.com', 'Jalan Bintara 1 RT012/RW002 No. 60, kelurahan Bintara, Kecamatan Bekasi Barat, kota Bekasi', '082114106859', './upload/AYU_MELYNDA.jpg', '0', 6, 395),
(202, '1303617067', 'DINY KARUNIA PUTRI', 'PENDIDIKAN KIMIA', 'dinikarunia.11putri@gmail.com', 'Jl Irigasi 1 Rt 002 rw 017 no 96 kelurahan jakasetia kecamatan bekasi selatan', '08129909725', './upload/DINY_KARUNIA_PUTRI.jpeg', '0', 6, 399),
(203, '1303617007', 'KUSNIAWATI', 'PENDIDIKAN KIMIA', 'kuni349@gmail.com', 'jalan rawa papan no 75 rt 011 rw 006 bintaro pesanggrahan jakarta selatan', '08151677093', './upload/KUSNIAWATI.jpg', '0', 6, 409),
(204, '1303617031', 'ELISABET CRYSTAL GRAVIRENT', 'PENDIDIKAN KIMIA', 'gravirentelisabet@gmail.com', 'Jl. Hibrida 29 Blok h21 no.42 rt 08 rw 028 kel. teluk pucung kec bekasi utara', '085697834560', './upload/ELISABET_CYRSTAL_G.jpeg', '0', 6, 401),
(205, '1303617017', 'FIDDIA MEGA SILVIANA', 'PENDIDIKAN KIMIA', 'sfiddia@gmail.com', 'Jl. Raya Kodau, no. 134, rt 04, rw 013, jatimakmur, bekasi', '08992086626', './upload/FIDDIA_MEGA_S.jpeg', '0', 6, 405),
(206, '1303617033', 'HUSNA AMALIA KAMILAH', 'PENDIDIKAN KIMIA', 'amalia.amaliakamila@gmail.com', 'Jalan Baung IV no.42b Kebagusan Pasar Minggu Jakarta Selatan', '087881902974', './upload/HUSNA_AMALIA.jpeg', '0', 6, 406),
(207, '1303617052', 'EVI SUTRIANI', 'PENDIDIKAN KIMIA', 'trianisutriani1049@gmail.com', 'Jalan Pasar 3 Dusun 12, Desa Paya Lombang, kec. Tebing Tinggi, Kab.Serdang Bedagai, Sumatera utara', '082267363722', './upload/EVI_SUTRIANI.jpg', '0', 6, 402),
(208, '1303617048', 'Athilla Masarrah', 'Pendidikan Kimia', 'a.masarrah@gmail.com', 'Reni Jaya Jl. Pinus VIII Blok AH 5 No. 6, Pamulang', '087774144525', './upload/ATHILLA_MASARRAH.jpg', '0', 6, 394),
(209, '1303617016', 'Alfi fitriani', 'Pendidikan Kimia', 'alfifitriani12321@gmail.com', 'jl. sumatra gg.alpukat rt04/06 no.67 kel. jombang kec.ciputat kota tangerang selatan', '087770038069', './upload/ALFI_FITRIANI.jpeg', '0', 6, 388),
(210, '1307617028', 'Gilang Moh Ikbal', 'Kimia', 'gilangmohiqbal@gmail.com', 'kp cipinang jatinegara jakarta timur', '081310709006', './upload/gilang.jpg', '0', 6, 440),
(211, '3315160076', 'Ainnaya Widyaningsih', 'PENDIDIKAN KIMIA', 'ainnayawidyaningsih@gmail.com', 'Puri Mutiara Cibubur C6', '087875118518', './upload/PicsArt_02-26-05_27_531.jpg', '0', 5, 281),
(212, '3325143691', 'ULFI RAHMA EFRIANTI', 'KIMIA', 'ulfirahma9@gmail.com', 'Jl. Beruang IX Blok A1 no 40 Cikarang Baru', '081291078685', './upload/merah.jpg', '0', 3, 62),
(214, '3315161629', 'Ida Rahayu', 'Pendidikan Kimia', 'idarahayu.98@gmail.com', 'Blok Cabrik desa Bodesari kec. Plumbon kab. Cirebon', '089691133227', './upload/IMG20171108113114-min.jpg', '0', 5, 298),
(215, '3315161240', 'Ayu Dwi Wulandari', 'Pendidikan Kimia', 'ayudwiwln@gmail.com', 'Jl. Trijaya RT.003/001, Kel. Kayu Putih, Kec. Pulogadung, Jakarta Timur', '087780930199', './upload/15-19-44-FOTO_3175026905980009_2.jpg', '0', 5, 286),
(216, '3315161013', 'Putri Anisah Farah', 'Pendidikan Kimia', 'putrianisah.farah@yahoo.com', 'Jl. Amal II No. 29 RT.010 RW.001 Kel.Pondok Bambu Kec.Duren Sawit Jakarta Timur', '087777571918', './upload/2x3.jpg', '0', 5, 306),
(217, '3315160151', 'Siti Fadilawati', 'Pendidikan Kimia', 'sitifadilawati298@gmail.com', 'Jalan Pustaka Jaya 2 No. 12A, Rawamangun, Jakarta Timur', '087842035921', './upload/4x6-1.JPG', '0', 5, 315),
(218, '3315160595', 'Anilni Munaya', 'Pendidikan Kimia', 'anilnimunaya32@gmail.com', 'Jalan Pemuda 3A RT 10/02 No 27 Rawamangun, Pulogadung, Jakarta Timur', '081902376595', './upload/IMG-20171108-WA0022.jpg', '0', 5, 283),
(219, '3315161033', 'MUHAMMAD IRFANSYAH', 'PENDIDIKAN KIMIA', 'muhammadirfansyahkimia@gmail.com', 'jalan pemuda asli 3 no 69 rawamangun jakarta timur', '085711790513', './upload/IMG-20180227-WA0002.jpg', '0', 5, 301),
(220, '3315160450', 'Rizky Yoga Krisnawan', 'Pendidikan Kimia', 'rizkyyoga11@gmail.com', 'Jalan Pahlawan Komarudin Rt.02 Rw.05 No.42A, Pulo Gebang, Cakung, Jakarta Timur', '083870447052', './upload/IMG_20180227_065257-1200x1600.jpg', '0', 5, 313),
(221, '3315160776', 'ALPYH ZAHROH', 'PENDIDIKAN KIMIA', 'alpyhzahroh@gmail.com', 'Jl. Rancho Indah Tanjung Barat rt 10 rw 02 no 2B', '08561707614', './upload/IMG_20171108_103949.jpg', '0', 5, 282),
(222, '3315161364', 'OLIVE ZAMZIA', 'PENDIDIKAN KIMIA', 'ozamzia@gmail.com', 'JL. CIBUBUR II BULAK RINGIN RAYA RT 01 RW 03 NO 3.O KELURAHAN CIBUBUR KECAMATAN CIRACAS JAKARTA TIMU', '082210573256', './upload/IMG-20180227-WA0003.jpg', '0', 5, 305),
(223, '3315160699', 'annisa azti meilandari', 'Pendidikan Kimia', 'annisameilandari@gmail.com', 'jln pinang ranti sma 48 masjid al-khoriyah RT 12 rw 01 no 37', '087788784382', './upload/WhatsApp_Image_2018-02-27_at_11_08_14.jpe', '0', 5, 284),
(224, '3315162193', 'Diatri Anugrah Ayuningsih', 'Pendidikan Kimia', 'diatrianugraha@gmail.com', 'jl. Kenanga VI Blok K2 No.8A Komp. Duta Indah Jatimakmur Pondok Gede Bekasi 17413', '082210326793', './upload/PicsArt_02-27-07_39_45.jpg', '0', 5, 250),
(225, '3315163112', 'Nur Fauziah Astuti', 'Pendidikan Kimia', 'nurfauziahastuti98@gmail.com', 'jalan janur 3 kp tipar Rt 003/07 no : 92 , Pondok Kelapa, Duren Sawit, Jakarta Timur', '089659488328', './upload/PicsArt_02-27-07_38_54.jpg', '0', 5, 267),
(226, '3315165299', 'Tifanny Zahra Alfira', 'Pendidikan Kimia', 'tifannyzahra19@gmail.com', 'Perum. Alamanda Regency Blok i1 No. 28 RT 019/021, Kel. Karangsatria, Kec. Tambun Utara, Kab. Bekasi', '089644838272', './upload/20180227_003940.jpg', '0', 5, 279),
(227, '3315141736', 'Balqis Mukarromatunnisa', 'Pendidikan Kimia', 'balqism.pkb14@gmail.com', 'Jl. Kemiri 1 Blok DB6 No.7 Harapan Baru. Bekasi Barat', '085770928552', './upload/pas_foto_baru_merah_2x3.jpg', '0', 3, 108),
(228, '3325162810', 'SALMA FITRI ANNISA', 'KIMIA', 'salmafitri106@gmail.com', 'jalan gandaria rt 11 rw 3 no 11a, pekayon, pasar rebo, jakarta timur', '08982949689', './upload/20180226_165703.jpg', '0', 5, 340),
(229, '3325162235', 'Ninda Rizky Yulia', 'KIMIA', 'ninda.rizkyyulia@gmail.com', 'Taman Jatisari Permai Jalan Sulawesi Blok EE 05 RT:007 RW:014 Jatisari Jatiasih Bekasi', '089631320676', './upload/IMG_20160831_0001.jpg', '0', 5, 337),
(230, '3325164978', 'Triska Nelanda Nilwan', 'Kimia', 'trisnelanda06@gmail.com', 'Perumahan Nanggewer Indah Jl. Anggrek No. 51 RT 03 RW 04 16912 Cibinong-Bogor', '085717367296', './upload/FIX.jpg', '0', 5, 347),
(231, '3325161767', 'Evelyn Elvariani', 'Kimia', 'elvarianivelynelf08@gmail.com', 'Jl.Belly no 65 RT.010 RW.010 Pekayon, Jakarta Timur', '082211774068', './upload/IMG-20180227-WA0003_(1).jpg', '0', 5, 334),
(232, '3325160593', 'Nur Laila Sari', 'KIMIA', 'lailasarinur1@gmail.com', 'jalan karya 05/01 no.45 Kel.Tengah Kec.Kramatjati', '087878015082', './upload/1519648685002.jpg', '0', 5, 325),
(233, '3325161133', 'Nahda Zafira', 'Kimia', 'nahda107@gmail.com', 'Jl. Gunuk V RT 09/ RW 03 No.6, Pejaten Timur, Pasar Minggu, Jakarta Selatan', '085782121350', './upload/1519651753358.jpg', '0', 5, 329),
(234, '3325160143', 'Rischa Yulia Meliani', 'Kimia', 'rischayulia1@gmail.com', 'Bugel Residence Blok A No. 15 RT 06/06 Kel. Bugel Kec. Karawaci Kota Tangerang', '089651955733', './upload/IMG_20180226_221853.JPG', '0', 5, 319),
(235, '3325160480', 'Tio Aryo Pamungkas', 'Kimia', 'tio.ipb@gmail.com', 'Jalan Sukasari III RT04/RW06 No. 11 Kel. Sukasari Kec. Bogor Timur', '082114626459', './upload/1471267067604.jpg', '0', 5, 323),
(236, '3325162205', 'Sandy Elisa Cahyadi Bintang M', 'Kimia', 'sandyelisa37@gmail.com', 'Jalan Raya Centex Gang Firman No. 160 Rt/Rw 013/010 Ciracas, Jakarta Timur', '087880279690', './upload/1519706736758.jpg', '0', 5, 336),
(237, '3315160705', 'Ghea Paki Agustin', 'PENDIDIKAN KIMIA', 'ghea_paki@yahoo.com', 'JL. Radjiman Widyodiningrat, Kp Rawa Badung RT006/007 NO. 82 Jakarta Timur', '085775562436', './upload/Ghea.jpg', '0', 5, 295),
(238, '3315160976', 'NURUL AZIZAH ANDALASIA', 'PENDIDIKAN KIMIA', 'nazizahandalasia@gmail.com', 'Jl. Antara I No. 42 Bintara Jaya, Bekasi Barat', '089533991911', './upload/IMG_20170324_140754.JPG', '0', 5, 304),
(239, '3315163208', 'NIDA OLGA RIZKI KARTIKA', 'PENDIDIKAN KIMIA', 'nidaolga98@gmail.com', 'JL. RANCHO INDAH NO.19 RT 04 RW 02', '089633084759', './upload/111.jpg', '0', 5, 265),
(240, '3315161142', 'Hanum Asih', 'Pendidikan Kimia', 'hanum.nelly@gmail.com', 'Jl Bungur Kp.Duku RT 008 RW 006 No. 46 Kebayoran Lama Utara , Jakarta Selatan 12240', '081290513944', './upload/IMG-20180227-WA0016.jpg', '0', 5, 296),
(241, '3315164240', 'Paramitha Mahardika Mustika', 'PENDIDIKAN KIMIA', 'paramithadike@gmail.com', 'Jl. Cempaka Baru II RT 07 RW 06 No. 1, Kemayoran, Jakarta Pusat', '081932915226', './upload/PicsArt_02-27-11_39_40.jpg', '0', 5, 270),
(242, '3325161217', 'Dika Subhan Ramadhan', 'Kimia', 'dikasubhanramadhan@gmail.com', 'Jl.H.Hasbi RT.10/02 No.33 Kel.Kebon Pala Kec.Makasar Jakarta Timur, DKI Jakarta', '081215470145', './upload/dika.jpg', '0', 5, 330),
(243, '3315162675', 'NIfa Hafida', 'Pendidikan Kimia', 'nifa_h@rocketmail.com', 'Jalan Ampera Raya no. 15 RT 001/004 Kelurahan Cilandak Timur Kecamatan Pasar Minggu, Jakarta Selatan', '085788189864', './upload/DSCF1661.jpg', '0', 5, 266),
(244, '3325165244', 'Alika Halimah Camilla Aulia', 'Kimia', 'camilaaulia@gmail.com', 'jalan raya labuan kp soreang rt/rw 03/05 menes pandeglang-banten', '082122609377', './upload/alika.jpg', '0', 5, 349),
(245, '3325162842', 'Yuniarti Pratiwi', 'Kimia', 'yuniartipratiwi68@yahoo.com', 'Jl.Angin Sejuk II No.57 B Komplek TNI-AL Dewa Ruci Rt.009 Rw.011 Kel.Semper Barat Kec.Cilincing,Jaka', '081316235859', './upload/1519714262310.jpg', '0', 5, 342);
INSERT INTO `mahasiswa` (`id_mahasiswa`, `noreg`, `nama`, `program_studi`, `email`, `alamat`, `no_hp`, `url_foto`, `status`, `id_tahun`, `id_user`) VALUES
(246, '332516237', 'Mahbub Al Haqi', 'Kimia', 'mahbubalhaq@gmail.com', 'Kp Bojongsari No 47, Jatiasih, Kota Bekasi', '085717916336', './upload/MAHBUB_FORMAL_BATIK_98_3x4.jpg', '0', 5, 331),
(247, '3325140699', 'Tania Farida', 'Kimia', 'tataniafarida@gmail.com', 'Jl. Nusa Indah I Gang 4 No.76 Perumnas Klender', '081387028226', './upload/B612_20171209_132521.jpg', '0', 3, 61),
(248, '3325140709', 'Dini Islami Putri', 'Kimia', 'diniislamiputri7@gmail.com', 'jl. pahlawan komarudin rt 12/05 no.19, pulogebang, cakung, jakarta timur', '087881892146', './upload/IMG-20170919-WA0010.jpg', '0', 3, 41),
(249, '3325140705', 'Dita Ayu Purwani', 'KIMIA', 'ditaayu.purwani@gmail.com', 'Komplek Griya Asri Taman Mini Blok P5 No.6', '085710379068', './upload/DITA.jpg', '0', 3, 42),
(250, '3325141802', 'Eni Yunita', 'Kimia', 'eniyunita33@gmail.com', 'Jalan Pratekan 16 RT. 07/RW. 03 Kelurahan Rawamangun, Kecamatan Pulogadung, Jakarta Timur', '085794417215', './upload/Photo-0004__.jpg', '0', 3, 45),
(251, '3315150231', 'Dessy Indira Untary', 'Pendidikan Kimia', 'dessyindirauntary@gmail.com', 'Jl Masjid Al Ihlas rt/rw 02/01 Petukangan Selatan, Pesanggrahan, Jakarta Selatan', '08977877581', './upload/DESSY_INDIRA_UNTARY.jpg', '0', 4, 477),
(252, '3315152634', 'Linda Astuti', 'Pendidikan Kimia', 'lindasttii27@gmail.com', 'Jl. Suci Gg. Saibun 10/04 60, Susukan, Ciracas, Jakarta Timur', '081291523154', './upload/20160314_124037.jpg', '0', 4, 226),
(253, '3325141796', 'Arif Julistianto', 'Kimia', 'ir.arifjulistianto@gmail.com', 'Kp. Areman Rt 004/06 no 113. samping brimob, cimanggis, depok', '089615441047', './upload/P71102-121205.jpg', '0', 3, 35),
(254, '3325140704', 'Zauza Nida', 'Kimia', 'zauza.nida@yahoo.co.id', 'Jl. Perintis Kemerdekaan No. 11 Pandeglang', '089611878438', './upload/IMG_1914.JPG', '0', 3, 64),
(255, '3315152895', 'dwi afni musyaillah', 'Pendidikan Kimia', 'dwiiiafniii@gmail.com', 'jl. kramat no 88 rt 3 rw 2, lubang buaya, cipayung, jakarta timur', '083878099088', './upload/_MG_8152-2-1.jpg', '0', 4, 216),
(256, '3315152494', 'Annisa Chandra', 'PENDIDIKAN KIMIA', 'annisachandraaa@gmail.com', 'Jl. Rawa Bambon RT 12/04 No 09. Ciracas, Jakarta Timur', '087884934843', './upload/ANNISA_CHANDRA.jpg', '0', 4, 209),
(257, '3315151787', 'Safitri Handayani', 'Pendidikan Kimia', 'safitrihandayani1997@gmail.com', 'Kp Buaran RT 02 RW 01 Lambangsari', '087785155460', './upload/Safitri.jpg', '0', 4, 196),
(258, '3315150976', 'Ade Mutia', 'Pendidikan Kimia', 'ade.mutia096@gmail.com', 'kp. Baru rt 03 rw 02 kelapa dua wetan', '087882506423', './upload/ADE_MUTIA_3315150976.jpg', '0', 4, 168),
(259, '3315151866', 'Nurmayanti agustin', 'Pendidikan Kimia', 'nurmayantiagustin@gmail.com', 'jl.sawo No.25 rt 013 rw 01 cipedak jagakarsa', '085691739138', './upload/1512108353247.jpg', '0', 4, 190),
(260, '3315152382', 'Caroline Monica', 'Pendidikan Kimia', 'carolinesihite@gmail.com', 'Jl. Sayuti Gg. Bochor Percetakan Negara RT 02/05 No. 20', '081293993798', './upload/12358.jpg', '0', 4, 212),
(261, '3315153356', 'Uyun Sugiarti Palimbunga', 'Pendidikan Kimia', 'uyunpalimbunga13@gmail.com', 'Komplek Pelindo 2 Blok C5 No.15 Cilincing, Jakarta Utara', '082299757597', './upload/DSC_9226hdl.jpg', '0', 4, 241),
(262, '3315152346', 'Olgarinda Sekarrini', 'Pendidikan Kimia', 'olgarinda05@gmail.com', 'Jl. Kampung Baru 1 no 89 RT 10/09 Ciracas Jakarta Timiur', '082114834433', './upload/Untitled-2.jpg', '0', 4, 233),
(263, '3325154903', 'Oktaviani Cahyaningtyas', 'KIMIA', 'tysoct@yahoo.com', 'Perum Bukit Cengkeh II Blok F4 No 11 RT 11 RW 16 Tugu Cimanggis Depok', '085716688317', './upload/tyas.jpg', '0', 4, 149),
(264, '3315153204', 'Laras Septiani Rusdi', 'Pendidikan Kimia', 'septianilaras@gmail.com', 'Kp. Rawa Aren Jl. Tawakal 5 No. 91 RT/RW. 007/012, Kel. Aren Jaya, Kec Bekasi Timur, Kota Bekasi', '087883556919', './upload/21_(2).JPG', '0', 4, 225),
(265, '3315152825', 'Alin Mardiah', 'Pendidikan Kimia', 'alinmardiah123@gmail.com', 'Kp. Pojok RT/RW 004/005 Desa Cikoneng Kecamatan Mandalawangi Kabupaten Pandeglang - Banten', '085930008038', './upload/ALIN_MARDIAH.jpg', '0', 4, 206),
(266, '3315154454', 'Anita Cristy', 'Pendidikan Kimia', 'anitaanitacristy@gmail.com', 'Komplek Tugu Permai A2 No.17-18 RT/RW 014/002', '08999727804', './upload/2016-08-29_10_13_57.jpg', '0', 4, 207),
(267, '3315151544', 'Iyya Hijratin Haq', 'Pendidikan Kimia', 'haq.iyyahijratin@yahoo.co.id', 'jalan Kayu Jati V dalam IV rt 11 rw 5 no.16, Rawamangun, Pulogadung, Jakarta Timur', '085716868685', './upload/unnamed.jpg', '0', 4, 181),
(268, '3315150083', 'Rosita', 'Pendidikan Kimia', 'rositaapmp11@gmail.com', 'Kp. Cirumput, Rt/Rw 002/001,Desa Karya Utama, Kec. Cikedal,Kab. Pandeglang', '085211063866', './upload/IMG_20171130_113426.jpg', '0', 4, 195),
(269, '3325151283', 'Yoriza Firdha Ghifari', 'Kimia', 'ghifariyo@gmail.com', 'Jl. Taman Malaka Selatan Kav. DKI Blok K2/10 RT001/009 Pondok Kelapa, Jakarta Timur', '085287252124', './upload/IMG_20180228_105243.jpg', '0', 4, 164),
(270, '3325151761', 'Shafira Dwita Purnama Putri', 'Kimia', 'shafiradwita@gmail.com', 'Perumahan Vila Nusa Indah 2 Blok BB 6 No. 23 Rt02/028 Bojong Kulur, Gunung Putri, Bogor.', '088211046249', './upload/IMG_20180228_105348.jpg', '0', 4, 156),
(271, '3315152797', 'NADIA SALSABILA', 'Pendidikan Kimia', 'nsalsabils@gmail.com', 'Jl Ganggeng Raya no 30/76, Tanjung Priok, Jakarta Utara', '089693797639', './upload/DSC_0136.JPG', '0', 4, 229),
(272, '3315151147', 'Zahara Sabilla', 'PENDIDIKAN KIMIA', 'zaharasabilla.zs@gmail.com', 'Kampung Gedong no.71 A, Kecamatan Bojonggede, Kabupaten Bogor', '085715659339', './upload/Zahara.jpg', '0', 4, 205),
(273, '3315153080', 'Destia Aryani', 'PENDIDIKAN KIMIA', 'destiaaryani7@gmail.com', 'jl. hj ten IV rt: 01/10 no.9A kel. rawamangun kec. pulogadung', '08881208510', './upload/IMG_20180228_052601.jpg', '0', 4, 213),
(274, '3315151163', 'alde tamara widji agus setyawan', 'Pendidikan Kimia', 'aldetamara12@gmail.com', 'jl nagaraya, no :1 duren sawit JakTim', '083876394624', './upload/IMG_20171201_202744.jpg', '0', 4, 171),
(275, '3315150269', 'Rizka Amalia Rahmawati', 'Pendidikan Kimia', 'muzaviabujibril@gmail.com', 'Kp. Kadu Tanggay, RT/RW 001/003', '083897943063', './upload/Pas_Foto_Rizka_Amalia_Rahmawati.jpg', '0', 4, 194),
(276, '3315150737', 'Refani Izqi Luthfianisa', 'Pendidikan Kimia', 'Refanizqi@gmail.com', 'Jl. H. Sibun RT 02/04 No. 41, Bekasi', '087875075680', './upload/PicsArt_12-01-03_08_00.jpg', '0', 4, 192),
(277, '3325151796', 'wita heryana', 'kimia', 'witaheryana@gmail.com', 'jl. swadaya IA', '089619424145', './upload/foto_3325151796.jpg', '0', 4, 163),
(278, '3315151882', 'Chintya Desty Octavia', 'Pendidikan Kimia', 'cdestyoctavia@gmail.com', 'Kav. A Rawa Bugel RT 1 RW 10 No. 86 Marga Mulya, Bekasi Utara 17142', '085886740772', './upload/foto_3315151882.jpg', '0', 4, 174),
(279, '3325152591', 'Yunita putri wijayanti', 'Kimia', 'yunitayuniita@gmail.com', 'utan kayu, matraman, jakarta timur', '085881444712', './upload/IMG-20180228-WA0001.jpg', '0', 4, 165),
(280, '3325151442', 'Shely saswati', 'Kimia', 'shelysaswati@gmail.com', 'm.siban, kunciran, tangerang selatan', '081386401036', './upload/IMG-20180228-WA0005.jpg', '0', 4, 158),
(281, '3325151070', 'Nadya Priskanauli', 'Kimia', 'nadyafriskanauli@gmail.com', 'jalan bambu kuning utara, bambu apus, jakarta timur', '089687225270', './upload/foto_3325151070.jpg', '0', 4, 147),
(282, '3315150285', 'Vika Andini', 'Pendidikan Kimia', 'vikaandini54@gmail.com', 'Jl. H.Sidin I Rt 03/Rw 007 No. 136 Duren Sawit Jakarta Timur', '085201975198', './upload/fto_copy.JPG', '0', 4, 201),
(283, '3315151177', 'Nindya Kartika', 'Pendidikan Kimia', 'nindyakartika03@gmail.com', 'jalan setia warga 1 RT 005/02 No.26, Jatisampurna Jatiranggon Bekasi', '089509408506', './upload/1519782737037.jpg', '0', 4, 186),
(284, '3315150937', 'Siti Chaerunisa', 'Pendidikan Kimia', 'chaerunnisa3@gmail.com', 'Jalan Lontar RT 02 RW 03 No. 41A, Lenteng Agung, Jagakarsa, Jakarta Selatan 12610', '08991349930', './upload/SITI_CHAERUNISA.jpg', '0', 4, 198),
(285, '3315151096', 'Fairuz Hasna', 'Pendidikan Kimia', 'fairuzhasna47@gmail.com', 'Jalan Jabaru IV no. 32 RT 04 RW 05 Pasirkuda Bogor 16119', '085693317360', './upload/WhatsApp_Image_2017-03-08_at_22_53_38.jpe', '0', 4, 178),
(286, '3325150752', 'Intan Nurfitria Rismawati', 'kimia', 'intanurfitria@gmail.com', 'Btn Narimbang, Lebak, Banten', '08567719518', './upload/IMG_20180228_113423.jpg', '0', 4, 140),
(287, '3315150411', 'Rifqi Ghufrooni', 'PENDIDIKAN KIMIA', 'rifqi.ghufrooni212@gmail.com', 'Kp.Rawa Bugel Rt 07/Rw 26 No 16 Harapan Jaya Bekasi Utara Kota Bekasi', '089607111316', './upload/IMG_0157_(2).JPG', '0', 4, 193),
(288, '3315163074', 'Nazrisya Hairishah', 'Pendidikan Kimia', 'risha586@gmail.com', 'Perum. Betawi Permai Jl. Arkadia E4/3 RT.02 RW. 14, Jatirangga, Jatisampurna, Bekasi, 17434', '081311228972', './upload/Untitled-11.jpg', '0', 5, 262),
(289, '3315163840', 'Nida Nur Afifah', 'Pendidikan Kimia', 'afifahnida.na@gmail.com', 'Komp. Taman Ciruas Permai Blok L3 no 30 RT 004 RW 04, Kec. Ciruas Kab.Serang-Banten', '085211437090', './upload/foto_3315163840.jpg', '0', 5, 264),
(290, '3315162203', 'Larah Maghfirotika', 'Pendidikan Kimia', 'tikalarah285@gmail.com', 'Desa Pesayangan RT. 14 RW. 03 Kecamatan Talang Kab. Tegal', '087885251770', './upload/larah_m3.jpg', '0', 5, 259),
(291, '3325150300', 'Zena Zahara Al - Liatsi', 'Kimia', 'zena.assegaf@gmail.com', 'kp. payangan rt02/06 bekasi', '089533497243', './upload/IMG-20180228-WA0019.jpg', '0', 4, 166),
(292, '3325151730', 'Putri Anisa Nila Auni', 'Kimia', 'putriauni10@gmail.com', 'Jalan Kampung Belakang RT 003/003 no. 58 Kamal, Kalideres Jakarta 11810', '085778778203', './upload/IMG-20180228-WA0008.jpg', '0', 4, 150),
(293, '3315161846', 'hernita Novianti', 'Pendidikan Kimia', 'noviantihernita97@gmail.com', 'jl. rorotan II no. 85 rt 008/004', '089650280890', './upload/PicsArt_02-27-11_00_08.jpg', '0', 5, 478),
(294, '3325151291', 'Raka Dwi Deswara', 'KIMIA', 'rakkadeswara@gmail.com', 'Kampung Jembatan RT.05/RW.12 No. 36A, Penggilingan, Cakung, Jakarta Timur', '08978556411', './upload/IMG-20180228-WA0020-01.jpeg', '0', 4, 151),
(295, '3315150779', 'Ika Yuli Choirina', 'Pendidikan Kimia', 'yuli.ika82@gmail.com', 'Jl. Anggur Raya B2/15 perum bumiasri, kutabumi, pasarkemis, kab Tangerang', '083877245072', './upload/IMG_0232.jpg', '0', 4, 479),
(296, '3315151028', 'Anisa Imansari', 'Pendidikan Kimia', 'anisaimansari5@gmail.com', 'Jl. Mampang Prapatan XI No.253', '085776302692', './upload/ANISA_IMANSARI.jpg', '0', 4, 172),
(297, '3315150793', 'Muhammad Taufik Hidayat', 'Pendidikan Kimia', 'muhammadtaufik.90210@gmail.com', 'Jl. Inpres XVI Rt.003/004 No.34A Kel. Gaga Kec. Larangan Kota Tangerang', '085714601940', './upload/MUHAMMAD_TAUFIK_HIDAYAT.jpg', '0', 4, 184),
(298, '3325153540', 'Dinda Oktaviani', 'Kimia', 'dndokta2@gmail.com', 'Komplek Imigrasi Pedongkelan no.20 RT 001/013 Cengkareng Timur Jakarta Barat', '087780866095', './upload/IMG_2055.JPG', '0', 4, 135),
(299, '3325140702', 'Indah Rahmawati', 'Kimia', 'indah.rahmawati113@gmail.com', 'Jalan Pala Rt.07/002 No. 21 Lubang Buaya Jakarta Timur', '089513149833', './upload/IMG-20171109-WA0016.jpg', '0', 3, 50),
(300, '3325155157', 'Nuurur Rizqa Aliya', 'Kimia', 'Nraliya3@gmail.com', 'Jalan boulevard raya', '085888892423', './upload/FB_IMG_1519798045753.jpg', '0', 4, 148),
(301, '3315154720', 'Witri Sandryani', 'Pendidikan Kimia', 'sandryaniwitri@gmail.com', 'Jl.Pemuda III Rawamangun', '087725963512', './upload/2_-_Witri_Sandryani.jpg', '0', 4, 244),
(302, '1303617021', 'ARIFAH SALSABIL', 'PENDIDIKAN KIMIA', 'arifahsalsabil@gmail.com', 'Jalan Haji Jayun RT 03/003 Pengasinan Rawalumbu Bekasi', '085697613168', './upload/ARIFAH_SALSABIL.jpg', '0', 6, 393),
(303, '1303617008', 'Anggita Ratna Pertiwi', 'PENDIDIKAN KIMIA', 'iamanggitaa@gmail.com', 'Pondok Ungu Permai Blok AL 8 No 22 RT 04 RW 011 KEL. BAHAGIA KEC. BABELAN BEKASI', '087780547899', './upload/ANGGITA_RATNA.jpg', '0', 6, 390),
(304, '1303617025', 'ROBBY HARYANTO', 'PENDIDIKAN KIMIA', 'robbyharyanto1@gmail.com', 'Jalan Bakti Mulya II RT08/02 Tegal Alur, Kalideres, Jakarta Barat 11820', '081296139734', './upload/PicsArt_02-26-10_53_05.jpg', '0', 6, 376),
(305, '1303617050', 'FARHAN ALFARI', 'PENDIDIKAN KIMIA', 'farhanyoman@gmail.com', 'jl. cendrawasih 1 , perumnas 1 , Bekasi', '087742762587', './upload/PicsArt_03-01-05_07_46.jpg', '0', 6, 362),
(306, '1303617005', 'CECEP SOBARUDIN', 'PENDIDIKAN KIMIA', 'cecepcrudi@gmail.com', 'jl.surya gunawan kp.sentral RT/RW= 03/11 kelurahan rangkasbitung barat kecamatan rangkasbitung kabup', '085710925078', './upload/PicsArt_03-01-05_09_07.jpg', '0', 6, 356),
(307, '1303617058', 'YUSUF SATRYO UTAMA', 'PENDIDIKAN KIMIA', 'Yutama47@gmail.com', 'Jalan Bawang Putih II No.1 Rt 12/08 KPAD Cibubur, Jakarta Timur', '085776388457', './upload/Yusuf_Satryo_Utama-min.jpg', '0', 6, 383),
(308, '1303617079', 'WIDDY WIDDYA ASTUTI', 'PENDIDIKAN KIMIA', 'widdywiddya73@gmail.com', 'Villa Bekasi Indah 2', '085891931274', './upload/IMG_20180228_074257.jpg', '0', 6, 382),
(309, '1303617003', 'CITRA RAMADHANTI', 'PENDIDIKAN KIMIA', 'citraraaa@gmail.com', 'JALAN CILILITAN KECIL I RT 016 / RW 07 CILILITAN, KRAMAT JATI, JAKARTA TIMUR', '081314859095', './upload/Citra_Ramadhanti.jpg', '0', 6, 357),
(310, '1303617054', 'RAYHANAH MA\'SHUMAH', 'PENDIDIKAN KIMIA', 'rayhanahshu@gmail.com', 'JALAN CILILITAN BESAR NP.32 RT.02/09 CILILITAN. KRAMAT JATI. JAKARTA TIMUR', '089534417176', './upload/PicsArt_03-01-05_09_42.jpg', '0', 6, 375),
(311, '1303617043', 'SEFTANIA ANGGREINI', 'PENDIDIKAN KIMIA', 'seftaniaanggreini@gmail.com', 'JL. DAMAI 3 NO.1 RT/RW 003/02 KEL. TENGAH KEC. KRAMATJATI JAKARTA TIMUR', '081908095549', './upload/SEFTANIA_ANGGREINI.jpeg', '0', 6, 423),
(312, '1303617039', 'AISYAH DENTA KUSUMA', 'PENDIDIKAN KIMIA', 'aisyahaishimaru@gmail.com', 'Jalan H. Shibi no. 28 RT. 006 RW. 002 Srengseng Sawah, Jagakarsa, Jakarta Selatan', '081906867691', './upload/AISYAH_DENTA_K.jpeg', '0', 6, 387),
(313, '1303617081', 'MEITRI DIAN KARINA', 'PENDIDIKAN KIMIA', 'mei.dirina9@gmail.com', 'Jalan Mulawarman Blok D4 No. 9 RT 007 RW 004 Bekasi Utara', '087781022436', './upload/MEITRI_DIAN_KARINA.jpg', '0', 6, 412),
(314, '1303617049', 'NABILA SAKINAH', 'PENDIDIKAN KIMIA', 'nabilasakinah53@gmail.com', 'Jl. Cipinang Muara 2 Rusun Cipinang Muara Blok A No. 314 RT 017/002', '089570185316', './upload/NABILA_SAKINAH.jpg', '0', 6, 413),
(315, '1303617076', 'ZIAN SHOFA HUMAIRA', 'PENDIDIKAN KIMIA', 'zianshofah@gmail.com', 'Jln. Masjid baitussalam RT 02 RW 05 NO.71 JATI ASIH, Bekasi Selatan', '085840027622', './upload/IMG-20180226-WA0027.jpg', '0', 6, 384),
(316, '1303617065', 'GHINNA RESTIANI TAUJI HANIFAH', 'PENDIDIKAN KIMIA', 'ghinna.restiani@gmail.com', 'JL. KAMPUNG SETU RT 001/001 NO.83, BINTARA JAYA, BEKASI BARAT', '085710494841', './upload/Ghinna_Restiani_Tauji_Hanifah_(1303617065', '0', 6, 364),
(317, '1303617080', 'ASYARA ZAHRA ZETIRA', 'PENDIDIKAN KIMIA', 'asyarazahra@gmail.com', 'JATINEGARA BARU JALAN GUNUNG KELUD NOMOR 2', '081383300425', './upload/IMG-20180226-WA0030.jpg', '0', 6, 354),
(318, '1303617072', 'AMALIA NURRACHMAH', 'PENDIDIKAN KIMIA', 'amalianrch@gmail.com', 'perumahan griya alam sentosa blok cc2/50 rt 16 rw 08', '082110982266', './upload/Amalia_Nurrachmah_1303617072.jpg', '0', 6, 352),
(319, '1303617044', 'Nur Azis Aji Pangestu', 'Pendidikan Kimia', 'azis15111999@gmail.com', 'Jalan Abdul Hadi No.69 RT06/RW12 Kp.Curug Kel. Pakansari Cibinong', '085778310063', './upload/Nur_Azis_Aji_Pangestu_(1303617044).jpg', '0', 6, 370),
(320, '1303617045', 'Shafarani Silalahi', 'Pendidikan Kimia', 'shafaranisilalahi8@gmail.com', 'Jalan Swadaya V Rt 003 Rw 005 No.10E, Kelurahan Cilangkap, Kecamatan Cipayung, Jakarta Timur', '081905663084', './upload/IMG-20180226-WA0028.jpg', '0', 6, 380),
(321, '1303617020', 'AGUNG LAKSONO SIREGAR', 'PENDIDIKAN KIMIA', 'Agungchiregartz0@gmail.com', 'jalan pemuda asli 2 jakarta timur', '082310814214', './upload/IMG_0172.JPG', '0', 6, 351),
(322, '1303617011', 'anisa safitri', 'Pendidikan Kimia', 'anisasafitri008@gmail.com', 'jalan mawar a no 35 rt 8 rw 6', '087880852655', './upload/IMG-20180226-WA0017_1519716122841.jpg', '0', 6, 353),
(323, '1303617036', 'Sandy Aji Aditama', 'Pendidikan Kimia', 'snddtm@gmail.com', 'Perumahan griya asri 2 blok i 13 no. 37 kec. Tambun selatan Kab. Bekasi', '08999919492', './upload/SANDY_AJI_ADITAMA.jpg', '0', 6, 422),
(324, '1303617042', 'Sukma Hayyu Chusnul Chotimah', 'PENDIDIKAN KIMIA', 'suhaychch@yahoo.com', 'Perum. Wirasana Indah Rt 03/06 Blok I no. 10, Purbalingga, Jawa Tengah', '081329470805', './upload/SUKMA_HAYYU_C_C.jpeg', '0', 6, 425),
(325, '1303617001', 'Farah Nadiyah', 'Pendidikan Kimia', 'farahnadiyaaa@gmail.com', 'pamulang permai 1 blok b3 nomor 7. pamulang. tangerang selatan.', '087888273576', './upload/FARAH_NADIYAH.jpeg', '0', 6, 404),
(326, '3315140689', 'aslinda', 'Pendidikan Kimia', 'aslinda.56jkt@gmail.com', 'jl. pemuda 3 rawamangun jakarta timur', '083876609013', './upload/IMG-20171108-WA0009_1.jpg', '0', 3, 72),
(327, '1303617038', 'Nurul Agustin', 'Pendidikan Kimia', 'nurulnurulagustin@gmail.com', 'Jalan Mawar Raya Blok i. No.438. Rt/Rw:02/11. Jatimulya-Bekasi Timur', '089694496817', './upload/IMG_20171212_125916.jpg', '0', 6, 371),
(328, '1303617030', 'Septiana Makhrufah', 'Pendidikan Kimia', 'makhrufah@gmail.com', 'Jl. Raya Centex RT 13/03 no. 17, Ciracas, Jakarta Timur', '085691978185', './upload/SEPTI.jpg', '0', 6, 379),
(329, '1307617033', 'Nabella Puspita Rini', 'KIMIA', 'nabellapuspitar@gmail.com', 'Villa Bekasi Indah 2 blok J2 nomor 29 ,Bekasi', '085883815347', './upload/NABELLA_PUSPITA_RINI.jpg', '0', 6, 449),
(330, '1307617030', 'Jihan Azizah', 'Kimia', 'jihanazizah0508@gmail.com', 'Komp GLA BTN Jaha Sukamaju Labuan Pandeglang Banten', '085319236745', './upload/500_kb_jihan_mr1517447391245.jpg', '0', 6, 444),
(331, '3325150768', 'Mayta Yoetami', 'Kimia', 'maytayoetami26@gmail.com', 'kp cigondang kramat rt 001 rw 002 ds labuan kec labuan', '085881504757', './upload/IMG_20180301_103103.jpg', '0', 4, 143),
(332, '3325140711', 'Zahra Fairuza', 'KIMIA', 'zahrafairuza94@gmail.com', 'Jatiasih Bekasi', '085880731670', './upload/zahra-01.jpeg', '0', 3, 63),
(333, '3325153776', 'Sri Mutiah', 'Kimia', 'mutimutiiyaaa@gmail.com', 'Jalan Kemuning IV B No.67, 012/006, Pejaten Timur, Pasar Minggu, Jakarta Selatan', '085775017712', './upload/PicsArt_02-28-09_42_11.jpg', '0', 4, 159),
(334, '3315151263', 'Siti Mahmudah', 'Pendidikan Kimia', 'sitimah23@gmail.com', 'Jl. Mayor Busni A Rahman RT005/RW002 Kel.Air Kepala Tujuh Kec.Gerunggang Pangkalpinang', '081297626628', './upload/12032184_205587846475887_1874428061023009', '0', 4, 199),
(335, '3325141804', 'Oriza Sativani', 'Kimia', 'padi.sativani@gmail.com', 'Jl. kemang No. 49 rt:01/10 sukatani depok', '087870448155', './upload/IMG-20171106-WA0005.jpg', '0', 3, 56),
(336, '3315140670', 'Fahri Rizalul Ula', 'Pendidikan Kimia', 'fahririzalulula@yahoo.co.id', 'Jl. H. Gemin 1 Rt 09/009, Kel. Jatikramat, Kec. Jatiasih, Kota Bekasi', '089617669542', './upload/Fahri_R_U_.jpg', '0', 3, 480),
(337, '3325140697', 'SRI PUSPITA SARI', 'KIMIA', 'sri.puspitasari04@gmail.com', 'Perumahan Wisma Jaya, Jl. Kusuma Barat 8 Blok CC 10 No. 2, RT 11 RW. 18, Kelurahan Duren Jaya, Kecam', '081384343248', './upload/IMG_20180301_134118.jpg', '0', 3, 60),
(338, '3315133634', 'Fatasya Kamal', 'Pendidikan Kimia', 'kamal.fatasya@gmail.com', 'Kp. Pulo RT 01/05 Nomor 31, Desa Bojong Baru, Kec. Bojonggede, Kab. Bogor', '089653903418', './upload/fotoKamal.jpg', '0', 2, 481),
(339, '3315136385', 'Risfi Aditya Rachman', 'Pendidikan Kimia', 'risfi230@gmail.com', 'komp. twp tni al blok d21 no 2 rt 13 rw 21 ciangsana bogor', '081388868008', './upload/IMG_20180301_141856.jpg', '0', 2, 482),
(340, '3315140685', 'Friska Ruswandani Pratiwi', 'Pendidikan Kimia', 'friska.ruswandani@gmail.com', 'Jl. Betet C2 No. 11 RT 006 RW 012, Perumahan Villa Jatirasa, Bekasi', '089678825607', './upload/Foto_Friska_Ruswandani_Pratiwi_UNJ.jpg', '0', 3, 82),
(341, '3315160407', 'Fanellia Anggreini', 'Pendidikan Kimia', 'fanellia.anggreini@gmail.com', 'Jalan Daksinapati Timur II no 4 Rawamangun, Jakarta Timur', '082372446790', './upload/fanellia_anggreini.jpg', '0', 5, 293),
(342, '3315141724', 'Nurmia Safitri', 'Pendidikan Kimia', 'snurmia@gmail.com', 'Jl.lingkungan 3 lingga 4 rt 003/03 no. 19 Tegal Alur Kalideres Jakarta Barat', '083872476238', './upload/3E24.jpg', '0', 3, 89),
(343, '3315161737', 'DINI FITRIA', 'PENDIDIKAN KIMIA', 'dinifitria.1999@gmail.com', 'Jl.Pemuda III Rawamangun', '082260351700', './upload/1463217929019.jpg', '0', 5, 291),
(344, '3325162969', 'Intan Islamiati', 'KIMIA', 'intanislamiati2@gmail.com', 'JL. KH ZAENAL MUSTOFA NO.54 RT/RW 025/OO4 DS. SUSUKAN KEC. SUSUKAN KAB. CIREBON', '085795230500', './upload/3x4_-_Copy.jpg', '0', 5, 343),
(345, '3315161809', 'Artika Kurniati', 'Pendidikan Kimia', 'artikakrnt@yahoo.com', 'Jl. Saibun RT. 10 RW. 04 No.6 Susukan, Ciracas, Jakarta Timur', '085718501852', './upload/artika.jpg', '0', 5, 245),
(346, '3315163771', 'Dinah Dwi Nurjannah', 'Pendidikan Kimia', 'dinahdw2@gmail.com', 'jalan olahraga 1 no.6 rt 007/ rw105 cililitan, kramat jati, jakarta timur', '081210659906', './upload/20180227_064839.jpg', '0', 5, 251),
(347, '3315161898', 'dinar andriana', 'Pendidikan Kimia', 'dinarandriana98@gmail.com', 'gg.kharisma no.41 cimanggis depok', '087882255147', './upload/2017-03-09_08_42_41_1.jpg', '0', 5, 252),
(348, '3315163433', 'Rizki Azmaul Afifah', 'Pendidikan Kimia', 'rizkiasmaul13@gmail.com', 'kp. ciketing udik rt. 03 rw.06 Bantar gebang Bekasi', '085693376353', './upload/IMG-20170601-WA0025.jpg', '0', 5, 272),
(349, '3315163862', 'Yasinta Nur Amanda', 'Pendidikan Kimia', 'ysntamnd38@gmail.com', 'Perum. Vila Slawi Regency B37 Tegalandong, Lebaksiu-Tegal', '085743983612', './upload/IMG_8568.JPG', '0', 5, 484),
(350, '3315161567', 'Diyan Putri', 'Pendidikan Kimia', 'diyanputri7@gmail.com', 'perumahan taman flamboyan blok B2 No. 7, Bekasi', '08811282142', './upload/IMG_20180228_102645.jpg', '0', 5, 475),
(351, '3315162267', 'Rafli Fauzan', 'Pendidikan Kimia', 'rfauzan23@gmail.com', 'Graha Prima Blok IE No.50', '089699309962', './upload/poto1.jpg', '0', 5, 271),
(352, '3315162292', 'dhiya az zahra', 'Pendidikan Kimia', 'dhiyazzhr@gmail.com', 'jalan inpres 1C no.40 larangan utara larangan, ciledug, tanggerang Banten', '081291869697', './upload/dhiya_az_zahra_1519946296895.jpg', '0', 5, 483),
(353, '3315162345', 'Rizky Chairinnisa Safitri', 'Pendidikan Kimia', 'rizkychairinnisa@gmail.com', 'Jl. Rorotan IX gg.9 No.39 RT/008 RW/007 Jakarta Utara', '089601501805', './upload/Pas_foto1.jpg', '0', 5, 274),
(354, '3315161817', 'Gina indah Syifani', 'Pendidikan Kimia', 'gina.indah99@gmail.com', 'Jl Masjid II RT 01/11 No 38 Ciledug Tangerang', '089664376814', './upload/preview.jpg', '0', 5, 255),
(355, '3315162716', 'Nehemia Yudhi Saputra', 'Pendidikan Kimia', 'nehemiayudhi@gmail.com', 'Jl Pitara Gg Mushola No 3 Depok', '087878541620', './upload/Foto_Diri.jpg', '0', 5, 263),
(356, '3315143671', 'Dina Febriana', 'Pendidikan Kimia', 'febrianasanmas.dina12@gmail.com', 'Jln. Kramat II A RT 004/010 No.74A Lubang Buaya Jakarta Timur', '0856-9151-56', './upload/IMG-20171121-WA0002-6.jpg', '0', 3, 111),
(357, '3315141728', 'SHIFA AULIA', 'PENDIDIKAN KIMIA', 'shifaauliakeke@gmail.com', 'Jalan Mampang Prapatan XV C No 22 RT 007 RW 06 Duren Tiga, Pancoran, Jakarta Selatan', '083896536337', './upload/keke.JPG', '0', 3, 128),
(358, '3315141733', 'Mega Ayu Agustin', 'Pendidikan Kimia', 'megaayuagustin.maa@gmail.com', 'Jalan adil RT 005/006 No.75 Lubang Buaya, Cipayung, Jakarta Timur', '089646522588', './upload/IMG_20180302_105211.jpg', '0', 3, 485),
(359, '3315153401', 'Fauzia Irfani', 'Pendidikan Kimia', 'fauziairf@gmail.com', 'Jl. Pulau Saparua Raya No 244 Perumnas 3 , Bekasi Timur 17111', '085781900160', './upload/foto_Zizi.png', '0', 4, 220),
(360, '3325161046', 'Alifa Pratiwi', 'Kimia', 'pratiwisutejo05@gmail.com', 'Jl. Madrasah RT10/RW002 No. 75 Gandul Cinere Depok', '08561739258', './upload/3A_02.JPG', '0', 5, 328),
(361, '3325161539', 'Gracia Ramadhani Putri', 'Kimia', 'graciaramadhaniputri@yahoo.com', 'Pondok Labu, jakarta selatan', '089636599914', './upload/IMG-20171121-WA0038.jpg', '0', 5, 333),
(362, '3325160279', 'Puti Andini', 'KIMIA', 'putiandni@gmail.com', 'Jl. Bubulak Gg.Arjuna No.04 Kelurahan kebon pedes, kecamatan tanah sareal, Kota Bogor', '087873438640', './upload/IMG-20180227-WA0001.jpg', '0', 5, 322),
(363, '3325161961', 'Mutiah Arum Puspita', 'Kimia', 'amuthiarum@gmail.com', 'Jl.Kamboja 1 No.90 RT.06/RW.04 Depok', '087881517551', './upload/IMG_7487.JPG', '0', 5, 335),
(364, '3315143677', 'Dissa Safitri Syamsudin', 'Pendidikan Kimia', 'dissasafitri97@gmail.com', 'Jl. Pejompongan No 11 Rt 4 Rw 6, Bendungan Hilir, Tanah Abang, Jakarta Pusat', '089635110130', './upload/IMG_20180302_120302_900.jpg', '0', 3, 78),
(365, '33215150447', 'Iing Akhirudin', 'Kimia', 'iingakhirudin@gmail.com', 'Jalan Bintara VI Rt.03 Rw.06 No.271 Bintara, Bekasi Barat', '082114117446', './upload/IMG-20180302-WA0009_(1).jpg', '0', 4, 141),
(367, '3315140687', 'Yuni Ratnasari', 'Pendidikan Kimia', 'yuniratnasariyuni@gmail.com', 'Jl. H. Beden No 57, Pondok Labu, Cilandak, Jakarta Selatan', '085772266523', './upload/Yuni_Ratnasari_(uk_3x4).jpg', '0', 3, 130),
(368, '3325162299', 'Alifian Nur Ihsan', 'KIMIA', 'Alifiannur27@gmail.com', 'Permata Depok Sektor Safir blok m7 no 5', '087786496611', './upload/IMG_20170308_191630.jpg', '0', 5, 339),
(369, '3315140672', 'EKSI DWI PUJI LESTARI', 'PENDIDIKAN KIMIA', 'eksidwi@gmail.com', 'Jalan Kayu Jati IV No.19', '087711723424', './upload/IMG_20180111_163352.jpg', '0', 3, 79),
(370, '3315143669', 'Novia Putri Yuliani', 'Pendidikan Kimia', 'noviapyuliani@gmail.com', 'Jl. Pemuda 4 No 28', '082112018844', './upload/py.jpg', '0', 3, 88),
(371, '1303617055', 'ATIYAH AZIZIYAH', 'PENDIDIKAN KIMIA', 'atiyahaziziyah@gmail.com', 'Jl. Pulo Besar I No. 20 RT 005 RW 011, Sunter Jaya, Tanjung Priok, Jakarta Utara', '082213667898', './upload/Atiyah_Aziziyah.jpg', '0', 6, 355),
(372, '1303617060', 'MISKA ZIDNA ILMANA', 'PENDIDIKAN KIMIA', 'miskazidna99@gmail.com', 'Desa Cerih, RT 012 RW 001, Jatinegara, Tegal', '085200183876', './upload/rsz_2017-12-11_102535_1.jpg', '0', 6, 368),
(373, '3315140673', 'Aripudin Gojali', 'Pendidikan Kimia', 'aripgozalie@gmail.com', 'Kp.Bojong Kaum Rt 003/005 Desa Karehkel Kec. Leuwiliang Kab.Bogor', '089698589893', './upload/IMG-20171120-WA0003.jpg', '0', 3, 71),
(374, '3315154963', 'AYUDANING SEPTINE AKBAR', 'PENDIDIKAN KIMIA', 'ayuseptine497@gmail.com', 'Perum.Puri Artha Sentosa Blok A No 9 Rt 07/011 Bojonggede-Bogor', '085691282142', './upload/PicsArt_02-27-11_42_17.jpg', '0', 4, 210),
(375, '3315151713', 'Rahma Dwi Pasha', 'Pendidikan Kimia', 'rahmadwipasha@gmail.com', 'Jl. Pulau Bintan 3 No.480. Rt04 / Rw016. Aren Jaya. Bekasi', '08998024404', './upload/a2016-02-28_16_07_29.jpg', '0', 4, 191),
(376, '3315153474', 'Ni Made Rina Septyanawati', 'Pendidikan Kimia', 'nimaderinas@gmail.com', 'Jakarta Selatan', '085715179680', './upload/IMG-20180302-WA0001.jpg', '0', 4, 230),
(377, '3315153290', 'widuri andriana', 'PENDIDIKAN KIMIA', 'alexandriawiena@gmail.com', 'JL.M.ZAKARIA NO 78 RT 01 RW 012 TANAH BARU DEPOK', '085716502553', './upload/IMG-20180305-WA0000.jpg', '0', 4, 242),
(378, '3325150282', 'Tika Rosiana', 'Kimia', 'tikarosiana007@gmail.com', 'Jalan Pratekan Kelurahan Rawamangun, Kecamatan Pulogadung, Jakarta Timur', '087885080449', './upload/IMG-20180301-WA0004.jpg', '0', 4, 160),
(379, '3325153446', 'Rizaldi Al Fauzan', 'Kimia', 'rizaldialfauzan@gmail.com', 'Taman Wisma Asri Blok DD 9 No 3 Bekasi Utara', '085777079407', './upload/Crop.jpg', '0', 4, 154),
(380, '3325150809', 'Muhammad Ismail', 'Kimia', 'sembilantigamuhammadismail@yahoo.co.id', 'Taman Asri Blok J 9 No. 6 RT 05/12, Kel. Gaga, Kec. Larangan, Tangerang, Banten', '082297952412', './upload/IMG-20180228-WA0027.jpg', '0', 4, 145),
(381, '3315140668', 'Irene Mugiarti', 'Pendidikan Kimia', 'irenemugiarti@gmail.com', 'jalan raya ciracas rt 004/07 no. 57 ciracas, jakarta timur', '089693108399', './upload/irene.jpg', '0', 3, 84),
(382, '3315141723', 'Yohana Harapenta Purba', 'Pendidikan Kimia', 'yohanaharapenta.yh@gmail.com', 'Jl. Swasembada Timur XIV No. 7B', '082299467502', './upload/IMG20170727182721.jpg', '0', 3, 102),
(383, '3315140686', 'CHOIRIYAH ANNISA', 'PENDIDIKAN KIMIA', 'choiriyahannis1@gmail.com', 'Jl.R. sanim Rt 03/ Rw 11 no 1 Tanah BARU Beji Depok', '089670606023', './upload/IMG_20180119_100707.JPG', '0', 3, 110),
(384, '3315155486', 'ULFA AZMI NUROHMAH', 'PENDIDIKAN KIMIA', 'ulfa.azmi6@gmail.com', 'jl.kp.rawa bebek RT 04RW 11 No. 18 Kelurahan Kota Baru Kecamatan Bekasi Barat Kota Bekasi Kode Pos 1', '085772572096', './upload/Screenshot_2018-02-27-12-09-26_com_instag', '0', 4, 240),
(385, '3315154713', 'Nida\' Rifdah Al-Karimah', 'Pendidikan Kimia', 'nidarifdahalkarimah@gmail.com', 'Jl. Hemat No. 3 Jakarta Barat', '089616030824', './upload/nida.jpg', '0', 4, 231),
(386, '3325152952', 'TRI SETIYOTO', 'KIMIA', 'trisetiyotounj@gmail.com', 'JL. TIRTA RAYA BLOK F337, JATIKRAMAT, JATIASIH, KOTA BEKASI, JAWA BARAT', '089669288619', './upload/WhatsApp_Image_2018-02-28_at_05_34_17.jpe', '0', 4, 161),
(387, '3315141741', 'AGUS SISMANTO', 'PENDIDIKAN KIMIA', 'sismantoagus@gmail.com', 'Jl. Rawa Bahagia V No. 4, Grogol Petamburan', '081382112959', './upload/agus.jpg', '0', 3, 67),
(388, '3325140713', 'Anisyah Fitri', 'Kimia', 'anisyahfitri89@gmail.com', 'jl. rorotan II RT 001/04 No.70 Jakut', '082249696165', './upload/Anisyah_Fitri.jpg', '0', 3, 33),
(389, '3325140696', 'Cresna Dewi Elfida', 'Kimia', 'cresnaelfida14@gmail.com', 'jl. pisangan baru tengah IV', '089636599757', './upload/IMG20171109141902.jpg', '0', 3, 38),
(390, '1303617014', 'Ratna Yulita Sari', 'Pendidikan Kimia', 'ratnayulita99@gmail.com', 'Perum Pesona Kalangsuria Blok B 4A NO.02 Kec. Rengasdengklok Kab. Karawang', '085885408800', './upload/RATNA_YULITA_S.jpeg', '0', 6, 418),
(391, '1303617034', 'Ramananda Alfriansyah`', 'Pendidikan Kimia', 'ramananda.alfriansyah@yahoo.com', 'Jl. Bintara 1 No.56 RT 13/02 Bintara, Bekasi Barat', '085885107673', './upload/Ramananda_A.jpg', '0', 6, 374),
(392, '1303617029', 'Putri Ahma Niyara', 'Pendidikan Kimia', 'putriniyara@gmail.com', 'Ds. Leuwinutug Jl. Anyar Citeureup - Bogor', '085773940178', './upload/IMG_20180226_203216.jpg', '0', 6, 372),
(393, '1303617041', 'Muhammad Jihad Akbar', 'Pendidikan Kimia', 'mjihad.akbar99@gmail.com', 'Jalan Warakas II gang 6 Nomor 10A Rt 007/03', '081380994036', './upload/jihad.jpg', '0', 6, 367),
(394, '1303617075', 'Suryani Sidqiyati', 'Pendidikan Kimia', 'suryani.sdq@gmail.com', 'Kp. Parung Serab RT05 RW02 Sukmajaya, Depok', '085921414983', './upload/foto_1303617075.jpg', '0', 6, 472),
(395, '1303617068', 'Adila Nur Rizkie', 'Pendidikan Kimia', 'adil.rizkie0901@gmail.com', 'perum telaga harapan blok f10 no 4 Cikarang Barat', '081318644604', './upload/Webp_net-resizeimage.jpg', '0', 6, 350),
(396, '1303617037', 'Eva Dwi Jayanti', 'Pendidikan Kimia', 'eva61dj@yahoo.com', 'Jl.Rawa Indah No.96', '089618208246', './upload/Eva_Dwi_Jayanti_1303617037.jpg', '0', 6, 473),
(397, '1303617077', 'Baya Risky Sangadji', 'Pendidikan Kimia', 'bayasangkar@gmail.com', 'Jl. Haji Amat II, Kukusan, Beji.Depok', '082191380362', './upload/IMG-20171214-WA0006.jpg', '0', 6, 474),
(398, '3325152060', 'Roikhatul Janah', 'Kimia', 'roikhatulj97@gmail.com', 'Jalan Kelud kiri atas 05/004 Jatibening 1 Pondokgede Bekasi', '081585717340', './upload/ika.jpg', '0', 4, 155),
(399, '3325151623', 'Shausan Fairuz Jinan', 'Kimia', 'shausan.fairuz@gmail.com', 'Jl. Bekasi Timur IV RT 07 RW 07 cipiang besar utara jatinegara jakarta timur', '085882266077', './upload/foto_3325151623.jpg', '0', 4, 157),
(400, '3325152894', 'Reza Arrafi rasyid', 'KIMIA', 'reza.arrafi@gmail.com', 'Eramas 2000 blok a9 .no. 9 rt 2 rw 15 pulogebang cakung jakarta timur', '085880226600', './upload/foto_3325152894.jpg', '0', 4, 152),
(401, '3325152960', 'Wisnu Adi Nugroho', 'Kimia', 'wisnuadin97@gmail.com', 'kp.Asem Rt.04 Rw 05, Semanan, Klideres, Jakarta Barat', '085212049356', './upload/IMG-20180228-WA0001_(1).jpg', '0', 4, 162);

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE `master_data` (
  `id_master` int(3) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `tahun_akademik` varchar(10) NOT NULL,
  `type_smt` enum('Ganjil','Genap','','') NOT NULL,
  `daftar_praktikum` enum('Buka','Tutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data`
--

INSERT INTO `master_data` (`id_master`, `semester`, `tahun_akademik`, `type_smt`, `daftar_praktikum`) VALUES
(1, '108', '2017/2018', 'Ganjil', 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `nama_praktikum`
--

CREATE TABLE `nama_praktikum` (
  `id_nama_prak` int(5) NOT NULL,
  `nama_praktikum` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_praktikum`
--

INSERT INTO `nama_praktikum` (`id_nama_prak`, `nama_praktikum`) VALUES
(1, 'Kimia Dasar I'),
(2, 'Kimia Dasar II'),
(3, 'Kimia Dasar'),
(4, 'Kimia Analisa Kualitatif Dan Kuantitatif'),
(5, 'Kimia Pemisahan'),
(6, 'Kimia Analisis Instrument'),
(7, 'Kimia Lingkungan'),
(8, 'Kimia Analisis Lingkungan'),
(9, 'Termodinamika'),
(10, 'Kinetika Kimia'),
(11, 'Kimia Koordinasi'),
(12, 'Kimia Unsur'),
(13, 'Sintesis Kimia Anorganik'),
(14, 'Kimia Organik : Identifikasi Dan Sintesis'),
(15, 'Kimia Organik : Isolasi, Pemurnian, Dan Karakteristik'),
(16, 'Metabolisme Biomolekul'),
(17, 'Struktur Dan Fungsi Biomolekul'),
(18, 'Struktur dan Dasar Reaksi Anorganik'),
(19, 'Sintesis dan Identifikasi Molekul Anorganik');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_alat`
--

CREATE TABLE `peminjaman_alat` (
  `id_peminjaman` int(5) NOT NULL,
  `jenis_kegiatan` varchar(40) NOT NULL,
  `tgl_peminjaman` varchar(15) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_bahan`
--

CREATE TABLE `peminjaman_bahan` (
  `id_peminjaman` int(5) NOT NULL,
  `jenis_kegiatan` varchar(40) NOT NULL,
  `tgl_peminjaman` varchar(15) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(5) NOT NULL,
  `judul_penelitian` varchar(150) NOT NULL,
  `tgl_penelitian` varchar(20) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_aas`
--

CREATE TABLE `penelitian_aas` (
  `id_penelitian` int(5) NOT NULL,
  `judul_penelitian` varchar(100) NOT NULL,
  `tgl_penelitian` varchar(20) NOT NULL,
  `uji_logam` varchar(70) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `jumlah_sampel` varchar(5) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_lembur`
--

CREATE TABLE `penelitian_lembur` (
  `id_penelitian` int(5) NOT NULL,
  `tgl_penelitian` date NOT NULL,
  `judul_penelitian` varchar(100) DEFAULT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_selesai` varchar(10) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `orang_tua` varchar(50) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_saa`
--

CREATE TABLE `penelitian_saa` (
  `id_penelitian` int(5) NOT NULL,
  `judul_penelitian` varchar(100) NOT NULL,
  `tgl_penelitian` varchar(20) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `jumlah_sampel` varchar(5) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `id_praktikum` int(5) NOT NULL,
  `nama_praktikum` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `semester` varchar(4) NOT NULL,
  `asisten` varchar(20) DEFAULT NULL,
  `kuota_asisten` char(2) DEFAULT NULL,
  `prasyarat` varchar(70) NOT NULL,
  `kode_praktikum` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `praktikum`
--

INSERT INTO `praktikum` (`id_praktikum`, `nama_praktikum`, `dosen`, `semester`, `asisten`, `kuota_asisten`, `prasyarat`, `kode_praktikum`) VALUES
(22, 'Termodinamika', 'Dr. Yusmaniar, M.Si', '108', NULL, NULL, 'None', '3042'),
(23, 'Kimia Analisa Kualitatif Dan Kuantitatif', 'Prof. Dr. Erdawati, M.Sc.', '108', NULL, NULL, 'None', '3021'),
(24, 'Metabolisme Biomolekul', 'Dr. Muktiningsih N., M.Si', '108', NULL, NULL, 'None', '3012'),
(25, 'Kinetika Kimia', 'Dr. Afrizal, M.Si', '108', NULL, NULL, 'None', '3043'),
(26, 'Kimia Dasar II', 'Ella Fitriani, M.Pd', '108', NULL, NULL, 'None', '3031'),
(27, 'Kimia Analisis Instrument', 'Dra. Tritiyatma H, M.Si', '108', NULL, NULL, 'None', '3022'),
(28, 'Kimia Organik : Identifikasi Dan Sintesis', 'Dra. Zulmanelis D., M.Si', '108', NULL, NULL, 'None', '3013'),
(29, 'Kinetika Kimia', 'Dr. Maria Paristiowati, M.Si', '108', NULL, NULL, 'None', '3044'),
(30, 'Kimia Organik : Identifikasi Dan Sintesis', 'Drs. Zulhipri, M.Si', '108', NULL, NULL, 'None', '3014'),
(31, 'Struktur dan Dasar Reaksi Anorganik', 'Dr. Sukro Muhab, M.Si', '108', NULL, NULL, 'None', '3045'),
(32, 'Kimia Dasar II', 'Ella Fitriani, M.Pd', '108', NULL, NULL, 'None', '3034'),
(33, 'Kimia Analisis Instrument', 'Dra. Tritiyatma H, M.Si', '108', NULL, NULL, 'None', '3023'),
(34, 'Kimia Organik : Identifikasi Dan Sintesis', 'Dr. Fera Kurniadewi, M.Si', '108', NULL, NULL, 'None', '3015'),
(35, 'Struktur dan Dasar Reaksi Anorganik', 'Dr. Setia Budi, M.Sc.', '108', NULL, NULL, 'None', '3046'),
(36, 'Struktur dan Dasar Reaksi Anorganik', 'Arif Rahman, M.Sc', '108', NULL, NULL, 'None', '3047'),
(37, 'Kimia Analisa Kualitatif Dan Kuantitatif', 'Dr. Moersilah, M.Si', '108', NULL, NULL, 'None', '3024'),
(38, 'Metabolisme Biomolekul', 'Drs. Suhartono, M.Kes', '108', NULL, NULL, 'None', '3016'),
(39, 'Kimia Dasar II', 'Dra. Zulmanelis D., M.Si', '108', NULL, NULL, 'None', '3035'),
(40, 'Metabolisme Biomolekul', 'Drs. Suhartono, M.Kes', '108', NULL, NULL, 'None', '3017'),
(41, 'Sintesis dan Identifikasi Molekul Anorganik', 'Arif Rahman, M.Sc', '108', NULL, NULL, 'None', '3048'),
(42, 'Kimia Pemisahan', 'Prof. Dr. Erdawati, M.Sc.', '108', NULL, NULL, 'None', '3025'),
(43, 'Struktur Dan Fungsi Biomolekul', 'Dr. Muktiningsih N., M.Si', '108', NULL, NULL, 'None', '3018'),
(44, 'Kimia Pemisahan', 'Prof. Dr. Erdawati, M.Sc.', '108', NULL, NULL, 'None', '3026'),
(45, 'Kimia Organik : Isolasi, Pemurnian, Dan Karakteris', 'Dr. Fera Kurniadewi, M.Si', '108', NULL, NULL, 'None', '3019'),
(46, 'Kimia Pemisahan', 'Dr. Moersilah, M.Si', '108', NULL, NULL, 'None', '3027'),
(47, 'Struktur dan Dasar Reaksi Anorganik', 'Arif Rahman, M.Sc', '108', NULL, NULL, 'None', '3049');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_praktikum`
--

CREATE TABLE `riwayat_praktikum` (
  `id_rp` int(5) NOT NULL,
  `id_mahasiswa` int(5) DEFAULT NULL,
  `id_praktikum` int(5) DEFAULT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_praktikum`
--

INSERT INTO `riwayat_praktikum` (`id_rp`, `id_mahasiswa`, `id_praktikum`, `semester`) VALUES
(1, 11, 26, '108'),
(2, 12, 26, '108'),
(3, 13, 32, '108'),
(4, 13, 22, '108'),
(5, 14, 22, '108'),
(6, 14, 32, '108'),
(7, 15, 22, '108'),
(8, 15, 32, '108'),
(9, 16, 32, '108'),
(10, 16, 22, '108'),
(11, 17, 22, '108'),
(12, 17, 32, '108'),
(13, 18, 22, '108'),
(14, 19, 32, '108'),
(15, 19, 22, '108'),
(16, 18, 32, '108'),
(17, 20, 32, '108'),
(18, 20, 22, '108'),
(19, 21, 26, '108'),
(20, 22, 26, '108'),
(21, 23, 26, '108'),
(22, 28, 22, '108'),
(23, 28, 32, '108'),
(24, 29, 22, '108'),
(25, 29, 32, '108'),
(26, 30, 22, '108'),
(27, 30, 32, '108'),
(28, 31, 22, '108'),
(29, 31, 32, '108'),
(30, 32, 22, '108'),
(31, 32, 32, '108'),
(32, 36, 28, '108'),
(33, 36, 29, '108'),
(34, 36, 31, '108'),
(35, 36, 46, '108'),
(36, 37, 25, '108'),
(37, 37, 44, '108'),
(38, 37, 30, '108'),
(39, 37, 47, '108'),
(40, 38, 25, '108'),
(41, 38, 44, '108'),
(42, 38, 30, '108'),
(43, 38, 47, '108'),
(44, 39, 25, '108'),
(45, 39, 44, '108'),
(46, 39, 30, '108'),
(47, 39, 47, '108'),
(48, 40, 25, '108'),
(49, 40, 44, '108'),
(50, 40, 30, '108'),
(51, 40, 47, '108'),
(52, 41, 25, '108'),
(53, 41, 44, '108'),
(54, 41, 30, '108'),
(55, 41, 47, '108'),
(56, 42, 25, '108'),
(57, 42, 44, '108'),
(58, 42, 30, '108'),
(59, 42, 47, '108'),
(60, 43, 25, '108'),
(61, 43, 44, '108'),
(62, 43, 30, '108'),
(63, 43, 47, '108'),
(64, 44, 25, '108'),
(65, 44, 44, '108'),
(66, 44, 30, '108'),
(67, 44, 47, '108'),
(68, 45, 25, '108'),
(69, 45, 44, '108'),
(70, 45, 30, '108'),
(71, 45, 47, '108'),
(72, 46, 28, '108'),
(73, 46, 29, '108'),
(74, 46, 31, '108'),
(75, 46, 46, '108'),
(76, 47, 28, '108'),
(77, 47, 29, '108'),
(78, 47, 31, '108'),
(79, 47, 46, '108'),
(80, 48, 25, '108'),
(81, 48, 44, '108'),
(82, 48, 30, '108'),
(83, 48, 47, '108'),
(84, 49, 25, '108'),
(85, 49, 44, '108'),
(86, 49, 30, '108'),
(87, 49, 47, '108'),
(88, 50, 42, '108'),
(89, 50, 45, '108'),
(90, 50, 35, '108'),
(91, 50, 43, '108'),
(92, 51, 42, '108'),
(93, 51, 45, '108'),
(94, 51, 35, '108'),
(95, 51, 43, '108'),
(96, 52, 42, '108'),
(97, 52, 45, '108'),
(98, 52, 35, '108'),
(99, 52, 43, '108'),
(100, 53, 35, '108'),
(101, 53, 45, '108'),
(102, 53, 42, '108'),
(103, 53, 43, '108'),
(104, 54, 43, '108'),
(105, 54, 42, '108'),
(106, 54, 35, '108'),
(107, 54, 45, '108'),
(108, 55, 35, '108'),
(109, 55, 45, '108'),
(110, 55, 42, '108'),
(111, 55, 43, '108'),
(112, 56, 25, '108'),
(113, 56, 44, '108'),
(114, 56, 30, '108'),
(115, 56, 47, '108'),
(116, 57, 25, '108'),
(117, 57, 44, '108'),
(118, 57, 30, '108'),
(119, 57, 47, '108'),
(120, 58, 25, '108'),
(121, 58, 44, '108'),
(122, 58, 30, '108'),
(123, 58, 47, '108'),
(124, 59, 28, '108'),
(125, 59, 29, '108'),
(126, 59, 31, '108'),
(127, 59, 46, '108'),
(128, 60, 25, '108'),
(129, 60, 44, '108'),
(130, 60, 30, '108'),
(131, 60, 47, '108'),
(132, 61, 25, '108'),
(133, 61, 44, '108'),
(134, 61, 30, '108'),
(135, 61, 47, '108'),
(136, 62, 25, '108'),
(137, 62, 44, '108'),
(138, 62, 30, '108'),
(139, 62, 47, '108'),
(140, 63, 25, '108'),
(141, 63, 44, '108'),
(142, 63, 30, '108'),
(143, 63, 47, '108'),
(144, 65, 25, '108'),
(145, 65, 44, '108'),
(146, 65, 30, '108'),
(147, 65, 47, '108'),
(148, 66, 25, '108'),
(149, 66, 44, '108'),
(150, 66, 30, '108'),
(151, 66, 47, '108'),
(152, 67, 25, '108'),
(153, 67, 44, '108'),
(154, 67, 30, '108'),
(155, 67, 47, '108'),
(156, 68, 35, '108'),
(157, 68, 45, '108'),
(158, 68, 42, '108'),
(159, 68, 43, '108'),
(160, 69, 28, '108'),
(161, 69, 29, '108'),
(162, 69, 31, '108'),
(163, 69, 46, '108'),
(164, 73, 38, '108'),
(165, 73, 27, '108'),
(166, 74, 27, '108'),
(167, 74, 38, '108'),
(168, 75, 27, '108'),
(169, 75, 38, '108'),
(170, 76, 38, '108'),
(171, 76, 27, '108'),
(172, 77, 27, '108'),
(173, 78, 33, '108'),
(174, 78, 40, '108'),
(175, 79, 38, '108'),
(176, 79, 27, '108'),
(177, 77, 38, '108'),
(178, 80, 38, '108'),
(179, 80, 27, '108'),
(180, 81, 38, '108'),
(181, 81, 27, '108'),
(182, 82, 38, '108'),
(183, 82, 27, '108'),
(184, 84, 27, '108'),
(185, 84, 38, '108'),
(186, 86, 33, '108'),
(187, 86, 40, '108'),
(188, 87, 33, '108'),
(189, 87, 40, '108'),
(190, 91, 40, '108'),
(191, 91, 33, '108'),
(192, 92, 40, '108'),
(193, 92, 33, '108'),
(194, 93, 40, '108'),
(195, 93, 33, '108'),
(196, 94, 40, '108'),
(197, 94, 33, '108'),
(198, 95, 24, '108'),
(199, 95, 41, '108'),
(200, 96, 40, '108'),
(201, 96, 33, '108'),
(202, 97, 40, '108'),
(203, 97, 33, '108'),
(204, 98, 40, '108'),
(205, 98, 33, '108'),
(206, 99, 40, '108'),
(207, 99, 33, '108'),
(208, 100, 40, '108'),
(209, 100, 33, '108'),
(210, 101, 40, '108'),
(211, 101, 33, '108'),
(212, 103, 33, '108'),
(213, 103, 40, '108'),
(214, 104, 40, '108'),
(215, 104, 33, '108'),
(216, 105, 24, '108'),
(217, 105, 41, '108'),
(218, 106, 41, '108'),
(219, 107, 24, '108'),
(220, 107, 41, '108'),
(221, 108, 24, '108'),
(222, 108, 41, '108'),
(223, 109, 24, '108'),
(224, 109, 41, '108'),
(225, 110, 26, '108'),
(226, 111, 39, '108'),
(227, 112, 39, '108'),
(228, 113, 39, '108'),
(229, 114, 39, '108'),
(230, 115, 26, '108'),
(231, 116, 26, '108'),
(232, 117, 26, '108'),
(233, 118, 26, '108'),
(234, 119, 26, '108'),
(235, 120, 26, '108'),
(236, 121, 39, '108'),
(237, 122, 26, '108'),
(238, 123, 26, '108'),
(239, 124, 39, '108'),
(240, 125, 39, '108'),
(241, 127, 39, '108'),
(242, 128, 39, '108'),
(243, 129, 39, '108'),
(244, 130, 39, '108'),
(245, 131, 32, '108'),
(246, 131, 22, '108'),
(247, 132, 39, '108'),
(248, 133, 39, '108'),
(249, 135, 24, '108'),
(250, 135, 41, '108'),
(251, 137, 27, '108'),
(252, 137, 38, '108'),
(253, 138, 35, '108'),
(254, 138, 45, '108'),
(255, 138, 42, '108'),
(256, 138, 43, '108'),
(257, 143, 28, '108'),
(258, 143, 29, '108'),
(259, 143, 31, '108'),
(260, 143, 46, '108'),
(261, 142, 28, '108'),
(262, 142, 29, '108'),
(263, 142, 31, '108'),
(264, 142, 46, '108'),
(265, 141, 28, '108'),
(266, 141, 29, '108'),
(267, 141, 31, '108'),
(268, 141, 46, '108'),
(269, 144, 28, '108'),
(270, 144, 29, '108'),
(271, 144, 31, '108'),
(272, 144, 46, '108'),
(273, 145, 28, '108'),
(274, 145, 29, '108'),
(275, 145, 31, '108'),
(276, 145, 46, '108'),
(277, 146, 28, '108'),
(278, 146, 46, '108'),
(279, 146, 29, '108'),
(280, 146, 31, '108'),
(281, 147, 28, '108'),
(282, 147, 46, '108'),
(283, 147, 29, '108'),
(284, 147, 31, '108'),
(285, 148, 28, '108'),
(286, 148, 29, '108'),
(287, 148, 31, '108'),
(288, 148, 46, '108'),
(289, 149, 28, '108'),
(290, 149, 29, '108'),
(291, 149, 31, '108'),
(292, 149, 46, '108'),
(293, 150, 46, '108'),
(294, 150, 28, '108'),
(295, 150, 29, '108'),
(296, 150, 31, '108'),
(297, 151, 28, '108'),
(298, 151, 46, '108'),
(299, 151, 29, '108'),
(300, 151, 31, '108'),
(301, 152, 35, '108'),
(302, 152, 45, '108'),
(303, 152, 42, '108'),
(304, 152, 43, '108'),
(305, 153, 40, '108'),
(306, 153, 33, '108'),
(307, 154, 30, '108'),
(308, 154, 47, '108'),
(309, 154, 44, '108'),
(310, 154, 25, '108'),
(311, 155, 35, '108'),
(312, 155, 45, '108'),
(313, 155, 42, '108'),
(314, 155, 43, '108'),
(315, 156, 35, '108'),
(316, 156, 45, '108'),
(317, 156, 42, '108'),
(318, 156, 43, '108'),
(319, 157, 24, '108'),
(320, 157, 41, '108'),
(321, 158, 24, '108'),
(322, 158, 41, '108'),
(323, 159, 33, '108'),
(324, 160, 40, '108'),
(325, 160, 33, '108'),
(326, 161, 38, '108'),
(327, 161, 27, '108'),
(328, 162, 24, '108'),
(329, 162, 41, '108'),
(330, 163, 24, '108'),
(331, 163, 41, '108'),
(332, 164, 38, '108'),
(333, 164, 27, '108'),
(334, 165, 38, '108'),
(335, 165, 27, '108'),
(336, 166, 38, '108'),
(337, 166, 27, '108'),
(338, 168, 38, '108'),
(339, 168, 27, '108'),
(340, 169, 38, '108'),
(341, 169, 27, '108'),
(342, 170, 38, '108'),
(343, 170, 33, '108'),
(344, 171, 38, '108'),
(345, 171, 33, '108'),
(346, 172, 40, '108'),
(347, 172, 33, '108'),
(348, 390, 26, '108'),
(349, 391, 39, '108'),
(350, 392, 39, '108'),
(351, 393, 39, '108'),
(352, 394, 39, '108'),
(353, 395, 39, '108'),
(354, 396, 39, '108'),
(355, 397, 39, '108'),
(356, 398, 41, '108'),
(357, 399, 41, '108'),
(358, 400, 41, '108'),
(359, 401, 41, '108'),
(360, 400, 24, '108'),
(361, 399, 24, '108'),
(362, 398, 24, '108'),
(363, 401, 24, '108'),
(364, 173, 22, '108'),
(365, 173, 32, '108'),
(366, 177, 32, '108'),
(367, 177, 22, '108'),
(368, 178, 32, '108'),
(369, 178, 22, '108'),
(370, 179, 32, '108'),
(371, 179, 22, '108'),
(372, 180, 32, '108'),
(373, 180, 22, '108'),
(374, 181, 32, '108'),
(375, 181, 22, '108'),
(376, 182, 32, '108'),
(377, 182, 22, '108'),
(378, 183, 22, '108'),
(379, 183, 32, '108'),
(380, 184, 32, '108'),
(381, 184, 22, '108'),
(382, 185, 22, '108'),
(383, 185, 32, '108'),
(384, 186, 22, '108'),
(385, 186, 32, '108'),
(386, 188, 26, '108'),
(387, 189, 32, '108'),
(388, 189, 22, '108'),
(389, 190, 32, '108'),
(390, 190, 22, '108'),
(391, 191, 32, '108'),
(392, 191, 22, '108'),
(393, 192, 32, '108'),
(394, 192, 22, '108'),
(395, 193, 32, '108'),
(396, 193, 22, '108'),
(397, 194, 26, '108'),
(398, 195, 26, '108'),
(399, 196, 26, '108'),
(400, 197, 26, '108'),
(401, 198, 26, '108'),
(402, 199, 26, '108'),
(403, 200, 26, '108'),
(404, 201, 26, '108'),
(405, 202, 26, '108'),
(406, 203, 26, '108'),
(407, 204, 26, '108'),
(408, 205, 26, '108'),
(409, 206, 26, '108'),
(410, 207, 26, '108'),
(411, 208, 26, '108'),
(412, 209, 26, '108'),
(413, 210, 22, '108'),
(414, 210, 32, '108'),
(415, 211, 25, '108'),
(416, 211, 30, '108'),
(417, 214, 44, '108'),
(418, 214, 25, '108'),
(419, 214, 30, '108'),
(420, 214, 47, '108'),
(421, 215, 44, '108'),
(422, 215, 25, '108'),
(423, 215, 30, '108'),
(424, 215, 47, '108'),
(425, 216, 25, '108'),
(426, 216, 44, '108'),
(427, 216, 30, '108'),
(428, 216, 47, '108'),
(429, 217, 25, '108'),
(430, 217, 30, '108'),
(431, 217, 44, '108'),
(432, 217, 47, '108'),
(433, 211, 47, '108'),
(434, 211, 44, '108'),
(435, 218, 25, '108'),
(436, 218, 44, '108'),
(437, 218, 30, '108'),
(438, 218, 47, '108'),
(439, 219, 25, '108'),
(440, 219, 44, '108'),
(441, 219, 30, '108'),
(442, 219, 47, '108'),
(443, 220, 25, '108'),
(444, 220, 44, '108'),
(445, 220, 30, '108'),
(446, 220, 47, '108'),
(447, 221, 25, '108'),
(448, 221, 44, '108'),
(449, 221, 30, '108'),
(450, 221, 47, '108'),
(451, 222, 25, '108'),
(452, 222, 44, '108'),
(453, 222, 30, '108'),
(454, 222, 47, '108'),
(455, 223, 47, '108'),
(456, 223, 30, '108'),
(457, 223, 44, '108'),
(458, 223, 25, '108'),
(459, 224, 28, '108'),
(460, 224, 29, '108'),
(461, 224, 31, '108'),
(462, 224, 46, '108'),
(463, 225, 28, '108'),
(464, 225, 31, '108'),
(465, 225, 29, '108'),
(466, 225, 46, '108'),
(467, 226, 29, '108'),
(468, 226, 31, '108'),
(469, 226, 28, '108'),
(470, 226, 46, '108'),
(471, 229, 35, '108'),
(472, 229, 45, '108'),
(473, 229, 42, '108'),
(474, 229, 43, '108'),
(475, 228, 35, '108'),
(476, 228, 45, '108'),
(477, 228, 42, '108'),
(478, 228, 43, '108'),
(479, 230, 35, '108'),
(480, 230, 45, '108'),
(481, 230, 42, '108'),
(482, 230, 43, '108'),
(483, 231, 35, '108'),
(484, 231, 45, '108'),
(485, 231, 42, '108'),
(486, 231, 43, '108'),
(487, 232, 35, '108'),
(488, 232, 45, '108'),
(489, 232, 42, '108'),
(490, 232, 43, '108'),
(491, 233, 35, '108'),
(492, 233, 45, '108'),
(493, 233, 42, '108'),
(494, 233, 43, '108'),
(495, 234, 35, '108'),
(496, 234, 45, '108'),
(497, 234, 42, '108'),
(498, 234, 43, '108'),
(499, 235, 35, '108'),
(500, 235, 45, '108'),
(501, 235, 42, '108'),
(502, 235, 43, '108'),
(503, 236, 35, '108'),
(504, 236, 45, '108'),
(505, 236, 42, '108'),
(506, 236, 43, '108'),
(507, 237, 25, '108'),
(508, 237, 44, '108'),
(509, 237, 30, '108'),
(510, 237, 47, '108'),
(511, 238, 25, '108'),
(512, 238, 44, '108'),
(513, 238, 30, '108'),
(514, 238, 47, '108'),
(515, 239, 28, '108'),
(516, 239, 29, '108'),
(517, 239, 31, '108'),
(518, 239, 46, '108'),
(519, 240, 25, '108'),
(520, 240, 44, '108'),
(521, 240, 30, '108'),
(522, 240, 47, '108'),
(523, 241, 28, '108'),
(524, 241, 29, '108'),
(525, 241, 31, '108'),
(526, 241, 46, '108'),
(527, 242, 35, '108'),
(528, 242, 45, '108'),
(529, 242, 42, '108'),
(530, 242, 43, '108'),
(531, 243, 28, '108'),
(532, 243, 29, '108'),
(533, 243, 31, '108'),
(534, 243, 46, '108'),
(535, 244, 35, '108'),
(536, 244, 45, '108'),
(537, 244, 42, '108'),
(538, 244, 43, '108'),
(539, 245, 35, '108'),
(540, 245, 45, '108'),
(541, 245, 42, '108'),
(542, 245, 43, '108'),
(543, 246, 35, '108'),
(544, 246, 45, '108'),
(545, 246, 42, '108'),
(546, 246, 43, '108'),
(547, 251, 38, '108'),
(548, 251, 27, '108'),
(549, 252, 40, '108'),
(550, 252, 33, '108'),
(551, 255, 40, '108'),
(552, 255, 33, '108'),
(553, 256, 40, '108'),
(554, 256, 33, '108'),
(555, 257, 27, '108'),
(556, 257, 38, '108'),
(557, 259, 27, '108'),
(558, 259, 38, '108'),
(559, 258, 27, '108'),
(560, 258, 38, '108'),
(561, 260, 40, '108'),
(562, 260, 33, '108'),
(563, 261, 33, '108'),
(564, 261, 40, '108'),
(565, 262, 33, '108'),
(566, 262, 40, '108'),
(567, 263, 24, '108'),
(568, 263, 41, '108'),
(569, 264, 33, '108'),
(570, 264, 40, '108'),
(571, 265, 33, '108'),
(572, 265, 40, '108'),
(573, 266, 33, '108'),
(574, 266, 40, '108'),
(575, 267, 27, '108'),
(576, 267, 38, '108'),
(577, 268, 27, '108'),
(578, 268, 38, '108'),
(579, 269, 24, '108'),
(580, 269, 41, '108'),
(581, 270, 24, '108'),
(582, 270, 41, '108'),
(583, 271, 33, '108'),
(584, 271, 40, '108'),
(585, 272, 27, '108'),
(586, 272, 38, '108'),
(587, 273, 33, '108'),
(588, 273, 40, '108'),
(589, 275, 27, '108'),
(590, 275, 38, '108'),
(591, 276, 27, '108'),
(592, 276, 40, '108'),
(593, 274, 27, '108'),
(594, 274, 38, '108'),
(595, 277, 24, '108'),
(596, 277, 41, '108'),
(597, 278, 38, '108'),
(598, 278, 27, '108'),
(599, 279, 24, '108'),
(600, 279, 41, '108'),
(601, 280, 24, '108'),
(602, 280, 41, '108'),
(603, 281, 24, '108'),
(604, 281, 41, '108'),
(605, 282, 27, '108'),
(606, 282, 38, '108'),
(607, 283, 27, '108'),
(608, 283, 38, '108'),
(609, 284, 27, '108'),
(610, 284, 38, '108'),
(611, 285, 27, '108'),
(612, 285, 38, '108'),
(613, 286, 24, '108'),
(614, 286, 41, '108'),
(615, 287, 27, '108'),
(616, 287, 38, '108'),
(617, 288, 28, '108'),
(618, 288, 29, '108'),
(619, 288, 31, '108'),
(620, 288, 46, '108'),
(621, 289, 46, '108'),
(622, 289, 28, '108'),
(623, 289, 29, '108'),
(624, 289, 31, '108'),
(625, 290, 28, '108'),
(626, 290, 29, '108'),
(627, 290, 31, '108'),
(628, 290, 46, '108'),
(629, 291, 24, '108'),
(630, 291, 41, '108'),
(631, 292, 24, '108'),
(632, 292, 41, '108'),
(633, 293, 28, '108'),
(634, 293, 29, '108'),
(635, 293, 31, '108'),
(636, 293, 46, '108'),
(637, 294, 24, '108'),
(638, 294, 41, '108'),
(639, 295, 27, '108'),
(640, 295, 40, '108'),
(641, 296, 27, '108'),
(642, 296, 38, '108'),
(643, 297, 27, '108'),
(644, 297, 38, '108'),
(645, 298, 41, '108'),
(646, 298, 24, '108'),
(647, 300, 40, '108'),
(648, 300, 41, '108'),
(649, 301, 33, '108'),
(650, 301, 40, '108'),
(651, 302, 26, '108'),
(652, 303, 26, '108'),
(653, 304, 39, '108'),
(654, 305, 39, '108'),
(655, 306, 39, '108'),
(656, 307, 39, '108'),
(657, 308, 39, '108'),
(658, 309, 39, '108'),
(659, 310, 39, '108'),
(660, 311, 26, '108'),
(661, 312, 26, '108'),
(662, 313, 26, '108'),
(663, 314, 26, '108'),
(664, 315, 39, '108'),
(665, 316, 39, '108'),
(666, 317, 39, '108'),
(667, 318, 39, '108'),
(668, 319, 39, '108'),
(669, 320, 39, '108'),
(670, 321, 39, '108'),
(671, 322, 39, '108'),
(672, 323, 26, '108'),
(673, 324, 26, '108'),
(674, 325, 26, '108'),
(675, 327, 39, '108'),
(676, 328, 39, '108'),
(677, 329, 22, '108'),
(678, 329, 32, '108'),
(679, 330, 22, '108'),
(680, 330, 32, '108'),
(681, 331, 24, '108'),
(682, 331, 41, '108'),
(683, 333, 24, '108'),
(684, 333, 41, '108'),
(685, 334, 27, '108'),
(686, 334, 38, '108'),
(687, 336, 38, '108'),
(688, 341, 25, '108'),
(689, 341, 44, '108'),
(690, 341, 30, '108'),
(691, 341, 47, '108'),
(692, 342, 33, '108'),
(693, 343, 25, '108'),
(694, 343, 44, '108'),
(695, 343, 30, '108'),
(696, 343, 47, '108'),
(697, 344, 35, '108'),
(698, 344, 45, '108'),
(699, 344, 42, '108'),
(700, 344, 43, '108'),
(701, 345, 28, '108'),
(702, 345, 29, '108'),
(703, 345, 31, '108'),
(704, 345, 46, '108'),
(705, 346, 28, '108'),
(706, 346, 29, '108'),
(707, 346, 31, '108'),
(708, 346, 46, '108'),
(709, 347, 28, '108'),
(710, 347, 29, '108'),
(711, 347, 31, '108'),
(712, 347, 46, '108'),
(713, 348, 28, '108'),
(714, 348, 29, '108'),
(715, 348, 31, '108'),
(716, 348, 46, '108'),
(717, 349, 28, '108'),
(718, 349, 29, '108'),
(719, 349, 31, '108'),
(720, 349, 46, '108'),
(721, 350, 28, '108'),
(722, 350, 29, '108'),
(723, 350, 31, '108'),
(724, 350, 46, '108'),
(725, 351, 28, '108'),
(726, 351, 29, '108'),
(727, 351, 31, '108'),
(728, 351, 46, '108'),
(729, 352, 28, '108'),
(730, 352, 29, '108'),
(731, 352, 31, '108'),
(732, 352, 46, '108'),
(733, 353, 28, '108'),
(734, 353, 46, '108'),
(735, 353, 29, '108'),
(736, 353, 31, '108'),
(737, 354, 28, '108'),
(738, 354, 46, '108'),
(739, 354, 29, '108'),
(740, 354, 31, '108'),
(741, 355, 28, '108'),
(742, 355, 46, '108'),
(743, 355, 29, '108'),
(744, 355, 31, '108'),
(745, 359, 40, '108'),
(746, 359, 33, '108'),
(747, 360, 35, '108'),
(748, 360, 45, '108'),
(749, 360, 42, '108'),
(750, 360, 43, '108'),
(751, 361, 35, '108'),
(752, 361, 45, '108'),
(753, 361, 42, '108'),
(754, 361, 43, '108'),
(755, 362, 35, '108'),
(756, 362, 45, '108'),
(757, 362, 42, '108'),
(758, 362, 43, '108'),
(759, 363, 35, '108'),
(760, 363, 45, '108'),
(761, 363, 42, '108'),
(762, 363, 43, '108'),
(763, 364, 33, '108'),
(764, 365, 24, '108'),
(765, 365, 41, '108'),
(766, 367, 33, '108'),
(767, 368, 43, '108'),
(768, 368, 42, '108'),
(769, 368, 35, '108'),
(770, 368, 45, '108'),
(771, 370, 33, '108'),
(772, 371, 39, '108'),
(773, 372, 39, '108'),
(774, 374, 40, '108'),
(775, 374, 33, '108'),
(776, 375, 27, '108'),
(777, 375, 38, '108'),
(778, 376, 33, '108'),
(779, 376, 40, '108'),
(780, 378, 24, '108'),
(781, 378, 41, '108'),
(782, 377, 33, '108'),
(783, 377, 40, '108'),
(784, 379, 24, '108'),
(785, 379, 41, '108'),
(786, 380, 24, '108'),
(787, 380, 41, '108'),
(788, 383, 33, '108'),
(789, 384, 33, '108'),
(790, 384, 40, '108'),
(791, 385, 40, '108'),
(792, 385, 33, '108'),
(793, 386, 41, '108'),
(794, 386, 24, '108'),
(795, 387, 44, '108'),
(796, 387, 25, '108'),
(797, 387, 47, '108');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(3) NOT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, '106'),
(2, '107'),
(3, '108'),
(4, '109');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(3) NOT NULL,
  `tahun_angkatan` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun_angkatan`) VALUES
(1, '2012'),
(2, '2013'),
(3, '2014'),
(4, '2015'),
(5, '2016'),
(6, '2017'),
(7, '2018'),
(8, '2019'),
(9, '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('mahasiswa','admin','kalab') DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
(22, '3325136395', '040b7cf4a55014e185813e0644502ea9', 'mahasiswa', '0'),
(23, '3325130971', '040b7cf4a55014e185813e0644502ea9', 'mahasiswa', '0'),
(28, '3145136196', '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa', '0'),
(31, '3315020152', '482c3c729b4f3a82f1274f14d13b9e8c', 'mahasiswa', '0'),
(32, '3325140703', '1e1005889a1a94a88b5956910ac4aa50', 'mahasiswa', '0'),
(33, '3325140713', '3fb84bd9bf4c5f0b4c19754b622393db', 'mahasiswa', '0'),
(34, '3325143686', 'da4bc937f70c4bfce532f86cf5fdb035', 'mahasiswa', '0'),
(35, '3325141796', 'b549564e6ae653395ad85973a4a6b7ce', 'mahasiswa', '0'),
(36, '3325143689', 'd23f299301eabe9d794be67fa7f5c633', 'mahasiswa', '1'),
(37, '3325143692', '30d3a50a9af7643d03d506154418b9ba', 'mahasiswa', '1'),
(38, '3325140696', '253d2e6a80ab54b9c777929589ba6eb7', 'mahasiswa', '0'),
(39, '3325140712', '957706dcc02da8a92e0046db0d91592e', 'mahasiswa', '0'),
(40, '3325140707', '26ddfb073878155c56d4268391cf2dfc', 'mahasiswa', '0'),
(41, '3325140709', '142c58339a2cb0021d40b0fd72411bcc', 'mahasiswa', '0'),
(42, '3325140705', '2208966f06a4f9d0733d55d8a61f50ec', 'mahasiswa', '0'),
(43, '3325140698', '52c6760d12e98ae78ead0b2f30f7b15c', 'mahasiswa', '0'),
(45, '3325141802', 'b9459d8019df7beef6641c35fbc7b1a3', 'mahasiswa', '0'),
(46, '3325141794', 'f525e5833350461c3319105dafc7e228', 'mahasiswa', '0'),
(47, '3325143694', '7d1ce770d47d78f9f4256dade16f4946', 'mahasiswa', '1'),
(48, '3325140708', 'b46ea4a4d20c7bae03233bf1eddbab23', 'mahasiswa', '0'),
(49, '3325143690', '98adbceec845a36b5ea46aa0f5f264d7', 'mahasiswa', '0'),
(50, '3325140702', 'c1f2c1b0546b2633e646d1c554b7b6f3', 'mahasiswa', '0'),
(51, '3325140714', 'e9f51b67d854bf32142132e9ffaafa25', 'mahasiswa', '0'),
(52, '3325140700', '6648634cb4026226a3ad3d5a2f23cb4d', 'mahasiswa', '0'),
(53, '3325140710', 'acffef28d85e55cf179f820893cfe6cb', 'mahasiswa', '0'),
(54, '3325141801', 'cc099479bd4d73efc73fc634a976ff45', 'mahasiswa', '0'),
(56, '3325141804', '24fef9a71a711b2dff5834c7ff137a54', 'mahasiswa', '0'),
(58, '3325140706', '16f69776c47c60b70e9f04f03b584a5a', 'mahasiswa', '1'),
(59, '3325141800', 'd12adef5fd070fe60910d13a35a26143', 'mahasiswa', '0'),
(60, '3325140697', '6a0f83350a68baea791c0c8465c5b23c', 'mahasiswa', '0'),
(61, '3325140699', 'd7c8c490ba4014194c300e829397378d', 'mahasiswa', '0'),
(62, '3325143691', '1faf2b13d413c9e52053a0b76da02a9a', 'mahasiswa', '0'),
(63, '3325140711', '7afa0d277462081349e3d47092f54813', 'mahasiswa', '0'),
(64, '3325140704', '87860e71af674ca4e8597add7a702a43', 'mahasiswa', '0'),
(65, '3315140681', '57b1ccfc06c4e2d6d11418b4bf3d66f4', 'mahasiswa', '0'),
(66, '3315141739', 'd7ff7337c07062e8532c1d79fc0393cf', 'mahasiswa', '0'),
(67, '3315141741', '9020454f52becca3a6cc48e6fd689bd3', 'mahasiswa', '0'),
(68, '3315140871', '75d35856355d8d50e5a94be52441ea4d', 'mahasiswa', '1'),
(69, '3315141740', 'd45cdd4543e1addb8d6bd6ffbe0a4d6c', 'mahasiswa', '1'),
(70, '3315140691', 'e0e2311354dd29357708fb6254fe507f', 'mahasiswa', '1'),
(71, '3315140673', '5e4a3b013ac9faf16e3a8100abdfa751', 'mahasiswa', '0'),
(72, '3315140689', '62b35ab8e7eee5faab7be471b7273484', 'mahasiswa', '0'),
(73, '3315143678', 'b5b3cc3acffe9e8d851641ee06e3e02a', 'mahasiswa', '1'),
(74, '3315141734', 'a15aa589964d35f0e6796dabc2c93c13', 'mahasiswa', '1'),
(75, '3315143668', '6cd5ea59a408b9b60f16fe40678289f8', 'mahasiswa', '1'),
(76, '3315140683', '715a700a7c99320da0421da0f02a9d97', 'mahasiswa', '1'),
(77, '3315140695', '6df01e20259209b0458152dc72ed4243', 'mahasiswa', '0'),
(78, '3315143677', '7e5b9ee67f1d8760d123c52fadddbcb7', 'mahasiswa', '0'),
(79, '3315140672', 'bb0477ed9f14932e956ff0815abaa51e', 'mahasiswa', '0'),
(80, '3315140657', 'b81ca2f0739a5ffc6a31a47a425aadab', 'mahasiswa', '1'),
(81, '3315140682', '9d2e06bc5da516190815414e28e98146', 'mahasiswa', '1'),
(82, '3315140685', '0b63f5bfee7e0b0a9fd9cdaf2f2dd7ac', 'mahasiswa', '0'),
(83, '3315140666', 'e98fc3f770fdea62477381ad994ef127', 'mahasiswa', '1'),
(84, '3315140668', '12d8a39912674bc89c1e6c5d5e2524f1', 'mahasiswa', '0'),
(85, '3315145606', '12dfa95ba7fbb07c9dde972a29753bbb', 'mahasiswa', '1'),
(86, '3315140658', 'cbda8df824238228c998edb7a6be5eae', 'mahasiswa', '1'),
(87, '3315140663', '54b062878ce9ee7ed98cd529e734052b', 'mahasiswa', '1'),
(88, '3315143669', 'd762a51f8c904fd005df00bbc473c33a', 'mahasiswa', '0'),
(89, '3315141724', '23635bc5083ac6b1fc302899a1117dba', 'mahasiswa', '0'),
(90, '3315140669', '559be662f2cabc5b05866e2ba2d2beb7', 'mahasiswa', '1'),
(91, '3315143674', '2156ca3958a3248025f2fc6eb20b628a', 'mahasiswa', '1'),
(92, '3315140675', '56f5ecaddbeeab2e3ab26c341d9de7bc', 'mahasiswa', '1'),
(93, '3315140693', 'd04707b0b7f2e16a912c2863bcb3292d', 'mahasiswa', '0'),
(94, '3315140692', '369c4b8355d3afbd96c6e600aff36984', 'mahasiswa', '1'),
(95, '3315143673', '2bbf688f789587d3e8eff26c8df1a594', 'mahasiswa', '1'),
(96, '3315140678', '9735495f0c22f7b157e632b4fa23cbd8', 'mahasiswa', '1'),
(97, '3315140667', '632ea0838137c0f630e0905a77b5abee', 'mahasiswa', '1'),
(98, '3315143666', 'f0cc2149ad43aaa0d7dda02d97585bfa', 'mahasiswa', '1'),
(99, '3315140677', '463cc59a92250af0d604169c55a83656', 'mahasiswa', '1'),
(100, '3315143682', '805c593048825718b0fa8a18a58c57f0', 'mahasiswa', '1'),
(101, '3315141719', '86edccee43a26fca06eeaa4b11020282', 'mahasiswa', '1'),
(102, '3315141723', '669fd7f3273528a49f1835adaa2103d7', 'mahasiswa', '0'),
(103, '3315143685', 'caec673995bd59838c7144bc12364145', 'mahasiswa', '1'),
(104, '3315140676', 'efec20fa096651a94792d77ee2fd8c8d', 'mahasiswa', '1'),
(105, '3315143681', '5110331ea6822b886de5d69507c25efb', 'mahasiswa', '1'),
(106, '3314153679', '79e8cff84dd46b499376e7f78551f57c', 'mahasiswa', '1'),
(107, '3315141727', 'b0e80dd8fbc273111401dca51d796420', 'mahasiswa', '0'),
(108, '3315141736', '5e8171f94335d28f39bedaed0938e9c6', 'mahasiswa', '0'),
(109, '3315140684', 'e7769ec844a2dbf01fb7760c9615a6d3', 'mahasiswa', '1'),
(110, '3315140686', 'a7ca5b15370945292c3a959eaa4aefb5', 'mahasiswa', '0'),
(111, '3315143671', '30238d292df008affbfe4d315a1005cd', 'mahasiswa', '0'),
(112, '3315143683', '07f8442d9da41809ecd103451ce42bf6', 'mahasiswa', '0'),
(113, '3315140664', 'd1024288fdcd7e071e972060e751545a', 'mahasiswa', '1'),
(114, '3315140661', 'ceff876d92f849c50737d1787372e034', 'mahasiswa', '1'),
(115, '3315140665', '89f1b43ec7c1a5b9036370f88843f863', 'mahasiswa', '1'),
(116, '3315141722', '3889f18b6a2768620d9ffb8e6914beec', 'mahasiswa', '1'),
(117, '3315140662', '70edfa0bdea5bcff5feae2a4caa39c5b', 'mahasiswa', '1'),
(118, '3315141720', '2bba8944b879aa3a54ad0a63f18ef7c1', 'mahasiswa', '0'),
(119, '3315140694', '2f1a970ee482e3b96d0290f11ffcb73e', 'mahasiswa', '1'),
(120, '3315141737', 'fb532b78786c1c5b3ac40fd64c346050', 'mahasiswa', '1'),
(121, '3315141742', '6b116e4b00a70825a1f1bd6cc1c7e958', 'mahasiswa', '0'),
(122, '3315140680', 'aa681a11647ce4dcd185c82ab8a2e07e', 'mahasiswa', '1'),
(123, '3315141731', 'd284227da1117c0457440fbb428caac5', 'mahasiswa', '1'),
(124, '3315140659', 'cb2a7966a06991848433ea7e971d44c0', 'mahasiswa', '1'),
(125, '3315143670', '080d06f2e01acce6d4aac36eb0a7233b', 'mahasiswa', '1'),
(126, '3315140679', '7dda0f8a8be0ef00ff712cfd47e78d04', 'mahasiswa', '1'),
(127, '3315141721', 'a46ea80ca42b7e215b904b02ac2ab555', 'mahasiswa', '1'),
(128, '3315141728', '9a6ca548d7e2dfb4c4c8cdce9aeab78c', 'mahasiswa', '0'),
(129, '3315140660', '47a790cf1f7a4deaf555eb5fb6e84c24', 'mahasiswa', '1'),
(130, '3315140687', 'cf2a1add96bd25cf9dec965f4bcc9105', 'mahasiswa', '0'),
(131, '3325153160', '332166f5b6d9444f28dedf4d8942d53a', 'mahasiswa', '0'),
(132, '3325151769', '0566326e9e72f66bcd5d7131b81636c5', 'mahasiswa', '0'),
(133, '3325152166', '4d398f5b171978096a2147e9de6c2900', 'mahasiswa', '0'),
(134, '3325151392', '9b60b44cb6d936cd8c196c563ae66236', 'mahasiswa', '0'),
(135, '3325153540', '354be3c44ba2a63701720a78f443e15a', 'mahasiswa', '0'),
(136, '3325153505', 'a80d539abdffc665a1d99afc33bb77b4', 'mahasiswa', '0'),
(137, '3325152404', '153b99d4ff789a31e2399eb13c469457', 'mahasiswa', '0'),
(138, '3325151607', '9d31f2decb62e9bafd2bb4993d73bedc', 'mahasiswa', '0'),
(139, '3325152464', 'fc20880ce9313397d0b84c6eb5e47e87', 'mahasiswa', '0'),
(140, '3325150752', 'f652baf8e6a02788645f92b3838f69c2', 'mahasiswa', '0'),
(141, '3325150447', '52b5be37a8c3e1b14b68dd08d9142d47', 'mahasiswa', '1'),
(142, '3325152977', '3cdf2d21bf41bb380dccb5b785160ba4', 'mahasiswa', '0'),
(143, '3325150768', '5b3f46b41b74dad3a8ca00e0da010dd8', 'mahasiswa', '0'),
(144, '3325150368', '4b753abed4904acec8e97f29977a0d8b', 'mahasiswa', '0'),
(145, '3325150809', '01bba972dd16c5b64af40bac8b52c6d2', 'mahasiswa', '0'),
(146, '3325151513', '1060e93c991d3eb64963c1b98f0e24a6', 'mahasiswa', '0'),
(147, '3325151070', 'e7c79ded143c34988bde12e3b9563908', 'mahasiswa', '0'),
(148, '3325155157', 'c51d49734f1b500cedb3fc548bedd48c', 'mahasiswa', '0'),
(149, '3325154903', '5c5f7a8decd836bdc7af5a6960efcdaf', 'mahasiswa', '0'),
(150, '3325151730', '9e8335525112ee9b58294ac2cf5d1d7f', 'mahasiswa', '0'),
(151, '3325151291', '09dc2270f9994aee41d7f72cc6f2413a', 'mahasiswa', '0'),
(152, '3325152894', 'c58034ca3386cf612b88771fb085d770', 'mahasiswa', '0'),
(153, '3325153027', '33e498bf6581c4408afee5a5242de73a', 'mahasiswa', '1'),
(154, '3325153446', 'a66a125c0c46bdc18acd8dc53d421657', 'mahasiswa', '0'),
(155, '3325152060', '65cbaa49ee3356739fdad8b90751ed0a', 'mahasiswa', '0'),
(156, '3325151761', '04abc09baac3873ccc0be8ad61931bf9', 'mahasiswa', '0'),
(157, '3325151623', '3b24681c4f1a51f60df39cf19d102a2f', 'mahasiswa', '0'),
(158, '3325151442', '4dbcccea16e8f52af9055d62735c51a3', 'mahasiswa', '0'),
(159, '3325153776', 'c8e8d2d9b3042fd55d7486797a595f3e', 'mahasiswa', '0'),
(160, '3325150282', 'c017daeb34c7f6bcc339428ebb667bb9', 'mahasiswa', '0'),
(161, '3325152952', '6fb9855b977f3d2e1483d63b695bf9f3', 'mahasiswa', '0'),
(162, '3325152960', '0e23e77f5d09abd1c89b4d09c9d7dbc5', 'mahasiswa', '0'),
(163, '3325151796', '88d72c361f444a4f4f098fca8980ab71', 'mahasiswa', '0'),
(164, '3325151283', '6f42e3e9afee8316145d21578357bd70', 'mahasiswa', '0'),
(165, '3325152591', '8d3f26279aab121ce3b7c8d1bd93f7fe', 'mahasiswa', '0'),
(166, '3325150300', '40fa9dde429085e5b75b01441d1901f5', 'mahasiswa', '0'),
(167, '3315151239', 'de92b9c20e091e542e022afbb19faccf', 'mahasiswa', '0'),
(168, '3315150976', '81a130ea940d021d3b2d3a6fc25feb57', 'mahasiswa', '0'),
(169, '3315150764', 'e686841f4d53c7b8633a1cd7839d6e0f', 'mahasiswa', '0'),
(170, '3315151439', '4581b8f091c743f2dd3e25c39cc2e2e5', 'mahasiswa', '0'),
(171, '3315151163', '4eb671f7008921bce7ecdeb0c05a876e', 'mahasiswa', '0'),
(172, '3315151028', '4d629e0520cc56e6f2a92464eec20849', 'mahasiswa', '0'),
(173, '3315150528', '1c703b2c381350445b4cfc02f5eb0c9d', 'mahasiswa', '0'),
(174, '3315151882', '7a0606c06ee725bebbaad8cd62bd6620', 'mahasiswa', '0'),
(175, '3315150237', 'fe437bf45e9a7f25d158a8b602c40781', 'mahasiswa', '1'),
(176, '3315150808', 'b5be3008b5b5a94690c2e06c4de02855', 'mahasiswa', '0'),
(177, '3315151603', 'b9997fc563592480a5b1480d16293807', 'mahasiswa', '0'),
(178, '3315151096', 'f3c2e9b133c6db946bd9d6cfad8b4c2e', 'mahasiswa', '0'),
(179, '3315150799', '8b47322d6c8ec78055b9ef2e12b7cbf2', 'mahasiswa', '1'),
(180, '3315151954', '4f9a4b2a0754a84bfb31d38da26e20d5', 'mahasiswa', '0'),
(181, '3315151544', 'e68df3dda57328470a7e1ac83e1612c2', 'mahasiswa', '0'),
(182, '3315150381', 'f28fe4148b616dd4a2de73266e213183', 'mahasiswa', '0'),
(183, '3315150810', '3336a63556adddb3d360858f5ae73066', 'mahasiswa', '0'),
(184, '3315150793', '774f2481014271122885d7d0483cf57d', 'mahasiswa', '0'),
(185, '3315151613', 'fb9c96e5a674e35f2c4b085a854b8fd0', 'mahasiswa', '0'),
(186, '3315151177', 'e5d16af1fe9514ab15374ba7b1c41529', 'mahasiswa', '0'),
(187, '3315150742', '6d69b2b400f033c08625a2a231a51206', 'mahasiswa', '0'),
(188, '3315151052', '33f5df86b5ab04a8b76980c2517fd0b8', 'mahasiswa', '0'),
(189, '3315151964', '725484e813bf27b7a3f152a38c6706fc', 'mahasiswa', '0'),
(190, '3315151866', '92bc903fc4f5ff6885d2a0ab7d5e465f', 'mahasiswa', '0'),
(191, '3315151713', 'abe98e1ee3d9705323051284a6bf9fc4', 'mahasiswa', '0'),
(192, '3315150737', '0e6e495fc70662e6869ab2b890976094', 'mahasiswa', '0'),
(193, '3315150411', '7ac5eb3cf8fc8d0bcb249738a9f90fa1', 'mahasiswa', '0'),
(194, '3315150269', 'a4cd6b938d668f5c9f01015e381be252', 'mahasiswa', '0'),
(195, '3315150083', '9a9f03ec3a70f387071c1d41ef85527e', 'mahasiswa', '0'),
(196, '3315151787', '3afd16e721eeb2bf3c6c8f0fc0e884ef', 'mahasiswa', '0'),
(197, '3315151504', '94ad067ae1087641cdd5cf5c06ba2934', 'mahasiswa', '0'),
(198, '3315150937', '83a0d326cb0684d774a56378aa55ca58', 'mahasiswa', '0'),
(199, '3315151263', '7d1ca5133476eda363259c0b6c45a2ad', 'mahasiswa', '0'),
(200, '3315150784', 'd80df41819ddc34b7c0101e6ae8a3917', 'mahasiswa', '1'),
(201, '3315150285', 'f37ada18a3f0215478338fb286773a72', 'mahasiswa', '0'),
(202, '3315150075', '4b9d50aeb86262766fa23d45bdea33d5', 'mahasiswa', '0'),
(203, '3315150597', '98a4dd490d17ebe80b28189ff80cc7a1', 'mahasiswa', '0'),
(204, '3315150446', '2218389a3135d68db4d60ca48973e0a9', 'mahasiswa', '0'),
(205, '3315151147', 'd74a74b244bd0777bac7518b1559f3aa', 'mahasiswa', '0'),
(206, '3315152825', '12ac41a32ab76a55be6493da8a054d16', 'mahasiswa', '0'),
(207, '3315154454', '6bfbc42f2d123d2dc92bf43c878e89a0', 'mahasiswa', '0'),
(208, '3315152283', 'c133319ed9883ef07e76a5f712762717', 'mahasiswa', '0'),
(209, '3315152494', '362f0df7ccb30f3d0d044546e19a1861', 'mahasiswa', '0'),
(210, '3315154963', '6ae7f13b32e07e428ec92ee7d3b02a5a', 'mahasiswa', '0'),
(211, '3315152374', 'db7016d8a9dd4cca382102ff64f04879', 'mahasiswa', '0'),
(212, '3315152382', '063269d35ded06c4a56ac1ce7e8dd74b', 'mahasiswa', '0'),
(213, '3315153080', '37c9ab1bd22f788ab59b369b25f5aa16', 'mahasiswa', '0'),
(214, '3315153156', '0045b722c980f452f885f521aca99231', 'mahasiswa', '0'),
(215, '3315153750', '7222ca9a86afa5d78afd60fa8a6d7d57', 'mahasiswa', '0'),
(216, '3315152895', '7e868a5946edc5e9692417a990c5970b', 'mahasiswa', '0'),
(217, '3315153267', 'a9413eac5d993ce96b947b981c745f1a', 'mahasiswa', '0'),
(218, '3315152935', '4b6a9ad8b079f66fff5350c99304c8d6', 'mahasiswa', '0'),
(219, '3315153012', 'db998b31341b9bda5b01d735b50c38ed', 'mahasiswa', '0'),
(220, '3315153401', '8a5ddcf86f68282e8e14215f4cb704fc', 'mahasiswa', '0'),
(221, '3315153846', 'fabaf9c24dce70612efb4b532e75e9cd', 'mahasiswa', '0'),
(222, '3315150026', '460c307c56d05eb9901e71671671ee01', 'mahasiswa', '0'),
(223, '3315152940', '35820fa6165a303f4d855906c5e6e1a6', 'mahasiswa', '0'),
(224, '3315152919', 'f30141bbc6cbd669d3da7aa8d1eae858', 'mahasiswa', '0'),
(225, '3315153204', 'ddbf04d8719a0bb2d220dadade410a4e', 'mahasiswa', '0'),
(226, '3315152634', '62a6b2030f2fd00c1a2602c2166fec21', 'mahasiswa', '0'),
(227, '3315154285', '7049d00ee5e861bde0dbefdda806b2a0', 'mahasiswa', '0'),
(228, '3315152538', 'c9c5282b00da6519b213c519b799bb7c', 'mahasiswa', '0'),
(229, '3315152797', '3e1d4378e027af7ccb2c94237d290c3d', 'mahasiswa', '0'),
(230, '3315153474', '6578dad42aa4fe1ca08e4265317f5a30', 'mahasiswa', '0'),
(231, '3315154713', 'bc0afd9ec5142f6d68d75c49b2ffd3ab', 'mahasiswa', '0'),
(232, '3315153513', 'f1568fd2e06d2492eff71bea5a9c9d87', 'mahasiswa', '0'),
(233, '3315152346', 'd434d329597c5a7ef93578009933d3fd', 'mahasiswa', '0'),
(234, '3315153435', '617b4ab492b1b7fd86a9968c7323d81f', 'mahasiswa', '1'),
(235, '3315153162', '35149f4e1ceac6063b8e57761040fcee', 'mahasiswa', '0'),
(236, '3315153288', '25562c01c44c83074129cd2e616a880a', 'mahasiswa', '0'),
(237, '3315154623', '3737053f3cc4194139ce3122e6dff6c9', 'mahasiswa', '0'),
(238, '3315153031', '7fbac0cefc37cec97eba6d15c0af85f4', 'mahasiswa', '0'),
(239, '3315154316', 'd9e0dd906bab1f1b8cbe5c00bad66a09', 'mahasiswa', '1'),
(240, '3315155486', '56b9acc0bff82daadf7a03151721882e', 'mahasiswa', '0'),
(241, '3315153356', 'b9930c5d368f4ab8787dd36d81843a2b', 'mahasiswa', '0'),
(242, '3315153290', '767cec9f03f622e97d6e34eb62024042', 'mahasiswa', '0'),
(243, '3315152054', '372fe6391e8fbca88b628d0edee4b1a8', 'mahasiswa', '0'),
(244, '3315154720', 'bdea482d3207469dd41ef7a17f8da4c9', 'mahasiswa', '0'),
(245, '3315161809', 'cc8396f7f4022acb647c7c99f339eb31', 'mahasiswa', '0'),
(246, '3315164506', 'ac32c48a2a3685e1404e790180fa58b3', 'mahasiswa', '0'),
(247, '3315163146', '0ba289ceaf48533d41ab4f78713053d4', 'mahasiswa', '0'),
(248, '3315152149', '84bf37fcee2914ecc0abad69d5916e36', 'mahasiswa', '1'),
(249, '3315152292', '3297339126d2473318543486bea440b7', 'mahasiswa', '1'),
(250, '3315162193', '09f22eb76d5bdae9c6139bdad91fcdfa', 'mahasiswa', '0'),
(251, '3315163771', '5f9ec5470abfca716202ce6f83fcdb14', 'mahasiswa', '0'),
(252, '3315161898', '544aac183b424e4288b8f79449bb7e44', 'mahasiswa', '0'),
(253, '3315165343', 'fbcf48b3c336aeae665abc5fc870aac8', 'mahasiswa', '0'),
(254, '3315162506', '49455cd56d0d2b5e31aa71ac7ef3609e', 'mahasiswa', '0'),
(255, '3315161817', '881c7527c77ac8653f0c6d51bae9bb2e', 'mahasiswa', '0'),
(256, '3315161560', '871549e2a5af9b3998353bf69d42ab03', 'mahasiswa', '0'),
(257, '3315162092', 'aad1aafe78f3c00168f48b687c04e159', 'mahasiswa', '1'),
(258, '3315162374', 'd9f7c905122fffafe47eec7e5fc0a4a4', 'mahasiswa', '0'),
(259, '3315162203', 'c7bf30cd94c13c51424e3c5ce489d418', 'mahasiswa', '0'),
(260, '3315162724', '2c1347e6d58258c27450820e5af725ca', 'mahasiswa', '0'),
(261, '3315163483', 'e365720da6347eb62358ab51297c5d17', 'mahasiswa', '0'),
(262, '3315163074', 'fdad250286f56b9be1458f99fe42d89f', 'mahasiswa', '0'),
(263, '3315162716', 'ba08a56993264a55d1fa0b54c8e8fb1f', 'mahasiswa', '0'),
(264, '3315163840', '9aea4d53f568fbe289c541429dffac39', 'mahasiswa', '0'),
(265, '3315163208', '8a0a7c2a1f49fea1fb6a225cd0f40080', 'mahasiswa', '0'),
(266, '3315162675', '2f496bfdf9e2cdd8868eeb93085d8610', 'mahasiswa', '0'),
(267, '3315163112', '59e3a44525f53ce16694d60c4c6fc144', 'mahasiswa', '0'),
(268, '3315162559', 'f0cae725409b3789bcf12552cca73172', 'mahasiswa', '0'),
(269, '3315163945', '6ea8b727733c508a456315017dc80115', 'mahasiswa', '0'),
(270, '3315164240', '812879aa9658064643063e248d167e15', 'mahasiswa', '0'),
(271, '3315162267', 'f374bcd29cae5aeedbb90d461ad25e0b', 'mahasiswa', '0'),
(272, '3315163433', '34338b26a5175c65a775fdcc182d9dad', 'mahasiswa', '0'),
(273, '3315163223', '2fbc95cd96f2b4b3af624348f1f8d10c', 'mahasiswa', '0'),
(274, '3315162345', 'd6c46cb2c94a46dbf38d1b840d6ca63e', 'mahasiswa', '0'),
(275, '3315163577', 'e3fd835fc56965056ad66a0614737c8b', 'mahasiswa', '1'),
(276, '3315165477', '41755baec9f8922cd3ced40aef53ab26', 'mahasiswa', '0'),
(277, '3315163529', '2e6c060858edef9296a24e6273521ae6', 'mahasiswa', '0'),
(278, '3315162377', '4a47fcee63d7490aac3d51d8b8cc9622', 'mahasiswa', '0'),
(279, '3315165299', 'ff18020175c722ba07d15f09ec3a5e0c', 'mahasiswa', '0'),
(280, '3315162802', 'ff56c14fadd9d6b895ed3bdc8abfe237', 'mahasiswa', '0'),
(281, '3315160076', '801d1ea76e5ec1c4dafc732c498fda71', 'mahasiswa', '0'),
(282, '3315160776', '0824c4997850d03f9c9a087c08de489d', 'mahasiswa', '0'),
(283, '3315160595', 'f87ec937eb302529e3f9b21bfb8ec5b2', 'mahasiswa', '0'),
(284, '3315160699', '82ef6be661596bbce1e8ba60d0b1ce7b', 'mahasiswa', '0'),
(285, '3315160700', 'dfbbdd4e65ecd40ca9c52fef6150a63d', 'mahasiswa', '0'),
(286, '3315161240', '473b3dbe88aaa86bf2e2f94ef5e8035e', 'mahasiswa', '0'),
(287, '3315160236', '6744f316399889b44b4f8de13d8fb700', 'mahasiswa', '0'),
(288, '3315161750', '19f1aff44ea6d8ab0b8687a2ce8a81a6', 'mahasiswa', '0'),
(289, '3315160224', '7d2798a091dab810f393e17e35e39481', 'mahasiswa', '0'),
(290, '3315160636', '4ea79a47929cef3279ed94686a1507a1', 'mahasiswa', '0'),
(291, '3315161737', 'cdf313f1525ed1fe946b92d55f460974', 'mahasiswa', '0'),
(292, '3315160803', 'fbfb3e474150a9dbd1eac8d531ff2b03', 'mahasiswa', '0'),
(293, '3315160407', 'fa077fb3d66e99223ccb70c730f25c04', 'mahasiswa', '0'),
(294, '3315160055', 'd90afca319a7059be89d638ad222c1cf', 'mahasiswa', '0'),
(295, '3315160705', '3376e5591a7fbd5d2c3834956b488144', 'mahasiswa', '0'),
(296, '3315161142', '7b54e307aa6a83002d5603f15dc730c9', 'mahasiswa', '0'),
(297, '3315160427', '226991522bd7a06a6810b3cceafb2a87', 'mahasiswa', '0'),
(298, '3315161629', 'ffcb8b360b839f87d20f0c9a2510463c', 'mahasiswa', '0'),
(299, '3315161026', '35b31f0e8aa7e4cace086911c3b2c880', 'mahasiswa', '0'),
(300, '3315165487', 'bde42807d73453eb2debf018f3a479c4', 'mahasiswa', '0'),
(301, '3315161033', '9219a9380ead5c7261bb505446bcad56', 'mahasiswa', '0'),
(302, '3315161564', 'd980f231583ad8d329e7df1be1adf83e', 'mahasiswa', '0'),
(303, '3315161543', '5e35a21a6926f7d04d48f381282d5a56', 'mahasiswa', '0'),
(304, '3315160976', '3378fafc150ffd4fbe642b9cfd1ac611', 'mahasiswa', '0'),
(305, '3315161364', '12fb734a33252a72c9b305e24b1b82d1', 'mahasiswa', '0'),
(306, '3315161013', '4f1847e077dd80b39d31b8615259f0b0', 'mahasiswa', '0'),
(307, '3315160978', 'c7a20340f057d54d96e09147c4c00765', 'mahasiswa', '1'),
(308, '3315161562', 'b3d07f22efa34f708e8b645088fd6e0a', 'mahasiswa', '0'),
(309, '3315160520', 'c2858bde16583c685d10ae6cfbd044d8', 'mahasiswa', '0'),
(310, '3315160257', '26edb9e9cd2c04667a9f942ebf114d21', 'mahasiswa', '0'),
(311, '3315160775', '4c622f00ab4333d360d73c00313f5ff6', 'mahasiswa', '0'),
(312, '3315160639', 'd09a6dea2c3728de5597cb21e3788a9b', 'mahasiswa', '0'),
(313, '3315160450', '9352dfe25cd2bc734b9ee807d11214bb', 'mahasiswa', '0'),
(314, '3315161162', 'fc42eeab3bdec814dedef67ac91bf2b4', 'mahasiswa', '0'),
(315, '3315160151', 'e9c070e08485cbb31b4453a1b3101023', 'mahasiswa', '0'),
(317, '3315160575', 'a281349fe15db791a80fc0dfca15e908', 'mahasiswa', '0'),
(318, '3325160021', '66e0d8839189fcb216a7ff3186fd02d9', 'mahasiswa', '0'),
(319, '3325160143', 'c38a2471d9e3873a633f1c7f8dafc912', 'mahasiswa', '0'),
(320, '3325160209', 'bfc8bb1b876a7a09788659c0740a1ecf', 'mahasiswa', '0'),
(321, '3325160260', '633ffd0e4072ddfb34494d88524d6c86', 'mahasiswa', '0'),
(322, '3325160279', 'bb9a7e814016df2de258a093e32b704b', 'mahasiswa', '0'),
(323, '3325160480', '1b7157337e1973bed6cec32df6863fe6', 'mahasiswa', '0'),
(324, '3325160590', '40ce6d583c3fd303034834845c87c81f', 'mahasiswa', '0'),
(325, '3325160593', 'eaf8ec622d1a169188fb993f20c2e007', 'mahasiswa', '0'),
(326, '3325160768', 'a6df8c9555736821b1f59da0c4187252', 'mahasiswa', '0'),
(327, '3325160790', '08b1f3271b3b4ff6d0369f3c078836e0', 'mahasiswa', '0'),
(328, '3325161046', '374d50e64622070129ca8a0afe4804ea', 'mahasiswa', '0'),
(329, '3325161133', '0369bd5ce12fb3f2c7fffd377206fc4a', 'mahasiswa', '0'),
(330, '3325161217', '0a20d56a3685bea50fabe941b693592e', 'mahasiswa', '0'),
(331, '3325161237', '709d1a44c2d048bf2dbc6180cbfea35b', 'mahasiswa', '1'),
(332, '3325161318', 'cec3ff99ae0e69e69b30b97134b22c72', 'mahasiswa', '1'),
(333, '3325161539', '5f3ad416a4c4649998bd652da8751517', 'mahasiswa', '0'),
(334, '3325161767', '3b4cc67853954a6ea474d28c893c6289', 'mahasiswa', '0'),
(335, '3325161961', '1905d174652cee698aa07467dd7e842c', 'mahasiswa', '0'),
(336, '3325162205', '1dd9a4361566e07ff17c756d4b49c9fd', 'mahasiswa', '0'),
(337, '3325162235', '48b9dc52195de2ee7648d0ea453845c6', 'mahasiswa', '0'),
(338, '3325162270', '3768b9a86825e39e8c3cb1c6f7372c89', 'mahasiswa', '0'),
(339, '3325162299', 'ee69bf3e4df312d659d45fbb79a9e5ac', 'mahasiswa', '0'),
(340, '3325162810', '6a1c40a9a2cb793d2921db10f2961fc7', 'mahasiswa', '0'),
(342, '3325162842', '4f7e5e0564aa658b83bc41e6292cf09c', 'mahasiswa', '0'),
(343, '3325162969', '9a0954b6efa0f63bac4bdba44334cf47', 'mahasiswa', '0'),
(344, '3325163372', '3edaebe59418fb8a3ac1eb3012518845', 'mahasiswa', '0'),
(345, '3325163515', '3f3b1fc91b67e1cd5d788aed4018f103', 'mahasiswa', '0'),
(346, '3325164904', '19b8e7c376013daf664d9a54e7bd26b7', 'mahasiswa', '1'),
(347, '3325164978', '27e2bfd31e749138d68161308f8a7b08', 'mahasiswa', '0'),
(348, '3325165213', 'd8502cd2d0afaf64fd80b8e04abc8d01', 'mahasiswa', '0'),
(349, '3325165244', 'a3acbdd04cde5dcddf18ce418a3de69c', 'mahasiswa', '0'),
(350, '1303617068', '20b3a5093a76e44e3613a6a826329b13', 'mahasiswa', '0'),
(351, '1303617020', 'ba8ef7a8246b2bb5219e000cb4342878', 'mahasiswa', '0'),
(352, '1303617072', 'cc2af9719e64b5fe3ec0b37065419d3f', 'mahasiswa', '0'),
(353, '1303617011', 'abb86666990f06cba115ff49ec18269a', 'mahasiswa', '0'),
(354, '1303617080', '1414ad787ebee413f82baa020c998fd4', 'mahasiswa', '0'),
(355, '1303617055', '50016f7088f3c4e253bb39b7e73ab459', 'mahasiswa', '0'),
(356, '1303617005', 'd994a74879a2282dbd892576aa32a4c6', 'mahasiswa', '0'),
(357, '1303617003', '5351a7e05714d28045809350d97df7c1', 'mahasiswa', '0'),
(358, '1303617074', '230f21c0262dcb3847ea9a36f5829271', 'mahasiswa', '0'),
(359, '1303617078', 'b4ffc69b1c72f40a208bf3fc1b5bd3f8', 'mahasiswa', '0'),
(360, '1303617040', 'cc56d3cecb79c550782f4618179133ce', 'mahasiswa', '0'),
(361, '1303617002', 'ae646c076715e0b4f00bdd21d088ba3f', 'mahasiswa', '0'),
(362, '1303617050', 'ca381d513ce726bb1bd82f8b9d2f08f5', 'mahasiswa', '0'),
(363, '1303617022', '892e86caf7cd5f45db8f2b18f421b9cb', 'mahasiswa', '0'),
(364, '1303617065', '7ffe566009e60051cc915b78b81b8f07', 'mahasiswa', '0'),
(365, '1303617071', '426eaa92d48ef2e26f8d71fc5d5ead09', 'mahasiswa', '0'),
(366, '1303617070', '17556c2844c909ca0c928e0be5614189', 'mahasiswa', '0'),
(367, '1303617041', 'aa41ff8b5c6fa90911983318ece66055', 'mahasiswa', '0'),
(368, '1303617060', 'fea8146bd8e66ef213bb386f70245d1b', 'mahasiswa', '0'),
(369, '1303617012', '3cf3c15293d2c428c1cc4c9dc2993035', 'mahasiswa', '0'),
(370, '1303617044', '2fba4fee1edac87de9e74008c2dbf51d', 'mahasiswa', '0'),
(371, '1303617038', '023c1e6d5e18f7880d6b64874cb38531', 'mahasiswa', '0'),
(372, '1303617029', 'cabf7a26e2b47c589783f770ee874d49', 'mahasiswa', '0'),
(373, '1303617032', '24be47781faeed52c894f4c605392c91', 'mahasiswa', '0'),
(374, '1303617034', '61a56e56779a57abfedd6407662011cf', 'mahasiswa', '0'),
(375, '1303617054', 'c0d0e574f294febebf11289c476ba858', 'mahasiswa', '0'),
(376, '1303617025', '2afc03ccf6ce6f7544fafa16b6b46ba0', 'mahasiswa', '0'),
(377, '1303617046', '7ede430ea75e984816780cfb88a73e64', 'mahasiswa', '0'),
(378, '1303617024', '349faba3345498c48a93c51efe840ab0', 'mahasiswa', '0'),
(379, '1303617030', '19b4dfd884485ce1fcc788dc92e48071', 'mahasiswa', '0'),
(380, '1303617045', 'e150f2b93b30d98dd42d3b8a6db4a1f9', 'mahasiswa', '0'),
(381, '1303617023', '7600503015f15d4331d369ab536dcdcc', 'mahasiswa', '0'),
(382, '1303617079', '549382781775bdb95493882e057b89c5', 'mahasiswa', '0'),
(383, '1303617058', 'fa1c563c98eeba772993af2fc3b44521', 'mahasiswa', '0'),
(384, '1303617076', '9ad389384ed3af8def78235b6e694bda', 'mahasiswa', '0'),
(385, '1303617010', 'd58f5775190f00f534d95ccb1cd32dc0', 'mahasiswa', '0'),
(386, '1303617056', '20eea15c6e37c47048cf20e5a0c63a8c', 'mahasiswa', '0'),
(387, '1303617039', '396a78c1e12f75db6edc2658833f93f6', 'mahasiswa', '0'),
(388, '1303617016', 'ac89d6632493d57740d67a80ae6e31a7', 'mahasiswa', '0'),
(389, '1303617028', '960c430aa4ad2d966ec036efa2ca5b60', 'mahasiswa', '0'),
(390, '1303617008', '52caf46193c4c48a7dc3a63565818f02', 'mahasiswa', '0'),
(391, '1303617006', '2dbdcf59609879e0cd150fd94e5a2e18', 'mahasiswa', '0'),
(392, '1303617064', 'c353c6ed9e4c6e0f27f53b0a69737b77', 'mahasiswa', '0'),
(393, '1303617021', '2402fbc9d947216276d57fca54c2a6a5', 'mahasiswa', '0'),
(394, '1303617048', '199b57927debd89702d03b0f7ceb28b8', 'mahasiswa', '0'),
(395, '1303617066', 'faa5c959ea9c59d4aecf3047bb48a1fa', 'mahasiswa', '0'),
(396, '1303617009', '42e1e41c1b34a5addc63d5a69baee6ec', 'mahasiswa', '0'),
(397, '1303617057', '52f6d845b938c552229196ff9174d481', 'mahasiswa', '0'),
(398, '1303617061', '3ecd3277dff4403fe888b84f213db28a', 'mahasiswa', '0'),
(399, '1303617067', '1d681cd62fc8a8bdf87f9015411bbf6b', 'mahasiswa', '0'),
(400, '1303617062', 'e832acbdfba4fe65c3a1090c60a8bfc2', 'mahasiswa', '0'),
(401, '1303617031', 'cfe7b7c00db937fa2a6f0340ec6fff99', 'mahasiswa', '0'),
(402, '1303617052', 'c304b400d6020703545c11947e1a9907', 'mahasiswa', '0'),
(403, '1303617027', '11457ef044344503e5a1eba07368e63d', 'mahasiswa', '0'),
(404, '1303617001', '2103df48ca7c0044cffde3c350f10e7d', 'mahasiswa', '0'),
(405, '1303617017', 'a018f63899ad0ce56dd99aae40a432ce', 'mahasiswa', '0'),
(406, '1303617033', '02efbed33a94a2ed4df1af43d52b535f', 'mahasiswa', '0'),
(407, '1303617063', '14b9cbc35d989352fa06f54547ce33a1', 'mahasiswa', '0'),
(408, '1303617035', '4e94a1afdfd5afa6632bc97e46851dfd', 'mahasiswa', '0'),
(409, '1303617007', 'aa1a0d918552c3db6992fe06de505541', 'mahasiswa', '0'),
(410, '1303617018', 'bcd9b685e87b5e61e108ae8283c52ca5', 'mahasiswa', '0'),
(411, '1303617069', 'f8177eac65f257a608cd0c82ba380dc5', 'mahasiswa', '0'),
(412, '1303617081', '623a34bf03db482bda520feb77e1028b', 'mahasiswa', '0'),
(413, '1303617049', '11c32c699ffa84b409c77531cbc3b72e', 'mahasiswa', '0'),
(414, '1303617015', '7fba1c2307443a2b374772de28897a86', 'mahasiswa', '0'),
(415, '1303617051', 'eef8c384bb43d194e6e7cc2e07716286', 'mahasiswa', '0'),
(416, '1303617004', '021b34a59c9d27b1124a2a8e8da275bb', 'mahasiswa', '0'),
(417, '1303617073', '04db281891b9aa8c4390f6e2519d5e69', 'mahasiswa', '0'),
(418, '1303617014', '91c00f23680c09cbd82ce61e1ee10b29', 'mahasiswa', '0'),
(419, '1303617026', '0827afe11d15e1f0e8db2f61f550d3d7', 'mahasiswa', '0'),
(420, '1303617047', '342cb97f062d5ad4d3c8b5c58ad42d1f', 'mahasiswa', '0'),
(421, '1303617013', 'c8f032585ce0aad04a21b85e62a0968c', 'mahasiswa', '0'),
(422, '1303617036', '53615330dee7970aa00f765ec5fd48b6', 'mahasiswa', '0'),
(423, '1303617043', '9f62bb4abd2c73d134ceb0251a8a4a5f', 'mahasiswa', '0'),
(424, '1303617019', '7df7dd593585d9277995815a6c7caa20', 'mahasiswa', '0'),
(425, '1303617042', '76982d6d8602bb8c55a07b99c5b7b972', 'mahasiswa', '0'),
(426, '1303617059', '49b3f008ca875a1b23a1a619ed30c0a2', 'mahasiswa', '0'),
(427, '1307617021', '286e6368b73ceca892d0d20dba3405d6', 'mahasiswa', '0'),
(428, '1307617023', '77000c0dd0cceee21622cec61ea07d4d', 'mahasiswa', '0'),
(429, '1307617004', 'f0fdc87a8776c30bed67fe76e8e8bc80', 'mahasiswa', '0'),
(430, '1307617013', '921919811b1d56bc2386ad3e49024788', 'mahasiswa', '0'),
(431, '1307617002', '1e30cfcae0b51632ed253550bd368478', 'mahasiswa', '0'),
(432, '1307617010', 'fbbcbe5c26cfb171edbf512f2c37d42e', 'mahasiswa', '0'),
(433, '1307617032', '5ce507980a7a324ba5db560a50de7f26', 'mahasiswa', '0'),
(434, '1307617009', '62d125dee972e39b1bad1832800bb611', 'mahasiswa', '0'),
(435, '1307617011', '3f8ac757d37f6d72b56a14689d3aab2f', 'mahasiswa', '0'),
(436, '1307617026', 'c02e8a845205aa1380ec2682f559af1c', 'mahasiswa', '0'),
(437, '1307617003', '5c312e055f8e4a9bd9477cb0aa32afaa', 'mahasiswa', '0'),
(438, '1307617018', 'e901a440eda44d498860dff2f8649ebf', 'mahasiswa', '0'),
(439, '1307617017', '4aa7ad675948aeb3a7766d13f6632bf4', 'mahasiswa', '0'),
(440, '1307617028', '1f0be4bc1cfdb7336f2269d2ed8084cc', 'mahasiswa', '0'),
(441, '1307617025', 'c98d61dd9e89f7c24c937847b43068c1', 'mahasiswa', '0'),
(442, '1307617006', '32bc1cebf613563a002239ec559100de', 'mahasiswa', '0'),
(443, '1307617016', 'c6e90b536a387a54bb3385b63559b317', 'mahasiswa', '0'),
(444, '1307617030', 'abb3a5f9f08b12f0a454b6705ff493fe', 'mahasiswa', '0'),
(445, '1307617029', 'c05675cb606b3c51c9cdb4f677822185', 'mahasiswa', '0'),
(446, '1307617007', '11b5d4e6852006265e3325bd9bab832d', 'mahasiswa', '0'),
(447, '1307617034', '970fdaa19c55509cf694d207a96af770', 'mahasiswa', '0'),
(448, '1307617012', '26d558601837684684d95732c5f92bfc', 'mahasiswa', '0'),
(449, '1307617033', 'c1652084279a5988f9d23b69c743336a', 'mahasiswa', '0'),
(450, '1307617027', '936637160f335b30b76dc44993419990', 'mahasiswa', '0'),
(451, '1307617019', '869934b47264db45466665521c164a2a', 'mahasiswa', '0'),
(452, '1307617020', 'ffb4d1e862d0828e04b22ded58c197ee', 'mahasiswa', '0'),
(453, '1307617005', 'e334e24c096f0f55a53d5bbb54669b68', 'mahasiswa', '0'),
(454, '1307617024', 'a375689cfc65d57041d1a3cea4f6936c', 'mahasiswa', '0'),
(455, '1307617008', 'a8cba9902cc484af757ec41f4d26e8ac', 'mahasiswa', '0'),
(456, '1307617031', '9a2d99d1809be2d845492e615cc4d65a', 'mahasiswa', '0'),
(457, '1307617022', 'fc74d4c9be726ca55759e43a5c02bc3b', 'mahasiswa', '0'),
(458, '1307617015', '9aa810bf1a5eff62fa66d0a4716cf429', 'mahasiswa', '0'),
(459, '1307617001', 'ec026cc89ae8c4adbd2417fb9080238a', 'mahasiswa', '0'),
(460, '3325140701', '1ccaccc865830f82015989e81c5aae83', 'mahasiswa', '0'),
(461, '3315160416', 'bc9dd00d31770fa86a2d690578c318d5', 'mahasiswa', '0'),
(462, '3315161075', 'eb003a41c39e7aa57d2602d3df11d6c2', 'mahasiswa', '0'),
(463, '3315160771', 'c133f99cfe9640c878cf4d367255dd90', 'mahasiswa', '0'),
(464, '3315143679', 'a0c0471cf2769ea76f37f0590ecc5fcc', 'mahasiswa', '0'),
(465, '3325141798', '32542dc46fb8aeefe035087ecdb7cc83', 'mahasiswa', '0'),
(466, '3325140715', '086327cc3b3e71d58bae46216fffeb91', 'mahasiswa', '0'),
(467, '3315154435', 'e7d99325079b591af5c441dd16d106b5', 'mahasiswa', '0'),
(468, '3315140688', '46519d0d11e4c01321af5f5f9cb8b4d0', 'mahasiswa', '0'),
(469, '3315162149', '71e7335281399b5db2f6daba5c9af19f', 'mahasiswa', '0'),
(470, '3325162818', 'a37e1eb34ecf6c1b95b5bf4ec1bd4af6', 'mahasiswa', '0'),
(471, '3315141726', 'a050ac29653073962586e9b10520fc21', 'mahasiswa', '0'),
(472, '1303617075', '65275db79ed8dd1edb999a636d9377e1', 'mahasiswa', '0'),
(473, '1303617037', '31bb9c52f76e08fbece6a24e184b8535', 'mahasiswa', '0'),
(474, '1303617077', '745fccfd1c261e9396ec5661709eaacc', 'mahasiswa', '0'),
(475, '3315161567', '7195fa6b0735ccc4c83711d56fadf1f9', 'mahasiswa', '0'),
(476, '3315143667', '0bcef713133dcc93aaca7b5bb4462872', 'mahasiswa', '0'),
(477, '3315150231', 'ea2d09601f1b616162bf63ed5ff45647', 'mahasiswa', '0'),
(478, '3315161846', '45506bfa437c2e86e509460270be0c6d', 'mahasiswa', '0'),
(479, '3315150779', '6bd0f110e2d9d8cb4da9656a2fd4a90b', 'mahasiswa', '0'),
(480, '3315140670', 'a583414f9e3cdba72838276628e9e2f8', 'mahasiswa', '0'),
(481, '3315133634', '516735c573bdf36c9682e3889c18c7f3', 'mahasiswa', '0'),
(482, '3315136385', '24eb8d1928ed994554427f7c10cd358e', 'mahasiswa', '0'),
(483, '3315162292', '8fdeabb0b1c4e7e4215c241930becc8e', 'mahasiswa', '0'),
(484, '3315163862', '4a83d56b84a3b90de2737cc7b77cb593', 'mahasiswa', '0'),
(485, '3315141733', '990f384dd48241493df15338c29a5537', 'mahasiswa', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id_asisten`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `daftar_peminjaman_alat`
--
ALTER TABLE `daftar_peminjaman_alat`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `daftar_peminjaman_alat_ibfk_1` (`id_peminjaman`);

--
-- Indexes for table `daftar_peminjaman_bahan`
--
ALTER TABLE `daftar_peminjaman_bahan`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_bahan` (`id_bahan`),
  ADD KEY `daftar_peminjaman_bahan_ibfk_1` (`id_peminjaman`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_praktikum` (`id_praktikum`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `mahasiswa_ibfk_1` (`id_user`);

--
-- Indexes for table `master_data`
--
ALTER TABLE `master_data`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `nama_praktikum`
--
ALTER TABLE `nama_praktikum`
  ADD PRIMARY KEY (`id_nama_prak`);

--
-- Indexes for table `peminjaman_alat`
--
ALTER TABLE `peminjaman_alat`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `peminjaman_bahan`
--
ALTER TABLE `peminjaman_bahan`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian_aas`
--
ALTER TABLE `penelitian_aas`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian_lembur`
--
ALTER TABLE `penelitian_lembur`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian_saa`
--
ALTER TABLE `penelitian_saa`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id_praktikum`);

--
-- Indexes for table `riwayat_praktikum`
--
ALTER TABLE `riwayat_praktikum`
  ADD PRIMARY KEY (`id_rp`),
  ADD KEY `id_praktikum` (`id_praktikum`),
  ADD KEY `riwayat_praktikum_ibfk_1` (`id_mahasiswa`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id_asisten` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `daftar_peminjaman_alat`
--
ALTER TABLE `daftar_peminjaman_alat`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_peminjaman_bahan`
--
ALTER TABLE `daftar_peminjaman_bahan`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
--
-- AUTO_INCREMENT for table `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id_master` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nama_praktikum`
--
ALTER TABLE `nama_praktikum`
  MODIFY `id_nama_prak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `peminjaman_alat`
--
ALTER TABLE `peminjaman_alat`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman_bahan`
--
ALTER TABLE `peminjaman_bahan`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_aas`
--
ALTER TABLE `penelitian_aas`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_lembur`
--
ALTER TABLE `penelitian_lembur`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_saa`
--
ALTER TABLE `penelitian_saa`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id_praktikum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `riwayat_praktikum`
--
ALTER TABLE `riwayat_praktikum`
  MODIFY `id_rp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=798;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=486;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `asisten`
--
ALTER TABLE `asisten`
  ADD CONSTRAINT `asisten_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `daftar_asisten` (`id_daftar`);

--
-- Constraints for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  ADD CONSTRAINT `daftar_asisten_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `daftar_peminjaman_alat`
--
ALTER TABLE `daftar_peminjaman_alat`
  ADD CONSTRAINT `daftar_peminjaman_alat_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman_alat` (`id_peminjaman`) ON DELETE CASCADE,
  ADD CONSTRAINT `daftar_peminjaman_alat_ibfk_2` FOREIGN KEY (`id_alat`) REFERENCES `alat` (`id_alat`);

--
-- Constraints for table `daftar_peminjaman_bahan`
--
ALTER TABLE `daftar_peminjaman_bahan`
  ADD CONSTRAINT `daftar_peminjaman_bahan_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman_bahan` (`id_peminjaman`) ON DELETE CASCADE,
  ADD CONSTRAINT `daftar_peminjaman_bahan_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`);

--
-- Constraints for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  ADD CONSTRAINT `jadwal_praktikum_ibfk_1` FOREIGN KEY (`id_praktikum`) REFERENCES `praktikum` (`id_praktikum`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Constraints for table `peminjaman_alat`
--
ALTER TABLE `peminjaman_alat`
  ADD CONSTRAINT `peminjaman_alat_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `peminjaman_bahan`
--
ALTER TABLE `peminjaman_bahan`
  ADD CONSTRAINT `peminjaman_bahan_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian_aas`
--
ALTER TABLE `penelitian_aas`
  ADD CONSTRAINT `penelitian_aas_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian_lembur`
--
ALTER TABLE `penelitian_lembur`
  ADD CONSTRAINT `penelitian_lembur_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian_saa`
--
ALTER TABLE `penelitian_saa`
  ADD CONSTRAINT `penelitian_saa_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `riwayat_praktikum`
--
ALTER TABLE `riwayat_praktikum`
  ADD CONSTRAINT `riwayat_praktikum_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_praktikum_ibfk_2` FOREIGN KEY (`id_praktikum`) REFERENCES `praktikum` (`id_praktikum`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
