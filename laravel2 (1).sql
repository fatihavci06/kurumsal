-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Eyl 2021, 18:05:00
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happyclients` int(11) DEFAULT NULL,
  `projects` int(11) DEFAULT NULL,
  `workers` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `title2`, `content2`, `title3`, `content3`, `title4`, `content4`, `title5`, `content5`, `happyclients`, `projects`, `workers`, `created_at`, `updated_at`) VALUES
(1, '1Hakkımızda', '1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit', '2Başlık2', '2Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', '3Corporis voluptates sit', '3Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', '4Corporis voluptates sit', '4Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', '5Corporis voluptates sit', '5Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', 1234, 12, 66, '2021-08-26 21:00:00', '2021-08-28 11:59:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aciklama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `adres`, `email1`, `email2`, `telefon1`, `telefon2`, `aciklama`, `created_at`, `updated_at`) VALUES
(1, 'Cengizhan mahallesi 850.sokak 4/9 mamak', '66fatihavci@gmail.com', '66fatihavci2@gmail.com', '05531105200', '05531105201', 'Şirketimize mutluluk verdiniz.', '2021-08-19 21:00:00', '2021-09-04 14:56:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimposts`
--

DROP TABLE IF EXISTS `iletisimposts`;
CREATE TABLE IF NOT EXISTS `iletisimposts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durum` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `iletisimposts`
--

