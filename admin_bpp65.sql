-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2023 at 07:02 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_bpp65`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_user` varchar(50) NOT NULL,
  `ad_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_user`, `ad_pass`) VALUES
(1, 'adminHoq', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `in_data`
--

CREATE TABLE `in_data` (
  `in_id` int(11) NOT NULL,
  `agency` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `agency_sub` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `2_3` int(11) NOT NULL,
  `2_4` int(11) NOT NULL,
  `2_5_1` int(11) NOT NULL,
  `2_5_2` int(11) NOT NULL,
  `2_5_3` int(11) NOT NULL,
  `2_5_4` int(11) NOT NULL,
  `2_5_5` int(11) NOT NULL,
  `2_5_6` int(11) NOT NULL,
  `2_5_7` int(11) NOT NULL,
  `2_5_8` int(11) NOT NULL,
  `2_5_9` int(11) NOT NULL,
  `2_5_10` int(11) NOT NULL,
  `2_5t` text NOT NULL,
  `2_6` int(11) NOT NULL,
  `2_6t` text NOT NULL,
  `2_7` int(11) NOT NULL,
  `2_8` int(11) NOT NULL,
  `2_9` int(11) NOT NULL,
  `2_10` int(11) NOT NULL,
  `2_10t` text NOT NULL,
  `2_11` int(11) NOT NULL,
  `2_11t` text NOT NULL,
  `2_12` int(11) NOT NULL,
  `2_12t` text NOT NULL,
  `2_13` int(11) NOT NULL,
  `2_14` int(11) NOT NULL,
  `2_15` int(11) NOT NULL,
  `2_16` int(11) NOT NULL,
  `in1_1` varchar(4) NOT NULL,
  `in1_2` varchar(4) NOT NULL,
  `in1_3` varchar(4) NOT NULL,
  `in2` int(11) NOT NULL,
  `hn3` int(11) NOT NULL,
  `hn4` int(11) NOT NULL,
  `hn5` int(11) NOT NULL,
  `hn6` int(11) NOT NULL,
  `hn7` int(11) NOT NULL,
  `in3` int(11) NOT NULL,
  `in4` int(11) NOT NULL,
  `in5` int(11) NOT NULL,
  `in6` int(11) NOT NULL,
  `cv1` int(11) NOT NULL,
  `in7` int(11) NOT NULL,
  `in8` int(11) NOT NULL,
  `in9` int(11) NOT NULL,
  `in10` int(11) NOT NULL,
  `in11` int(11) NOT NULL,
  `cv2` int(11) NOT NULL,
  `in12` int(11) NOT NULL,
  `in13` int(11) NOT NULL,
  `in14` int(11) NOT NULL,
  `in15` int(11) NOT NULL,
  `in16` int(11) NOT NULL,
  `cv3` int(11) NOT NULL,
  `in17` int(11) NOT NULL,
  `in18` int(11) NOT NULL,
  `in19` int(11) NOT NULL,
  `in20` int(11) NOT NULL,
  `in21` int(11) NOT NULL,
  `cv4` int(11) NOT NULL,
  `in22` int(11) NOT NULL,
  `in23` int(11) NOT NULL,
  `in24` int(11) NOT NULL,
  `cv5` int(11) NOT NULL,
  `in25` int(11) NOT NULL,
  `in26` int(11) NOT NULL,
  `in27` int(11) NOT NULL,
  `in28` int(11) NOT NULL,
  `in29` int(11) NOT NULL,
  `in30` int(11) NOT NULL,
  `cv6` int(11) NOT NULL,
  `in31` int(11) NOT NULL,
  `in32` int(11) NOT NULL,
  `in33` int(11) NOT NULL,
  `cv7` int(11) NOT NULL,
  `in34` int(11) NOT NULL,
  `in35` int(11) NOT NULL,
  `in36` int(11) NOT NULL,
  `in37` int(11) NOT NULL,
  `cv8` int(11) NOT NULL,
  `in38` int(11) NOT NULL,
  `in39` int(11) NOT NULL,
  `in40` int(11) NOT NULL,
  `in41` int(11) NOT NULL,
  `in42` int(11) NOT NULL,
  `in43` int(11) NOT NULL,
  `in44` int(11) NOT NULL,
  `in45` int(11) NOT NULL,
  `in46` int(11) NOT NULL,
  `in47` int(11) NOT NULL,
  `in48` int(11) NOT NULL,
  `in49` int(11) NOT NULL,
  `in50` int(11) NOT NULL,
  `in51` int(11) NOT NULL,
  `in52` int(11) NOT NULL,
  `in53` int(11) NOT NULL,
  `in54` int(11) NOT NULL,
  `cv9` int(11) NOT NULL,
  `in55` int(11) NOT NULL,
  `in56` int(11) NOT NULL,
  `in57` int(11) NOT NULL,
  `in58` int(11) NOT NULL,
  `in59` int(11) NOT NULL,
  `in60` int(11) NOT NULL,
  `in61` int(11) NOT NULL,
  `in62` int(11) NOT NULL,
  `in63` int(11) NOT NULL,
  `in64` int(11) NOT NULL,
  `in65` int(11) NOT NULL,
  `in66` int(11) NOT NULL,
  `in67` int(11) NOT NULL,
  `in68` int(11) NOT NULL,
  `in69` int(11) NOT NULL,
  `in70` int(11) NOT NULL,
  `in71` int(11) NOT NULL,
  `in72` int(11) NOT NULL,
  `in73` int(11) NOT NULL,
  `in74` int(11) NOT NULL,
  `in75` int(11) NOT NULL,
  `in76` int(11) NOT NULL,
  `in77` int(11) NOT NULL,
  `in78` int(11) NOT NULL,
  `in79` varchar(250) NOT NULL,
  `in80` varchar(250) NOT NULL,
  `in_date` varchar(20) NOT NULL,
  `in_time` varchar(20) NOT NULL,
  `id_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_data`
--

INSERT INTO `in_data` (`in_id`, `agency`, `agency_sub`, `sex`, `age`, `2_3`, `2_4`, `2_5_1`, `2_5_2`, `2_5_3`, `2_5_4`, `2_5_5`, `2_5_6`, `2_5_7`, `2_5_8`, `2_5_9`, `2_5_10`, `2_5t`, `2_6`, `2_6t`, `2_7`, `2_8`, `2_9`, `2_10`, `2_10t`, `2_11`, `2_11t`, `2_12`, `2_12t`, `2_13`, `2_14`, `2_15`, `2_16`, `in1_1`, `in1_2`, `in1_3`, `in2`, `hn3`, `hn4`, `hn5`, `hn6`, `hn7`, `in3`, `in4`, `in5`, `in6`, `cv1`, `in7`, `in8`, `in9`, `in10`, `in11`, `cv2`, `in12`, `in13`, `in14`, `in15`, `in16`, `cv3`, `in17`, `in18`, `in19`, `in20`, `in21`, `cv4`, `in22`, `in23`, `in24`, `cv5`, `in25`, `in26`, `in27`, `in28`, `in29`, `in30`, `cv6`, `in31`, `in32`, `in33`, `cv7`, `in34`, `in35`, `in36`, `in37`, `cv8`, `in38`, `in39`, `in40`, `in41`, `in42`, `in43`, `in44`, `in45`, `in46`, `in47`, `in48`, `in49`, `in50`, `in51`, `in52`, `in53`, `in54`, `cv9`, `in55`, `in56`, `in57`, `in58`, `in59`, `in60`, `in61`, `in62`, `in63`, `in64`, `in65`, `in66`, `in67`, `in68`, `in69`, `in70`, `in71`, `in72`, `in73`, `in74`, `in75`, `in76`, `in77`, `in78`, `in79`, `in80`, `in_date`, `in_time`, `id_code`) VALUES
(1, '5', '14', '2', '22', 1, 4, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.5 ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ', 10, '2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)', 4, 3, 2, 5, '2.10 งานที่ท่านทำเป็นงานลักษณะใด', 4, '2.11 ท่านปฏิบัติงานในระดับตำแหน่งใด', 7, '2.12 สถานภาพการจ้างงาน', 2, 4, 4, 4, '55', '162', '38', 3, 3, 4, 4, 4, 4, 3, 4, 3, 4, 3, 4, 4, 3, 4, 3, 2, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 3, 4, 3, 3, 3, 2, 3, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 3, 3, 3, 3, 4, 4, 3, 3, 3, 3, 4, 4, 4, 3, 3, 3, 3, 4, 4, 4, 4, 3, 3, 3, 2, 4, 3, 2, 2, 4, 4, 4, 3, 5, 4, 3, 5, '1.1', '1.3', '04/03/2566', '12:37:54', '15782754001942811695');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `of_id` int(11) NOT NULL,
  `of_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`of_id`, `of_name`) VALUES
(1, 'ระดับ ผกก.ขึ้นไป'),
(2, 'ระดับ รอง ผกก.'),
(3, 'ระดับ สว./ผบ.ร้อย'),
(4, 'ฝอ.บก.สอ.'),
(5, 'กก.1 บก.สอ.'),
(6, 'กก.2 บก.สอ.'),
(7, 'กก.3 บก.สอ.'),
(8, 'กก.4 บก.สอ.'),
(9, 'กก.5 บก.สอ.');

-- --------------------------------------------------------

--
-- Table structure for table `office_sub`
--

CREATE TABLE `office_sub` (
  `os_id` int(11) NOT NULL,
  `os_name` varchar(250) NOT NULL,
  `os_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office_sub`
--

INSERT INTO `office_sub` (`os_id`, `os_name`, `os_group`) VALUES
(1, 'ระดับ ผกก.ขึ้นไป', 1),
(2, 'ระดับ รอง ผกก.', 2),
(3, 'ระดับ สว./ผบ.ร้อย', 3),
(4, 'ธกส', 4),
(5, 'ขว', 4),
(6, 'ผงป', 4),
(7, 'กบ', 4),
(8, 'กร', 4),
(9, 'กง', 4),
(10, 'สสน', 4),
(11, 'ทส', 4),
(12, 'นกว', 4),
(13, 'อก.', 5),
(14, 'ร้อย รพศ.1', 5),
(15, 'ร้อย รพศ.2', 5),
(16, 'ร้อย รพศ.3', 5),
(17, 'ร้อย รพศ.4', 5),
(18, 'ร้อย ปจว', 5),
(19, 'ร้อย อาวุธ', 5),
(20, 'อก.', 6),
(21, 'ร้อย 1', 6),
(22, 'ร้อย 2', 6),
(23, 'ร้อย 3', 6),
(24, 'ร้อย 4', 6),
(25, 'อก.', 7),
(26, 'ร้อย ปพ1', 7),
(27, 'ร้อย ปพ2', 7),
(28, 'ร้อย ปพ3', 7),
(29, 'ร้อยกู้ชีพ', 7),
(30, 'กทบ.', 7),
(31, 'ร้อย รวป ที่ 1', 7),
(32, 'ร้อย รวป ที่ 2', 7),
(33, 'ร้อย รวป ที่ 3', 7),
(34, 'อก.', 8),
(35, 'งานวิจัย', 8),
(36, 'ร้อย ฝพศ', 8),
(37, 'ร้อย ฝอย', 8),
(38, 'ร้อย สกอ', 8),
(39, 'อก.', 9),
(40, 'ชุด ชป', 9),
(41, 'ไกลกังวล', 9),
(42, 'ทักษิณ', 9),
(43, 'ภูพิงค์', 9),
(44, 'ภูพาน', 9),
(45, 'จักรี', 9),
(46, 'เรือยนต์หลวง', 9),
(47, 'ศปก', 9);

-- --------------------------------------------------------

--
-- Table structure for table `page_open`
--

CREATE TABLE `page_open` (
  `po_id` int(11) NOT NULL,
  `po_check` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_open`
--

INSERT INTO `page_open` (`po_id`, `po_check`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int(11) NOT NULL,
  `us_code` varchar(50) NOT NULL,
  `us_name` varchar(250) NOT NULL,
  `us_sname` varchar(250) NOT NULL,
  `us_sex` int(11) NOT NULL,
  `us_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `in_data`
--
ALTER TABLE `in_data`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`of_id`);

--
-- Indexes for table `office_sub`
--
ALTER TABLE `office_sub`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `page_open`
--
ALTER TABLE `page_open`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `in_data`
--
ALTER TABLE `in_data`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `of_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `office_sub`
--
ALTER TABLE `office_sub`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `page_open`
--
ALTER TABLE `page_open`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
