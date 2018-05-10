-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 09:38 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsdzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `s_id` int(11) NOT NULL,
  `reg_number` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`s_id`, `reg_number`, `course`, `certificate`) VALUES
(5, '78UUP67', 'MCA Distance', 'certificate4854_4854.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `City` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `City`, `mobile`, `email`, `subject`, `course`, `message`, `time`) VALUES
(2, 'Gopal Shukla', 'Gurgaon', '9839663663', 'shukla.gopalkit@gmail.com', 'admission', 'MCA Distance', 'wryt nqaerymn srt ysrt', '2018-02-19 17:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(8) NOT NULL DEFAULT '0',
  `state_id` int(8) DEFAULT NULL,
  `districts` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `state_id`, `districts`) VALUES
(1, 1, 'North Andaman'),
(2, 1, 'South Andaman'),
(3, 1, 'Nicobar'),
(4, 2, 'Adilabad'),
(5, 2, 'Anantapur'),
(6, 2, 'Chittoor'),
(7, 2, 'East Godavari'),
(8, 2, 'Guntur'),
(9, 2, 'Hyderabad'),
(10, 2, 'Karimnagar'),
(11, 2, 'Khammam'),
(12, 2, 'Krishna'),
(13, 2, 'Kurnool'),
(14, 2, 'Mahbubnagar'),
(15, 2, 'Medak'),
(16, 2, 'Nalgonda'),
(17, 2, 'Nizamabad'),
(18, 2, 'Prakasam'),
(19, 2, 'Ranga Reddy'),
(20, 2, 'Srikakulam'),
(21, 2, 'Sri Potti Sri Ramulu Nellore'),
(22, 2, 'Vishakhapatnam'),
(23, 2, 'Vizianagaram'),
(24, 2, 'Warangal'),
(25, 2, 'West Godavari'),
(26, 2, 'Cudappah'),
(27, 3, 'Anjaw'),
(28, 3, 'Changlang'),
(29, 3, 'East Siang'),
(30, 3, 'East Kameng'),
(31, 3, 'Kurung Kumey'),
(32, 3, 'Lohit'),
(33, 3, 'Lower Dibang Valley'),
(34, 3, 'Lower Subansiri'),
(35, 3, 'Papum Pare'),
(36, 3, 'Tawang'),
(37, 3, 'Tirap'),
(38, 3, 'Dibang Valley'),
(39, 3, 'Upper Siang'),
(40, 3, 'Upper Subansiri'),
(41, 3, 'West Kameng'),
(42, 3, 'West Siang'),
(43, 4, 'Baksa'),
(44, 4, 'Barpeta'),
(45, 4, 'Bongaigaon'),
(46, 4, 'Cachar'),
(47, 4, 'Chirang'),
(48, 4, 'Darrang'),
(49, 4, 'Dhemaji'),
(50, 4, 'Dima Hasao'),
(51, 4, 'Dhubri'),
(52, 4, 'Dibrugarh'),
(53, 4, 'Goalpara'),
(54, 4, 'Golaghat'),
(55, 4, 'Hailakandi'),
(56, 4, 'Jorhat'),
(57, 4, 'Kamrup'),
(58, 4, 'Kamrup Metropolitan'),
(59, 4, 'Karbi Anglong'),
(60, 4, 'Karimganj'),
(61, 4, 'Kokrajhar'),
(62, 4, 'Lakhimpur'),
(63, 4, 'Morigaon'),
(64, 4, 'Nagaon'),
(65, 4, 'Nalbari'),
(66, 4, 'Sivasagar'),
(67, 4, 'Sonitpur'),
(68, 4, 'Tinsukia'),
(69, 4, 'Udalguri'),
(70, 5, 'Araria'),
(71, 5, 'Arwal'),
(72, 5, 'Aurangabad'),
(73, 5, 'Banka'),
(74, 5, 'Begusarai'),
(75, 5, 'Bhagalpur'),
(76, 5, 'Bhojpur'),
(77, 5, 'Buxar'),
(78, 5, 'Darbhanga'),
(79, 5, 'East Champaran'),
(80, 5, 'Gaya'),
(81, 5, 'Gopalganj'),
(82, 5, 'Jamui'),
(83, 5, 'Jehanabad'),
(84, 5, 'Kaimur'),
(85, 5, 'Katihar'),
(86, 5, 'Khagaria'),
(87, 5, 'Kishanganj'),
(88, 5, 'Lakhisarai'),
(89, 5, 'Madhepura'),
(90, 5, 'Madhubani'),
(91, 5, 'Munger'),
(92, 5, 'Muzaffarpur'),
(93, 5, 'Nalanda'),
(94, 5, 'Nawada'),
(95, 5, 'Patna'),
(96, 5, 'Purnia'),
(97, 5, 'Rohtas'),
(98, 5, 'Saharsa'),
(99, 5, 'Samastipur'),
(100, 5, 'Saran'),
(101, 5, 'Sheikhpura'),
(102, 5, 'Sheohar'),
(103, 5, 'Sitamarhi'),
(104, 5, 'Siwan'),
(105, 5, 'Supaul'),
(106, 6, 'Chandigarh'),
(107, 7, 'Bastar'),
(108, 7, 'Bijapur'),
(109, 7, 'Bilaspur'),
(110, 7, 'Dantewada'),
(111, 7, 'Dhamtari'),
(112, 7, 'Durg'),
(113, 7, 'Jashpur'),
(114, 7, 'Janjgir-Champa'),
(115, 7, 'Korba'),
(116, 7, 'Koriya'),
(117, 7, 'Kanker'),
(118, 7, 'Kabirdham (formerly Kawardha)'),
(119, 7, 'Mahasamund'),
(120, 7, 'Narayanpur'),
(121, 7, 'Raigarh'),
(122, 7, 'Rajnandgaon'),
(123, 7, 'Raipur'),
(124, 7, 'Surguja'),
(125, 8, 'Dadra and Nagar Haveli'),
(126, 9, 'Daman'),
(127, 9, 'Diu'),
(128, 10, 'Central Delhi'),
(129, 10, 'East Delhi'),
(130, 10, 'New Delhi'),
(131, 10, 'North Delhi'),
(132, 10, 'North East Delhi'),
(133, 10, 'North West Delhi'),
(134, 10, 'South Delhi'),
(135, 10, 'South West Delhi'),
(136, 10, 'West Delhi'),
(137, 11, 'North Goa'),
(138, 11, 'South Goa'),
(139, 12, 'Ahmedabad'),
(140, 12, 'Amreli district'),
(141, 12, 'Anand'),
(142, 12, 'Banaskantha'),
(143, 12, 'Bharuch'),
(144, 12, 'Bhavnagar'),
(145, 12, 'Dahod'),
(146, 12, 'The Dangs'),
(147, 12, 'Gandhinagar'),
(148, 12, 'Jamnagar'),
(149, 12, 'Junagadh'),
(150, 12, 'Kutch'),
(151, 12, 'Kheda'),
(152, 12, 'Mehsana'),
(153, 12, 'Narmada'),
(154, 12, 'Navsari'),
(155, 12, 'Patan'),
(156, 12, 'Panchmahal'),
(157, 12, 'Porbandar'),
(158, 12, 'Rajkot'),
(159, 12, 'Sabarkantha'),
(160, 12, 'Surendranagar'),
(161, 12, 'Surat'),
(162, 12, 'Tapi'),
(163, 12, 'Vadodara'),
(164, 12, 'Valsad'),
(165, 13, 'Ambala'),
(166, 13, 'Bhiwani'),
(167, 13, 'Faridabad'),
(168, 13, 'Fatehabad'),
(169, 13, 'Gurgaon'),
(170, 13, 'Hissar'),
(171, 13, 'Jhajjar'),
(172, 13, 'Jind'),
(173, 13, 'Karnal'),
(174, 13, 'Kaithal'),
(175, 13, 'Kurukshetra'),
(176, 13, 'Mahendragarh'),
(177, 13, 'Mewat'),
(178, 13, 'Palwal'),
(179, 13, 'Panchkula'),
(180, 13, 'Panipat'),
(181, 13, 'Rewari'),
(182, 13, 'Rohtak'),
(183, 13, 'Sirsa'),
(184, 13, 'Sonipat'),
(185, 13, 'Yamuna Nagar'),
(186, 14, 'Bilaspur'),
(187, 14, 'Chamba'),
(188, 14, 'Hamirpur'),
(189, 14, 'Kangra'),
(190, 14, 'Kinnaur'),
(191, 14, 'Kullu'),
(192, 14, 'Lahaul and Spiti'),
(193, 14, 'Mandi'),
(194, 14, 'Shimla'),
(195, 14, 'Sirmaur'),
(196, 14, 'Solan'),
(197, 14, 'Una'),
(198, 15, 'Anantnag'),
(199, 15, 'Badgam'),
(200, 15, 'Bandipora'),
(201, 15, 'Baramulla'),
(202, 15, 'Doda'),
(203, 15, 'Ganderbal'),
(204, 15, 'Jammu'),
(205, 15, 'Kargil'),
(206, 15, 'Kathua'),
(207, 15, 'Kishtwar'),
(208, 15, 'Kupwara'),
(209, 15, 'Kulgam'),
(210, 15, 'Leh'),
(211, 15, 'Poonch'),
(212, 15, 'Pulwama'),
(213, 15, 'Rajouri'),
(214, 15, 'Ramban'),
(215, 15, 'Reasi'),
(216, 15, 'Samba'),
(217, 15, 'Shopian'),
(218, 15, 'Srinagar'),
(219, 15, 'Udhampur'),
(220, 16, 'Bokaro'),
(221, 16, 'Chatra'),
(222, 16, 'Deoghar'),
(223, 16, 'Dhanbad'),
(224, 16, 'Dumka'),
(225, 16, 'East Singhbhum'),
(226, 16, 'Garhwa'),
(227, 16, 'Giridih'),
(228, 16, 'Godda'),
(229, 16, 'Gumla'),
(230, 16, 'Hazaribag'),
(231, 16, 'Jamtara'),
(232, 16, 'Khunti'),
(233, 16, 'Koderma'),
(234, 16, 'Latehar'),
(235, 16, 'Lohardaga'),
(236, 16, 'Pakur'),
(237, 16, 'Palamu'),
(238, 16, 'Ramgarh'),
(239, 16, 'Ranchi'),
(240, 16, 'Sahibganj'),
(241, 16, 'Seraikela Kharsawan'),
(242, 16, 'Simdega'),
(243, 16, 'West Singhbhum'),
(244, 17, 'Bagalkot'),
(245, 17, 'Bangalore Rural'),
(246, 17, 'Bangalore Urban'),
(247, 17, 'Belgaum'),
(248, 17, 'Bellary'),
(249, 17, 'Bidar'),
(250, 17, 'Bijapur'),
(251, 17, 'Chamarajnagar'),
(252, 17, 'Chikkamagaluru'),
(253, 17, 'Chikkaballapur'),
(254, 17, 'Chitradurga'),
(255, 17, 'Davanagere'),
(256, 17, 'Dharwad'),
(257, 17, 'Dakshina Kannada'),
(258, 17, 'Gadag'),
(259, 17, 'Gulbarga'),
(260, 17, 'Hassan'),
(261, 17, 'Haveri district'),
(262, 17, 'Kodagu'),
(263, 17, 'Kolar'),
(264, 17, 'Koppal'),
(265, 17, 'Mandya'),
(266, 17, 'Mysore'),
(267, 17, 'Raichur'),
(268, 17, 'Shimoga'),
(269, 17, 'Tumkur'),
(270, 17, 'Udupi'),
(271, 17, 'Uttara Kannada'),
(272, 17, 'Ramanagara'),
(273, 17, 'Yadgir'),
(274, 18, 'Alappuzha'),
(275, 18, 'Ernakulam'),
(276, 18, 'Idukki'),
(277, 18, 'Kannur'),
(278, 18, 'Kasaragod'),
(279, 18, 'Kollam'),
(280, 18, 'Kottayam'),
(281, 18, 'Kozhikode'),
(282, 18, 'Malappuram'),
(283, 18, 'Palakkad'),
(284, 18, 'Pathanamthitta'),
(285, 18, 'Thrissur'),
(286, 18, 'Thiruvananthapuram'),
(287, 18, 'Wayanad'),
(288, 19, 'Lakshadweep'),
(289, 20, 'Agar'),
(290, 20, 'Alirajpur'),
(291, 20, 'Anuppur'),
(292, 20, 'Ashok Nagar'),
(293, 20, 'Balaghat'),
(294, 20, 'Barwani'),
(295, 20, 'Betul'),
(296, 20, 'Bhind'),
(297, 20, 'Bhopal'),
(298, 20, 'Burhanpur'),
(299, 20, 'Chhatarpur'),
(300, 20, 'Chhindwara'),
(301, 20, 'Damoh'),
(302, 20, 'Datia'),
(303, 20, 'Dewas'),
(304, 20, 'Dhar'),
(305, 20, 'Dindori'),
(306, 20, 'Guna'),
(307, 20, 'Gwalior'),
(308, 20, 'Harda'),
(309, 20, 'Hoshangabad'),
(310, 20, 'Indore'),
(311, 20, 'Jabalpur'),
(312, 20, 'Jhabua'),
(313, 20, 'Katni'),
(314, 20, 'Khandwa (East Nimar)'),
(315, 20, 'Khargone (West Nimar)'),
(316, 20, 'Mandla'),
(317, 20, 'Mandsaur'),
(318, 20, 'Morena'),
(319, 20, 'Narsinghpur'),
(320, 20, 'Neemuch'),
(321, 20, 'Panna'),
(322, 20, 'Raisen'),
(323, 20, 'Rajgarh'),
(324, 20, 'Ratlam'),
(325, 20, 'Rewa'),
(326, 20, 'Sagar'),
(327, 20, 'Satna'),
(328, 20, 'Sehore'),
(329, 20, 'Seoni'),
(330, 20, 'Shahdol'),
(331, 20, 'Shajapur'),
(332, 20, 'Sheopur'),
(333, 20, 'Shivpuri'),
(334, 20, 'Sidhi'),
(335, 20, 'Singrauli'),
(336, 20, 'Tikamgarh'),
(337, 20, 'Ujjain'),
(338, 20, 'Umaria'),
(339, 20, 'Vidisha'),
(340, 21, 'Ahmednagar'),
(341, 21, 'Akola'),
(342, 21, 'Amravati'),
(343, 21, 'Aurangabad'),
(344, 21, 'Beed'),
(345, 21, 'Bhandara'),
(346, 21, 'Buldhana'),
(347, 21, 'Chandrapur'),
(348, 21, 'Dhule'),
(349, 21, 'Gadchiroli'),
(350, 21, 'Gondia'),
(351, 21, 'Hingoli'),
(352, 21, 'Jalgaon'),
(353, 21, 'Jalna'),
(354, 21, 'Kolhapur'),
(355, 21, 'Latur'),
(356, 21, 'Mumbai City'),
(357, 21, 'Mumbai suburban'),
(358, 21, 'Nanded'),
(359, 21, 'Nandurbar'),
(360, 21, 'Nagpur'),
(361, 21, 'Nashik'),
(362, 21, 'Osmanabad'),
(363, 21, 'Parbhani'),
(364, 21, 'Pune'),
(365, 21, 'Raigad'),
(366, 21, 'Ratnagiri'),
(367, 21, 'Sangli'),
(368, 21, 'Satara'),
(369, 21, 'Sindhudurg'),
(370, 21, 'Solapur'),
(371, 21, 'Thane'),
(372, 21, 'Wardha'),
(373, 21, 'Washim'),
(374, 21, 'Yavatmal'),
(375, 22, 'Bishnupur'),
(376, 22, 'Churachandpur'),
(377, 22, 'Chandel'),
(378, 22, 'Imphal East'),
(379, 22, 'Senapati'),
(380, 22, 'Tamenglong'),
(381, 22, 'Thoubal'),
(382, 22, 'Ukhrul'),
(383, 22, 'Imphal West'),
(384, 23, 'East Garo Hills'),
(385, 23, 'East Khasi Hills'),
(386, 23, 'Jaintia Hills'),
(387, 23, 'Ri Bhoi'),
(388, 23, 'South Garo Hills'),
(389, 23, 'West Garo Hills'),
(390, 23, 'West Khasi Hills'),
(391, 24, 'Aizawl'),
(392, 24, 'Champhai'),
(393, 24, 'Kolasib'),
(394, 24, 'Lawngtlai'),
(395, 24, 'Lunglei'),
(396, 24, 'Mamit'),
(397, 24, 'Saiha'),
(398, 24, 'Serchhip'),
(399, 25, 'Dimapur'),
(400, 25, 'Kiphire'),
(401, 25, 'Kohima'),
(402, 25, 'Longleng'),
(403, 25, 'Mokokchung'),
(404, 25, 'Mon'),
(405, 25, 'Peren'),
(406, 25, 'Phek'),
(407, 25, 'Tuensang'),
(408, 25, 'Wokha'),
(409, 25, 'Zunheboto'),
(410, 26, 'Angul'),
(411, 26, 'Boudh (Bauda)'),
(412, 26, 'Bhadrak'),
(413, 26, 'Balangir'),
(414, 26, 'Bargarh (Baragarh)'),
(415, 26, 'Balasore'),
(416, 26, 'Cuttack'),
(417, 26, 'Debagarh (Deogarh)'),
(418, 26, 'Dhenkanal'),
(419, 26, 'Ganjam'),
(420, 26, 'Gajapati'),
(421, 26, 'Jharsuguda'),
(422, 26, 'Jajpur'),
(423, 26, 'Jagatsinghpur'),
(424, 26, 'Khordha'),
(425, 26, 'Kendujhar (Keonjhar)'),
(426, 26, 'Kalahandi'),
(427, 26, 'Kandhamal'),
(428, 26, 'Koraput'),
(429, 26, 'Kendrapara'),
(430, 26, 'Malkangiri'),
(431, 26, 'Mayurbhanj'),
(432, 26, 'Nabarangpur'),
(433, 26, 'Nuapada'),
(434, 26, 'Nayagarh'),
(435, 26, 'Puri'),
(436, 26, 'Rayagada'),
(437, 26, 'Sambalpur'),
(438, 26, 'Subarnapur (Sonepur)'),
(439, 26, 'Sundergarh'),
(440, 27, 'Karaikal'),
(441, 27, 'Mahe'),
(442, 27, 'Pondicherry'),
(443, 27, 'Yanam'),
(444, 28, 'Amritsar'),
(445, 28, 'Barnala'),
(446, 28, 'Bathinda'),
(447, 28, 'Firozpur'),
(448, 28, 'Faridkot'),
(449, 28, 'Fatehgarh Sahib'),
(450, 28, 'Fazilka[6]'),
(451, 28, 'Gurdaspur'),
(452, 28, 'Hoshiarpur'),
(453, 28, 'Jalandhar'),
(454, 28, 'Kapurthala'),
(455, 28, 'Ludhiana'),
(456, 28, 'Mansa'),
(457, 28, 'Moga'),
(458, 28, 'Sri Muktsar Sahib'),
(459, 28, 'Pathankot'),
(460, 28, 'Patiala'),
(461, 28, 'Rupnagar'),
(462, 28, 'Ajitgarh (Mohali)'),
(463, 28, 'Sangrur'),
(464, 28, 'Shahid Bhagat Singh Nagar'),
(465, 28, 'Tarn Taran'),
(466, 29, 'Ajmer'),
(467, 29, 'Alwar'),
(468, 29, 'Bikaner'),
(469, 29, 'Barmer'),
(470, 29, 'Banswara'),
(471, 29, 'Bharatpur'),
(472, 29, 'Baran'),
(473, 29, 'Bundi'),
(474, 29, 'Bhilwara'),
(475, 29, 'Churu'),
(476, 29, 'Chittorgarh'),
(477, 29, 'Dausa'),
(478, 29, 'Dholpur'),
(479, 29, 'Dungapur'),
(480, 29, 'Ganganagar'),
(481, 29, 'Hanumangarh'),
(482, 29, 'Jhunjhunu'),
(483, 29, 'Jalore'),
(484, 29, 'Jodhpur'),
(485, 29, 'Jaipur'),
(486, 29, 'Jaisalmer'),
(487, 29, 'Jhalawar'),
(488, 29, 'Karauli'),
(489, 29, 'Kota'),
(490, 29, 'Nagaur'),
(491, 29, 'Pali'),
(492, 29, 'Pratapgarh'),
(493, 29, 'Rajsamand'),
(494, 29, 'Sikar'),
(495, 29, 'Sawai Madhopur'),
(496, 29, 'Sirohi'),
(497, 29, 'Tonk'),
(498, 29, 'Udaipur'),
(499, 30, 'East Sikkim'),
(500, 30, 'North Sikkim'),
(501, 30, 'South Sikkim'),
(502, 30, 'West Sikkim'),
(503, 31, 'Ariyalur'),
(504, 31, 'Chennai'),
(505, 31, 'Coimbatore'),
(506, 31, 'Cuddalore'),
(507, 31, 'Dharmapuri'),
(508, 31, 'Dindigul'),
(509, 31, 'Erode'),
(510, 31, 'Kanchipuram'),
(511, 31, 'Kanyakumari'),
(512, 31, 'Karur'),
(513, 31, 'Krishnagiri'),
(514, 31, 'Madurai'),
(515, 31, 'Nagapattinam'),
(516, 31, 'Nilgiris'),
(517, 31, 'Namakkal'),
(518, 31, 'Perambalur'),
(519, 31, 'Pudukkottai'),
(520, 31, 'Ramanathapuram'),
(521, 31, 'Salem'),
(522, 31, 'Sivaganga'),
(523, 31, 'Tirupur'),
(524, 31, 'Tiruchirappalli'),
(525, 31, 'Theni'),
(526, 31, 'Tirunelveli'),
(527, 31, 'Thanjavur'),
(528, 31, 'Thoothukudi'),
(529, 31, 'Tiruvallur'),
(530, 31, 'Tiruvarur'),
(531, 31, 'Tiruvannamalai'),
(532, 31, 'Vellore'),
(533, 31, 'Viluppuram'),
(534, 31, 'Virudhunagar'),
(535, 32, 'Dhalai'),
(536, 32, 'North Tripura'),
(537, 32, 'South Tripura'),
(538, 32, 'Khowai[7]'),
(539, 32, 'West Tripura'),
(540, 33, 'Agra'),
(541, 33, 'Aligarh'),
(542, 33, 'Allahabad'),
(543, 33, 'Ambedkar Nagar'),
(544, 33, 'Auraiya'),
(545, 33, 'Azamgarh'),
(546, 33, 'Bagpat'),
(547, 33, 'Bahraich'),
(548, 33, 'Ballia'),
(549, 33, 'Balrampur'),
(550, 33, 'Banda'),
(551, 33, 'Barabanki'),
(552, 33, 'Bareilly'),
(553, 33, 'Basti'),
(554, 33, 'Bijnor'),
(555, 33, 'Budaun'),
(556, 33, 'Bulandshahr'),
(557, 33, 'Chandauli'),
(558, 33, 'Chhatrapati Shahuji Maharaj Nagar[8]'),
(559, 33, 'Chitrakoot'),
(560, 33, 'Deoria'),
(561, 33, 'Etah'),
(562, 33, 'Etawah'),
(563, 33, 'Faizabad'),
(564, 33, 'Farrukhabad'),
(565, 33, 'Fatehpur'),
(566, 33, 'Firozabad'),
(567, 33, 'Gautam Buddh Nagar'),
(568, 33, 'Ghaziabad'),
(569, 33, 'Ghazipur'),
(570, 33, 'Gonda'),
(571, 33, 'Gorakhpur'),
(572, 33, 'Hamirpur'),
(573, 33, 'Hardoi'),
(574, 33, 'Hathras'),
(575, 33, 'Jalaun'),
(576, 33, 'Jaunpur district'),
(577, 33, 'Jhansi'),
(578, 33, 'Jyotiba Phule Nagar'),
(579, 33, 'Kannauj'),
(580, 33, 'Kanpur'),
(581, 33, 'Kanshi Ram Nagar'),
(582, 33, 'Kaushambi'),
(583, 33, 'Kushinagar'),
(584, 33, 'Lakhimpur Kheri'),
(585, 33, 'Lalitpur'),
(586, 33, 'Lucknow'),
(587, 33, 'Maharajganj'),
(588, 33, 'Mahoba'),
(589, 33, 'Mainpuri'),
(590, 33, 'Mathura'),
(591, 33, 'Mau'),
(592, 33, 'Meerut'),
(593, 33, 'Mirzapur'),
(594, 33, 'Moradabad'),
(595, 33, 'Muzaffarnagar'),
(596, 33, 'Panchsheel Nagar district (Hapur)'),
(597, 33, 'Pilibhit'),
(598, 33, 'Pratapgarh'),
(599, 33, 'Raebareli'),
(600, 33, 'Ramabai Nagar (Kanpur Dehat)'),
(601, 33, 'Rampur'),
(602, 33, 'Saharanpur'),
(603, 33, 'Sant Kabir Nagar'),
(604, 33, 'Sant Ravidas Nagar'),
(605, 33, 'Shahjahanpur'),
(606, 33, 'Shamli[9]'),
(607, 33, 'Shravasti'),
(608, 33, 'Siddharthnagar'),
(609, 33, 'Sitapur'),
(610, 33, 'Sonbhadra'),
(611, 33, 'Sultanpur'),
(612, 33, 'Unnao'),
(613, 33, 'Varanasi'),
(614, 34, 'Almora'),
(615, 34, 'Bageshwar'),
(616, 34, 'Chamoli'),
(617, 34, 'Champawat'),
(618, 34, 'Dehradun'),
(619, 34, 'Haridwar'),
(620, 34, 'Nainital'),
(621, 34, 'Pauri Garhwal'),
(622, 34, 'Pithoragarh'),
(623, 34, 'Rudraprayag'),
(624, 34, 'Tehri Garhwal'),
(625, 34, 'Udham Singh Nagar'),
(626, 34, 'Uttarkashi'),
(627, 35, 'Bankura'),
(628, 35, 'Bardhaman'),
(629, 35, 'Birbhum'),
(630, 35, 'Cooch Behar'),
(631, 35, 'Dakshin Dinajpur'),
(632, 35, 'Darjeeling'),
(633, 35, 'Hooghly'),
(634, 35, 'Howrah'),
(635, 35, 'Jalpaiguri'),
(636, 35, 'Kolkata'),
(637, 35, 'Maldah'),
(638, 35, 'Murshidabad'),
(639, 35, 'Nadia'),
(640, 35, 'North 24 Parganas'),
(641, 35, 'Paschim Medinipur'),
(642, 35, 'Purba Medinipur'),
(643, 35, 'Purulia'),
(644, 35, 'South 24 Parganas'),
(645, 35, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `franchise`
--

CREATE TABLE `franchise` (
  `id` int(11) NOT NULL,
  `fr_name` varchar(100) NOT NULL,
  `fr_contactperson` varchar(100) NOT NULL,
  `fr_number` varchar(100) NOT NULL,
  `fr_address` text NOT NULL,
  `fr_City` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `franchise`
--

INSERT INTO `franchise` (`id`, `fr_name`, `fr_contactperson`, `fr_number`, `fr_address`, `fr_City`) VALUES
(1, 'Readymade Business Workflow System', 'Gopal Shukla', '9839663663', 'm.i.g 31\r\nbarra-7,near kabir hospiatal,m.i.g 31\r\nbarra-7,near kabir hospiatal', 'Kanpur'),
(2, 'Course content developed and upgraded by industry experts and R&D teams', 'Nishant Saxena', '7839362990', 'Course content developed and upgraded by industry experts and R&D teamsCourse content developed and upgraded by industry experts and R&D teams', 'etah'),
(3, 'Internationally Recognized Course Curriculum', 'Gopsal shukla', '9979560785096', 'Internationally Recognized Course CurriculumInternationally Recognized Course CurriculumInternationally Recognized Course Curriculum', 'Gurgaon'),
(4, 'Tested and successfully implemented business models.', 'dfhsdhjstfj', '8969959', 'Tested and successfully implemented business models.Tested and successfully implemented business models.', 'agra');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `image_id` int(11) NOT NULL,
  `image_title` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_title`, `image_name`, `time`) VALUES
(2, 'hjnghj', 'Gallery_pic2964_2964.jpg', '2018-02-12 15:59:36'),
(4, 'test23', 'Gallery_pic6685_6685.jpg', '2018-02-20 17:13:20'),
(5, 'test4', 'Gallery_pic3277_3277.jpg', '2018-02-20 17:13:35'),
(6, 'test5', 'Gallery_pic5439_5439.jpg', '2018-02-20 17:15:24'),
(7, 'test5', 'Gallery_pic2537_2537.jpg', '2018-02-20 17:15:35'),
(8, 'test67', 'Gallery_pic8658_8658.jpg', '2018-02-20 17:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`) VALUES
(1, 'About Us'),
(2, 'Courses'),
(3, 'Admission'),
(4, 'Franchise'),
(5, 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `description1` text NOT NULL,
  `news_pic` text NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title1`, `description1`, `news_pic`, `update_time`) VALUES
(5, 'news3', '<p><a href="http://localhost:9999/vsdZone.com/index.php?log_username=&amp;submit=Submit#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a></p>\r\n', '', '2018-02-15 16:34:55'),
(6, 'news4', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>\r\n', '', '2018-02-15 16:35:16'),
(7, 'vbcvcbv', '<p>okay okay</p>\r\n', 'news_pic7858_7858.jpg', '2018-02-16 21:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state`) VALUES
(1, 'Andaman and Nicobar (AN)'),
(2, 'Andhra Pradesh (AP)'),
(3, 'Arunachal Pradesh (AR)'),
(4, 'Assam (AS)'),
(5, 'Bihar (BR)'),
(6, 'Chandigarh (CH)'),
(7, 'Chhattisgarh (CG)'),
(8, 'Dadra and Nagar Haveli (DN)'),
(9, 'Daman and Diu (DD)'),
(10, 'Delhi (DL)'),
(11, 'Goa (GA)'),
(12, 'Gujarat (GJ)'),
(13, 'Haryana (HR)'),
(14, 'Himachal Pradesh (HP)'),
(15, 'Jammu and Kashmir (JK)'),
(16, 'Jharkhand (JH)'),
(17, 'Karnataka (KA)'),
(18, 'Kerala (KL)'),
(19, 'Lakshdweep (LD)'),
(20, 'Madhya Pradesh (MP)'),
(21, 'Maharashtra (MH)'),
(22, 'Manipur (MN)'),
(23, 'Meghalaya (ML)'),
(24, 'Mizoram (MZ)'),
(25, 'Nagaland (NL)'),
(26, 'Odisha (OD)'),
(27, 'Puducherry (PY)'),
(28, 'Punjab (PB)'),
(29, 'Rajasthan (RJ)'),
(30, 'Sikkim (SK)'),
(31, 'Tamil Nadu (TN)'),
(32, 'Tripura (TR)'),
(33, 'Uttar Pradesh (UP)'),
(34, 'Uttarakhand (UK)'),
(35, 'West Bengal (WB)');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Student_Id` int(11) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_contact` varchar(100) NOT NULL,
  `reg_number` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `s_type` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `c_period` varchar(100) NOT NULL,
  `c_validity` date NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `tution_fee` int(11) NOT NULL,
  `exam_fee` int(11) NOT NULL,
  `total_fee` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_father` varchar(100) NOT NULL,
  `s_mother` varchar(100) NOT NULL,
  `s_dob` date NOT NULL,
  `s_gender` varchar(100) NOT NULL,
  `s_qualification` varchar(100) NOT NULL,
  `s_village` varchar(100) NOT NULL,
  `s_PO` varchar(100) NOT NULL,
  `s_tehsil` varchar(100) NOT NULL,
  `s_district` varchar(100) NOT NULL,
  `s_pincode` varchar(100) NOT NULL,
  `s_state` varchar(100) NOT NULL,
  `s_city` varchar(100) NOT NULL,
  `s_nationality` varchar(100) NOT NULL,
  `s_cast` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_Id`, `s_email`, `s_contact`, `reg_number`, `date`, `s_type`, `c_name`, `center_name`, `c_period`, `c_validity`, `admission_fee`, `tution_fee`, `exam_fee`, `total_fee`, `s_name`, `s_father`, `s_mother`, `s_dob`, `s_gender`, `s_qualification`, `s_village`, `s_PO`, `s_tehsil`, `s_district`, `s_pincode`, `s_state`, `s_city`, `s_nationality`, `s_cast`, `time`) VALUES
(1, 'shukla.gopalknp@gmail.com', '9839663663', '78UUP67', '2018-02-20', 'new', 'MCA Distance', 'Kanpur', '6 months', '2019-02-21', 3000, 5000, 1000, 9000, 'Gopal Shukla', 'Mr. T.N. Shukla', 'Kishori Shukla', '0000-00-00', 'male', 'B.tech', '', 'barra', 'Knapur', 'Kanpur', '208027', '', '', 'Indian', 'General', '2018-02-19 14:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `view_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `view_name` varchar(100) NOT NULL,
  `view_image` text NOT NULL,
  `view_description` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`view_id`, `menu_id`, `view_name`, `view_image`, `view_description`, `time`) VALUES
(1, 1, 'About Us', 'viewpic2108_2108.jpg', '<p>Vsd Infotech has a friendly environment to sharpen skills for excellent academic performance,building self confidence,think critically and develop scientific and constructive thinking of every student supported by hi-tech infrastructure and inspiring teachers.</p>\r\n\r\n<p>â–ºSpecial classes for weak students and absentee students to cope up with studies in class.</p>\r\n\r\n<p>â–ºRegular Parent-Teachers meeting.</p>\r\n\r\n<p>â–ºHygienic, Pollution-free-environment.</p>\r\n\r\n<p>â–ºVarious co-curricular activities like Science exhibition,singing and dancing,craft and many more.</p>\r\n\r\n<p>â–ºHich-tech class rooms with projectors,CCTV cameras and knowledgeable materials.</p>\r\n', '2018-02-08 00:00:00'),
(2, 1, 'Mission', 'viewpic8319_8319.jpg', '<p><span style="font-size:14px"><span style="color:#0000CD"><strong>Institution Mission</strong></span></span></p>\r\n\r\n<p>Children of today are citizens of tomorrow. Our Vision is to train children at Gardenia Public School, not only to become good citizens of the country but also to become world leaders. The School endeavors holistic development of every child by inculcating leadership qualities, the value of life, strong personality traits right from the beginning of their lives.</p>\r\n\r\n<p>Gardenia Public School has a friendly environment to sharpen skills for excellent academic performance, building self-confidence, think critically and develop scientific and constructive thinking of every student supported by hi-tech infrastructure and inspiring teachers.</p>\r\n', '0000-00-00 00:00:00'),
(3, 1, 'vision', 'viewpic3952_3952.jpg', '<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:26px">&quot;</span>IT Zone Infotech aims to empower student with such technical skills so as to make them readily employable in the job market. We fill the gap between employer expectations and the available talent pool, by providing necessary training to students.<span style="font-size:26px">&quot;</span> IT Zone Infotech aspires to be a complete job oriented training services provider for individuals and corporate.</p>\r\n', '2018-02-08 00:00:00'),
(4, 1, 'Our Quality Policy', 'viewpic9978_9978.jpg', '<p>Our Quality policy is to achieve sustained growth by providing Quality Services in the areas of Training to our customers through Effective Implementation and Continual Improvement of the Quality Management System.</p>\r\n', '2018-02-08 00:00:00'),
(5, 1, 'team', '', '<table border="0" cellspacing="0" id="ctl00_ContentPlaceHolder1_Repeater1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td>IT Zone Infotech India&nbsp;<br />\r\n						Pandu Nagar, Kanpur Nagar, U.P.&nbsp;<br />\r\n						Contact Person:</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>14.</strong></td>\r\n						<td>Sun Light Computer &amp; Typing Centre&nbsp;<br />\r\n						Sikandra, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Mulayam Singh</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>2.</strong></td>\r\n						<td>Kelvin Computer Institute&nbsp;<br />\r\n						Mandhana, Kanpur, U.P.&nbsp;<br />\r\n						Contact Person: Miss. Sonalee Shukla</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>15.</strong></td>\r\n						<td>Innovative Mobile &amp; Computer Training Centre&nbsp;<br />\r\n						Kahinjari, Rasoolabad, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Ram Prakash Sharma. &amp; Mr. Dharmendra Kushwaha</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>3.</strong></td>\r\n						<td>Logic Computer Institute&nbsp;<br />\r\n						Khajua, Fatehpur, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Shsheel Kumar Sharma</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>16.</strong></td>\r\n						<td>New Expert Computer Center&nbsp;<br />\r\n						Shivli, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Adarsh Kumar</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>4.</strong></td>\r\n						<td>Perfect Computer Institute&nbsp;<br />\r\n						Sikathiya, Kanpur Nagar, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Govind Tiwari</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>17.</strong></td>\r\n						<td>Logic Computer Institute&nbsp;<br />\r\n						Bakewar, Fatehpur, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Susheel Kumar Sharma</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>5.</strong></td>\r\n						<td>Perfect Computer Study Center&nbsp;<br />\r\n						Moosa Nagar, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Ashwani Sachan</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>18.</strong></td>\r\n						<td>M. S. Computer Center&nbsp;<br />\r\n						Moosa Nagar, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Miss Rabiya Bano &amp; Miss Safia Bano</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>6.</strong></td>\r\n						<td>M.S. Chauhan Institute of Computer&nbsp;<br />\r\n						Pukhrayan, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. M. S. Chauhan</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>19.</strong></td>\r\n						<td>Perfect Computer Institute&nbsp;<br />\r\n						Maharajpur, Kanpur Nagar, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Govind Tiwari</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>7.</strong></td>\r\n						<td>New Bee Techno Education Computer Center&nbsp;<br />\r\n						Sandalpur, Sikandra, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Govind Mishra</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>20.</strong></td>\r\n						<td>Perfect Computer Study Center&nbsp;<br />\r\n						Reona, Kanpur Nagar (U.P.)&nbsp;<br />\r\n						Contact Person: Mr. Ashwani Sachan</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>8.</strong></td>\r\n						<td>Vaishnavi Computer Training Center&nbsp;<br />\r\n						Derapur Road, Rura, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mrs. Gunjan Baghel</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>21.</strong></td>\r\n						<td>G.S. Institute of Computer Technology&nbsp;<br />\r\n						Near Allahabad Bank, Rania, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Govind Singh</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>9.</strong></td>\r\n						<td>Arya Computer Institute&nbsp;<br />\r\n						Near Gramin Bank, Rasulabad, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Sarvesh Rathore</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>22.</strong></td>\r\n						<td>Yash Computer Centre&nbsp;<br />\r\n						Ghatampur, Kanpur Nagar, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Vikash Shukla</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>10.</strong></td>\r\n						<td>Ansh Computer Technology Center&nbsp;<br />\r\n						Rura, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Raj Kumar</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>23.</strong></td>\r\n						<td>Infotech Computer Center&nbsp;<br />\r\n						Binaur, Kanpur Nagar. (U.P.)&nbsp;<br />\r\n						Contact Person: Mr. Ajay Singh Chandel</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>11.</strong></td>\r\n						<td>A.N.C. Computer Classes&nbsp;<br />\r\n						Tikra, Kanpur Nagar, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Rahul Yadav</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>24.</strong></td>\r\n						<td>High Tech Computer Center&nbsp;<br />\r\n						Raipur, Kanpur Dehat (Akbarpur). (U.P.)&nbsp;<br />\r\n						Contact Person: Mr. Vikas Yadav</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>12.</strong></td>\r\n						<td>Success Computer Center&nbsp;<br />\r\n						Fattepur, Moosa Nagar, Kanpur Dehat, U.P.&nbsp;<br />\r\n						Contact Person: Mr. Mohit Kumar</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>25.</strong></td>\r\n						<td>Data One Computer Education Center&nbsp;<br />\r\n						Koda, Jahanabad, Fatehpur. (U.P.)&nbsp;<br />\r\n						Contact Person: Mr. Kuldeep Kumar</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>13.</strong></td>\r\n						<td>M.S. Chauhan Institue of Computer&nbsp;<br />\r\n						Turnanganj, Kalpi, Jalaun, U.P.&nbsp;<br />\r\n						Contact Person: Mr. M. S. Chauhan</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>26.</strong></td>\r\n						<td>J.B.S. Academy&nbsp;<br />\r\n						Pratapgarh. (U.P.)&nbsp;<br />\r\n						Contact Person: Mr. Abhinav Singh</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2018-02-08 00:00:00'),
(7, 0, 'Admission', '', '<p>ADmission Detail Can be changed in ADmission Content section in Dashboard.</p>\r\n', '0000-00-00 00:00:00'),
(10, 2, 'MCA Distance', '', '<p>MCA DistanceMCA DistanceMCA DistanceMCA DistanceMCA DistanceMCA Distance</p>\r\n', '2018-02-19 15:00:26'),
(11, 2, 'CCC', '', '<p>CCC course</p>\r\n', '2018-02-19 15:00:42'),
(12, 2, 'O level', '', '<p>O level course</p>\r\n', '2018-02-19 15:00:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `franchise`
--
ALTER TABLE `franchise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_Id`),
  ADD UNIQUE KEY `reg_number` (`reg_number`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `franchise`
--
ALTER TABLE `franchise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;