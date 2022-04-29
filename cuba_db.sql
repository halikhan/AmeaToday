-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 01:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuba_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `title`, `content`, `audio`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Mersciful', 'Ohh! Mersciful, Junaid Jamshaid Naat', 'song1.mp3', '2022-04-14__1649972426__gettyimages-1157960669-1561433228.jpg', '1', '2022-04-14 16:40:26', '2022-04-14 16:40:26'),
(5, 'O Habibi', 'O Habibi.! naat', 'song2.mp3', '2022-04-14__1649972468__a4e646239d698a7777217fa2fa6bbd1b.jpg', '1', '2022-04-14 16:41:08', '2022-04-15 13:35:37'),
(6, 'Naat', 'Ohh! Mersciful, Junaid Jamshaid Naat', 'song3.mp3', '2022-04-14__1649975263__01-nature_668593321.jpg', '1', '2022-04-14 17:27:43', '2022-04-14 17:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `background_audio`
--

CREATE TABLE `background_audio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `background_audio`
--

INSERT INTO `background_audio` (`id`, `title`, `content`, `audio`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KingsMen', 'Kingsmen title song, Hit of the year!', '2022-04-15__1650046837__song1x.mp3', NULL, '1', '2022-04-15 13:18:27', '2022-04-15 13:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `content_two`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Inventore', '<p>This is a free blog..!</p>', NULL, '2022-04-13__1649875873__Asset 6.png', '1', '2022-04-01 12:47:57', '2022-04-13 13:51:13'),
(3, 'Aperiam', '<p>slider</p>', NULL, '2022-04-13__1649875901__slider-2.jpg', '1', '2022-04-13 13:51:41', '2022-04-13 13:51:41'),
(4, 'Mollit', '<p>slider3</p>', NULL, '2022-04-13__1649875952__slider-3.jpg', '1', '2022-04-13 13:52:32', '2022-04-13 13:52:32'),
(5, 'Quis', '<p>Quis atque dolores pQuis atque dolores p</p>', NULL, '2022-04-13__1649875982__slider-4.jpg', '1', '2022-04-13 13:53:02', '2022-04-13 13:53:02'),
(6, 'Omnis', '<p>Omnis velit facere qOmnis velit facere qOmnis velit facere q</p>', NULL, '2022-04-13__1649876004__slider-5.jpg', '1', '2022-04-13 13:53:24', '2022-04-13 13:53:24'),
(7, 'Velit sint voluptas', '<p>&nbsp;sint voluptas&nbsp;sint voluptas&nbsp;sint voluptas&nbsp;sint voluptas&nbsp;sint voluptas</p>', NULL, '2022-04-13__1649876021__slider-6.jpg', '1', '2022-04-13 13:53:41', '2022-04-13 13:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_name`, `section_name`, `title`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(19, NULL, NULL, 'Dekalb county', 'sponsor 1', '2022-04-13__1649871951__silder1.png', '1', '2022-03-31 10:23:27', '2022-04-13 12:49:50'),
(20, NULL, NULL, 'Marriot', 'sponsor', '2022-04-13__1649872046__silder3.png', '1', '2022-03-31 11:15:46', '2022-04-13 12:55:00'),
(21, NULL, NULL, 'Yamaha', 'Laboriosam sit eum', '2022-04-13__1649872033__silder2.jpg', '1', '2022-03-31 11:16:30', '2022-04-15 13:51:14'),
(22, NULL, NULL, 'Applebees', 'Sponsor', '2022-04-13__1649872113__silder4.png', '1', '2022-03-31 12:04:59', '2022-04-15 13:51:26'),
(25, NULL, NULL, 'vic firth', 'sponsor', '2022-04-13__1649872138__silder5.png', '1', '2022-04-13 12:48:58', '2022-04-13 12:48:58'),
(26, NULL, NULL, 'USA', 'sponsor', '2022-04-13__1649872169__silder6.png', '1', '2022-04-13 12:49:29', '2022-04-13 12:49:29'),
(27, NULL, NULL, 'Pepsi', 'Sponsor', '2022-04-14__1649969364__silder2.jpg', '1', '2022-04-13 13:25:54', '2022-04-14 15:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `email_one`, `email_type`, `created_at`, `updated_at`) VALUES
(1, '2022 All copyrights reserved by AMEA -Today!', 'Copyrights', '2022-04-12 17:49:34', '2022-04-12 18:13:40');

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
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `page`, `title`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'About the AMEA', '<p>The American Music Educators Association (AMEA) is a &quot;all-in-one&quot; educational hub that caters to the unique needs of music educators, students, and enthusiasts of all musical levels and disciplines.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The AMEA has created a comprehensive portal that allows music students to be discovered by hundreds of university recruiters on one platform, while allowing access to some of the most talented private instructors from around the country.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For the grade school educator that&#39;s looking for the best evaluation of their program, the AMEA has collected some of the most experienced music directors in the country, and with the &quot;Pre-Evaluation&quot; tool the AMEA has made it affordable to have any music program, dance routine or solo performance evaluated by some of the best and most experienced in the field.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For the college student looking to start a career as an educator, the AMEA has created the Ambassador recruiting program that not only makes recruiting easier, but it also allows for the recruiter to have a better understanding as to what it takes to deal with issues like parental concerns, event scheduling, effective fund raising and local community promotions all while growing and maintaining a program, this is field study at it&#39;s best</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The American Music Educators Association is a community designed for music education by music educators.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Join the AMEAtoday, because culture starts with us.​</p>', '2022-04-15__1650060044__about-amea.png', '1', '2022-04-12 14:39:56', '2022-04-15 17:00:44'),
(2, '2', 'The Band Room', '<p>All instrumentalist, vocalist, strings and dancers, you now have the ability to be discovered by the nations best music programs without the long expensive road trips and stressful evaluation wait times. This all-in-one tool makes it as easy as 1-2-3.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>First, create your free profile with up to 30 seconds of your best mini-solo. Second, upload your profile onto the AMEA&#39;s student talent band room. And third, relax and be discovered by hundreds of the best music school, dance institutions and talent recruiters in the country.</p>', '2022-04-15__1650063692__singer.png', '1', '2022-04-12 15:08:31', '2022-04-15 18:01:32'),
(3, '3', 'Educators (K-12)', '<p>The AMEA has collected lots of helpful tips and advice to aid any music program from booster club set-ups, fund raising, and recruiting tips. The AMEA has partnered with some of the most successful elementary, middle, and high schools both public and private to assemble a variety of techniques and applications that will motivate, inspire, and challenge every user.</p>', '2022-04-15__1650061352__Educators .png', '1', '2022-04-12 15:19:57', '2022-04-15 17:22:32'),
(4, '4', 'Super Booster Organizations', '<p>The AMEA has assembled a multitude of great booster ideas and ways to effectively support your program regardless of size or function. Here you will find step-by-step instructions, diagrams, and even an open forum where you can ask questions and make suggestions. Let&#39;s get started.</p>', '2022-04-15__1650061376__booster.png', '1', '2022-04-12 15:28:47', '2022-04-15 17:22:56'),
(5, '5', 'By-laws', '<p>This is where you protect your organization or program. Many will say this is one of the most important steps to a successful program. Get this right!</p>', '2022-04-15__1650061392__by-laws.png', '1', '2022-04-12 15:30:58', '2022-04-15 17:23:12'),
(6, '6', 'Fun Fund Raising', '<p>The AMEA has put the &quot;fun&quot; back&nbsp;in fund raising. We have lots of fun, easy, and inexpensive ways to raise money and keep your&nbsp;program on budget.</p>', '2022-04-15__1650061405__funds-raising.png', '1', '2022-04-12 15:33:56', '2022-04-15 17:23:25'),
(7, '7', 'Pre-Festival Evaluations', '<h3>At your fingertips</h3>\r\n\r\n<p>Regardless of your level of performance, directors now have access to some of the top music evaluators in the business.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>Your state&#39;s Music Educators Associations (MEA&#39;s) have always been a source of stress for the serious director, whether it&#39;s beginning chorus, intermediate jazz band or advance symphonic ensembles, getting the right evaluators can cost more than some budgets allow.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We&#39;ve just made it a lot easier.&nbsp;Now directors can record their performances, choose from some of the top music evaluators in the business, and be evaluated without the cost of expensive visits. This tool gives all directors, regardless of their location, access to better evaluations and higher performance scores.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Read some of the comments from members</p>\r\n\r\n<p>&quot;This will no-doubt increase performance ratings for programs everywhere&quot;.</p>\r\n\r\n<p>-Dr, M, Goodman, Dir. of Bands - The Scholarship Institute</p>\r\n\r\n<p>&quot;A Game-Changer!!!&quot;</p>\r\n\r\n<p>-Prof. William Nasser - Ret, music teacher</p>\r\n\r\n<p>&quot;OMG Thank You!!! Our kids deserve this&quot;!</p>\r\n\r\n<p>-Mrs. L Whitley - Booster Club Pres.</p>', '2022-04-15__1650061459__festival-img.png', '1', '2022-04-12 15:40:25', '2022-04-15 17:24:19'),
(8, '8', 'Private Instructors', '<p>The AMEA has assembled many of the finest private instructors from around the country. This virtual learning tool makes it easy and affordable to continue learning music while both the student and the instructor remain safe from the current Covid-19 pandemic.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Students are now able to receive private instructions on all brass and woodwind instruments, percussion, piano, strings, vocals and multiple forms of dance all from the virtual safety and convenience of home.</p>\r\n\r\n<h1>Lets get started!</h1>\r\n\r\n<h1>Join AMEA today!</h1>', '2022-04-15__1650061523__prvt1.png', '1', '2022-04-12 15:48:20', '2022-04-15 17:25:23'),
(9, '9', 'Choose from our list of highly qualified private instrumental instructors', '<p>The AMEA has assemble a select number of highly qualified and professional instrumentalist that ranges from the beginning flute instructor, to the advance oboe professor. You now can choose instructors from many different countries and practices, or the local favorite. Our virtual platform gives you access to one of the largest music communities in the world.</p>', '2022-04-15__1650061554__back-1.png', '1', '2022-04-12 15:53:02', '2022-04-15 17:25:54'),
(10, '10', 'Choose from our list of highly qualified dance instructors', '<p>The AMEA has assemble a select number of highly qualified and professional dance choreographers and instructors that ranges from the beginning ballerina, to the advance Hip-Hop director. You now can choose choreographers from many different countries, practices and styles, or your local favorite. Our virtual platform gives you access to one of the largest dance communities in the world.</p>', '2022-04-15__1650061576__prvt2.png', '1', '2022-04-12 15:56:45', '2022-04-15 17:26:16'),
(11, '11', 'Choose from our list of highly qualified Vocal instructors', '<p>The AMEA has assemble a select number of highly qualified and professional vocal talents that ranges from the beginning chorus singer, to the advance baritone concerto. You now can choose instructors from many different countries, practices and styles, or the local favorite. Our virtual platform gives you access to one of the largest music communities in the world.</p>', '2022-04-15__1650061609__prvt3.png', '1', '2022-04-12 15:59:48', '2022-04-15 17:26:49'),
(12, '12', 'Choose from our list of highly qualified private instrumental instructors', '<p>(ALL-STATE PREP)</p>\r\n\r\n<p>The AMEA has assemble a select number of highly qualified and professional instrumental and vocal instructors that will assist you on all your all-state needs. From choosing the right percussion rudiments, to advance sight-singing. You now can choose instructors from many different countries and practices, or the local favorite. Our virtual platform gives you access to one of the largest music communities in the world.</p>', '2022-04-15__1650061657__Asset 6.png', '1', '2022-04-12 16:08:09', '2022-04-15 17:27:37'),
(13, '14', 'Join one of the largest communities of arrangers/composers from around the world', '<p>The AMEA has assemble a select number of highly qualified and professional instrumentalist that ranges from the beginning flute instructor, to the advance oboe professor. You now can choose instructors from many different countries and practices, or the local favorite. Our virtual platform gives you access to one of the largest music communities in the world.</p>', '2022-04-15__1650061711__home.png', '1', '2022-04-12 16:15:00', '2022-04-15 17:28:31'),
(14, '15', 'Join one of the largest communities of singers and song writers in music', '<p>The AMEA has assemble a number of highly talented and professional singer/song writers that ranges from the beginning enthusiast, to the advance professional performer. connect with singers/song writers from many different countries, genres, styles and disciplines. Our virtual platform gives you access to one of the largest music communities in the world.</p>', '2022-04-15__1650061749__singer.png', '1', '2022-04-12 16:20:30', '2022-04-15 17:29:09'),
(15, '16', 'Connect with some of the most well-known producers and engineers in the business', '<p>The AMEA has assemble a number of highly talented and professional singer/song writers that ranges from the beginning enthusiast, to the advance professional performer. connect with singers/song writers from many different countries, genres, styles and disciplines. Our virtual platform gives you access to one of the largest music communities in the world.</p>', '2022-04-15__1650061786__music.png', '1', '2022-04-12 16:24:48', '2022-04-15 17:29:46'),
(16, '17', 'About AMEA Today', '<p>Welcome to the American Music Educators Association.</p>\r\n\r\n<p>(AMEA)</p>\r\n\r\n<p>The AMEA is an all-in-one tool for music education that assists, recognizes and celebrates every</p>\r\n\r\n<p>evel of music training from festival evaluations, college recruitment assistance, private instructors</p>\r\n\r\n<p>and the spectacular awards celebration.</p>', NULL, '1', '2022-04-13 10:35:08', '2022-04-13 10:35:08'),
(17, '18', 'Ludwig van Beethoven', '<h2>&ldquo;To play a wrong note is insignificant; to play without passion is inexcusable&rdquo;</h2>', NULL, '1', '2022-04-13 13:32:38', '2022-04-13 13:32:38'),
(18, '19', 'American Music Educators Association', '<h2>American Music Educators Association</h2>', NULL, '1', '2022-04-13 15:43:19', '2022-04-13 15:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Voluptatum eos quisid=', 'Non doloremque eref es xzsxz', '2022-04-04 17:50:01', '2022-04-04 17:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logo_managers`
--

CREATE TABLE `logo_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo_managers`
--

INSERT INTO `logo_managers` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'logo', '2022-04-08__1649459817__Asset 9.png', '2022-03-31 15:17:25', '2022-04-08 18:16:57'),
(3, 'footer', '2022-03-31__1648758609__1602526723-71ea2zkecml-ac-sl1500-1602526696.jpg', '2022-03-31 15:30:09', '2022-03-31 15:30:09'),
(4, 'favicon', '2022-03-31__1648759586__christmas-holiday-3d-object-rendering-png_248081.jpg', '2022-03-31 15:46:26', '2022-03-31 15:50:10');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_30_184922_create_logo_managers_table', 2),
(5, '2022_03_30_185503_create_cms_table', 3),
(6, '2022_03_31_225911_create_sociallinks_table', 4),
(7, '2022_03_31_230630_create_sociallinks_table', 5),
(8, '2022_03_31_231228_create_sociallinks_table', 6),
(9, '2022_04_01_165242_create_blogs_table', 7),
(10, '2022_04_01_184214_create_inquiries_table', 8),
(11, '2022_04_01_214720_create_configs_table', 9),
(12, '2022_04_04_222236_create_f_a_q_s_table', 10),
(13, '2022_04_05_175107_create_packages_table', 11),
(14, '2022_04_05_181654_create_packages_table', 12),
(15, '2022_04_05_184749_create_subcriptions_table', 13),
(16, '2022_04_06_223052_create_permissions_table', 14),
(17, '2022_04_12_172819_create_frontends_table', 15),
(18, '2022_04_12_173216_create_pages_table', 16),
(19, '2022_04_13_214717_create_videos_table', 17),
(20, '2022_04_14_173454_create_audio_table', 18),
(21, '2022_04_15_175836_create_background_audio_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deatails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `deatails`, `mid_details`, `type`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'AMEA Student', 'Virtual private instructors and create a recruitment profile', 'Perfect for virtual private lessons and college recruitment.', 'Every year', '19.99', '2022-04-05 13:25:10', '2022-04-15 14:54:06'),
(4, 'Private Instructor', 'Teach students from anywhere, at your convenience.', NULL, 'Every year', '29.99', '2022-04-05 17:12:09', '2022-04-15 14:39:57'),
(6, 'Music Educators', 'Recruit students from anywhere in the country.', 'Frim K- College', 'Every year', '39.99', '2022-04-15 14:40:41', '2022-04-15 15:18:26'),
(7, 'Arrangers/Composer', 'Build your following and conduct your virtual classrooms.', NULL, 'Every year', '19.99', '2022-04-15 14:41:57', '2022-04-15 14:41:57'),
(8, 'Singer/Songwriter', 'Build your following and connect with voices everywhere.', NULL, 'Every year', '34.99', '2022-04-15 15:18:05', '2022-04-15 15:18:05'),
(9, 'Music Producer', 'Hold virtual classes or find talent anywhere.', 'Connect with producers/engineers anywhere in the world', 'Every year', '49.99', '2022-04-15 15:19:19', '2022-04-15 15:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'About', '2022-04-12 14:29:39', '2022-04-12 14:29:39'),
(2, 'Brand Room', '2022-04-12 14:29:57', '2022-04-12 14:29:57'),
(3, 'Educators(k-12)', '2022-04-12 14:30:31', '2022-04-12 14:30:31'),
(4, 'Boosters', '2022-04-12 14:31:02', '2022-04-12 14:31:02'),
(5, 'By-laws', '2022-04-12 14:31:23', '2022-04-12 14:31:23'),
(6, 'Fund Raising', '2022-04-12 14:31:39', '2022-04-12 14:31:39'),
(7, 'Pre Festival Evaluators', '2022-04-12 14:32:27', '2022-04-12 14:32:27'),
(8, 'Private Instructors', '2022-04-12 14:32:53', '2022-04-12 14:32:53'),
(9, 'Instrumental', '2022-04-12 14:33:13', '2022-04-12 14:33:13'),
(10, 'Dance', '2022-04-12 14:33:27', '2022-04-12 14:33:27'),
(11, 'Vocal', '2022-04-12 14:33:34', '2022-04-12 14:33:34'),
(12, 'All State Prep', '2022-04-12 14:34:01', '2022-04-12 14:34:17'),
(13, 'Become a Private Instructor', '2022-04-12 14:34:47', '2022-04-12 14:34:47'),
(14, 'Arranges/Composer', '2022-04-12 14:35:21', '2022-04-12 14:35:21'),
(15, 'Singer/SongWriter', '2022-04-12 14:35:40', '2022-04-12 14:35:40'),
(16, 'Music Producers/Engineers', '2022-04-12 14:36:18', '2022-04-12 14:36:18'),
(17, 'Home', '2022-04-13 10:34:06', '2022-04-13 10:34:06'),
(18, 'Home_Quote', '2022-04-13 13:31:54', '2022-04-13 13:31:54'),
(19, 'Home_Main_Heading', '2022-04-13 15:42:49', '2022-04-13 15:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `name`, `category`, `created_at`, `updated_at`) VALUES
(1, '9', NULL, 'tab_1', '2022-04-08 10:08:36', '2022-04-08 10:08:36'),
(2, '9', NULL, 't_1_list_1', '2022-04-08 10:08:36', '2022-04-08 10:08:36'),
(3, '9', NULL, '1', '2022-04-08 10:08:36', '2022-04-08 10:08:36'),
(4, '9', NULL, '2', '2022-04-08 10:08:36', '2022-04-08 10:08:36'),
(5, '9', NULL, '3', '2022-04-08 10:08:36', '2022-04-08 10:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `type`, `social_media`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(5, '1', 'https://www.facebook.com/', NULL, NULL, NULL, '2022-04-12 17:26:36', '2022-04-12 17:26:36'),
(6, '2', 'https://Instagram.com/', NULL, NULL, NULL, '2022-04-12 17:27:28', '2022-04-12 17:27:28'),
(7, '3', 'https://www.linkedin.com/', NULL, NULL, NULL, '2022-04-12 17:28:16', '2022-04-12 17:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `subcriptions`
--

CREATE TABLE `subcriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcriptions`
--

INSERT INTO `subcriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'duwo@mail.com', '2022-04-05 14:25:13', '2022-04-05 14:28:19'),
(2, 'sub@gmail.com', '2022-04-05 14:27:21', '2022-04-05 14:27:38'),
(4, 'test@gmail.com', '2022-04-05 14:38:26', '2022-04-05 14:38:26'),
(13, 'haxu@mailinator.com', '2022-04-06 13:09:09', '2022-04-06 13:09:09'),
(14, 'iamjamesalbertt@gmail.com', '2022-04-06 18:49:19', '2022-04-06 18:49:19'),
(15, 'haxuf@mailinator.com', '2022-04-13 18:39:04', '2022-04-13 18:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `contact`, `message`, `type`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jason Roy', NULL, 'admin@cuba.com', NULL, NULL, 1, '2022-04-04__1649103066__gettyimages-1157960669-1561433228.jpg', NULL, '$2y$10$E6al5Ibwbwssnx2Ae0AnK.hI.xX1rV.g8.rGh0uEvs9QD4WFVIqdW', NULL, '2022-03-28 18:50:55', '2022-04-04 15:11:06'),
(3, 'Max', NULL, 'max@gmail.com', '+987-3312313-3', 'Velit deleniti et p', 2, NULL, NULL, '$2y$10$LMN7xTl9wdVORK5MsJG4U.bTTIWPPoVKBsYI7JldOUyfsmNHGMPmq', NULL, '2022-04-01 14:43:05', '2022-04-04 15:21:36'),
(9, 'Shan John', NULL, 'user@cuba.com', NULL, NULL, 2, '2022-04-04__1649103103__505-5058091_agent-icon-png-male-profile-logo-png-transparent.png', NULL, '$2y$10$jBJfUakXim9gItoeoLeJSOCVZIpjqVrXIaXzok8siJW/e.8G8vfA2', NULL, '2022-04-04 10:40:16', '2022-04-04 15:18:51'),
(14, 'admin', NULL, 'master@ameatoday.com', NULL, NULL, 1, '2022-04-12__1649776479__ee0e70b2ae91f7209f3a78247986e280.jpg', NULL, '$2y$10$9515jV4k4oTEHUr0ivJXqeph6JFtrLP245j8W.Vm3MQ9u9GSjoEJC', NULL, '2022-04-05 17:19:34', '2022-04-12 10:14:39'),
(18, 'Laith Cooper', NULL, 'xane@mailinator.com', NULL, NULL, 1, NULL, NULL, '$2y$10$tdchLBB4WYcO9KuW4fPb7ukyPAqxzlYjGJwRSUwCPLiEOTS59vnaG', NULL, '2022-04-05 17:53:19', '2022-04-05 17:55:26'),
(19, 'nosagyg@mailinator.com', NULL, 'rufovasyre@mailinator.com', NULL, NULL, 1, NULL, NULL, '$2y$10$3SrdwM/QvCGtkyFXUktXzOEscFH/kxT1HEagJ11Q9zTJvUoyuFwDi', NULL, '2022-04-05 17:55:55', '2022-04-05 17:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `content`, `video`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'piyano', '<p>its in the top video of Home page!</p>', '2022-04-13__1649889090__file.mp4', NULL, '1', '2022-04-13 17:23:35', '2022-04-13 17:40:12'),
(2, 'guitar', '<p>its is the end of home page!</p>', '2022-04-13__1649889586__file2.mp4', NULL, '1', '2022-04-13 17:39:46', '2022-04-13 17:39:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background_audio`
--
ALTER TABLE `background_audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_managers`
--
ALTER TABLE `logo_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcriptions`
--
ALTER TABLE `subcriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `background_audio`
--
ALTER TABLE `background_audio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo_managers`
--
ALTER TABLE `logo_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcriptions`
--
ALTER TABLE `subcriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
