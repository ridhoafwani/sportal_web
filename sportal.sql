-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2020 at 05:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'futsall'),
(2, 'badminton'),
(3, 'voli'),
(4, 'basket');

-- --------------------------------------------------------

--
-- Table structure for table `Jadwal`
--

CREATE TABLE `Jadwal` (
  `id` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `s01` int(1) NOT NULL,
  `s12` int(1) NOT NULL,
  `s23` int(1) NOT NULL,
  `s34` int(1) NOT NULL,
  `s45` int(1) NOT NULL,
  `s56` int(1) NOT NULL,
  `s67` int(1) NOT NULL,
  `s78` int(1) NOT NULL,
  `s89` int(1) NOT NULL,
  `s910` int(1) NOT NULL,
  `s1011` int(1) NOT NULL,
  `s1112` int(1) NOT NULL,
  `s1213` int(1) NOT NULL,
  `s1314` int(1) NOT NULL,
  `s1415` int(1) NOT NULL,
  `s1516` int(1) NOT NULL,
  `s1617` int(1) NOT NULL,
  `s1718` int(1) NOT NULL,
  `s1819` int(1) NOT NULL,
  `s1920` int(1) NOT NULL,
  `s2021` int(1) NOT NULL,
  `s2122` int(1) NOT NULL,
  `s2223` int(1) NOT NULL,
  `s2324` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Jadwal`
--

INSERT INTO `Jadwal` (`id`, `date`, `id_lapangan`, `s01`, `s12`, `s23`, `s34`, `s45`, `s56`, `s67`, `s78`, `s89`, `s910`, `s1011`, `s1112`, `s1213`, `s1314`, `s1415`, `s1516`, `s1617`, `s1718`, `s1819`, `s1920`, `s2021`, `s2122`, `s2223`, `s2324`) VALUES
('10.2020-06-10', '2020-06-10', 10, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2.2020-06-08', '2020-06-08', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2.2020-06-09', '2020-06-09', 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('3.2020-06-08', '2020-06-08', 3, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('3.2020-06-20', '2020-06-20', 3, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('8.2020-06-08', '2020-06-08', 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('8.2020-06-10', '2020-06-10', 8, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `tarif` int(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `map` varchar(512) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `id_category`, `name`, `tarif`, `alamat`, `map`, `image`) VALUES
(2, 1, 'Futsal Hexa', 100000, 'Jln Adi Sucipto no 17, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(3, 1, 'CGV Sport Hall', 100000, 'Jln Abdul Kadir no 01, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(4, 2, 'Badminton Araya', 30000, 'Jln Babakan no 11, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(5, 2, 'Badminton GOR Rajabasa', 30000, 'Jln Pagesangan no 12, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(6, 2, 'Badminton Master', 30000, 'Jln Pagutan no 13, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(7, 3, 'Voli Giba', 80000, 'Jln Cakranegara no 01, Mataram	', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(8, 3, 'Voli Hugo', 80000, 'Jln Sapta no 02, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(9, 3, 'Voli Anggrek II', 80000, 'Jln Kekalik no 03, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(10, 4, 'Sport Hall Majalengka', 100000, 'Jln Turida no 01, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(11, 4, 'The Spring', 100000, 'Jln Mandalika no 02, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', 'lapangandefault.jpg'),
(13, 1, 'Futsal Hexagonal', 100000, 'Jln Adi Sucipto no 17, Mataram', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0946094786045!2d116.08999821463044!3d-8.586901989535672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1591166275311!5m2!1sid!2sid', '21.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lapangan_name` varchar(256) NOT NULL,
  `orderdate` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(128) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `user_id`, `lapangan_name`, `orderdate`, `date`, `time`, `price`) VALUES
(26, 5, 'Futsal Hexa', '07-06-2020 23:39:24', '2020-06-09', '01-02', 100000),
(27, 5, 'Sport Hall Majalengka', '07-06-2020 23:40:05', '2020-06-10', '01-02', 100000),
(28, 5, 'Sport Hall Majalengka', '07-06-2020 23:40:05', '2020-06-10', '02-03', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pemilik'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 3, 'Pesanan Saya', 'memberarea/pesanan', 'fas fa-fw fa-shopping-cart', 1),
(2, 3, 'Kritik dan Saran', 'memberarea/saran', 'fas fa-fw fa-user', 1),
(3, 1, 'Laporan', 'laporan', 'fas fa-fw fa-file-archive', 1),
(5, 2, 'Laporan', 'laporan', 'fas fa-fw fa-file-archive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `notlp` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `notlp`, `alamat`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'ridho', 'admin@gmail.com', 'testimonials-05.png', '$2y$10$nbOMODZIvSepYtJfi48XTOfgau9GAWEXT8.KKVKHAA67ixNKnYe1i', '081992089345', 'Jln cempaka 089', 1, 1, 1584782255),
(4, 'ridho', 'pemilik@gmail.com', 'testimonials-06.png', '$2y$10$nbOMODZIvSepYtJfi48XTOfgau9GAWEXT8.KKVKHAA67ixNKnYe1i', '', '', 2, 1, 1584782255),
(5, 'Ini Akun Member', 'member@gmail.com', 'mainhp.jpg', '$2y$10$nbOMODZIvSepYtJfi48XTOfgau9GAWEXT8.KKVKHAA67ixNKnYe1i', '081992089345', 'Jln pancasila 1945', 3, 1, 1584782255);

-- --------------------------------------------------------

--
-- Table structure for table `user_acces_menu`
--

CREATE TABLE `user_acces_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_acces_menu`
--

INSERT INTO `user_acces_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 3, 3),
(2, 1, 1),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Pemilik'),
(3, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Jadwal`
--
ALTER TABLE `Jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_acces_menu`
--
ALTER TABLE `user_acces_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_acces_menu`
--
ALTER TABLE `user_acces_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
