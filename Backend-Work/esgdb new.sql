-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 27, 2023 at 12:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `year` varchar(8) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `category`, `year`, `image`) VALUES
(3, 'Sharing Alumni', '2022', '2051976344VBG WILD WEST logo.png'),
(4, 'ERP', '2022', 'PROJECT SANTUN.png');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id_comp` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_comp_cat` int(11) NOT NULL,
  `gb_link` text NOT NULL,
  `ig_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id_comp`, `title`, `id_comp_cat`, `gb_link`, `ig_link`) VALUES
(1, 'ESSAY', 3, 'https://bit.ly/LombaEsaiKamadiksi2022', 'https://www.instagram.com/p/CeBszNfPzkm/'),
(2, 'INOVASI IT', 2, 'https://bit.ly/GuideBookITC2021', 'https://www.instagram.com/p/CSs08boFpNL/'),
(3, 'UI/UX', 1, 'bit.ly/GuideBook_UIUXCompetition', 'https://www.instagram.com/p/CW45Vf3vgYr/'),
(5, 'Lomba Esai Tingkat Nasional', 3, 'https://bit.ly/bukupanduanedelweis2023', 'https://www.instagram.com/himfarnas_stikesnasional/');

-- --------------------------------------------------------

--
-- Table structure for table `comp_cat`
--

CREATE TABLE `comp_cat` (
  `id_comp_cat` int(11) NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp_cat`
--

INSERT INTO `comp_cat` (`id_comp_cat`, `cat_name`) VALUES
(1, 'UI/UX'),
(2, 'Business Competition'),
(3, 'KTI'),
(4, 'Hackathon'),
(5, 'Desain'),
(6, 'Debat');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `nim` varchar(15) NOT NULL,
  `jurusan` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `feedback`, `nim`, `jurusan`, `email`, `tanggal`) VALUES
(17, 'Panditha', 'Semangat', '1202194003', 'S1 Sistem Informasi', 'arya.panditha@gmail.com', '2022-02-25'),
(18, 'LowEloSampeKebo', 'a..', '1202190269', 'S5 Marketing', 'rizky@et.com', '2022-02-25'),
(21, 'Bla bla bla', 'abcdefghijklmnopqrstuvwxyz', '1202194003', 'S1 Sistem Informasi', 'apaansih@gmail.com', '2022-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(150) NOT NULL,
  `pj` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `gambar_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `pj`, `tanggal`, `keterangan`, `gambar_kegiatan`) VALUES
(1, 'ODODO', 'YUMMY', '2022-09-30', 'LEZAT DAN BERGIZI', 'juaralomba9.png'),
(2, 'WWWW', 'WWWW', '2022-09-30', 'WWWW', 'juaralomba9.png'),
(3, 'QQQQ', 'QQQQ', '2022-09-30', 'QQQQ', 'juaralomba9.png');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `jenis_lomba` varchar(150) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama`, `prestasi`, `jenis_lomba`, `penyelenggara`, `tingkat`, `tahun`, `gambar`) VALUES
(3, 'Yumna Zahran Ramadhan', 'Juara 1 Lomba Business Case IMPACT UBM', 'Business Case IMPACT UBM\r\n', 'Universitas Bunda Mulia', 'Nasional', '2019', 'juaralomba1.png'),
(4, 'Rafif Aqila Khanaspie', 'Juara 1 Poster', 'Championship Regeneration Search 2022\r\n', 'UKM Search Telkom', 'Universitas', '2019', 'juaralomba2.png'),
(5, 'Diandra Muhammad Lutfi', 'Juara 1', 'Business Contest Competition (BCC) 2021\r\n', 'Indonesia Millenial Connect', 'Regional', '2019', 'juaralomba3.png'),
(6, 'Amelia Purnama Putri', 'Juara 2 UI/UX Design', 'AGATIS 2021', 'Universitas Bengkulu', 'Nasional', '2019', 'juaralomba4.png'),
(7, 'Amelia Purnama Putri', 'UI/UX  Design 1st Winner', 'Binary Fest 2021', 'Universitas Teknologi Yogyakarta', 'Nasional', '2019', 'juaralomba5.png'),
(18, 'Agnes Yemima Br Sembiring', 'Juara 2', 'Business Model Canvas', 'Rival Seeker', 'Nasional', '2022', '293203448_1436310666870557_1574252692267653484_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roleuser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `password`, `roleuser`) VALUES
('Admin', 'Admin', 'admin@gmail.com', '$2y$10$T8k2hSqCnIO7T/o1580x9O1PeI5F9K8keMD.p2HpAh4h5shAcvINC', 'admin'),
('erpsg', 'Gregorius Arya Panditha Wicaksana', 'aryapanditha@gmail.com', '834409af7d7bc6dbfff6302d7994f154', ''),
('seeshauseen', 'Muhammad Aditya Shauman', 'aditya.shauman@gmail.com', '$2y$10$OHBD7Du2v01vUDEZ9SwOH.p83nHmfeyPpJNmgQMR.EHrsh7nPrfQS', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indexes for table `comp_cat`
--
ALTER TABLE `comp_cat`
  ADD PRIMARY KEY (`id_comp_cat`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comp_cat`
--
ALTER TABLE `comp_cat`
  MODIFY `id_comp_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
