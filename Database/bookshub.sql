-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2025 at 05:39 PM
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
-- Database: `bookshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `format` enum('PDF','Hard Copy','CD') NOT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `stock_quantity` int(11) NOT NULL DEFAULT 0,
  `language` varchar(255) NOT NULL DEFAULT 'English',
  `pages` int(11) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `rating` decimal(3,2) NOT NULL DEFAULT 0.00,
  `rating_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `category_id`, `description`, `price`, `format`, `file_url`, `cover_image`, `stock_quantity`, `language`, `pages`, `publication_date`, `isbn`, `rating`, `rating_count`, `created_at`, `updated_at`) VALUES
(8, 'Peer e kamil', 'Umerah Ahmed', 1, 'Peer-e-Kamil (The Perfect Mentor) is a bestselling Urdu novel by Umera Ahmed, first published in 2004. The story follows Imama Hashim, a girl from a strict Ahmadi family, and Salaar Sikandar, a highly intelligent but troubled young man. It explores their spiritual journeys, personal struggles, and transformation through faith, love, and self-discovery. The novel beautifully conveys themes of redemption, faith, and divine guidance, making it one of the most impactful Urdu novels...', 1500.00, 'PDF', '1738879454-Peer-e-Kamil By Umaira Ahmad [BesutUrduNovels.com].pdf', '1738879454-3260388.jpg', 50, 'urdu', 559, '2004-01-01', '000101', 0.00, 0, '2025-02-06 17:04:15', '2025-02-06 19:18:50'),
(10, 'Rooh e Yaram', 'Areej Shah', 1, 'Rooh-e-Yaram is a heartfelt Urdu novel by Areej Shah, known for its emotional depth, romance, and life-changing lessons. The story revolves around love, sacrifice, and the struggles of relationships, portraying strong emotions and moral values. With engaging storytelling and well-crafted characters, Rooh-e-Yaram has captivated many Urdu novel readers.', 2000.00, 'PDF', '1738972331-Rooh e yaram by areej shah.pdf', '1738972331-123237165.jpg', 99, 'urdu', 720, '2023-01-01', '000102', 0.00, 0, '2025-02-07 18:52:11', '2025-02-07 18:52:11'),
(11, 'Think And Grow Rich', 'Napolean Hill', 5, 'Think and Grow Rich is a timeless self-improvement and personal success book by Napoleon Hill, first published in 1937. Based on Hill’s research on the habits of wealthy and successful individuals, the book outlines 13 principles for achieving success, including desire, faith, persistence, and specialized knowledge. It emphasizes the power of thoughts, goal-setting, and taking action to turn dreams into reality. Think and Grow Rich remains one of the most influential books on wealth-building and personal development.', 999.00, 'PDF', '1738973351-Think-And-Grow-Rich_2011-06.pdf', '1738973351-ThinkandGrowRichbyNapoleonHill-BookshelfpkPakistan_720x.png', 30, 'English', 253, '0006-01-06', '000401', 0.00, 0, '2025-02-07 19:09:11', '2025-02-07 19:09:11'),
(12, 'Watch Man', 'Alan Moore', 2, 'Watchmen is a groundbreaking graphic novel by Alan Moore (writer) and Dave Gibbons (artist), published by DC Comics in 1986-87. Set in an alternate history where superheroes emerged in the 1940s and 1960s, the story explores political tension, morality, and the psychological complexities of masked vigilantes. When one of their own is murdered, a group of retired heroes investigates, uncovering a deep conspiracy that questions the very nature of power and justice.', 650.00, 'PDF', '1738973549-Think-And-Grow-Rich_2011-06.pdf', '1738973549-9781401238964.jpg', 10, 'Enlgish', 37, '1986-01-02', '000201', 0.00, 0, '2025-02-07 19:12:29', '2025-02-07 19:12:29'),
(13, 'Men Without Women', 'Haruki Murakami', 4, 'Men Without Women is a collection of short stories by Haruki Murakami, published in 2014. The book explores themes of loneliness, love, and loss through the lives of men who have been left by or separated from women. Each story delves into emotional isolation and the complexities of human relationships, told in Murakami’s signature surreal and melancholic style. With its introspective narratives and deep character studies, Men Without Women offers a poignant look at solitude and the human condition.', 3000.00, 'PDF', '1738973920-Men_Without_Women_Stories_-_Haruki_Murakami.pdf', '1738973920-images (4).jpeg', 100, 'English', 149, '2014-09-07', '000301', 0.00, 0, '2025-02-07 19:18:40', '2025-02-07 19:18:40'),
(14, 'A Short History of Nearly Everything', 'Bill Bryson', 7, 'To begin with, for you to be here now trillions of drifting atoms had somehow to assemble in an intricate and intriguingly obliging manner to create you. It\'s an arrangement so specialized and particular that it has never been tried before and will only exist this once. For the next many years (we hope) these tiny particles will uncomplainingly engage in all the billions of deft, cooperative efforts necessary to keep you intact and let you experience the supremely agreeable but generally underappreciated state known as existence.', 2150.00, 'PDF', '1738974508-A_Short_History_Of_Nearly_Everything.pdf', '1738974508-9781784161859.jpg', 58, 'englsih', 298, '2011-01-01', '000601', 0.00, 0, '2025-02-07 19:28:28', '2025-02-07 19:28:28'),
(15, 'Tenth Of Decemeber', 'George Saunders', 6, 'Before Tenth of December, Saunders had already won MacArthur and Guggenheim\r\nFellowships. This collection won him further acclaim, and the accolades increased\r\nfrom there. The book itself won the 2013 Story Prize and the 2014 Folio Prize', 1900.00, 'PDF', NULL, '1738974913-13641208.jpg', 35, 'English', 12, '2017-01-01', '000501', 0.00, 0, '2025-02-07 19:35:13', '2025-02-07 19:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('ibr@gmail.com|127.0.0.1', 'i:1;', 1739162997),
('ibr@gmail.com|127.0.0.1:timer', 'i:1739162997;', 1739162997),
('msksamikhanmsk@gmail.com|127.0.0.1', 'i:2;', 1739163056),
('msksamikhanmsk@gmail.com|127.0.0.1:timer', 'i:1739163056;', 1739163056);

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Novel', 'Novels are long stories that dive deep into characters, plots, and themes. Whether it\'s love, mystery, or adventure, they pull you into different worlds and emotions...', '2025-02-02 17:33:55', '2025-02-02 19:39:48'),
(2, 'Comics', 'Comics mix art and story in cool, illustrated panels. Ever read one? They can be about anything—superheroes, everyday life, or fantasy adventures!...', '2025-02-02 17:39:11', '2025-02-02 19:39:58'),
(4, 'Stories', 'stories are ways we share experiences, ideas, or emotions, usually through words. They can be fiction or non-fiction and can be told in books, movies, or even around a campfire!', '2025-02-02 17:45:27', '2025-02-02 17:45:27'),
(5, 'Buisiness', 'Business is all about buying, selling, and creating value. It can be big or small, from startups to global companies. Ever thought about starting your own?', '2025-02-02 19:40:47', '2025-02-02 19:40:47'),
(6, 'Quiz', 'Business is all about buying, selling, and creating value. It can be big or small, from startups to global companies. Ever thought about starting your own?', '2025-02-02 19:41:22', '2025-02-02 19:41:22'),
(7, 'General Knowledge', 'General knowledge is a mix of facts about a wide range of topics—history, science, pop culture, and more. It’s all the stuff you pick up from books, media, and experiences.', '2025-02-02 19:42:19', '2025-02-02 19:42:19'),
(9, 'Test!', 'Test category for check edit/delete working?', '2025-02-02 19:45:38', '2025-02-02 19:45:47'),
(10, '678678687', 'ufgufnndf', '2025-02-10 01:46:12', '2025-02-10 01:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` enum('Essay Writing','Storytelling') NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`id`, `title`, `description`, `category`, `start_time`, `end_time`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'story testing', 'write essay', 'Storytelling', '2025-02-09 22:00:00', '2025-02-10 01:00:00', 1, '2025-02-09 10:38:30', '2025-02-09 10:38:30'),
(2, 'ger', 'gergr', 'Storytelling', '2000-01-01 10:22:00', '2026-10-25 15:12:00', 1, '2025-02-09 10:53:12', '2025-02-09 10:53:12'),
(3, 'My friend', 'write a essay on my friend', 'Essay Writing', '2025-02-09 23:00:00', '2025-02-10 02:00:00', 1, '2025-02-09 12:54:49', '2025-02-09 12:54:49'),
(4, 'my best frnd', 'write essay on mtuvdjs', 'Essay Writing', '2000-02-10 11:50:00', '2000-02-10 13:05:00', 1, '2025-02-10 01:55:07', '2025-02-10 01:55:07');

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
(4, '2025_01_31_003501_create_books_table', 1),
(5, '2025_01_31_120354_create_categories_table', 1),
(6, '2025_02_07_015442_create_orders_table', 2),
(7, '2025_02_07_152234_create_order_items_table', 3),
(8, '2025_02_09_131719_create_competitions_table', 4),
(9, '2025_02_09_131729_create_submissions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('Pending','Processing','Shipped','Delivered','Cancelled') NOT NULL DEFAULT 'Pending',
  `payment_status` enum('Pending','Paid','Failed','Refunded') NOT NULL DEFAULT 'Pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `shipping_address` text NOT NULL,
  `order_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `status`, `payment_status`, `payment_method`, `tracking_number`, `shipping_address`, `order_notes`, `created_at`, `updated_at`) VALUES
(1, 1, 7500.00, 'Delivered', 'Paid', 'PayPal', NULL, 'pia township', NULL, '2025-02-07 11:43:26', '2025-02-10 01:47:10'),
(2, 1, 7500.00, 'Delivered', 'Paid', 'PayPal', NULL, 'pia township', NULL, '2025-02-07 12:45:12', '2025-02-09 19:38:23'),
(3, 1, 35000.00, 'Pending', 'Pending', 'PayPal', NULL, 'fgdhg', NULL, '2025-02-08 17:57:50', '2025-02-08 17:57:50'),
(4, 1, 2999.00, 'Processing', 'Failed', 'Credit Card', NULL, 'pia township', NULL, '2025-02-09 17:38:40', '2025-02-09 19:50:26'),
(5, 1, 10899.00, 'Delivered', 'Paid', 'Credit Card', NULL, 'aptech metro', NULL, '2025-02-09 17:57:30', '2025-02-09 19:03:03'),
(6, 1, 650.00, 'Pending', 'Pending', 'Credit Card', NULL, 'esngjeigu', NULL, '2025-02-10 01:59:01', '2025-02-10 01:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `book_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 2, 1500.00, '2025-02-07 11:43:26', '2025-02-07 11:43:26'),
(2, 1, 8, 3, 1500.00, '2025-02-07 11:43:26', '2025-02-07 11:43:26'),
(3, 2, 8, 2, 1500.00, '2025-02-07 12:45:12', '2025-02-07 12:45:12'),
(4, 2, 8, 3, 1500.00, '2025-02-07 12:45:12', '2025-02-07 12:45:12'),
(5, 3, 10, 10, 2000.00, '2025-02-08 17:57:50', '2025-02-08 17:57:50'),
(6, 3, 13, 5, 3000.00, '2025-02-08 17:57:50', '2025-02-08 17:57:50'),
(7, 4, 10, 1, 2000.00, '2025-02-09 17:38:40', '2025-02-09 17:38:40'),
(8, 4, 11, 1, 999.00, '2025-02-09 17:38:40', '2025-02-09 17:38:40'),
(9, 5, 13, 1, 3000.00, '2025-02-09 17:57:30', '2025-02-09 17:57:30'),
(10, 5, 10, 1, 2000.00, '2025-02-09 17:57:30', '2025-02-09 17:57:30'),
(11, 5, 11, 1, 999.00, '2025-02-09 17:57:30', '2025-02-09 17:57:30'),
(12, 5, 15, 1, 1900.00, '2025-02-09 17:57:30', '2025-02-09 17:57:30'),
(13, 5, 8, 2, 1500.00, '2025-02-09 17:57:30', '2025-02-09 17:57:30'),
(14, 6, 12, 1, 650.00, '2025-02-10 01:59:01', '2025-02-10 01:59:01');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8FU68JMd5RR1sCCiydbkNRjfKeeIL2HN0UoAWgks', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid0JPeXowVWZlM2FmWUJVYVhPYmFZYUlLVTNkd1ZSOXRpa3hNbkJ5byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wLWRldGFpbHMvMTAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1739166190),
('dZZWXdES4xAYk2yYENNl2nbhTd2qRNi3lxt4nCi4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXB4NVhvT0tuNFJmQmpkbk5FWGRvWG1yZVJ2ejVubTZETFZXMkRpcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1739168721),
('IQ8Y4PszEqanw9vXH1MOUiqtMSzdMaaAfZxAhBkn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0kxTGtja2NoQkE4MlFEYlZ4eU04QTdnQ2FYTW5pM0hHc3R3cDJmUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wLWRldGFpbHMvMTAiO319', 1739170867),
('pd0DxjQ4AwE9NcxLqnv0oWblKDJnvPvWAi7sGzEd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicEgwVXl2VmZUVFJpcE5jaWdHcnh4N2YwUWtIcDVvTkl1SzBpMlhMeSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NhcnQvYWRkLzEzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wLWRldGFpbHMvMTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1739164665);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `status` enum('Pending','Winner','Rejected') NOT NULL DEFAULT 'Pending',
  `rank` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `competition_id`, `user_id`, `file_path`, `status`, `rank`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'submissionFile/1739120895_1) How to grow your You Tube Channel.docx', 'Winner', 1, '2025-02-09 12:08:15', '2025-02-09 12:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phoneNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `dob` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phoneNum`, `email`, `email_verified_at`, `password`, `role`, `dob`, `country`, `city`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Sami', '03108893412', 'm.sami.developer@gmail.com', NULL, '$2y$12$ce5qsDZ7BWGsu2yquK1kvu05nd2qmejzLe2uaqg3.CcyKdaugY5jW', 'admin', '2005-11-19', 'Pakistan', 'Karachi', 'PIA Township Airport', NULL, '2025-02-01 04:28:17', '2025-02-01 04:28:17'),
(2, 'Ahsan', 'waseem', '12345678910', 'ahsan@gmail.com', NULL, '$2y$12$VoGxYlTicVZirHyRP8.vhOM8ZRE/BmxcwOq0/d9aaL9s6kB3Yxgri', 'user', '2000-01-01', 'Two', 'karachi', 'defence', NULL, '2025-02-01 04:29:56', '2025-02-01 04:29:56'),
(3, 'hassan', 'waseem', '12345678910', 'hassan@gmail.com', NULL, '$2y$12$qjFrgAS1pXhVW.LygUGBu.p6ewb/69.6Gsl5lu8/JyHToaVovUdzy', 'user', '2000-01-01', 'Two', 'karachi', 'defence', NULL, '2025-02-01 04:30:35', '2025-02-01 04:30:35'),
(4, 'abdullah', 'khan', '123456789', 'abdullah@gmail.com', NULL, '$2y$12$r7fHmJFteNbgpYTg23WAqujwRTZmDOPRxD7BXJWMelpreI0hgR1me', 'user', '2000-01-01', 'Three', 'Karachi', 'malir', NULL, '2025-02-01 04:31:34', '2025-02-01 04:31:34'),
(5, 'ahmed', 'raza', '123456789', 'ahmed@gmail.com', NULL, '$2y$12$qPrL3nViM0W0puzRUd.0zOjlx4aO.hy5LwA4x2pO/KVgglhqtHBL2', 'user', '2000-01-01', 'Two', 'karachi', 'paata nahi', NULL, '2025-02-01 04:32:10', '2025-02-02 23:57:16'),
(6, 'Sami', 'Khan', '03108893412', 'm.sami@gmail.com', NULL, '$2y$12$j1ivEMx3.SX1jNECMIiZyuC9VcY/224jQB.HB48d.4sTKEzDTYrsS', 'user', '2004-11-19', 'Two', 'karachi', 'PIA Township Airport', NULL, '2025-02-01 04:33:46', '2025-02-01 04:34:21'),
(8, 'sami', 'khan', '12345678910', 'zzzz@gmail.com', NULL, '$2y$12$aoZqzdXS9nP5iToR/RGf0uPEdWaUxXZVMah.5sJWvYjW0N9G1A.6e', 'user', '2000-01-01', 'pak', 'kari', 'dskg', NULL, '2025-02-07 21:41:01', '2025-02-07 21:41:01'),
(9, 'check', 'again', '123456789', 'lelo@gmail.com', NULL, '$2y$12$PEMfz3FYOpZHB87Pby/GcOnNlhoQn9sz6vq.9VsM1Cu6ToQMWj83C', 'user', '2000-01-01', 'kdsl', 'edshg', 'retskgh', NULL, '2025-02-07 21:47:44', '2025-02-07 21:47:44'),
(10, '578568', '66869', '89797987797865757575', 'abc@gmail.com', NULL, '$2y$12$uwD7vYsVhkmZ58qayhL1weO/kYyQ2otHhgyQulP6Jho/6dWsD4KSm', 'user', '2000-01-01', 'pakis', 'faf', 'df', NULL, '2025-02-10 01:45:37', '2025-02-10 01:45:37'),
(11, '676786786', '66959', '115181615', 'xyz@gmail.com', NULL, '$2y$12$kf3IKfooZIu7LL5MpFtmK.Y0bo6kbQsQmQ6UcbJasQ.KgXArQlEbW', 'user', '2000-01-01', 'hfy', 'ffytf', 'ghrh', NULL, '2025-02-10 01:50:48', '2025-02-10 01:50:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_book_id_foreign` (`book_id`);

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
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submissions_competition_id_foreign` (`competition_id`),
  ADD KEY `submissions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
