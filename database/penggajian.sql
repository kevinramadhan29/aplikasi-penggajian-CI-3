-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 06:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tj_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`) VALUES
(3, 'Web Developer', '4000000', '300000', '500000'),
(8, 'Front End', '4000000', '900000', '500000'),
(9, 'Admin', '9000000', '300000', '900000');

-- --------------------------------------------------------

--
-- Table structure for table `data_kehadiran`
--

CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah_hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alfa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kehadiran`
--

INSERT INTO `data_kehadiran` (`id_kehadiran`, `bulan`, `nik`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `jumlah_hadir`, `sakit`, `alfa`) VALUES
(3, 'October2020', '123456', 'kevin', 'Perempuan', 'Web Developer', 1, 1, 1),
(4, 'January2020', '123454', 'percobaan', 'Laki-Laki', 'Front End', 0, 0, 0),
(5, 'January2020', '123454', 'percobaan', 'Laki-Laki', 'Front End', 1, 1, 1),
(6, 'October2020', '123457', 'Admin', 'Laki-laki', 'Web Developer', 2, 2, 2),
(7, 'October2020', '123454', 'percobaan', 'Laki-Laki', 'Front End', 0, 0, 0),
(8, 'January2020', '123457', 'Admin', 'Laki-laki', 'Web Developer', 3, 2, 3),
(9, 'January2020', '123456', 'kevin', 'Perempuan', 'Web Developer', 0, 0, 0),
(10, 'February2020', '123457', 'Admin', 'Laki-laki', 'Web Developer', 2, 2, 2),
(11, 'February2020', '123456', 'kevin', 'Perempuan', 'Web Developer', 0, 0, 0),
(12, 'February2020', '123454', 'percobaan', 'Laki-Laki', 'Front End', 0, 0, 0),
(13, 'March2020', '123454', 'percobaan', 'Laki-Laki', 'Front End', 0, 0, 0),
(14, 'June2021', '123454', 'percobaan', 'Laki-Laki', 'Front End', 6, 0, 0),
(15, 'October2020', '232323', 'asdads', 'Laki-Laki', 'Web Developer', 2, 2, 2),
(16, 'January2020', '232323', 'asdads', 'Laki-Laki', 'Web Developer', 3, 2, 2),
(17, 'November2020', '232323', 'asdads', 'Laki-Laki', 'Web Developer', 0, 0, 0),
(18, 'November2020', '777777', 'Kevin Ramadhan', 'Laki-Laki', 'Admin', 22, 0, 1),
(19, 'November2020', '123454', 'percobaan', 'Perempuan', 'Web Developer', 0, 0, 0),
(20, 'December2020', '232323', 'asdads', 'Laki-Laki', 'Web Developer', 0, 0, 0),
(21, 'December2020', '777777', 'Kevin Ramadhan', 'Laki-Laki', 'Admin', 20, 0, 1),
(22, 'December2020', '123454', 'percobaan', 'Perempuan', 'Web Developer', 0, 0, 0),
(23, 'May2020', '232323', 'asdads', 'Laki-Laki', 'Web Developer', 0, 0, 0),
(24, 'May2020', '777777', 'Kevin Ramadhan', 'Laki-Laki', 'Admin', 20, 0, 4),
(25, 'May2020', '123454', 'percobaan', 'Perempuan', 'Web Developer', 0, 0, 0),
(26, 'July2020', '232323', 'asdads', 'Laki-Laki', 'Web Developer', 0, 0, 0),
(27, 'July2020', '777777', 'Kevin Ramadhan', 'Laki-Laki', 'Admin', 90, 0, 4),
(28, 'July2020', '123454', 'percobaan', 'Perempuan', 'Web Developer', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `username`, `password`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `photo`, `hak_akses`) VALUES
(10, '232323', 'asdads', 'admin', '202cb962ac59075b964b07152d234b70', 'Laki-Laki', 'Web Developer', '2020-10-07', 'Pegawai Tetap', '67501250_p0_master12001.jpg', 2),
(12, '123454', 'percobaan', 'sadsd', '202cb962ac59075b964b07152d234b70', 'Perempuan', 'Web Developer', '2020-10-29', 'Pegawai Tetap', '117600396_351117885920592_7540979411803404082_n.jpg', 1),
(13, '777777', 'Kevin Ramadhan', 'kevin', 'd9b1d7db4cd6e70935368a1efb10e377', 'Laki-Laki', 'Admin', '2020-11-23', 'Pegawai Tetap', 'eromanga_ep12.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'pegawai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL,
  `potongan` varchar(120) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id`, `potongan`, `jml_potongan`) VALUES
(2, 'alfa', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
