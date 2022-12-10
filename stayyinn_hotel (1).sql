-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 09, 2022 lúc 08:55 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `stayyinn_hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` bigint(20) NOT NULL,
  `id_permission` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `thumbnail`, `password`, `gender`, `address`, `phone`, `status`, `id_permission`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thành Luân', 'luanntph25463@fpt.edu.vn', 'ca.jpg', '0334590019', 'n', 'Cổ Chất Dũng Tiến', '0334590019', 0, 1, '2022-11-15 15:38:00', '2022-11-15'),
(2, 'Nguyễn Tiến Tùng', 'tungnt25580@fpt.edu.vn', 'ca.jpg', '0334590019', 'm', 'Đà Nẵng', '0334590019', 0, 2, '2022-11-15 15:40:01', '2022-11-15'),
(3, 'Vương Xuân Chiến', 'chienvxph25403@fpt.edu.vn', 'ca.jpg', '0334590019', 'k', 'hải Dương', '0334590019', 0, 2, '2022-11-15 15:42:19', '2022-11-15'),
(4, 'Nguyễn Nhật Thiên', 'thienn25434@fpt.edu.vn', 'tg4.jpg', '0334590019', 'n', 'Thanh Hóa', '0334590019', 0, 5, '2022-11-15 15:42:19', '2022-11-15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `quantity_people` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`booking_id`, `check_in_date`, `check_out_date`, `status`, `quantity_people`, `total_amount`, `message`, `phone`, `email`, `name`, `id_user`, `create_at`, `updated_at`) VALUES
(35, '2022-11-25', '2022-11-30', 1, 4, 0, 'mess', '0334590019', 'luanntph25463@fpt.edu.vn', 'luanadzai', 1, '2022-11-28 22:34:04', '2022-11-28'),
(36, '2022-12-01', '2022-12-02', 0, 4, 0, 'đỉnh', '0334590019', 'c', 'mai tớ đến', 1, '2022-11-28 22:39:21', '2022-11-28'),
(37, '2022-12-01', '2022-12-02', 2, 4, 0, 'đỉnh', '0334590019', 'c', 'mai tớ đến', 1, '2022-11-28 22:40:37', '2022-11-28'),
(38, '2022-11-25', '2022-11-27', 0, 5, 0, '', '', '', '', 1, '2022-11-28 22:42:25', '2022-11-28'),
(39, '2022-11-25', '2022-11-27', 2, 6, 0, '', '', '', '', 1, '2022-11-28 22:43:29', '2022-11-28'),
(40, '2022-12-02', '2022-12-06', 0, 4, 0, 'mai tôi nhận', '0334590019', 'luanntph25463@fpt.edu.vn', '', 1, '2022-11-29 10:00:03', '2022-11-29'),
(41, '2022-12-02', '2022-12-06', 0, 3, 0, 'tin tức', '0334590019', 'luanntph25463@fpt.edu.vn', 'luân', 1, '2022-11-29 10:06:43', '2022-11-29'),
(42, '2022-11-25', '2022-12-01', 0, 4, 0, 'luân', 'vinh', 'tùng', '', 1, '2022-11-29 10:08:59', '2022-11-29'),
(43, '2022-11-25', '2022-12-01', 0, 4, 0, '', '', '', '', 1, '2022-11-29 10:13:43', '2022-11-29'),
(44, '2022-11-25', '2022-12-01', 0, 4, 0, '', '', '', '', 1, '2022-11-29 10:15:19', '2022-11-29'),
(45, '2022-11-25', '2022-12-01', 0, 5, 0, '', '', '', '', 1, '2022-11-29 10:15:35', '2022-11-29'),
(46, '2022-11-25', '2022-12-01', 0, 4, 0, 'ss', 'ss', 'ss', '', 1, '2022-11-29 10:19:25', '2022-11-29'),
(47, '2022-12-01', '2022-12-02', 0, 4, 0, '', '', '', '', 1, '2022-11-29 11:03:49', '2022-11-29'),
(48, '2022-11-30', '2022-12-01', 0, 3, 0, '', '', '', '', 1, '2022-11-29 11:09:35', '2022-11-29'),
(50, '2022-11-30', '2022-12-10', 0, 3, 0, '', '', '', '', 1, '2022-11-30 23:59:28', '2022-11-30'),
(51, '2022-11-30', '2022-12-10', 0, 2, 0, '', '', '', '', 1, '2022-12-01 00:02:50', '2022-12-01'),
(52, '2022-11-30', '2022-12-10', 0, 2, 0, '', '', '', '', 1, '2022-12-01 00:05:33', '2022-12-01'),
(53, '2022-11-30', '2022-12-10', 0, 2, 0, '', '', '', '', 1, '2022-12-01 00:07:16', '2022-12-01'),
(54, '2022-11-30', '2022-12-10', 0, 3, 0, '', '', '', '', 1, '2022-12-01 00:07:46', '2022-12-01'),
(55, '2022-11-30', '2022-12-10', 0, 3, 0, '', '', '', '', 1, '2022-12-01 00:09:23', '2022-12-01'),
(57, '2022-12-01', '2022-12-10', 0, 5, 0, '', '', '', '', 1, '2022-12-02 00:40:13', '2022-12-02'),
(58, '2022-12-01', '2022-12-10', 0, 5, 0, '', '', '', '', 1, '2022-12-02 00:41:00', '2022-12-02'),
(59, '2022-12-01', '2022-12-10', 0, 5, 0, '', '', '', '', 1, '2022-12-02 00:42:17', '2022-12-02'),
(60, '2022-12-01', '2022-12-10', 1, 5, 0, '', '', '', '', 1, '2022-12-02 00:42:45', '2022-12-02'),
(61, '2022-12-07', '2022-12-10', 0, 1, 0, '', '', '', '', 1, '2022-12-06 23:28:20', '2022-12-06'),
(62, '2022-12-07', '2022-12-10', 0, 1, 0, 's', 's', 's', '', 1, '2022-12-06 23:58:13', '2022-12-06'),
(63, '2022-12-07', '2022-12-10', 2, 1, 502672444, '', '', '', '', 1, '2022-12-06 23:59:46', '2022-12-06'),
(64, '2022-12-06', '2022-12-07', 2, 1, 502672444, '', '', '', '', 1, '2022-12-07 00:08:08', '2022-12-07'),
(65, '2022-12-06', '2022-12-07', 0, 1, 78860000, '', '', '', '', 1, '2022-12-07 00:37:28', '2022-12-07'),
(66, '2022-12-06', '2022-12-07', 0, 1, 78860000, '', '', '', '', 1, '2022-12-07 00:38:54', '2022-12-07'),
(67, '2022-12-06', '2022-12-07', 2, 1, 0, '', '', '', '', 1, '2022-12-07 00:41:10', '2022-12-07'),
(68, '2022-12-06', '2022-12-07', 2, 1, 0, '', '', '', '', 1, '2022-12-07 00:42:10', '2022-12-07'),
(69, '2022-12-07', '2022-12-08', 2, 1, 0, '', '', '', '', 1, '2022-12-07 22:57:26', '2022-12-07'),
(70, '2022-12-07', '2022-12-08', 0, 1, 0, '', '', '', '', 1, '2022-12-07 22:58:56', '2022-12-07'),
(71, '2022-12-07', '2022-12-08', 0, 1, 0, '', '', '', '', 1, '2022-12-07 22:59:31', '2022-12-07'),
(72, '2022-12-07', '2022-12-08', 0, 1, 0, '', '', '', '', 1, '2022-12-07 22:59:56', '2022-12-07'),
(73, '2022-12-07', '2022-12-08', 0, 1, 0, '', '', '', '', 1, '2022-12-07 23:00:16', '2022-12-07'),
(74, '2022-12-07', '2022-12-08', 0, 1, 0, '', '', '', '', 1, '2022-12-07 23:03:07', '2022-12-07'),
(75, '2022-12-07', '2022-12-08', 0, 1, 0, 's', 's', 's', 's', 1, '2022-12-08 00:56:43', '2022-12-08'),
(76, '2022-12-07', '2022-12-08', 2, 1, 860000, '', '', '', '', 1, '2022-12-08 02:07:41', '2022-12-08'),
(77, '2022-12-09', '2022-12-13', 0, 1, 8672444, 'ngayf mai toi lay', '0334590019', 'vânnh@gmail.com', '', 2, '2022-12-08 10:41:03', '2022-12-08'),
(78, '2022-12-09', '2022-12-13', 0, 1, 9532444, '', '0334590019', 'vânnh@gmail.com', '', 2, '2022-12-08 11:11:48', '2022-12-08'),
(79, '2022-12-09', '2022-12-11', 2, 1, 188460000, '', '0334590019', 'tuanh@gmail.com', '', 1, '2022-12-09 00:06:04', '2022-12-09'),
(80, '2022-12-11', '2022-12-12', 2, 1, 18800000, '', '0334590019', 'tuanh@gmail.com', '', 1, '2022-12-09 02:01:55', '2022-12-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_detail`
--

CREATE TABLE `booking_detail` (
  `bookingdetail_id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `booking_detail`
--

INSERT INTO `booking_detail` (`bookingdetail_id`, `id_room`, `id_booking`, `created_at`, `updated_at`) VALUES
(7, 20, 35, '2022-11-28 22:34:04', '2022-11-28'),
(8, 22, 35, '2022-11-28 22:34:04', '2022-11-28'),
(9, 1, 36, '2022-11-28 22:39:21', '2022-11-28'),
(10, 1, 38, '2022-11-28 22:42:25', '2022-11-28'),
(11, 18, 39, '2022-11-28 22:43:29', '2022-11-28'),
(12, 4, 39, '2022-11-28 22:43:29', '2022-11-28'),
(13, 1, 40, '2022-11-29 10:00:03', '2022-11-29'),
(14, 1, 41, '2022-11-29 10:06:43', '2022-11-29'),
(15, 22, 41, '2022-11-29 10:06:43', '2022-11-29'),
(16, 18, 42, '2022-11-29 10:08:59', '2022-11-29'),
(17, 2, 42, '2022-11-29 10:08:59', '2022-11-29'),
(18, 5, 42, '2022-11-29 10:08:59', '2022-11-29'),
(19, 5, 43, '2022-11-29 10:13:43', '2022-11-29'),
(20, 19, 43, '2022-11-29 10:13:43', '2022-11-29'),
(21, 19, 43, '2022-11-29 10:13:43', '2022-11-29'),
(22, 5, 44, '2022-11-29 10:15:19', '2022-11-29'),
(23, 19, 44, '2022-11-29 10:15:19', '2022-11-29'),
(24, 19, 44, '2022-11-29 10:15:19', '2022-11-29'),
(25, 5, 45, '2022-11-29 10:15:35', '2022-11-29'),
(26, 19, 45, '2022-11-29 10:15:35', '2022-11-29'),
(27, 19, 45, '2022-11-29 10:15:35', '2022-11-29'),
(28, 19, 45, '2022-11-29 10:15:35', '2022-11-29'),
(29, 5, 46, '2022-11-29 10:19:25', '2022-11-29'),
(30, 19, 46, '2022-11-29 10:19:25', '2022-11-29'),
(31, 19, 46, '2022-11-29 10:19:25', '2022-11-29'),
(32, 19, 46, '2022-11-29 10:19:25', '2022-11-29'),
(33, 19, 46, '2022-11-29 10:19:25', '2022-11-29'),
(34, 19, 47, '2022-11-29 11:03:49', '2022-11-29'),
(35, 19, 47, '2022-11-29 11:03:49', '2022-11-29'),
(36, 20, 48, '2022-11-29 11:09:35', '2022-11-29'),
(37, 3, 49, '2022-11-29 11:43:05', '2022-11-29'),
(38, 3, 49, '2022-11-29 11:43:05', '2022-11-29'),
(39, 20, 50, '2022-11-30 23:59:28', '2022-11-30'),
(40, 20, 50, '2022-11-30 23:59:28', '2022-11-30'),
(41, 2, 50, '2022-11-30 23:59:28', '2022-11-30'),
(42, 20, 51, '2022-12-01 00:02:50', '2022-12-01'),
(43, 18, 51, '2022-12-01 00:02:50', '2022-12-01'),
(44, 20, 53, '2022-12-01 00:07:16', '2022-12-01'),
(45, 20, 54, '2022-12-01 00:07:46', '2022-12-01'),
(46, 19, 55, '2022-12-01 00:09:23', '2022-12-01'),
(47, 20, 46, '2022-12-01 00:10:14', '2022-12-01'),
(48, 18, 56, '2022-12-01 00:13:31', '2022-12-01'),
(49, 19, 56, '2022-12-01 00:13:31', '2022-12-01'),
(50, 22, 59, '2022-12-02 00:42:17', '2022-12-02'),
(51, 2, 59, '2022-12-02 00:42:17', '2022-12-02'),
(52, 2, 60, '2022-12-02 00:42:45', '2022-12-02'),
(53, 20, 61, '2022-12-06 23:28:20', '2022-12-06'),
(54, 19, 61, '2022-12-06 23:28:20', '2022-12-06'),
(55, 19, 61, '2022-12-06 23:28:20', '2022-12-06'),
(56, 22, 62, '2022-12-06 23:58:13', '2022-12-06'),
(57, 22, 62, '2022-12-06 23:58:13', '2022-12-06'),
(58, 22, 63, '2022-12-06 23:59:46', '2022-12-06'),
(59, 22, 64, '2022-12-07 00:08:08', '2022-12-07'),
(60, 20, 65, '2022-12-07 00:37:28', '2022-12-07'),
(61, 20, 66, '2022-12-07 00:38:54', '2022-12-07'),
(62, 18, 69, '2022-12-07 22:57:26', '2022-12-07'),
(63, 18, 74, '2022-12-07 23:03:07', '2022-12-07'),
(64, 22, 75, '2022-12-08 00:56:43', '2022-12-08'),
(65, 20, 76, '2022-12-08 02:07:41', '2022-12-08'),
(66, 22, 77, '2022-12-08 10:41:03', '2022-12-08'),
(67, 20, 78, '2022-12-08 11:11:48', '2022-12-08'),
(68, 22, 78, '2022-12-08 11:11:48', '2022-12-08'),
(69, 18, 79, '2022-12-09 00:06:04', '2022-12-09'),
(70, 1, 79, '2022-12-09 00:06:04', '2022-12-09'),
(71, 1, 79, '2022-12-09 00:06:04', '2022-12-09'),
(72, 1, 80, '2022-12-09 02:01:55', '2022-12-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_room`
--

CREATE TABLE `categories_room` (
  `categories_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories_room`
--

INSERT INTO `categories_room` (`categories_id`, `name`, `status`, `description`, `images`, `created_at`) VALUES
(1, 'phòng tình yêu', 2, 'Phòng Giành Cho Cặp Đôi Yêu Nhau', 'ca.jpg', '2022-11-15 16:15:41'),
(2, 'Phòng thương gia', 2, 'Phòng Giành Cho Gia Đình', 'ca.jpg', '2022-11-15 16:15:41'),
(3, 'Phòng Đôi', 2, 'Phòng Giành Cho Gia Đình', 'ca.jpg', '2022-11-15 16:15:41'),
(4, 'phòng Gia Đình', 2, 'Phòng Giành Cho Gia Đình', 'ca.jpg', '2022-11-15 16:15:41'),
(5, 'phòng Víp Lắc Sơ ri', 2, 'Phòng Giành Cho Gia Đình', 'ca.jpg', '2022-11-15 16:15:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `reply_date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `content`, `status`, `reply_date`, `id_user`, `id_room`, `created_at`, `updated_at`) VALUES
(1, 'Cảm Mơn Bạn Đã góp ý Chúc Bạn Có Trải Nghiệm Thật Là Tốt', 2, '2022-11-16', 1, 2, '2022-11-15 10:17:18', '2022-11-16'),
(2, 'Cảm Mơn Bạn Đã góp ý Chúc Bạn Có Trải Nghiệm Thật Là Tốt', 2, '2022-11-16', 1, 2, '2022-11-15 10:17:18', '2022-11-16'),
(3, 'Cảm Mơn Bạn Đã góp ý Chúc Bạn Có Trải Nghiệm Thật Là Tốt', 2, '2022-11-16', 1, 1, '2022-11-15 10:17:18', '2022-11-16'),
(4, 'Cảm Mơn Bạn Đã góp ý Chúc Bạn Có Trải Nghiệm Thật Là Tốt', 2, '2022-11-16', 1, 4, '2022-11-15 10:17:18', '2022-11-16'),
(5, 'Cảm Mơn Bạn Đã góp ý Chúc Bạn Có Trải Nghiệm Thật Là Tốt', 2, '2022-11-16', 1, 3, '2022-11-15 10:17:18', '2022-11-16'),
(6, 'Cảm Mơn Bạn Đã góp ý Chúc Bạn Có Trải Nghiệm Thật Là Tốt', 2, '2022-11-16', 1, 11, '2022-11-15 10:17:18', '2022-11-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_detail`
--

CREATE TABLE `image_detail` (
  `id_image_detail` int(11) NOT NULL,
  `id_list_image` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_detail`
--

INSERT INTO `image_detail` (`id_image_detail`, `id_list_image`, `id_room`) VALUES
(1, 1, 2),
(2, 2, 20),
(3, 3, 20),
(4, 4, 2),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 1, 20),
(10, 1, 22),
(11, 3, 18),
(12, 3, 19),
(13, 3, 20),
(14, 3, 21),
(15, 3, 17),
(16, 3, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_image`
--

CREATE TABLE `list_image` (
  `id_list` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `list_image`
--

INSERT INTO `list_image` (`id_list`, `image`) VALUES
(1, 'tg1.jpg\r\n'),
(2, 'tg2.jpg\r\n'),
(3, 'tg3.jpg\n'),
(4, 'tg4.jpg\n'),
(5, 'tg5.jpg\n'),
(6, 'tg6.jpg\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `name`, `images`, `content`, `status`, `id_admin`, `created_at`, `updated_at`) VALUES
(1, 'Ngày Thành Lập', 'ca.jpg', 'thành lập vào năm 2003', 1, 2, '2022-11-15 10:14:01', '2022-12-03'),
(2, 'Ngày Thành Lập', 'ca.jpg', 'thành lập vào năm 2003', 3, 2, '2022-11-15 10:14:01', '2022-11-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`permission_id`, `name`, `description`, `create_at`) VALUES
(1, 'Quản Trị Viên', 'điều hành hệ thống', '2022-11-15 09:42:44'),
(2, 'Tổng Giám Đốc', 'điều hành khách sạn', '2022-11-15 09:43:18'),
(5, 'lễ tânn', 'x', '2022-12-01 01:14:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `id_category_room` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `acreage` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `view` varchar(200) NOT NULL,
  `likes` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`room_id`, `name`, `description`, `thumbnail`, `id_category_room`, `price`, `star`, `quantity`, `location`, `acreage`, `status`, `view`, `likes`, `created_at`) VALUES
(1, '101', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 1, 6800000, 5, 5, '1', '30m2', 1, '61', 791, '2022-11-15 15:58:14'),
(2, '102', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg2.jpg', 1, 7900000, 4, 3, '1', '28m2', 1, '86', 645, '2022-11-15 15:58:14'),
(3, '103', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 3, 5600000, 3, 4, '1', '38m2', 1, '131', 1867, '2022-11-15 15:58:14'),
(4, '104', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 1, 600000, 1, 7, '1', '29m2', 1, '95', 967, '2022-11-15 15:58:14'),
(5, '105', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 4, 4500000, 2, 5, '1', '29m2', 1, '13', 967, '2022-11-15 15:58:14'),
(6, '201', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 2, 400000, 5, 6, '2', '50m2', 1, '79', 96, '2022-11-15 15:58:14'),
(7, '202', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 5, 4800000, 2, 4, '2', '50m2', 1, '80', 67, '2022-11-15 15:58:14'),
(8, '203', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 3, 800000, 5, 8, '2', '50m2', 1, '81', 67, '2022-11-15 15:58:14'),
(9, '204', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 2, 800000, 2, 2, '2', '32m2', 1, '49', 60, '2022-11-15 15:58:14'),
(10, '205', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 3, 4800000, 4, 2, '2', '42m2', 1, '76', 69, '2022-11-15 15:58:14'),
(11, '301', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 3, 4800000, 5, 5, '3', '42m2', 1, '75', 109, '2022-11-15 15:58:14'),
(12, '302', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 3, 860000, 4, 5, '3', '42m2', 1, '24', 19, '2022-11-15 15:58:14'),
(13, '303', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 2, 860000, 5, 4, '3', '44m2', 1, '74', 19, '2022-11-15 15:58:14'),
(14, '304', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 2, 860000, 4, 7, '3', '34m2', 1, '75', 19, '2022-11-15 15:58:14'),
(15, '305', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 2, 860000, 4, 7, '3', '34m2', 1, '74', 19, '2022-11-15 15:58:14'),
(16, '401', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 3, 860000, 5, 5, '4', '34m2', 1, '64', 19, '2022-11-15 15:58:14'),
(17, '402', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 1, 860000, 5, 5, '4', '34m2', 1, '110', 19, '2022-11-15 15:58:14'),
(18, '403', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 1, 860000, 5, 5, '4', '34m2', 1, '170', 44, '2022-11-15 15:58:14'),
(19, '404', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 1, 860000, 5, 5, '4', '34m2', 1, '126', 44, '2022-11-15 15:58:14'),
(20, '405', 'Phòng thoáng mát sạch sẽ,Nằm ở vị trí trung tâm tại Thành Phố Lệ Giang của Lệ Giang, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút', 'tg1.jpg', 1, 860000, 5, 5, '4', '34m2', 1, '290', 44, '2022-11-15 15:58:14'),
(22, '406', 'phòng mới xây ', 'tg1.jpg', 1, 2672444, 1, 3, '4', '341', 1, '79', 0, '2022-11-28 19:26:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`service_id`, `name`, `images`, `description`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Bơi', 'dv1.jpg', 'Hồ Bơi giữa Khách Sạn', 500000000, 3, 2, '2022-11-15 15:50:51', '2022-12-01 18:07:16'),
(2, 'Xe Đưa Đón', 'dv1.jpg', 'Xe Dịch Vụ Du Lịch', 78000000, 12, 1, '2022-11-15 15:50:51', '2022-12-01 18:07:21'),
(3, 'Phòng Gym', 'dv1.jpg', 'Phòng Tập Thể Hình', 6000000, 2, 0, '2022-11-15 15:50:51', '2022-12-01 18:07:24'),
(4, 'Ghế Tình Yêu', 'dv1.jpg', 'Ghế tình Yêu', 12000000, 134, 2, '2022-11-15 15:50:51', '2022-12-01 18:07:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_detail`
--

CREATE TABLE `service_detail` (
  `service_dt_id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_detail`
--

INSERT INTO `service_detail` (`service_dt_id`, `id_room`, `id_service`) VALUES
(1, 0, 2),
(2, 3, 3),
(3, 20, 4),
(4, 22, 4),
(5, 22, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(200) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `gender`, `email`, `images`, `address`, `phone`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tú Anh', 'tuanhnguyenthi@gmail.com', 121103, 'n', 'tuanh@gmail.com', 'user.jpg', 'Cổ Chất', '0334590019', '2003-11-12', 0, '2022-11-15 15:48:10', '2022-11-29'),
(2, 'vân Anh', 'vananhnguyenthi@gmail.com', 121103, 'n', 'vânnh@gmail.com', 'user.jpg', 'Cổ Chất', '0334590019', '2003-11-12', 0, '2022-11-15 15:48:10', '2022-11-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vote_room`
--

CREATE TABLE `vote_room` (
  `vote_room_id` int(11) NOT NULL,
  `star` int(11) DEFAULT 0,
  `comment` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vote_room`
--

INSERT INTO `vote_room` (`vote_room_id`, `star`, `comment`, `status`, `id_user`, `id_room`, `created_at`, `updated_at`) VALUES
(2, 3, 'trải nghiệm khá ổn', 0, 1, 2, '2022-11-15 16:13:34', '2022-11-16'),
(3, 3, 'trải nghiệm khá ổn', 0, 1, 2, '2022-11-15 16:13:34', '2022-11-16'),
(4, 3, 'trải nghiệm khá ổn', 0, 1, 1, '2022-11-15 16:13:34', '2022-11-16'),
(5, 3, 'trải nghiệm khá ổn', 0, 1, 3, '2022-11-15 16:13:34', '2022-11-16'),
(6, 3, 'trải nghiệm khá ổn', 0, 1, 3, '2022-11-15 16:13:34', '2022-11-16'),
(7, 3, 'trải nghiệm khá ổn', 0, 1, 11, '2022-11-15 16:13:34', '2022-11-16'),
(35, 0, 'Trải Nghiệm Thích Lắm', 0, 0, 2, '2022-11-17 13:32:28', '0000-00-00'),
(36, 0, 'sản phẩm quá tốt\r\n', 0, 0, 18, '2022-11-17 13:32:54', '0000-00-00'),
(37, 0, 'sản phẩm lần đầu thấy', 0, 0, 12, '2022-11-17 13:34:06', '0000-00-00'),
(38, 0, 'sản phẩm khá ổn\r\n', 0, 0, 20, '2022-11-17 22:53:08', '0000-00-00'),
(39, 0, 'Sản phẩm tạm Ổn', 0, 0, 20, '2022-11-18 12:53:46', '0000-00-00'),
(40, 0, 'oce', 0, 0, 1, '2022-11-19 11:32:31', '0000-00-00'),
(41, 0, 'hay lamws', 0, 0, 20, '2022-11-21 14:39:42', '0000-00-00'),
(42, 0, 'sanr pham qua tot', 0, 0, 20, '2022-11-21 14:42:44', '0000-00-00'),
(43, 0, 'sanr pham qua tot', 0, 0, 20, '2022-11-21 14:44:40', '0000-00-00'),
(44, 0, 's', 0, 0, 20, '2022-11-21 14:45:50', '0000-00-00'),
(45, 0, 'haizz', 0, 1, 20, '2022-11-21 14:50:28', '0000-00-00'),
(46, 0, 'm', 0, 0, 20, '2022-11-21 21:16:33', '0000-00-00'),
(47, 0, 'khatot\r\n', 0, 1, 19, '2022-11-21 21:17:07', '0000-00-00'),
(48, 0, 'tam', 0, 0, 17, '2022-11-21 21:19:22', '0000-00-00'),
(49, 0, 's', 0, 0, 17, '2022-11-21 21:20:28', '0000-00-00'),
(50, 0, 'a', 0, 1, 17, '2022-11-21 21:21:01', '0000-00-00'),
(51, 0, 'haz', 0, 0, 18, '2022-11-21 21:21:57', '0000-00-00'),
(52, 0, 'x', 0, 0, 18, '2022-11-21 21:22:19', '0000-00-00'),
(53, 0, 'va', 0, 1, 18, '2022-11-21 21:22:54', '0000-00-00'),
(54, 0, 'b', 0, 1, 17, '2022-11-21 21:36:53', '0000-00-00'),
(55, 0, 'z', 0, 1, 18, '2022-11-21 21:40:21', '0000-00-00'),
(56, 0, 'n', 0, 1, 18, '2022-11-21 21:40:57', '0000-00-00'),
(57, 0, 'va', 0, 1, 18, '2022-11-21 21:41:43', '0000-00-00'),
(58, 0, 'a', 0, 0, 18, '2022-11-21 21:49:43', '0000-00-00'),
(59, 0, 'c', 0, 0, 17, '2022-11-21 21:52:14', '0000-00-00'),
(61, 0, 'z', 0, 1, 20, '2022-12-02 01:08:04', '2022-12-02'),
(63, 0, 'aaa', 0, 1, 19, '2022-12-08 10:01:33', '2022-12-08'),
(64, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(65, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(66, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(67, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(68, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(69, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(70, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(71, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(72, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(73, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(74, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(75, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(76, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(77, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(78, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(79, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(80, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(81, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(82, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(83, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(84, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(85, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(86, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(87, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(88, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(89, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(90, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(91, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(92, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(93, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(94, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(95, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(96, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(97, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(98, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(99, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(100, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(101, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(102, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(103, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(104, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(105, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(106, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(107, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(108, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(109, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(110, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(111, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(112, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(113, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(114, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(115, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(116, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(117, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(118, 0, 'bbb', 0, 1, 19, '2022-12-08 10:35:46', '2022-12-08'),
(119, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(120, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(121, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(122, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(123, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(124, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(125, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(126, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(127, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(128, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(129, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(130, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(131, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(132, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(133, 0, 'b', 0, 1, 18, '2022-12-08 10:37:03', '2022-12-08'),
(134, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(135, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(136, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(137, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(138, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(139, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(140, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(141, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(142, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(143, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(144, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(145, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(146, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(147, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(148, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(149, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(150, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(151, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(152, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(153, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(154, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(155, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(156, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(157, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(158, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(159, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(160, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(161, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(162, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(163, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(164, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(165, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(166, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(167, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(168, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(169, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(170, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(171, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(172, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(173, 0, 'b', 0, 1, 18, '2022-12-08 10:37:04', '2022-12-08'),
(233, 0, '', 0, 2, 22, '2022-12-08 12:59:05', '2022-12-08'),
(234, 0, 'm', 0, 2, 11, '2022-12-08 12:59:12', '2022-12-08'),
(235, 0, 'v', 0, 1, 18, '2022-12-08 15:17:20', '2022-12-08'),
(236, 0, 'h', 0, 1, 18, '2022-12-09 00:03:23', '2022-12-09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `id_permission` (`id_permission`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Chỉ mục cho bảng `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`bookingdetail_id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Chỉ mục cho bảng `categories_room`
--
ALTER TABLE `categories_room`
  ADD PRIMARY KEY (`categories_id`);

--
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `image_detail`
--
ALTER TABLE `image_detail`
  ADD PRIMARY KEY (`id_image_detail`);

--
-- Chỉ mục cho bảng `list_image`
--
ALTER TABLE `list_image`
  ADD PRIMARY KEY (`id_list`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `id_category_room` (`id_category_room`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Chỉ mục cho bảng `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`service_dt_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `vote_room`
--
ALTER TABLE `vote_room`
  ADD PRIMARY KEY (`vote_room_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `bookingdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `categories_room`
--
ALTER TABLE `categories_room`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `image_detail`
--
ALTER TABLE `image_detail`
  MODIFY `id_image_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `list_image`
--
ALTER TABLE `list_image`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `service_dt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `vote_room`
--
ALTER TABLE `vote_room`
  MODIFY `vote_room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
