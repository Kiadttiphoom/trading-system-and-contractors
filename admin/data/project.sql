-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `no_buy` int(3) NOT NULL,
  `id_receipt_buy` varchar(3) NOT NULL,
  `id_employee` varchar(4) NOT NULL,
  `id_product` int(4) NOT NULL,
  `buy_number` int(3) NOT NULL,
  `price_number_buy` varchar(2) NOT NULL,
  `total_buy` int(5) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(3) NOT NULL,
  `name_company` varchar(50) NOT NULL,
  `tel_company` varchar(10) NOT NULL,
  `address_company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `no_contractor` int(6) NOT NULL,
  `id_contractor` int(3) NOT NULL,
  `id_employee` varchar(10) NOT NULL,
  `id_custumer` varchar(4) NOT NULL,
  `id_product` int(4) NOT NULL,
  `contractor_number` int(3) NOT NULL,
  `details_contractor` varchar(50) NOT NULL,
  `width_contractor` int(3) NOT NULL,
  `hight_contractor` int(3) NOT NULL,
  `price_contractor` int(7) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `id_custumer` int(4) NOT NULL,
  `name_custumer` varchar(50) NOT NULL,
  `tel_custumer` varchar(10) NOT NULL,
  `address_custumer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `no_impart` int(3) NOT NULL,
  `id_delivery` varchar(3) NOT NULL,
  `id_employee` varchar(4) NOT NULL,
  `id_product` int(4) NOT NULL,
  `impart_number` int(3) NOT NULL,
  `price_number_impart` varchar(2) NOT NULL,
  `total_impart` int(5) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(3) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name_employee` varchar(50) NOT NULL,
  `tel_employee` varchar(10) NOT NULL,
  `address_employee` varchar(100) NOT NULL,
  `status_employee` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `username`, `password`, `name_employee`, `tel_employee`, `address_employee`, `status_employee`) VALUES
(2, 'a001', '123456', 'สมหมาย ขายสี', '0887788996', '123456@hotmail.com', 'Admin'),
(3, 'E001', '123456', 'สมชาย ขายดินสอ', '0778899663', '123456789@hotmail.com', 'Employee'),
(4, 'O001', '123456', 'สมหญิง ขายยางลบ', '0996663332', '12345@hotmail.com', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(4) NOT NULL,
  `pass_member` varchar(8) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(3) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `brand_product` varchar(20) NOT NULL,
  `unit_product` varchar(20) NOT NULL,
  `id_type_product` int(2) NOT NULL,
  `details_product` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_buy`
--

CREATE TABLE `receipt_buy` (
  `id_receipt_buy` int(3) NOT NULL,
  `date_receipt_buy` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_contractor`
--

CREATE TABLE `receipt_contractor` (
  `id_contractor` int(3) NOT NULL,
  `date_contractor` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_delivery`
--

CREATE TABLE `receipt_delivery` (
  `id_delivery` int(3) NOT NULL,
  `date_delivery` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_sell`
--

CREATE TABLE `receipt_sell` (
  `id_receipt_sell` int(3) NOT NULL,
  `date_receipt_sell` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `no_sell` int(6) NOT NULL,
  `id_receipt_sell` varchar(3) NOT NULL,
  `id_employee` varchar(4) NOT NULL,
  `id_product` int(4) NOT NULL,
  `sell_number` int(3) NOT NULL,
  `price_number_sell` varchar(2) NOT NULL,
  `total_sell` int(5) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status` int(3) NOT NULL,
  `status_details` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_stock_number` int(4) NOT NULL,
  `id_product` int(4) NOT NULL,
  `id_employee` int(3) NOT NULL,
  `id_company` int(3) NOT NULL,
  `price_buy` varchar(10) NOT NULL,
  `price_sell` varchar(10) NOT NULL,
  `stock_number` varchar(3) NOT NULL,
  `stock_leftovers` varchar(3) NOT NULL,
  `date_stock` date NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id_type_product` int(2) NOT NULL,
  `name_type_product` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `unit_product`
--

CREATE TABLE `unit_product` (
  `id_unit_product` int(3) NOT NULL,
  `unit_product` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`no_buy`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`no_contractor`);

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`id_custumer`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`no_impart`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `receipt_buy`
--
ALTER TABLE `receipt_buy`
  ADD PRIMARY KEY (`id_receipt_buy`);

--
-- Indexes for table `receipt_contractor`
--
ALTER TABLE `receipt_contractor`
  ADD PRIMARY KEY (`id_contractor`);

--
-- Indexes for table `receipt_delivery`
--
ALTER TABLE `receipt_delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `receipt_sell`
--
ALTER TABLE `receipt_sell`
  ADD PRIMARY KEY (`id_receipt_sell`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`no_sell`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock_number`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Indexes for table `unit_product`
--
ALTER TABLE `unit_product`
  ADD PRIMARY KEY (`id_unit_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `no_buy` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `no_contractor` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `id_custumer` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `no_impart` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt_buy`
--
ALTER TABLE `receipt_buy`
  MODIFY `id_receipt_buy` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt_contractor`
--
ALTER TABLE `receipt_contractor`
  MODIFY `id_contractor` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt_delivery`
--
ALTER TABLE `receipt_delivery`
  MODIFY `id_delivery` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt_sell`
--
ALTER TABLE `receipt_sell`
  MODIFY `id_receipt_sell` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `no_sell` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock_number` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type_product` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_product`
--
ALTER TABLE `unit_product`
  MODIFY `id_unit_product` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
