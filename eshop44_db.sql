-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2022 at 01:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop44_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('admin','manager','executive') COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`, `mobile`, `type`, `status`) VALUES
(1, 'Mr. Admin', 'admin@mail.com', '$2y$10$DDfNKKBm/0RXdjAtXBjEE.au40DMD/thg8bMl5eb3Oqw9jXKMlZ4u', NULL, NULL, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `slug`, `status`) VALUES
(2, 'HP', 'hp', 1),
(3, 'DELL', 'dell', 1),
(4, 'APPLE', 'apple', 1),
(5, 'SAMSUNG', 'samsung', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`) VALUES
(4, 'Mobile', 'mobile', 1),
(5, 'Laptop', 'laptop', 1),
(9, 'Desktop', 'desktop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_price` float DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `feature_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `sub_category_id`, `brand_id`, `product_name`, `slug`, `short_description`, `description`, `price`, `discount`, `discount_price`, `quantity`, `feature_image`, `view_count`, `is_featured`, `status`) VALUES
(3, 9, 10, 2, 'Intel 10th Gen Core i3-10100 Gaming PC', 'intel-10th-gen-core-i3-10100-gaming-pc', 'Model: Intel 10th Gen Core i3-10100 Gaming PC\r\nMSI H510M PRO-E Intel 10th Gen &amp; 11th Gen Mirco-ATX Motherboard\r\nIntel i3-10100 10th Gen Processor\r\n8GB 2666MHz DDR4 RAM +1TB HDD\r\nGIGABYTE GT 730 2GB DDR3 PCI EXPRESS Graphics Card', '&lt;section class=&quot;specification-tab m-tb-10&quot; id=&quot;specification&quot; style=&quot;margin: 0px 0px 20px; padding: 20px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px; color: rgb(0, 0, 0); font-family: &amp;quot;Trebuchet MS&amp;quot;, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;section-head&quot; style=&quot;margin: 0px; padding: 0px 0px 20px;&quot;&gt;&lt;h2 style=&quot;margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;&quot;&gt;Specification&lt;/h2&gt;&lt;/div&gt;&lt;table class=&quot;data-table flex-table&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;margin: -20px 0px 0px; padding: 0px; display: flex; flex-direction: column; width: 920px;&quot;&gt;&lt;colgroup style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;col class=&quot;name&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;col class=&quot;value&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/colgroup&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Basic Information&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex; background: rgb(250, 251, 252);&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Processor&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Intel Core i3-10100 10th Gen Processor&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Motherboard&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;MSI H510M PRO-E Intel 10th Gen and 11th Gen Mirco-ATX Motherboard&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;RAM&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Team Elite Plus 8GB 2666MHz DDR4 U-DIMM Desktop RAM&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Graphics Card&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;GIGABYTE GeForce GT 730 2GB DDR3 PCI EXPRESS Graphics Card&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Storage&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Toshiba P300 1TB Desktop PC Internal Hard Drive&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Casing&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;MaxGreen G561-F Blue Window ATX Casing&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Warranty Information&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Warranty&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;03 years limited warranty&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/section&gt;&lt;section class=&quot;description bg-white m-tb-15&quot; id=&quot;description&quot; style=&quot;margin: 0px 0px 20px; padding: 20px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px; color: rgb(0, 0, 0); font-family: &amp;quot;Trebuchet MS&amp;quot;, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;section-head&quot; style=&quot;margin: 0px; padding: 0px 0px 20px;&quot;&gt;&lt;h2 style=&quot;margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;&quot;&gt;Description&lt;/h2&gt;&lt;/div&gt;&lt;div class=&quot;full-description&quot; itemprop=&quot;description&quot; style=&quot;margin: 0px; padding: 0px; line-height: 24px;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(1, 19, 45); line-height: 26px;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;&quot;&gt;Intel 10th Gen Core i3-10100 Gaming PC&lt;/h2&gt;&lt;ul style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 10px 16px;&quot;&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;Intel Core i3-10100 10th Gen Processor&lt;/li&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;&lt;div style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Segoe UI&amp;quot;, system-ui, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, sans-serif; font-size: 14px;&quot;&gt;MSI H510M PRO-E Intel 10th Gen and 11th Gen Mirco-ATX Motherboard&lt;/div&gt;&lt;/li&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Segoe UI&amp;quot;, system-ui, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, sans-serif; font-size: 14px;&quot;&gt;Team Elite Plus 8GB 2666MHz DDR4 U-DIMM Desktop RAM&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;Toshiba P300 1TB Desktop PC Internal Hard Drive&lt;br style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/li&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;&lt;div style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Segoe UI&amp;quot;, system-ui, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, sans-serif; font-size: 14px;&quot;&gt;MaxGreen G561-F Blue Window ATX Casing&lt;br style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/div&gt;&lt;/li&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;&lt;div style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Segoe UI&amp;quot;, system-ui, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, sans-serif; font-size: 14px;&quot;&gt;GIGABYTE GeForce GT 730 2GB DDR3 PCI EXPRESS Graphics Card&lt;/div&gt;&lt;/li&gt;&lt;li style=&quot;margin: 0px 0px 5px; padding: 0px;&quot;&gt;03 years limited warranty&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;&lt;/section&gt;', 33900, NULL, NULL, 10, 'uploads/products/1646998012-622b31fc1097f.jpeg', NULL, 1, 1),
(4, 5, 6, 2, 'HP 15s-du1088TU Intel Pentium N5030 15.6 inch FHD Laptop with Win 10', 'hp-15s-du1088tu-intel-pentium-n5030-laptop', 'MPN: 2R0E0PA\r\nModel: 15s-du1088TU\r\nIntel Pentium Silver 5030 1.10 To 3.10 GHz Processor\r\n4GB DDR4 RAM + 1TB HDD\r\n15.6 inch Full HD 1920x1080 Display\r\nWindows 10 Home', '&lt;section class=&quot;specification-tab m-tb-10&quot; id=&quot;specification&quot; style=&quot;margin: 0px 0px 20px; padding: 20px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px; color: rgb(0, 0, 0); font-family: &amp;quot;Trebuchet MS&amp;quot;, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;section-head&quot; style=&quot;margin: 0px; padding: 0px 0px 20px;&quot;&gt;&lt;h2 style=&quot;margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;&quot;&gt;Specification&lt;/h2&gt;&lt;/div&gt;&lt;table class=&quot;data-table flex-table&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;margin: -20px 0px 0px; padding: 0px; display: flex; flex-direction: column; width: 920px;&quot;&gt;&lt;colgroup style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;col class=&quot;name&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;col class=&quot;value&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/colgroup&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Basic Information&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Processor&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Intel Pentium Silver 5030 (1.10 To 3.10 GHz 4MB Cache) Processor&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Display&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;15.6&quot; diagonal FHD backlit (1920 x 1080) Display,&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Memory&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;4GB DDR4 RAM&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Storage&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;1TB HDD&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Graphics&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Intel UHD Graphics 605&lt;br style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Operating System&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Windows 10 Home&lt;br style=&quot;margin: 0px; padding: 0px;&quot;&gt;Microsoft Office Home &amp;amp; Student&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Audio&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;2.0 headphone/microphone combo&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Office&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Microsoft Office Home &amp;amp; Student&lt;br style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Input Devices&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Keyboard&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Chicklit Keyboard&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Optical Drive&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;NO&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;WebCam&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;720p HD camera&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Card Reader&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;SD card reader&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Network &amp;amp; Wireless Connectivity&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Wi-Fi&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Realtek RTL8822CE 802.11a/b/g/n/ac (2x2) Wi-Fi&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Bluetooth&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Bluetooth 5&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Ports, Connectors &amp;amp; Slots&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Audio Jack Combo&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;2.0 headphone/microphone combo&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Physical Specification&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Color(s)&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;Silver&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;thead style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;heading-row&quot; colspan=&quot;3&quot; style=&quot;margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: rgba(55, 73, 187, 0.05); color: rgb(55, 73, 187); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;&quot;&gt;Warranty&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px; display: flex;&quot;&gt;&lt;td class=&quot;name&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);&quot;&gt;Manufacturing Warranty&lt;/td&gt;&lt;td class=&quot;value&quot; style=&quot;margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);&quot;&gt;01 year International Limited Warranty (Terms &amp;amp; condition Apply As Per HP)&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/section&gt;&lt;section class=&quot;description bg-white m-tb-15&quot; id=&quot;description&quot; style=&quot;margin: 0px 0px 20px; padding: 20px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px; color: rgb(0, 0, 0); font-family: &amp;quot;Trebuchet MS&amp;quot;, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;section-head&quot; style=&quot;margin: 0px; padding: 0px 0px 20px;&quot;&gt;&lt;h2 style=&quot;margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;&quot;&gt;Description&lt;/h2&gt;&lt;/div&gt;&lt;div class=&quot;full-description&quot; itemprop=&quot;description&quot; style=&quot;margin: 0px; padding: 0px; line-height: 24px;&quot;&gt;&lt;h2 style=&quot;margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px; text-align: justify;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px;&quot;&gt;HP 15s-du1088TU Intel Pentium N5030 15.6 inch FHD Laptop with Win 10&lt;/span&gt;&lt;br style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;/h2&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(1, 19, 45); line-height: 26px; text-align: justify;&quot;&gt;HP P15s-du1088TU Laptop comes with Intel Pentium Silver 5030 processor, 4GB DDR4 RAM, 1TB HDD, 15.6&quot; diagonal FHD backlit (1920 x 1080) Display, Intel UHD Graphics and Windows 10 Home. This laptop featured with Li-ion battery, Chicklit Keyboard, 720p HD Web camera with integrated dual array digital microphones. Here, Realtek RTL8822CE 802.11a/b/g/n/ac (2x2) Wi-Fi and Bluetooth 5 wireless and networking connectivity are also available. This laptop also has SuperSpeed USB Type-A signaling rate AC smart pin, HDMI x 1, 2.0 headphone/microphone combo ports and connectivity. This latest HP 15s-du1088TU Laptop has 01 year International Limited Warranty (Terms &amp;amp; condition Apply As Per HP).&lt;/p&gt;&lt;/div&gt;&lt;/section&gt;', 40000, 5, 38000, 10, 'uploads/products/1646999452-622b379c9b17b.jpeg', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_image`) VALUES
(7, 3, '1646997212-622b2edc4c4dd.jpeg'),
(8, 4, '15s-du1088tu-01-500x500.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `product_id`, `title`, `sub_title`, `price`, `image`, `status`) VALUES
(1, 4, 'HP 15s-du1088TU Intel Pentium N5030 15.6 inch FHD Laptop with Win 10', '10 OFF', 40000, 'uploads/slider/1647080969-622c7609c2b67.png', 1),
(2, 3, 'Intel 10th Gen Core i3-10100 Gaming PC', '10 OFF', 33900, 'uploads/slider/1647596657-623454716c983.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `slug`, `status`) VALUES
(3, 5, 'Asus Probook4500', 'asus-probook4500', 1),
(6, 5, 'HP PROBOOK600', 'hp-probook600', 1),
(7, 4, 'Samsung Note 10', 'samsung-note-10', 1),
(8, 9, 'Gaming PC', 'gaming-pc', 1),
(9, 9, 'ALL IN ONE PC', 'all-in-one-pc', 1),
(10, 9, 'BRAND PC', 'brand-pc', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorySubCategoryBrandIndex` (`category_id`,`sub_category_id`,`brand_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id_2` (`sub_category_id`),
  ADD KEY `brand_id_2` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productIdInex` (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productIdIndex` (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryIndex` (`category_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
