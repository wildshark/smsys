-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2018 at 05:06 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_data`
--
CREATE DATABASE IF NOT EXISTS `school_data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school_data`;

-- --------------------------------------------------------

--
-- Table structure for table `academic_session`
--

CREATE TABLE IF NOT EXISTS `academic_session` (
  `yearID` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`yearID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `academic_session`
--

INSERT INTO `academic_session` (`yearID`, `year`, `statusID`) VALUES
(1, '2000/2001', 2),
(2, '2001/2002', 2),
(3, '2002/2003', 2),
(4, '2003/2004', 2),
(5, '2004/2005', 2),
(6, '2005/2006', 2),
(7, '2006/2007', 2),
(8, '2007/2008', 2),
(9, '2008/2009', 2),
(10, '2009/2010', 2),
(11, '2010/2011', 2),
(12, '2011/2012', 2),
(13, '2012/2013', 2),
(14, '2013/2014', 2),
(15, '2014/2015', 2),
(16, '2015/2016', 2),
(17, '2016/2017', 2),
(18, '2017/2018', 2),
(19, '2018/2019', 1),
(20, '2019/2020', 1),
(21, '2020/2021', 1),
(22, '2021/2022', 1),
(23, '2022/2023', 1),
(24, '2023/2024', 1),
(25, '2024/2025', 1),
(26, '2025/2026', 1),
(27, '2026/2027', 1),
(28, '2027/2028', 1),
(29, '2028/2029', 1),
(30, '2029/2030', 1),
(31, '2030/2031', 1),
(32, '2031/2032', 1),
(33, '2032/2033', 1),
(34, '2033/2034', 1),
(35, '2034/2035', 1),
(36, '2035/2036', 1),
(37, '2036/2037', 1),
(38, '2037/2038', 1),
(39, '2038/2039', 1),
(40, '2039/2040', 1),
(41, '2040/2041', 1),
(42, '2041/2042', 1),
(43, '2042/2043', 1),
(44, '2043/2044', 1),
(45, '2044/2045', 1),
(46, '2045/2046', 1),
(47, '2046/2047', 1),
(48, '2047/2048', 1),
(49, '2048/2049', 1),
(50, '2049/2050', 1),
(51, '2050/2051', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `access` int(3) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `username`, `password`, `email`, `access`, `status`) VALUES
(1, 'admin', 'admin', 'andyquaye@outlook.com', 1, 1),
(2, 'andrew', 'admin', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignmentID` int(11) NOT NULL AUTO_INCREMENT,
  `asignment_date` date DEFAULT NULL,
  `semesterID` int(11) DEFAULT NULL,
  `levleID` int(11) DEFAULT NULL,
  `lecturerID` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `submit_date` date DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`assignmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `calendarID` int(11) NOT NULL AUTO_INCREMENT,
  `semester_year` varchar(255) DEFAULT NULL,
  `semesterID` int(11) DEFAULT NULL,
  `activities` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`calendarID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendarID`, `semester_year`, `semesterID`, `activities`, `start_date`, `end_date`, `statusID`) VALUES
