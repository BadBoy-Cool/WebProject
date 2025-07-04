-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2025 at 08:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuong_trinh_tours`
--

CREATE TABLE `chuong_trinh_tours` (
  `ct_ID` varchar(5) NOT NULL,
  `ngayKhoiHanh` date NOT NULL,
  `khachToiDa` int(11) NOT NULL,
  `luuY` varchar(255) DEFAULT NULL,
  `tour_ID` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuong_trinh_tours`
--

INSERT INTO `chuong_trinh_tours` (`ct_ID`, `ngayKhoiHanh`, `khachToiDa`, `luuY`, `tour_ID`, `created_at`, `updated_at`) VALUES
('CT01', '2025-07-01', 8, 'Mang theo hộ chiếu, trang phục thoải mái.', 'T001', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT02', '2025-07-10', 10, 'Thời tiết nóng, nên mang kem chống nắng.', 'T002', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT03', '2025-07-15', 12, 'Mang theo dù vì có thể mưa nhẹ buổi chiều.', 'T003', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT04', '2025-07-20', 6, 'Mang giày thể thao để dễ di chuyển.', 'T004', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT05', '2025-07-25', 9, 'Chuẩn bị máy ảnh để chụp ảnh đẹp.', 'T005', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT06', '2025-08-01', 7, 'Mang theo thuốc cá nhân nếu cần.', 'T006', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT07', '2025-08-05', 5, 'Lưu ý giờ tập trung đúng giờ tại điểm đón.', 'T007', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT08', '2025-08-10', 11, 'Không nên mang nhiều hành lý, tour di chuyển nhiều.', 'T008', '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('CT09', '2025-08-15', 11, 'Không nên mang nhiều hành lý, tour di chuyển nhiều.', 'T008', '2025-06-30 08:20:41', '2025-06-30 08:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lich_trinhs`
--

CREATE TABLE `lich_trinhs` (
  `lich_ID` varchar(5) NOT NULL,
  `ngayThu` int(11) NOT NULL,
  `gioBatDau` date NOT NULL,
  `gioKetThuc` date NOT NULL,
  `tour_ID` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lich_trinhs`
--

INSERT INTO `lich_trinhs` (`lich_ID`, `ngayThu`, `gioBatDau`, `gioKetThuc`, `tour_ID`, `created_at`, `updated_at`) VALUES
('L001', 1, '2025-07-01', '2025-07-03', 'T001', '2025-06-30 06:17:47', '2025-06-30 06:17:47'),
('L002', 1, '2025-07-05', '2025-07-07', 'T002', '2025-06-30 06:17:47', '2025-06-30 06:17:47'),
('L003', 1, '2025-07-10', '2025-07-11', 'T003', '2025-06-30 06:17:47', '2025-06-30 06:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_26_100510_create_tours_table', 1),
(5, '2025_06_26_100530_create_chuong_trinh_tours_table', 1),
(6, '2025_06_26_100544_create_lich_trinhs_table', 1),
(7, '2025_06_26_160144_add_slug_to_tours_table', 1),
(8, '2025_06_30_131127_add_title_to_tours_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_ID` varchar(5) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `songay` varchar(255) DEFAULT NULL,
  `soluong` varchar(255) DEFAULT NULL,
  `giaLon` bigint(20) NOT NULL,
  `giaEmBe` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_ID`, `tour_name`, `title`, `slug`, `songay`, `soluong`, `giaLon`, `giaEmBe`, `created_at`, `updated_at`) VALUES
('T001', 'Đền Asakusa, Tokyo, Nhật Bản', 'Senso-ji là ngôi đền cổ nhất Tokyo, nổi tiếng với kiến trúc truyền thống.', 'den-asakusa-tokyo-nhat-ban', '3 ngày 2 đêm', '2-4 khách', 59000, 49000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T002', 'Tamnougalt, Morocco', 'Một ốc đảo cổ kính nằm bên dòng sông Draa, nổi bật với pháo đài cổ kasbah và nét văn\n                 hóa Berber.', 'tamnougalt-morocco', '3 ngày 2 đêm', '5-8 khách', 58000, 48000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T003', 'Bangkok, Thái Lan', ' Thành phố sôi động kết hợp giữa truyền thống và hiện đại.', 'bangkok-thai-lan', '2 ngày 1 đêm', '4-6 khách', 50000, 40000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T004', 'Rome, Ý', 'Thủ đô lịch sử lừng danh với những công trình cổ đại như Đấu trường La Mã, Đền\n                 Pantheon...', 'rome-y', '4 ngày 3 đêm', '6-8 khách', 80000, 70000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T005', 'Bali, Indonesia', 'Thiên đường nhiệt đới nổi tiếng với những bãi biển tuyệt đẹp, thu hút du khách khắp\n                 thế giới.', 'bali-indonesia', '2 ngày 1 đêm', '3-4 khách', 45000, 35000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T006', 'Barcelona, Tây Ban Nha', 'Thành phố nổi tiếng với kiến trúc độc đáo của Gaudí, bãi biển xinh đẹp và văn hóa   sống động.', 'barcelona-tay-ban-nha', '5 ngày 4 đêm', '8-10 khách', 90000, 80000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T007', 'New York, Mỹ', 'Thành phố sôi động với biểu tượng như tượng Nữ thần Tự do, Central Park và Times\n                 Square.', 'new-york-my', '3 ngày 2 đêm', '4-6 khách', 68000, 58000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T008', 'Cairo, Ai Cập', ' Thành phố lịch sử nổi tiếng với những kim tự tháp cổ đại và bảo tàng Ai Cập.', 'cairo-ai-cap', '7 ngày 6 đêm', '10-15 khách', 101000, 90000, '2025-06-30 08:20:41', '2025-06-30 08:20:41'),
('T009', 'Vịnh Hạ Long, Vietnam', 'Vịnh Hạ Long là kỳ quan thiên nhiên nổi tiếng của Việt Nam, với hàng nghìn hòn đảo đá vôi kỳ vĩ giữa làn nước xanh ngọc bích.', 'vinh-ha-long-vietnam', '4 ngày 6 đêm', '5-7 khách', 10000, 80000, '2025-06-30 08:20:41', '2025-06-30 08:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', NULL, '$2y$12$fQLDtTsYvLDii9hmawcPMu9EY2ccC2Z.PDAyDnKoNe9bywBzJB28e', NULL, '2025-06-30 06:17:47', '2025-06-30 06:17:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `chuong_trinh_tours`
--
ALTER TABLE `chuong_trinh_tours`
  ADD PRIMARY KEY (`ct_ID`),
  ADD KEY `chuong_trinh_tours_tour_id_foreign` (`tour_ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_trinhs`
--
ALTER TABLE `lich_trinhs`
  ADD PRIMARY KEY (`lich_ID`),
  ADD KEY `lich_trinhs_tour_id_foreign` (`tour_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_ID`),
  ADD UNIQUE KEY `tours_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuong_trinh_tours`
--
ALTER TABLE `chuong_trinh_tours`
  ADD CONSTRAINT `chuong_trinh_tours_tour_id_foreign` FOREIGN KEY (`tour_ID`) REFERENCES `tours` (`tour_ID`) ON DELETE CASCADE;

--
-- Constraints for table `lich_trinhs`
--
ALTER TABLE `lich_trinhs`
  ADD CONSTRAINT `lich_trinhs_tour_id_foreign` FOREIGN KEY (`tour_ID`) REFERENCES `tours` (`tour_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
