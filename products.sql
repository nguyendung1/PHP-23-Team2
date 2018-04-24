-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2018 lúc 10:42 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quality` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quality`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 6 32GB Gold', 6990000, 4.50, 'Sản phẩm bán chạy', 'Iphone 6 32GB Gold.jpg', 1, '2018-04-23 02:35:44', '2018-04-23 02:35:44'),
(2, 'Iphone 6S 32GB', 13990000, 4.60, 'comment', 'Iphone 6S 32GB .png', 1, '2018-04-23 02:38:43', '2018-04-23 02:38:43'),
(3, 'Iphone 6S 128GB', 16990000, 4.60, 'no', 'Iphone 6S 128GB.jpg', 1, '2018-04-23 02:40:22', '2018-04-23 02:40:22'),
(4, 'Iphone 6S Plus 32GB', 13990000, 4.30, 'khong', 'Iphone 6S Plus 32GB.jpg', 1, '2018-04-23 02:41:12', '2018-04-23 02:41:12'),
(5, 'Iphone 7 Plus 32GB', 15990000, 4.30, 'no', 'Iphone 7 Plus 32GB.jpg', 1, '2018-04-23 02:41:48', '2018-04-23 02:41:48'),
(6, 'Iphone 7 Plus 128GB', 19990000, 4.70, 'khong', 'Iphone 7 Plus 128GB.jpg', 1, '2018-04-23 02:42:17', '2018-04-23 02:42:17'),
(7, 'Iphone 7', 15990000, 4.50, 'khong', 'Iphone 7.jpg', 1, '2018-04-23 02:43:33', '2018-04-23 02:43:33'),
(8, 'Iphone 8 64GB', 20990000, 4.70, 'khong', 'Iphone 8 64GB.jpg', 1, '2018-04-23 02:44:28', '2018-04-23 02:44:28'),
(9, 'Iphone 8 256GB', 25790000, 4.70, 'khong', 'Iphone 8 256GB.jpg', 1, '2018-04-23 02:46:09', '2018-04-23 02:46:09'),
(10, 'Iphone 8 Plus 256GB', 28790000, 4.80, 'khong', 'Iphone 8 Plus 256GB.jpg', 1, '2018-04-23 02:46:42', '2018-04-23 02:46:42'),
(11, 'Iphone 8 Plus', 23990000, 4.50, 'khong', 'Iphone 8 Plus.jpg', 1, '2018-04-23 02:47:32', '2018-04-23 02:47:32'),
(12, 'Iphone X 64GB', 29990000, 4.80, 'khong', 'Iphone X 64GB.jpg', 1, '2018-04-23 02:48:08', '2018-04-23 02:48:08'),
(13, 'Iphone X 256GB A1', 34790000, 5.00, 'khong', 'Iphone X 256GB A1.jpg', 1, '2018-04-23 02:48:38', '2018-04-23 02:48:38'),
(14, 'Oppo A37', 3290000, 4.00, 'eww', 'Oppo A37.jpg', 2, '2018-04-23 03:05:00', '2018-04-23 03:05:00'),
(15, 'Oppo A71 32GB', 4190000, 3.80, 'ử', 'Oppo A71 32GB.jpg', 2, '2018-04-23 03:07:46', '2018-04-23 03:07:46'),
(16, 'Oppo A71 2018', 3690000, 3.60, 'ưd', 'Oppo A71.jpg', 2, '2018-04-23 03:10:07', '2018-04-23 03:10:07'),
(17, 'Oppo A83', 4990000, 3.60, 'ưe', 'Oppo A83.jpg', 2, '2018-04-23 03:11:16', '2018-04-23 03:11:16'),
(18, 'Oppo F3 Lite', 4490000, 4.60, 'ew', 'Oppo F3 Lite.jpg', 2, '2018-04-23 03:12:58', '2018-04-23 03:12:58'),
(19, 'Oppo F3 Plus', 7490000, 4.50, 'ưewe', 'Oppo F3 Plus.png', 2, '2018-04-23 03:13:53', '2018-04-23 03:13:53'),
(20, 'Oppo F5 6GB Anhava', 8990000, 4.00, 'ư', 'Oppo F5 6GB Anhava.jpg', 2, '2018-04-23 03:15:33', '2018-04-23 03:15:33'),
(21, 'Oppo F5 Red', 6990000, 3.60, '23', 'Oppo F5 Red.jpg', 2, '2018-04-23 03:16:29', '2018-04-23 03:16:29'),
(22, 'Oppo F5 Youth', 6190000, 4.60, 'ưewwe', 'Oppo F5 Youth.jpg', 2, '2018-04-23 03:17:14', '2018-04-23 03:17:14'),
(23, 'Oppo F7', 7990000, 3.60, 'ưewe', 'Oppo F7.jpg', 2, '2018-04-23 03:17:41', '2018-04-23 03:17:41'),
(24, 'Oppo F7-128GB', 9990000, 4.70, 'toancauhoa', 'Oppo F7-128GB.jpg', 2, '2018-04-23 03:19:18', '2018-04-23 03:19:18'),
(25, 'Huawei Nova 2i', 5490000, 4.70, 'no', 'Huawei Nova 2i.jpg', 6, '2018-04-23 03:23:39', '2018-04-23 03:23:39'),
(26, 'Huawei Nova 3e 2', 6999000, 4.70, '23', 'Huawei Nova 3e 2 .jpg', 6, '2018-04-23 03:24:42', '2018-04-23 03:24:42'),
(27, 'Huawei Y3 2017', 2790000, 3.20, 'ưewe', 'Huawei Y3 2017.jpg', 6, '2018-04-23 03:25:34', '2018-04-23 03:25:34'),
(28, 'Huawei Y5 2017', 3490000, 3.40, 'ưewwe', 'Huawei Y5 2017.jpg', 6, '2018-04-23 03:26:46', '2018-04-23 03:26:46'),
(29, 'Huawei Y7 Prime', 3990000, 4.30, '2', 'Huawei Y7 Prime.jpg', 6, '2018-04-23 03:27:34', '2018-04-23 03:27:34'),
(30, 'Huawei Y7 Pro 2018', 3990000, 3.20, 'weqwe', 'Huawei Y7 Pro 2018.jpg', 6, '2018-04-23 03:28:42', '2018-04-23 03:28:42'),
(31, 'Xiaomi Mi A1 32GB', 4990000, 3.90, 'wewe', 'Xiaomi Mi A1 32GB.jpg', 7, '2018-04-23 06:06:32', '2018-04-23 06:06:32'),
(32, 'Xiaomi Mi A1', 3990000, 4.10, 'eqweqw', 'Xiaomi Mi A1.jpg', 7, '2018-04-23 06:07:38', '2018-04-23 06:07:38'),
(33, 'Xiaomi Redmi 4X', 4790000, 4.20, '242424', 'Xiaomi Redmi 4X.jpg', 7, '2018-04-23 06:08:19', '2018-04-23 06:08:19'),
(34, 'Xiaomi Redmi 5 Plus', 4790000, 4.30, '323', 'Xiaomi Redmi 5 Plus.jpg', 7, '2018-04-23 06:08:59', '2018-04-23 06:08:59'),
(35, 'Xiaomi Redmi Note', 4290000, 4.30, 'wewe', 'Xiaomi Redmi Note.jpg', 7, '2018-04-23 06:09:38', '2018-04-23 06:09:38'),
(36, 'Xiaomi Redmi-Note4', 4290000, 3.50, '2323', 'Xiaomi Redmi-Note.jpg', 7, '2018-04-23 06:11:58', '2018-04-23 06:11:58'),
(37, 'Xiaomi Redmi Note 5 Prime', 3690000, 4.50, '3.1', 'Xiaomi Redmi Note 5 Prime.jpg', 7, '2018-04-23 06:16:31', '2018-04-23 06:16:31'),
(38, 'Vivo 1606 Y53', 4490000, 4.40, 'wewe', 'Vivo 1606 Y53.jpg', 5, '2018-04-23 06:20:50', '2018-04-23 06:20:50'),
(39, 'Vivo 1610 Y55S', 4990000, 4.20, 'qweqe', 'Vivo 1610 Y55S.jpg', 5, '2018-04-23 06:21:20', '2018-04-23 06:21:20'),
(40, 'Vivo 1713 V5s', 5990000, 4.20, 'wwe', 'Vivo 1713 V5s.jpg', 5, '2018-04-23 06:21:50', '2018-04-23 06:21:50'),
(41, 'Vivo V7 Plus', 7990000, 4.20, 'qweqwe', 'Vivo V7 Plus.jpg', 5, '2018-04-23 06:22:42', '2018-04-23 06:22:42'),
(42, 'Vivo V7', 6990000, 4.20, 'ewe', 'Vivo V7.jpg', 5, '2018-04-23 06:23:12', '2018-04-23 06:23:12'),
(43, 'Vivo v9 2 1', 7990000, 4.50, 'weq', 'Vivo v9 2 1.jpg', 5, '2018-04-23 06:23:45', '2018-04-23 06:23:45'),
(44, 'Vivo Y69', 5490000, 2.30, 'ewewe', 'Vivo Y69.jpg', 5, '2018-04-23 06:24:49', '2018-04-23 06:24:49'),
(45, 'Vivo Y71', 3390000, 3.40, 'ng', 'Vivo Y71.jpg', 5, '2018-04-23 06:25:41', '2018-04-23 06:25:41'),
(46, 'Samsung  Galaxy S9 Plus 128gGB', 24990000, 4.50, 'we', 'Samsung  Galaxy S9 Plus 128gGB.jpg', 3, '2018-04-23 06:28:07', '2018-04-23 06:28:07'),
(47, 'Samsung Galaxy A8 Plus', 13490000, 4.20, 'wew', 'Samsung Galaxy A8 Plus.jpg', 3, '2018-04-23 06:29:33', '2018-04-23 06:29:33'),
(48, 'Samsung Galaxy A8', 10990000, 0.40, '2323', 'Samsung Galaxy A8.jpg', 3, '2018-04-23 06:30:02', '2018-04-23 06:30:02'),
(49, 'Samsung Galaxy c9 Pro', 9990000, 4.50, 'wew', 'Samsung Galaxy c9 Pro.jpg', 3, '2018-04-23 06:30:49', '2018-04-23 06:30:49'),
(50, 'Samsung Galaxy J2 prime', 2690000, 4.30, 'wewe', 'Samsung Galaxy J2 prime.jpg', 3, '2018-04-23 06:31:25', '2018-04-23 06:31:25'),
(51, 'Samsung Galaxy J2 Pro', 3290000, 3.20, '2323', 'Samsung Galaxy J2 Pro.jpg', 3, '2018-04-23 06:31:59', '2018-04-23 06:31:59'),
(52, 'Samsung Galaxy J3 Lte', 2690000, 2.20, 'we', 'Samsung Galaxy J3 Lte.jpg', 3, '2018-04-23 06:32:35', '2018-04-23 06:32:35'),
(53, 'Samsung Galaxy J3 Pro', 3990000, 4.30, 'we', 'Samsung Galaxy J3 Pro.jpg', 3, '2018-04-23 06:33:24', '2018-04-23 06:33:24'),
(54, 'Samsung Galaxy J7 Plus', 7290000, 4.20, 'we', 'Samsung Galaxy J7 Plus.jpg', 3, '2018-04-23 06:34:26', '2018-04-23 06:34:26'),
(55, 'Samsung Galaxy j7 Prime', 4990000, 4.30, '2', 'Samsung Galaxy j7 Prime.jpg', 3, '2018-04-23 06:35:02', '2018-04-23 06:35:02'),
(56, 'Samsung Galaxy J7 Pro', 6090000, 3.90, '2323', 'Samsung Galaxy J7 Pro.jpg', 3, '2018-04-23 06:35:34', '2018-04-23 06:35:34'),
(57, 'Samsung Galaxy Note8', 24490000, 4.60, '2323', 'Samsung Galaxy Note8.jpg', 3, '2018-04-23 06:36:42', '2018-04-23 06:36:42'),
(58, 'Samsung Galaxy S8 Plus', 17990000, 4.20, '242', 'Samsung Galaxy S8 Plus.jpg', 3, '2018-04-23 06:40:09', '2018-04-23 06:40:09'),
(59, 'Samsung Galaxy S8', 15990000, 4.20, 'wewe', 'Samsung Galaxy S8.jpg', 3, '2018-04-23 06:41:42', '2018-04-23 06:41:42'),
(60, 'Samsung Galaxy S9 Plus 64GB', 24490000, 4.20, 'ds', 'Samsung Galaxy S9 Plus 64GB.jpg', 3, '2018-04-23 06:42:41', '2018-04-23 06:42:41'),
(61, 'Samsung Galaxy S9 Plus', 23490000, 4.20, 'wewe', 'Samsung Galaxy S9 Plus.jpg', 3, '2018-04-23 06:43:30', '2018-04-23 06:43:30'),
(62, 'Samsung Galaxy S9', 24990000, 5.00, '32323', 'Samsung Galaxy S9.jpg', 3, '2018-04-23 06:45:05', '2018-04-23 06:45:05'),
(63, 'Samsung Galaxy-J2 Pro', 3290000, 3.20, 'we', 'Samsung Galaxy-J2 Pro.jpg', 3, '2018-04-23 06:45:45', '2018-04-23 06:45:45'),
(64, 'Nokia 1', 1890000, 2.40, 's', 'Nokia 1 Do.jpg', 4, '2018-04-23 06:49:06', '2018-04-23 06:49:06'),
(65, 'Nokia 2', 2390000, 3.20, 'sd', 'Nokia 2.jpg', 4, '2018-04-23 06:49:35', '2018-04-23 06:49:35'),
(66, 'Nokia 3', 1590000, 3.20, 'sd', 'Nokia 3.jpg', 4, '2018-04-23 06:50:20', '2018-04-23 06:50:20'),
(67, 'Nokia 5', 4260000, 3.50, 'sd', 'Nokia 5.jpg', 4, '2018-04-23 06:51:02', '2018-04-23 06:51:02'),
(68, 'Nokia 6', 5590000, 3.40, 'sd', 'Nokia 6.jpg', 4, '2018-04-23 06:51:35', '2018-04-23 06:51:35'),
(69, 'Nokia 7 plus', 8990000, 4.50, 'sd', 'Nokia 7 plus.jpg', 4, '2018-04-23 06:52:16', '2018-04-23 06:52:16'),
(70, 'Nokia 8', 1090000, 4.10, 'sd', 'Nokia 8.jpg', 4, '2018-04-23 06:53:33', '2018-04-23 06:53:33'),
(71, 'Sony Xperia XA1 Ultra', 7990000, 4.50, 's', 'Sony Xa1 Ultra.jpg', 14, '2018-04-23 06:59:12', '2018-04-23 06:59:12'),
(72, 'Sony Xperia L1', 3590000, 3.20, 's', 'Sony Xperia L1.jpg', 14, '2018-04-23 07:01:10', '2018-04-23 07:01:10'),
(73, 'Sony Xperia L2', 5490000, 4.20, 'w', 'Sony Xperia L2.jpg', 14, '2018-04-23 07:02:05', '2018-04-23 07:02:05'),
(74, 'Sony Xperia L2', 5490000, 4.20, 'w', 'Sony Xperia L2.jpg', 14, '2018-04-23 07:02:06', '2018-04-23 07:02:06'),
(75, 'Sony Xperia X', 7490000, 4.20, 's', 'Sony Xperia X.jpg', 14, '2018-04-23 07:02:38', '2018-04-23 07:02:38'),
(76, 'Sony Xperia Xa1 Plus', 6190000, 3.30, '1', 'Sony Xperia Xa1 Plus.jpg', 14, '2018-04-23 07:03:19', '2018-04-23 07:03:19'),
(77, 'Sony Xperia Xa1 Ultra Pink', 7000000, 4.10, '1', 'Sony Xperia Xa1 Ultra Pink.jpg', 14, '2018-04-23 07:03:52', '2018-04-23 07:03:52'),
(78, 'Sony Xperia Xa1', 5190000, 3.40, '1', 'Sony Xperia Xa1.jpg', 14, '2018-04-23 07:04:28', '2018-04-23 07:04:28'),
(79, 'Sony Xperia xz Premium', 15990000, 4.60, '1', 'Sony Xperia xz Premium.jpg', 14, '2018-04-23 07:05:25', '2018-04-23 07:05:25'),
(80, 'Sony Xperia Xz', 9990000, 4.00, '1', 'Sony Xperia Xz.jpg', 14, '2018-04-23 07:06:15', '2018-04-23 07:06:15'),
(81, 'Sony Xperia XZ1', 13990000, 4.00, '1', 'Sony Xperia XZ1.jpg', 14, '2018-04-23 07:06:53', '2018-04-23 07:06:53'),
(82, 'Sony Xperia XZ2', 19990000, 4.00, '1', 'Sony Xperia XZ2.jpg', 14, '2018-04-23 07:07:21', '2018-04-23 07:07:21'),
(83, 'Sony Xperia XZs', 9990000, 5.00, '13', 'Sony Xperia XZs.png', 14, '2018-04-23 07:07:54', '2018-04-23 07:07:54'),
(84, 'Sony Xperia-L1', 3590000, 3.00, '1', 'Sony Xperia-L1.jpg', 14, '2018-04-23 07:08:31', '2018-04-23 07:08:31'),
(85, 'Sony Xperia-xa Ultra', 6990000, 4.00, '1', 'Sony Xperia-xa Ultra.jpg', 14, '2018-04-23 07:09:04', '2018-04-23 07:09:04'),
(86, 'Sony Xperia XA1 plus xz', 6190000, 3.00, '1', 'Sony Xperia XA1 plus xz.jpg', 14, '2018-04-23 07:10:49', '2018-04-23 07:10:49'),
(87, 'Sony Xperia xz-premium', 1599000, 4.20, '1', 'Sony Xperia xz-premium.jpg', 14, '2018-04-23 07:11:51', '2018-04-23 07:11:51'),
(88, 'Motorola Moto C 4G', 1599000, 3.00, '1', 'Motorola Moto C 4G.jpg', 14, '2018-04-23 07:16:20', '2018-04-23 07:16:20'),
(89, 'Motorola Moto E4 Plus', 3990000, 3.20, '4', 'Motorola Moto E4 Plus.jpg', 8, '2018-04-23 07:17:02', '2018-04-23 07:17:02'),
(90, 'Motorola Moto g5S Plus', 6990000, 3.00, '1', 'Motorola Moto g5S Plus.jpg', 8, '2018-04-23 07:17:36', '2018-04-23 07:17:36'),
(91, 'Motorola Moto Plus', 2500000, 3.00, '1', 'Motorola Moto Plus.jpg', 8, '2018-04-23 07:18:03', '2018-04-23 07:18:03'),
(92, 'Motorola Moto x4', 9990000, 4.50, '3', 'Motorola Moto x4.jpg', 8, '2018-04-23 07:18:30', '2018-04-23 07:18:30'),
(93, 'Motorola Moto Z2 Play', 10990000, 4.00, '1', 'Motorola Moto Z2 Play.jpg', 8, '2018-04-23 07:18:59', '2018-04-23 07:18:59'),
(94, 'Philips S327', 2390000, 3.00, '1', 'Philips S327.jpg', 11, '2018-04-23 07:20:28', '2018-04-23 07:20:28'),
(95, 'Philips S329', 2790000, 3.00, '1', 'Philips S329.jpg', 11, '2018-04-23 07:21:03', '2018-04-23 07:21:03'),
(96, 'Asus Zenfone 2 Go', 1490000, 3.00, '3', 'Asus Zenfone 2 Go.jpg', 15, '2018-04-23 07:22:04', '2018-04-23 07:22:04'),
(97, 'Asus Zenfone 4 max', 1599000, 4.00, '1', 'Asus Zenfone 4 max .jpg', 15, '2018-04-23 07:25:27', '2018-04-23 07:25:27'),
(98, 'Asus Zenfone 4 Max Pro', 4990000, 3.00, '1', 'Asus Zenfone 4 Max Pro.jpg', 15, '2018-04-23 07:26:38', '2018-04-23 07:26:38'),
(99, 'Asus Zenfone Live', 2999000, 3.00, 'q', 'Asus Zenfone Live.jpg', 15, '2018-04-23 07:27:06', '2018-04-23 07:27:06'),
(100, 'Asus Zenfone Max M1 plus', 5990000, 4.20, 's', 'Asus Zenfone Max M1 plus.jpg', 15, '2018-04-23 07:27:45', '2018-04-23 07:27:45'),
(101, 'Bphone 2017', 9990000, 5.00, '3', 'Bphone 2017.jpg', 13, '2018-04-23 07:28:56', '2018-04-23 07:28:56'),
(102, 'Itel A13', 1090000, 2.00, '1', 'Itel A13.jpg', 12, '2018-04-23 07:30:01', '2018-04-23 07:30:01'),
(103, 'Itel IT1508 Plus', 1590000, 2.00, '1', 'Itel IT1508 Plus.jpg', 12, '2018-04-23 07:30:25', '2018-04-23 07:30:25'),
(104, 'Itel IT1516 Plus', 1799000, 3.00, '1', 'Itel IT1516 Plus.jpg', 12, '2018-04-23 07:30:48', '2018-04-23 07:30:48'),
(105, 'Itel S11 Plus', 1799000, 3.00, '1', 'Itel S11 Plus.jpg', 12, '2018-04-23 07:33:21', '2018-04-23 07:33:21'),
(106, 'Itel S31', 1999000, 2.00, '3', 'Itel S31.jpg', 12, '2018-04-23 07:33:51', '2018-04-23 07:33:51'),
(107, 'Mobell Nova F7 Pro', 2099000, 3.00, '1', 'Mobell Nova F7 Pro.jpg', 10, '2018-04-23 07:35:43', '2018-04-23 07:35:43'),
(108, 'Mobell Nova i4 7', 1490000, 3.00, '1', 'Mobell Nova i4 7.jpg', 10, '2018-04-23 07:36:28', '2018-04-23 07:36:28'),
(109, 'Mobell Nova I6', 3990000, 3.20, '1', 'Mobell Nova I6.jpg', 10, '2018-04-23 07:37:18', '2018-04-23 07:37:18'),
(110, 'Mobell Nova P3', 2390000, 3.30, '2', 'Mobell Nova P3.jpg', 10, '2018-04-23 07:38:03', '2018-04-23 07:38:03'),
(111, 'Mobell S50', 1590000, 2.00, '1', 'Mobell S50.jpg', 10, '2018-04-23 07:38:30', '2018-04-23 07:38:30'),
(112, 'Mobiistar Lai Yuna', 1590000, 2.00, '1', 'Mobiistar Lai Yuna.jpg', 9, '2018-04-23 07:47:38', '2018-04-23 07:47:38'),
(113, 'Mobiistar Lai Z1', 1090000, 3.00, '1', 'Mobiistar Lai Z1.jpg', 9, '2018-04-23 07:48:04', '2018-04-23 07:48:04'),
(114, 'Mobiistar Lai Z2', 1200000, 2.00, '1', 'Mobiistar Lai Z2.jpg', 9, '2018-04-23 07:48:35', '2018-04-23 07:48:35'),
(115, 'Mobiistar Lai Zoro Lte', 1999000, 1.00, '1', 'Mobiistar Lai Zoro Lte.jpg', 9, '2018-04-23 07:49:34', '2018-04-23 07:49:34'),
(116, 'Mobiistar Lai Zumbo J', 2390000, 2.00, '1', 'Mobiistar Lai Zumbo J.jpg', 9, '2018-04-23 07:50:15', '2018-04-23 07:50:15'),
(117, 'Mobiistar Lai Zumbo S2', 2999000, 3.00, '1', 'Mobiistar Lai Zumbo S2.jpg', 9, '2018-04-23 07:51:00', '2018-04-23 07:51:00'),
(118, 'Mobiistar Prime X Max', 5490000, 3.00, '1', 'Mobiistar Prime X Max.jpg', 9, '2018-04-23 07:51:30', '2018-04-23 07:51:30'),
(119, 'Mobiistar Zumbo J2', 2390000, 1.30, '12', 'Mobiistar Zumbo J2.jpg', 9, '2018-04-23 07:52:03', '2018-04-23 07:52:03'),
(120, 'Mobiistar Zumbo Power', 1699000, 1.30, '3', 'Mobiistar Zumbo Power.jpg', 9, '2018-04-23 07:54:00', '2018-04-23 07:54:00'),
(121, 'HTC 0 Evo', 4990000, 3.20, '1', 'HTC 0 Evo.jpg', 16, '2018-04-23 07:55:30', '2018-04-23 07:55:30'),
(122, 'HTC One A9S', 2790000, 1.00, '1', 'HTC One A9S .jpg', 16, '2018-04-23 07:55:56', '2018-04-23 07:55:56'),
(123, 'HTC U Play', 4190000, 3.00, '1', 'HTC U Play.jpg', 16, '2018-04-23 07:56:29', '2018-04-23 07:56:29'),
(124, 'HTC U Ultra', 9890000, 4.50, '1', 'HTC U Ultra.jpg', 16, '2018-04-23 07:57:00', '2018-04-23 07:57:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
