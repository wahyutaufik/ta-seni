-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2014 at 05:31 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `halimah-herbal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'YWRtaW4=');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `value`, `name`) VALUES
(1, 'Herbal', 'Herbal'),
(2, 'Mujarab', 'Mujarab');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
`id_keranjang` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `tgl_keranjang` datetime NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemesan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `name`, `email`, `phone`, `address`, `id_product`, `jumlah`, `tanggal`, `id_pemesan`, `status`) VALUES
(1, 'Wahyu Taufik', 'wahyutaufik37@gmail.com', '085777160010', 'Jalan Kedamaian', 2, '1', '2014-11-16', 'h9clm1k4g5n5i13mkgsk03urk5', 'New'),
(2, 'Wahyu Taufik', 'wahyutaufik37@gmail.com', '085777160010', 'Jalan Kedamaian', 3, '1', '2014-11-16', 'h9clm1k4g5n5i13mkgsk03urk5', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_time` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `category`, `name`, `price`, `description`, `created_time`, `image`) VALUES
(2, 'Herbal', 'Tong Fang', '12000', 'Klinik Tong fang', '2014-11-16 09:26:41', 'Koala.jpg'),
(3, 'Mujarab', 'Tong Tong', '13000', 'Klinik Tong tong', '2014-11-16 09:27:16', 'Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
 ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
