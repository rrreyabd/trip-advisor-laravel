-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 10:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripadvisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_type` enum('wisata','hotel','restoran','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_date` datetime NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `destination_id`, `user_id`, `rating_id`, `title`, `destination_type`, `upload_date`, `content`) VALUES
(1, 3, 2, 5, 'Hotel Terbaik Di Medan', 'hotel', '2023-05-21 18:20:14', 'Ini adalah hotel yang sangat baik dimana kita bisa mendapatkan pengalaman terenak di dunia'),
(2, 5, 3, 5, 'Tempat Hangout Recommended', 'restoran', '2023-05-21 18:22:37', 'Tabletop adalah cafe yang saya rekomendasikan. Tempat ini memiliki banyak board games yang bisa dimainkan sesuai dengan jumlah pengunjung. Kita hanya perlu memesan dan bisa bermain 2 board game yang akan dijelaskan pemiliknya. Pelayanan sangat ramah, untuk harga standar layaknya cafe pada umumnya.'),
(3, 5, 2, 5, 'Tempat Terbaik', 'restoran', '2023-05-21 18:23:45', 'Tabletop adalah cafe yang saya rekomendasikan. Tempat ini memiliki banyak board games yang bisa dimainkan sesuai dengan jumlah pengunjung. Kita hanya perlu memesan dan bisa bermain 2 board game yang akan dijelaskan pemiliknya. Pelayanan sangat ramah, untuk harga standar layaknya cafe pada umumnya.'),
(4, 7, 3, 5, 'Keren', 'hotel', '2023-05-21 18:25:23', 'alsdkfjalskdfjalsdkfja;lsdkfja;lsdkjfa;slkdfja;lskdfj;alskdjfa;sldkfjeoknfa;orng;aoegrnao;d'),
(5, 7, 3, 5, 'Hotel Tercanggih', 'hotel', '2023-05-21 18:25:59', 'dubdubaoisdjfaolorem opsum');

-- --------------------------------------------------------

--
-- Table structure for table `comment_photos`
--

CREATE TABLE `comment_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `comment_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_photos`
--

INSERT INTO `comment_photos` (`id`, `destination_id`, `comment_id`, `comment_photo`) VALUES
(1, 3, 1, 'facade.jpg'),
(2, 5, 2, 'tabletop.jpg'),
(3, 5, 3, 'warkopagem.jpg'),
(4, 5, 2, 'warkopagem.jpg'),
(5, 7, 4, 'facade.jpg'),
(6, 7, 4, 'swissbellin.jpeg'),
(7, 7, 4, 'facade.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating_id` bigint(20) UNSIGNED NOT NULL,
  `destination_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_type` enum('wisata','hotel','restoran') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `rating_id`, `destination_name`, `destination_type`, `category`, `address`, `city`, `country`, `map`, `website`, `contact`, `photo`, `created_at`, `updated_at`) VALUES
