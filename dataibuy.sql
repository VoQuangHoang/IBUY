-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 06:05 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dataibuy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `Name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_category`, `Name_category`, `Image_category`, `created_at`, `updated_at`) VALUES
(3, 'iPhone', '24.jpg', NULL, NULL),
(4, 'SamSung', '43.jpg', NULL, NULL),
(5, 'Oppo', '94.png', NULL, NULL),
(6, 'Xiaomi', '85.jpg', NULL, NULL),
(7, 'Vivo', '76.jpg', NULL, NULL),
(8, 'Realme', '25.png', NULL, NULL),
(9, 'Nokia', '3.jpg', NULL, NULL),
(10, 'Huawei', '39.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_11_10_031649_create_roles_table', 1),
(17, '2020_11_02_000222_create_product_table', 2),
(18, '2020_11_08_013244_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `Id_category` int(11) NOT NULL,
  `Name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price_product` double NOT NULL,
  `Description_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity_product` double NOT NULL,
  `Image_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `Id_category`, `Name_product`, `Price_product`, `Description_product`, `Quantity_product`, `Image_product`, `created_at`, `updated_at`) VALUES
(1, 2, 'Giày Thể Thao Adidas Crazychaos EF1060 Màu Đen Xám Size 37 1/3', 29990000, '2adsdasd', 32131, '87.jpg', NULL, NULL),
(3, 3, 'iPhone 11 Pro Max 64GB', 29990000, 'KHUYẾN MÃI TRỊ GIÁ 2.000.000₫\r\nGiá và khuyến mãi dự kiến áp dụng đến 23:00 30/11\r\nGiảm giá 2,000,000đ *\r\nPhụ kiện Apple mua kèm giảm đến 20% (không áp dụng đồng thời KM khác) Xem chi tiết\r\nPin sạc dự phòng giảm 30% khi mua kèm. (click xem chi tiết)\r\nTặng 02 suất mua Đồng hồ thời trang giảm 40% (Không áp dụng thêm khuyến mãi khác).\r\nTặng 100.000₫ mua hàng tại website thành viên BachhoaXANH.com, áp dụng khi mua Online tại Tp.HCM và 1 số khu vực (Xem thể lệ)\r\n- Một số điện thoại được nhận 1 lần duy nhất\r\n\r\n- PMH được tặng cho KH chưa từng mua hàng tại BachhoaXANH Online', 12, '41.png', NULL, NULL),
(4, 6, 'Điện thoại Xiaomi Redmi 9 (4GB/64GB)', 3790000, 'KHUYẾN MÃI\r\nGiá và khuyến mãi áp dụng đặt và nhận hàng từ 00:00 13/11 - 23:59 15/11\r\nPin sạc dự phòng giảm 30% khi mua kèm. (click xem chi tiết)\r\nTặng 02 suất mua Đồng hồ thời trang giảm 40% (Không áp dụng thêm khuyến mãi khác).\r\nTặng 100.000₫ mua hàng tại website thành viên BachhoaXANH.com, áp dụng khi mua Online tại Tp.HCM và 1 số khu vực (Xem thể lệ)\r\n- Một số điện thoại được nhận 1 lần duy nhất\r\n\r\n- PMH được tặng cho KH chưa từng mua hàng tại BachhoaXANH Online', 12, '66.png', NULL, NULL),
(5, 5, 'Điện thoại OPPO A93', 7190000, 'KHUYẾN MÃI\r\nGiá và khuyến mãi dự kiến áp dụng đến 23:00 15/11\r\nPin sạc dự phòng giảm 30% khi mua kèm. (click xem chi tiết)\r\nTặng 02 suất mua Đồng hồ thời trang giảm 40% (Không áp dụng thêm khuyến mãi khác).\r\nTặng 100.000₫ mua hàng tại website thành viên BachhoaXANH.com, áp dụng khi mua Online tại Tp.HCM và 1 số khu vực (Xem thể lệ)\r\n- Một số điện thoại được nhận 1 lần duy nhất\r\n\r\n- PMH được tặng cho KH chưa từng mua hàng tại BachhoaXANH Online', 112, '2.png', NULL, NULL),
(6, 4, 'Điện thoại Samsung Galaxy Note 20 Ultra', 26990000, 'KHUYẾN MÃI\r\nGiá và khuyến mãi dự kiến áp dụng đến 23:00 15/11\r\nGiảm giá 5,000,000đ khi tham gia thu cũ đổi mới Note 20 Series Xem chi tiết\r\nƯu đãi phòng chờ thương gia Xem chi tiết\r\nTrả góp 0% thẻ tín dụng Xem chi tiết\r\nPin sạc dự phòng giảm 30% khi mua kèm. (click xem chi tiết)\r\nTặng 02 suất mua Đồng hồ thời trang giảm 40% (Không áp dụng thêm khuyến mãi khác).\r\nTặng 100.000₫ mua hàng tại website thành viên BachhoaXANH.com, áp dụng khi mua Online tại Tp.HCM và 1 số khu vực (Xem thể lệ)\r\n- Một số điện thoại được nhận 1 lần duy nhất\r\n\r\n- PMH được tặng cho KH chưa từng mua hàng tại BachhoaXANH Online', 123, '23.png', NULL, NULL),
(7, 9, 'Điện thoại Nokia 8.3 5G', 11990000, 'KHUYẾN MÃI\r\nGiá và khuyến mãi dự kiến áp dụng đến 23:00 30/11\r\nPin sạc dự phòng giảm 30% khi mua kèm. (click xem chi tiết)\r\nTặng 02 suất mua Đồng hồ thời trang giảm 40% (Không áp dụng thêm khuyến mãi khác).\r\nTặng 100.000₫ mua hàng tại website thành viên BachhoaXANH.com, áp dụng khi mua Online tại Tp.HCM và 1 số khu vực (Xem thể lệ)\r\n- Một số điện thoại được nhận 1 lần duy nhất\r\n\r\n- PMH được tặng cho KH chưa từng mua hàng tại BachhoaXANH Online', 12, '89.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `Name_roles`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-11-11 02:07:05', '2020-11-11 02:07:05'),
(2, 'user', '2020-11-11 02:07:05', '2020-11-11 02:07:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` int(11) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `diachi`, `roles_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Cummerata Lera', 'deocomatkhausdada2000@gmail.com', '6489977641', 'Nông sơn,Quang Nam', 1, NULL, '$2y$10$aidw1m0W67S0uyd8ocKZ2emCDKKNXMxzFNrsdb67efr6W.OAoi23a', NULL, '2020-11-11 03:43:47', '2020-11-11 03:43:47'),
(9, 'Lê Bình', 'admin@gmail.com', '0853344503', 'Nông sơn,Quang Nam', 1, NULL, '$2y$10$yJwxk27LrnCv58g7scMzpuRhB/C66iYIggqt65ykty9rAY90jwRR.', NULL, '2020-11-11 03:46:17', '2020-11-11 03:46:17'),
(10, 'Cummerata Lera', 'deocomatkhau2000@gmail.com', '6489977641', 'Nông sơn,Quang Nam', 2, NULL, '$2y$10$sJosBFoeZ7beRM1iIq7Ph.MnnWP7F7qpIHASv1cLrNeGxz8XzW9eW', NULL, '2020-11-12 21:11:26', '2020-11-12 21:11:26'),
(12, 'Cummerata Lera', 'lechibinhjhgghjgjghj2012@gmail.com', '6489977641', 'Nông sơn,Quang Nam', 2, NULL, '$2y$10$GWnxQIbZ0dvqaaP5PtU0Ce1sbtXeVKZQn0y1Mmx8jeHXHN.LPY10W', NULL, '2020-11-12 21:13:12', '2020-11-12 21:13:12'),
(13, 'Võ Quang Hoàng', 'voquanghoang@gmail.com', '0853344503', 'Quế Lộc, Nông Sơn, Quảng Nam', 1, NULL, '$2y$10$LmtjhKwZ4uQ7bU9/P2kydOm8o.WFZMmHW5TY8cIKAeVe4Ec/RmPQC', NULL, '2020-11-12 21:19:19', '2020-11-12 21:19:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
