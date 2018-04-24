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
-- Cấu trúc bảng cho bảng `technology`
--

CREATE TABLE `technology` (
  `id` int(10) UNSIGNED NOT NULL,
  `screen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` int(10) UNSIGNED NOT NULL,
  `rom` int(10) UNSIGNED NOT NULL,
  `memory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `technology`
--

INSERT INTO `technology` (`id`, `screen`, `system`, `camera`, `cpu`, `ram`, `rom`, `memory`, `pin`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'OLED, 5.8,Super Retina', 'iOS 11', '12 MP,7MP', 'Apple A11 Bionic 6 nhân', 3, 256, '1 Nano SIM, Hỗ trợ 4G', 2716, 13, NULL, NULL),
(2, 'OLED, 5.8, Super Retina', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A11 Bionic 6 nhân', 3, 64, '1 Nano SIM, Hỗ trợ 4G', 2716, 12, NULL, NULL),
(3, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP, 7 MP', 'Apple A11 Bionic 6 nhân', 3, 256, '1 Nano SIM, Hỗ trợ 4G', 2691, 11, NULL, NULL),
(4, 'LED-backlit IPS LCD, 4.7\", Retina HD', 'iOS 11', '12 MP,7 MP', 'Apple A11 Bionic 6 nhân', 2, 256, '1 Nano SIM, Hỗ trợ 4G', 1821, 10, NULL, NULL),
(5, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A11 Bionic 6 nhân', 3, 64, '1 Nano SIM, Hỗ trợ 4G', 2500, 9, NULL, NULL),
(6, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', 'Apple A10 Fusion 4 nhân 64-bit', 3, 128, '1 Nano SIM, Hỗ trợ 4G', 2900, 8, NULL, NULL),
(7, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,5 MP', 'Apple A11 Bionic 6 nhân', 2, 32, '1 Nano SIM, Hỗ trợ 4G', 1960, 7, NULL, NULL),
(8, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A9 2 nhân 64-bit', 3, 32, '1 Nano SIM, Hỗ trợ 4G', 2750, 6, NULL, NULL),
(9, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A11 Bionic 6 nhân', 3, 32, '1 Nano SIM, Hỗ trợ 4G', 1960, 5, NULL, NULL),
(10, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A11 Bionic 6 nhân', 3, 32, '1 Nano SIM, Hỗ trợ 4G', 1715, 4, NULL, NULL),
(11, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A11 Bionic 6 nhân', 3, 32, '1 Nano SIM, Hỗ trợ 4G', 1715, 3, NULL, NULL),
(12, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A9 2 nhân 64-bit', 3, 32, '1 Nano SIM, Hỗ trợ 4G', 1810, 2, NULL, NULL),
(13, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP,7 MP', 'Apple A9 2 nhân 64-bit', 3, 32, '1 Nano SIM, Hỗ trợ 4G', 1610, 1, NULL, NULL),
(14, 'Super AMOLED, 6.2\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 6, 128, ' MicroSD, hỗ trợ tối đa 400 GB', 3500, 46, NULL, NULL),
(15, 'Super AMOLED, 6.2\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 6, 64, ' MicroSD, hỗ trợ tối đa 400 GB', 3500, 47, NULL, NULL),
(16, 'Super AMOLED, 6.2\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 8895 8 nhân 64-bit', 6, 64, ' MicroSD, hỗ trợ tối đa 256 GB', 3300, 48, NULL, NULL),
(17, 'Super AMOLED, 5.8\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 64, ' MicroSD, hỗ trợ tối đa 400 GB', 3000, 49, NULL, NULL),
(18, 'Super AMOLED, 5.8\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 128, ' MicroSD, hỗ trợ tối đa 400 GB', 3500, 50, NULL, NULL),
(19, 'Super AMOLED, 5.8\", Quad HD+ (2K+)', 'Android 6.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 64, ' MicroSD, hỗ trợ tối đa 400 GB', 3500, 59, NULL, NULL),
(20, 'Super AMOLED, 5.8\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 64, ' MicroSD, hỗ trợ tối đa 256 GB', 3000, 60, NULL, NULL),
(21, 'Super AMOLED, 5.8\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 4, 128, ' MicroSD, hỗ trợ tối đa 234 GB', 3500, 61, NULL, NULL),
(22, 'Super AMOLED, 5\", qHD', 'Android 5.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 128, ' MicroSD, hỗ trợ tối đa 256 GB', 4000, 62, NULL, NULL),
(23, 'Super AMOLED, 5\", qHD', 'Android 6.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 16, ' MicroSD, hỗ trợ tối đa 400 GB', 3000, 51, NULL, NULL),
(24, 'Super AMOLED, 5\", qHD', 'Android 5.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 16, ' MicroSD, hỗ trợ tối đa 400 GB', 3700, 52, NULL, NULL),
(25, 'Super AMOLED, 5\", qHD', 'Android 5.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 16, ' MicroSD, hỗ trợ tối đa 400 GB', 3200, 53, NULL, NULL),
(26, 'Super AMOLED, 5\", qHD', 'Android 6.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 16, ' MicroSD, hỗ trợ tối đa 400 GB', 3500, 54, NULL, NULL),
(27, 'Super AMOLED, 5\", qHD', 'Android 6.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 16, ' MicroSD, hỗ trợ tối đa 400 GB', 3100, 55, NULL, NULL),
(28, 'Super AMOLED, 5\", qHD', 'Android 6.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 16, ' MicroSD, hỗ trợ tối đa 400 GB', 2500, 56, NULL, NULL),
(29, 'Super AMOLED, 5\", qHD', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 8, ' MicroSD, hỗ trợ tối đa 400 GB', 2200, 57, NULL, NULL),
(30, 'Super AMOLED, 5\", qHD', 'Android 8.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 8, ' MicroSD, hỗ trợ tối đa 400 GB', 1800, 58, NULL, NULL),
(31, 'Super AMOLED, 5.8\", Quad HD+ (2K+)', 'Android 6.0 (Oreo)', '2 camera 12 MP,8 MP', 'Exynos 9810 8 nhân 64 bit', 5, 64, ' MicroSD, hỗ trợ tối đa 400 GB', 3500, 63, NULL, NULL),
(32, 'LTPS LCD, 6.23\", Full HD+', 'ColorOS 5.0 (Android 8.1)', '16 MP,25 MP ', ' MediaTek Helio P60', 6, 128, ' MicroSD, hỗ trợ tối đa 256 GB', 3400, 24, NULL, NULL),
(33, 'LTPS LCD, 6.23\", Full HD+', 'ColorOS 5.0 (Android 8.1)', '16 MP,25 MP ', ' MediaTek Helio P60', 6, 64, ' MicroSD, hỗ trợ tối đa 256 GB', 3200, 23, NULL, NULL),
(34, 'LTPS LCD, 6.0\", Full HD+', 'ColorOS 5.0 (Android 8.1)', '16 MP,25 MP ', ' MediaTek Helio P60', 6, 64, ' MicroSD, hỗ trợ tối đa 256 GB', 3200, 22, NULL, NULL),
(35, 'LTPS LCD, 6.0\", Full HD+', 'ColorOS 3.2 (Android 7.1)', '16 MP,25 MP ', ' MediaTek Helio P60', 6, 32, ' MicroSD, hỗ trợ tối đa 256 GB', 3200, 21, NULL, NULL),
(36, 'LTPS LCD, 6.23\", Full HD+', 'ColorOS 3.2 (Android 7.1)', '16 MP,25 MP ', ' MediaTek Helio P60', 6, 32, ' MicroSD, hỗ trợ tối đa 256 GB', 3400, 20, NULL, NULL),
(37, 'IPS LCD, 5.7\", HD+\", Full HD+', 'ColorOS 3.2 (Android 6.0)', '8 MP,12 MP ', ' MediaTek Helio P60', 3, 32, ' MicroSD, hỗ trợ tối đa 256 GB', 3180, 19, NULL, NULL),
(38, 'IPS LCD, 5.7\", HD+\", Full HD+', 'ColorOS 3.2 (Android 6.0)', '8 MP,12 MP ', ' MediaTek Helio P60', 3, 32, ' MicroSD, hỗ trợ tối đa 256 GB', 3180, 18, NULL, NULL),
(39, 'IPS LCD, 5.7\", HD+\", Full HD+', 'ColorOS 3.2 (Android 6.0)', '5 MP,13 MP ', ' MediaTek Helio P60', 3, 16, ' MicroSD, hỗ trợ tối đa 256 GB', 3000, 17, NULL, NULL),
(40, 'IPS LCD, 5.7\", HD+\", Full HD+', 'ColorOS 3.2 (Android 6.0)', '8 MP,12 MP ', ' MediaTek Helio P60', 3, 16, ' MicroSD, hỗ trợ tối đa 256 GB', 3180, 16, NULL, NULL),
(41, 'IPS LCD, 5.7\", HD+\", Full HD+', 'ColorOS 3.2 (Android 5.1)', '8 MP,12 MP ', ' MediaTek Helio P60', 3, 16, ' MicroSD, hỗ trợ tối đa 256 GB', 2400, 15, NULL, NULL),
(42, 'IPS LCD, 5.7\", HD+\", Full HD+', 'ColorOS 3.2 (Android 6.0)', '8 MP,12 MP ', ' MediaTek Helio P60', 3, 16, ' MicroSD, hỗ trợ tối đa 256 GB', 2500, 14, NULL, NULL),
(43, 'IPS LCD, 5.5\", Full HD', 'Android 8.0 (Oreo)', '16 MP, 8 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 32, 'MicroSD, hỗ trợ tối đa 128 GB', 3000, 69, NULL, NULL),
(44, 'IPS LCD, 5.5\", Full HD', 'Android 6.0 (Oreo)', '16 MP, 8 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 32, 'MicroSD, hỗ trợ tối đa 128 GB', 3000, 70, NULL, NULL),
(45, 'IPS LCD, 5.5\", Full HD', 'Android 6.0 (Oreo)', '16 MP, 8 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 16, 'MicroSD, hỗ trợ tối đa 128 GB', 3000, 68, NULL, NULL),
(46, 'IPS LCD, 4.5\", FWVGA', 'Android 5.0 (Oreo)', '8 MP,12 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 32, 'MicroSD, hỗ trợ tối đa 128 GB', 3000, 67, NULL, NULL),
(47, '  IPS LCD, 4.5\", FWVGA', 'Android 5.0 (Oreo)', '16 MP, 8 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 16, 'MicroSD, hỗ trợ tối đa 128 GB', 1900, 66, NULL, NULL),
(48, '  IPS LCD, 4.5\", FWVGA', 'Android 5.0 (Oreo)', '16 MP, 8 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 8, 'MicroSD, hỗ trợ tối đa 128 GB', 1500, 65, NULL, NULL),
(49, '  IPS LCD, 4.5\", FWVGA', 'Android 5.0 (Oreo)', '16 MP, 8 MP', 'Qualcomm Snapdragon 630 8 nhân', 3, 8, 'MicroSD, hỗ trợ tối đa 128 GB', 1800, 64, NULL, NULL),
(50, 'IPS LCD, 5\", HD', ' Android 7.0 (Nougat)', '13 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 94, NULL, NULL),
(51, 'IPS LCD, 5\", HD', ' Android 7.0 (Nougat)', '13 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 95, NULL, NULL),
(52, 'IPS LCD, 5.7\", Full HD+', ' Android 7.0 (Nougat)', '16 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 4130, 100, NULL, NULL),
(53, 'IPS LCD, 5.7\", Full HD+', ' Android 7.0 (Nougat)', '16 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 5000, 99, NULL, NULL),
(54, 'IPS LCD, 5.7\", Full HD+', ' Android 7.0 (Nougat)', '12 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 4130, 98, NULL, NULL),
(55, 'IPS LCD, 5.7\", Full HD+', ' Android 7.0 (Nougat)', '16 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 8, ' MicroSD, hỗ trợ tối đa 64 GB', 4130, 97, NULL, NULL),
(56, 'IPS LCD, 5.7\", Full HD+', ' Android 5.0(Nougat)', '16 MP,5 MP', 'Mediatek MT6750 8 nhân', 3, 8, ' MicroSD, hỗ trợ tối đa 64 GB', 2600, 96, NULL, NULL),
(57, 'IPS LCD, 5.5\", Full HD+', ' Android 7.1 (Nougat)', '16 MP,8 MP', ' Snapdragon 625 8 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 101, NULL, NULL),
(58, 'IPS LCD, 5.5\", HD', ' Android 7.1 (Nougat)', '16 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 36, ' MicroSD, hỗ trợ tối đa 64 GB', 5000, 102, NULL, NULL),
(59, 'IPS LCD, 5.5\", HD', ' Android 7.1 (Nougat)', '16 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 5000, 103, NULL, NULL),
(60, 'IPS LCD, 5.5\", HD', ' Android 7.1 (Nougat)', '16 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 4000, 104, NULL, NULL),
(61, 'IPS LCD, 5.5\", HD', ' Android 7.1 (Nougat)', '16 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 8, ' MicroSD, hỗ trợ tối đa 64 GB', 4000, 105, NULL, NULL),
(62, 'IPS LCD, 5.5\", HD', ' Android 7.1 (Nougat)', '16 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 8, ' MicroSD, hỗ trợ tối đa 64 GB', 4000, 106, NULL, NULL),
(63, 'IPS LCD, 5.5\", HD', ' Android 7.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3250, 107, NULL, NULL),
(64, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2050, 108, NULL, NULL),
(65, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 18, ' MicroSD, hỗ trợ tối đa 64 GB', 3250, 109, NULL, NULL),
(66, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 18, ' MicroSD, hỗ trợ tối đa 64 GB', 2230, 110, NULL, NULL),
(67, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 18, ' MicroSD, hỗ trợ tối đa 64 GB', 1250, 111, NULL, NULL),
(68, 'IPS LCD, 6.0\", HD+', ' Android 7.0 (Nougat)', '20 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 4250, 120, NULL, NULL),
(69, 'IPS LCD, 5.5\", HD', ' Android 7.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3550, 119, NULL, NULL),
(70, 'IPS LCD, 5.5\", HD', ' Android 7.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3150, 118, NULL, NULL),
(71, 'IPS LCD, 5.5\", HD', ' Android 7.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3250, 117, NULL, NULL),
(72, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3250, 116, NULL, NULL),
(73, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2250, 115, NULL, NULL),
(74, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2250, 114, NULL, NULL),
(75, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2450, 113, NULL, NULL),
(76, 'IPS LCD, 5.5\", HD', ' Android 6.0 (Nougat)', '8 MP,8 MP', '  MT6580 4 nhân 32-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 1250, 112, NULL, NULL),
(77, 'Super LCD, Chính: 5.7, phụ: 2.05\", Quad HD (2K)', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 124, NULL, NULL),
(78, 'Super LCD, Chính: 5.7', ' Android 6.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 2500, 123, NULL, NULL),
(79, 'Super LCD, Chính: 5.7', ' Android 6.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 33, ' MicroSD, hỗ trợ tối đa 64 GB', 2500, 122, NULL, NULL),
(80, 'Super LCD, Chính: 5.7', ' Android 6.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2500, 121, NULL, NULL),
(81, 'Super LCD, Chính: 5.5', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 93, NULL, NULL),
(82, 'Super LCD, Chính: 5.5', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 92, NULL, NULL),
(83, 'Super LCD, Chính: 5.5', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 2000, 91, NULL, NULL),
(84, 'Super LCD, Chính: 5.5', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2000, 90, NULL, NULL),
(85, 'Super LCD, Chính: 5.5', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 8, ' MicroSD, hỗ trợ tối đa 64 GB', 2500, 89, NULL, NULL),
(86, 'Super LCD, Chính: 5.5', ' Android 7.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 8, ' MicroSD, hỗ trợ tối đa 64 GB', 1700, 88, NULL, NULL),
(87, 'IPS LCD, 5.84\", Full HD+', ' Android 8.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3000, 30, NULL, NULL),
(88, 'IPS LCD, 5.84\", Full HD+', ' Android 8.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 2000, 29, NULL, NULL),
(89, 'IPS LCD, 5.84\", Full HD+', ' Android 8.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 2400, 28, NULL, NULL),
(90, 'IPS LCD, 5.84\", Full HD+', ' Android 8.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2500, 27, NULL, NULL),
(91, 'IPS LCD, 5.84\", Full HD+', ' Android 8.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 2600, 26, NULL, NULL),
(92, 'IPS LCD, 5.84\", Full HD+', ' Android 8.0 (Nougat)', '12 MP,16 MP', ' Qualcomm Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 1900, 25, NULL, NULL),
(93, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 37, NULL, NULL),
(94, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 35, NULL, NULL),
(95, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 34, NULL, NULL),
(96, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 33, NULL, NULL),
(97, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 32, NULL, NULL),
(98, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 31, NULL, NULL),
(99, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 36, NULL, NULL),
(100, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 44, NULL, NULL),
(101, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 43, NULL, NULL),
(102, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 42, NULL, NULL),
(103, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 41, NULL, NULL),
(104, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 32, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 40, NULL, NULL),
(105, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 39, NULL, NULL),
(106, 'LTPS LCD, 5.5\", Full HD', ' Android 8.0 (Nougat)', '12 MP,16 MP', '  Snapdragon 821 4 nhân 64-bit', 3, 16, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 38, NULL, NULL),
(107, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 71, NULL, NULL),
(108, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 72, NULL, NULL),
(109, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 73, NULL, NULL),
(110, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 74, NULL, NULL),
(111, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 75, NULL, NULL),
(112, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 76, NULL, NULL),
(113, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 77, NULL, NULL),
(114, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 78, NULL, NULL),
(115, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 79, NULL, NULL),
(116, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 80, NULL, NULL),
(117, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 81, NULL, NULL),
(118, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 82, NULL, NULL),
(119, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 83, NULL, NULL),
(120, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 84, NULL, NULL),
(121, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 85, NULL, NULL),
(122, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 86, NULL, NULL),
(123, 'LTPS LCD, 5.7\", Full HD', ' Android 8.0 (Oreo)', '12 MP,16 MP', '   Snapdragon 845 8 nhân', 3, 64, ' MicroSD, hỗ trợ tối đa 64 GB', 3080, 87, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technology_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `technology`
--
ALTER TABLE `technology`
  ADD CONSTRAINT `technology_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
