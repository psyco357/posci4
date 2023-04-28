-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2023 at 07:36 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `masterapp`
--

DROP TABLE IF EXISTS `masterapp`;
CREATE TABLE IF NOT EXISTS `masterapp` (
  `kdapp` int(11) NOT NULL AUTO_INCREMENT,
  `namaapp` varchar(50) NOT NULL,
  PRIMARY KEY (`kdapp`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterapp`
--

INSERT INTO `masterapp` (`kdapp`, `namaapp`) VALUES
(1, 'absen');

-- --------------------------------------------------------

--
-- Table structure for table `masterlevel`
--

DROP TABLE IF EXISTS `masterlevel`;
CREATE TABLE IF NOT EXISTS `masterlevel` (
  `kdlevel` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`kdlevel`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlevel`
--

INSERT INTO `masterlevel` (`kdlevel`, `level`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `kdmenu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `submenu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `app` int(11) NOT NULL,
  `urut` int(11) NOT NULL,
  PRIMARY KEY (`kdmenu`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kdmenu`, `title`, `submenu`, `link`, `icon`, `warna`, `status`, `target`, `level`, `app`, `urut`) VALUES
(2, 'Profil', '', 'profil', 'fas fa-user', 'blue', 1, 2, 3, 1, 1),
(51, 'Menu', '', 'tamabahmenusite', 'fas fa-plus-square', 'blue', 1, 50, 1, 1, 1),
(50, 'sidebar super', '', '', '', '', 1, 0, 1, 1, 1),
(52, 'Kelola Users', '', 'super/user222', 'fas fa-user', 'blue', 1, 50, 1, 1, 2),
(53, 'Kelola Users', '', 'super/user', 'fas fa-user', 'blue', 1, 50, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `auth` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `username`, `password`, `auth`) VALUES
(1, 'ww', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
