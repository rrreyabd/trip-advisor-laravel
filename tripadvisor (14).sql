-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2023 at 05:20 PM
-- Server version: 8.0.30
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `rating_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_type` enum('wisata','hotel','restoran') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `visit_type` enum('Keluarga','Pasangan','Teman','Bisnis','Sendirian') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `destination_id`, `user_id`, `rating_id`, `title`, `destination_type`, `content`, `date`, `visit_type`, `created_at`, `updated_at`) VALUES
(38, 15, 14, 5, 'Fasilitas yang memadai.', 'hotel', 'Pengalaman yang sangat menarik untuk dikenang', '2023-05-29', '', '2023-06-02 08:52:24', '2023-06-02 08:52:24'),
(46, 15, 7, 5, 'Hotel Terbaik', 'hotel', 'Twmpat ini cocok untuk merasakan suasana kasual', '2023-05-31', '', '2023-06-02 18:35:33', '2023-06-02 18:35:33'),
(47, 16, 7, 5, 'Pengalaman yang menarik', 'wisata', 'Tempat yang luar biasa', '2023-05-28', 'Keluarga', '2023-06-03 00:38:37', '2023-06-03 00:38:37'),
(49, 37, 10, 5, 'Luar Biasa', 'hotel', 'Tidak bisa berkata kata', '2023-05-28', 'Teman', '2023-06-03 01:31:50', '2023-06-03 01:31:50'),
(50, 38, 10, 5, 'Pengalaman Mengesankan dengan Layanan yang Luar Biasa', 'hotel', 'Baru-baru ini saya menginap di [Nama Hotel], dan pengalaman tersebut sungguh luar biasa. Para staf hotel sangat ramah dan penuh perhatian, membuat saya merasa selamat dan nyaman sepanjang menginap. Kamar yang disediakan luas, bersih, dan terawat dengan baik. Fasilitas yang tersedia sangat lengkap, termasuk kolam renang yang indah dan pusat kebugaran. Lokasi hotel juga sangat strategis, dekat dengan objek wisata utama dan pilihan tempat makan. Secara keseluruhan, saya sangat merekomendasikan [Nama Hotel] untuk pengalaman menginap yang nyaman dan menyenangkan.', '2023-01-09', 'Sendirian', '2023-06-03 01:53:42', '2023-06-03 01:53:42'),
(51, 13, 10, 5, 'Makanan Lezat dalam Suasana yang Nyaman', 'restoran', 'Saya memiliki pengalaman makan yang luar biasa di [Nama Restoran]. Restoran ini memiliki suasana yang hangat dan mengundang, sempurna untuk makan santai. Menu yang ditawarkan beragam, dan makanannya benar-benar lezat. Setiap hidangan disajikan dengan indah dan penuh cita rasa. Pelayanan yang diberikan sangat perhatian dan ramah, meningkatkan pengalaman makan secara keseluruhan. Saya sangat merekomendasikan mencoba [Nama Restoran] untuk perjalanan kuliner yang mengesankan.', '2023-05-30', 'Teman', '2023-06-03 01:54:20', '2023-06-03 01:54:20'),
(53, 49, 7, 5, 'Terbaik', 'restoran', 'Mie pangsit terbaik', '2023-05-28', 'Sendirian', '2023-06-03 04:12:28', '2023-06-03 04:12:28'),
(54, 49, 7, 4, 'Rekomendasi', 'restoran', 'Sangat saya rekomendasikan', '2023-05-31', 'Teman', '2023-06-03 04:14:53', '2023-06-03 04:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `comment_photos`
--

CREATE TABLE `comment_photos` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `comment_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_photos`
--

INSERT INTO `comment_photos` (`id`, `destination_id`, `comment_id`, `photo`) VALUES
(17, 15, 38, 'belviu-hotel-bandung-promo-buy-one-get_200304150028-699.jpg'),
(26, 15, 46, '6970f035cb524fd6b7b97f55d3910dd6.jpg'),
(27, 15, 46, 'bel1.jpg'),
(28, 49, 54, 'p1160305.jpg'),
(29, 49, 54, '80341093_kbbWPf38TnmoMkFHmoqO94FoUdjVDSc2fyti_ZFLMvg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_type` enum('wisata','hotel','restoran') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `destination_name`, `destination_type`, `category`, `address`, `city`, `country`, `map`, `website`, `contact`, `photo`, `created_at`, `updated_at`) VALUES
(13, 'RamenYA!', 'restoran', 'Kuliner', 'Jl. KH. Zainul Arifin, Petisah Hulu, Kec. Medan Baru, Kota Medan, Sumatera Utara, Indonesia', 'Medan', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15928.06848918973!2d98.6673639!3d3.5835421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313152dac96b69%3A0x87b1248835a13c9b!2sRamenYA*21%20-%20Sun%20Plaza%20Medan!5e0!3m2!1sid!2sid!4v1684909776595!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://qrcode.higo.id/ramenya.php', '081188888308', 'RAMENYA.jpg', '2023-05-25 21:54:01', '2023-05-31 17:44:57'),
(15, 'Belviu Hotel', 'hotel', 'Penginapan', 'Jl. Dr Setiabudhi no. 35 Sukajadi, Bandung 40161 Indonesia', 'Bandung', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.06634440121!2d107.59765197513498!3d-6.882656093116284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f4843c6eaf%3A0x878ae1329d40bd79!2sBelviu%20Hotel%20Bandung!5e0!3m2!1sid!2sid!4v1685686660148!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://belviuhotel.com', '02282068338', 'belviu-hotel.jpg', '2023-06-02 06:17:56', '2023-06-02 06:17:56'),
(16, 'Rumah Tjong A Fie', 'wisata', 'Objek Wisata', 'Jl. Jend. A. Yani no. 105, Medan 20111 Indonesia', 'Medan', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.008649211607!2d98.67794087511264!3d3.5854882963886916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c989e18467%3A0xccadef8b0cc3f8be!2sTjong%20A%20Fie%20Mansion!5e0!3m2!1sid!2sid!4v1685711809865!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://tjongafiemansion.org/', '08116130388', 'tjongafie.jpg', '2023-06-02 13:18:14', '2023-06-02 13:18:14'),
(17, 'Kawah Putih (White Crater)', 'wisata', 'Objek Wisata', 'Kawah Putih, Jalan Raya Ciwidey Patengan Km 11 Lebakmuncang Ciwidey, Sugihmukti, Kec. Pasirjambu, Kabupaten Bandung, Jawa Barat 40972', 'Bandung', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.652162029509!2d107.39956472373515!3d-7.166148720312645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e688c1383dc510f%3A0xfab41bb8e4a3a83e!2sKawah%20Putih!5e0!3m2!1sid!2sid!4v1685708558199!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://kawahputihciwidey.com/', '081323739973', 'kawah putih.JPG', '2023-06-02 19:42:45', '2023-06-02 20:00:24'),
(18, 'Candi Borobudur', 'wisata', 'Objek Wisata', 'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah', 'Yogyakarta', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6974180371003!2d110.20117637374268!3d-7.6078684751985985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cf009a7d697%3A0xdd34334744dc3cb!2sCandi%20Borobudur!5e0!3m2!1sid!2sid!4v1685709025218!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://borobudurpark.com/temple/borobudur/', '+62811 2688 000', 'candi borobudur.JPG', '2023-06-02 19:43:57', '2023-06-02 19:43:57'),
(19, 'Bali Zoo', 'wisata', 'Objek Wisata', 'Jl. Raya Singapudu, Singapudu, Kec. Sukawati, Kabupaten Gianyar, Bali 80582', 'Bali', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0493025960145!2d115.26334117376038!3d-8.591258487217221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e3e4361eea5%3A0x3bf4eb36bfd7c6be!2sBali%20Zoo!5e0!3m2!1sid!2sid!4v1685709434408!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.bali-zoo.com/', '+62 878-8020-0200', 'balizoo.JPG', '2023-06-02 19:47:16', '2023-06-02 19:47:16'),
(20, 'The Haritage Palace', 'wisata', 'Objek Wisata', 'Jalan Permata Raya Dukuh Tegal Mulyo rt.002/rw.008, Honggobayan, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57169', 'Solo', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.185388996736!2d110.75224537374163!3d-7.554754374594282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1598381d4625%3A0xe517f6b0abbdd457!2sThe%20Heritage%20Palace!5e0!3m2!1sid!2sid!4v1685709694858!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.wisataheritagesolo.com/', '082233106999', 'heritage.JPG', '2023-06-02 19:48:52', '2023-06-02 19:48:52'),
(21, 'Taman Wisata Alam Gunung Pancar', 'wisata', 'Objek Wisata', 'Kampung Ciburial, Karang Tengah, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810', 'Bogor', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d724.4600933290768!2d106.90310056524419!3d-6.580552109305823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c7791e515175%3A0x3f7386a4724f7630!2sTaman%20Wisata%20Alam%20Gunung%20Pancar!5e0!3m2!1sid!2sid!4v1685709925296!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://gunungpancar.co.id/', '081285745247', 'tamanwisata.JPG', '2023-06-02 19:50:12', '2023-06-02 19:50:12'),
(22, 'Museum Tsunami aceh', 'wisata', 'Objek Wisata', 'Jl. Sultan Iskandar Muda No.3, Sukaramai, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', 'Aceh', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.1280971143888!2d95.31237767366395!3d5.548019733732631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403752049cfb9d%3A0x5e2203a9f54643f9!2sMuseum%20Tsunami%20Aceh!5e0!3m2!1sid!2sid!4v1685710342728!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://museumtsunami.acehprov.go.id/', '(0651)40774', 'museum tsunami.JPG', '2023-06-02 19:52:26', '2023-06-02 19:52:26'),
(23, 'Mikie Funland', 'wisata', 'Objek Wisata', 'Jl. Jamin Ginting, Sempajaya, Kec. Berastagi, Kabupaten Karo, Sumatera Utara 22152', 'Berastagi', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5840007526945!2d98.52317207365599!3d3.203407352819455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303102de25af7ccf%3A0xc2e5f714ad1bfaa3!2sMikie%20Funland!5e0!3m2!1sid!2sid!4v1685711992831!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.mikieholiday.com/funland/en/', '082162887888', 'mikiefunland.JPG', '2023-06-02 19:53:50', '2023-06-02 19:53:50'),
(24, 'Dunia Fantasi (DuFan)', 'wisata', 'Objek Wisata', 'Jl. Lodan Timur No.7, Ancol, Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', 'Jakarta', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.040093264176!2d106.83096277371877!3d-6.125307060057647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e1a80420c57%3A0x275b93253d2232e3!2sDunia%20Fantasi!5e0!3m2!1sid!2sid!4v1685712264551!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.ancol.com/', '62 877-8222-2422', 'dufan.JPG', '2023-06-02 19:55:35', '2023-06-02 19:55:35'),
(25, 'Trans Studio Cibubur', 'wisata', 'Objek Wisata', 'Jl. Alternatif Cibubur No.230, Harjamukti, Cimanggis, Kota Depok, Jawa Barat 16454', 'Depok', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.144948737915!2d106.89903237372248!3d-6.375281762359289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed4515088551%3A0x5e89bf86511886e2!2sTrans%20Studio%20Mall%20Cibubur!5e0!3m2!1sid!2sid!4v1685713104335!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.transstudiomallcibubur.com/', '(021)39705050', 'transstudiocibubur.JPG', '2023-06-02 19:56:34', '2023-06-02 19:56:34'),
(26, 'Desa Wisata Pujon Kidul', 'wisata', 'Objek Wisata', 'Pujon KidPujon, Krajan, Pujon Kidul, Kec. Pujon, Kabupaten Malang, Jawa Timur 65391', 'Malang', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.37561206809!2d112.4532853737469!3d-7.855700578079143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78878faaaaaaab%3A0x4be58f3cd7ca4dfe!2sDesa%20Wisata%20Pujonkidul!5e0!3m2!1sid!2sid!4v1685713468853!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://web.facebook.com/people/DESA-Wisata-Pujonkidul/100071557543399/', '0856-5118-0611', 'desapujonkidul.JPG', '2023-06-02 19:57:45', '2023-06-02 19:57:45'),
(27, 'Mozaic Restaurant Gastronomique', 'restoran', 'Kuliner', 'Jl. Raya Sanggingan, Kedewatan, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571', 'Bali', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.0466552198263!2d115.25071927375859!3d-8.49484488596931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d30b9e78c4d%3A0x4332678847f3b761!2sMozaic!5e0!3m2!1sid!2sid!4v1685729009922!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.mozaic-bali.com/', '082147235550', 'Mozaic.JPG', '2023-06-03 00:02:24', '2023-06-03 00:02:24'),
(28, 'SaigonSan Restaurant & Rooftop Terrace', 'restoran', 'Kuliner', 'Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119', 'Malang', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.213186377172!2d112.62990187374913!3d-7.976904779524318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629ba007bf6d1%3A0x3e0e091c30024a30!2sSaigonSan%20Restaurant%20%26%20Rooftop%20Terrace!5e0!3m2!1sid!2sid!4v1685729146799!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.tuguhotels.com/', '081259977618', 'saigonsan.JPG', '2023-06-03 00:03:43', '2023-06-03 00:03:43'),
(29, 'Pago restaurant', 'restoran', 'Kuliner', 'Jl. Gatot Subroto No.83, Malabar, Kec. Lengkong, Kota Bandung, Jawa Barat 40262', 'Bandung', 'Indonesia', ': <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.728663321513!2d107.62112007373119!3d-6.923004167758869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e776776abe7f%3A0x8322bfb7b4d5909d!2sPago%20Restaurant!5e0!3m2!1sid!2sid!4v1685729449338!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.thepapandayan.com/dining', '(022)7310799', 'pago.JPG', '2023-06-03 00:04:29', '2023-06-03 00:04:29'),
(30, 'Lembur kuring', 'restoran', 'Kuliner', 'Jl. T. Amir Hamzah No.85, Helvetia Tim., Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20124', 'Medan', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.635881084349!2d98.63500145541994!3d3.608305000000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e1a740728cb%3A0x1fd9340e57853a78!2sLembur%20Kuring!5e0!3m2!1sid!2sid!4v1685729670713!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.lemburkuring.com/', '(061)8465515', 'lemburkuring.JPG', '2023-06-03 00:05:14', '2023-06-03 00:05:14'),
(31, 'Animale Restaurant', 'restoran', 'Kuliner', 'MD Place 11th Floor Jl Setia Budi Selatan No 7, Setia Budi, RT 5, RT.5/RW.1, Kuningan, Setia Budi, Kuningan, Jakarta, Daerah Khusus Ibukota Jakarta 12910', 'Jakarta', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8169054.541695146!2d97.44223367018468!3d-1.2969679145991753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d90eaf5113%3A0x4f9da8c8f833f72d!2sAnimale%20Restaurant!5e0!3m2!1sid!2sid!4v1685729884881!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.animalejakarta.com/', '087772646253', 'Animale.JPG', '2023-06-03 00:05:51', '2023-06-03 00:05:51'),
(32, 'Love garden resto & cafe', 'restoran', 'Kuliner', 'Jl. Veteran No.66, RT.01/RW.01, Kb. Klp., Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16125', 'Bogor', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63413.8664931604!2d106.72039792167972!3d-6.601274700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c557db8118cf%3A0x1a9efc44c4242d8b!2sLove%20Garden%20Resto%20%26%20Cafe%20Bogor!5e0!3m2!1sid!2sid!4v1685730239364!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://lovegardenrestobgr.com/', '081246489735', 'Lovegarden.JPG', '2023-06-03 00:06:41', '2023-06-03 00:08:08'),
(33, 'de Soematra', 'restoran', 'Kuliner', 'Jl. Sumatera No.75, Gubeng, Kec. Gubeng, Surabaya, Jawa Timur 60281', 'Surabaya', 'Indonesia', 'iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.676839295505!2d112.67553452167967!3d-7.271556799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd97d105b21%3A0xf5bb90ede92d68bb!2sde%20Soematra!5e0!3m2!1sid!2sid!4v1685730360858!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.de-soematra.com/', '(031)5010666', 'desoematra.JPG', '2023-06-03 00:08:44', '2023-06-03 04:37:44'),
(34, 'Zenbu House of Mozaru', 'restoran', 'Kuliner', 'Lt. 5 No.12 Tunjungan Plaza 6, Jl. Embong Malang No.36, Kedungdoro, Kec. Tegalsari, Surabaya, Jawa Timur 60261', 'Surabaya', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63325.0766934919!2d112.66738692167968!3d-7.261623599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa315477a0fb%3A0x49b2b6587fca2355!2sZenbu%20House%20Of%20Mozaru!5e0!3m2!1sid!2sid!4v1685730500593!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.zenbu.co.id/', '(031)99246604', 'zenbu.JPG', '2023-06-03 00:09:22', '2023-06-03 00:09:22'),
(35, 'Mediterranea Restaurant by Kamil', 'restoran', 'Kuliner', 'Jl. Tirtodipuran No.24A, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143', 'Yogyakarta', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63248.79384585011!2d110.29508542167966!3d-7.784564599999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57bd1a830c51%3A0x917adbfd1657973b!2sMediterranea%20Restaurant%20by%20Kamil!5e0!3m2!1sid!2sid!4v1685731293971!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.mrbykamil.com/', '(0274)371052', 'mediterranea.JPG', '2023-06-03 00:09:58', '2023-06-03 00:09:58'),
(36, 'Seribu Rasa Summarecon bekasi', 'restoran', 'Kuliner', 'Jalan Bulevar Timur Blok VA No. 25, RT.006/RW.002, Marga Mulya, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17143', 'Bekasi', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4077459.0070436494!2d101.0887084668897!3d-3.611819236645338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698db08f4f6fc3%3A0x77e4a2cb27220ca2!2sSeribu%20Rasa%20Summarecon%20Bekasi!5e0!3m2!1sid!2sid!4v1685731912149!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://arenacorp.com/seribu-rasa/', '(021)8860296', 'seriburasa.JPG', '2023-06-03 00:10:31', '2023-06-03 00:10:31'),
(37, 'Hotel Ciputra Jakarta', 'hotel', 'Penginapan', 'Jl. Letjen S. Parman No.11, RT.11/RW.1, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470', 'Jakarta', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7226824190775!2d106.78417687371942!3d-6.167877960442425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f60404a5e893%3A0x6f9b862724e130c4!2sHotel%20Ciputra%20Jakarta!5e0!3m2!1sid!2sid!4v1685721691136!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.hotelciputra.com/', '(021)5660640', 'ciputra.JPG', '2023-06-03 00:12:29', '2023-06-03 00:12:29'),
(38, 'Royal Ambarrukmo', 'hotel', 'Penginapan', 'Jl. Laksda Adisucipto No.81, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'Yogyakarta', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0702942993867!2d110.40047607374564!3d-7.782371877216451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59e82583c5f9%3A0x8decbfc296a4eef2!2sRoyal%20Ambarrukmo%20Yogyakarta!5e0!3m2!1sid!2sid!4v1685721770984!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.royalambarrukmo.com/', '(0274)488488', 'royalambarrukmo.JPG', '2023-06-03 00:13:14', '2023-06-03 00:13:14'),
(39, 'The Rinra Hotel', 'hotel', 'Penginapan', 'Jl. Metro Tj. Bunga No.2, Panambungan, Kec. Mariso, Kota Makassar, Sulawesi Selatan 90121', 'Makassar', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6930208946605!2d119.40140077370523!3d-5.153014252075425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d45735c54dd%3A0x4cf0ebfd939c2167!2sThe%20Rinra%20Hotel%20Makassar!5e0!3m2!1sid!2sid!4v1685721983086!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://therinra.com/', '(0411)3663222', 'rinra.JPG', '2023-06-03 00:14:02', '2023-06-03 00:14:02'),
(40, 'Mikie holiday hotel & resort', 'hotel', 'Penginapan', 'Jl. Jamin Ginting, Sempajaya, Kec. Berastagi, Kabupaten Karo, Sumatera Utara 22152', 'Berastagi', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5840357742663!2d98.52273177365596!3d3.2033983528194963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031028adff333f9%3A0x409bcb36163036b6!2sMikie%20Holiday%20Resort%20%26%20Hotel!5e0!3m2!1sid!2sid!4v1685722072806!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.mikieholiday.com/', '(062)891650', 'mikieholiday.JPG', '2023-06-03 00:14:49', '2023-06-03 05:05:20'),
(41, 'Hotel Grand Savero', 'hotel', 'Penginapan', 'Jl. Raya Pajajaran No.27, RT.03/RW.08, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128', 'Bogor', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4035746376803!2d106.80210327372598!3d-6.596661264482781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8cd42017e73%3A0xc3b6f78b413fded1!2sHotel%20Grand%20Savero!5e0!3m2!1sid!2sid!4v1685726219273!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://grandsavero.com/', '(0251)8358888', 'grandsavero.JPG', '2023-06-03 00:15:34', '2023-06-03 00:15:34'),
(42, 'Savana hotel & convention', 'hotel', 'Penginapan', 'Jl. Letjen Sutoyo No.30-34, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111', 'Malang', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.354790817422!2d112.63372307374878!3d-7.962237979348171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629cc7d30b547%3A0x1eaff2d670c7fc15!2sSavana%20Hotel%20%26%20Convention!5e0!3m2!1sid!2sid!4v1685726392569!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.hotelsavana.com/', '(0341)495555', 'savanahotel.JPG', '2023-06-03 00:16:22', '2023-06-03 00:16:22'),
(43, 'The Garcia Ubud', 'hotel', 'Penginapan', 'Jl. Raya Silungan, Lodtunduh, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571', 'Bali', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.357879015425!2d115.26541067375982!3d-8.561543686830992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d5e13a1b197%3A0x9be7a743dc403a6c!2sThe%20Garcia%20Ubud!5e0!3m2!1sid!2sid!4v1685726881855!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.thegarciaubud.com/', '(0361)2013779', 'garciaubud.JPG', '2023-06-03 00:17:02', '2023-06-03 00:17:02'),
(44, 'The Gaia Hotel', 'hotel', 'Penginapan', 'Jl. Dr. Setiabudi No.430, Ledeng, Kec. Cidadap, Kota Bandung, Jawa Barat 40143', 'Bandung', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3929325796107!2d107.59815747372984!3d-6.843408266943792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e135072c50e7%3A0x189c0c83fb5b8391!2sThe%20Gaia%20Hotel%20Bandung!5e0!3m2!1sid!2sid!4v1685727079638!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.thegaiabandung.com/', '(022)20280780', 'gaia.JPG', '2023-06-03 00:17:37', '2023-06-03 00:17:37'),
(45, 'Niagara Hotel', 'hotel', 'Penginapan', 'Jl. Pembangunan No.1, Parapat, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', 'Parapat', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.514252367883!2d98.94120217365551!3d2.6615809559590224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eea4c30b77af%3A0x230acd63c8670d96!2sHotel%20Niagara%20Parapat!5e0!3m2!1sid!2sid!4v1685727202538!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.niagaralaketoba.com/', '(0625)41028', 'niagara.JPG', '2023-06-03 00:18:16', '2023-06-03 00:18:16'),
(46, 'Parkside gayo Petro', 'hotel', 'Penginapan', 'Jl. Sengeda, Nunang Antara, Kec. Bebesen, Kabupaten Aceh Tengah, Aceh 24519', 'Takengon', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2036172.0249244827!2d94.55703389374999!3d4.612185900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3038edccf24c9f2f%3A0x2b3f5320e65030a8!2sParkside%20Gayo%20Petro%20Takengon!5e0!3m2!1sid!2sid!4v1685727356663!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://parksidehotels.com/', '(0643)2626363', 'parksidegayo.JPG', '2023-06-03 00:18:52', '2023-06-03 00:18:52'),
(49, 'MIE PANGSIT AHUI', 'restoran', 'Kuliner', 'Jl. Mardeka, Bungo Timur, Kec. Ps. Muara Bungo, Kabupaten Bungo, Jambi 37211', 'Jambi', 'Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4823760883373!2d102.11555927476432!3d-1.4827480358719627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ea1ee3603908d%3A0x2bbf2924945443f5!2sMIE%20PANGSIT%20AHUI!5e0!3m2!1sid!2sid!4v1685765329674!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://gofood.co.id/id/medan/restaurant/mie-pangsit-ahui-rakyat-4e7cfff3-31fb-47bb-8de3-67c0c089cab3', '085266023500', 'WhatsApp Image 2023-06-03 at 11.06.21.jpeg', '2023-06-03 04:09:16', '2023-06-03 04:09:16'),
(50, 'LuMinor', 'hotel', 'oeasa', 'sassa', 'asa', 'sasa', 'asasa', 'sas', 'sasa', 'luminor.JPG', '2023-06-03 16:49:16', '2023-06-03 16:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `destination_features`
--

CREATE TABLE `destination_features` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `feature_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_features`
--

INSERT INTO `destination_features` (`id`, `destination_id`, `feature_id`) VALUES
(19, 13, 2),
(21, 13, 5),
(22, 13, 7),
(23, 13, 19),
(24, 13, 20),
(25, 13, 21),
(26, 13, 22),
(27, 13, 26),
(30, 15, 7),
(31, 15, 8),
(32, 15, 9),
(33, 15, 10),
(34, 15, 11),
(36, 15, 13),
(37, 15, 14),
(38, 16, 30),
(39, 16, 32),
(40, 16, 33),
(43, 17, 7),
(45, 17, 14),
(46, 17, 15),
(48, 17, 32),
(50, 18, 7),
(51, 18, 15),
(52, 18, 30),
(53, 18, 32),
(54, 18, 33),
(56, 39, 7),
(57, 39, 10),
(58, 39, 11),
(60, 39, 13),
(61, 39, 30),
(64, 39, 8),
(65, 39, 9),
(66, 39, 14),
(67, 39, 16),
(72, 37, 7),
(73, 37, 8),
(74, 37, 9),
(75, 37, 13),
(76, 37, 15),
(77, 37, 16),
(79, 37, 29),
(80, 37, 30),
(82, 38, 7),
(83, 38, 8),
(85, 38, 14),
(86, 38, 16),
(87, 38, 29),
(90, 40, 7),
(91, 40, 8),
(92, 40, 9),
(94, 40, 13),
(95, 40, 15),
(97, 40, 29),
(98, 40, 30),
(99, 40, 31),
(102, 41, 7),
(103, 41, 8),
(104, 41, 9),
(105, 41, 11),
(107, 41, 13),
(108, 41, 15),
(109, 41, 16),
(110, 41, 29),
(111, 41, 30),
(112, 41, 31),
(114, 42, 7),
(115, 42, 9),
(116, 42, 10),
(117, 42, 11),
(118, 42, 14),
(119, 42, 29),
(120, 42, 30),
(123, 43, 7),
(124, 43, 8),
(125, 43, 9),
(126, 43, 10),
(127, 43, 11),
(128, 43, 12),
(129, 43, 13),
(130, 43, 14),
(131, 43, 15),
(132, 43, 16),
(134, 43, 29),
(135, 43, 30),
(136, 43, 31),
(137, 49, 2),
(138, 49, 5),
(139, 49, 18),
(140, 49, 19),
(141, 49, 21),
(142, 49, 22),
(143, 49, 27),
(145, 19, 7),
(146, 19, 15),
(147, 19, 16),
(149, 19, 29),
(150, 19, 30),
(151, 19, 31),
(152, 19, 32),
(154, 20, 30),
(155, 20, 32),
(156, 20, 33),
(157, 21, 33),
(159, 21, 32),
(161, 22, 30),
(162, 22, 31),
(163, 22, 32),
(164, 22, 33),
(165, 23, 6),
(166, 23, 28),
(167, 23, 29),
(168, 23, 30),
(169, 23, 31),
(170, 23, 32),
(171, 24, 6),
(172, 24, 15),
(173, 24, 28),
(174, 24, 29),
(175, 24, 30),
(176, 24, 31),
(177, 24, 32),
(178, 25, 6),
(179, 25, 28),
(180, 25, 29),
(181, 25, 30),
(182, 25, 31),
(183, 26, 6),
(184, 26, 29),
(185, 26, 30),
(186, 26, 31),
(187, 27, 2),
(188, 27, 6),
(189, 27, 7),
(190, 27, 14),
(191, 27, 15),
(193, 27, 20),
(194, 27, 21),
(195, 27, 22),
(196, 27, 23),
(197, 27, 30),
(198, 27, 31),
(199, 28, 2),
(200, 28, 5),
(201, 28, 6),
(202, 28, 7),
(203, 28, 17),
(204, 28, 19),
(205, 28, 20),
(206, 28, 21),
(207, 28, 22),
(208, 28, 30),
(209, 29, 2),
(210, 29, 5),
(211, 29, 6),
(212, 29, 7),
(213, 29, 14),
(214, 29, 17),
(215, 29, 19),
(216, 29, 20),
(217, 29, 21),
(218, 29, 22),
(219, 29, 30),
(220, 29, 31),
(221, 30, 2),
(222, 30, 5),
(223, 30, 6),
(224, 30, 7),
(225, 30, 14),
(226, 30, 16),
(227, 30, 17),
(228, 30, 19),
(229, 30, 20),
(230, 30, 21),
(231, 30, 22),
(232, 30, 23),
(233, 30, 30),
(234, 30, 31),
(235, 31, 2),
(236, 31, 5),
(237, 31, 6),
(238, 31, 7),
(239, 31, 14),
(240, 31, 17),
(241, 31, 19),
(242, 31, 20),
(243, 31, 21),
(244, 31, 22),
(245, 31, 23),
(246, 31, 26),
(247, 31, 27),
(248, 31, 30),
(249, 31, 31),
(250, 32, 2),
(251, 32, 5),
(252, 32, 6),
(253, 32, 7),
(254, 32, 14),
(255, 32, 19),
(256, 32, 20),
(257, 32, 21),
(258, 32, 22),
(259, 32, 23),
(260, 32, 29),
(261, 32, 30),
(262, 32, 31),
(263, 33, 2),
(264, 33, 5),
(265, 33, 6),
(266, 33, 7),
(267, 33, 14),
(268, 33, 19),
(269, 33, 20),
(270, 33, 21),
(271, 33, 22),
(272, 33, 23),
(273, 33, 29),
(274, 33, 30),
(275, 33, 31),
(276, 34, 2),
(277, 34, 5),
(278, 34, 6),
(279, 34, 7),
(280, 34, 14),
(281, 34, 17),
(282, 34, 19),
(283, 34, 20),
(284, 34, 21),
(285, 34, 22),
(286, 34, 23),
(287, 34, 30),
(288, 34, 31),
(289, 35, 2),
(290, 35, 5),
(291, 35, 6),
(292, 35, 7),
(293, 35, 14),
(294, 35, 19),
(295, 35, 20),
(296, 35, 21),
(297, 35, 22),
(298, 35, 25),
(299, 35, 30),
(300, 35, 31),
(301, 36, 2),
(302, 36, 5),
(303, 36, 6),
(304, 36, 7),
(305, 36, 14),
(306, 36, 19),
(307, 36, 20),
(308, 36, 21),
(309, 36, 25),
(310, 36, 30),
(311, 36, 31),
(315, 50, 8),
(316, 50, 9),
(318, 50, 11),
(319, 50, 13),
(320, 50, 14),
(321, 50, 29),
(322, 50, 30),
(323, 50, 31),
(325, 50, 16),
(326, 50, 28),
(328, 50, 7);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `destination_id`, `created_at`, `updated_at`) VALUES
(2, 10, 13, '2023-06-01 15:53:49', '2023-06-01 15:53:49'),
(4, 14, 15, '2023-06-02 10:24:43', '2023-06-02 10:24:43'),
(5, 14, 13, '2023-06-02 15:46:00', '2023-06-02 15:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `feature_detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('restoran','hotel','wisata','semua kategori') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'semua kategori'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_detail`, `category`) VALUES
(2, 'Bawa Pulang', 'restoran'),
(3, 'Kolam Renang', 'hotel'),
(5, 'Makanan Cepat Saji', 'restoran'),
(6, 'Area Parkir', 'semua kategori'),
(7, 'Wi-Fi', 'semua kategori'),
(8, 'Gym', 'hotel'),
(9, 'AC', 'hotel'),
(10, 'TV', 'hotel'),
(11, 'Laundry', 'hotel'),
(12, 'Transportasi', 'semua kategori'),
(13, 'Spa', 'hotel'),
(14, 'Reservasi', 'semua kategori'),
(15, 'Pertunjukan Musik', 'semua kategori'),
(16, 'Ruang Merokok', 'semua kategori'),
(17, 'Ruang Meeting', 'restoran'),
(18, 'Sarapan', 'restoran'),
(19, 'Makan Siang', 'restoran'),
(20, 'Makan Malam', 'restoran'),
(21, 'Halal', 'restoran'),
(22, 'Masakan Asia', 'restoran'),
(23, 'Masakan Indonesia', 'restoran'),
(24, 'Masakan Korea', 'restoran'),
(25, 'Masakan Eropa', 'restoran'),
(26, 'Masakan Jepang', 'restoran'),
(27, 'Masakan China', 'restoran'),
(28, 'Area Bermain', 'semua kategori'),
(29, 'Ruang Santai', 'semua kategori'),
(30, 'Toilet', 'semua kategori'),
(31, 'Tempat Ibadah', 'semua kategori'),
(32, 'Tempat Pembelian Souvenir', 'wisata'),
(33, 'Pemandu Wisata', 'wisata');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 7, 'Petualangan Tak Terlupakan di Medan: Menemukan Pesona Budaya dan Kuliner Lokal', 'Saya sangat terkesan dengan perjalanan saya ke Medan. Saya menjelajahi pasar tradisional, mencoba makanan lokal yang lezat, dan terpesona oleh keindahan arsitektur bangunan bersejarah. Pengalaman ini benar-benar memperkaya pengetahuan saya tentang budaya dan kuliner lokal.', '2023-05-30 15:06:39', '2023-05-30 15:06:39'),
(3, 7, 'Keseruan Bersepeda di Medan: Menjelajahi Wisata Kota dengan Cara yang Unik', 'Saya memutuskan untuk menjelajahi Medan dengan bersepeda, dan ternyata itu adalah pilihan yang tepat! Saya dapat menjelajahi kota dengan lebih dekat, melewati jalan-jalan kecil yang indah, dan menemukan tempat-tempat tersembunyi yang tidak terlalu sering dikunjungi oleh wisatawan. Rasanya sangat menyenangkan dan sehat!', '2023-05-30 15:06:39', '2023-05-30 15:06:39'),
(5, 7, 'Menyusuri Jejak Sejarah di Medan: Mengunjungi Situs Bersejarah yang Mengesankan', 'Sebagai penggemar sejarah, saya sangat terpukau dengan kunjungan saya ke Medan. Saya mengunjungi Istana Maimun yang megah, Masjid Raya Medan yang indah, dan berjalan-jalan di sekitar kawasan Kota Tua yang sarat dengan cerita masa lalu. Saya merasa seperti terhubung dengan sejarah kota dan terinspirasi oleh warisan budaya yang ada.', '2023-05-30 15:06:39', '2023-05-30 15:06:39'),
(16, 10, 'Menyelami Keajaiban Bawah Laut Indonesia', 'Forum ini ditujukan untuk berbagi pengalaman dan informasi tentang tempat menyelam terbaik di Indonesia. Diskusikan spot-spot menarik, kehidupan laut yang memukau, dan tips keamanan selama penyelaman.', '2023-05-31 20:04:31', '2023-05-31 20:04:31'),
(18, 12, 'Rekomendasi Destinasi Pantai Tersembunyi di Indonesia', 'Halo semua! Saya ingin berbagi tentang destinasi pantai tersembunyi di Indonesia yang belum banyak diketahui orang. Salah satunya adalah Pantai Wawo, terletak di pulau terpencil di Nusa Tenggara Timur. Pantai ini memiliki pasir putih yang indah dan air jernih. Apakah ada rekomendasi pantai tersembunyi lainnya yang bisa kamu bagikan?', '2023-06-01 22:23:52', '2023-06-01 22:23:52'),
(19, 12, 'Pengalaman Mendaki Gunung Rinjani, Lombok', 'Hai semua! Baru saja selesai mendaki Gunung Rinjani di Lombok, dan pengalaman ini sungguh menakjubkan! Panorama puncak gunungnya luar biasa, terutama saat matahari terbit. Tapi perlu diingat, perjalanan ini cukup menantang, jadi persiapkan kondisi fisik dan perlengkapan dengan baik sebelum mendaki. Ada yang pernah mendaki Rinjani juga? Bagikan pengalamanmu di sini!', '2023-06-01 22:25:22', '2023-06-01 22:25:22'),
(20, 12, 'Mencari Kuliner Khas Jogja yang Wajib Dicoba', 'Hai teman-teman! Ayo kita berbagi tentang kuliner khas Jogja yang patut dicoba. Salah satu favorit saya adalah Gudeg, makanan khas Jogja yang terbuat dari nangka muda. Rasanya manis dan gurih, sangat lezat! Selain itu, jangan lewatkan juga bakpia, makanan ringan yang bisa kamu bawa pulang sebagai oleh-oleh. Bagikan rekomendasi kuliner khas Jogja favoritmu di sini!', '2023-06-01 22:25:49', '2023-06-01 22:25:49'),
(21, 12, 'Tips Backpacking Murah Meriah di Bali', 'Halo semua! Bagi yang ingin liburan hemat di Bali, saya punya beberapa tips backpacking murah meriah yang bisa kamu coba. Pertama, pilihlah penginapan sederhana seperti losmen atau hostel untuk menghemat biaya. Kedua, jelajahi pantai-pantai tersembunyi dan wisata alam gratis di Bali. Ketiga, coba makan di warung lokal untuk mendapatkan pengalaman kuliner yang autentik dengan harga terjangkau. Bagikan juga tips backpacking murah meriah favoritmu di Bali!', '2023-06-01 22:26:09', '2023-06-01 22:26:09'),
(22, 12, 'Pengalaman Snorkeling di Raja Ampat', 'Hai semua! Baru saja pulang dari Raja Ampat dan ingin berbagi pengalaman snorkeling yang menakjubkan di sana. Terumbu karangnya begitu indah dan penuh dengan kehidupan laut yang beragam. Saya sangat terkesan dengan warna-warni ikan-ikan dan terumbu karang yang masih sangat alami. Bagi yang belum pernah ke Raja Ampat, saya sangat merekomendasikan untuk mencoba snorkeling di sana!', '2023-06-01 22:26:24', '2023-06-01 22:26:24'),
(23, 13, 'Rekomendasi Wisata Kuliner di Medan', 'Hai semuanya! Saya akan mengunjungi Medan dalam waktu dekat dan sangat tertarik mencoba kuliner lokal yang terkenal di sana. Apakah ada rekomendasi tempat makan atau makanan khas Medan yang wajib dicoba? Saya ingin mencicipi hidangan lezat selama kunjungan saya!', '2023-06-01 22:39:12', '2023-06-01 22:39:12'),
(24, 13, 'Pengalaman Mengunjungi Danau Toba, Surga Tersembunyi di Sumatera Utara', 'Hai teman-teman! Saya baru saja pulang dari perjalanan mengunjungi Danau Toba di Sumatera Utara, dan pengalaman ini benar-benar menakjubkan. Danau terbesar di Indonesia ini menawarkan pemandangan yang memukau dengan pulau Samosir di tengahnya. Jika kamu pernah mengunjungi Danau Toba, bagikan pengalamanmu dan rekomendasi tempat menarik di sekitarnya di sini!', '2023-06-01 22:39:28', '2023-06-01 22:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `partner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner`, `website`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Agoda', 'https://www.agoda.com/', 'agoda.png', '2023-05-02 16:38:59', '2023-06-03 01:14:22'),
(2, 'Booking.com', 'https://www.booking.com/', 'booking_com.png', '2023-05-01 17:00:00', '2023-06-01 22:50:46'),
(3, 'Trip.com', 'https://id.trip.com/?locale=id_id', 'trip_com.png', '2023-01-02 16:39:05', '2023-06-01 22:50:21'),
(9, 'Hotels.com', 'https://www.hotels.com', 'hotels_com.png', '2023-06-02 15:40:30', '2023-06-02 15:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `destination_id`, `photo`, `content`, `created_at`, `updated_at`) VALUES
(9, 11, 15, 'bel1.jpg', 'Pengalaman yang menarik', '2023-06-02 19:24:47', '2023-06-02 19:24:47'),
(10, 11, 15, '6970f035cb524fd6b7b97f55d3910dd6.jpg', 'Tidak bisa berkata kata', '2023-06-02 19:27:59', '2023-06-02 19:27:59'),
(11, 10, 15, 'Instafest.png', 'My Fest', '2023-06-03 01:29:37', '2023-06-03 01:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `partner_id` bigint UNSIGNED NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `destination_id`, `partner_id`, `price`, `created_at`, `updated_at`) VALUES
(5, 15, 1, 1700000, NULL, NULL),
(6, 15, 2, 2000000, NULL, NULL),
(10, 15, 3, 1800000, '2023-06-02 08:38:25', '2023-06-02 08:38:25'),
(17, 39, 1, 1000000, '2023-06-03 02:11:28', '2023-06-03 02:11:28'),
(18, 39, 2, 1400000, '2023-06-03 02:26:38', '2023-06-03 02:26:38'),
(19, 39, 3, 1300000, '2023-06-03 02:26:38', '2023-06-03 02:26:38'),
(20, 39, 9, 1200000, '2023-06-03 02:26:38', '2023-06-03 02:26:38'),
(21, 37, 1, 1300000, '2023-06-03 02:37:22', '2023-06-03 02:37:22'),
(22, 37, 2, 1300000, '2023-06-03 02:37:22', '2023-06-03 02:37:22'),
(23, 37, 3, 1300000, '2023-06-03 02:37:22', '2023-06-03 02:37:22'),
(24, 37, 9, 1300000, '2023-06-03 02:37:22', '2023-06-03 02:37:22'),
(29, 38, 1, 1700000, '2023-06-03 03:11:51', '2023-06-03 03:11:51'),
(30, 38, 2, 1700000, '2023-06-03 03:11:51', '2023-06-03 03:11:51'),
(31, 38, 3, 1700000, '2023-06-03 03:11:51', '2023-06-03 03:11:51'),
(32, 38, 9, 1700000, '2023-06-03 03:11:51', '2023-06-03 03:11:51'),
(36, 40, 1, 700000, '2023-06-03 03:13:49', '2023-06-03 03:13:49'),
(37, 40, 2, 800000, '2023-06-03 03:13:49', '2023-06-03 03:13:49'),
(38, 40, 3, 780000, '2023-06-03 03:13:49', '2023-06-03 03:13:49'),
(39, 40, 9, 810000, '2023-06-03 03:13:49', '2023-06-03 03:13:49'),
(40, 41, 1, 710000, '2023-06-03 03:29:13', '2023-06-03 03:29:13'),
(41, 41, 2, 741000, '2023-06-03 03:29:13', '2023-06-03 03:29:13'),
(42, 41, 3, 723000, '2023-06-03 03:29:13', '2023-06-03 03:29:13'),
(43, 41, 9, 730000, '2023-06-03 03:29:13', '2023-06-03 03:29:13'),
(44, 42, 1, 560000, '2023-06-03 03:57:55', '2023-06-03 03:57:55'),
(45, 42, 2, 540000, '2023-06-03 03:57:55', '2023-06-03 03:57:55'),
(46, 42, 3, 530000, '2023-06-03 03:57:55', '2023-06-03 03:57:55'),
(47, 42, 9, 520000, '2023-06-03 03:57:55', '2023-06-03 03:57:55'),
(48, 43, 1, 1780000, '2023-06-03 04:03:27', '2023-06-03 04:03:27'),
(49, 43, 2, 1830000, '2023-06-03 04:03:27', '2023-06-03 04:03:27'),
(50, 43, 3, 148000, '2023-06-03 04:03:27', '2023-06-03 04:03:27'),
(51, 43, 9, 154000, '2023-06-03 04:03:27', '2023-06-03 04:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint UNSIGNED NOT NULL,
  `rating_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating_type`, `value`) VALUES
(1, 'sangatBuruk', 1),
(2, 'buruk', 2),
(3, 'biasa', 3),
(4, 'sangatBagus', 4),
(5, 'luarBiasa', 5),
(6, 'npRating', 0);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint UNSIGNED NOT NULL,
  `forum_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `forum_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(14, 3, 7, 'Benar Sekali!', '2022-12-12 17:00:00', NULL),
(18, 5, 7, 'Luar Biasa!', '0000-00-00 00:00:00', NULL),
(19, 1, 7, 'Informasi yang sangat berguna!', '0000-00-00 00:00:00', NULL),
(43, 18, 11, 'Terima kasih atas rekomendasinya! Aku sudah pernah ke Pantai Wawo dan memang benar-benar surga tersembunyi. Sekarang aku punya daftar baru tempat yang ingin kucoba kunjungi!', '2023-06-01 22:29:50', NULL),
(44, 19, 11, 'Saya juga baru saja mendaki Rinjani! Benar-benar petualangan yang tak terlupakan. Pemandangan dari puncaknya sungguh memukau. Tapi, treknya memang cukup sulit, jadi sebaiknya siapkan kondisi fisik yang baik sebelum mendaki.', '2023-06-01 22:30:19', NULL),
(45, 20, 11, 'Gudeg memang juara di Jogja! Tapi jangan lupa mencoba juga nasi langgi, makanan khas Jogja yang terdiri dari nasi, ayam suwir, sambal goreng krecek, dan telur asin. Rasanya lezat banget!', '2023-06-01 22:30:35', NULL),
(46, 21, 11, 'Tips lainnya untuk backpacking di Bali adalah mencari penginapan di daerah yang lebih jauh dari pantai utama seperti Kuta atau Seminyak. Harganya biasanya lebih terjangkau dan kamu bisa merasakan suasana yang lebih tenang.', '2023-06-01 22:30:49', NULL),
(47, 22, 11, 'Raja Ampat adalah surga bagi para pecinta snorkeling dan diving. Aku sangat terpesona dengan keindahan terumbu karang dan keragaman hayati laut di sana. Inilah salah satu destinasi terbaik untuk snorkeling!', '2023-06-01 22:30:56', NULL),
(48, 18, 10, 'Aku juga punya rekomendasi destinasi pantai tersembunyi lainnya, yaitu Pantai Tidung di Kepulauan Seribu. Pasir putih, air jernih, dan hamparan terumbu karang yang indah membuatnya sangat layak untuk dikunjungi!', '2023-06-01 22:31:46', NULL),
(49, 19, 10, 'Aku juga mendaki Rinjani beberapa bulan lalu. Ini adalah pengalaman yang menguji kekuatan dan ketahanan fisikku, tetapi semua itu terbayar dengan pemandangan yang luar biasa di puncaknya. Sangat direkomendasikan untuk para pecinta alam dan pendaki yang berpengalaman.', '2023-06-01 22:32:01', NULL),
(50, 20, 10, 'Ada satu tempat di Jogja yang menjual sate klathak yang luar biasa. Daging ayam atau sapi yang dibumbui dengan rempah-rempah khas, kemudian dibakar hingga harum dan gurih. Jangan lewatkan untuk mencicipinya!', '2023-06-01 22:32:10', NULL),
(51, 21, 10, 'Saya juga merekomendasikan untuk mencoba makan di warung makan tradisional di Bali. Harganya lebih murah dan kamu bisa mencicipi masakan lokal yang autentik. Coba saja sate lilit atau nasi campur Bali, pasti puas!', '2023-06-01 22:32:24', NULL),
(52, 22, 10, 'Aku setuju! Saya baru saja pulang dari Raja Ampat dan tidak bisa berhenti memuji keindahan bawah lautnya. Jika kamu memiliki kesempatan, cobalah juga menjelajahi spot snorkeling di Wayag, pemandangannya spektakuler!', '2023-06-01 22:32:33', NULL),
(53, 23, 11, 'Saya juga menunggu rekomendasi dari pengguna lain', '2023-06-01 22:57:00', NULL),
(54, 1, 14, 'Informasi yang sangat bagus', '2023-06-02 12:54:45', NULL),
(55, 24, 14, 'Ini adalah pengalaman yang harus dibagikan', '2023-06-02 13:47:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trip_destination_details`
--

CREATE TABLE `trip_destination_details` (
  `id` bigint UNSIGNED NOT NULL,
  `trip_plan_id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `trip_detail_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

CREATE TABLE `trip_details` (
  `id` bigint UNSIGNED NOT NULL,
  `trip_plan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_details`
--

INSERT INTO `trip_details` (`id`, `trip_plan_id`, `created_at`, `updated_at`) VALUES
(3, 3, '2023-06-01 07:01:10', '2023-06-01 07:01:10'),
(4, 3, '2023-06-01 07:01:10', '2023-06-01 07:01:10'),
(5, 4, '2023-06-01 12:37:15', '2023-06-01 12:37:15'),
(6, 4, '2023-06-01 12:37:15', '2023-06-01 12:37:15'),
(7, 4, '2023-06-01 12:37:15', '2023-06-01 12:37:15'),
(8, 4, '2023-06-01 12:37:15', '2023-06-01 12:37:15'),
(9, 4, '2023-06-01 12:37:15', '2023-06-01 12:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `trip_plans`
--

CREATE TABLE `trip_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `trip_type` enum('pribadi','publik') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_plans`
--

INSERT INTO `trip_plans` (`id`, `user_id`, `trip_type`, `trip_name`, `trip_info`, `days`, `created_at`, `updated_at`) VALUES
(3, 10, 'pribadi', 'Medan', 'Perjalanan saya di Medan', 2, '2023-06-01 07:01:10', '2023-06-01 07:01:10'),
(4, 10, 'publik', 'SBD', 'SBD RESEARCH', 5, '2023-06-01 12:37:15', '2023-06-01 12:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `profile_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role`, `email`, `email_verified_at`, `password`, `firstName`, `lastName`, `username`, `address`, `city`, `province`, `post_code`, `country`, `website`, `about`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'admin', 'raihanlubis184@gmail.com', '2023-05-22 15:42:55', '$2y$10$JOOpT3rzgBurBsSjKtu1fOY19/OOA5o1MsUXOY2GMUYOQYDnYO7mC', 'Raihan', 'Abdillah', 'rrreyabd', 'Hannam-dong, í•œë‚¨ë™', 'Seoul', 'Yongsan-gu', '04340', 'Korea Selatan', 'https://github.com/rrreyabd', 'You know who I am.', 'dean.jpg', 'RogBEeZwUl02oD4Y4EVsZfF4bChsMbRTW8dKRqp4lM84jguybm8IXCE91dFB', '2023-05-22 08:41:53', '2023-06-03 00:00:47'),
(10, 'user', 'raihanabd184@gmail.com', '2023-06-01 20:01:26', '$2y$10$JdEQTq9gGZHViJHQf0XB2uFbsfvbvu3pfWfnHS04NZgRHMegED.7S', 'Rey', 'Abd', 'hoonie', NULL, 'Surabaya', 'Jawa Barat', NULL, 'Indonesia', 'https://www.google.com', 'You know nothing', '2f2f681e6b6c5f2c5b4b9db9af2abaec.jpg', '1MjD6ZDM9oz76wFMxQ1UislmgvcpKFSDWycycJtasAxiR8AglUXXUZbScE80', '2023-05-30 09:38:45', '2023-06-03 01:31:09'),
(11, 'user', 'goyounjung@gmail.com', '2023-06-01 04:49:13', '$2y$10$N8SeXYnb39AkgGOwCKVcxu7jfHDzj5TVQ/ejk.Mr/DDaAxhaG3gZm', 'Younjung', 'Go', 'goyounjung', 'Gangnam-gu, Nonhyeon-dong 123-4, Seoul, Korea Selatan', 'Seoul', 'Hannam-dong, í•œë‚¨ë™', '06024', 'Korea Selatan', 'https://www.instagram.com/goyounjung/', 'á„€á…©á„‹á…²á†«á„Œá…¥á†¼', 'gyj.jpg', NULL, '2023-06-01 21:48:33', '2023-06-01 22:55:31'),
(12, 'user', 'davidhartono@gmail.com', '2023-06-01 04:50:37', '$2y$10$21YfvXwJKTXMHlNe.kWjMuXpO4MjzqwWZr7.jG17e6D510NS33caS', 'David', 'Hartono', 'davidhartono', 'Jalan Gatot Subroto', 'Medan', 'Sumatera Utara', '20123', 'Indonesia', 'https://instagram.com/hartonodavid', 'deive', 'gd.jpg', NULL, '2023-06-01 21:50:29', '2023-06-01 21:54:09'),
(13, 'user', 'rkhairu@gmail.com', '2023-06-01 05:35:23', '$2y$10$VZDxpFuAiqUL9NgUYyJ6QOXUD7xnnxMiAa771ymEnDLNXY1iPvQWC', 'Raden', 'Khairu', 'rkhairu', NULL, 'Jakarta', 'DKI Jakarta', NULL, 'Indonesia', 'https://linktr.ee/rkhairu', 'You know nothing', 'tomholland.jpg', NULL, '2023-06-01 22:35:17', '2023-06-01 22:38:18'),
(14, 'admin', 'julyantanggara@gmail.com', '2023-06-01 13:09:46', '$2y$10$e7JPo5hG3zwnvGOurLHhtuWq0tm/EtF.2tlfong8xqrEvv5dowGI2', 'Julyant', 'Anggara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile1.jpg', NULL, '2023-06-02 06:09:38', '2023-06-02 06:09:38');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_features`
--
ALTER TABLE `destination_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_features_destination_id_foreign` (`destination_id`),
  ADD KEY `restaurant_features_feature_id_foreign` (`feature_id`);

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
-- Indexes for table `trip_destination_details`
--
ALTER TABLE `trip_destination_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_destination_details_destination_id_foreign` (`destination_id`),
  ADD KEY `trip_destination_details_trip_detail_id_foreign` (`trip_detail_id`),
  ADD KEY `trip_plan_id` (`trip_plan_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `comment_photos`
--
ALTER TABLE `comment_photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `destination_features`
--
ALTER TABLE `destination_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `trip_destination_details`
--
ALTER TABLE `trip_destination_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trip_details`
--
ALTER TABLE `trip_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `trip_plans`
--
ALTER TABLE `trip_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Constraints for table `destination_features`
--
ALTER TABLE `destination_features`
  ADD CONSTRAINT `restaurant_features_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `restaurant_features_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`);

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
-- Constraints for table `trip_destination_details`
--
ALTER TABLE `trip_destination_details`
  ADD CONSTRAINT `trip_destination_details_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `trip_destination_details_ibfk_1` FOREIGN KEY (`trip_plan_id`) REFERENCES `trip_plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trip_destination_details_trip_detail_id_foreign` FOREIGN KEY (`trip_detail_id`) REFERENCES `trip_details` (`id`);

--
-- Constraints for table `trip_details`
--
ALTER TABLE `trip_details`
  ADD CONSTRAINT `trip_details_trip_plan_id_foreign` FOREIGN KEY (`trip_plan_id`) REFERENCES `trip_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_plans`
--
ALTER TABLE `trip_plans`
  ADD CONSTRAINT `trip_plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
