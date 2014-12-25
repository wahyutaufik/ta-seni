-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2014 at 05:48 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `value`, `name`) VALUES
(1, 'Herbal', 'Herbal'),
(2, 'Mujarab', 'Mujarab'),
(3, 'Jamu Sachet', 'Jamu Sachet'),
(4, 'Rempah', 'Rempah');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `via` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `name`, `via`, `rekening`, `invoice_no`, `tanggal`, `image`) VALUES
(1, 'Gail Navarro', 'BCA', '45667889', '141225100435', '2014-12-25', '1185710_10201076911018166_1321117304_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE IF NOT EXISTS `ongkir` (
`id` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id`, `provinsi`, `harga`) VALUES
(1, 'Jakarta', '18000'),
(3, 'Kalimantan', '20000'),
(4, 'Surabaya', '17000');

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
  `id_product` varchar(25) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemesan` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `name`, `email`, `phone`, `address`, `id_product`, `jumlah`, `tanggal`, `id_pemesan`, `invoice_no`, `provinsi_id`, `status`) VALUES
(15, 'Wahyu Taufik', 'wahyutaufik37@gmail.com', '085777160010', 'Jalan Pancawarga', '3', '1', '2014-12-25', 'pp9ilcd40db6p9vq1n3p5neta7', '141225100435', 4, 'Lunas'),
(16, 'Arif Rahman', 'arif@gmail.com', '085777160010', 'Jalan Kesadaran', '2', '1', '2014-12-25', 'pp9ilcd40db6p9vq1n3p5neta7', '141225100658', 0, 'New'),
(17, 'Keefe Hughes', 'mezufypi@gmail.com', '085777160010', 'Odio a itaque do proident, assumenda veniam, quia occaecat veritatis voluptates nemo enim mollit adipisicing rerum do eius.', '3', '1', '2014-12-25', 'pp9ilcd40db6p9vq1n3p5neta7', '141225101014', 0, 'New'),
(18, 'Tana Howe', 'cosijozu@yahoo.com', '08677665768', 'Ducimus, minus ut deserunt voluptatem. Labore adipisci earum quibusdam consectetur, provident, unde perferendis error nihil quis totam possimus, magnam.', '2', '1', '2014-12-25', 'dgolfvmhapm6orfj2e676tsat2', '141225101048', 0, 'New'),
(19, 'Germane Moss', 'poramal@hotmail.com', '085777160010', 'Omnis culpa expedita voluptatum ab consequatur? Fuga. Ut aliquip numquam non cupiditate irure amet, in.', '3', '1', '2014-12-25', 'eqqa81rt1kn7tjnk3tqqslj111', '141225102253', 0, 'New'),
(20, 'Drew Cote', 'penadub@hotmail.com', '085777160010', 'Officiis id laborum. Voluptas anim et sequi consequatur, reiciendis officia mollitia in maxime magnam id.', '2', '1', '2014-12-25', 'iuh29t9pmtak49onifa9fkmso4', '141225103407', 0, 'New'),
(21, 'Mikayla Stark', 'gesumaquj@gmail.com', '085777160010', 'Velit consequatur ab exercitationem tempora id molestiae sint, id aut quaerat quis sit ad occaecat tempora velit quo harum quaerat.', '2', '1', '2014-12-25', 'd4q77koaij7koc6fca9naeful2', '141225104049', 0, 'New'),
(22, 'Signe Mullen', 'posasa@gmail.com', '085777160010', 'Voluptate ex doloribus magnam qui et consequatur, culpa do culpa obcaecati illum, molestias alias rerum alias sunt in alias qui.', '3', '20', '2014-12-25', 'bcqj2rkgfvnmac7okd9vqdpsi7', '141225111727', 0, 'New'),
(23, 'Signe Mullen', 'posasa@gmail.com', '085777160010', 'Voluptate ex doloribus magnam qui et consequatur, culpa do culpa obcaecati illum, molestias alias rerum alias sunt in alias qui.', '2', '10', '2014-12-25', 'bcqj2rkgfvnmac7okd9vqdpsi7', '141225111727', 0, 'New'),
(24, 'Glenna Ware', 'bifil@hotmail.com', '085777160010', 'Similique soluta libero qui in eum eos omnis praesentium veritatis delectus, non veniam.', '3', '8', '2014-12-25', 'ga4pqvuerjv177elcvr3v5r047', '141225112123', 0, 'New'),
(25, 'Chava Duncan', 'liqymen@gmail.com', '085777160010', 'Dolor odit aspernatur commodo reprehenderit voluptate quis laudantium, iste in quia ut in.', '3', '10', '2014-12-25', 'ctrq0n91g7qhktmrshjqsp4mm7', '141225124813', 1, 'New'),
(26, 'Cade Dalton', 'baqebuk@hotmail.com', '085777160010', 'Aliquam fugiat, ad sed qui sed aliqua. Alias ullam libero odit repudiandae commodo dolorum ad quidem officia anim voluptatem.', '3', '9', '2014-12-25', '7dm70alpc1vt9sehkm7prgcnv7', '141225125744', 4, 'New');

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
  `stok` int(20) NOT NULL,
  `created_time` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `category`, `name`, `price`, `description`, `stok`, `created_time`, `image`) VALUES
(2, 'Herbal', 'Tong Fang', '12000', 'Klinik Tong fang', 19, '2014-12-25 10:19:14', 'Koala.jpg'),
(3, 'Mujarab', 'Tong Tong', '13000', 'Klinik Tong tong', 81, '2014-12-25 10:19:37', 'Lighthouse.jpg'),
(4, 'Herbal', 'XXX', '45000', 'Tersedia', 24, '2014-12-25 04:58:48', 'antar muka web.jpg'),
(5, 'Mujarab', 'Kukubima', '200000', 'Ini adalah ramuan herbal yang sangat berkhasiat', 51, '2014-12-25 04:59:02', '935562_10151421356076947_1516722663_n (2).png'),
(6, 'Rempah', 'Sambiloto', '10000', 'Ini adalah ramuan pahit tapi berkhasiat bagi yang menderita penyakit', 34, '2014-12-25 05:32:05', '1386727201497.jpg'),
(7, 'Jamu Sachet', 'Jamu Jago', '43000', 'Ini adalah jamu sachet berkhasiat', 55, '2014-12-25 05:32:55', '1386089291862.jpg'),
(8, 'Jamu Sachet', 'Buyung Upik', '2000', 'ini adalah jamu anak2', 102, '2014-12-25 05:33:36', '1391047696092.jpg'),
(9, 'Herbal', 'Pilkita', '1000', 'ini obat kuat', 23, '2014-12-25 05:34:14', '1391011569584.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `description`, `image`) VALUES
(1, 'testing', '1378993717452.jpg'),
(2, 'alis', '1395235756767.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
`id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `judul`, `isi`, `image`) VALUES
(1, 'Tentang HalimahHerbal Clinic', 'Ini adalah tentang halimah herbal clinic', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id` int(20) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `total_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `invoice_no`, `total_bayar`) VALUES
(1, '141225125744', '134000');

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
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
