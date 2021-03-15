-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2019 pada 09.10
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasih_kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_accounts`
--

CREATE TABLE `as_accounts` (
  `accountID` int(11) NOT NULL,
  `accountCode` varchar(10) NOT NULL,
  `accountName` varchar(50) NOT NULL,
  `accountStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_accounts`
--

INSERT INTO `as_accounts` (`accountID`, `accountCode`, `accountName`, `accountStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '101', 'Biaya Sewa', 'Y', '2014-10-27 03:53:24', 1, '0000-00-00 00:00:00', 0),
(2, '102', 'Biaya Listrik', 'Y', '2014-10-27 03:53:36', 1, '2014-10-27 03:56:17', 1),
(3, '103', 'Biaya Gaji', 'Y', '2014-10-27 03:53:44', 1, '0000-00-00 00:00:00', 0),
(4, '104', 'Biaya Telepon', 'Y', '2014-10-27 03:54:41', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_barcodes`
--

CREATE TABLE `as_barcodes` (
  `barcodeID` int(11) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_barcodes`
--

INSERT INTO `as_barcodes` (`barcodeID`, `productBarcode`, `qty`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(11, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(12, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(13, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(14, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(15, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(16, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(17, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(18, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(19, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(20, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(21, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(22, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(23, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(24, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(25, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_brands`
--

CREATE TABLE `as_brands` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `brandStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_brands`
--

INSERT INTO `as_brands` (`brandID`, `brandName`, `brandStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(18, ' Lektop DELL', 'Y', '2019-03-19 09:35:36', 9, '2019-03-19 09:35:41', 9),
(19, 'TP-LINK', 'Y', '2019-03-19 09:35:56', 9, '0000-00-00 00:00:00', 0),
(20, 'TP-LINK 12', 'Y', '2019-03-19 09:36:05', 9, '0000-00-00 00:00:00', 0),
(21, 'LEKTOP ACER', 'Y', '2019-03-23 09:47:41', 54, '0000-00-00 00:00:00', 0),
(22, 'lektop asus ', 'Y', '2019-04-01 16:54:55', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_buy_detail_transactions`
--

CREATE TABLE `as_buy_detail_transactions` (
  `detailID` int(11) NOT NULL,
  `invoiceBuyID` varchar(16) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `detailBuyPrice` int(11) NOT NULL,
  `detailBuyQty` int(11) NOT NULL,
  `detailBuySubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_buy_detail_transactions`
--

INSERT INTO `as_buy_detail_transactions` (`detailID`, `invoiceBuyID`, `productBarcode`, `detailBuyPrice`, `detailBuyQty`, `detailBuySubtotal`, `createdDate`, `createdUserId`, `modifiedDate`, `modifiedUserID`) VALUES
(3, 'BJSH141025113296', '3212758009345', 4500, 5, 22500, '2014-10-25 23:32:23', 1, '2014-10-25 23:32:51', 1),
(5, 'BJSH141025113296', '2140912123601', 11990, 10, 119900, '2014-10-25 23:32:58', 1, '2014-10-25 23:33:03', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_buy_transactions`
--

CREATE TABLE `as_buy_transactions` (
  `trxID` int(11) NOT NULL,
  `invoiceBuyID` varchar(16) NOT NULL,
  `invoiceSupplier` varchar(50) NOT NULL,
  `supplierID` varchar(10) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` text NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxSubtotal` int(11) NOT NULL,
  `trxDiscount` int(11) NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `trxDP` int(11) NOT NULL,
  `trxStatus` char(1) NOT NULL,
  `trxTerminDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_buy_transactions`
--

INSERT INTO `as_buy_transactions` (`trxID`, `invoiceBuyID`, `invoiceSupplier`, `supplierID`, `trxFullName`, `trxAddress`, `trxPhone`, `trxDate`, `trxSubtotal`, `trxDiscount`, `trxTotal`, `trxDP`, `trxStatus`, `trxTerminDate`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'BJSH141025113296', '45734578475847874', '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '2014-10-25', 142400, 0, 142400, 0, '2', '2014-11-25', '2014-10-25 23:33:28', 1, '2014-10-25 23:37:48', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_categories`
--

CREATE TABLE `as_categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_categories`
--

INSERT INTO `as_categories` (`categoryID`, `categoryName`, `categoryStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(26, ' LEKTOP ACER', 'Y', '2019-03-23 09:48:16', 54, '0000-00-00 00:00:00', 0),
(27, ' Carger Lektop DELL', 'Y', '2019-03-23 09:49:20', 54, '0000-00-00 00:00:00', 0),
(28, ' LEKTOP DELL', 'Y', '2019-03-23 09:49:35', 54, '0000-00-00 00:00:00', 0),
(29, ' TP-LINK', 'Y', '2019-03-23 09:51:47', 54, '0000-00-00 00:00:00', 0),
(30, ' lektop asus Rox', 'Y', '2019-04-01 16:55:20', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_customers`
--

CREATE TABLE `as_customers` (
  `kode_pelanggan` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `telphone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_customers`
--

INSERT INTO `as_customers` (`kode_pelanggan`, `name`, `address`, `telphone`, `email`) VALUES
(3, 'joko', 'jl.lembayung.gang pu 5 manggul', 2147483647, 'joko26@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_debts`
--

CREATE TABLE `as_debts` (
  `debtID` int(11) NOT NULL,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_debts`
--

INSERT INTO `as_debts` (`debtID`, `invoiceID`, `status`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'PXDG141025064434', '1', '2014-10-25 23:29:30', 1, '0000-00-00 00:00:00', 0),
(4, 'BJSH141025113296', '1', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_debts_payment`
--

CREATE TABLE `as_debts_payment` (
  `paymentID` int(11) NOT NULL,
  `debtID` int(11) NOT NULL,
  `debtDate` date NOT NULL,
  `debtPay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_funds`
--

CREATE TABLE `as_funds` (
  `fundID` int(11) NOT NULL,
  `accountID` int(11) NOT NULL,
  `fundDate` date NOT NULL,
  `fundAmount` int(11) NOT NULL,
  `fundNote` varchar(150) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_funds`
--

INSERT INTO `as_funds` (`fundID`, `accountID`, `fundDate`, `fundAmount`, `fundNote`, `createdDate`, `createdUserId`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 1, '2014-10-27', 5000000, 'Biaya Sewa Bulan Oktober 2014', '2014-10-27 04:25:06', 1, '0000-00-00 00:00:00', 0),
(2, 3, '2014-10-27', 5000000, 'Biaya Gaji Staff Oktober 2014', '2014-10-27 04:27:09', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_identity`
--

CREATE TABLE `as_identity` (
  `identityID` int(11) NOT NULL,
  `identityName` varchar(100) NOT NULL,
  `identityAddress` varchar(200) NOT NULL,
  `identityPhone` varchar(20) NOT NULL,
  `identityEmail` varchar(100) NOT NULL,
  `identityImage` text NOT NULL,
  `identityOwner` varchar(100) NOT NULL,
  `identityOwnerPhone` varchar(20) NOT NULL,
  `identityPPN` varchar(10) NOT NULL,
  `identityPrintSale` int(11) NOT NULL,
  `identityPrintBuy` int(11) NOT NULL,
  `identityPrintRetur` int(11) NOT NULL,
  `identityPrintDebt` int(11) NOT NULL,
  `identityPrintReceive` int(11) NOT NULL,
  `identityPrintReport` int(11) NOT NULL,
  `identityNPWP` varchar(50) NOT NULL,
  `identityPKP` varchar(50) NOT NULL,
  `identityPKPDate` date NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_identity`
--

INSERT INTO `as_identity` (`identityID`, `identityName`, `identityAddress`, `identityPhone`, `identityEmail`, `identityImage`, `identityOwner`, `identityOwnerPhone`, `identityPPN`, `identityPrintSale`, `identityPrintBuy`, `identityPrintRetur`, `identityPrintDebt`, `identityPrintReceive`, `identityPrintReport`, `identityNPWP`, `identityPKP`, `identityPKPDate`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'CV. ASFA Solution', 'Jl. Pegadaian No. 38 Arjawinangun - Cirebon 45162 Indonesia', '(0231) 358630', 'takehikoboyz@gmail.com', 'pj_141025033647_Logo.jpg', 'Agus Saputra, S.Kom.', '(0231) 358630', '10', 1, 1, 1, 1, 1, 1, '434893748987794', '93485948594859489', '2013-02-16', '2014-10-25 19:25:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_members`
--

CREATE TABLE `as_members` (
  `memberID` int(11) NOT NULL,
  `memberCode` char(5) NOT NULL,
  `memberFullName` varchar(100) NOT NULL,
  `memberAddress` text NOT NULL,
  `memberPhone` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_members`
--

INSERT INTO `as_members` (`memberID`, `memberCode`, `memberFullName`, `memberAddress`, `memberPhone`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '00001', 'CV. ASFA Solution', 'Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon', '(0231) 358630', '2014-10-25 10:57:47', 1, '0000-00-00 00:00:00', 0),
(2, '00002', 'Vans Motor', 'Jl. Ki Hajar Dewantara No. 130 Arjawinangun Cirebon', '(0231) 359000', '2014-10-25 10:58:07', 1, '0000-00-00 00:00:00', 0),
(3, '00003', 'GBI Arjawinangun', 'Jl. Kantor Pos No. 1 Arjawinangun Cirebon', '(0231) 357216', '2014-10-25 10:59:05', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_products`
--

CREATE TABLE `as_products` (
  `productID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImei` varchar(50) NOT NULL,
  `productBuyPrice` int(11) NOT NULL,
  `productSalePrice` int(11) NOT NULL,
  `productDiscount` int(11) NOT NULL,
  `productStock` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `productNote` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_products`
--

INSERT INTO `as_products` (`productID`, `supplierID`, `categoryID`, `brandID`, `productBarcode`, `productName`, `productImei`, `productBuyPrice`, `productSalePrice`, `productDiscount`, `productStock`, `image`, `productNote`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(94, 8, 23, 18, '098YB756879', 'LEKTOP DELL 2015', '0879808', 2000000, 3000000, 0, 30, 'DELLL.jpg', 'N', '2019-03-23 09:46:48', 54, '0000-00-00 00:00:00', 0),
(98, 8, 29, 18, 'YMB1234567890', 'LEKTOP DELL 2019', '09E765898   ', 1000000, 3000000, 10, 22, 'DELLL.jpg', '', '2019-03-30 23:11:37', 56, '2019-04-01 22:32:20', 1),
(99, 8, 26, 21, 'BBBKMOPJ57687', 'LEKTOP ACER 2020', '0987985787  ', 2500000, 3500000, 0, 2, 'ACEER.jpg', '', '2019-04-01 11:13:49', 1, '2019-04-01 22:32:34', 1),
(100, 8, 30, 22, 'ASUSROX0987578', 'lektop ASUS ROG', '09875787          ', 10, 5000, 10, 52, 'asus.jpg', '', '2019-04-01 16:56:33', 1, '2019-04-04 21:51:31', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_receivables`
--

CREATE TABLE `as_receivables` (
  `receivableID` int(11) NOT NULL,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_receivables_payment`
--

CREATE TABLE `as_receivables_payment` (
  `paymentID` int(11) NOT NULL,
  `receivableID` int(11) NOT NULL,
  `receivableDate` date NOT NULL,
  `receivablePay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_retur_detail_transactions`
--

CREATE TABLE `as_retur_detail_transactions` (
  `detailID` int(11) NOT NULL,
  `invoiceReturID` varchar(16) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `detailReturPrice` int(11) NOT NULL,
  `detailReturQty` int(11) NOT NULL,
  `detailReturSubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `date_sale` date NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_retur_detail_transactions`
--

INSERT INTO `as_retur_detail_transactions` (`detailID`, `invoiceReturID`, `productBarcode`, `detailReturPrice`, `detailReturQty`, `detailReturSubtotal`, `createdDate`, `date_sale`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'YCOG141026103632', '2140912123601', 11990, 2, 23980, '2014-10-26 10:45:05', '0000-00-00', 1, '2014-10-26 10:45:11', 1),
(2, 'YCOG141026103632', '4452904810353', 5600, 4, 22400, '2014-10-26 10:46:47', '0000-00-00', 1, '2014-10-26 10:46:54', 1),
(5, 'HKGR141026105599', '3288305105689', 11990, 3, 35970, '2014-10-27 02:54:09', '0000-00-00', 1, '2014-10-27 02:54:21', 1),
(6, 'HKGR141026105599', '2140902110832', 3400, 3, 10200, '2014-10-27 02:54:15', '0000-00-00', 1, '2014-10-27 02:54:47', 1),
(8, 'HKGR141026105599', '3212758009345', 4500, 5, 22500, '2014-10-27 02:55:07', '0000-00-00', 1, '2014-10-27 02:55:12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_retur_transactions`
--

CREATE TABLE `as_retur_transactions` (
  `trxID` int(11) NOT NULL,
  `invoiceReturID` varchar(16) NOT NULL,
  `supplierID` varchar(10) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` text NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_retur_transactions`
--

INSERT INTO `as_retur_transactions` (`trxID`, `invoiceReturID`, `supplierID`, `trxFullName`, `trxAddress`, `trxPhone`, `trxDate`, `trxTotal`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'YCOG141026103632', '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '2014-10-26', 46380, '2014-10-26 10:51:39', 1, '2014-10-26 10:52:05', 1),
(2, 'HKGR141026105599', '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '2014-10-27', 68670, '2014-10-27 02:55:52', 1, '2014-10-27 02:57:12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_sales_detail_transactions`
--

CREATE TABLE `as_sales_detail_transactions` (
  `detailID` int(11) NOT NULL,
  `invoiceID` varchar(16) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `detailModal` int(11) NOT NULL,
  `detailSubtotalModal` int(11) NOT NULL,
  `detailPrice` int(11) NOT NULL,
  `detailQty` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `discPercent` int(11) NOT NULL,
  `discTotal` int(11) NOT NULL,
  `detailSubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `date_sale` date NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_sales_detail_transactions`
--

INSERT INTO `as_sales_detail_transactions` (`detailID`, `invoiceID`, `productBarcode`, `detailModal`, `detailSubtotalModal`, `detailPrice`, `detailQty`, `note`, `discPercent`, `discTotal`, `detailSubtotal`, `createdDate`, `date_sale`, `createdUserId`, `modifiedDate`, `modifiedUserID`) VALUES
(12, 'YSSB141025074334', '3212758009345', 0, 0, 5500, 5, '', 0, 0, 27500, '2014-10-25 19:53:19', '2018-01-01', 1, '2014-10-25 19:53:43', 1),
(13, 'YSSB141025074334', '2140912123601', 11990, 11990, 12990, 1, '', 0, 0, 12990, '2014-10-25 19:53:21', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(14, 'YSSB141025074334', '4339019760411', 0, 0, 1200, 2, '', 0, 0, 2400, '2014-10-25 19:53:24', '0000-00-00', 1, '2014-10-25 19:53:31', 1),
(15, 'FTMP141025080798', '2140902110832', 3400, 3400, 3900, 1, '', 0, 0, 3900, '2014-10-25 20:17:15', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(17, 'DEYT141026103676', '2140902110832', 3400, 3400, 3900, 1, '', 0, 0, 3900, '2014-10-26 11:30:03', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(314, ' PJ-856109470947', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-04 21:51:41', '2018-04-04', 1, '0000-00-00 00:00:00', 0),
(327, ' PJ-284679363539', 'ASUSROX0987578', 0, 0, 0, 3, '', 0, 0, 15000, '2019-04-04 23:01:15', '2019-04-04', 1, '0000-00-00 00:00:00', 0),
(328, ' PJ-008367718605', 'YMB1234567890', 0, 0, 0, 3, '', 0, 0, 9000000, '2019-04-04 23:20:54', '2019-04-04', 1, '0000-00-00 00:00:00', 0),
(329, ' PJ-760979298337', 'YMB1234567890', 0, 0, 0, 3, '', 0, 0, 9000000, '2019-04-04 23:42:48', '2019-04-04', 1, '0000-00-00 00:00:00', 0),
(330, ' PJ-760979298337', 'BBBKMOPJ57687', 0, 0, 0, 3, '', 0, 0, 10500000, '2019-04-04 23:42:51', '2017-01-01', 1, '0000-00-00 00:00:00', 0),
(331, ' PJ-853147852820', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 00:16:35', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(332, ' PJ-077235630629', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 08:27:42', '2019-04-05', 54, '0000-00-00 00:00:00', 0),
(333, ' PJ-077235630629', 'YMB1234567890', 0, 0, 0, 1, '', 0, 0, 3000000, '2019-04-05 08:27:48', '2019-04-05', 54, '0000-00-00 00:00:00', 0),
(334, ' PJ-077235630629', 'BBBKMOPJ57687', 0, 0, 0, 1, '', 0, 0, 3500000, '2019-04-05 08:27:52', '2019-04-05', 54, '0000-00-00 00:00:00', 0),
(335, ' PJ-231168102037', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 08:28:33', '2019-04-05', 54, '0000-00-00 00:00:00', 0),
(336, ' PJ-541402532850', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 08:29:18', '2019-04-05', 54, '0000-00-00 00:00:00', 0),
(337, ' PJ-651654969678', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 08:45:01', '2019-04-05', 54, '0000-00-00 00:00:00', 0),
(338, ' PJ-816656198422', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 09:33:14', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(339, ' PJ-816656198422', 'YMB1234567890', 0, 0, 0, 1, '', 0, 0, 3000000, '2019-04-05 09:33:18', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(340, ' PJ-816656198422', 'BBBKMOPJ57687', 0, 0, 0, 1, '', 0, 0, 3500000, '2019-04-05 09:33:22', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(341, ' PJ-673955543198', 'BBBKMOPJ57687', 0, 0, 0, 1, '', 0, 0, 3500000, '2019-04-05 10:19:34', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(342, ' PJ-363332418726', 'BBBKMOPJ57687', 0, 0, 0, 1, '', 0, 0, 3500000, '2019-04-05 10:20:27', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(344, '  PJ-67395554319', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 10:25:15', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(345, ' PJ-971923297398', 'ASUSROX0987578', 0, 0, 0, 4, '', 0, 0, 20000, '2019-04-05 10:25:22', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(346, ' PJ-971923297398', 'BBBKMOPJ57687', 0, 0, 0, 5, '', 0, 0, 17500000, '2019-04-05 10:25:25', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(347, ' PJ-987058325862', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 10:32:56', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(348, ' PJ-429295911325', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 10:33:48', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(349, ' PJ-212798168583', 'YMB1234567890', 0, 0, 0, 1, '', 0, 0, 3000000, '2019-04-05 10:42:39', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(350, ' PJ-303854706656', 'BBBKMOPJ57687', 0, 0, 0, 1, '', 0, 0, 3500000, '2019-04-05 10:43:06', '2019-04-05', 1, '0000-00-00 00:00:00', 0),
(351, ' PJ-027727979444', 'ASUSROX0987578', 0, 0, 0, 1, '', 0, 0, 5000, '2019-04-05 10:49:22', '2019-04-05', 1, '0000-00-00 00:00:00', 0);

--
-- Trigger `as_sales_detail_transactions`
--
DELIMITER $$
CREATE TRIGGER `sale` AFTER INSERT ON `as_sales_detail_transactions` FOR EACH ROW BEGIN
UPDATE as_products
SET productStock = productStock - NEW.detailQty
WHERE
productBarcode = NEW.productBarcode;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_sales_transactions`
--

CREATE TABLE `as_sales_transactions` (
  `trxID` int(11) NOT NULL,
  `memberID` varchar(10) NOT NULL,
  `invoiceID` varchar(16) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` varchar(150) NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxTotalModal` int(11) NOT NULL,
  `trxSubtotal` int(11) NOT NULL,
  `trxDiscount` int(11) NOT NULL,
  `trxPPN` int(11) NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `trxPay` int(11) NOT NULL,
  `trxChange` int(11) NOT NULL,
  `trxStatus` char(1) NOT NULL,
  `trxTerminDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_sales_transactions`
--

INSERT INTO `as_sales_transactions` (`trxID`, `memberID`, `invoiceID`, `trxFullName`, `trxAddress`, `trxPhone`, `trxDate`, `trxTotalModal`, `trxSubtotal`, `trxDiscount`, `trxPPN`, `trxTotal`, `trxPay`, `trxChange`, `trxStatus`, `trxTerminDate`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(2, '', 'YSSB141025074334', '', '', '', '2014-10-25', 0, 42890, 0, 4289, 47179, 50000, 2821, '1', '0000-00-00', '2014-10-25 19:59:58', 1, '2014-10-25 20:02:52', 1),
(127, '', 'PJ-257901348125', '', '', '', '2019-04-03', 0, 3500000, 30, 1050000, 2450000, 2450000, 550000, '', '0000-00-00', '2019-04-03 09:23:29', 1, '0000-00-00 00:00:00', 0),
(128, '', 'PJ-257901348125', '', '', '', '2019-04-03', 0, 6500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-03 09:34:08', 1, '0000-00-00 00:00:00', 0),
(129, '', 'PJ-257901348125', '', '', '', '2019-04-03', 0, 9500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-03 09:43:55', 1, '0000-00-00 00:00:00', 0),
(130, '', 'PJ-747967387240', '', '', '', '2019-04-04', 0, 3000000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 09:54:29', 1, '0000-00-00 00:00:00', 0),
(131, '', ' PJ-890048673220', '', '', '', '2019-04-04', 0, 16000000, 80, 12800000, 3200000, 3200000, 0, '', '0000-00-00', '2019-04-04 09:59:02', 1, '0000-00-00 00:00:00', 0),
(132, '', ' PJ-165540947820', '', '', '', '2019-04-04', 0, 14000000, 4, 560000, 13440000, 13440000, 26560000, '', '0000-00-00', '2019-04-04 10:01:06', 1, '0000-00-00 00:00:00', 0),
(133, '', ' PJ-823293550223', '', '', '', '2019-04-04', 0, 20000, 5, 1000, 19000, 19000, -19000, '', '0000-00-00', '2019-04-04 10:03:51', 1, '0000-00-00 00:00:00', 0),
(134, '', 'PJ-595701408854', '', '', '', '2019-04-04', 0, 3500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 10:05:20', 1, '0000-00-00 00:00:00', 0),
(135, '', ' PJ-823293550223', '', '', '', '2019-04-04', 0, 20000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 10:08:31', 1, '0000-00-00 00:00:00', 0),
(136, '', ' PJ-916990442393', '', '', '', '2019-04-04', 0, 30500000, 70, 21350000, 9150000, 9150000, 81961111, '', '0000-00-00', '2019-04-04 10:09:04', 1, '0000-00-00 00:00:00', 0),
(137, '', 'PJ-780366080666', '', '', '', '2019-04-04', 0, 3500000, 10, 350000, 3150000, 3150000, 50000, '', '0000-00-00', '2019-04-04 10:09:52', 1, '0000-00-00 00:00:00', 0),
(138, '', ' PJ-441080731859', '', '', '', '2019-04-04', 0, 21000000, 0, 0, 21000000, 21000000, 9000000, '', '0000-00-00', '2019-04-04 10:13:36', 1, '0000-00-00 00:00:00', 0),
(139, '', ' PJ-769748572404', '', '', '', '2019-04-04', 0, 19500000, 5, 975000, 18525000, 18525000, 1475000, '', '0000-00-00', '2019-04-04 10:16:10', 1, '0000-00-00 00:00:00', 0),
(140, '', ' PJ-547869855428', '', '', '', '2019-04-04', 0, 32500000, 20, 6500000, 26000000, 26000000, -1000000, '', '0000-00-00', '2019-04-04 19:37:13', 1, '0000-00-00 00:00:00', 0),
(141, '', ' PJ-607218144299', '', '', '', '2019-04-04', 0, 26000000, 5, 1300000, 24700000, 24700000, 9300000, '', '0000-00-00', '2019-04-04 19:38:37', 54, '0000-00-00 00:00:00', 0),
(142, '', 'PJ-795792277171', '', '', '', '2019-04-04', 0, 3000000, 90, 2700000, 300000, 300000, 2700000, '', '0000-00-00', '2019-04-04 20:02:41', 1, '0000-00-00 00:00:00', 0),
(143, '', ' PJ-044545931061', '', '', '', '2019-04-04', 0, 9000000, 5, 450000, 8550000, 8550000, 450000, '', '0000-00-00', '2019-04-04 20:10:35', 1, '0000-00-00 00:00:00', 0),
(144, '', ' PJ-836429747232', '', '', '', '2019-04-04', 0, 530000000, 90, 477000000, 53000000, 53000000, 0, '', '0000-00-00', '2019-04-04 20:14:07', 1, '0000-00-00 00:00:00', 0),
(145, '', ' PJ-410912181156', '', '', '', '2019-04-04', 0, 115500000, 30, 34650000, 80850000, 80850000, 9150000, '', '0000-00-00', '2019-04-04 20:20:09', 1, '0000-00-00 00:00:00', 0),
(146, '', ' PJ-410912181156', '', '', '', '2019-04-04', 0, 115500000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 20:42:11', 1, '0000-00-00 00:00:00', 0),
(147, '', 'PJ-848933896972', '', '', '', '2019-04-04', 0, 3000000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 21:36:44', 1, '0000-00-00 00:00:00', 0),
(148, '', 'PJ-303860811398', '', '', '', '2019-04-04', 0, 53000000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 21:38:49', 1, '0000-00-00 00:00:00', 0),
(149, '', 'PJ-309610963326', '', '', '', '2019-04-04', 0, 3500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 21:39:08', 1, '0000-00-00 00:00:00', 0),
(150, '', 'PJ-613086263005', '', '', '', '2019-04-04', 0, 53000000, 5, 2650000, 50350000, 50350000, -40350000, '', '0000-00-00', '2019-04-04 21:41:35', 1, '0000-00-00 00:00:00', 0),
(151, '', ' PJ-976948428288', '', '', '', '2019-04-04', 0, 7000000, 5, 350000, 6650000, 6650000, -650000, '', '0000-00-00', '2019-04-04 21:49:52', 1, '0000-00-00 00:00:00', 0),
(152, '', 'PJ-856109470947', '', '', '', '2019-04-04', 0, 5000, 80, 4000, 1000, 1000, 7000, '', '0000-00-00', '2019-04-04 21:51:54', 1, '0000-00-00 00:00:00', 0),
(153, '', 'PJ-714084840751', '', '', '', '2019-04-04', 0, 3505000, 90, 3154500, 350500, 350500, 49500, '', '0000-00-00', '2019-04-04 21:53:03', 1, '0000-00-00 00:00:00', 0),
(154, '', ' PJ-738199550567', '', '', '', '2019-04-04', 0, 40000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 21:59:31', 1, '0000-00-00 00:00:00', 0),
(155, '', 'PJ-557585497432', '', '', '', '2019-04-04', 0, 3500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 22:00:54', 1, '0000-00-00 00:00:00', 0),
(156, '', 'PJ-138447933286', '', '', '', '2019-04-04', 0, 5000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-04 22:14:05', 1, '0000-00-00 00:00:00', 0),
(157, '', 'PJ-392844588096', '', '', '', '2019-04-04', 0, 5000, 0, 0, 5000, 5000, 2000, '', '0000-00-00', '2019-04-04 22:14:37', 1, '0000-00-00 00:00:00', 0),
(158, '', 'PJ-607726116845', '', '', '', '2019-04-04', 0, 3005000, 8, 240400, 2764600, 2764600, 235400, '', '0000-00-00', '2019-04-04 22:15:34', 1, '0000-00-00 00:00:00', 0),
(159, '', ' PJ-502373948012', '', '', '', '2019-04-04', 0, 10000, 2, 200, 9800, 9800, -800, '', '0000-00-00', '2019-04-04 22:18:27', 54, '0000-00-00 00:00:00', 0),
(160, '', ' PJ-284679363539', '', '', '', '2019-04-04', 0, 15000, 10, 1500, 13500, 13500, 6500, '', '0000-00-00', '2019-04-04 23:01:26', 1, '0000-00-00 00:00:00', 0),
(161, '', ' PJ-008367718605', '', '', '', '2019-04-04', 0, 9000000, 80, 7200000, 1800000, 1800000, 199999, '', '0000-00-00', '2019-04-04 23:21:07', 1, '0000-00-00 00:00:00', 0),
(162, '', ' PJ-760979298337', '', '', '', '2019-04-04', 0, 19500000, 90, 17550000, 1950000, 1950000, 50000, '', '0000-00-00', '2019-04-04 23:43:09', 1, '0000-00-00 00:00:00', 0),
(163, '', 'PJ-853147852820', '', '', '', '2019-04-05', 0, 5000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-05 00:16:37', 1, '0000-00-00 00:00:00', 0),
(164, '', 'PJ-077235630629', '', '', '', '2019-04-05', 0, 6505000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-05 08:27:55', 54, '0000-00-00 00:00:00', 0),
(165, '', 'PJ-231168102037', '', '', '', '2019-04-05', 0, 5000, 10, 500, 4500, 4500, -500, '', '0000-00-00', '2019-04-05 08:28:40', 54, '0000-00-00 00:00:00', 0),
(166, '', 'PJ-541402532850', '', '', '', '2019-04-05', 0, 5000, 90, 4500, 500, 500, 400, '', '0000-00-00', '2019-04-05 08:29:26', 54, '0000-00-00 00:00:00', 0),
(167, '', 'PJ-651654969678', '', '', '', '2019-04-05', 0, 5000, 2, 100, 4900, 4900, -1900, '', '0000-00-00', '2019-04-05 08:45:09', 54, '0000-00-00 00:00:00', 0),
(168, '', 'PJ-816656198422', '', '', '', '2019-04-05', 0, 6505000, 3, 195150, 6309850, 6309850, 690150, '', '0000-00-00', '2019-04-05 09:33:38', 1, '0000-00-00 00:00:00', 0),
(169, '', 'PJ-673955543198', '', '', '', '2019-04-05', 0, 3500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-05 10:19:36', 1, '0000-00-00 00:00:00', 0),
(170, '', 'PJ-363332418726', '', '', '', '2019-04-05', 0, 3500000, 0, 0, 0, 0, 0, '', '0000-00-00', '2019-04-05 10:20:29', 1, '0000-00-00 00:00:00', 0),
(171, '', ' PJ-971923297398', '', '', '', '2019-04-05', 0, 17520000, 80, 14016000, 3504000, 3504000, 4496000, '', '0000-00-00', '2019-04-05 10:26:34', 1, '0000-00-00 00:00:00', 0),
(172, '', ' PJ-971923297398', '', '', '', '2019-04-05', 0, 17520000, 80, 14016000, 3504000, 3504000, 496000, '', '0000-00-00', '2019-04-05 10:31:42', 1, '0000-00-00 00:00:00', 0),
(173, '', 'PJ-987058325862', '', '', '', '2019-04-05', 0, 5000, 10, 500, 4500, 4500, 0, '', '0000-00-00', '2019-04-05 10:33:08', 1, '0000-00-00 00:00:00', 0),
(174, '', ' PJ-429295911325', '', '', '', '2019-04-05', 0, 10000, 20, 2000, 8000, 8000, 1000, '', '0000-00-00', '2019-04-05 10:33:59', 1, '0000-00-00 00:00:00', 0),
(175, '', ' PJ-429295911325', '', '', '', '2019-04-05', 0, 5000, 10, 500, 4500, 4500, -2500, '', '0000-00-00', '2019-04-05 10:42:21', 1, '0000-00-00 00:00:00', 0),
(176, '', ' PJ-212798168583', '', '', '', '2019-04-05', 0, 3000000, 60, 1800000, 1200000, 1200000, 0, '', '0000-00-00', '2019-04-05 10:42:53', 1, '0000-00-00 00:00:00', 0),
(177, '', 'PJ-303854706656', '', '', '', '2019-04-05', 0, 3500000, 90, 3150000, 350000, 350000, -10000, '', '0000-00-00', '2019-04-05 10:43:15', 1, '0000-00-00 00:00:00', 0),
(178, '', 'PJ-027727979444', '', '', '', '2019-04-05', 0, 5000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-05 10:49:27', 1, '0000-00-00 00:00:00', 0),
(179, '', ' PJ-027727979444', '', '', '', '2019-04-05', 0, 5000, 10, 0, 0, 0, 0, '', '0000-00-00', '2019-04-05 10:49:55', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_stock_opname`
--

CREATE TABLE `as_stock_opname` (
  `soID` int(11) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `soDate` date NOT NULL,
  `productStock` int(11) NOT NULL,
  `realStock` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `qty` int(11) NOT NULL,
  `soDescription` varchar(100) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_stock_opname`
--

INSERT INTO `as_stock_opname` (`soID`, `productBarcode`, `soDate`, `productStock`, `realStock`, `status`, `qty`, `soDescription`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '6527036212518', '2014-10-29', 45, 43, '2', 2, 'Rusak', '2014-10-29 15:57:41', 1, '0000-00-00 00:00:00', 0),
(2, '3288305105689', '2014-10-29', 54, 53, '2', 1, 'Hilang', '2014-10-29 16:11:49', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_suppliers`
--

CREATE TABLE `as_suppliers` (
  `supplierID` int(11) NOT NULL,
  `supplierCode` char(4) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `supplierAddress` text NOT NULL,
  `supplierPhone` varchar(20) NOT NULL,
  `supplierFax` varchar(20) NOT NULL,
  `supplierContactPerson` varchar(100) NOT NULL,
  `supplierCPHp` varchar(20) NOT NULL,
  `supplierStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_suppliers`
--

INSERT INTO `as_suppliers` (`supplierID`, `supplierCode`, `supplierName`, `supplierAddress`, `supplierPhone`, `supplierFax`, `supplierContactPerson`, `supplierCPHp`, `supplierStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(7, '0001', 'DELTA KOMPUTER', 'Jl.Mayor Ruslan', '0987658767xxxxx', '09887678xxxx', 'Pak ', '09878979xxxx', 'Y', '2019-03-19 09:37:47', 9, '0000-00-00 00:00:00', 0),
(8, '0002', 'DELTA LEKTOP', 'jalan.LEMBAYUNG', '08986778xxx', '08907896xxxx', 'pak PAK', '098658767xxx', 'Y', '2019-03-19 09:38:32', 9, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_users`
--

CREATE TABLE `as_users` (
  `userID` int(11) NOT NULL,
  `userNIP` char(4) NOT NULL,
  `userFullName` varchar(100) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userLevel` int(11) NOT NULL,
  `userBlocked` char(1) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_users`
--

INSERT INTO `as_users` (`userID`, `userNIP`, `userFullName`, `userPhone`, `userLevel`, `userBlocked`, `userName`, `userPassword`, `gambar`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '0001', 'IQBAL ALQODRI', '0856xxxxx', 1, 'N', 'iqbal', 'admin', 'RAJA0PasPhotoX1-PP4x6x4X1-[4x6]X2-[3x4]X6-[2x3]X6-.jpg', '2014-09-23 12:20:29', 0, '2019-04-03 13:43:51', 1),
(54, '0004', 'ARIS FADILAH TANJUNG', '09809809xx', 2, 'n', 'aris', 'aris', 'IMG-20180605-WA0132.jpg', '2019-03-22 21:52:14', 9, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_accounts`
--
ALTER TABLE `as_accounts`
  ADD PRIMARY KEY (`accountID`);

--
-- Indeks untuk tabel `as_barcodes`
--
ALTER TABLE `as_barcodes`
  ADD PRIMARY KEY (`barcodeID`);

--
-- Indeks untuk tabel `as_brands`
--
ALTER TABLE `as_brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indeks untuk tabel `as_buy_detail_transactions`
--
ALTER TABLE `as_buy_detail_transactions`
  ADD PRIMARY KEY (`detailID`);

--
-- Indeks untuk tabel `as_buy_transactions`
--
ALTER TABLE `as_buy_transactions`
  ADD PRIMARY KEY (`trxID`);

--
-- Indeks untuk tabel `as_categories`
--
ALTER TABLE `as_categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indeks untuk tabel `as_customers`
--
ALTER TABLE `as_customers`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indeks untuk tabel `as_debts`
--
ALTER TABLE `as_debts`
  ADD PRIMARY KEY (`debtID`);

--
-- Indeks untuk tabel `as_debts_payment`
--
ALTER TABLE `as_debts_payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indeks untuk tabel `as_funds`
--
ALTER TABLE `as_funds`
  ADD PRIMARY KEY (`fundID`);

--
-- Indeks untuk tabel `as_identity`
--
ALTER TABLE `as_identity`
  ADD PRIMARY KEY (`identityID`);

--
-- Indeks untuk tabel `as_members`
--
ALTER TABLE `as_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indeks untuk tabel `as_products`
--
ALTER TABLE `as_products`
  ADD PRIMARY KEY (`productID`);

--
-- Indeks untuk tabel `as_receivables`
--
ALTER TABLE `as_receivables`
  ADD PRIMARY KEY (`receivableID`);

--
-- Indeks untuk tabel `as_receivables_payment`
--
ALTER TABLE `as_receivables_payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indeks untuk tabel `as_retur_detail_transactions`
--
ALTER TABLE `as_retur_detail_transactions`
  ADD PRIMARY KEY (`detailID`);

--
-- Indeks untuk tabel `as_retur_transactions`
--
ALTER TABLE `as_retur_transactions`
  ADD PRIMARY KEY (`trxID`);

--
-- Indeks untuk tabel `as_sales_detail_transactions`
--
ALTER TABLE `as_sales_detail_transactions`
  ADD PRIMARY KEY (`detailID`);

--
-- Indeks untuk tabel `as_sales_transactions`
--
ALTER TABLE `as_sales_transactions`
  ADD PRIMARY KEY (`trxID`);

--
-- Indeks untuk tabel `as_stock_opname`
--
ALTER TABLE `as_stock_opname`
  ADD PRIMARY KEY (`soID`);

--
-- Indeks untuk tabel `as_suppliers`
--
ALTER TABLE `as_suppliers`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indeks untuk tabel `as_users`
--
ALTER TABLE `as_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_accounts`
--
ALTER TABLE `as_accounts`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `as_barcodes`
--
ALTER TABLE `as_barcodes`
  MODIFY `barcodeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `as_brands`
--
ALTER TABLE `as_brands`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `as_buy_detail_transactions`
--
ALTER TABLE `as_buy_detail_transactions`
  MODIFY `detailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `as_buy_transactions`
--
ALTER TABLE `as_buy_transactions`
  MODIFY `trxID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_categories`
--
ALTER TABLE `as_categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `as_customers`
--
ALTER TABLE `as_customers`
  MODIFY `kode_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `as_debts`
--
ALTER TABLE `as_debts`
  MODIFY `debtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `as_debts_payment`
--
ALTER TABLE `as_debts_payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `as_funds`
--
ALTER TABLE `as_funds`
  MODIFY `fundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `as_identity`
--
ALTER TABLE `as_identity`
  MODIFY `identityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_members`
--
ALTER TABLE `as_members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `as_products`
--
ALTER TABLE `as_products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `as_receivables`
--
ALTER TABLE `as_receivables`
  MODIFY `receivableID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `as_receivables_payment`
--
ALTER TABLE `as_receivables_payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `as_retur_detail_transactions`
--
ALTER TABLE `as_retur_detail_transactions`
  MODIFY `detailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `as_retur_transactions`
--
ALTER TABLE `as_retur_transactions`
  MODIFY `trxID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `as_sales_detail_transactions`
--
ALTER TABLE `as_sales_detail_transactions`
  MODIFY `detailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT untuk tabel `as_sales_transactions`
--
ALTER TABLE `as_sales_transactions`
  MODIFY `trxID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT untuk tabel `as_stock_opname`
--
ALTER TABLE `as_stock_opname`
  MODIFY `soID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `as_suppliers`
--
ALTER TABLE `as_suppliers`
  MODIFY `supplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `as_users`
--
ALTER TABLE `as_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
