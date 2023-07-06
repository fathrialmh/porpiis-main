-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 06, 2023 at 01:23 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id_community` int(11) NOT NULL,
  `name_community` varchar(50) NOT NULL,
  `member` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `deskripsi`, `tanggal_mulai`, `tanggal_akhir`, `jenis_id`) VALUES
(4, 'Badminton', 'Olahraga', '2023-07-02', '2023-07-02', 12),
(5, 'Futsal', 'Olahraga Futsal', '2023-07-02', '2023-07-31', 12);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(12, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `team_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `nama_team` varchar(50) NOT NULL,
  `peserta` int(11) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `nama_team`, `peserta`, `sekolah`, `provinsi`, `kota`, `file`, `event_id`) VALUES
(1, 'test', 2, 'sma 27 bandung', 'jawa barat', 'bandung', '', 1),
(2, 'Futsal Team', 5, 'SMA Bandung', 'Jawa Barat', 'Bandung', 'testimage.png', 5),
(3, 'Badminton Team', 2, 'SMA JAKARTA', 'JAKARTA', 'JAKARTA', 'testimage.png', 4),
(37, 'Garuda Futsal', 5, 'Bandung', 'Provinsi', 'Kota', 'bb19eed1aa203dd424cdf3a307b87a70.jpeg', 5),
(38, 'Duo Badmin', 2, 'Bandung', 'Provinsi', 'Kota', 'eac8964818d0e84e2e9604bddf3af836.png', 4),
(39, 'Badmin2', 2, 'Bandung', 'Provinsi', 'Kota', '5463d587acbebf4914a652924da6ff68.png', 4),
(40, 'test1', 2, 'cnsai', 'Provinsi', 'Kota', 'db09a6ad85d3753cf13e78a724269727.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id_uploads` int(11) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `kartu_pelajar` text NOT NULL,
  `raport` text NOT NULL,
  `registrasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id_uploads`, `nama_peserta`, `foto`, `kartu_pelajar`, `raport`, `registrasi_id`) VALUES
(26, 'Kaka', 'assets/file/foto/Profile_Picture-removebg-preview.png', 'assets/file/kartu_pelajar/Premium Vector _ Football or soccer background with big ball in light blue colors.jpeg', 'assets/file/raport/10040022161_Fathia Dwi Rachmasari_Intro to Debate.pdf', 37),
(27, 'Keke', 'assets/file/foto/logo-optik1.png', 'assets/file/kartu_pelajar/Untitled design.png', 'assets/file/raport/10040022161_Fathia Dwi Rachmasari_Intro to Debate.pdf', 37),
(28, 'Kiki', 'assets/file/foto/logo-optik.png', 'assets/file/kartu_pelajar/upload-folder.png', 'assets/file/raport/10040022161_Fathia Dwi Rachmasari_Intro to Debate.pdf', 37),
(29, 'Kuku', 'assets/file/foto/R1.jpg', 'assets/file/kartu_pelajar/banner-1.jpeg', 'assets/file/raport/10040022161_Fathia Dwi Rachmasari_Intro to Debate.pdf', 37),
(30, 'Koko', 'assets/file/foto/Profile Picture.jpeg', 'assets/file/kartu_pelajar/banner-3.jpeg', 'assets/file/raport/10040022161_Fathia Dwi Rachmasari_Intro to Debate.pdf', 37),
(31, 'Optik Itam ', 'assets/file/foto/', 'assets/file/kartu_pelajar/', 'assets/file/raport/', 38),
(32, 'Optik Putih', 'assets/file/foto/', 'assets/file/kartu_pelajar/', 'assets/file/raport/', 38),
(33, 'optik1', 'assets/file/foto/logo-optik.png', 'assets/file/kartu_pelajar/upload-folder.png', 'assets/file/raport/upload-folder.png', 40),
(34, 'optik2', 'assets/file/foto/logo-optik.png', 'assets/file/kartu_pelajar/upload-folder.png', 'assets/file/raport/upload-folder.png', 40);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('gudang','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(19, 'admin', 'admin', 'admin@mails.com', '081231294218', 'admin', '$2y$10$gtfkrJRv6FXUqpc397QGmuXRLFz./tIr1DTSALhazq27xScD351z2', 1688316026, 'a9d66f2581735f8ac4d4549bd3332990.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_community`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id_uploads`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id_uploads` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
