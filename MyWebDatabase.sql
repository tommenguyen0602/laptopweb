-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 21, 2022 lúc 04:31 AM
-- Phiên bản máy phục vụ: 5.7.37-cll-lve
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `MyWebDatabase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customerId` varchar(50) NOT NULL,
  `customerName` varchar(50) DEFAULT NULL,
  `customerPhone` varchar(11) DEFAULT NULL,
  `customerAddress` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderId` varchar(50) NOT NULL,
  `orderDate` date NOT NULL,
  `customerId` varchar(50) NOT NULL,
  `productId` int(20) NOT NULL,
  `quantityOrdered` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productbrands`
--

CREATE TABLE `productbrands` (
  `productBrand` varchar(50) NOT NULL,
  `brandImage` varchar(50) NOT NULL,
  `brandDescription` varchar(50) NOT NULL,
  `brandCountry` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productId` int(20) NOT NULL,
  `productName` varchar(500) NOT NULL,
  `productBrand` varchar(50) NOT NULL,
  `productDistributor` varchar(500) NOT NULL,
  `productCPU` varchar(500) NOT NULL,
  `productRam` varchar(500) NOT NULL,
  `productHardDisk` varchar(500) NOT NULL,
  `productVGA` varchar(500) NOT NULL,
  `productScreen` varchar(500) NOT NULL,
  `productBattery` varchar(500) NOT NULL,
  `productWeight` varchar(500) NOT NULL,
  `productColor` varchar(500) NOT NULL,
  `productFeature` varchar(500) NOT NULL,
  `productOS` varchar(500) NOT NULL,
  `productImage` varchar(500) NOT NULL,
  `quantityInStock` int(50) NOT NULL,
  `quantityBought` int(50) NOT NULL,
  `productPrice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `order_fk1_constraint` (`customerId`),
  ADD KEY `order_fk2_constraint` (`productId`);

--
-- Chỉ mục cho bảng `productbrands`
--
ALTER TABLE `productbrands`
  ADD PRIMARY KEY (`productBrand`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `product_fk1_constraint` (`productBrand`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_fk1_constraint` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_fk2_constraint` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_fk1_constraint` FOREIGN KEY (`productBrand`) REFERENCES `productbrands` (`productBrand`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
