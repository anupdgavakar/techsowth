-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 08:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(200) NOT NULL,
  `type` enum('main','cms','seva') NOT NULL DEFAULT 'cms',
  `image` text NOT NULL,
  `image_second` varchar(255) DEFAULT NULL,
  `image_third` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` enum('AC','IN','DL') NOT NULL DEFAULT 'AC',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `slug`, `type`, `image`, `image_second`, `image_third`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'कोण आहेत भटके-विमुक्त?', 'कोण आहेत भटके-विमुक्त?', 'main', '1.jpg', '1.jpg', '1.jpg', 'भारतीय समाज हा सुमारे प्रमुख 400 जाती आणि 5000 हजार उपजातीनी तयार झाला आहे. समाजाची जडणघडण होण्यासाठी कामाची विभागणी झाली. या कर्मविभागणीचेच पुढे जातीव्यवस्थेत रूपांतर झाले. विविध जातींमध्ये विभागलेला हा समाज “हिंदू” या धर्माच्या छत्रछायेखाली प्राचीन काळापासून एकत्र नांदतो आहे. काळाच्या ओघात या समाजव्यवस्थेला वैगुण्याची कीड लागली. जातीतून अस्पृश्यता जन्माला आली. व्यवसाय, सामाजिक व्यवहार यांच्याऐवजी जात जन्मानुसार ठरू लागली. बहुसंख्य समाज या अस्पृश्यतेच्या, विषमतेच्या रोगाचा बळी ठरला.\r\n\r\nयाच समाजात असणारा एक घटक म्हणजे भटके-विमुक्त होय. 48 प्रमुख व 200 उपजातींत विखुरलेला हा समाज कायमचा समाजव्यवस्थेबाहेर फेकला गेला. आधी येथील समाजव्यवस्थेने आणि नंतर परकीय आक्रमकांनी या भटके-विमुक्तांना देशोधडीला लावले. सांगायला गाव नाही, राहायला घर नाही, अशी दैन्यावस्था या समाजावर आली. मुळात हा भटके-विमुक्त समाज म्हणजे काय हे समजून घेतले पाहिजे.\r\n\r\nआपल्या देशाला प्राचीन काळापासून एक समृध्द वारसा लाभला आहे. आपला देश अनेक क्षेत्रांत अग्रस्थानावर होता. जागतिक पातळीवर सर्व क्षेत्रात नेतृत्व करणारा आपला देश होता. अजिंठा व वेरूळची लेणी, अशोकस्तंभ ही त्यांची काही उदाहरणे होत. एका चिरंतन संस्कृतीचा वारसा आपल्या समाजाला लाभला आहे आणि या संस्कृतिकचे वाहक होते आज ज्यांना भटके-विमुक्त म्हटले जाते ते समाजबांधव.', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:15:33'),
(2, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(3, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(4, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(5, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(6, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(7, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(8, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(9, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(10, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(11, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(12, 'शबरीमाता कन्या वस्तीगृह', 'शबरीमाता कन्या वस्तीगृह', 'seva', '1.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2021-07-04 17:50:48'),
(13, 'शबरीमाता कन्या वस्तीगृह', 'शबरीमाता कन्या वस्तीगृह', 'seva', '1.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2021-07-04 17:50:48'),
(14, 'शबरीमाता कन्या वस्तीगृह', 'शबरीमाता कन्या वस्तीगृह', 'seva', '1.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2021-07-04 17:50:48'),
(15, 'शबरीमाता कन्या वस्तीगृह', 'शबरीमाता कन्या वस्तीगृह', 'seva', '1.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2021-07-04 17:50:48'),
(16, 'शबरीमाता कन्या वस्तीगृह', 'शबरीमाता कन्या वस्तीगृह', 'seva', '1.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2021-07-04 17:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` enum('slider','banner') NOT NULL DEFAULT 'slider',
  `status` enum('AC','IN','DL') NOT NULL DEFAULT 'AC',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, '1625416989.jpg', 'banner', 'AC', '2021-07-04 16:43:09', '2021-07-04 16:43:09'),
(3, '1625417897.jpg', 'slider', 'AC', '2021-07-04 16:46:26', '2021-07-04 11:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin ajit', '9665664645', 'admin', 'admin@gmail.com', NULL, '$2y$10$JcOSP1mjLX1T37F6t5b77OsjBAVjFZDwkmUMbxQFtw/nSpxefZ47m', NULL, '2021-07-03 21:19:52', '2021-07-04 07:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
