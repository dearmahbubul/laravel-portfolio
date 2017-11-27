-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 09:05 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_two` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_team_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hire_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribble_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `unique_id`, `name`, `position`, `age`, `email`, `email_two`, `phone`, `phone_two`, `city`, `country`, `address`, `image`, `resume`, `story_content`, `skill_content`, `experience_content`, `education_content`, `our_team_content`, `testimonial_content`, `blog_content`, `hire_link`, `website_link`, `facebook_link`, `twitter_link`, `google_plus_link`, `linkedin_link`, `pinterest_link`, `dribble_link`, `behance_link`, `status`, `created_at`, `updated_at`) VALUES
(1, '151008202904a78b1b8bd7cdd62626f873cf604a29', 'Mahbubul Alam', 'Web App Developer PHP (Laravel)', 21, 'mahbubrahman5676@gmail.com', NULL, '01774573275', '01906043504', 'Dhaka', 'Bangladesh', 'Sukrabad 20, Sher e bangla', 'images/administrator-images/cadcf51b159027081510082029.png', 'resume/cadcf51b157366501510082029.docx', 'Hello, I’m a  Full Stack Web Developer of PHP(Laravel) from Dhaka, Bangladesh. I am a Computer Science & Engineering student at 4th year at Daffodil International University. \r\nI hold a Web App Development, PHP(Laravel) degree from the BITM institute.', 'Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.', 'A man behind the gun, any sophisticated weapons. Human remains that taking the role. I am experienced in utilizing all resources.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', NULL, 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 1, '2017-11-07 19:13:49', '2017-11-07 14:22:48'),
(2, '1510085410225451b58922d862dd0de02568e98c1c', 'Mahbubul Alam', 'Web App Developer PHP', 21, 'mahbubrahman5676@gmail.com', NULL, '01774573275', '01906043504', 'Dhaka', 'Bangladesh', 'Sukrabad 20, Sher e bangla', 'images/administrator-images/81022526282298061510087028.jpg', 'resume/fedccc4d7c2010971510085410.docx', 'Hello, I’m a  Full Stack Web Developer of PHP(Laravel) from Dhaka, Bangladesh. I am a Computer Science & Engineering student at 4th year at Daffodil International University. \r\nI hold a Web App Development, PHP(Laravel) degree from the BITM institute.', 'Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.', 'A man behind the gun, any sophisticated weapons. Human remains that taking the role. I am experienced in utilizing all resources.', 'I am a student. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.', NULL, 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 'https://laravel.com/docs/5.5/validation#rule-url', 0, '2017-11-07 20:10:10', '2017-11-07 14:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `unique_id`, `category_id`, `post_title`, `post_content`, `image`, `image_two`, `writer_id`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(2, '15103426417000b2c9c20fe90c5abab5d05d151318', '15103337941587328', 'How looks a laravel project', 'Curabitur suscipit suscipit tellus. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Donec vitae sapien ut libero venenatis faucibus. In ac felis quis tortor malesuada pretium.\r\n\r\nPhotography by Picjumbo\r\nMaecenas vestibulum mollis diam. Duis vel nibh at velit scelerisque suscipit. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. In ac felis quis tortor malesuada pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nLorem ipsum dolor sit amet\r\n\r\nNullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.\r\n\r\nNulla consequat massa quis enim. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Curabitur suscipit suscipit tellus.\r\nSuspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.\r\n\r\nConsectetur adipiscing elit vtae elit libero\r\nNullam id dolor id eget lacinia odio posuere erat a ante\r\nInteger posuere erat dapibus posuere velit\r\nVestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.', 'images/blogPost-images/a7642ba8d32249041510342641.png', 'images/blogPost-images/a7642ba8d3559601510342641.png', NULL, 1, 1, '2017-11-10 19:37:21', '2017-11-10 19:37:21'),
(3, '15103427039540ac8b24697893bc0dec524c542b9e', '15103334898250998', 'About html with details', 'Curabitur suscipit suscipit tellus. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Donec vitae sapien ut libero venenatis faucibus. In ac felis quis tortor malesuada pretium.\r\n\r\nPhotography by Picjumbo\r\nMaecenas vestibulum mollis diam. Duis vel nibh at velit scelerisque suscipit. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. In ac felis quis tortor malesuada pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nLorem ipsum dolor sit amet\r\n\r\nNullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.\r\n\r\nNulla consequat massa quis enim. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Curabitur suscipit suscipit tellus.\r\nSuspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.\r\n\r\nConsectetur adipiscing elit vtae elit libero\r\nNullam id dolor id eget lacinia odio posuere erat a ante\r\nInteger posuere erat dapibus posuere velit\r\nVestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.', 'images/blogPost-images/8ced4a7a127850801510342703.jpg', 'images/blogPost-images/8ced4a7a124497701510342703.png', NULL, 1, 1, '2017-11-10 19:38:23', '2017-11-10 19:38:23'),
(4, '1510342807ad7296a671a594d7b2c75f1c8d8ec52f', '15103334898250998', 'PHP is a big platform for create project', 'Curabitur suscipit suscipit tellus. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Donec vitae sapien ut libero venenatis faucibus. In ac felis quis tortor malesuada pretium.\r\n\r\nPhotography by Picjumbo\r\nMaecenas vestibulum mollis diam. Duis vel nibh at velit scelerisque suscipit. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. In ac felis quis tortor malesuada pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nLorem ipsum dolor sit amet\r\n\r\nNullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.\r\n\r\nNulla consequat massa quis enim. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Curabitur suscipit suscipit tellus.\r\nSuspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.\r\n\r\nConsectetur adipiscing elit vtae elit libero\r\nNullam id dolor id eget lacinia odio posuere erat a ante\r\nInteger posuere erat dapibus posuere velit\r\nVestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.', 'images/blogPost-images/0e7be470176704451510342807.jpg', 'images/blogPost-images/0e7be470175128011510342807.png', NULL, 1, 1, '2017-11-10 19:40:07', '2017-11-10 19:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `unique_id`, `name`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(1, '15103334898250998', 'HTML', 1, 1, '2017-11-10 17:04:49', '2017-11-10 17:04:49'),
(2, '15103335001906217', 'CSS', 1, 1, '2017-11-10 17:05:00', '2017-11-10 17:05:00'),
(3, '15103337291478773', 'PHP', 1, 1, '2017-11-10 17:08:49', '2017-11-10 17:08:49'),
(5, '15103337941587328', 'Laravel 5.5', 1, 1, '2017-11-10 17:09:54', '2017-11-10 17:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `recycle_id` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `unique_id`, `name`, `email`, `subject`, `message`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(1, '1510245866e2788a871b45cc014b0e66c33ecd1548', 'Mahbub', 'mahbub@gmail.com', 'testing', 'testing ree', 1, 1, '2017-11-09 16:44:26', '2017-11-09 16:44:26'),
(2, '15102463867d7ecf711272451379007c085fc674db', 'ABM Rifat', 'abmrifat1@gmail.com', 'congratulate', 'Heeei Mahbub!\r\nWhat a wonderful side you designed.', 1, 1, '2017-11-09 16:53:06', '2017-11-09 16:53:06'),
(3, '15102464946e5f3b0b8046a32272e6e2ff325f4855', 'Shakib Hasan', 'shakibhasan@gmail.com', 'Experience', 'You got a lot of experiences when you have done it.', 1, 1, '2017-11-09 16:54:54', '2017-11-09 16:54:54'),
(4, '15102465629352b45657b9a00bd412b2ad8aa2d5a5', 'Shahad', 'shahad@gmail.com', 'New site', 'wow, you did a greate job.', 0, 1, '2017-11-09 16:56:03', '2017-11-09 16:56:03'),
(5, '151026709215265fb9b45eedc6c2a0303b08d3f4e6', 'Ruhul Amin', 'ruhulsbl@gmail.com', 'How can you help people', 'Hi, Mahbub\r\nI have a question for you. Would you please tell me about your experience.', 0, 1, '2017-11-09 22:38:12', '2017-11-09 22:38:12'),
(6, '1510304153d3e57917788152c840042d2448e154c4', 'Morshalin', 'morshalin@gmail.com', 'hii', 'kitaa ree', 0, 1, '2017-11-10 08:55:53', '2017-11-10 08:55:53'),
(7, '15117647624620accdcaf52b006d300e2eb101da18', 'mahb', 'mah@ad.com', 'kaka', 'kakas', 1, 1, '2017-11-27 06:39:22', '2017-11-27 06:39:22'),
(8, '1511764904463c2d3f770c029e47655973e4c39d00', 'sagor', 'sagor@gmail.com', 'Learn php', 'Hey men, What are thinking for php.', 1, 1, '2017-11-27 06:41:44', '2017-11-27 06:41:44'),
(9, '1511765042409ee205911a80c49d7624ab50972fb5', 'Somon', 'somon123@yahoo.com', 'Hello', 'Hello men, What\'s up?', 1, 1, '2017-11-27 06:44:02', '2017-11-27 06:44:02'),
(10, '151176505269677a198ec5b066091ed5013218647c', 'Somon', 'somon123@yahoo.com', 'Hello', 'Hello men, What\'s up?', 1, 1, '2017-11-27 06:44:12', '2017-11-27 06:44:12'),
(11, '151176517261e70d0f3e7457df4f4290926e5624ca', 'Rifat', 'abm19@gmail.com', 'Hmmm', 'kii ree geeedaaa, ki koris?', 1, 1, '2017-11-27 06:46:12', '2017-11-27 06:46:12'),
(12, '1511765354bc0c49e6e277c75f854db8f81a003428', 'aaa', 'sd@sd.df', 'sf', 'dsfsdf', 1, 1, '2017-11-27 06:49:14', '2017-11-27 06:49:14'),
(13, '15117715485296b868efe4f92f6842d75ff16d6e24', 'rio', 'rio@rio.com', 'rioo', 'riooo is the best', 0, 1, '2017-11-27 08:32:28', '2017-11-27 08:32:28'),
(14, '1511771643327f95fb41a839e87b4074ee7080ffbb', 'dsd', 'dfdf@dsdf.fg', 'dd', 'dd', 1, 1, '2017-11-27 08:34:03', '2017-11-27 08:34:03'),
(15, '1511771810204df8d5059d311838b2b67b18ace83e', 'add', 'ss@se.fdd', 'adasd', 'adasd', 1, 1, '2017-11-27 08:36:50', '2017-11-27 08:36:50'),
(16, '1511783863f94012a2943dd396228f87174aaf0aaf', 'rifat', 'rifat@ks.sss', 'alksdjalk', 'asdasdfasdasd', 1, 1, '2017-11-27 11:57:43', '2017-11-27 11:57:43'),
(17, '1511783912385db7a98078f3d8da7e01da2800b0af', 'dsadas', 'sds@dsa', 'adasd', 'adasdf', 1, 1, '2017-11-27 11:58:32', '2017-11-27 11:58:32'),
(18, '1511783982e28b8bed2c90f842ab6a21c9caf13a9f', 'dsfsd', 'sfsd@sdf', 'sdfgs', 'sdfgsd', 1, 1, '2017-11-27 11:59:42', '2017-11-27 11:59:42'),
(19, '1511812700b9b279c5db1246f96b6588433e61741c', 'Mahbubul Alam', 'mahbubrahman5676@gmail.com', 'Test contact us form', 'Hi, man? what\'s up?', 1, 1, '2017-11-27 19:58:20', '2017-11-27 19:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_year` int(11) NOT NULL,
  `ending_year` int(11) NOT NULL,
  `degree_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `unique_id`, `starting_year`, `ending_year`, `degree_name`, `institute_name`, `image`, `comment`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(1, '15100915924bdf4dc4d9ad29907f39d3fa2b23a9eb', 2012, 2014, 'HSC', 'Shahjalal City College', 'images/education-images/37928e173b7697261510091592.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-07 21:53:12', '2017-11-07 21:53:12'),
(2, '151009174101de093a4259b548f85a9e43cc076f65', 2015, 2019, 'B.sc in CSE', 'Daffodil International University', 'images/education-images/81f3c4cf047254701510091741.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-07 21:55:41', '2017-11-07 16:01:42'),
(3, '15100917935fc024ed33582f86ac8382b08878f685', 2015, 2016, 'Web Design', 'Training with live project', 'images/education-images/76c3ce9aa0589831510091793.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-07 21:56:33', '2017-11-07 21:56:33'),
(4, '15100920737bafbd8fadf9ef1952462eca095e085a', 2017, 2018, 'Web App Development', 'BITM', 'images/education-images/f8a2b761cf565021510155508.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-07 22:01:13', '2017-11-07 22:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_month` int(11) NOT NULL,
  `starting_year` int(11) NOT NULL,
  `ending_month` int(11) DEFAULT NULL,
  `ending_year` int(11) DEFAULT NULL,
  `present` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `unique_id`, `position`, `company_name`, `image`, `starting_month`, `starting_year`, `ending_month`, `ending_year`, `present`, `comment`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(1, '15099867054f39f4d960fb4fddd63219854e29cf82', 'Web design', 'DIU IT', 'images/experience-images/e005e3e08a5637851509986705.jpg', 1, 2016, 3, 2017, NULL, 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-06 10:00:00', '2017-11-06 10:00:00'),
(2, '1509987929d7c28657aced86e67585b39cdaa1f860', 'Web Developer, PHP', 'DIU IT', 'images/experience-images/535109324a8533821509987929.jpg', 9, 2016, 6, 2017, NULL, 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-06 17:05:29', '2017-11-06 17:05:29'),
(3, '15099880214151433fa37abbcee35d6e2df0277947', 'Web Developer, PHP(Laravel)', 'DIU IT', 'images/experience-images/42a0e6d9008248521509988021.jpg', 3, 2017, 11, 2017, NULL, 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-06 17:07:01', '2017-11-06 17:07:01'),
(4, '150998807840034e215b22b699c300749729c9d299', 'Website Tester', 'DIU IT', 'images/experience-images/f8479a394b831211509988078.png', 3, 2017, 12, 2017, NULL, 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-06 17:07:58', '2017-11-06 17:07:58');

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
(3, '2017_11_03_053632_create_skills_table', 2),
(4, '2017_11_05_084835_create_testimonials_table', 3),
(5, '2017_11_06_044027_create_experiences_table', 4),
(6, '2017_11_06_175250_create_administrators_table', 5),
(7, '2017_11_07_205935_create_education_table', 6),
(8, '2017_11_07_214839_create_education_table', 7),
(9, '2017_11_08_161515_create_teams_table', 8),
(10, '2017_11_09_061808_create_portfolios_table', 9),
(11, '2017_11_09_062953_create_portfolio_categories_table', 9),
(12, '2017_11_09_132220_create_contacts_table', 10),
(13, '2017_11_10_111834_create_blogs_table', 11),
(14, '2017_11_10_115753_create_blog_posts_table', 11),
(15, '2017_11_10_125837_create_blog_post_categories_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `unique_id`, `category_id`, `item_name`, `title`, `portfolio_content`, `demo_url`, `image`, `image_two`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(3, '1510231150b8ae25e220f7827a9d783bd7f1ecdc35', '15102139068676224', 'Travel & Tour', 'Travel website made by OOP PHP', 'A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.', 'https://www.facebook.com/', 'images/portfolio-images/e2b7d6e4cc9405961510231150.png', 'images/portfolio-images/e2b7d6e4cc7994441510231150.png', 1, 1, '2017-11-09 12:39:10', '2017-11-09 12:39:10'),
(4, '15102326646d042745416827e89774545d9198d068', '15102138872731339', 'Service', 'Service website made by Procedural PHP', 'A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.', 'https://www.facebook.com/', 'images/portfolio-images/f5e24ef7722342191510232664.png', 'images/portfolio-images/f5e24ef7723145581510232664.png', 1, 1, '2017-11-09 13:04:24', '2017-11-09 13:04:24'),
(5, '15103440269bb11de2f50ab419fe57b05bc89ce78b', '15102136052070682', 'Portfolio', 'Portfolio with Laravel', 'A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.', 'http://mahbubulsoft.com/', 'images/portfolio-images/e538edeee24624611510344026.png', 'images/portfolio-images/e538edeee25689141510344026.png', 1, 1, '2017-11-10 20:00:26', '2017-11-10 20:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `unique_id`, `name`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(1, '15102136052070682', 'WEB DESIGN', 1, 1, '2017-11-09 07:46:45', '2017-11-09 07:46:45'),
(2, '15102138872731339', 'PHP PROCEDURAL', 1, 1, '2017-11-09 07:51:27', '2017-11-09 07:51:27'),
(3, '15102139068676224', 'PHP OOP', 1, 1, '2017-11-09 07:51:46', '2017-11-09 07:51:46'),
(4, '15102139209485093', 'PHP LARAVEL', 1, 1, '2017-11-09 07:52:00', '2017-11-09 07:52:00'),
(5, '15102139722543275', 'Wordpress Theme', 1, 1, '2017-11-09 07:52:52', '2017-11-09 07:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_percentage` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `unique_id`, `skill_name`, `skill_percentage`, `status`, `created_at`, `updated_at`) VALUES
(1, '15097238930db30e579ff85f455fe67a0a2dd7a89f', 'PHP', 88, 1, '2017-11-03 16:16:00', '2017-11-04 18:27:14'),
(2, '1509726290c2c09ed733bf48a53e7204e4251cb3d7', 'HTML', 92, 1, '2017-11-03 16:24:50', '2017-11-04 18:28:16'),
(3, '150972711664e75fdc417046b33fc64edcff00398f', 'CSS', 80, 1, '2017-11-03 16:38:36', '2017-11-03 16:38:36'),
(4, '15097274309a28f658dbf162c7c11b5f6583a244ef', 'JavaScript', 60, 1, '2017-11-03 16:43:50', '2017-11-03 16:43:50'),
(5, '150972859118854c35fc4cce1560b483e08ae7ef7a', 'Jquery', 50, 1, '2017-11-03 17:03:11', '2017-11-03 17:03:11'),
(6, '15097286422506911e1163862c50f99ea86f475077', 'Laravel', 80, 1, '2017-11-03 17:04:02', '2017-11-03 17:04:02'),
(7, '1509728685313c07d3354f5cf940880d1c2619fe24', 'CodeIgniter', 50, 1, '2017-11-03 17:04:45', '2017-11-03 17:04:45'),
(8, '150972886526924aed5c6f403bf1e0719f19b5f53e', 'Wordpress', 55, 1, '2017-11-03 17:07:45', '2017-11-03 17:07:45'),
(9, '1509728942fd98216a0a9ba472160486b1ea727189', 'Web App Developent', 75, 1, '2017-11-03 17:09:02', '2017-11-03 17:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `unique_id`, `name`, `position`, `website_url`, `image`, `comment`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(1, '15101628647ab294af25b0b966fabac9d8d042324a', 'Mahbubul Alam', 'CEO, Web App Developer(Laravel)', 'https://www.facebook.com/mahbub5676', 'images/team-images/c869f9a1988596461510162864.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-08 17:41:04', '2017-11-08 17:41:04'),
(2, '15101630300b563dff358e9d204f7795a84b04a633', 'Khorshed Alam', 'Web App Developer, PHP(Laravel)', 'https://www.facebook.com/abm.khorshedalamrifat', 'images/team-images/18826c5ae63196531510163030.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-08 17:43:50', '2017-11-08 17:43:50'),
(3, '1510164005bcb585abe07d2e8a766a6a3b9e8b9395', 'Razu Shikdar', 'Software Tester', 'https://www.facebook.com/profile.php?id=100004794169346', 'images/team-images/718f99bd704737581510164005.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-08 18:00:05', '2017-11-08 18:00:05'),
(4, '1510164052cc55e17c170d936a503e83490d541572', 'Shakib Hasan', 'Designer', 'https://www.facebook.com/shakibsumon6113', 'images/team-images/830ccc509d8003641510164052.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-08 18:00:52', '2017-11-08 12:15:57'),
(5, '1510164113b60a168b3c54d8e5aa9fc9dcc10dd45d', 'Mohainin Hossain', 'Manager', 'https://www.facebook.com/alazyboyy', 'images/team-images/305cacb7133934561510164113.jpg', 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.', 1, 1, '2017-11-08 18:01:53', '2017-11-08 12:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `recycle_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `unique_id`, `name`, `image`, `designation`, `company_name`, `comment`, `status`, `recycle_id`, `created_at`, `updated_at`) VALUES
(6, '1509928986c19607f8d92c713dc6efa3bf2e75e255', 'Prof. Dr. Syed Akhter Hossain', 'images/testimonial-images/0f67478b4e2605941509930717.jpg', 'Head', 'DIU', 'Amazing PHP (Laravel) coding style, I really love your work. I wish you will be famous developer', 1, 1, '2017-11-06 00:43:06', '2017-11-05 19:14:08'),
(7, '15099310237138859b28025e59467af0d18f186118', 'Dr. Sheak Rashed Haider Noori', 'images/testimonial-images/9701d29c4a535701509931023.JPG', 'Associate Professor', 'DIU', 'I see your coding style, really you did well. I see you have a good knowledge in Laravel framework.', 1, 1, '2017-11-06 01:17:03', '2017-11-06 01:17:03'),
(8, '1509931301a87723ec14c0147489a8ccb4bfc33c73', 'Famid Ahmed', 'images/testimonial-images/e686a62c702671781509931301.jpg', 'Teacher', 'BITM', 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor', 1, 1, '2017-11-06 01:21:41', '2017-11-06 01:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahbubul Alam', 'mahbubrahman5676@gmail.com', '$2y$10$9yJmBrMJZXFc0qjk.pgh/e1Q/4LGhTRGONPf27nHXQC2clD3hkSn.', 'ZK0bl1xP4JZTLNjezAjvv8iICBMF8Lx0PKbjz6qplmoDDlaS8jBHV2dEZYTc', '2017-11-02 23:33:04', '2017-11-02 23:33:04'),
(2, 'Mahbubul Alam', 'mahbubulsoft@gmail.com', '$2y$10$1zsQnTuuUD43r5bgwhEYQOhe.MJlsYc.dgMh/hPRNpb0kB.RHtYXu', 'CyZSMvmlkcwt6mTT0FUuRDntJsX43vNqlEb1SKn2eZogInGgtZCTksenB4SZ', '2017-11-10 22:57:02', '2017-11-10 22:57:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
