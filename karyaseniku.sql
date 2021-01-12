-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2021 at 02:46 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyaseniku`
--

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

DROP TABLE IF EXISTS `karya`;
CREATE TABLE IF NOT EXISTS `karya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `gambar` varchar(512) NOT NULL,
  `judul` varchar(512) NOT NULL,
  `pelukis` varchar(512) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id`, `id_user`, `gambar`, `judul`, `pelukis`, `desc`) VALUES
(4, 0, 'senja di gunung.jpg', 'Senja Di Gunung Kala Itu', 'Unknown', 'Senja di Gunung Kala itu yang sangat rendu'),
(5, 0, 'Senja.jpg', 'Senja', 'Unknown', 'Gambar Senja sore hari'),
(12, 4, 'monalisa.jpeg', 'Monalisa', 'Leonardo Da Vinci', 'Sebuah Foto Perempuan Misterius Yang terlukis Dengan kanvas kayu ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `desc` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `desc`) VALUES
(4, 'Tera Nurwahyu Pratama', 'Tera', 'terajan22@gmail.com', '$2y$10$jvUi96AA4bFZTV5KWo3Y0ut6NN2ATKRXB59cZ996JthrEwF7u.x6W', 'Saya adalah seorang pelukis yang sudah melukis selama 5 tahun. Saya menyukai lukisan abstrak, dapat dilihat dari karya karya yang telah saya buat'),
(3, 'asd', 'asd', 'asd', '$2y$10$r0W4/F2W3HWuasjqxwux2utnkc/5y7W5PcXUnMqdhEt6hcUQ5whUC', 'asd'),
(5, 'Admin Ajan', 'Admin', 'Admin@admin.com', '$2y$10$uIV2PthmKgIuP4czJEHoQ.HOIk6B.F7CnKg/miO.sVFp0TIlgZUAy', NULL),
(6, 'Admin Aja', 'admin', 'admin@admin.com', '$2y$10$beINfJWPvEJpGxg5Z5xS.eF/ojXcOs8OIRYP1U5SjkAxwy1UhuPWO', NULL),
(7, 'Sayang', 'akusayangkamu', 'aku.sayang@kamu.com', '$2y$10$jQ8fIs6lt327C7VGtndopOPLi34eCnghxHMj5WDgsrDcDlif9pWJC', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
