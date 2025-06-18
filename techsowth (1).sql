-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2025 at 12:04 AM
-- Server version: 10.6.21-MariaDB-cll-lve
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techsowth`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `headerphoto` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `headerphoto`, `description`, `photo1`, `photo2`, `photo3`, `created_at`, `updated_at`) VALUES
(11, 'ग्राम विकासातील सौर ऊर्जेचा वाटा', NULL, 'आजच्या आधुनिक युगामध्ये वेगवेगळ्या ऊर्जा स्त्रोतापासून आपण आपली ऊर्जेची गरज भागवत आहोत. कोळसा, लाकडे,रॉकेल, पेट्रोल ह्या पारंपरिक ऊर्जा स्त्रोताबरोबरच आज सौर ऊर्जा. पवनचक्की पासून तयार होणारी ऊर्जा, सीएनजी सारखे biofuel ह्यांच्यापासून सुद्धा आपली ऊर्जेची गरज मोठ्या प्रमाणात भागवली जात आहे.आधुनिक संशोधनाने हे स्त्रोत आता विश्वसनीय वाटत आहेत. सौर ऊर्जा तर भारतासारख्या देशात सर्वत्र मुबलक प्रमाणात मिळणारा ऊर्जा स्त्रोत आहे. त्याचा जास्तीत जास्त वापर आपण आपल्या वापरासाठी कश्या पद्धतीने करून घेऊ शकतो हे आपण आज पाहणार आहोत.ग्रामीण भागात खूप मोठ्या प्रमाणात 3 phase विजेची समस्या आपल्याला अनुभवायला मिळते. महिन्यात प्रत्येक आठवड्याला 3 phase ची शिफ्ट बदलत असते. त्यामुळे आपल्याला कधी रात्री उशिरा, मध्यरात्री किंवा पहाटे पहाटे पिकांना पाणी देण्यासाठी जावे लागते. नाही म्हणल तरी हे काम स्वतः शेतकरी वर्गच करतो. त्यामुळे अपुरी झोप, बिघडणारी दिनचर्या ह्यासारख्या समस्यांना त्याला तोंड द्यावे लागते. ह्याला उपाय म्हणून आपण आपल्या शेतातील पंपाला सौर उर्जेवर चालवू शकतो. ह्यामुळे आपल्याला सकाळी 8 वाजता पासून ते संध्याकाळी 5 वाजेपर्यन्त अखंड पाणी मिळू शकते. विशेष म्हणजे ह्या पाण्यासाठी तुम्हाला MSEB च्या लाइट वर अवलंबवून असण्याची गरज संपते. आपल्याला हवे तितक्या वेळ आपण पिकांना पाणी देऊ शकतो. चित्रामधे दाखविल्याप्रमाणे सोलार पॅनल च्या सहाय्याने सौर उर्जेवर हा पंप चालतो. पॅनल वर पडणार्या सुर्याप्रकाशातून वीज निर्मिती होते. आणि त्यावर आपला पंप चालतो. असे पंप लावण्यासाठी सरकार सुद्धा काही योजनांमधून प्रोत्साहन देत असते.सध्या मुख्यमंत्री सौर कृषि पंप योजनेचा लाभ घेऊन शेतकरी आपल्या शेतात अनुदानित सौर पंप बसवू शकतात. त्यामध्ये महत्वाची अट हीच आहे की शेतकर्याच्या शेतात कुठलाही पारंपरिक ऊर्जा स्त्रोताद्वारे वीज आलेली नसावी. म्हणजे सदरील संकेत स्थळावर जाऊन घेता येईल. ज्यांच्याकडे MSEB चे कनेक्शन आहे असे शेतकरी स्वखर्चावर सौर पंप लावू शकतात. सुरवातीचा खर्च जरी जास्त असला तरी मुबलक प्रमाणात सकाळच्या वेळेमधे मिळणारा ऊन आणि पाणी बघता, पिकाचे उत्पन्न वाढण्यास मदत होते आणि त्यामुळे ही एक दूरगामी गुंतवणूक म्हणून पाहायला हरकत नाही.   तसेच सौर ऊर्जेचा वापर करून आपण घरातील सर्व उपकरणे चालवू शकतो आणि आपल्याला MSEB च्या वीज बिलापासून कायमची मुक्ती मिळू शकते. शेतातील सर्व मशीन, घरातील सर्व उपकरणे हे सौर उर्जेवर चालल्याने आपली पैश्याची प्रचंड प्रमाणात बचत होते. सौर ऊर्जा वापरल्याने आपल्याकडुन देखील पर्यावरणपूरक अश्या ऊर्जेचा वापर करता येईल आणि ही ऊर्जा मेंटेनेंस फ्री असल्याने आपल्याला ह्या उर्जेपासून काहीही तोटा नाही.ग्रामविकासकडे लक्ष देताना ग्रामपंचायती मार्फत आपण गावामध्ये जे स्ट्रीट लाइट बसवतो ते सुद्धा सौर उर्जेवर चालतात. सकाळच्या वेळेमधे सौर उर्जेवर ह्या लाइट मधील बॅटरी चार्ज होते व जशी संध्याकाळ होते तसे हे लाइट ऑटोमॅटिक लागतात. गेल्या 5-7 वर्षात जवळपास सर्व गावांमध्ये आपण हे लाइट पहिले असतीलच. परंतु बॅटरी चोरी होण्याचे प्रमाण पाहता त्या लाइटचा उपयोग तेवढा नव्हता. परंतु आधुनिक लाइट मध्ये बॅटरी ही खांबाच्या टोकाला लाइट सोबतच दिल्यामुळे बॅटरी चोरी ही जवळजवळ अशक्य गोष्ट झाली आहे. त्यामुळे गावामध्ये पूर्ण वेळ लाइट आपल्याला अनुभवायला मिळू शकते. त्यासाठी सरकारने सर्व ग्रामपंचायती मध्ये आवश्यक असा निधि उपलब्ध करून दिला आहे. सरपंच आणि ग्रामसेवक ह्यांच्या निदर्शनास आणून एक सुजन नागरिक म्हणून आपल्या गावासाठी आपण हे नक्कीच करू शकतो.सौर ऊर्जेचा जास्तीत जास्त आपल्या रोजच्या आयुष्यात करून आपल्या देशाला पारंपरिक ऊर्जा स्त्रोतापासून मुक्त करून एक “सोलार नेशन” कडे नेण्याकडे आपण आपल्यापासून सुरवात करून खरीचा वाटा नक्कीच उचलू शकतो. मकरंद अयाचित Founder, Techsowth Electrical Infra\r\n\r\n+91 7385101392\r\nayachit.makarand@gmail.com', NULL, NULL, NULL, '2024-07-18 13:30:20', '2024-07-18 13:30:20'),
(12, 'Summary of report on ‘Action Plan for the achievement of 175 Gigawatt (GW) Renewable Energy Target’', NULL, 'Against the target of 100 GW of solar energy, a total of only 35.12 GW of solar power capacity has been installed in the Country as on 30.06.2020. Solar power projects of 31.48 GW are under various stages of implementation for which Letters of Intent have been issued. \r\n\r\n \r\n\r\nThe government had taken several steps to ensure the achievement of the physical target concerning Solar Energy. It had launched the following schemes for the same. \r\n\r\n \r\n\r\nSolar Park Scheme for setting up of over 50 Solar Parks and Ultra Mega Solar Power Projects targeting over 40,000 MW of solar power projects. \r\nScheme for setting up of Grid-Connected Solar PV Power Projects by the Central Public Sector Undertakings (CPSUs) and the Government of India organizations with Viability Gap Funding (VGF). \r\nVGF Scheme for setting up of 5000 MW of Grid-Connected Solar PV Power Projects through SECI, which has a separate component of 1000 MW for N-E states. \r\nInstallation of Grid Connected Solar Rooftop Power Plants. \r\nOff-Grid Solar PV Scheme.\r\n \r\n\r\nHowever, all these mentioned schemes have not been able to achieve the desire results. The Ministry gave several behind not being able to fulfill the targets. Regarding significant reasons for the low utilization of funds under grid-connected solar power, the Ministry stated that funds reserved for the North East States are not fully utilized. \r\n\r\n \r\n\r\nSolar Ground Mounted Projects\r\n\r\n \r\n\r\nThe Ministry\'s target was to install 40 GW of solar power by setting up over 50 solar parks and Ultra Mega Solar Power Projects by 2022. Nowhere near the actual target, speaking of the present status of the Solar Park Scheme, the Ministry stated that it had approved 39 nos. of solar parks of an aggregate capacity of 22,879 MW in 17 States. \r\n\r\n \r\n\r\nThese parks are at different stages of development. Out of the approved solar park, infrastructure in 8 nos. of solar parks is almost fully developed where solar projects of aggregate capacity 6580 MW have also been commissioned. In addition, four nos. of solar parks are partially developed where solar projects of aggregate capacity 1365 MW have been commissioned\r\n\r\n \r\n\r\nThe panel recorded that the remaining 11 solar parks of aggregate capacity of 17,121 MW have not even got the approval of the Ministry, although these solar parks have to be developed and projects there in commissioned by 2022. Further, only 20 percent of the 82 approved solar parks are fully developed so far, and another 10 percent are only somewhat developed, leaving as much as 70 percent unachieved.\r\n\r\n \r\n\r\nThe Committee stated that it is \"disappointed\" with the Ministry\'s sluggish progress so far. It has fully developed only eight solar parks in more than five years (2015-20), and an aggregate capacity of 32,055 MW is yet to be commissioned to achieve the stipulated target by 2022. \r\n\r\n \r\n\r\nThe Ministry, in response, has informed that the major challenge in the development of solar parks is the acquisition of land that is dependent upon cooperation from the State Governments and other stakeholders.\r\n\r\n \r\n\r\nSpeaking on the progress made in this sector, the Ministry stated that under the Solar Park Scheme, around 1,17,000 acres of land had been identified for the setting of various solar parks, out of which about 85,000 acres have been acquired.  \r\n\r\n \r\n\r\nSolar Rooftop Programme\r\n\r\n \r\n\r\nRegarding the solar rooftop Programme, the Ministry stated that Phase II of the Grid connected rooftop solar programme was approved with a target for achieving a cumulative capacity of 40,000 MW from Rooftop Solar (RTS) Projects by the year 2022 in February 2019. The programme will be implemented with the total central financial support of Rs. 11,814 crore through DISCOMs. Operational guidelines have been issued on August 20, 2019.\r\n\r\n \r\n\r\nIn the Phase-II Programme, Central Financial Assistance (CFA) for the residential sector has been restructured with the availability of 40% CFA for RTS systems up to 3 kW capacity and 20% for RTS system capacity beyond 3 kW and up to 10 kW. For Group Housing Societies/Residential Welfare Associations (GHS/RAW), CFA will be limited to 20% for RTS plants for supply of power to common facilities. However, the capacity eligible for CFA for GHS/RAW will be limited to 10 kW per house with a maximum total capacity of up to 500 kWp, inclusive of RTS put in individual houses in the GHS/RWA. \r\n\r\n \r\n\r\nThe Ministry further added that solar rooftops have been found to be remunerative, and the average payback period of such projects varies from 5-6 years, and the expected life is up to 25 years with subsidy.\r\n\r\n \r\n\r\nThe possible reasons for slow progress in Solar Rooftop Programme, the Ministry stated as under: i) Involvement of multiple stakeholders viz. State Nodal Agencies, DISCOMs, Public Sector Undertakings, Developers, etc. ii) Reluctance of DISCOMs due to revenue loss; availability of net— meter; CEIG inspection for smaller plants, etc. iii) Lack of mandatory notification/ Lack of State policies. iv) Lack of uniform regulations.\r\n\r\n \r\n\r\nNet-Metering under the grid-connected rooftop solar system is a metering arrangement under which a rooftop owner pays to the Power distributing company (DISCOM) on net metering basis.\r\n\r\n \r\n\r\nOn the aspect of net metering, the Ministry has stated that: Although, all the State/Joint Electricity Regulatory Commissions have issued net metering regulation/tariff orders, but there are various diverse parameters in terms of capacity allowed for net metering based on minimum capacity/maximum capacity/% of connected load, % of DT capacity, payment for excess exported solar electricity /category allowed for net –metering, etc. Ministry has requested Forum of regulator to develop model regulations for this so that States may adopt.\r\n\r\n \r\n\r\nRegarding the steps taken by the Government to promote solar rooftops in the Country, the Ministry has informed the Committee that: \r\n\r\n \r\n\r\nUnder phase II of the programme Electricity Distribution Companies (DISCOMs) have been made as implementing agencies and CFA is available for residential sector only. Incentives for the DISCOMs for the achievement of additional capacity above baseline have also been provided.\r\n \r\n\r\nPersuading States to notify the net/gross metering regulations for RTS projects. Now 36 States/UTs/SERCs have notified such regulations and/or tariff orders. \r\n \r\n\r\nPrepared model MoU, PPA, and Capex Agreement for expeditious implementation of RTS projects in Govt. Sector. \r\n \r\n\r\nAllocate Ministry-wise expert PSUs for handholding and support in the implementation of RTS projects in various Ministries/Departments. \r\n \r\n\r\nCreation of SPIN an online platform for expediting project approval, report submission, and monitoring progress of implementation of RTS projects.\r\n \r\n\r\nFacilitated availability of concessional loans from World Bank and Asian Development Bank (ADB) through SBI and PNB respectively, for disbursal of loans to industrial and commercial sectors, where CFA/incentive is not being provided by the Ministry. \r\n \r\n\r\nAssisting States in development/integration of online portal and aggregation of demands related to rooftop solar projects\r\n \r\n\r\nAs per SolarMarts, though the overall pace of installation solar projects is slow and sluggish, but still, it is making some progress, and we can be optimistic about the future and will soon change a shift from the fossil energy towards green energy.', NULL, NULL, NULL, '2024-07-18 15:02:05', '2024-07-18 15:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `blog_id` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '1660246306.banner_1.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(2, '1', '1660246306.banner_2.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(3, '1', '1660246306.banner_3.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(4, '2', '1660246306.banner_2.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(5, '2', '1660246306.banner_1.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(6, '2', '1660246306.banner_3.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(7, '3', '1660246306.banner_3.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(8, '3', '1660246306.banner_2.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(9, '3', '1660246306.banner_1.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(10, '4', '1660246306.banner_1.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(11, '4', '1660246306.banner_2.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(12, '4', '1660246306.banner_3.jpg', '2022-08-11 19:31:46', '2022-08-11 19:31:46'),
(13, '5', '1677396316.WhatsApp Image 2023-02-26 at 12.53.07 PM.jpeg', '2023-02-26 07:25:16', '2023-02-26 07:25:16'),
(14, '5', '1677396316.WhatsApp Image 2023-02-26 at 12.53.06 PM (1).jpeg', '2023-02-26 07:25:16', '2023-02-26 07:25:16'),
(15, '5', '1677396316.WhatsApp Image 2023-02-26 at 12.53.06 PM.jpeg', '2023-02-26 07:25:16', '2023-02-26 07:25:16'),
(16, '5', '1677396316.WhatsApp Image 2023-02-26 at 12.53.05 PM.jpeg', '2023-02-26 07:25:17', '2023-02-26 07:25:17'),
(17, '6', '1694147278.WhatsApp Image 2023-09-08 at 9.56.26 AM.jpeg', '2023-09-08 04:27:58', '2023-09-08 04:27:58'),
(18, '7', '1699101544.1698862961.author.jpg', '2023-11-04 12:39:04', '2023-11-04 12:39:04'),
(19, '8', '1703820893.PXL_20220328_085314844.MP.jpg', '2023-12-29 03:34:55', '2023-12-29 03:34:55'),
(20, '8', '1703820895.PXL_20230406_151858798.MP.jpg', '2023-12-29 03:34:57', '2023-12-29 03:34:57'),
(21, '8', '1703821031.PXL_20231209_062745079.jpg', '2023-12-29 03:37:12', '2023-12-29 03:37:12'),
(22, '9', '1721281391.Agrivoltaic-Jacks-Solar-Farm-Photo-by-Werner-Slocum-NREL-3.jpeg', '2024-07-18 05:43:11', '2024-07-18 05:43:11'),
(23, '10', '1721282147.Agrivoltaic-Jacks-Solar-Farm-Photo-by-Werner-Slocum-NREL-3.jpeg', '2024-07-18 05:55:47', '2024-07-18 05:55:47'),
(31, '11', '1721284221.Agrivoltaic-Jacks-Solar-Farm-Photo-by-Werner-Slocum-NREL-3.jpeg', '2024-07-18 06:30:22', '2024-07-18 06:30:22'),
(28, '11', '1721284220.14-5.webp', '2024-07-18 06:30:21', '2024-07-18 06:30:21'),
(29, '11', '1721284221.solar-water-heating-system-repair-service-500x500.webp', '2024-07-18 06:30:21', '2024-07-18 06:30:21'),
(30, '11', '1721284221.Agricultural-Farms-Benefit-from-Solar-power-745x445.jpg', '2024-07-18 06:30:21', '2024-07-18 06:30:21'),
(32, '12', '1721289725.solar-system-2939560.jpg', '2024-07-18 08:02:10', '2024-07-18 08:02:10'),
(33, '13', '1721289792.IMG-20221027-WA0007.jpg', '2024-07-18 08:03:12', '2024-07-18 08:03:12');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `slug`, `type`, `image`, `image_second`, `image_third`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Body Of Work', 'Body Of Work', 'main', '1627314517.jpg', '1627314517_second.jpg', '1627314517_third.jpg', 'Dr. Yogesh D. Niturkar is a highly accomplished individual with an impressive track record in the field of Homoeopathy. He earned his MD in Homoeopathic Materia Medica (HMM) from the prestigious Dr. M. L. Dhawale Memorial Homoeopathic Institute under Mumbai University. Since 17 years, he has been dedicated to practicing Classical Homoeopathy at the Mathura Homoeopathic Clinic in Latur, Maharashtra.\nHis passion for teaching led him to contribute as a Lecturer (Assistant Professor) in the Department of Organon of Medicine & Philosophy at V. K. Homoeopathic Medical College & Hospital, Latur, which is affiliated with the Maharashtra University of Health Sciences in Nashik. He has an impressive ongoing teaching experience of 16 years.\nHis research and scholarly work are equally remarkable, with authorship of 112 scientific, evidence-based research papers, case studies, and doctrinal articles in esteemed National and International Homoeopathic journals and newsletters. Dr. Niturkar is also an accomplished book reviewer, having contributed to the review process of 12 Homoeopathic books and numerous articles.\nHe is actively engaged with the Homoeopathic community by serving as a life member and associate editor of the National Journal of Homoeopathy (NJH), The Homoeopathic Heritage and as a representative of Vital Informer. Dr. Niturkar has shared his research findings and insights on 26 different platforms, including Homoeopathic symposiums, congresses, conferences, and seminars held in various cities across India.\nIn addition to his academic and research pursuits, Dr. Niturkar has been a guest faculty member at the PG Department of Guru Mishri Homoeopathic Medical College and Research Institute in Shelgaon. He is deeply committed to health promotion and disease prevention programs, contributing to the well-being of his community.\nHis dedication to the field of Homoeopathy extends to leadership roles, as he proudly served as the Maharashtra State Leader for the International Homoeopathic Congress in 2016. His contributions have been recognized and appreciated by the Homoeopathic Doctors Association of Maharashtra, which awarded him the title of \"The Most Popular Teacher\" from the Marathwada region in 2017.\nBeyond his professional accomplishments, Dr. Niturkar is Project Secretary of RSS Jankalyan Samiti (Maharashtra Prant), overseeing the operations of the Samvedana Cerebral Palsy Vikasan Kendra in Latur. He also serves as the Secretary of the Local Management Committee of District Disability Rehabilitation Centre (DDRC) in Latur, dedicating 17 years of his life to various Sewa Karya (service activities) in the field of disability. Dr. Niturkar\'s multifaceted contributions to the field of Homoeopathy and his community reflect his unwavering commitment to health, education, and social welfare.\n', 'AC', '2021-07-04 17:39:27', '2023-11-04 11:44:46'),
(2, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1627314737.png', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-26 10:22:17'),
(3, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1627314813.png', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-26 10:23:33'),
(4, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(5, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(6, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(7, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(8, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(9, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(10, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(11, '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', '2 ऑक्टोबर 1991 रोजी भटके-विमुक्त सन विकास परिषदेची पुणे येथे स्थापना झाली', 'cms', '1.jpg', '', '', '', 'AC', '2021-07-04 17:39:27', '2021-07-04 12:18:49'),
(12, 'एकलव्य प्रार्थमिक आश्रमशाळा', 'एकलव्य प्रार्थमिक आश्रमशाळा', 'seva', '1.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2023-02-26 05:59:18'),
(13, 'पालावरची शाळा', 'पालावरची शाळा', 'seva', '2.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2023-02-26 07:10:07'),
(14, 'शबरीमाता कन्या वस्तीगृह', 'शबरीमाता कन्या वस्तीगृह', 'seva', '3.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2023-02-26 07:10:14'),
(15, 'क्रीडाकुल', 'क्रीडाकुल', 'seva', '4.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2023-02-26 07:10:19'),
(16, 'सांस्कृतिक दल', 'सांस्कृतिक दल', 'seva', '5.jpg', NULL, NULL, 'शबरी माता कन्या वसतिगृह भटके समाजात मुलीचे शिक्षण हा आस्थेचा विषय नाही मुलींना शिकवणे एखाद्दे पाप असावे अशी या समाजाची मानसिकता पण यमगरवाडी प्रकल्प पर महादेवी भोसले मुन्नी आली आणि तिच्यासाठी शबरीमाता वस्तीगृह सुरू झाले वस्तीगृहा मध्ये 2013 मध्ये 150 मुले असून वसतीगृहाची सुसज्ज इमारत आहे.', 'AC', '2021-07-04 17:50:48', '2023-02-26 07:10:27'),
(17, 'अनसरवाडा सेवा प्रकल्प', 'अनसरवाडा सेवा प्रकल्प', 'seva', '6.jpg', NULL, NULL, 'गोपालन करतात म्हणून गोपाळ, खेळ करतात म्हणून खेळकरी, कुस्ती व मेहनतीचे काम करतात म्हणून पहिलवान अशा वेगवेगळ्या नावाने ओळखला जाणारा गोपाळ समाज विविध कसरतीचे खेळ करून आपली उपजीविका करतो. हे लोक कसरतीचे खेळ करतात पण घरात चूल पेटत नाही. घरही नाही, पालही नाही, मग चूल पेटणार कोठे? लोक देतील ते भीक, शिळे तुकडे पाण्यात बुडून पोटाची खळगी भरणारा हा समाज. गोपाळ समाज विकास परिषदेने खेळकरी गोपाळांना हक्काचे गाव, हातांना काम आणि निवासाला घर मिळावे म्हणून गोपाळ समाजातील लोकांना सोबत घेऊन अनसरवाडा, ता. निलंगा जि. लातूर येथे सेवा प्रकल्प सुरू केला. भिक्षेवर जगणाऱ्या या समाजाला मुख्य प्रवाहात आणण्यासाठी स्वच्छतेच्या सवयी लावणे, मुलांना शिक्षण, बचत गटाच्या माध्यमातून महिलांना काम, बॅंड पथकाच्या माध्यमातून पुरुषांना काम या प्रकारे गेली 17 वर्षे काम चालू आहे\r\n\r\n\r\n1995 साली अंसरवाडा गावातील नरसिंग झरे या तरुणाने गोपाळांच्या वस्तीत शिकवण्यासाठी संपर्क केला. एकवेळ गोड भाताचे जेवण दिले, भिक्षा न मागता पोटाला अन्न मिळू लागले. त्यातून शिक्षणाची ओळख झाली. आज या वस्तीत 50 मुले शिकत आहेत, 40 मुले बालवाडी ते चौथीपर्यंत शिक्षण घेत आहेत. 10 मुले 5 वी ते 8 वी या वर्गात शिकत आहेत. पालावरची शाळा, बालवाडी, गोकुळ महिला उत्पादन केंद्र, गोकुळ बँड कंपनी इ. उपक्रम सुरू आहेत. महिला बचत गटाच्या सखुबाई बंडी धनगर या प्रमुख आहेत. पुणे येथे जाऊन त्यांनी 6 महिन्यांचे वाखाच्या वस्तू बनवण्याचे प्रशिक्षण घेतले. येथे बनवलेल्या वस्तूंना अजंठा-वेरूळ महोत्सवात बचत गटाचे प्रथम क्रमांकाचे पारितोषिक मिळाले. 60 पुरुषांची तीन बँड पथके काम करीत आहेत. त्यातून त्यांना काही प्रमाणात रोजगार उपलब्ध झाला आहे.\r\n\r\n\r\nलोक लोकसहभाग व देणगी यातून गोपाळ समाजातील लोकांसाठी घरांचे बांधकाम सध्या चालू आहे. त्यातील 12 घरे बांधून पूर्ण झाली आहेत. बाकीच्या कुटुंबांना घरे लवकर देण्यात येत आहेत. अनिकेत अकिंचित,असहाय्य अशा भटके विमुक्त समाजाला विकासाच्या दिशेकडे नेण्यासाठीचा हा प्रयत्न.', 'AC', '2023-02-26 06:01:24', '2023-02-26 07:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `title`, `file`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Techsowth Electrical Infra Company Profile', '1721276606.header222.jpg', 'Download our comprehensive company profile for detailed information on our products and services.', '2024-07-18 11:23:26', '2024-07-18 04:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `caption` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `photo`, `caption`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Project Capacity – 80kW  Panel – Bifacial Monocrystalline Half Cut and Monocrystalline half cut', NULL, NULL, NULL, '2024-07-17 21:13:02', '2024-07-17 21:13:02'),
(4, 'Project Size – 25 kW Structure height – 16 ft (MS)', NULL, NULL, NULL, '2024-07-17 21:25:01', '2024-07-17 21:25:01'),
(5, 'Project Size – 20kW Structure height – 12 ft', NULL, NULL, NULL, '2024-07-17 21:32:01', '2024-07-17 21:32:01'),
(6, 'Project Capacity – 20kW  Structure on Tin shed', NULL, NULL, NULL, '2024-07-17 22:55:18', '2024-07-17 22:55:18'),
(7, 'Project Capacity – 15 kW Structure – 15 ft ( 48 Row Houses common load on Solar)', NULL, NULL, NULL, '2024-07-17 22:57:51', '2024-07-17 22:57:51'),
(8, 'Project capacity – 20 kW', NULL, NULL, NULL, '2024-07-17 23:03:42', '2024-07-17 23:03:42'),
(9, 'Project Size – 30kW Structure Height – 25 ft', NULL, NULL, NULL, '2024-07-17 23:04:51', '2024-07-17 23:04:51'),
(10, 'Sanjay Quality Restaurant - 30kW', NULL, NULL, NULL, '2024-07-17 23:11:31', '2024-07-17 23:11:31'),
(11, 'Residential Project 03kW under PM Suryaghar Yojna in Pune', NULL, NULL, NULL, '2024-08-23 17:00:21', '2024-08-23 17:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `gallery_id` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image`, `created_at`, `updated_at`) VALUES
(20, '3', '1721225582.gallary 1.jpg', '2024-07-17 14:13:02', '2024-07-17 14:13:02'),
(21, '4', '1721226301.Gallary 3.jpg', '2024-07-17 14:25:01', '2024-07-17 14:25:01'),
(22, '5', '1721226721.Gallary 4.jpg', '2024-07-17 14:32:01', '2024-07-17 14:32:01'),
(23, '6', '1721231718.Project Capacity – 20kW.jpg', '2024-07-17 15:55:18', '2024-07-17 15:55:18'),
(24, '7', '1721231871.Project Capacity_15 kW.jpg', '2024-07-17 15:57:51', '2024-07-17 15:57:51'),
(25, '8', '1721232222.Picture6.jpg', '2024-07-17 16:03:42', '2024-07-17 16:03:42'),
(26, '9', '1721232291.Picture7.jpg', '2024-07-17 16:04:51', '2024-07-17 16:04:51'),
(27, '10', '1721232691.Picture8.jpg', '2024-07-17 16:11:31', '2024-07-17 16:11:31'),
(28, '11', '1724407221.AAAAAAA.jpeg', '2024-08-23 10:00:22', '2024-08-23 10:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_13_132516_create_galleries_table', 1),
(5, '2021_07_13_144603_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `photo`, `caption`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Sanjay Quality Restaurant - 30kW', NULL, NULL, NULL, '2024-07-17 23:36:48', '2024-07-17 23:36:48'),
(4, 'Fergusson College, Pune Project Capacity – 75 kW', NULL, NULL, NULL, '2024-07-17 23:39:03', '2024-07-17 23:39:03'),
(5, 'Vishwa Palace Mangal Karyalaya. Project Capacity – 40kW', NULL, NULL, NULL, '2024-07-17 23:39:55', '2024-07-17 23:39:55'),
(6, 'Project Size – 30kW Structure Height – 25 ft', NULL, NULL, NULL, '2024-07-17 23:41:39', '2024-07-17 23:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

CREATE TABLE `projects_images` (
  `id` int(11) NOT NULL,
  `projects_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_images`
--

INSERT INTO `projects_images` (`id`, `projects_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '3', '1721234208.Sanjay Quality Restaurant - 30kW.jpg', '2024-07-17 16:36:48', '2024-07-17 16:36:48'),
(2, '4', '1721234343.Fergussion College pune.jpg', '2024-07-17 16:39:03', '2024-07-17 16:39:03'),
(3, '5', '1721234395.Vishwa Palace Mangal Karyalaya..jpg', '2024-07-17 16:39:55', '2024-07-17 16:39:55'),
(4, '6', '1721234499.Project Size – 30kW Structure Height – 25 ft.jpg', '2024-07-17 16:41:39', '2024-07-17 16:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `project_videos`
--

CREATE TABLE `project_videos` (
  `id` int(11) NOT NULL,
  `project_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `video_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Techsowth Electrical Infra', 'We Assure Your Techno Socio Growth', '2024-08-29 11:37:37', '2024-08-29 06:07:37'),
(8, 'Empowering Communities through Solar Innovation.', 'So, Let the sun power your future.', '2024-08-29 11:39:13', '2024-08-29 06:09:13'),
(9, 'Techsowth Electrical Infra insuring', 'Solar Powering a Greener Tomorrow.', '2024-08-29 11:39:41', '2024-08-29 06:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `slider_id` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `slider_id`, `image`, `created_at`, `updated_at`) VALUES
(32, '7', '1724931458.header222.jpg', '2024-08-29 11:37:38', '2024-08-29 11:37:38'),
(33, '8', '1724931553.header333.jpg', '2024-08-29 11:39:13', '2024-08-29 11:39:13'),
(36, '9', '1733643991.1724931458.header222.jpg', '2024-12-08 07:46:32', '2024-12-08 07:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(9, 'Fergusson college(Chairman), Pune', 'The team at Techsowth Electrical Infra was efficient and professional. Our solar panels were installed quickly, and we\'re already seeing significant savings on our energy bills.', '2024-08-29 11:45:14', '2024-08-29 06:15:14'),
(10, 'Sayas Karad, Latur', 'I\'m impressed with the quality of workmanship from  Techsowth Electrical Infra. They explained everything clearly, and our solar system is performing beyond our expectations.', '2024-08-29 11:45:35', '2024-08-29 06:15:35'),
(11, 'Virendra Sawant, Sanjay Quality, Latur', 'Choosing  Techsowth Electrical Infra for our solar installation was the best decision we made. The entire process was smooth, from initial consultation to final installation. Highly recommended!', '2024-08-29 11:45:58', '2024-08-29 06:15:58'),
(12, 'Tushar Mhetre, Vishwa Palace', 'The customer service at  Techsowth Electrical Infra was outstanding. They were responsive to all our questions and concerns, and the installation crew was polite and efficient.', '2024-08-29 11:46:18', '2024-08-29 06:16:18'),
(13, 'Rajendra Shah, Pune', 'I\'m very satisfied with the performance of our solar panels installed by Techsowth Electrical Infra  . They delivered on time and within budget, and the savings on our electricity bills are noticeable.', '2024-08-29 11:46:33', '2024-08-29 06:16:33'),
(14, 'Hemant Gujrati, Pune', 'Our experience with Techsowth Electrical Infra was excellent. They provided a detailed assessment of our energy needs and delivered a customized solar solution that fits perfectly for our home.', '2024-08-29 11:46:50', '2024-08-29 06:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) NOT NULL,
  `usertype` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin ajit', '9665664645', 'admin', 'admin@gmail.com', NULL, '$2y$10$JcOSP1mjLX1T37F6t5b77OsjBAVjFZDwkmUMbxQFtw/nSpxefZ47m', NULL, '2021-07-03 21:19:52', '2021-07-04 07:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_images`
--
ALTER TABLE `projects_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_videos`
--
ALTER TABLE `project_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects_images`
--
ALTER TABLE `projects_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_videos`
--
ALTER TABLE `project_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
