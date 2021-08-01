-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 03:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ybbadmin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `password`, `status`, `id_summit`, `image`) VALUES
(1, 'qoriahindah', 'dummy', 1, 1, 'default.jpg'),
(2, 'hendra', 'hendra', 1, 1, 'default.jpg'),
(3, 'meldi', 'meldi123', 0, 1, 'default.jpg'),
(4, 'aldi', 'aldi123', 1, 1, 'default.jpg'),
(5, 'ahna', 'ahna123', 0, 1, 'default.jpg'),
(6, 'laras', 'laras123', 0, 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

CREATE TABLE `influencers` (
  `referral_code` varchar(50) NOT NULL DEFAULT '-',
  `full_name` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `field_of_study` varchar(50) NOT NULL,
  `tiktok` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`referral_code`, `full_name`, `institution`, `field_of_study`, `tiktok`, `instagram`, `status`) VALUES
('-', '-', '-', '-', '-', '-', 0),
('ALFHIS01', 'Alfhis Halimatus Sa’diah', 'Politeknik Kesejahteraan Sosial Bandung', '-', 'https://www.tiktok.com/anantashaliza', 'https://www.instagram.com/alfhissaaa_', 1),
('ANNISA02', 'Annisa Maharani Sholihah', 'University State of Malang', 'Biology ', 'www.tiktok.com/@cokiesandkrim', 'https://www.instagram.com/annisamhrni_/', 1),
('ELGA03', 'Elga Yulia Delvira', 'Siliwangi University', 'Sharia economic', 'https://vt.tiktok.com/ZGJks581p/', 'https://vt.tiktok.com/ZGJks581p/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meal_attendances`
--

CREATE TABLE `meal_attendances` (
  `id_meal_attendance` int(11) NOT NULL,
  `id_participant` varchar(50) NOT NULL,
  `id_summit_day` int(11) NOT NULL,
  `id_meal_type` int(11) NOT NULL,
  `check_in_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_attendances`
--

INSERT INTO `meal_attendances` (`id_meal_attendance`, `id_participant`, `id_summit_day`, `id_meal_type`, `check_in_time`) VALUES
(1, '0FkIptVWVifKb9sHqhvsWDDVinx2', 1, 1, '2021-07-26 15:42:00'),
(2, 'Ot5hSQXb0Gh1Z6xMpPhGsOpBKm63', 1, 3, '2021-07-16 15:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `meal_types`
--

CREATE TABLE `meal_types` (
  `id_meal_type` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_types`
--

INSERT INTO `meal_types` (`id_meal_type`, `description`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id_participant` varchar(50) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_fully_funded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id_participant`, `id_summit`, `email`, `status`, `qr_code`, `created_date`, `is_fully_funded`) VALUES
('0FkIptVWVifKb9sHqhvsWDDVinx2', 1, 'hendrapolover@gmail.com', 2, '0FkIptVWVifKb9sHqhvsWDDVinx2.png', '2021-07-26 07:26:17', 1),
('3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 1, 'hendracodes@gmail.com', 2, '3Fvu6qHKvnhfkbx6tP4ybIWYTJz2.png', '2021-07-29 18:24:31', 0),
('bVrAI8rKLFbsL8oGhJhZ79GXBkr2', 1, 'subaktialdi88@gmail.com', 1, 'bVrAI8rKLFbsL8oGhJhZ79GXBkr2.png', '2021-07-26 14:40:35', 0),
('deafaef', 1, 'sdsdjsd', 0, 'deafaef.png', '2021-07-27 14:00:51', 0),
('deafaefdsfsffe', 1, 'sdsdjsd', 0, 'deafaefdsfsffe.png', '2021-07-27 14:02:38', 0),
('h1uFHHAfzLTp6s3LI0EdpY5M6mn2', 1, 'subaktialdi688@gmail.com', 0, 'h1uFHHAfzLTp6s3LI0EdpY5M6mn2.png', '2021-07-26 15:37:02', 0),
('Icsd98LatKcS94gyrPx5NAyvFtz2', 1, 'ybbuserdemo@gmail.com', 1, 'Icsd98LatKcS94gyrPx5NAyvFtz2.png', '2021-07-29 09:18:07', 0),
('Ot5hSQXb0Gh1Z6xMpPhGsOpBKm63', 1, 'meldilatifah75@gmail.com', 2, 'Ot5hSQXb0Gh1Z6xMpPhGsOpBKm63.png', '2021-07-29 09:51:14', 0),
('ynD3p86rqVc2mOIO83YOpXdWGtX2', 1, 'ybb.admn@gmail.com', 1, 'ynD3p86rqVc2mOIO83YOpXdWGtX2.png', '2021-07-26 08:02:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `participant_details`
--

CREATE TABLE `participant_details` (
  `id_participant` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `field_of_study` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `emergency_contact` varchar(50) NOT NULL,
  `wa_number` varchar(20) NOT NULL,
  `ig_account` varchar(20) NOT NULL,
  `tshirt_size` varchar(5) NOT NULL,
  `disease_history` varchar(100) NOT NULL,
  `contact_relation` varchar(20) NOT NULL,
  `is_vegetarian` int(11) NOT NULL,
  `subtheme` varchar(20) NOT NULL,
  `essay` varchar(1000) NOT NULL,
  `social_projects` varchar(100) NOT NULL,
  `talents` varchar(100) NOT NULL,
  `achievements` varchar(100) NOT NULL,
  `experiences` varchar(100) NOT NULL,
  `know_program_from` varchar(20) NOT NULL,
  `source_account_name` varchar(20) NOT NULL,
  `video_link` varchar(100) NOT NULL,
  `id_participant_detail` int(11) NOT NULL,
  `referral_code` varchar(50) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant_details`
--

INSERT INTO `participant_details` (`id_participant`, `photo`, `full_name`, `birthdate`, `gender`, `address`, `nationality`, `occupation`, `field_of_study`, `institution`, `emergency_contact`, `wa_number`, `ig_account`, `tshirt_size`, `disease_history`, `contact_relation`, `is_vegetarian`, `subtheme`, `essay`, `social_projects`, `talents`, `achievements`, `experiences`, `know_program_from`, `source_account_name`, `video_link`, `id_participant_detail`, `referral_code`) VALUES
('Icsd98LatKcS94gyrPx5NAyvFtz2', 'image_picker6299147311716960643.jpg', 'typical for', '1991-01-17', 'Female', 'very fun', 'Brazil (BR)', 'cc’ing was', 'but the only', 'very fun', '88888', '85555555', 'ghost', 'XL', 'he was', 'for me I', 0, 'Mental Health', 'mytttty us the world is so special and I am ', 'but the only ', 'no I didn’t ', 'for me I ', ' the new version ', 'Facebook', 'good game to ', 'no I didn’t get ', 10, 'ALFHIS01'),
('ynD3p86rqVc2mOIO83YOpXdWGtX2', 'image_picker6299147311716960643.jpg', 'he was so', '2000-01-01', 'Female', 'know what you', 'Aruba (AW)', 'nnnn', 'my phone', 'just a', '9464646', '55464949', 'just a few', 'L', 'know', 'love you', 0, 'Public Policy', 'very much for', 'now I have', 'no I have', 'ki bu evy', 'şu hayatta', 'Friends', 'my phone', 'but I', 11, '-'),
('Ot5hSQXb0Gh1Z6xMpPhGsOpBKm63', 'image_picker6299147311716960643.jpg', 'sjsksn', '2000-01-16', 'Female', 'bdsndn', 'Andorra (AD)', 'hddjdndn', 'bdndndmd', 'bdndndmd', '0852136497879', '6282136880503', 'vsjsnssnsn', 'XXL', 'bdbdndnd', 'dbsnsn', 0, 'Education', 'hsbsnsns', 'sbsbdbbd', 'bssndnns', 'bsbsnssn', 'vssnsnsn', 'Instagram', 'hshsnsns', 'www.google.com', 13, '-'),
('bVrAI8rKLFbsL8oGhJhZ79GXBkr2', 'image_picker6299147311716960643.jpg', 'yes', '2002-12-18', 'Male', 'yes', 'Albania (AL)', 'yes', 'yes', 'yee', '123', '123', 'yes', 'XXXL', 'yeso', 'yes', 0, 'Public Policy', 'yes', 'yee', 'yes', 'yes', 'yee', 'Friends', 'yes', 'yes', 14, 'ALFHIS01'),
('3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 'image_picker7114416971282611376.jpg', 'John Doe', '1997-01-16', 'Male', 'fefef', 'Armenia (AM)', 'fdfd', 'fdfd', 'fdfd', '344343', '3234343', 'gggddf', 'XXXL', 'fdfdfdk', 'dfdfd', 0, 'Public Health', 'dsdsdsd', 'dsdsd', 'dsdsd', 'sdsdsd', 'dsdsd', 'Facebook', 'ddsds', 'dsdsd', 16, 'ANNISA02');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payment` int(11) NOT NULL,
  `id_participant` varchar(50) NOT NULL,
  `id_payment_type` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_proof` varchar(100) NOT NULL,
  `check_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL DEFAULT 2,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id_payment`, `id_participant`, `id_payment_type`, `bank_name`, `account_name`, `payment_date`, `payment_proof`, `check_status`, `payment_status`, `id_admin`, `amount`) VALUES
(16, '0FkIptVWVifKb9sHqhvsWDDVinx2', 1, 'BRI', 'Suhendra', '2021-07-14', 'image_picker453257986816052625.jpg', 0, 1, 2, 125000),
(17, 'Icsd98LatKcS94gyrPx5NAyvFtz2', 1, 'can’t believe', 'but the', '2021-07-26', 'image_picker_34CC9FFC-6353-41E8-B742-0C174F3EEE5E-45259-000031143C627F99.jpg', 0, 0, 2, 125000),
(18, 'Ot5hSQXb0Gh1Z6xMpPhGsOpBKm63', 1, 'bca', 'meldi', '2021-07-19', 'image_picker5173265194771113449.jpg', 0, 1, 2, 125000),
(19, 'bVrAI8rKLFbsL8oGhJhZ79GXBkr2', 1, 'yes', 'yed', '2021-07-27', 'image_picker1581598350890209490.jpg', 0, 0, 2, 125000),
(20, 'bVrAI8rKLFbsL8oGhJhZ79GXBkr2', 1, 'yes', 'yed', '2021-07-07', 'image_picker7308521593916863144.jpg', 0, 2, 2, 125000),
(25, '3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 1, 'xcxcxc', 'xzxzxzx', '2021-07-30', 'image_picker3159738715885703539.jpg', 0, 1, 2, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_payment_type` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id_payment_type`, `id_summit`, `description`, `start_date`, `end_date`, `type`) VALUES
(1, 1, 'Registration', '2021-07-15', '2021-09-02', 'regist_fee'),
(2, 1, 'Program Fee Batch 1', '2021-10-15', '2021-09-17', 'program_fee_1'),
(3, 1, 'Program Fee Batch 2', '2021-11-30', '2021-10-21', 'program_fee_2');

-- --------------------------------------------------------

--
-- Table structure for table `summits`
--

CREATE TABLE `summits` (
  `id_summit` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `regist_fee` int(11) NOT NULL,
  `program_fee` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `regist_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summits`
--

INSERT INTO `summits` (`id_summit`, `description`, `regist_fee`, `program_fee`, `status`, `regist_status`) VALUES
(1, 'The 5th Istanbul Youth Summit (IYS)', 125000, 5500000, 1, 1),
(2, 'Asia Youth Summit (AYS) 2021', 1, 1, 0, 0),
(3, 'Digital Youth Summit (DYS)', 0, 0, 0, 0),
(4, 'Global Youth Ambassador (GYA)', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `summit_contents`
--

CREATE TABLE `summit_contents` (
  `id_summit_content` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summit_contents`
--

INSERT INTO `summit_contents` (`id_summit_content`, `id_admin`, `id_summit`, `title`, `description`, `file_path`, `file_type`, `created_date`, `modified_date`, `status`) VALUES
(17, 2, 1, 'Registration Announcement', 'The 5th Istanbul Youth Summit is coming very very soon!  Are you ready to expand your network? Are you ready to gain insightful knowledge? Are you ready raise your idea? Are you ready to collaborate together with other young leaders?  This is your golden chance!', '2021-07-26_10.jpg', 'jpg', '2021-07-26 03:50:56', '2021-07-26 03:50:56', 1),
(18, 2, 1, 'Invasion Rush', 'rfrgrgefefe', 'no file', 'no type', '2021-07-28 17:26:09', '2021-07-28 17:26:09', 0),
(19, 2, 1, 'new content', 'drgrrggrfefe', 'WhatsApp_Image_2021-07-27_at_12.28.32_PM.jpeg', 'jpeg', '2021-07-28 17:38:17', '2021-07-28 17:38:17', 0),
(20, 2, 1, 'o.lik,lij', 'tbhththbt', '20210701053555_COMP6364_FIN_RCQuestion.pdf', 'pdf', '2021-07-28 17:44:29', '2021-07-28 17:44:29', 0),
(21, 2, 1, ' v nvbnfv ', '', '22.jpg', 'jpg', '2021-07-28 17:46:10', '2021-07-30 05:34:35', 2);

-- --------------------------------------------------------

--
-- Table structure for table `summit_days`
--

CREATE TABLE `summit_days` (
  `id_summit_day` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `day_date` date NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summit_days`
--

INSERT INTO `summit_days` (`id_summit_day`, `id_summit`, `day_date`, `description`) VALUES
(1, 1, '2021-07-21', 'First Day');

-- --------------------------------------------------------

--
-- Table structure for table `summit_timelines`
--

CREATE TABLE `summit_timelines` (
  `id_summit_timeline` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `timeline` varchar(50) DEFAULT NULL,
  `start_timeline` date NOT NULL,
  `end_timeline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summit_timelines`
--

INSERT INTO `summit_timelines` (`id_summit_timeline`, `id_summit`, `description`, `timeline`, `start_timeline`, `end_timeline`) VALUES
(1, 1, 'Registration', 'August 1- 31, 2021', '2021-07-23', '2021-08-31'),
(2, 1, 'Letter of Agreement Distribution', 'September 15, 2021', '2021-09-15', '2021-09-16'),
(3, 1, 'Program Fee Payment Batch 1', 'October 15, 2021', '2021-10-15', '2021-10-16'),
(4, 1, 'Interview for Fully Funded Participants', 'October 23 - 24, 2021', '2021-10-23', '2021-10-24'),
(5, 1, 'Program Fee Payment Batch 2', 'November 30, 2021', '2021-11-30', '2021-12-01'),
(6, 1, 'Final Announcement for Fully Funded Participants', 'December 5, 2021', '2021-12-05', '2021-12-06'),
(7, 1, 'The 5th Istanbul Youth Summit', 'February 14 - 17, 2022', '2022-02-14', '2022-02-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_id_summit_admin` (`id_summit`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`referral_code`);

--
-- Indexes for table `meal_attendances`
--
ALTER TABLE `meal_attendances`
  ADD PRIMARY KEY (`id_meal_attendance`),
  ADD KEY `id_participant` (`id_participant`),
  ADD KEY `id_meal_type` (`id_meal_type`),
  ADD KEY `id_summit_day` (`id_summit_day`) USING BTREE;

--
-- Indexes for table `meal_types`
--
ALTER TABLE `meal_types`
  ADD PRIMARY KEY (`id_meal_type`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participant`),
  ADD KEY `fk_id_summit_participant` (`id_summit`);

--
-- Indexes for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD PRIMARY KEY (`id_participant_detail`),
  ADD KEY `fk_participant_details_id` (`id_participant`),
  ADD KEY `fk_ref_inf` (`referral_code`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `fk_participant_payment` (`id_participant`),
  ADD KEY `fk_type_payment` (`id_payment_type`),
  ADD KEY `fk_admin_payment` (`id_admin`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id_payment_type`),
  ADD KEY `id_summit` (`id_summit`);

--
-- Indexes for table `summits`
--
ALTER TABLE `summits`
  ADD PRIMARY KEY (`id_summit`);

--
-- Indexes for table `summit_contents`
--
ALTER TABLE `summit_contents`
  ADD PRIMARY KEY (`id_summit_content`),
  ADD KEY `fk_admin_summit_content` (`id_admin`),
  ADD KEY `fk_id_summit_content` (`id_summit`);

--
-- Indexes for table `summit_days`
--
ALTER TABLE `summit_days`
  ADD PRIMARY KEY (`id_summit_day`),
  ADD KEY `id_summit` (`id_summit`);

--
-- Indexes for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  ADD PRIMARY KEY (`id_summit_timeline`),
  ADD KEY `fk_id_summit_timeline` (`id_summit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `meal_attendances`
--
ALTER TABLE `meal_attendances`
  MODIFY `id_meal_attendance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meal_types`
--
ALTER TABLE `meal_types`
  MODIFY `id_meal_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participant_details`
--
ALTER TABLE `participant_details`
  MODIFY `id_participant_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id_payment_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `summits`
--
ALTER TABLE `summits`
  MODIFY `id_summit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `summit_contents`
--
ALTER TABLE `summit_contents`
  MODIFY `id_summit_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `summit_days`
--
ALTER TABLE `summit_days`
  MODIFY `id_summit_day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  MODIFY `id_summit_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_id_summit_admin` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `meal_attendances`
--
ALTER TABLE `meal_attendances`
  ADD CONSTRAINT `meal_attendances_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `meal_attendances_ibfk_2` FOREIGN KEY (`id_summit_day`) REFERENCES `summit_days` (`id_summit_day`),
  ADD CONSTRAINT `meal_attendances_ibfk_3` FOREIGN KEY (`id_meal_type`) REFERENCES `meal_types` (`id_meal_type`);

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `fk_id_summit_participant` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD CONSTRAINT `fk_ref_inf` FOREIGN KEY (`referral_code`) REFERENCES `influencers` (`referral_code`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_admin_payment` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `fk_participant_payment` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `fk_type_payment` FOREIGN KEY (`id_payment_type`) REFERENCES `payment_types` (`id_payment_type`);

--
-- Constraints for table `summit_contents`
--
ALTER TABLE `summit_contents`
  ADD CONSTRAINT `fk_admin_summit_content` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `fk_id_summit_content` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `summit_days`
--
ALTER TABLE `summit_days`
  ADD CONSTRAINT `summit_days_ibfk_1` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  ADD CONSTRAINT `fk_id_summit_timeline` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
