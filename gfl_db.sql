-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 01:43 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gfl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-02-25 08:46:30', '2020-02-25 08:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(61, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(62, 12, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 2),
(63, 12, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(64, 12, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 4),
(65, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(66, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(67, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(68, 13, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(69, 13, 'type', 'select_dropdown', 'Type', 1, 1, 1, 1, 1, 1, '{\"default\":\"WEBBINARY\",\"options\":{\"webbinary\":\"WEBBINARY\",\"EVENT\":\"event\"}}', 3),
(70, 13, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
(71, 13, 'date', 'date', 'Date', 1, 1, 1, 1, 1, 1, '{}', 5),
(72, 13, 'time_zone', 'text', 'Time Zone', 0, 1, 1, 1, 1, 1, '{}', 6),
(73, 13, 'short_description', 'text_area', 'Short Description', 0, 1, 1, 1, 1, 1, '{}', 7),
(74, 13, 'agenda', 'text_area', 'Agenda', 0, 1, 1, 1, 1, 1, '{}', 8),
(75, 13, 'country', 'text', 'Country', 0, 1, 1, 1, 1, 1, '{}', 9),
(76, 13, 'location', 'text', 'Location', 0, 1, 1, 1, 1, 1, '{}', 10),
(77, 13, 'start_time', 'time', 'Start Time', 0, 1, 1, 1, 1, 1, '{}', 11),
(78, 13, 'end_time', 'time', 'End Time', 0, 1, 1, 1, 1, 1, '{}', 12),
(79, 13, 'organizer', 'text', 'Organizer', 0, 1, 1, 1, 1, 1, '{}', 13),
(80, 13, 'support', 'text', 'Support', 0, 1, 1, 1, 1, 1, '{}', 14),
(81, 13, 'presentor_name', 'text', 'Presentor Name', 0, 1, 1, 1, 1, 1, '{}', 15),
(82, 13, 'presentor_title', 'text', 'Presentor Title', 0, 1, 1, 1, 1, 1, '{}', 16),
(83, 13, 'presentor_info', 'text_area', 'Presentor Info', 0, 1, 1, 1, 1, 1, '{}', 17),
(84, 13, 'presentor_image', 'image', 'Presentor Image', 0, 1, 1, 1, 1, 1, '{}', 18),
(85, 13, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 19),
(86, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 20),
(87, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 21),
(88, 13, 'tags', 'text', 'Tags', 0, 1, 1, 1, 1, 1, '{}', 22),
(89, 12, 'type', 'select_dropdown', 'Type', 0, 1, 1, 1, 1, 1, '{\"default\":\"HOME\",\"options\":{\"HOME\":\"home\",\"EVENT\":\"event\"}}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-02-25 08:46:21', '2020-02-25 08:46:21'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-02-25 08:46:21', '2020-02-25 08:46:21'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2020-02-25 08:46:22', '2020-02-25 08:46:22'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-02-25 08:46:29', '2020-02-25 08:46:29'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-02-25 08:46:32', '2020-02-25 08:46:32'),
(12, 'tbl_home_slides', 'tbl-home-slides', 'Tbl Home Slide', 'Tbl Home Slides', 'voyager-paw', 'App\\TblHomeSlide', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-02-26 01:34:50', '2020-02-26 15:01:38'),
(13, 'events', 'events', 'Event', 'Events', 'voyager-rocket', 'App\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-02-26 14:02:44', '2020-02-26 14:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'WEBBINARY',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'UTC',
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agenda` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentor_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentor_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `type`, `description`, `date`, `time_zone`, `short_description`, `agenda`, `country`, `location`, `start_time`, `end_time`, `organizer`, `support`, `presentor_name`, `presentor_title`, `presentor_info`, `presentor_image`, `image`, `created_at`, `updated_at`, `tags`) VALUES
(1, '2020 : What\'s in store for the Textiles & Apparel industry?//2020 : 纺织品和服装行业要买什么？', 'webbinary', '<p>2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry.</p>\r\n<p>//<span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span></p>', '2020-03-01', 'Eastern Time (US & Canada)', 'Short Description here//在这里写一个简单的描述', '2019, the year that went by**US-China\'s trade war impact on Global Supply Chain**Brexit**WTO and Tariff Preferences**Global Economic and Business Scenario**Expectations in 2020//2019年，过去的一年**中美贸易战对全球供应链的影响**英国脱欧**世贸组织和关税优惠**全球经济和商业情景** 2020年的预期', 'Hong Kong//香港', 'Some where//哪里', '10:00:00', '13:00:00', 'Global Fortune Limited', 'Global Fortune Limited', 'Mr. Eric Beyeler', 'Global Marketing Manager - Inks at DuPont//全球营销经理', 'Eric has a demonstrated history of working in the composites, polymeer and digital printing industries. Silled in International Business Development, Strategic Planning and global account management, Eric holds a Doctor of Philosophy (PhD) in Engineering from University of Delaware. Backed by his vast experiences, he is currently involved in developing industry relationships and business and marketing plans for inkjet ink market segments in Home & Office, Textile, Commercial Priting & Packaging.//埃里克（Eric）在复合材料，聚合物和数字印刷行业的工作历史已有证明。 埃里克（Eric）拥有国际业务发展，战略规划和全球客户管理方面的经验，并拥有特拉华大学的工程哲学博士学位（PhD）。 在他丰富的经验的支持下，他目前致力于为家庭和办公室，纺织，商业印刷和包装领域的喷墨墨水市场领域开发行业关系以及商业和营销计划。', 'events\\February2020\\RbfUaIpb29XlEIslO9v7.png', 'events\\February2020\\cASyenNfhu3Uw4n3VyLE.jpg', '2020-02-26 14:31:00', '2020-02-26 14:39:24', 'Direct-to-Garment Printing,Kornit Digital,E-commerce,Sustainability//服装直接印刷，柯尼特数码，电子商务，可持续性'),
(2, 'Webinar Test //纺织品和服装行业要买什么？', 'webbinary', '<p>2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry.</p>\r\n<p>//<span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span></p>', '2020-03-03', 'Eastern Time (US & Canada)', 'Short Description here//在这里写一个简单的描述', '2019, the year that went by**US-China\'s trade war impact on Global Supply Chain**Brexit**WTO and Tariff Preferences**Global Economic and Business Scenario**Expectations in 2020//2019年，过去的一年**中美贸易战对全球供应链的影响**英国脱欧**世贸组织和关税优惠**全球经济和商业情景** 2020年的预期', 'Hong Kong//香港', 'Shenzhen//哪里', '10:00:00', '13:00:00', 'Global Fortune Limited', 'Global Fortune Limited', 'Mr. Eric Beyeler', 'Global Marketing Manager - Inks at DuPont//全球营销经理', 'Eric has a demonstrated history of working in the composites, polymeer and digital printing industries. Silled in International Business Development, Strategic Planning and global account management, Eric holds a Doctor of Philosophy (PhD) in Engineering from University of Delaware. Backed by his vast experiences, he is currently involved in developing industry relationships and business and marketing plans for inkjet ink market segments in Home & Office, Textile, Commercial Priting & Packaging.//埃里克（Eric）在复合材料，聚合物和数字印刷行业的工作历史已有证明。 埃里克（Eric）拥有国际业务发展，战略规划和全球客户管理方面的经验，并拥有特拉华大学的工程哲学博士学位（PhD）。 在他丰富的经验的支持下，他目前致力于为家庭和办公室，纺织，商业印刷和包装领域的喷墨墨水市场领域开发行业关系以及商业和营销计划。', 'events\\February2020\\RbfUaIpb29XlEIslO9v7.png', 'events\\February2020\\w2EfiqQM3GbJmBUznWX2.jpg', '2020-02-26 14:31:00', '2020-02-27 04:26:24', 'Direct-to-Garment Printing,Kornit Digital,E-commerce,Sustainability//服装直接印刷，柯尼特数码，电子商务，可持续性'),
(3, 'Webinar Test //纺织品和服装行业要买什么？', 'webbinary', '<p>2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry.</p>\r\n<p>//<span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span></p>', '2020-03-03', 'Eastern Time (US & Canada)', 'Short Description here//在这里写一个简单的描述', '2019, the year that went by**US-China\'s trade war impact on Global Supply Chain**Brexit**WTO and Tariff Preferences**Global Economic and Business Scenario**Expectations in 2020//2019年，过去的一年**中美贸易战对全球供应链的影响**英国脱欧**世贸组织和关税优惠**全球经济和商业情景** 2020年的预期', 'Hong Kong//香港', 'Shenzhen//哪里', '10:00:00', '13:00:00', 'Global Fortune Limited', 'Global Fortune Limited', 'Mr. Eric Beyeler', 'Global Marketing Manager - Inks at DuPont//全球营销经理', 'Eric has a demonstrated history of working in the composites, polymeer and digital printing industries. Silled in International Business Development, Strategic Planning and global account management, Eric holds a Doctor of Philosophy (PhD) in Engineering from University of Delaware. Backed by his vast experiences, he is currently involved in developing industry relationships and business and marketing plans for inkjet ink market segments in Home & Office, Textile, Commercial Priting & Packaging.//埃里克（Eric）在复合材料，聚合物和数字印刷行业的工作历史已有证明。 埃里克（Eric）拥有国际业务发展，战略规划和全球客户管理方面的经验，并拥有特拉华大学的工程哲学博士学位（PhD）。 在他丰富的经验的支持下，他目前致力于为家庭和办公室，纺织，商业印刷和包装领域的喷墨墨水市场领域开发行业关系以及商业和营销计划。', 'events\\February2020\\RbfUaIpb29XlEIslO9v7.png', 'events\\February2020\\w2EfiqQM3GbJmBUznWX2.jpg', '2020-02-26 14:31:00', '2020-02-27 04:26:24', 'Direct-to-Garment Printing,Kornit Digital,E-commerce,Sustainability//服装直接印刷，柯尼特数码，电子商务，可持续性'),
(4, 'Webinar Test //纺织品和服装行业要买什么？', 'webbinary', '<p>2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry. 2019 will be market as a significant year for the Textiles &amp; Apparel industry.</p>\r\n<p>//<span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">浙江绍兴源城机械有限公司座落于历史文化名城--绍兴,专业生产</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">,</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">全自动丝网印刷机</span><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">离杭甬高速公路出口处大约6公里,距萧山国际机场38.7公里。地理位置优越,交通便利。</span></p>\r\n<p><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　　本公司专业生产系列配套产品,如卷对卷丝网印刷机械、模切机、柔版印刷机、分切机等。我们有一支专业的技术队伍,提供高质量的产品和服务。为了满足标签印刷行业客户的不同需求,我们产品的特点是操作方便、合理的价格和高品质。</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">　&nbsp; &nbsp;本厂秉承\"诚信、专业、创新\"的经营理念和\"追求卓越、打造精品\"的企业精神。在提供产品的同时，我们更重视的是售后服务和技术支持，为客户创造价值，是我们的目标！</span><br style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\" /><span style=\"font-size: 18px; margin: 0px; padding: 0px; color: #666666; font-family: 微软雅黑;\">&nbsp; &nbsp; &nbsp; &nbsp;我们现真诚地欢迎您的合作,携手共创双赢。</span></p>', '2020-03-03', 'Eastern Time (US & Canada)', 'Short Description here//在这里写一个简单的描述', '2019, the year that went by**US-China\'s trade war impact on Global Supply Chain**Brexit**WTO and Tariff Preferences**Global Economic and Business Scenario**Expectations in 2020//2019年，过去的一年**中美贸易战对全球供应链的影响**英国脱欧**世贸组织和关税优惠**全球经济和商业情景** 2020年的预期', 'Hong Kong//香港', 'Shenzhen//哪里', '10:00:00', '13:00:00', 'Global Fortune Limited', 'Global Fortune Limited', 'Mr. Eric Beyeler', 'Global Marketing Manager - Inks at DuPont//全球营销经理', 'Eric has a demonstrated history of working in the composites, polymeer and digital printing industries. Silled in International Business Development, Strategic Planning and global account management, Eric holds a Doctor of Philosophy (PhD) in Engineering from University of Delaware. Backed by his vast experiences, he is currently involved in developing industry relationships and business and marketing plans for inkjet ink market segments in Home & Office, Textile, Commercial Priting & Packaging.//埃里克（Eric）在复合材料，聚合物和数字印刷行业的工作历史已有证明。 埃里克（Eric）拥有国际业务发展，战略规划和全球客户管理方面的经验，并拥有特拉华大学的工程哲学博士学位（PhD）。 在他丰富的经验的支持下，他目前致力于为家庭和办公室，纺织，商业印刷和包装领域的喷墨墨水市场领域开发行业关系以及商业和营销计划。', 'events\\February2020\\RbfUaIpb29XlEIslO9v7.png', 'events\\February2020\\w2EfiqQM3GbJmBUznWX2.jpg', '2020-02-26 14:31:00', '2020-02-27 04:26:24', 'Direct-to-Garment Printing,Kornit Digital,E-commerce,Sustainability//服装直接印刷，柯尼特数码，电子商务，可持续性');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-02-25 08:46:22', '2020-02-25 08:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-02-25 08:46:22', '2020-02-25 08:46:22', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2020-02-25 08:46:23', '2020-02-26 12:38:31', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-02-25 08:46:23', '2020-02-25 08:46:23', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-02-25 08:46:23', '2020-02-25 08:46:23', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 8, '2020-02-25 08:46:23', '2020-02-26 12:38:31', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-02-25 08:46:23', '2020-02-26 12:38:31', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-02-25 08:46:23', '2020-02-26 12:38:31', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-02-25 08:46:23', '2020-02-26 12:38:31', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-02-25 08:46:23', '2020-02-26 12:38:31', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 9, '2020-02-25 08:46:23', '2020-02-26 12:38:32', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 7, '2020-02-25 08:46:30', '2020-02-26 12:38:31', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 5, '2020-02-25 08:46:31', '2020-02-26 12:38:31', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 6, '2020-02-25 08:46:32', '2020-02-26 12:38:31', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-02-25 08:46:35', '2020-02-26 12:38:32', 'voyager.hooks', NULL),
(16, 1, 'Slide Images', '', '_self', 'voyager-images', '#ff8000', NULL, 12, '2020-02-26 01:34:50', '2020-02-26 14:59:20', 'voyager.tbl-home-slides.index', 'null'),
(17, 1, 'Event', '', '_self', 'voyager-home', '#ff0000', NULL, 10, '2020-02-26 12:38:24', '2020-02-26 14:58:28', NULL, ''),
(18, 1, 'Add / Edit / Remove Event', '', '_self', 'voyager-rocket', '#ff0000', NULL, 11, '2020-02-26 14:02:44', '2020-02-26 14:59:02', 'voyager.events.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-02-25 08:46:33', '2020-02-25 08:46:33');

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
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(2, 'browse_bread', NULL, '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(3, 'browse_database', NULL, '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(4, 'browse_media', NULL, '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(5, 'browse_compass', NULL, '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(6, 'browse_menus', 'menus', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(7, 'read_menus', 'menus', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(8, 'edit_menus', 'menus', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(9, 'add_menus', 'menus', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(10, 'delete_menus', 'menus', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(11, 'browse_roles', 'roles', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(12, 'read_roles', 'roles', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(13, 'edit_roles', 'roles', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(14, 'add_roles', 'roles', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(15, 'delete_roles', 'roles', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(16, 'browse_users', 'users', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(17, 'read_users', 'users', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(18, 'edit_users', 'users', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(19, 'add_users', 'users', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(20, 'delete_users', 'users', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(21, 'browse_settings', 'settings', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(22, 'read_settings', 'settings', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(23, 'edit_settings', 'settings', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(24, 'add_settings', 'settings', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(25, 'delete_settings', 'settings', '2020-02-25 08:46:24', '2020-02-25 08:46:24'),
(26, 'browse_categories', 'categories', '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(27, 'read_categories', 'categories', '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(28, 'edit_categories', 'categories', '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(29, 'add_categories', 'categories', '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(30, 'delete_categories', 'categories', '2020-02-25 08:46:30', '2020-02-25 08:46:30'),
(31, 'browse_posts', 'posts', '2020-02-25 08:46:31', '2020-02-25 08:46:31'),
(32, 'read_posts', 'posts', '2020-02-25 08:46:31', '2020-02-25 08:46:31'),
(33, 'edit_posts', 'posts', '2020-02-25 08:46:31', '2020-02-25 08:46:31'),
(34, 'add_posts', 'posts', '2020-02-25 08:46:32', '2020-02-25 08:46:32'),
(35, 'delete_posts', 'posts', '2020-02-25 08:46:32', '2020-02-25 08:46:32'),
(36, 'browse_pages', 'pages', '2020-02-25 08:46:32', '2020-02-25 08:46:32'),
(37, 'read_pages', 'pages', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(38, 'edit_pages', 'pages', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(39, 'add_pages', 'pages', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(40, 'delete_pages', 'pages', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(41, 'browse_hooks', NULL, '2020-02-25 08:46:35', '2020-02-25 08:46:35'),
(47, 'browse_tbl_home_slides', 'tbl_home_slides', '2020-02-26 01:34:50', '2020-02-26 01:34:50'),
(48, 'read_tbl_home_slides', 'tbl_home_slides', '2020-02-26 01:34:50', '2020-02-26 01:34:50'),
(49, 'edit_tbl_home_slides', 'tbl_home_slides', '2020-02-26 01:34:50', '2020-02-26 01:34:50'),
(50, 'add_tbl_home_slides', 'tbl_home_slides', '2020-02-26 01:34:50', '2020-02-26 01:34:50'),
(51, 'delete_tbl_home_slides', 'tbl_home_slides', '2020-02-26 01:34:50', '2020-02-26 01:34:50'),
(52, 'browse_events', 'events', '2020-02-26 14:02:44', '2020-02-26 14:02:44'),
(53, 'read_events', 'events', '2020-02-26 14:02:44', '2020-02-26 14:02:44'),
(54, 'edit_events', 'events', '2020-02-26 14:02:44', '2020-02-26 14:02:44'),
(55, 'add_events', 'events', '2020-02-26 14:02:44', '2020-02-26 14:02:44'),
(56, 'delete_events', 'events', '2020-02-26 14:02:44', '2020-02-26 14:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the 吃饭lorem ipsum post 今天晚上好</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-25 08:46:32', '2020-02-26 13:35:47'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-25 08:46:32', '2020-02-25 08:46:32'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-25 08:46:32', '2020-02-25 08:46:32'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-25 08:46:32', '2020-02-25 08:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-02-25 08:46:23', '2020-02-25 08:46:23'),
(2, 'user', 'Normal User', '2020-02-25 08:46:23', '2020-02-25 08:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', NULL, '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\February2020\\Yb3ERNr94FnaHIGt7uz2.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'GFL Admin', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to administration page', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_slides`
--

CREATE TABLE `tbl_home_slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'PUBLISHED',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'HOME'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_home_slides`
--

INSERT INTO `tbl_home_slides` (`id`, `description`, `image`, `status`, `created_at`, `updated_at`, `type`) VALUES
(1, 'First Image', 'tbl-home-slides\\February2020\\Wm0q9gr8QSU8BENKxwhd.jpg', 'PUBLISHED', '2020-02-26 01:43:21', '2020-02-26 01:43:21', 'HOME'),
(2, 'Second Image', 'tbl-home-slides\\February2020\\xSr3cSLQFfCTdZfg32L8.jpg', 'PUBLISHED', '2020-02-26 01:45:25', '2020-02-26 01:45:25', 'HOME'),
(3, 'Third Image', 'tbl-home-slides\\February2020\\uDyGHwnJpkQtoYJBRK6S.jpg', 'PUBLISHED', '2020-02-26 01:45:50', '2020-02-26 01:45:50', 'HOME'),
(4, 'Any thing', 'tbl-home-slides\\February2020\\rg9VsLG0lZYlzYew6J60.jpg', 'PUBLISHED', '2020-02-26 15:01:49', '2020-02-26 15:01:49', 'EVENT'),
(5, 'I dont know', 'tbl-home-slides\\February2020\\JNosqbVL7NGccol5WY2V.jpg', 'PUBLISHED', '2020-02-26 15:02:56', '2020-02-26 15:02:56', 'EVENT'),
(6, 'asfasdf', 'tbl-home-slides\\February2020\\srLOQZzOxfSCrpFrNoKz.jpg', 'PUBLISHED', '2020-02-26 15:03:00', '2020-02-26 15:13:31', 'EVENT');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-02-25 08:46:33', '2020-02-25 08:46:33'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-02-25 08:46:34', '2020-02-25 08:46:34'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-02-25 08:46:34', '2020-02-25 08:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$OEPFNtrpS9ivwZTfNsj6zOmk7msldwRP54GvRysD0wOmlu4u0ld7e', '6JJFHHfPIM22nKCsl0tMaX5kfd289z9LJKdhB0IhXvfwJJ7yAUYRxW8DjLAp', NULL, '2020-02-25 08:46:30', '2020-02-25 08:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tbl_home_slides`
--
ALTER TABLE `tbl_home_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_home_slides`
--
ALTER TABLE `tbl_home_slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
