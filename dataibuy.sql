-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2020 lúc 05:37 PM
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
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `image_category`, `created_at`, `updated_at`) VALUES
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
(18, '2020_11_08_013244_create_categories_table', 2),
(19, '2020_11_19_103606_create_users_table', 3),
(20, '2020_11_19_112805_create_users_table', 4),
(21, '2020_11_20_060133_create_users_table', 5),
(22, '2020_11_20_060714_create_users_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` double NOT NULL,
  `description_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_product` double NOT NULL,
  `image_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `name_product`, `price_product`, `description_product`, `quantity_product`, `image_product`, `created_at`, `updated_at`) VALUES
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
  `name_roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name_roles`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-11-11 02:07:05', '2020-11-11 02:07:05'),
(2, 'user', '2020-11-11 02:07:05', '2020-11-11 02:07:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `gender`, `image`, `email`, `phone`, `address`, `roles_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Lê Bình', 'Nam', '1605858382.jpg', 'deocomatkhau2000@gmail.com', '0853344503', '36 Ngô Thị Nhậm, Hòa Khánh Bắc, Liên chiểu , Đà Nẵng', 2, NULL, '$2y$10$hywpqZ3JCzAtnnKUQMr8M.MForgLFWymAPrf/IPMUPjr54mUYx3BG', NULL, '2020-11-20 00:46:22', '2020-11-20 01:13:03'),
(5, 'Cummerata Lera', 'Nữ', '1605860561.jpg', 'lechibinh2012@gmail.com', '6489977641', '9039 Danika PrairieLake Fredericton, NH 19776-6802', 2, NULL, '$2y$10$MiB/s4lhXMpFKowxRyJ0NupxALQ12lmINaVL.XZ9EXhxkLxNAjFxS', NULL, '2020-11-20 01:22:41', '2020-11-20 01:22:41'),
(7, 'admin', 'Nữ', '1605886434.jpg', 'admin@gmail.com', '0853344503', '36 Ngô Thị Nhậm, Hòa Khánh Bắc, Liên chiểu , Đà Nẵng', 1, NULL, '$2y$10$iZRj.r4DhAqjaqOi/iiKXuH75EoNoyrz4Hbh8rcrPI3z5BS.yIUA6', NULL, '2020-11-20 08:33:54', '2020-11-20 08:33:54');

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
  MODIFY `id_category` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