INSERT INTO `iletisimposts` (`id`, `name`, `email`, `subject`, `message`, `durum`, `created_at`, `updated_at`) VALUES
(1, 'fatih', '66fatihavci@gmail.com', 'ad', 'dasda', 2, '2021-08-26 14:28:27', '2021-09-04 16:41:35'),
(3, 'fatih2', '66fatihavci@gmail.com', 'ad', 'dasda', 3, '2021-08-26 14:28:50', '2021-09-04 16:45:45'),
(4, 'fatih2', '66fatihavci@gmail.com', 'ad', 'dasda', 2, '2021-08-26 14:29:05', '2021-09-04 16:40:24'),
(5, 'fatih', '66fatihavci@gmail.com', '4', 'QSas', 1, '2021-08-26 14:30:13', '2021-08-26 14:30:13'),
(6, 'fatih', '66fatihavci@gmail.com', '\' ve \"Lorem Ipsum, dizgi ve baskı endüstrisinde ku', 'adaasdasd', 1, '2021-08-26 14:33:23', '2021-08-26 14:33:23'),
(7, 'fatih', '66fatihavci@gmail.com', 'dadada', 'adadad', 1, '2021-08-26 14:39:44', '2021-08-26 14:39:44'),
(8, 'fatih2213413', '66fatihavci@gmail.com', '213123122', '3123', 1, '2021-08-26 14:42:45', '2021-08-26 14:42:45'),
(9, 'post', 'post@test.com', 'post', 'post', 1, '2021-08-26 14:42:57', '2021-08-26 14:42:57'),
(10, 'fatih', '66fatihavci@gmail.com', 'adadadasd', 'adadadads', 1, '2021-08-27 06:37:41', '2021-08-27 06:37:41'),
(11, 'asdsa', NULL, NULL, NULL, 1, '2021-08-27 06:38:05', '2021-08-27 06:38:05'),
(12, 'adasdada', NULL, NULL, NULL, 1, '2021-08-27 06:38:28', '2021-08-27 06:38:28'),
(13, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-08-27 06:39:41', '2021-08-27 06:39:41'),
(14, NULL, NULL, NULL, NULL, 1, '2021-08-27 06:46:29', '2021-08-27 06:46:29'),
(15, NULL, NULL, NULL, NULL, 1, '2021-08-27 06:46:59', '2021-08-27 06:46:59'),
(16, NULL, NULL, NULL, NULL, 1, '2021-08-27 06:47:00', '2021-08-27 06:47:00'),
(17, 'dadada', NULL, NULL, NULL, 1, '2021-08-27 07:09:44', '2021-08-27 07:09:44'),
(18, '142342', '66fatihavci@gmail.com', '2342342', '243242', 1, '2021-08-27 07:38:28', '2021-08-27 07:38:28'),
(19, '12331231', '3123131', '13131', NULL, 1, '2021-09-05 14:21:56', '2021-09-05 14:21:56'),
(20, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:43:46', '2021-09-05 14:43:46'),
(21, 'dasda', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:44:37', '2021-09-05 14:44:37'),
(22, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:12', '2021-09-05 14:51:12'),
(23, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:12', '2021-09-05 14:51:12'),
(24, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:13', '2021-09-05 14:51:13'),
(25, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:13', '2021-09-05 14:51:13'),
(26, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:13', '2021-09-05 14:51:13'),
(27, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:13', '2021-09-05 14:51:13'),
(28, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:14', '2021-09-05 14:51:14'),
(29, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:14', '2021-09-05 14:51:14'),
(30, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:14', '2021-09-05 14:51:14'),
(31, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:14', '2021-09-05 14:51:14'),
(32, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:27', '2021-09-05 14:51:27'),
(33, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:51:34', '2021-09-05 14:51:34'),
(34, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:19', '2021-09-05 14:52:19'),
(35, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:21', '2021-09-05 14:52:21'),
(36, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:22', '2021-09-05 14:52:22'),
(37, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:22', '2021-09-05 14:52:22'),
(38, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:23', '2021-09-05 14:52:23'),
(39, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:23', '2021-09-05 14:52:23'),
(40, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:24', '2021-09-05 14:52:24'),
(41, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:24', '2021-09-05 14:52:24'),
(42, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:25', '2021-09-05 14:52:25'),
(43, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:32', '2021-09-05 14:52:32'),
(44, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:44', '2021-09-05 14:52:44'),
(45, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:46', '2021-09-05 14:52:46'),
(46, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:46', '2021-09-05 14:52:46'),
(47, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:46', '2021-09-05 14:52:46'),
(48, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:47', '2021-09-05 14:52:47'),
(49, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:52:47', '2021-09-05 14:52:47'),
(50, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:53:47', '2021-09-05 14:53:47'),
(51, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:53:52', '2021-09-05 14:53:52'),
(52, 'adasdasd', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:54:01', '2021-09-05 14:54:01'),
(53, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 14:55:07', '2021-09-05 14:55:07'),
(54, 'Paragon Teknoloji', 'paragonteknoloi@gmail.com', NULL, NULL, 1, '2021-09-05 14:56:28', '2021-09-05 14:56:28'),
(55, 'fatih', 'adsa', 'dasdasdad', NULL, 1, '2021-09-05 14:56:38', '2021-09-05 14:56:38'),
(56, 'fatih', '66fatihavci@gmail.com', '\' ve \"Lorem Ipsum, dizgi ve baskı endüstrisinde ku', NULL, 1, '2021-09-05 14:57:19', '2021-09-05 14:57:19'),
(57, 'Fatih AVCI', '66fatihavci3@gmail.com', '5', 'asadadasda', 1, '2021-09-05 14:57:45', '2021-09-05 14:57:45'),
(58, 'fatih', '66fatihavci@gmail.com', NULL, NULL, 1, '2021-09-05 15:30:53', '2021-09-05 15:30:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markas`
--

DROP TABLE IF EXISTS `markas`;
CREATE TABLE IF NOT EXISTS `markas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `markas`
--

INSERT INTO `markas` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(9, 'testett', '/uploads/testett.png', '2021-08-31 07:01:08', '2021-08-31 07:34:14'),
(3, '2', '/uploads/clients/client-2.png', '2021-08-26 21:00:00', '2021-08-26 21:00:00'),
(4, '3', '/uploads/clients/client-3.png', '2021-08-26 21:00:00', '2021-08-26 21:00:00'),
(5, '4', '/uploads/clients/client-4.png', '2021-08-26 21:00:00', '2021-08-26 21:00:00'),
(6, '5', '/uploads/clients/client-5.png', '2021-08-26 21:00:00', '2021-08-26 21:00:00'),
(8, '7', '/uploads/clients/client-7.png', '2021-08-26 21:00:00', '2021-08-26 21:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_08_19_163425_contact', 1),
(3, '2021_08_20_070108_service', 1),
(4, '2021_08_26_155839_iletisimpost', 2),
(5, '2021_08_27_101352_team', 3),
(6, '2021_08_27_102726_sss', 4),
(7, '2021_08_27_121254_testimonial', 5),
(8, '2021_08_27_123547_about', 6),
(9, '2021_08_27_135034_option', 7),
(10, '2021_08_27_154307_marka', 8),
(11, '2021_08_28_090042_user', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `options`
--

INSERT INTO `options` (`id`, `image`, `title1`, `title2`, `facebook`, `twitter`, `instagram`, `skype`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '/uploads/2baslik1w.jpg', '2Başlık1w', '2Başlık2', '2face', '2tw', '2lkkljjlü', '2sky', '2link', '2021-08-26 21:00:00', '2021-09-03 09:35:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicetitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serviceaciklama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `icon`, `servicetitle`, `serviceaciklama`, `created_at`, `updated_at`) VALUES
(8, NULL, 'Title', '<p>Lorem</p>', '2021-08-31 06:11:09', '2021-08-31 06:11:09'),
(5, NULL, 'dasd1', '<p>dadsasdsa</p>', '2021-08-29 17:08:11', '2021-08-29 17:08:11'),
(7, NULL, '21312312312', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2021-08-31 05:53:31', '2021-08-31 05:53:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ssses`
--

DROP TABLE IF EXISTS `ssses`;
CREATE TABLE IF NOT EXISTS `ssses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `soru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cevap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ssses`
--

INSERT INTO `ssses` (`id`, `soru`, `cevap`, `created_at`, `updated_at`) VALUES
(1, 'Soru', 'Cevap', NULL, NULL),
(2, 'Soru23', 'Cevap22', '2021-08-26 21:00:00', '2021-09-03 08:53:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`id`, `name`, `job`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fatih', 'Computer Engineer', '/uploads/team/team-1.jpg', '2021-08-26 21:00:00', '2021-08-26 21:00:00'),
(2, 'Fatih', 'Computer Engineer', '/uploads/team/team-2.jpg', '2021-08-26 21:00:00', '2021-08-26 21:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `image`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Fatih2', 'Engineer2', '/uploads/fatih2.jpg', 'Lorem ipsom dolor2', '2021-08-26 21:00:00', '2021-08-31 17:05:37'),
(5, 'fatih', '8', '/uploads/fatih.png', '<p>Lorem ipsom dolor&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsom dolor&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsom dolor</span></p>', '2021-08-31 16:54:07', '2021-08-31 16:54:07'),
(3, 'Ahmet', 'Veteriner', '/uploads/testimonials/testimonials-2.jpg', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '2021-08-26 21:00:00', '2021-08-26 21:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Fatih', 'fatih@test.com', '$2y$10$twmg.8AQI9cf2gN3GGiaGODxPIYCkNVZhtfxykDTkDCykyt3gxWRO', NULL, '0000-00-00 00:00:00'),
(4, 'Fatih2', 'fatih2@test.com', '$2y$10$9qWN58H2wv37MRllhfiAQeLC1jbMix2U/6vNLlFnf08qOWwDONXve', NULL, '2021-09-05 17:21:10'),
(10, 'kontrol', 'kontrol@test.com', '$2y$10$StycR3AmIu.yoQW5iQAciO2zdcBYnt.woP8QKAnUfq6Sc/xFJddke', '2021-09-05 10:32:25', '2021-09-05 10:32:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userstatuses`
--

DROP TABLE IF EXISTS `userstatuses`;
CREATE TABLE IF NOT EXISTS `userstatuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `userstatuses`
--

INSERT INTO `userstatuses` (`id`, `kullanici_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '2021-09-05 11:36:23'),
(2, 4, 1, '0000-00-00 00:00:00', '2021-09-05 11:36:48'),
(3, 10, 1, '2021-09-05 10:32:25', '2021-09-05 11:35:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