(1, 5, 'Tjong A Fie', 'wisata', 'Sejarah', 'Depan CP', 'Medan', 'Jambi', '', NULL, '0811-1111-111', 'tjongafie.jpg', NULL, NULL),
(2, 5, 'RM. Garuda', 'restoran', 'Kuliner', 'Jalan Aksara', 'Medan', 'Indonesia', '', NULL, '0811-1111-112', 'RM-Garuda.jpg', NULL, NULL),
(3, 5, 'JW Marriot', 'hotel', 'Penginapan', 'Jalan Banteng', 'Medan', 'Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.960899662653!2d98.67130548885498!3d3.5964363000000157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c3f6c8d037%3A0x54771c0e776d21fe!2sJW%20Marriott%20Hotel%20Medan!5e0!3m2!1sid!2sid!4v1684609622395!5m2!1sid!2sid\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade', 'jwmarriot.com', '0811-1111-113', 'facade.jpg', NULL, NULL),
(4, 4, 'Warung Senyum Agem', 'restoran', 'Kuliner', 'Jalan Multatuli', 'Medan', 'Indonesia', '', NULL, '0811-1111-114', 'warkopagem.jpg', NULL, NULL),
(5, 5, 'Table Top', 'restoran', 'Kuliner', 'Jalan Multatuli', 'Medan', 'Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.048422006831!2d98.6779935736566!3d3.576343650380863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131f4f25d2c77%3A0x5c9c7a19debd822f!2sTableTop%20Board%20Game%20Cafe!5e0!3m2!1sid!2sid!4v1684598932255!5m2!1sid!2sid\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade', 'www.tabletop.com', '0811-1111-115', 'tabletop.jpg', NULL, NULL),
(6, 4, 'Grand Sakura', 'hotel', 'Penginapan', 'Jl. Prof. H. M. Yamin No 41, Perintis, Kec. Medan Timur', 'Medan', 'Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9605174629455!2d98.6832389730302!3d3.5965237963776078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c73ce7b1cd%3A0xf1f395f5cf7a5fb5!2sGrand%20Sakura%20Hotel!5e0!3m2!1sid!2sid!4v1684609577653!5m2!1sid!2sid\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade', NULL, '0811-1111-116', 'grandsakura.jpg', NULL, NULL),
(7, 5, 'Swiss-Bellin', 'hotel', 'Penginapan', 'Jl. Surabaya No.88, Ps.Baru, Kec. Medan Kota', 'Medan', 'Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15928.071159816816!2d98.66703455541996!3d3.5833887000000035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131b45227381b%3A0x5142024c42a25867!2sSwiss-Belinn%20Medan!5e0!3m2!1sid!2sid!4v1684609312817!5m2!1sid!2sid\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade', 'swiss-belhotel.com', '0811-1111-117', 'swissbellin.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_detail`) VALUES
(1, 'Tempat Parkir'),
(2, 'Bawa Pulang'),
(3, 'Kolam Renang');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_features`
--

CREATE TABLE `hotel_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_features`
--

INSERT INTO `hotel_features` (`id`, `destination_id`, `feature_id`) VALUES
(1, 1, 3),
(2, 7, 1),
(3, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2000_01_01_000000_create_users_table', 1),
(2, '2000_01_02_000000_create_admins_table', 1),
(3, '2000_01_03_000000_create_ratings_table', 1),
(4, '2000_01_04_000000_create_destinations_table', 1),
(5, '2000_01_05_000000_create_photos_table', 1),
(6, '2000_01_06_000000_create_comments_table', 1),
(7, '2000_01_07_000000_create_comment_photos_table', 1),
(8, '2000_01_08_000000_create_favorites_table', 1),
(9, '2000_01_09_000000_create_trip_plans_table', 1),
(10, '2000_01_10_000000_create_trip_details_table', 1),
(11, '2000_01_11_000000_create_trip_destination_details_table', 1),
(12, '2000_01_12_000000_create_features_table', 1),
(13, '2000_01_13_000000_create_restaurants_table', 1),
(14, '2000_01_14_000000_create_restaurant_features_table', 1),
(15, '2000_01_15_000000_create_hotels_table', 1),
(16, '2000_01_16_000000_create_hotel_features_table', 1),
(17, '2000_01_17_000000_create_partners_table', 1),
(18, '2000_01_18_000000_create_prices_table', 1),
(19, '2000_01_19_000000_create_forums_table', 1),
(20, '2000_01_20_000000_create_replies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner`, `website`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'agoda', 'agoda.com', 'agoda.png', NULL, NULL),
(2, 'Booking.com', 'www.booking.com', 'booking_com.png', NULL, NULL),
(3, 'Trip.com', 'www.trip.com', 'trip_com.png', NULL, NULL),
(4, 'Hotels.com', 'www.hotels.com', 'hotels_com.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `destination_id`, `photo`, `content`, `upload_date`) VALUES
(1, 1, 1, 'facade.jpg', 'JW Marriot Hotel', '2023-05-17 07:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `destination_id`, `partner_id`, `price`) VALUES
(1, 1, 1, 500000),
(2, 7, 1, 888000),
(3, 7, 2, 777000),
(4, 7, 3, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating_type`, `value`) VALUES
(1, 'sangatBuruk', 1),
(2, 'buruk', 2),
(3, 'biasa', 3),
(4, 'sangatBagus', 4),
(5, 'luarBiasa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_features`
--

CREATE TABLE `restaurant_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_features`
--

INSERT INTO `restaurant_features` (`id`, `destination_id`, `feature_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_types`
--

CREATE TABLE `restaurant_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `diet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuisine_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuisine_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_types`
--

INSERT INTO `restaurant_types` (`id`, `destination_id`, `diet`, `cuisine_type`, `cuisine_hour`) VALUES
(1, 2, 'Halal', 'Indonesia', 'Pagi-Malam'),
(2, 5, 'Halal', 'Asia', 'Pagi');

-- --------------------------------------------------------

--
-- Table structure for table `trip_destination_details`
--

CREATE TABLE `trip_destination_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `trip_detail_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

CREATE TABLE `trip_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_plan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_plans`
--

CREATE TABLE `trip_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trip_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role`, `email`, `email_verified_at`, `password`, `firstName`, `lastName`, `username`, `address`, `city`, `province`, `post_code`, `country`, `website`, `about`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-05-21 17:48:26', 'admin', 'Julyant', 'Anggara', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'user', 'raihan@gmail.com', '2023-05-21 17:50:01', 'raihan', 'Raihan', 'Abdillah', 'itsrey', 'Jalan Gatsu', 'Medan', 'Sumatera Utara', '37777', 'Indonesia', NULL, 'Saya Rey dan saya suka berpetualang', 'profile.jpg', NULL, NULL, NULL),
(3, 'user', 'angga@gmail.com', '2023-05-21 17:52:53', 'angga', 'Julyant', 'Anggara', 'itsjuly', 'Jalan Thehok', 'Jambi', 'Jambi', '377717', 'Indonesia', NULL, 'Saya Julyant dan saya suka travelling.', 'profile.jpg', NULL, NULL, NULL),
(7, 'user', 'raihanlubis184@gmail.com', '2023-05-22 15:42:55', '$2y$10$XVq8ex7Dpwq/21r2jrKsz.6CoOeNv6EpdIpHnR6B5ZL1A.ZVnDDUm', 'Raihan', 'Abdillah', 'rrreyabd', 'Hannam-dong, 한남동', 'Seoul', 'Yongsan-gu', '04340', 'Korea Selatan', 'https://github.com/rrreyabd', 'You know who I am.', 'profile1.jpg', NULL, '2023-05-22 08:41:53', '2023-05-22 08:42:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_destination_id_foreign` (`destination_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_rating_id_foreign` (`rating_id`);

--
-- Indexes for table `comment_photos`
--
ALTER TABLE `comment_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_photos_destination_id_foreign` (`destination_id`),
  ADD KEY `comment_photos_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinations_rating_id_foreign` (`rating_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forums_user_id_foreign` (`user_id`);

--
-- Indexes for table `hotel_features`
--
ALTER TABLE `hotel_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_features_destination_id_foreign` (`destination_id`),
  ADD KEY `hotel_features_feature_id_foreign` (`feature_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_user_id_foreign` (`user_id`),
  ADD KEY `photos_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_destination_id_foreign` (`destination_id`),
  ADD KEY `prices_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_forum_id_foreign` (`forum_id`),
  ADD KEY `replies_user_id_foreign` (`user_id`);

--
-- Indexes for table `restaurant_features`
--
ALTER TABLE `restaurant_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_features_destination_id_foreign` (`destination_id`),
  ADD KEY `restaurant_features_feature_id_foreign` (`feature_id`);

--
-- Indexes for table `restaurant_types`
--
ALTER TABLE `restaurant_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_types_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `trip_destination_details`
--
ALTER TABLE `trip_destination_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_destination_details_destination_id_foreign` (`destination_id`),
  ADD KEY `trip_destination_details_trip_detail_id_foreign` (`trip_detail_id`);

--
-- Indexes for table `trip_details`
--
ALTER TABLE `trip_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_details_trip_plan_id_foreign` (`trip_plan_id`);

--
-- Indexes for table `trip_plans`
--
ALTER TABLE `trip_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_plans_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment_photos`
--
ALTER TABLE `comment_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_features`
--
ALTER TABLE `hotel_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant_features`
--
ALTER TABLE `restaurant_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant_types`
--
ALTER TABLE `restaurant_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trip_destination_details`
--
ALTER TABLE `trip_destination_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_details`
--
ALTER TABLE `trip_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_plans`
--
ALTER TABLE `trip_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `comments_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment_photos`
--
ALTER TABLE `comment_photos`
  ADD CONSTRAINT `comment_photos_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comment_photos_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hotel_features`
--
ALTER TABLE `hotel_features`
  ADD CONSTRAINT `hotel_features_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `hotel_features_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `photos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `prices_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`),
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `restaurant_features`
--
ALTER TABLE `restaurant_features`
  ADD CONSTRAINT `restaurant_features_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `restaurant_features_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`);

--
-- Constraints for table `restaurant_types`
--
ALTER TABLE `restaurant_types`
  ADD CONSTRAINT `restaurant_types_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);

--
-- Constraints for table `trip_destination_details`
--
ALTER TABLE `trip_destination_details`
  ADD CONSTRAINT `trip_destination_details_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `trip_destination_details_trip_detail_id_foreign` FOREIGN KEY (`trip_detail_id`) REFERENCES `trip_details` (`id`);

--
-- Constraints for table `trip_details`
--
ALTER TABLE `trip_details`
  ADD CONSTRAINT `trip_details_trip_plan_id_foreign` FOREIGN KEY (`trip_plan_id`) REFERENCES `trip_plans` (`id`);

--
-- Constraints for table `trip_plans`
--
ALTER TABLE `trip_plans`
  ADD CONSTRAINT `trip_plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