(5, '2000/2001', 0, 'sdsdf', '2018-05-24', '0000-00-00', 1),
(7, '2000/2001', 1, 'dfdfg', '2018-05-24', '2018-05-24', 1),
(8, '2000/2001', 1, 'dfdfg', '2018-05-24', '2018-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE IF NOT EXISTS `category_list` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `classificationID` int(11) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`categoryID`, `category_name`, `classificationID`) VALUES
(1, 'Local Student', 1),
(2, 'Foreign Student', 1),
(3, 'Teaching Staff', 2),
(4, 'Non Teching Staff', 2),
(5, 'Single', 3),
(6, 'Married', 3),
(7, 'Active', 4),
(8, 'Passive', 4),
(9, 'Terminiated', 4),
(10, 'Full-Time', 5),
(11, 'Part-Time', 5);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `countryID` int(3) NOT NULL AUTO_INCREMENT,
  `alpha_2_code` varchar(2) DEFAULT NULL,
  `alpha_3_code` varchar(3) DEFAULT NULL,
  `country` varchar(52) DEFAULT NULL,
  `nationality` varchar(39) DEFAULT NULL,
  PRIMARY KEY (`countryID`),
  UNIQUE KEY `alpha_2_code` (`alpha_2_code`),
  UNIQUE KEY `alpha_3_code` (`alpha_3_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=895 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countryID`, `alpha_2_code`, `alpha_3_code`, `country`, `nationality`) VALUES
(4, 'AF', 'AFG', 'Afghanistan', 'Afghan'),
(8, 'AL', 'ALB', 'Albania', 'Albanian'),
(10, 'AQ', 'ATA', 'Antarctica', 'Antarctic'),
(12, 'DZ', 'DZA', 'Algeria', 'Algerian'),
(16, 'AS', 'ASM', 'American Samoa', 'American Samoan'),
(20, 'AD', 'AND', 'Andorra', 'Andorran'),
(24, 'AO', 'AGO', 'Angola', 'Angolan'),
(28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antiguan or Barbudan'),
(31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaijani, Azeri'),
(32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(36, 'AU', 'AUS', 'Australia', 'Australian'),
(40, 'AT', 'AUT', 'Austria', 'Austrian'),
(44, 'BS', 'BHS', 'Bahamas', 'Bahamian'),
(48, 'BH', 'BHR', 'Bahrain', 'Bahraini'),
(50, 'BD', 'BGD', 'Bangladesh', 'Bangladeshi'),
(51, 'AM', 'ARM', 'Armenia', 'Armenian'),
(52, 'BB', 'BRB', 'Barbados', 'Barbadian'),
(56, 'BE', 'BEL', 'Belgium', 'Belgian'),
(60, 'BM', 'BMU', 'Bermuda', 'Bermudian, Bermudan'),
(64, 'BT', 'BTN', 'Bhutan', 'Bhutanese'),
(68, 'BO', 'BOL', 'Bolivia (Plurinational State of)', 'Bolivian'),
(70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian'),
(72, 'BW', 'BWA', 'Botswana', 'Motswana, Botswanan'),
(74, 'BV', 'BVT', 'Bouvet Island', 'Bouvet Island'),
(76, 'BR', 'BRA', 'Brazil', 'Brazilian'),
(84, 'BZ', 'BLZ', 'Belize', 'Belizean'),
(86, 'IO', 'IOT', 'British Indian Ocean Territory', 'BIOT'),
(90, 'SB', 'SLB', 'Solomon Islands', 'Solomon Island'),
(92, 'VG', 'VGB', 'Virgin Islands (British)', 'British Virgin Island'),
(96, 'BN', 'BRN', 'Brunei Darussalam', 'Bruneian'),
(100, 'BG', 'BGR', 'Bulgaria', 'Bulgarian'),
(104, 'MM', 'MMR', 'Myanmar', 'Burmese'),
(108, 'BI', 'BDI', 'Burundi', 'Burundian'),
(112, 'BY', 'BLR', 'Belarus', 'Belarusian'),
(116, 'KH', 'KHM', 'Cambodia', 'Cambodian'),
(120, 'CM', 'CMR', 'Cameroon', 'Cameroonian'),
(124, 'CA', 'CAN', 'Canada', 'Canadian'),
(132, 'CV', 'CPV', 'Cabo Verde', 'Cabo Verdean'),
(136, 'KY', 'CYM', 'Cayman Islands', 'Caymanian'),
(140, 'CF', 'CAF', 'Central African Republic', 'Central African'),
(144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lankan'),
(148, 'TD', 'TCD', 'Chad', 'Chadian'),
(152, 'CL', 'CHL', 'Chile', 'Chilean'),
(156, 'CN', 'CHN', 'China', 'Chinese'),
(158, 'TW', 'TWN', 'Taiwan, Province of China', 'Chinese, Taiwanese'),
(162, 'CX', 'CXR', 'Christmas Island', 'Christmas Island'),
(166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Cocos Island'),
(170, 'CO', 'COL', 'Colombia', 'Colombian'),
(174, 'KM', 'COM', 'Comoros', 'Comoran, Comorian'),
(175, 'YT', 'MYT', 'Mayotte', 'Mahoran'),
(178, 'CG', 'COG', 'Congo (Republic of the)', 'Congolese'),
(180, 'CD', 'COD', 'Congo (Democratic Republic of the)', 'Congolese'),
(184, 'CK', 'COK', 'Cook Islands', 'Cook Island'),
(188, 'CR', 'CRI', 'Costa Rica', 'Costa Rican'),
(191, 'HR', 'HRV', 'Croatia', 'Croatian'),
(192, 'CU', 'CUB', 'Cuba', 'Cuban'),
(196, 'CY', 'CYP', 'Cyprus', 'Cypriot'),
(203, 'CZ', 'CZE', 'Czech Republic', 'Czech'),
(204, 'BJ', 'BEN', 'Benin', 'Beninese, Beninois'),
(208, 'DK', 'DNK', 'Denmark', 'Danish'),
(212, 'DM', 'DMA', 'Dominica', 'Dominican'),
(214, 'DO', 'DOM', 'Dominican Republic', 'Dominican'),
(218, 'EC', 'ECU', 'Ecuador', 'Ecuadorian'),
(222, 'SV', 'SLV', 'El Salvador', 'Salvadoran'),
(226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Equatorial Guinean, Equatoguinean'),
(231, 'ET', 'ETH', 'Ethiopia', 'Ethiopian'),
(232, 'ER', 'ERI', 'Eritrea', 'Eritrean'),
(233, 'EE', 'EST', 'Estonia', 'Estonian'),
(234, 'FO', 'FRO', 'Faroe Islands', 'Faroese'),
(238, 'FK', 'FLK', 'Falkland Islands (Malvinas)', 'Falkland Island'),
(239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'South Georgia or South Sandwich Islands'),
(242, 'FJ', 'FJI', 'Fiji', 'Fijian'),
(246, 'FI', 'FIN', 'Finland', 'Finnish'),
(248, 'AX', 'ALA', 'Åland Islands', 'Åland Island'),
(250, 'FR', 'FRA', 'France', 'French'),
(254, 'GF', 'GUF', 'French Guiana', 'French Guianese'),
(258, 'PF', 'PYF', 'French Polynesia', 'French Polynesian'),
(260, 'TF', 'ATF', 'French Southern Territories', 'French Southern Territories'),
(262, 'DJ', 'DJI', 'Djibouti', 'Djiboutian'),
(266, 'GA', 'GAB', 'Gabon', 'Gabonese'),
(268, 'GE', 'GEO', 'Georgia', 'Georgian'),
(270, 'GM', 'GMB', 'Gambia', 'Gambian'),
(275, 'PS', 'PSE', 'Palestine, State of', 'Palestinian'),
(276, 'DE', 'DEU', 'Germany', 'German'),
(288, 'GH', 'GHA', 'Ghana', 'Ghanaian'),
(292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(296, 'KI', 'KIR', 'Kiribati', 'I-Kiribati'),
(300, 'GR', 'GRC', 'Greece', 'Greek, Hellenic'),
(304, 'GL', 'GRL', 'Greenland', 'Greenlandic'),
(308, 'GD', 'GRD', 'Grenada', 'Grenadian'),
(312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(316, 'GU', 'GUM', 'Guam', 'Guamanian, Guambat'),
(320, 'GT', 'GTM', 'Guatemala', 'Guatemalan'),
(324, 'GN', 'GIN', 'Guinea', 'Guinean'),
(328, 'GY', 'GUY', 'Guyana', 'Guyanese'),
(332, 'HT', 'HTI', 'Haiti', 'Haitian'),
(334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Heard Island or McDonald Islands'),
(336, 'VA', 'VAT', 'Vatican City State', 'Vatican'),
(340, 'HN', 'HND', 'Honduras', 'Honduran'),
(344, 'HK', 'HKG', 'Hong Kong', 'Hong Kong, Hong Kongese'),
(348, 'HU', 'HUN', 'Hungary', 'Hungarian, Magyar'),
(352, 'IS', 'ISL', 'Iceland', 'Icelandic'),
(356, 'IN', 'IND', 'India', 'Indian'),
(360, 'ID', 'IDN', 'Indonesia', 'Indonesian'),
(364, 'IR', 'IRN', 'Iran', 'Iranian, Persian'),
(368, 'IQ', 'IRQ', 'Iraq', 'Iraqi'),
(372, 'IE', 'IRL', 'Ireland', 'Irish'),
(376, 'IL', 'ISR', 'Israel', 'Israeli'),
(380, 'IT', 'ITA', 'Italy', 'Italian'),
(384, 'CI', 'CIV', 'Côte d''Ivoire', 'Ivorian'),
(388, 'JM', 'JAM', 'Jamaica', 'Jamaican'),
(392, 'JP', 'JPN', 'Japan', 'Japanese'),
(398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstani, Kazakh'),
(400, 'JO', 'JOR', 'Jordan', 'Jordanian'),
(404, 'KE', 'KEN', 'Kenya', 'Kenyan'),
(408, 'KP', 'PRK', 'Korea (Democratic People''s Republic of)', 'North Korean'),
(410, 'KR', 'KOR', 'Korea (Republic of)', 'South Korean'),
(414, 'KW', 'KWT', 'Kuwait', 'Kuwaiti'),
(417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz'),
(418, 'LA', 'LAO', 'Lao People''s Democratic Republic', 'Lao, Laotian'),
(422, 'LB', 'LBN', 'Lebanon', 'Lebanese'),
(426, 'LS', 'LSO', 'Lesotho', 'Basotho'),
(428, 'LV', 'LVA', 'Latvia', 'Latvian'),
(430, 'LR', 'LBR', 'Liberia', 'Liberian'),
(434, 'LY', 'LBY', 'Libya', 'Libyan'),
(438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(440, 'LT', 'LTU', 'Lithuania', 'Lithuanian'),
(442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg, Luxembourgish'),
(446, 'MO', 'MAC', 'Macao', 'Macanese, Chinese'),
(450, 'MG', 'MDG', 'Madagascar', 'Malagasy'),
(454, 'MW', 'MWI', 'Malawi', 'Malawian'),
(458, 'MY', 'MYS', 'Malaysia', 'Malaysian'),
(462, 'MV', 'MDV', 'Maldives', 'Maldivian'),
(466, 'ML', 'MLI', 'Mali', 'Malian, Malinese'),
(470, 'MT', 'MLT', 'Malta', 'Maltese'),
(474, 'MQ', 'MTQ', 'Martinique', 'Martiniquais, Martinican'),
(478, 'MR', 'MRT', 'Mauritania', 'Mauritanian'),
(480, 'MU', 'MUS', 'Mauritius', 'Mauritian'),
(484, 'MX', 'MEX', 'Mexico', 'Mexican'),
(492, 'MC', 'MCO', 'Monaco', 'Monégasque, Monacan'),
(496, 'MN', 'MNG', 'Mongolia', 'Mongolian'),
(498, 'MD', 'MDA', 'Moldova (Republic of)', 'Moldovan'),
(499, 'ME', 'MNE', 'Montenegro', 'Montenegrin'),
(500, 'MS', 'MSR', 'Montserrat', 'Montserratian'),
(504, 'MA', 'MAR', 'Morocco', 'Moroccan'),
(508, 'MZ', 'MOZ', 'Mozambique', 'Mozambican'),
(512, 'OM', 'OMN', 'Oman', 'Omani'),
(516, 'NA', 'NAM', 'Namibia', 'Namibian'),
(520, 'NR', 'NRU', 'Nauru', 'Nauruan'),
(524, 'NP', 'NPL', 'Nepal', 'Nepali, Nepalese'),
(528, 'NL', 'NLD', 'Netherlands', 'Dutch, Netherlandic'),
(531, 'CW', 'CUW', 'Curaçao', 'Curaçaoan'),
(533, 'AW', 'ABW', 'Aruba', 'Aruban'),
(534, 'SX', 'SXM', 'Sint Maarten (Dutch part)', 'Sint Maarten'),
(535, 'BQ', 'BES', 'Bonaire, Sint Eustatius and Saba', 'Bonaire'),
(540, 'NC', 'NCL', 'New Caledonia', 'New Caledonian'),
(548, 'VU', 'VUT', 'Vanuatu', 'Ni-Vanuatu, Vanuatuan'),
(554, 'NZ', 'NZL', 'New Zealand', 'New Zealand, NZ'),
(558, 'NI', 'NIC', 'Nicaragua', 'Nicaraguan'),
(562, 'NE', 'NER', 'Niger', 'Nigerien'),
(566, 'NG', 'NGA', 'Nigeria', 'Nigerian'),
(570, 'NU', 'NIU', 'Niue', 'Niuean'),
(574, 'NF', 'NFK', 'Norfolk Island', 'Norfolk Island'),
(578, 'NO', 'NOR', 'Norway', 'Norwegian'),
(580, 'MP', 'MNP', 'Northern Mariana Islands', 'Northern Marianan'),
(581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'American'),
(583, 'FM', 'FSM', 'Micronesia (Federated States of)', 'Micronesian'),
(584, 'MH', 'MHL', 'Marshall Islands', 'Marshallese'),
(585, 'PW', 'PLW', 'Palau', 'Palauan'),
(586, 'PK', 'PAK', 'Pakistan', 'Pakistani'),
(591, 'PA', 'PAN', 'Panama', 'Panamanian'),
(598, 'PG', 'PNG', 'Papua New Guinea', 'Papua New Guinean, Papuan'),
(600, 'PY', 'PRY', 'Paraguay', 'Paraguayan'),
(604, 'PE', 'PER', 'Peru', 'Peruvian'),
(608, 'PH', 'PHL', 'Philippines', 'Philippine, Filipino'),
(612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn Island'),
(616, 'PL', 'POL', 'Poland', 'Polish'),
(620, 'PT', 'PRT', 'Portugal', 'Portuguese'),
(624, 'GW', 'GNB', 'Guinea-Bissau', 'Bissau-Guinean'),
(626, 'TL', 'TLS', 'Timor-Leste', 'Timorese'),
(630, 'PR', 'PRI', 'Puerto Rico', 'Puerto Rican'),
(634, 'QA', 'QAT', 'Qatar', 'Qatari'),
(638, 'RE', 'REU', 'Réunion', 'Réunionese, Réunionnais'),
(642, 'RO', 'ROU', 'Romania', 'Romanian'),
(643, 'RU', 'RUS', 'Russian Federation', 'Russian'),
(646, 'RW', 'RWA', 'Rwanda', 'Rwandan'),
(652, 'BL', 'BLM', 'Saint Barthélemy', 'Barthélemois'),
(654, 'SH', 'SHN', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helenian'),
(659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Kittitian or Nevisian'),
(660, 'AI', 'AIA', 'Anguilla', 'Anguillan'),
(662, 'LC', 'LCA', 'Saint Lucia', 'Saint Lucian'),
(663, 'MF', 'MAF', 'Saint Martin (French part)', 'Saint-Martinoise'),
(666, 'PM', 'SPM', 'Saint Pierre and Miquelon', 'Saint-Pierrais or Miquelonnais'),
(670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint Vincentian, Vincentian'),
(674, 'SM', 'SMR', 'San Marino', 'Sammarinese'),
(678, 'ST', 'STP', 'Sao Tome and Principe', 'São Toméan'),
(682, 'SA', 'SAU', 'Saudi Arabia', 'Saudi, Saudi Arabian'),
(686, 'SN', 'SEN', 'Senegal', 'Senegalese'),
(688, 'RS', 'SRB', 'Serbia', 'Serbian'),
(690, 'SC', 'SYC', 'Seychelles', 'Seychellois'),
(694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leonean'),
(702, 'SG', 'SGP', 'Singapore', 'Singaporean'),
(703, 'SK', 'SVK', 'Slovakia', 'Slovak'),
(704, 'VN', 'VNM', 'Vietnam', 'Vietnamese'),
(705, 'SI', 'SVN', 'Slovenia', 'Slovenian, Slovene'),
(706, 'SO', 'SOM', 'Somalia', 'Somali, Somalian'),
(710, 'ZA', 'ZAF', 'South Africa', 'South African'),
(716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwean'),
(724, 'ES', 'ESP', 'Spain', 'Spanish'),
(728, 'SS', 'SSD', 'South Sudan', 'South Sudanese'),
(729, 'SD', 'SDN', 'Sudan', 'Sudanese'),
(732, 'EH', 'ESH', 'Western Sahara', 'Sahrawi, Sahrawian, Sahraouian'),
(740, 'SR', 'SUR', 'Suriname', 'Surinamese'),
(744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard'),
(748, 'SZ', 'SWZ', 'Swaziland', 'Swazi'),
(752, 'SE', 'SWE', 'Sweden', 'Swedish'),
(756, 'CH', 'CHE', 'Switzerland', 'Swiss'),
(760, 'SY', 'SYR', 'Syrian Arab Republic', 'Syrian'),
(762, 'TJ', 'TJK', 'Tajikistan', 'Tajikistani'),
(764, 'TH', 'THA', 'Thailand', 'Thai'),
(768, 'TG', 'TGO', 'Togo', 'Togolese'),
(772, 'TK', 'TKL', 'Tokelau', 'Tokelauan'),
(776, 'TO', 'TON', 'Tonga', 'Tongan'),
(780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinidadian or Tobagonian'),
(784, 'AE', 'ARE', 'United Arab Emirates', 'Emirati, Emirian, Emiri'),
(788, 'TN', 'TUN', 'Tunisia', 'Tunisian'),
(792, 'TR', 'TUR', 'Turkey', 'Turkish'),
(795, 'TM', 'TKM', 'Turkmenistan', 'Turkmen'),
(796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Turks and Caicos Island'),
(798, 'TV', 'TUV', 'Tuvalu', 'Tuvaluan'),
(800, 'UG', 'UGA', 'Uganda', 'Ugandan'),
(804, 'UA', 'UKR', 'Ukraine', 'Ukrainian'),
(807, 'MK', 'MKD', 'Macedonia (the former Yugoslav Republic of)', 'Macedonian'),
(818, 'EG', 'EGY', 'Egypt', 'Egyptian'),
(826, 'GB', 'GBR', 'United Kingdom of Great Britain and Northern Ireland', 'British, UK'),
(831, 'GG', 'GGY', 'Guernsey', 'Channel Island'),
(832, 'JE', 'JEY', 'Jersey', 'Channel Island'),
(833, 'IM', 'IMN', 'Isle of Man', 'Manx'),
(834, 'TZ', 'TZA', 'Tanzania, United Republic of', 'Tanzanian'),
(840, 'US', 'USA', 'United States of America', 'American'),
(850, 'VI', 'VIR', 'Virgin Islands (U.S.)', 'U.S. Virgin Island'),
(854, 'BF', 'BFA', 'Burkina Faso', 'Burkinabé'),
(858, 'UY', 'URY', 'Uruguay', 'Uruguayan'),
(860, 'UZ', 'UZB', 'Uzbekistan', 'Uzbekistani, Uzbek'),
(862, 'VE', 'VEN', 'Venezuela (Bolivarian Republic of)', 'Venezuelan'),
(876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis and Futuna, Wallisian or Futunan'),
(882, 'WS', 'WSM', 'Samoa', 'Samoan'),
(887, 'YE', 'YEM', 'Yemen', 'Yemeni'),
(894, 'ZM', 'ZMB', 'Zambia', 'Zambian');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseID` int(11) NOT NULL AUTO_INCREMENT,
  `progID` int(11) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `credit` varchar(11) DEFAULT NULL,
  `course_level` varchar(11) DEFAULT NULL,
  `semesterID` int(11) DEFAULT NULL,
  `profileID` int(11) DEFAULT NULL,
  `dayID` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `statusID` int(11) DEFAULT '1',
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `progID`, `course`, `course_code`, `credit`, `course_level`, `semesterID`, `profileID`, `dayID`, `time`, `statusID`) VALUES
(142, 1, 'testing computer testing', '3099', '1', '100', 1, 33, 2, '13:44:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `day_list`
--

CREATE TABLE IF NOT EXISTS `day_list` (
  `dayID` int(11) NOT NULL AUTO_INCREMENT,
  `day_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dayID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `day_list`
--

INSERT INTO `day_list` (`dayID`, `day_type`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `departID` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(255) DEFAULT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`departID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departID`, `department`, `schoolID`, `statusID`) VALUES
(1, 'ff', 1, 1),
(2, 'testing', 1, 1),
(3, 'depat', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `enrollID` int(11) NOT NULL AUTO_INCREMENT,
  `enroll_date` date DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `semesterID` int(11) DEFAULT NULL,
  `yearID` varchar(11) DEFAULT NULL,
  `progID` int(11) DEFAULT NULL,
  PRIMARY KEY (`enrollID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollID`, `enroll_date`, `studentID`, `semesterID`, `yearID`, `progID`) VALUES
(12, '2018-05-19', 234, 2, '2000/2001', 4),
(13, '2018-05-18', 2361, 11, '2017/20181', 201),
(14, '0000-00-00', 0, 0, '', 0),
(15, '0000-00-00', 0, 0, '', 0),
(16, '2018-05-24', 180, 1, '2014/2015', 1),
(17, '2018-05-24', 325, 1, '2000/2001', 13),
(18, '2018-05-24', 325, 1, '2000/2001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `genderID` int(11) NOT NULL AUTO_INCREMENT,
  `gender_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`genderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderID`, `gender_type`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_academic_session`
--
CREATE TABLE IF NOT EXISTS `get_academic_session` (
`yearID` int(11)
,`year` varchar(255)
,`statusID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_admin`
--
CREATE TABLE IF NOT EXISTS `get_admin` (
`userID` int(11)
,`username` varchar(255)
,`password` varchar(255)
,`email` varchar(255)
,`access` int(3)
,`status` int(3)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_calendar`
--
CREATE TABLE IF NOT EXISTS `get_calendar` (
`calendarID` int(11)
,`semester_year` varchar(255)
,`semesterID` int(11)
,`activities` varchar(255)
,`start_date` date
,`end_date` date
,`statusID` int(11)
,`semester` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_category_list`
--
CREATE TABLE IF NOT EXISTS `get_category_list` (
`categoryID` int(11)
,`category_name` varchar(255)
,`classificationID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_countries`
--
CREATE TABLE IF NOT EXISTS `get_countries` (
`alpha_2_code` varchar(2)
,`alpha_3_code` varchar(3)
,`country` varchar(52)
,`nationality` varchar(39)
,`countryID` int(3)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_course`
--
CREATE TABLE IF NOT EXISTS `get_course` (
`courseID` int(11)
,`progID` int(11)
,`course` varchar(255)
,`course_code` varchar(255)
,`credit` varchar(11)
,`course_level` varchar(11)
,`semesterID` int(11)
,`statusID` int(11)
,`programme` varchar(255)
,`semester` varchar(255)
,`school` varchar(255)
,`prefix` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_course_table`
--
CREATE TABLE IF NOT EXISTS `get_course_table` (
`courseID` int(11)
,`progID` int(11)
,`course` varchar(255)
,`course_code` varchar(255)
,`course_level` varchar(11)
,`semesterID` int(11)
,`credit` varchar(11)
,`profileID` int(11)
,`dayID` int(11)
,`time` time
,`statusID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_day_list`
--
CREATE TABLE IF NOT EXISTS `get_day_list` (
`dayID` int(11)
,`day_type` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_department`
--
CREATE TABLE IF NOT EXISTS `get_department` (
`departID` int(11)
,`department` varchar(255)
,`schoolID` int(11)
,`statusID` int(11)
,`school` varchar(255)
,`prefix` varchar(5)
);
-- --------------------------------------------------------

--
-- Table structure for table `get_enrollment`
--
-- in use(#1356 - View 'school_data.get_enrollment' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)
-- Error reading data: (#1356 - View 'school_data.get_enrollment' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_gender`
--
CREATE TABLE IF NOT EXISTS `get_gender` (
`genderID` int(11)
,`gender_type` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_hostel_block`
--
CREATE TABLE IF NOT EXISTS `get_hostel_block` (
`blockID` int(11)
,`block_name` varchar(255)
,`statusID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_hostel_booking`
--
CREATE TABLE IF NOT EXISTS `get_hostel_booking` (
`userID` int(11)
,`tran_date` datetime
,`date` date
,`studentID` int(11)
,`roomID` int(11)
,`book_in` date
,`book_out` date
,`ref_no` varchar(255)
,`status` varchar(255)
,`room` varchar(255)
,`block_name` varchar(255)
,`first_name` varchar(255)
,`surname` varchar(255)
,`admissionNo` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_hostel_room`
--
CREATE TABLE IF NOT EXISTS `get_hostel_room` (
`roomID` int(11)
,`blockID` int(11)
,`room` varchar(255)
,`bed` int(11)
,`block_name` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_lecture_note`
--
CREATE TABLE IF NOT EXISTS `get_lecture_note` (
`lectureID` int(11)
,`lect_date` date
,`staffID` int(11)
,`departID` int(255)
,`title` varchar(255)
,`semesterID` varchar(255)
,`levelID` int(11)
,`file_path` varchar(255)
,`department` varchar(255)
,`f_name` varchar(50)
,`l_name` varchar(255)
,`semester` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_list_semester`
--
CREATE TABLE IF NOT EXISTS `get_list_semester` (
`semesterID` int(11)
,`semester` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_marital_status`
--
CREATE TABLE IF NOT EXISTS `get_marital_status` (
`categoryID` int(11)
,`marital_status` varchar(255)
,`classificationID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_operation_work`
--
CREATE TABLE IF NOT EXISTS `get_operation_work` (
`categoryID` int(11)
,`work_time` varchar(255)
,`classificationID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_position`
--
CREATE TABLE IF NOT EXISTS `get_position` (
`positionID` int(11)
,`position` varchar(255)
,`statusId` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_programme`
--
CREATE TABLE IF NOT EXISTS `get_programme` (
`progID` int(11)
,`programme` varchar(255)
,`schoolID` int(11)
,`statusID` int(11)
,`school` varchar(255)
,`prefix` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_qualification`
--
CREATE TABLE IF NOT EXISTS `get_qualification` (
`qualification_ID` int(11)
,`staff_profile_ID` int(11)
,`qualification` varchar(255)
,`place` varchar(255)
,`year` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_result_details`
--
CREATE TABLE IF NOT EXISTS `get_result_details` (
`resultID` int(11)
,`result_semID` int(11)
,`yearID` varchar(12)
,`semesterID` int(11)
,`courseID` int(11)
,`levelID` int(11)
,`studentID` int(11)
,`case_study` decimal(10,2)
,`group_work` decimal(10,2)
,`presentation` decimal(10,2)
,`exam` decimal(10,2)
,`assessment` decimal(12,2)
,`total` decimal(13,2)
,`course` varchar(255)
,`course_code` varchar(255)
,`semester` varchar(255)
,`first_name` varchar(255)
,`surname` varchar(255)
,`admissionNo` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_result_main`
--
CREATE TABLE IF NOT EXISTS `get_result_main` (
`result_semID` int(11)
,`result_date` date
,`schoolID` int(11)
,`staffID` int(11)
,`levelID` int(11)
,`yearID` varchar(11)
,`semesterID` int(11)
,`courseID` int(11)
,`school` varchar(255)
,`prefix` varchar(5)
,`f_name` varchar(50)
,`l_name` varchar(255)
,`semester` varchar(255)
,`course` varchar(255)
,`course_code` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_school`
--
CREATE TABLE IF NOT EXISTS `get_school` (
`schoolID` int(11)
,`school` varchar(255)
,`prefix` varchar(5)
,`statusID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_semester`
--
CREATE TABLE IF NOT EXISTS `get_semester` (
`semesterID` int(11)
,`semester` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_semester_list`
--
CREATE TABLE IF NOT EXISTS `get_semester_list` (
`semesterID` int(11)
,`semester` varchar(255)
,`start_date` date
,`end_date` date
,`yearID` varchar(255)
,`statusID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_lecture`
--
CREATE TABLE IF NOT EXISTS `get_staff_lecture` (
`staff_profile_ID` int(11)
,`staffID` varchar(15)
,`f_name` varchar(50)
,`l_name` varchar(255)
,`categoryID` int(11)
,`departmentID` int(11)
,`aos` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_profile`
--
CREATE TABLE IF NOT EXISTS `get_staff_profile` (
`staff_profile_ID` int(11)
,`employDate` varchar(15)
,`staffID` varchar(15)
,`f_name` varchar(50)
,`l_name` varchar(255)
,`marital_status` varchar(255)
,`genderID` int(11)
,`countryID` int(11)
,`categoryID` int(11)
,`positionID` int(11)
,`email` varchar(255)
,`mobile1` varchar(255)
,`mobile2` varchar(255)
,`ssn` varchar(5)
,`bankID` int(4)
,`acctName` varchar(50)
,`acctNumber` varchar(50)
,`emerge_name` varchar(255)
,`emerge_phone` varchar(255)
,`emerge_email` varchar(255)
,`emerge_relation` varchar(255)
,`emerge_address` varchar(255)
,`departmentID` int(11)
,`operation_status` varchar(255)
,`aos` varchar(255)
,`photo` varchar(255)
,`password` varchar(255)
,`token` varchar(255)
,`accessID` varchar(30)
,`country` varchar(52)
,`nationality` varchar(39)
,`position` varchar(255)
,`marital` varchar(255)
,`staff_type` varchar(255)
,`username` varchar(255)
,`statusID` int(11)
,`staff_status` varchar(255)
,`department` varchar(255)
);
-- --------------------------------------------------------

--
-- Table structure for table `get_staff_profile_summary`
--
-- in use(#1356 - View 'school_data.get_staff_profile_summary' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)
-- Error reading data: (#1356 - View 'school_data.get_staff_profile_summary' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_promotion`
--
CREATE TABLE IF NOT EXISTS `get_staff_promotion` (
`promotionID` int(11)
,`profileID` int(11)
,`promo_date` date
,`approve` varchar(255)
,`positionID` int(11)
,`position` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_qualification`
--
CREATE TABLE IF NOT EXISTS `get_staff_qualification` (
`qualificationID` int(11)
,`profileID` int(11)
,`year` varchar(255)
,`school` varchar(255)
,`qualification` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_status`
--
CREATE TABLE IF NOT EXISTS `get_staff_status` (
`categoryID` int(11)
,`staff_status` varchar(255)
,`classificationID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_terminated`
--
CREATE TABLE IF NOT EXISTS `get_staff_terminated` (
`staff_profile_ID` int(11)
,`employDate` varchar(15)
,`staffID` varchar(15)
,`f_name` varchar(50)
,`l_name` varchar(255)
,`marital_status` varchar(255)
,`genderID` int(11)
,`countryID` int(11)
,`categoryID` int(11)
,`positionID` int(11)
,`departmentID` int(11)
,`operation_status` varchar(255)
,`aos` varchar(255)
,`email` varchar(255)
,`mobile1` varchar(255)
,`mobile2` varchar(255)
,`ssn` varchar(5)
,`bankID` int(4)
,`acctName` varchar(50)
,`acctNumber` varchar(50)
,`emerge_name` varchar(255)
,`emerge_phone` varchar(255)
,`emerge_email` varchar(255)
,`emerge_relation` varchar(255)
,`emerge_address` varchar(255)
,`photo` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`token` varchar(255)
,`accessID` varchar(30)
,`statusID` int(11)
,`nationality` varchar(39)
,`department` varchar(255)
,`staff_type` varchar(255)
,`position` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_staff_type`
--
CREATE TABLE IF NOT EXISTS `get_staff_type` (
`categoryID` int(11)
,`staff_type` varchar(255)
,`classificationID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_stock_balance`
--
CREATE TABLE IF NOT EXISTS `get_stock_balance` (
`stockID` int(10)
,`purchase` decimal(32,0)
,`issue` decimal(32,0)
,`bal_qty` decimal(33,0)
,`stock` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_stock_details`
--
CREATE TABLE IF NOT EXISTS `get_stock_details` (
`tranID` int(11)
,`sys_date` datetime
,`tran_date` date
,`stockID` int(10)
,`ref_no` varchar(255)
,`order_qty` int(11)
,`purchase_qty` int(11)
,`issue_qty` int(11)
,`status` int(2)
,`stock` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_stock_list`
--
CREATE TABLE IF NOT EXISTS `get_stock_list` (
`stockID` int(11)
,`stock` varchar(255)
,`status` int(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_student_enrollment`
--
CREATE TABLE IF NOT EXISTS `get_student_enrollment` (
`enrollID` int(11)
,`enroll_date` date
,`studentID` int(11)
,`semesterID` int(11)
,`yearID` varchar(11)
,`progID` int(11)
,`programme` varchar(255)
,`semester` varchar(255)
,`first_name` varchar(255)
,`surname` varchar(255)
,`admissionNo` varchar(255)
,`prefix` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_student_index_list`
--
CREATE TABLE IF NOT EXISTS `get_student_index_list` (
`studentID` int(11)
,`first_name` varchar(255)
,`surname` varchar(255)
,`admissionNo` varchar(255)
,`statusID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_student_profile_detail`
--
CREATE TABLE IF NOT EXISTS `get_student_profile_detail` (
`studentID` int(11)
,`admissionDate` date
,`first_name` varchar(255)
,`surname` varchar(255)
,`admissionNo` varchar(255)
,`mobile1` varchar(255)
,`mobile2` varchar(255)
,`email` varchar(255)
,`progID` int(11)
,`yearID` varchar(20)
,`categoryID` int(11)
,`stream` int(10)
,`campus_status` int(11)
,`picture` varchar(255)
,`statusID` int(11)
,`programme` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_subject`
--
CREATE TABLE IF NOT EXISTS `get_subject` (
`subjectID` int(11)
,`progID` int(11)
,`course` varchar(255)
,`course_code` varchar(11)
,`course_level` varchar(5)
,`credit` int(5)
,`semester` varchar(255)
,`statusID` int(11)
,`programme` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_total_department_staff`
--
CREATE TABLE IF NOT EXISTS `get_total_department_staff` (
`total` bigint(21)
,`departmentID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `get_total_message`
--
CREATE TABLE IF NOT EXISTS `get_total_message` (
`total` bigint(21)
,`stateID` int(11)
,`userID` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `hostel_block`
--

CREATE TABLE IF NOT EXISTS `hostel_block` (
  `blockID` int(11) NOT NULL AUTO_INCREMENT,
  `block_name` varchar(255) DEFAULT NULL,
  `statusID` int(11) DEFAULT '1',
  PRIMARY KEY (`blockID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hostel_block`
--

INSERT INTO `hostel_block` (`blockID`, `block_name`, `statusID`) VALUES
(1, 'Block A', 1),
(2, 'Block b', 1),
(3, 'Block c', 1),
(4, 'Block d', 1),
(5, 'Block e', 1),
(6, 'test', 1),
(7, 'test', 1),
(8, 'test222', 1),
(9, '44444', 1),
(10, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_detail`
--

CREATE TABLE IF NOT EXISTS `hostel_detail` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `tran_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `roomID` int(11) DEFAULT NULL,
  `book_in` date DEFAULT NULL,
  `book_out` date DEFAULT NULL,
  `ref_no` varchar(255) DEFAULT '0',
  `status` varchar(255) DEFAULT '1',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hostel_detail`
--

INSERT INTO `hostel_detail` (`userID`, `tran_date`, `date`, `studentID`, `roomID`, `book_in`, `book_out`, `ref_no`, `status`) VALUES
(4, '2018-05-11 19:05:55', '2018-05-11', 270, 2, '2018-05-11', '2018-05-11', '088', '1'),
(5, '2018-05-11 20:47:09', '2018-05-17', 164, 3, '2018-05-15', '2018-05-11', '343', '2'),
(6, '2018-05-11 00:00:00', '2018-05-17', 0, 3, '2018-05-15', NULL, '343', '1'),
(7, '2018-05-11 19:50:50', '2018-05-11', 272, 2, '2018-05-07', '2018-05-11', '444', '2');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_room`
--

CREATE TABLE IF NOT EXISTS `hostel_room` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `blockID` int(11) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `bed` int(11) DEFAULT '0',
  PRIMARY KEY (`roomID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hostel_room`
--

INSERT INTO `hostel_room` (`roomID`, `blockID`, `room`, `bed`) VALUES
(1, 1, 'room a', 3),
(2, 1, 'room b', 2),
(3, 1, 'room c', 0),
(4, 1, 'test', 2),
(5, 8, '55555', 5),
(6, 8, '555', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lecture_note`
--

CREATE TABLE IF NOT EXISTS `lecture_note` (
  `lectureID` int(11) NOT NULL AUTO_INCREMENT,
  `lect_date` date DEFAULT NULL,
  `staffID` int(11) DEFAULT NULL,
  `departID` int(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `levelID` int(11) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lectureID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lecture_note`
--

INSERT INTO `lecture_note` (`lectureID`, `lect_date`, `staffID`, `departID`, `title`, `semester`, `levelID`, `file_path`) VALUES
(1, '2018-05-14', 1, 1, '1', '1', 1, '1'),
(2, '2018-05-15', 1, 1, '1', '1', 1, '1'),
(4, '2018-05-15', 14, 1, 'ewrwer', '3', 300, 'WhatsApp Image 2018-02-24 at 8.53.03 PM.jpeg'),
(5, '2018-05-15', 14, 1, 'ewrwer', '3', 300, ''),
(6, '2018-05-15', 14, 1, 'fsdf', '1', 100, 'WhatsApp Image 2018-02-24 at 8.53.04 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messageID` int(11) NOT NULL AUTO_INCREMENT,
  `msgDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `userID` int(11) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `stateID` int(11) DEFAULT '1',
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `position_list`
--

CREATE TABLE IF NOT EXISTS `position_list` (
  `positionID` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(255) DEFAULT NULL,
  `statusId` int(11) DEFAULT '1',
  PRIMARY KEY (`positionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `position_list`
--

INSERT INTO `position_list` (`positionID`, `position`, `statusId`) VALUES
(1, 'Persident', 2),
(2, 'Vice President', 2),
(3, 'Registrar', 1),
(4, 'Quality Assurance', 1),
(5, 'Director of Finance', 1),
(6, 'Planning Officer', 1),
(7, 'Dean', 1),
(8, 'Librarian', 1),
(9, 'Dean Of Student', 1),
(10, 'Director Research Publications', 1),
(11, 'Asst. Registrar', 1),
(12, 'HOD', 1),
(13, 'HOD IT', 1),
(14, 'Asst. Librarian', 1),
(15, 'Guidance & Counselling Officer', 1),
(16, 'Leaturers', 1),
(17, 'IT Officer', 1),
(18, 'Prinipal Account', 1),
(19, 'Procurement Officer', 1),
(20, 'Store-Keeper', 1),
(21, 'Hall Porter', 1),
(22, 'Maintenance Officer', 1),
(23, 'Sercurity', 1),
(24, 'Inst. Advancement', 1);

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `progID` int(11) NOT NULL AUTO_INCREMENT,
  `programme` varchar(255) DEFAULT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`progID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`progID`, `programme`, `schoolID`, `statusID`) VALUES
(1, 'BA (Hon) Development Management test', 1, 1),
(2, 'BSc Nursing', 1, 1),
(3, 'BA (Hons) Theology', 1, 1),
(4, 'BSc Green Engergy Engineering', 1, 1),
(5, 'BSc Information Technology', 1, 1),
(6, 'BSc Health Information Management', 1, 1),
(7, 'BSc Accounting', 1, 1),
(8, 'BSc Banking and Finance', 1, 1),
(9, 'BSc Human Resource Management', 1, 1),
(10, 'BSc Marketing', 1, 1),
(11, 'BSc Public Health', 1, 1),
(12, 'Secretarial and Management Studies', 1, 1),
(13, 'Accountancy', 1, 1),
(14, 'Marketing', 1, 1),
(15, 'Electronic Engineering', 1, 1),
(16, 'Surveying and Geo-Informatics', 1, 1),
(17, 'Diploma in Business Administration', 1, 1),
(18, 'Diploma in Computerized Accounting', 1, 1),
(19, 'Diploma in General Engineering', 1, 1),
(20, 'Disaster Management', 1, 1),
(21, 'eee', 2017, 1),
(22, 'eee', 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qualification_ID` int(11) NOT NULL AUTO_INCREMENT,
  `staff_profile_ID` int(11) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`qualification_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `result_details`
--

CREATE TABLE IF NOT EXISTS `result_details` (
  `resultID` int(11) NOT NULL AUTO_INCREMENT,
  `result_semID` int(11) DEFAULT NULL,
  `yearID` varchar(12) DEFAULT NULL,
  `semesterID` int(11) DEFAULT NULL,
  `courseID` int(11) DEFAULT NULL,
  `levelID` int(11) DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `case_study` decimal(10,2) DEFAULT '0.00',
  `group_work` decimal(10,2) DEFAULT '0.00',
  `presentation` decimal(10,2) DEFAULT '0.00',
  `exam` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`resultID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `result_main`
--

CREATE TABLE IF NOT EXISTS `result_main` (
  `result_semID` int(11) NOT NULL AUTO_INCREMENT,
  `result_date` date DEFAULT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `staffID` int(11) DEFAULT NULL,
  `levelID` int(11) DEFAULT NULL,
  `yearID` varchar(11) DEFAULT NULL,
  `semesterID` int(11) DEFAULT NULL,
  `courseID` int(11) DEFAULT NULL,
  PRIMARY KEY (`result_semID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `schoolID` int(11) NOT NULL AUTO_INCREMENT,
  `school` varchar(255) DEFAULT NULL,
  `prefix` varchar(5) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`schoolID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolID`, `school`, `prefix`, `statusID`) VALUES
(1, 'School Development Management', 'SDM', 1),
(2, 'School of THEOLOGY', 'SOT', 1),
(3, 'School ENGINEERING & TECHNOLOGY', 'SOE', 1),
(4, 'Professional Studies(ICM,ABE,IPED ABMA-UK)', 'SPS', 1),
(5, 'HIGHER NATIONAL DIPLOMA(HND)', 'HND', 1),
(6, 'DIPLOMA', 'DIP', 1),
(7, 'Institute of Chartered Accountancy ,Ghana', 'IGAG', 1),
(10, '3', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semesterID` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`semesterID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semesterID`, `semester`) VALUES
(1, '1st Semester'),
(2, '2nd Semester'),
(3, 'xx');

-- --------------------------------------------------------

--
-- Table structure for table `semester_list`
--

CREATE TABLE IF NOT EXISTS `semester_list` (
  `semesterID` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `yearID` varchar(255) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`semesterID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `semester_list`
--

INSERT INTO `semester_list` (`semesterID`, `semester`, `start_date`, `end_date`, `yearID`, `statusID`) VALUES
(5, '1', '2018-05-22', '2018-05-23', '2000/2001', 1),
(6, '2', '2018-05-24', '2018-05-17', '2000/2001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_profile`
--

CREATE TABLE IF NOT EXISTS `staff_profile` (
  `staff_profile_ID` int(11) NOT NULL AUTO_INCREMENT,
  `employDate` varchar(15) DEFAULT NULL,
  `staffID` varchar(15) DEFAULT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `genderID` int(11) DEFAULT NULL,
  `countryID` int(11) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `positionID` int(11) DEFAULT NULL,
  `departmentID` int(11) DEFAULT NULL,
  `operation_status` varchar(255) DEFAULT NULL,
  `aos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `ssn` varchar(5) DEFAULT NULL,
  `bankID` int(4) DEFAULT NULL,
  `acctName` varchar(50) DEFAULT NULL,
  `acctNumber` varchar(50) DEFAULT NULL,
  `emerge_name` varchar(255) DEFAULT NULL,
  `emerge_phone` varchar(255) DEFAULT NULL,
  `emerge_email` varchar(255) DEFAULT NULL,
  `emerge_relation` varchar(255) DEFAULT NULL,
  `emerge_address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `accessID` varchar(30) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_profile_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`staff_profile_ID`, `employDate`, `staffID`, `f_name`, `l_name`, `marital_status`, `genderID`, `countryID`, `categoryID`, `positionID`, `departmentID`, `operation_status`, `aos`, `email`, `mobile1`, `mobile2`, `ssn`, `bankID`, `acctName`, `acctNumber`, `emerge_name`, `emerge_phone`, `emerge_email`, `emerge_relation`, `emerge_address`, `photo`, `username`, `password`, `token`, `accessID`, `statusID`) VALUES
(31, '2018-05-20', 'we3443', 'ewrwe', 'werwer', '5', 1, 4, 1, 1, 1, '10', 'rwer', '', '', '', '', 0, '', '', '', '', '', '', '', '5b013bc80bdf72.01260228.jpg', 'root', 'usbw', '5b013bc80bdd0', 'c4ca4238a0b923820dcc509a6f7584', 7),
(32, '', 'dd', 'dd', 'dd', '5', 1, 4, 1, 1, 1, '10', '', '', '', '', '', 0, '', '', '', '', '', '', '', '5b013e8be4b993.02393382.jpg', 'root', 'usbw', '5b013e8be4b75', 'c4ca4238a0b923820dcc509a6f7584', 7),
(33, '', '234', 'wew', 'werwer', '5', 1, 4, 3, 1, 1, '10', '', '', '', '', '', 0, '', '', '', '', '', '', '', '5b013f0969cf79.08142801.jpg', 'root', 'usbw', '5b013f0969cce', 'c4ca4238a0b923820dcc509a6f7584', 7),
(34, '2018-05-20', '34534', 'ewrwer', 'werwer', '5', 1, 4, 3, 1, 1, '10', 'werwer', 'werwe@sdf.com', '342234', '234234', '43534', 0, 'werwe', 'werwe', 'werwe', '33453', 'sdfsdf@sdfs.com', 'ewrwe', 'werwer', '5b01cbd0660714.20438046.jpg', 'root', 'usbw', '5b01cbd06604a', 'c4ca4238a0b923820dcc509a6f7584', 7);

-- --------------------------------------------------------

--
-- Table structure for table `staff_promotion`
--

CREATE TABLE IF NOT EXISTS `staff_promotion` (
  `promotionID` int(11) NOT NULL AUTO_INCREMENT,
  `profileID` int(11) DEFAULT NULL,
  `promo_date` date DEFAULT NULL,
  `approve` varchar(255) DEFAULT NULL,
  `positionID` int(11) DEFAULT NULL,
  PRIMARY KEY (`promotionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff_promotion`
--

INSERT INTO `staff_promotion` (`promotionID`, `profileID`, `promo_date`, `approve`, `positionID`) VALUES
(3, 33, '2018-05-20', 'q', 1),
(4, 33, '2018-05-20', 'eee', 10);

-- --------------------------------------------------------

--
-- Table structure for table `staff_qualification`
--

CREATE TABLE IF NOT EXISTS `staff_qualification` (
  `qualificationID` int(11) NOT NULL AUTO_INCREMENT,
  `profileID` int(11) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`qualificationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `staff_qualification`
--

INSERT INTO `staff_qualification` (`qualificationID`, `profileID`, `year`, `school`, `qualification`) VALUES
(1, NULL, '1', '1', '1'),
(2, 33, '343', '343', '434'),
(3, 33, '4534', '3453', '345'),
(4, 33, 'dfsd', 'sdfsd', 'sdf'),
(5, 33, '7777', '777', '777'),
(6, 33, 'year', 'school', 'qu'),
(7, 33, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `statusID` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE IF NOT EXISTS `stock_details` (
  `tranID` int(11) NOT NULL AUTO_INCREMENT,
  `sys_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tran_date` date DEFAULT NULL,
  `stockID` int(10) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `ref_no` varchar(255) DEFAULT NULL,
  `order_qty` int(11) DEFAULT '0',
  `purchase_qty` int(11) DEFAULT '0',
  `issue_qty` int(11) DEFAULT '0',
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`tranID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`tranID`, `sys_date`, `tran_date`, `stockID`, `details`, `ref_no`, `order_qty`, `purchase_qty`, `issue_qty`, `status`) VALUES
(1, '2018-05-10 18:42:44', '2018-05-10', 1, NULL, NULL, 1, NULL, NULL, NULL),
(2, '2018-05-10 00:00:00', '2018-05-10', 1, NULL, 'ee', 3, NULL, NULL, NULL),
(3, '2018-05-10 00:00:00', '2018-05-10', 1, NULL, 'ee', 3, 0, 0, NULL),
(4, '2018-05-10 00:00:00', '2018-05-10', 2, NULL, '222', 0, 22, 0, NULL),
(5, '2018-05-11 00:00:00', '2018-05-11', 3, NULL, 'r44', 3, 0, 0, NULL),
(6, '2018-05-11 00:00:00', '0000-00-00', 3, NULL, 'r55', 0, 5, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_main`
--

CREATE TABLE IF NOT EXISTS `stock_main` (
  `stockID` int(11) NOT NULL AUTO_INCREMENT,
  `stock` varchar(255) DEFAULT NULL,
  `status` int(255) DEFAULT '1',
  PRIMARY KEY (`stockID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stock_main`
--

INSERT INTO `stock_main` (`stockID`, `stock`, `status`) VALUES
(1, '1', 1),
(2, 'rrr', 1),
(3, 'test111', 1),
(4, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `admissionDate` date DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `admissionNo` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `progID` int(11) DEFAULT NULL,
  `yearID` varchar(20) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `stream` int(10) DEFAULT NULL,
  `campus_status` int(11) DEFAULT '0',
  `picture` varchar(255) DEFAULT NULL,
  `statusID` int(11) DEFAULT '1',
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=327 ;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`studentID`, `admissionDate`, `first_name`, `surname`, `admissionNo`, `mobile1`, `mobile2`, `email`, `progID`, `yearID`, `categoryID`, `stream`, `campus_status`, `picture`, `statusID`) VALUES
(325, '2018-05-24', 'sdf', 'sdfsdf', 'sdfsd', '435345', '345345', 'werwe@sdf.com', 1, '2000/2001', 1, 1, 1, 'uploads/5b071ae4445605.15658985.jpg', 1),
(326, '2018-05-29', 'sfd', 'sdfsdf', 'sdfsd', '2343', '234', 'dsgsdf@sds.com', 1, '2000/2001', 1, 1, 1, 'uploads/5b0d85a012dd12.01685736.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectID` int(11) NOT NULL AUTO_INCREMENT,
  `progID` int(11) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `course_code` varchar(11) DEFAULT NULL,
  `course_level` varchar(5) DEFAULT NULL,
  `credit` int(5) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `progID`, `course`, `course_code`, `course_level`, `credit`, `semester`, `statusID`) VALUES
(1, 1, 'test', '333', '100', 1, '1', 1),
(2, 1, '', '', '100', 1, '1', 1),
(3, 0, 'ww', '', '', 0, '1', 0),
(4, 0, 'ww', '', '', 0, '1', 0),
(5, 1, 'test', '222', '100', 1, '1', 1);

-- --------------------------------------------------------

--
-- Structure for view `get_academic_session`
--
DROP TABLE IF EXISTS `get_academic_session`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_academic_session` AS select `academic_session`.`yearID` AS `yearID`,`academic_session`.`year` AS `year`,`academic_session`.`statusID` AS `statusID` from `academic_session` where (`academic_session`.`statusID` = 2);

-- --------------------------------------------------------

--
-- Structure for view `get_admin`
--
DROP TABLE IF EXISTS `get_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_admin` AS select `admin`.`userID` AS `userID`,`admin`.`username` AS `username`,`admin`.`password` AS `password`,`admin`.`email` AS `email`,`admin`.`access` AS `access`,`admin`.`status` AS `status` from `admin`;

-- --------------------------------------------------------

--
-- Structure for view `get_calendar`
--
DROP TABLE IF EXISTS `get_calendar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_calendar` AS select `calendar`.`calendarID` AS `calendarID`,`calendar`.`semester_year` AS `semester_year`,`calendar`.`semesterID` AS `semesterID`,`calendar`.`activities` AS `activities`,`calendar`.`start_date` AS `start_date`,`calendar`.`end_date` AS `end_date`,`calendar`.`statusID` AS `statusID`,`semester`.`semester` AS `semester` from (`calendar` join `semester` on((`calendar`.`semesterID` = `semester`.`semesterID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_category_list`
--
DROP TABLE IF EXISTS `get_category_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_category_list` AS select `category_list`.`categoryID` AS `categoryID`,`category_list`.`category_name` AS `category_name`,`category_list`.`classificationID` AS `classificationID` from `category_list`;

-- --------------------------------------------------------

--
-- Structure for view `get_countries`
--
DROP TABLE IF EXISTS `get_countries`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_countries` AS select `countries`.`alpha_2_code` AS `alpha_2_code`,`countries`.`alpha_3_code` AS `alpha_3_code`,`countries`.`country` AS `country`,`countries`.`nationality` AS `nationality`,`countries`.`countryID` AS `countryID` from `countries`;

-- --------------------------------------------------------

--
-- Structure for view `get_course`
--
DROP TABLE IF EXISTS `get_course`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_course` AS select `course`.`courseID` AS `courseID`,`course`.`progID` AS `progID`,`course`.`course` AS `course`,`course`.`course_code` AS `course_code`,`course`.`credit` AS `credit`,`course`.`course_level` AS `course_level`,`course`.`semesterID` AS `semesterID`,`course`.`statusID` AS `statusID`,`programme`.`programme` AS `programme`,`semester`.`semester` AS `semester`,`school`.`school` AS `school`,`school`.`prefix` AS `prefix` from (((`course` join `programme` on((`course`.`progID` = `programme`.`progID`))) join `semester` on((`course`.`semesterID` = `semester`.`semesterID`))) join `school` on((`programme`.`schoolID` = `school`.`schoolID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_course_table`
--
DROP TABLE IF EXISTS `get_course_table`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_course_table` AS select `course`.`courseID` AS `courseID`,`course`.`progID` AS `progID`,`course`.`course` AS `course`,`course`.`course_code` AS `course_code`,`course`.`course_level` AS `course_level`,`course`.`semesterID` AS `semesterID`,`course`.`credit` AS `credit`,`course`.`profileID` AS `profileID`,`course`.`dayID` AS `dayID`,`course`.`time` AS `time`,`course`.`statusID` AS `statusID` from `course`;

-- --------------------------------------------------------

--
-- Structure for view `get_day_list`
--
DROP TABLE IF EXISTS `get_day_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_day_list` AS select `day_list`.`dayID` AS `dayID`,`day_list`.`day_type` AS `day_type` from `day_list`;

-- --------------------------------------------------------

--
-- Structure for view `get_department`
--
DROP TABLE IF EXISTS `get_department`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_department` AS select `department`.`departID` AS `departID`,`department`.`department` AS `department`,`department`.`schoolID` AS `schoolID`,`department`.`statusID` AS `statusID`,`school`.`school` AS `school`,`school`.`prefix` AS `prefix` from (`department` join `school` on((`department`.`schoolID` = `school`.`schoolID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_gender`
--
DROP TABLE IF EXISTS `get_gender`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_gender` AS select `gender`.`genderID` AS `genderID`,`gender`.`gender_type` AS `gender_type` from `gender`;

-- --------------------------------------------------------

--
-- Structure for view `get_hostel_block`
--
DROP TABLE IF EXISTS `get_hostel_block`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_hostel_block` AS select `hostel_block`.`blockID` AS `blockID`,`hostel_block`.`block_name` AS `block_name`,`hostel_block`.`statusID` AS `statusID` from `hostel_block`;

-- --------------------------------------------------------

--
-- Structure for view `get_hostel_booking`
--
DROP TABLE IF EXISTS `get_hostel_booking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_hostel_booking` AS select `hostel_detail`.`userID` AS `userID`,`hostel_detail`.`tran_date` AS `tran_date`,`hostel_detail`.`date` AS `date`,`hostel_detail`.`studentID` AS `studentID`,`hostel_detail`.`roomID` AS `roomID`,`hostel_detail`.`book_in` AS `book_in`,`hostel_detail`.`book_out` AS `book_out`,`hostel_detail`.`ref_no` AS `ref_no`,`hostel_detail`.`status` AS `status`,`get_hostel_room`.`room` AS `room`,`get_hostel_room`.`block_name` AS `block_name`,`get_student_index_list`.`first_name` AS `first_name`,`get_student_index_list`.`surname` AS `surname`,`get_student_index_list`.`admissionNo` AS `admissionNo` from ((`hostel_detail` join `get_hostel_room` on((`hostel_detail`.`roomID` = `get_hostel_room`.`roomID`))) join `get_student_index_list` on((`hostel_detail`.`studentID` = `get_student_index_list`.`studentID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_hostel_room`
--
DROP TABLE IF EXISTS `get_hostel_room`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_hostel_room` AS select `hostel_room`.`roomID` AS `roomID`,`hostel_room`.`blockID` AS `blockID`,`hostel_room`.`room` AS `room`,`hostel_room`.`bed` AS `bed`,`hostel_block`.`block_name` AS `block_name` from (`hostel_room` join `hostel_block` on((`hostel_room`.`blockID` = `hostel_block`.`blockID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_lecture_note`
--
DROP TABLE IF EXISTS `get_lecture_note`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_lecture_note` AS select `lecture_note`.`lectureID` AS `lectureID`,`lecture_note`.`lect_date` AS `lect_date`,`lecture_note`.`staffID` AS `staffID`,`lecture_note`.`departID` AS `departID`,`lecture_note`.`title` AS `title`,`lecture_note`.`semester` AS `semesterID`,`lecture_note`.`levelID` AS `levelID`,`lecture_note`.`file_path` AS `file_path`,`department`.`department` AS `department`,`staff_profile`.`f_name` AS `f_name`,`staff_profile`.`l_name` AS `l_name`,`semester`.`semester` AS `semester` from (((`lecture_note` join `department` on((`lecture_note`.`departID` = `department`.`departID`))) join `staff_profile` on((`lecture_note`.`staffID` = `staff_profile`.`staff_profile_ID`))) join `semester` on((`lecture_note`.`semester` = `semester`.`semesterID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_list_semester`
--
DROP TABLE IF EXISTS `get_list_semester`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_list_semester` AS select `semester`.`semesterID` AS `semesterID`,`semester`.`semester` AS `semester` from `semester`;

-- --------------------------------------------------------

--
-- Structure for view `get_marital_status`
--
DROP TABLE IF EXISTS `get_marital_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_marital_status` AS select `category_list`.`categoryID` AS `categoryID`,`category_list`.`category_name` AS `marital_status`,`category_list`.`classificationID` AS `classificationID` from `category_list` where (`category_list`.`classificationID` = 3);

-- --------------------------------------------------------

--
-- Structure for view `get_operation_work`
--
DROP TABLE IF EXISTS `get_operation_work`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_operation_work` AS select `category_list`.`categoryID` AS `categoryID`,`category_list`.`category_name` AS `work_time`,`category_list`.`classificationID` AS `classificationID` from `category_list` where (`category_list`.`classificationID` = 5);

-- --------------------------------------------------------

--
-- Structure for view `get_position`
--
DROP TABLE IF EXISTS `get_position`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_position` AS select `position_list`.`positionID` AS `positionID`,`position_list`.`position` AS `position`,`position_list`.`statusId` AS `statusId` from `position_list`;

-- --------------------------------------------------------

--
-- Structure for view `get_programme`
--
DROP TABLE IF EXISTS `get_programme`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_programme` AS select `programme`.`progID` AS `progID`,`programme`.`programme` AS `programme`,`programme`.`schoolID` AS `schoolID`,`programme`.`statusID` AS `statusID`,`school`.`school` AS `school`,`school`.`prefix` AS `prefix` from (`programme` join `school` on((`programme`.`schoolID` = `school`.`schoolID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_qualification`
--
DROP TABLE IF EXISTS `get_qualification`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_qualification` AS select `qualification`.`qualification_ID` AS `qualification_ID`,`qualification`.`staff_profile_ID` AS `staff_profile_ID`,`qualification`.`qualification` AS `qualification`,`qualification`.`place` AS `place`,`qualification`.`year` AS `year` from `qualification`;

-- --------------------------------------------------------

--
-- Structure for view `get_result_details`
--
DROP TABLE IF EXISTS `get_result_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_result_details` AS select `result_details`.`resultID` AS `resultID`,`result_details`.`result_semID` AS `result_semID`,`result_details`.`yearID` AS `yearID`,`result_details`.`semesterID` AS `semesterID`,`result_details`.`courseID` AS `courseID`,`result_details`.`levelID` AS `levelID`,`result_details`.`studentID` AS `studentID`,`result_details`.`case_study` AS `case_study`,`result_details`.`group_work` AS `group_work`,`result_details`.`presentation` AS `presentation`,`result_details`.`exam` AS `exam`,((`result_details`.`case_study` + `result_details`.`group_work`) + `result_details`.`presentation`) AS `assessment`,(((`result_details`.`case_study` + `result_details`.`group_work`) + `result_details`.`presentation`) + `result_details`.`exam`) AS `total`,`course`.`course` AS `course`,`course`.`course_code` AS `course_code`,`semester`.`semester` AS `semester`,`student_profile`.`first_name` AS `first_name`,`student_profile`.`surname` AS `surname`,`student_profile`.`admissionNo` AS `admissionNo` from (((`result_details` join `course` on((`course`.`courseID` = `result_details`.`courseID`))) join `semester` on((`result_details`.`semesterID` = `semester`.`semesterID`))) join `student_profile` on((`result_details`.`studentID` = `student_profile`.`studentID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_result_main`
--
DROP TABLE IF EXISTS `get_result_main`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_result_main` AS select `result_main`.`result_semID` AS `result_semID`,`result_main`.`result_date` AS `result_date`,`result_main`.`schoolID` AS `schoolID`,`result_main`.`staffID` AS `staffID`,`result_main`.`levelID` AS `levelID`,`result_main`.`yearID` AS `yearID`,`result_main`.`semesterID` AS `semesterID`,`result_main`.`courseID` AS `courseID`,`school`.`school` AS `school`,`school`.`prefix` AS `prefix`,`staff_profile`.`f_name` AS `f_name`,`staff_profile`.`l_name` AS `l_name`,`semester_list`.`semester` AS `semester`,`course`.`course` AS `course`,`course`.`course_code` AS `course_code` from ((((`result_main` join `school` on((`result_main`.`schoolID` = `school`.`schoolID`))) join `staff_profile` on((`result_main`.`staffID` = `staff_profile`.`staff_profile_ID`))) join `semester_list` on((`result_main`.`semesterID` = `semester_list`.`semesterID`))) join `course` on((`result_main`.`courseID` = `course`.`courseID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_school`
--
DROP TABLE IF EXISTS `get_school`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_school` AS select `school`.`schoolID` AS `schoolID`,`school`.`school` AS `school`,`school`.`prefix` AS `prefix`,`school`.`statusID` AS `statusID` from `school`;

-- --------------------------------------------------------

--
-- Structure for view `get_semester`
--
DROP TABLE IF EXISTS `get_semester`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_semester` AS select `semester`.`semesterID` AS `semesterID`,`semester`.`semester` AS `semester` from `semester`;

-- --------------------------------------------------------

--
-- Structure for view `get_semester_list`
--
DROP TABLE IF EXISTS `get_semester_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_semester_list` AS select `semester_list`.`semesterID` AS `semesterID`,`semester_list`.`semester` AS `semester`,`semester_list`.`start_date` AS `start_date`,`semester_list`.`end_date` AS `end_date`,`semester_list`.`yearID` AS `yearID`,`semester_list`.`statusID` AS `statusID` from `semester_list`;

-- --------------------------------------------------------

--
-- Structure for view `get_staff_lecture`
--
DROP TABLE IF EXISTS `get_staff_lecture`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_lecture` AS select `staff_profile`.`staff_profile_ID` AS `staff_profile_ID`,`staff_profile`.`staffID` AS `staffID`,`staff_profile`.`f_name` AS `f_name`,`staff_profile`.`l_name` AS `l_name`,`staff_profile`.`categoryID` AS `categoryID`,`staff_profile`.`departmentID` AS `departmentID`,`staff_profile`.`aos` AS `aos` from `staff_profile` where (`staff_profile`.`categoryID` = 1);

-- --------------------------------------------------------

--
-- Structure for view `get_staff_profile`
--
DROP TABLE IF EXISTS `get_staff_profile`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_profile` AS select `staff_profile`.`staff_profile_ID` AS `staff_profile_ID`,`staff_profile`.`employDate` AS `employDate`,`staff_profile`.`staffID` AS `staffID`,`staff_profile`.`f_name` AS `f_name`,`staff_profile`.`l_name` AS `l_name`,`staff_profile`.`marital_status` AS `marital_status`,`staff_profile`.`genderID` AS `genderID`,`staff_profile`.`countryID` AS `countryID`,`staff_profile`.`categoryID` AS `categoryID`,`staff_profile`.`positionID` AS `positionID`,`staff_profile`.`email` AS `email`,`staff_profile`.`mobile1` AS `mobile1`,`staff_profile`.`mobile2` AS `mobile2`,`staff_profile`.`ssn` AS `ssn`,`staff_profile`.`bankID` AS `bankID`,`staff_profile`.`acctName` AS `acctName`,`staff_profile`.`acctNumber` AS `acctNumber`,`staff_profile`.`emerge_name` AS `emerge_name`,`staff_profile`.`emerge_phone` AS `emerge_phone`,`staff_profile`.`emerge_email` AS `emerge_email`,`staff_profile`.`emerge_relation` AS `emerge_relation`,`staff_profile`.`emerge_address` AS `emerge_address`,`staff_profile`.`departmentID` AS `departmentID`,`staff_profile`.`operation_status` AS `operation_status`,`staff_profile`.`aos` AS `aos`,`staff_profile`.`photo` AS `photo`,`staff_profile`.`password` AS `password`,`staff_profile`.`token` AS `token`,`staff_profile`.`accessID` AS `accessID`,`countries`.`country` AS `country`,`countries`.`nationality` AS `nationality`,`position_list`.`position` AS `position`,`get_marital_status`.`marital_status` AS `marital`,`get_staff_type`.`staff_type` AS `staff_type`,`staff_profile`.`username` AS `username`,`staff_profile`.`statusID` AS `statusID`,`get_staff_status`.`staff_status` AS `staff_status`,`get_department`.`department` AS `department` from ((((((`staff_profile` join `countries` on((`staff_profile`.`countryID` = `countries`.`countryID`))) join `position_list` on((`staff_profile`.`positionID` = `position_list`.`positionID`))) join `get_marital_status` on((`staff_profile`.`marital_status` = `get_marital_status`.`categoryID`))) join `get_staff_type` on((`staff_profile`.`categoryID` = `get_staff_type`.`categoryID`))) join `get_staff_status` on((`staff_profile`.`statusID` = `get_staff_status`.`categoryID`))) join `get_department` on((`staff_profile`.`departmentID` = `get_department`.`departID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_staff_promotion`
--
DROP TABLE IF EXISTS `get_staff_promotion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_promotion` AS select `staff_promotion`.`promotionID` AS `promotionID`,`staff_promotion`.`profileID` AS `profileID`,`staff_promotion`.`promo_date` AS `promo_date`,`staff_promotion`.`approve` AS `approve`,`staff_promotion`.`positionID` AS `positionID`,`position_list`.`position` AS `position` from (`staff_promotion` join `position_list` on((`staff_promotion`.`positionID` = `position_list`.`positionID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_staff_qualification`
--
DROP TABLE IF EXISTS `get_staff_qualification`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_qualification` AS select `staff_qualification`.`qualificationID` AS `qualificationID`,`staff_qualification`.`profileID` AS `profileID`,`staff_qualification`.`year` AS `year`,`staff_qualification`.`school` AS `school`,`staff_qualification`.`qualification` AS `qualification` from `staff_qualification`;

-- --------------------------------------------------------

--
-- Structure for view `get_staff_status`
--
DROP TABLE IF EXISTS `get_staff_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_status` AS select `category_list`.`categoryID` AS `categoryID`,`category_list`.`category_name` AS `staff_status`,`category_list`.`classificationID` AS `classificationID` from `category_list` where (`category_list`.`classificationID` = 4);

-- --------------------------------------------------------

--
-- Structure for view `get_staff_terminated`
--
DROP TABLE IF EXISTS `get_staff_terminated`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_terminated` AS select `staff_profile`.`staff_profile_ID` AS `staff_profile_ID`,`staff_profile`.`employDate` AS `employDate`,`staff_profile`.`staffID` AS `staffID`,`staff_profile`.`f_name` AS `f_name`,`staff_profile`.`l_name` AS `l_name`,`staff_profile`.`marital_status` AS `marital_status`,`staff_profile`.`genderID` AS `genderID`,`staff_profile`.`countryID` AS `countryID`,`staff_profile`.`categoryID` AS `categoryID`,`staff_profile`.`positionID` AS `positionID`,`staff_profile`.`departmentID` AS `departmentID`,`staff_profile`.`operation_status` AS `operation_status`,`staff_profile`.`aos` AS `aos`,`staff_profile`.`email` AS `email`,`staff_profile`.`mobile1` AS `mobile1`,`staff_profile`.`mobile2` AS `mobile2`,`staff_profile`.`ssn` AS `ssn`,`staff_profile`.`bankID` AS `bankID`,`staff_profile`.`acctName` AS `acctName`,`staff_profile`.`acctNumber` AS `acctNumber`,`staff_profile`.`emerge_name` AS `emerge_name`,`staff_profile`.`emerge_phone` AS `emerge_phone`,`staff_profile`.`emerge_email` AS `emerge_email`,`staff_profile`.`emerge_relation` AS `emerge_relation`,`staff_profile`.`emerge_address` AS `emerge_address`,`staff_profile`.`photo` AS `photo`,`staff_profile`.`username` AS `username`,`staff_profile`.`password` AS `password`,`staff_profile`.`token` AS `token`,`staff_profile`.`accessID` AS `accessID`,`staff_profile`.`statusID` AS `statusID`,`countries`.`nationality` AS `nationality`,`department`.`department` AS `department`,`category_list`.`category_name` AS `staff_type`,`get_position`.`position` AS `position` from ((((`staff_profile` join `countries` on((`staff_profile`.`countryID` = `countries`.`countryID`))) join `department` on((`staff_profile`.`departmentID` = `department`.`departID`))) join `category_list` on((`staff_profile`.`categoryID` = `category_list`.`categoryID`))) join `get_position` on((`staff_profile`.`positionID` = `get_position`.`positionID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_staff_type`
--
DROP TABLE IF EXISTS `get_staff_type`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_staff_type` AS select `category_list`.`categoryID` AS `categoryID`,`category_list`.`category_name` AS `staff_type`,`category_list`.`classificationID` AS `classificationID` from `category_list` where (`category_list`.`classificationID` = 2);

-- --------------------------------------------------------

--
-- Structure for view `get_stock_balance`
--
DROP TABLE IF EXISTS `get_stock_balance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_stock_balance` AS select `stock_details`.`stockID` AS `stockID`,sum(`stock_details`.`purchase_qty`) AS `purchase`,sum(`stock_details`.`issue_qty`) AS `issue`,sum((`stock_details`.`purchase_qty` - `stock_details`.`issue_qty`)) AS `bal_qty`,`stock_main`.`stock` AS `stock` from (`stock_details` join `stock_main` on((`stock_details`.`stockID` = `stock_main`.`stockID`))) group by `stock_details`.`stockID`,`stock_main`.`stock`;

-- --------------------------------------------------------

--
-- Structure for view `get_stock_details`
--
DROP TABLE IF EXISTS `get_stock_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_stock_details` AS select `stock_details`.`tranID` AS `tranID`,`stock_details`.`sys_date` AS `sys_date`,`stock_details`.`tran_date` AS `tran_date`,`stock_details`.`stockID` AS `stockID`,`stock_details`.`ref_no` AS `ref_no`,`stock_details`.`order_qty` AS `order_qty`,`stock_details`.`purchase_qty` AS `purchase_qty`,`stock_details`.`issue_qty` AS `issue_qty`,`stock_details`.`status` AS `status`,`stock_main`.`stock` AS `stock` from (`stock_details` join `stock_main` on((`stock_details`.`stockID` = `stock_main`.`stockID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_stock_list`
--
DROP TABLE IF EXISTS `get_stock_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_stock_list` AS select `stock_main`.`stockID` AS `stockID`,`stock_main`.`stock` AS `stock`,`stock_main`.`status` AS `status` from `stock_main`;

-- --------------------------------------------------------

--
-- Structure for view `get_student_enrollment`
--
DROP TABLE IF EXISTS `get_student_enrollment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_student_enrollment` AS select `enrollment`.`enrollID` AS `enrollID`,`enrollment`.`enroll_date` AS `enroll_date`,`enrollment`.`studentID` AS `studentID`,`enrollment`.`semesterID` AS `semesterID`,`enrollment`.`yearID` AS `yearID`,`enrollment`.`progID` AS `progID`,`programme`.`programme` AS `programme`,`semester`.`semester` AS `semester`,`get_student_index_list`.`first_name` AS `first_name`,`get_student_index_list`.`surname` AS `surname`,`get_student_index_list`.`admissionNo` AS `admissionNo`,`school`.`prefix` AS `prefix` from ((((`enrollment` join `programme` on((`enrollment`.`progID` = `programme`.`progID`))) join `semester` on((`semester`.`semesterID` = `enrollment`.`semesterID`))) join `get_student_index_list` on((`enrollment`.`studentID` = `get_student_index_list`.`studentID`))) join `school` on((`programme`.`schoolID` = `school`.`schoolID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_student_index_list`
--
DROP TABLE IF EXISTS `get_student_index_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_student_index_list` AS select `student_profile`.`studentID` AS `studentID`,`student_profile`.`first_name` AS `first_name`,`student_profile`.`surname` AS `surname`,`student_profile`.`admissionNo` AS `admissionNo`,`student_profile`.`statusID` AS `statusID` from `student_profile` where (`student_profile`.`statusID` = 1) order by `student_profile`.`admissionNo`;

-- --------------------------------------------------------

--
-- Structure for view `get_student_profile_detail`
--
DROP TABLE IF EXISTS `get_student_profile_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_student_profile_detail` AS select `student_profile`.`studentID` AS `studentID`,`student_profile`.`admissionDate` AS `admissionDate`,`student_profile`.`first_name` AS `first_name`,`student_profile`.`surname` AS `surname`,`student_profile`.`admissionNo` AS `admissionNo`,`student_profile`.`mobile1` AS `mobile1`,`student_profile`.`mobile2` AS `mobile2`,`student_profile`.`email` AS `email`,`student_profile`.`progID` AS `progID`,`student_profile`.`yearID` AS `yearID`,`student_profile`.`categoryID` AS `categoryID`,`student_profile`.`stream` AS `stream`,`student_profile`.`campus_status` AS `campus_status`,`student_profile`.`picture` AS `picture`,`student_profile`.`statusID` AS `statusID`,`programme`.`programme` AS `programme` from (`student_profile` join `programme` on((`student_profile`.`progID` = `programme`.`progID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_subject`
--
DROP TABLE IF EXISTS `get_subject`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_subject` AS select `subject`.`subjectID` AS `subjectID`,`subject`.`progID` AS `progID`,`subject`.`course` AS `course`,`subject`.`course_code` AS `course_code`,`subject`.`course_level` AS `course_level`,`subject`.`credit` AS `credit`,`subject`.`semester` AS `semester`,`subject`.`statusID` AS `statusID`,`programme`.`programme` AS `programme` from (`subject` join `programme` on((`subject`.`progID` = `programme`.`progID`)));

-- --------------------------------------------------------

--
-- Structure for view `get_total_department_staff`
--
DROP TABLE IF EXISTS `get_total_department_staff`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_total_department_staff` AS select count(`staff_profile`.`staff_profile_ID`) AS `total`,`staff_profile`.`departmentID` AS `departmentID` from `staff_profile` group by `staff_profile`.`departmentID`;

-- --------------------------------------------------------

--
-- Structure for view `get_total_message`
--
DROP TABLE IF EXISTS `get_total_message`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_total_message` AS select count(`message`.`msgDate`) AS `total`,`message`.`stateID` AS `stateID`,`message`.`userID` AS `userID` from `message` where (`message`.`stateID` = 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
