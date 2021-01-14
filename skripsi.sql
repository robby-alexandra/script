-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 03.53
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `tlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id_company`, `company`, `address`, `tlp`) VALUES
(1, 'PT. ALBETA SUKSES MANDIRI', 'Jln . Kedoya Duri no 38A jakarta barat pt albeta sukses mandiri sukses selalu \r\nkita coba input smapai penuh', 212),
(3, 'Klarheit', 'kedoya duri', 5181812);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `kode` varchar(15) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `atasan` varchar(20) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `status` enum('Approved','Rejected','Pending') NOT NULL,
  `ket_atasan` text DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`kode`, `nik`, `tanggal_awal`, `tanggal_akhir`, `jumlah`, `atasan`, `jenis_cuti`, `ket`, `status`, `ket_atasan`, `updated`) VALUES
('', '', '0000-00-00', '0000-00-00', '', '', '', '', 'Pending', '', '2020-10-06 03:01:21'),
('CT - 0022', '34', '2020-12-31', '2020-12-30', '2', 'yan benyamin', 'blojol', 'er', 'Pending', NULL, '2020-10-06 03:01:41'),
('CT20-09-25', '11', '2020-09-10', '2020-09-29', '2', 'yan benyamin', 'Tahunan', 'dsf', 'Pending', NULL, '2020-10-06 03:01:41'),
('CT20-09-26', '29', '2020-09-02', '2020-09-17', '2', 'william', 'Tahunan', '   error   ', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-27', '112', '2020-09-10', '2020-09-18', '2', 'yan benyamin', 'Tahunan', ' cek alur sana sini oke yang penting jalan jalan k', 'Rejected', NULL, '2020-10-12 07:45:27'),
('CT20-09-28', '112', '2020-09-17', '2020-09-18', '2', 'william', 'Tahunan', 'tes', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-29', '34', '2020-09-22', '2020-09-24', '2', 'yan benyamin', 'Tahunan', 'tele', 'Rejected', NULL, '2020-10-06 08:25:47'),
('CT20-09-30', '34', '2020-09-25', '2020-09-23', '1', 'william', 'blojol', 'v', 'Pending', NULL, '2020-10-06 08:29:11'),
('CT20-09-31', '34', '2020-09-23', '2020-09-23', '1', 'william', 'blojol', 'f', 'Pending', ' ', '2020-10-06 08:30:22'),
('CT20-09-32', '29', '2020-09-23', '2020-09-24', '1', 'yan benyamin', 'Tahunan', 'd', 'Rejected', ' 1\r\n', '2020-10-06 04:46:39'),
('CT20-09-33', '29', '2020-09-17', '2020-09-25', '1', 'william', 'Tahunan', 'd', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-34', '11', '2020-09-15', '2020-09-23', '1', 'yan benyamin', 'Tahunan', 's', 'Rejected', ' r', '2020-10-06 04:44:47'),
('CT20-09-35', '34', '2020-09-12', '2020-09-13', '1', 'william', 'Tahunan', 'w', 'Pending', ' masa masuk', '2020-10-06 08:30:22'),
('CT20-09-36', '34', '2020-09-22', '2020-09-23', '1', 'william', 'Tahunan', 'd', 'Pending', ' ', '2020-10-06 08:30:22'),
('CT20-09-37', '29', '2020-09-24', '2020-09-25', '1', 'william', 'Tahunan', 'c', 'Pending', ' ', '2020-10-06 08:30:22'),
('CT20-09-38', '34', '2020-09-02', '2020-09-09', '1', 'william', 'blojol', 'w', 'Pending', ' saya tolak', '2020-10-06 08:30:22'),
('CT20-09-39', '11', '2020-09-03', '2020-09-02', '1', 'william', 'Tahunan', 'teleg', 'Pending', ' dddd joss\r\n', '2020-10-06 08:30:22'),
('CT20-09-40', '29', '2020-09-01', '2020-09-02', '1', 'yan benyamin', 'Tahunan', 'ewq', 'Rejected', 'masa\r\n', '2020-10-06 04:42:18'),
('CT20-09-41', '112', '2020-09-08', '2020-09-16', '1', 'yan benyamin', 'Tahunan', 's', 'Rejected', ' d', '2020-10-06 04:41:34'),
('CT20-09-42', '34', '2020-09-02', '2020-09-23', '1', 'yan benyamin', 'Tahunan', '2', 'Rejected', ' ', '2020-10-06 04:41:03'),
('CT20-09-43', '34', '2020-09-23', '2020-09-08', '1', 'yan benyamin', 'Tahunan', 'w', 'Rejected', ' ', '2020-10-06 04:40:55'),
('CT20-09-44', '112', '2020-09-08', '2020-09-10', '1', 'william', 'blojol', 'e', 'Pending', ' vvvv', '2020-10-06 08:30:22'),
('CT20-09-45', '131', '2020-09-15', '2020-09-16', '1', 'william', 'Lain - Lain', 'w', 'Pending', ' ssss', '2020-10-06 08:30:22'),
('CT20-09-46', '34', '2020-09-02', '2020-09-08', '1', 'william', 'Tahunan', '1', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-47', '34', '2020-09-10', '2020-09-18', '1', 'william', 'Tahunan', 'w', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-48', '131', '2020-09-08', '2020-09-11', '1', 'william', 'Lain - Lain', 's', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-49', '29', '2020-09-01', '2020-09-02', '1', 'yan benyamin', 'blojol', 'error', 'Approved', ' gggddd', '2020-10-06 04:18:38'),
('CT20-09-50', '34', '2020-09-01', '2020-09-03', '1', 'william', 'Tahunan', 'e', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-51', '131', '2020-09-01', '2020-09-02', '1', 'william', 'Tahunan', 'w', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-52', '11', '2020-09-23', '2020-09-25', '1', 'william', 'Tahunan', 'd', 'Pending', ' ssdsds', '2020-10-06 08:30:22'),
('CT20-09-53', '11', '2020-09-22', '2020-09-23', '1', 'william', 'Tahunan', 'd', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-54', '221', '2020-09-16', '2020-09-17', '1', 'william', 'Tahunan', 'x', 'Pending', NULL, '2020-10-06 08:30:22'),
('CT20-09-55', '11', '2020-09-09', '2020-09-23', '1', 'william', 'Lain - Lain', 'd', 'Rejected', 'success', '2020-10-08 02:37:56'),
('CT20-09-56', '11', '2020-09-10', '2020-09-24', '1', 'yan benyamin', 'Lain - Lain', 's', 'Rejected', NULL, '2020-10-06 04:07:23'),
('CT20-09-57', '3', '2020-09-02', '2020-09-23', '1', 'william', 'Tahunan', 'd', 'Pending', NULL, '2020-10-06 03:01:41'),
('CT20-09-58', '2', '2020-09-02', '2020-09-03', '1', 'yan benyamin', 'Tahunan', 'e', 'Pending', NULL, '2020-10-06 03:01:41'),
('CT20-09-59', '3', '2020-09-03', '2020-09-08', '1', 'yan benyamin', 'blojol', 'e', 'Pending', NULL, '2020-09-22 09:52:17'),
('CT20-09-60', '2', '2020-09-10', '2020-09-10', '2', 'william', 'Tahunan', 'e', 'Pending', NULL, '2020-09-22 09:53:38'),
('CT20-09-61', '112', '2020-09-03', '2020-09-10', '1', 'yan benyamin', 'Lain - Lain', 'd', 'Rejected', NULL, '2020-10-06 04:07:04'),
('CT20-09-62', '29', '2020-09-10', '2020-09-11', '1', 'william', 'Tahunan', ' hari ini pusing', 'Rejected', ' ', '2020-10-06 08:40:29'),
('CT20-09-63', '29', '2020-09-30', '2020-10-01', '2', 'william', 'Tahunan', 'hari ini cuti', 'Rejected', ' up1\r\n', '2020-10-06 08:34:23'),
('CT20-10-00010', '112', '2020-10-21', '2020-10-30', '3', 'william', 'Lain - Lain', 'eqasc', 'Pending', NULL, '2020-10-20 07:32:56'),
('CT20-10-00011', '112', '2020-10-09', '2020-10-20', '2', 'william', 'Tahunan', 'qwa', 'Pending', NULL, '2020-10-20 07:35:39'),
('CT20-10-10', '112', '2020-10-31', '2020-10-16', '1', 'william', 'Tahunan', 'daz', 'Pending', NULL, '2020-10-20 07:23:58'),
('CT20-10-100', '112', '2020-10-07', '2020-10-09', '1', 'william', 'Lain - Lain', 'saZx', 'Pending', NULL, '2020-10-20 07:26:26'),
('CT20-10-101', '112', '2020-10-16', '2020-11-06', '12', 'william', 'Lain - Lain', 'we', 'Pending', NULL, '2020-10-20 07:39:51'),
('CT20-10-102', '112', '2020-10-08', '2020-10-01', '1', 'yan benyamin', 'blojol', 'kjnm,', 'Pending', NULL, '2020-10-20 07:49:16'),
('CT20-10-103', '112', '2020-10-09', '2020-10-10', '1', 'william', 'Tahunan', 'wea', 'Pending', NULL, '2020-10-20 07:50:44'),
('CT20-10-104', '112', '2020-10-23', '2020-10-31', '1', 'yan benyamin', 'Tahunan', 'wsdzx', 'Pending', NULL, '2020-10-20 07:53:35'),
('CT20-10-105', '112', '2020-10-20', '2020-10-23', '1', 'william', 'blojol', 'aS', 'Pending', NULL, '2020-10-20 07:54:36'),
('CT20-10-106', '112', '2020-10-10', '2020-10-15', '1', 'yan benyamin', 'Tahunan', 'asdas', 'Pending', NULL, '2020-10-20 07:57:35'),
('CT20-10-107', '112', '2020-10-03', '2020-10-15', '1', 'yan benyamin', 'Lain - Lain', '2a', 'Pending', NULL, '2020-10-20 07:59:30'),
('CT20-10-108', '112', '2020-10-02', '2020-10-17', '2', 'yan benyamin', 'Tahunan', 'wads', 'Pending', NULL, '2020-10-20 08:02:31'),
('CT20-10-109', '112', '2020-10-08', '2020-10-09', '2', 'yan benyamin', 'Lain - Lain', 'saD', 'Pending', NULL, '2020-10-20 08:03:45'),
('CT20-10-110', '112', '2020-10-14', '2020-10-22', '2', 'yan benyamin', 'Tahunan', 'sad', 'Pending', NULL, '2020-10-20 08:05:51'),
('CT20-10-111', '112', '2020-10-10', '2020-10-22', '2', 'william', 'blojol', 'sZX', 'Pending', NULL, '2020-10-20 08:10:26'),
('CT20-10-112', '112', '2020-10-22', '2020-10-24', '2', 'william', 'Lain - Lain', 'saxz', 'Pending', NULL, '2020-10-20 08:12:12'),
('CT20-10-113', '112', '2020-10-08', '2020-10-16', '1', 'william', 'Lain - Lain', 'sadsa', 'Pending', NULL, '2020-10-20 08:13:52'),
('CT20-10-114', '112', '2020-10-20', '2020-10-22', '1', 'william', 'Tahunan', 'sada', 'Pending', NULL, '2020-10-20 08:16:31'),
('CT20-10-115', '112', '2020-10-10', '2020-10-17', '2', 'william', 'Lain - Lain', 'wqs', 'Pending', NULL, '2020-10-20 08:18:01'),
('CT20-10-116', '112', '2020-10-02', '2020-10-17', '1', 'william', 'Tahunan', 'aZ', 'Pending', NULL, '2020-10-20 08:53:41'),
('CT20-10-117', '112', '2020-10-02', '2020-10-08', '3', 'william', 'Tahunan', 'golek bojo', 'Pending', NULL, '2020-10-20 08:56:19'),
('CT20-10-118', '112', '2020-10-17', '2020-10-24', '1', 'yan benyamin', 'Lain - Lain', 'wsa', 'Pending', NULL, '2020-10-20 09:41:36'),
('CT20-10-119', '112', '2020-10-23', '2020-10-31', '1', 'yan benyamin', 'Lain - Lain', 'sadZ', 'Pending', NULL, '2020-10-20 09:47:10'),
('CT20-10-120', '112', '2020-10-10', '2020-10-23', '2', 'yan benyamin', 'Tahunan', 'sdxz', 'Pending', NULL, '2020-10-20 09:47:52'),
('CT20-10-121', '112', '2020-10-10', '2020-10-17', '2', 'william', 'Tahunan', 'sadzx', 'Pending', NULL, '2020-10-20 09:53:16'),
('CT20-10-122', '112', '2020-10-03', '2020-10-23', '3', 'yan benyamin', 'Tahunan', 'sZx', 'Pending', NULL, '2020-10-20 09:53:53'),
('CT20-10-123', '112', '2020-10-14', '2020-10-22', '2', 'william', 'Tahunan', 'saZx', 'Pending', NULL, '2020-10-20 09:56:41'),
('CT20-10-124', '112', '2020-10-13', '2020-10-21', '1', 'william', 'Tahunan', 'asd', 'Pending', NULL, '2020-10-20 09:58:51'),
('CT20-10-125', '112', '2020-10-20', '2020-10-21', '2', 'william', 'Tahunan', 'asd', 'Pending', NULL, '2020-10-20 10:00:27'),
('CT20-10-126', '112', '2020-10-14', '2020-10-20', '1', 'william', 'Tahunan', 'edasx', 'Pending', NULL, '2020-10-20 10:01:36'),
('CT20-10-64', '29', '2020-10-12', '2020-10-20', '3', 'william', 'blojol', 'dd', 'Pending', NULL, '2020-10-12 07:48:22'),
('CT20-10-65', '112', '2020-10-14', '2020-10-14', '1', 'yan benyamin', 'Tahunan', 's', 'Approved', NULL, '2020-10-12 08:09:08'),
('CT20-10-66', '112', '2020-10-12', '2020-10-14', '1', 'william', 'Tahunan', 'eeq', 'Pending', NULL, '2020-10-12 08:15:47'),
('CT20-10-67', '112', '2020-10-15', '2020-10-17', '2', 'william', 'Lain - Lain', ' sss 4', 'Pending', NULL, '2020-10-13 06:18:50'),
('CT20-10-68', '29', '2020-10-14', '2020-10-23', '2', 'yan benyamin', 'Tahunan', 's', 'Rejected', NULL, '2020-10-13 07:46:05'),
('CT20-10-69', '29', '2020-10-13', '2020-10-14', '1', 'william', 'blojol', 'ss', 'Pending', NULL, '2020-10-13 07:49:46'),
('CT20-10-70', '112', '2020-10-13', '2020-10-14', '2', 'william', 'Tahunan', 's', 'Pending', NULL, '2020-10-13 08:11:26'),
('CT20-10-71', '112', '2020-10-22', '2020-10-24', '1', 'yan benyamin', 'Lain - Lain', 'sx', 'Pending', NULL, '2020-10-19 09:53:01'),
('CT20-10-72', '112', '2020-10-27', '2020-10-29', '2', 'william', 'Tahunan', 'sss', 'Pending', NULL, '2020-10-20 03:02:42'),
('CT20-10-73', '112', '2020-10-21', '2020-10-29', '2', 'yan benyamin', 'Tahunan', 'sax', 'Pending', NULL, '2020-10-20 03:04:59'),
('CT20-10-74', '112', '2020-10-20', '2020-10-22', '2', 'william', 'Tahunan', 'sssa', 'Rejected', NULL, '2020-10-20 03:09:04'),
('CT20-10-75', '112', '2020-10-21', '2020-10-22', '1', 'yan benyamin', 'Tahunan', 'kk', 'Pending', NULL, '2020-10-20 03:35:47'),
('CT20-10-76', '112', '2020-10-14', '2020-10-29', '2', 'william', 'Tahunan', 'ssasa', 'Pending', NULL, '2020-10-20 03:51:00'),
('CT20-10-77', '112', '2020-10-02', '2020-10-23', '1', 'william', 'Tahunan', 'saa', 'Pending', NULL, '2020-10-20 03:55:59'),
('CT20-10-78', '112', '2020-10-07', '2020-10-16', '1', 'william', 'blojol', 'sa', 'Pending', NULL, '2020-10-20 03:58:44'),
('CT20-10-79', '112', '2020-10-14', '2020-10-15', '2', 'yan benyamin', 'Tahunan', 'zfax', 'Pending', NULL, '2020-10-20 04:14:42'),
('CT20-10-80', '112', '2020-10-21', '2020-10-22', '1', 'william', 'Lain - Lain', 'cz', 'Pending', NULL, '2020-10-20 04:17:15'),
('CT20-10-81', '112', '2020-10-30', '2020-10-31', '2', 'yan benyamin', 'Lain - Lain', 'sss', 'Rejected', NULL, '2020-10-20 04:18:28'),
('CT20-10-82', '112', '2020-10-21', '2020-10-22', '1', 'william', 'Tahunan', 'we', 'Pending', NULL, '2020-10-20 04:32:30'),
('CT20-10-83', '112', '2020-10-22', '2020-10-23', '2', 'william', 'Tahunan', 'sss', 'Pending', NULL, '2020-10-20 04:35:03'),
('CT20-10-84', '112', '2020-10-21', '2020-10-23', '1', 'yan benyamin', 'Tahunan', 'sssdz', 'Pending', NULL, '2020-10-20 04:36:23'),
('CT20-10-85', '112', '2020-10-21', '2020-11-06', '3', 'william', 'blojol', 'saxz', 'Pending', NULL, '2020-10-20 04:45:05'),
('CT20-10-86', '112', '2020-10-29', '2020-10-31', '2', 'william', 'Tahunan', 'ssss', 'Rejected', NULL, '2020-10-20 04:46:14'),
('CT20-10-87', '112', '2020-10-31', '2020-10-30', '12', 'william', 'Tahunan', 'as', 'Pending', NULL, '2020-10-20 04:46:33'),
('CT20-10-88', '112', '2020-10-22', '2020-10-30', '2', 'yan benyamin', 'Tahunan', 'ssx', 'Pending', NULL, '2020-10-20 04:47:00'),
('CT20-10-89', '112', '2020-10-20', '2020-10-23', '2', 'william', 'Tahunan', 'dds', 'Pending', NULL, '2020-10-20 04:52:56'),
('CT20-10-90', '112', '2020-10-09', '2020-10-08', '2', 'yan benyamin', 'Lain - Lain', 'szz', 'Pending', NULL, '2020-10-20 04:53:59'),
('CT20-10-91', '112', '2020-10-30', '2020-10-31', '1', 'william', 'Tahunan', 'sz', 'Pending', NULL, '2020-10-20 04:54:36'),
('CT20-10-92', '112', '2020-10-17', '2020-10-24', '2', 'william', 'Lain - Lain', 'saz', 'Pending', NULL, '2020-10-20 04:55:02'),
('CT20-10-93', '112', '2020-10-08', '2020-10-22', '2', 'william', 'Lain - Lain', 'asz', 'Pending', NULL, '2020-10-20 06:54:49'),
('CT20-10-94', '112', '2020-10-13', '2020-10-22', '1', 'william', 'Tahunan', 'aszz', 'Pending', NULL, '2020-10-20 07:00:01'),
('CT20-10-95', '112', '2020-10-14', '2020-10-16', '2', 'yan benyamin', 'Lain - Lain', 'aas', 'Pending', NULL, '2020-10-20 07:04:17'),
('CT20-10-96', '112', '2020-10-08', '2020-10-23', '1', 'william', 'Tahunan', 'sxz', 'Pending', NULL, '2020-10-20 07:11:26'),
('CT20-10-97', '112', '2020-10-13', '2020-10-21', '2', 'yan benyamin', 'blojol', 'sc ', 'Pending', NULL, '2020-10-20 07:15:01'),
('CT20-10-98', '112', '2020-10-09', '2020-10-24', '2', 'william', 'Lain - Lain', 'cdfaz', 'Pending', NULL, '2020-10-20 07:20:43'),
('CT20-10-99', '112', '2020-10-29', '2020-10-23', '1', 'yan benyamin', 'Lain - Lain', 'sz', 'Pending', NULL, '2020-10-20 07:22:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `departement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `departement`
--

INSERT INTO `departement` (`id_departement`, `departement`) VALUES
(35, 'IT'),
(36, 'ADMIN'),
(38, '1'),
(39, '2'),
(40, '3'),
(41, '44'),
(42, '22'),
(43, 'dep');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(6, 'IT'),
(7, 'MGR'),
(8, 'SPV'),
(10, 'KARYAWAN'),
(11, 'HRD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_cuti`
--

CREATE TABLE `jenis_cuti` (
  `id_cuti` int(10) NOT NULL,
  `nama_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_cuti`
--

INSERT INTO `jenis_cuti` (`id_cuti`, `nama_cuti`) VALUES
(1, 'Lain - Lain'),
(2, 'Tahunan'),
(3, 'blojol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tlp` varchar(16) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `id_departement` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `jumlah_cuti` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('SuperAdmin','HRD','MGR','SPV','Karyawan') NOT NULL COMMENT '1:SuperAdmin,2:HRD,3:MGR,4:SPV,5:Karyawan',
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `tlp`, `company`, `address`, `tanggal_masuk`, `id_departement`, `id_jabatan`, `jumlah_cuti`, `username`, `password`, `level`, `is_active`) VALUES
('11', 'yan_benyamin', '6289635326253', 'PT. ALBETA SUKSES MANDIRI', '', '2010-08-10', 35, 8, '1', 'yan benyamin', '911f6332e7f90b94b87f15377263995c', 'SPV', 0),
('112', 'rizal', '6289635326253', 'klarheit', 'palmerah syahdan', '2020-08-26', 35, 10, '-3', 'rizal', '150fb021c56c33f82eef99253eb36ee1', 'Karyawan', 1),
('131', 'eddy', '6289635326253', 'PT. ALBETA SUKSES MANDIRI', '', '2018-08-14', 36, 10, '4', 'eddy', '99c9dff465b9ae57cd137febeb133cc22d353ada', 'Karyawan', 0),
('200912', 'dian', '0877777', 'PT. ALBETA SUKSES MANDIRI', '', '2020-09-04', 36, 11, '14', 'hrd', 'f97de4a9986d216a6e0fea62b0450da9', 'HRD', 1),
('221', 'whatsapp', '6289635326253', 'PT. ALBETA SUKSES MANDIRI', '', '2019-11-20', 35, 6, '21', 'wa123', '54ee104d60d4f64210c3776c0291f4bc', 'SPV', 0),
('29', 'robby', '62896353262533', 'PT. ALBETA SUKSES MANDIRI', 'kompi', '2016-07-26', 35, 10, '-2', 'robby', '8d05dd2f03981f86b56c23951f3f34d7', 'SuperAdmin', 1),
('34', 'william', '6289635326253', 'PT. ALBETA SUKSES MANDIRI', '', '2020-08-19', 35, 7, '12', 'william', 'fd820a2b4461bddd116c1518bc4b0f77', 'MGR', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('SuperAdmin','HRD','MGR','SPV','Karyawan') DEFAULT NULL COMMENT '1:SuperAdmin,2:HRD,3:MGR,4:SPV,5:Karyawan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'SuperAdmin'),
(2, 'hrd', 'hrd@hrd.com', 'ff2c93fdc08810c6189e9086905a8fbc1ad11404', 'HRD'),
(3, 'karyawan', 'karyawan@karyawan.com', '87c78b8da768468c4f3826791496385536c11dad', 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `id_departement` (`id_departement`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  MODIFY `id_cuti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`),
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
