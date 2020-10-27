-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 02:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chidesigns`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL,
  `fdesigners_id` int(11) DEFAULT NULL,
  `complaint_fullname` varchar(45) DEFAULT NULL,
  `complaint_phone` varchar(45) DEFAULT NULL,
  `complaint_description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designcategory`
--

CREATE TABLE `designcategory` (
  `designcat_id` int(11) NOT NULL,
  `designcat_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designcategory`
--

INSERT INTO `designcategory` (`designcat_id`, `designcat_name`) VALUES
(1, 'owambe'),
(2, 'casual'),
(3, 'formal'),
(4, 'bridal'),
(5, 'babies'),
(6, 'jumpsuits');

-- --------------------------------------------------------

--
-- Table structure for table `designpictures`
--

CREATE TABLE `designpictures` (
  `dpictures_id` int(15) NOT NULL,
  `fdesigns_id` int(15) DEFAULT NULL,
  `dpictures_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designpictures`
--

INSERT INTO `designpictures` (`dpictures_id`, `fdesigns_id`, `dpictures_location`) VALUES
(19, 17, '15803094760.jpg'),
(20, 17, '15803094761.jpg'),
(21, 17, '15803094762.jpg'),
(22, 18, '15803095090.jpg'),
(23, 18, '15803095101.jpg'),
(24, 18, '15803095102.jpg'),
(25, 19, '15803095490.jpg'),
(26, 19, '15803095491.jpg'),
(27, 19, '15803095492.jpg'),
(28, 20, '15803095780.jpg'),
(29, 20, '15803095791.jpg'),
(30, 20, '15803095792.jpg'),
(31, 21, '15803096570.jpg'),
(32, 21, '15803096571.jpg'),
(33, 21, '15803096572.jpg'),
(34, 22, '15803096890.jpg'),
(35, 22, '15803096891.jpg'),
(36, 22, '15803096892.jpg'),
(37, 23, '15803098560.jpg'),
(38, 23, '15803098561.jpg'),
(39, 23, '15803098562.jpg'),
(40, 24, '15803098850.jpg'),
(41, 24, '15803098851.jpg'),
(42, 24, '15803098852.jpg'),
(43, 25, '15803101250.jpg'),
(44, 25, '15803101251.jpg'),
(45, 25, '15803101252.jpg'),
(46, 26, '15803101520.jpg'),
(47, 26, '15803101521.jpg'),
(48, 26, '15803101522.jpg'),
(49, 27, '15803101800.jpg'),
(50, 27, '15803101801.jpg'),
(51, 27, '15803101802.jpg'),
(52, 28, '15803102100.jpg'),
(53, 28, '15803102101.jpg'),
(54, 28, '15803102112.jpg'),
(55, 29, '15803163700.jpg'),
(56, 29, '15803163701.jpg'),
(57, 29, '15803163702.jpg'),
(58, 30, '15803163850.jpg'),
(59, 30, '15803163861.jpg'),
(60, 30, '15803163862.jpg'),
(61, 31, '15803164540.jpg'),
(62, 31, '15803164541.jpg'),
(63, 31, '15803164542.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fashiondesigners`
--

CREATE TABLE `fashiondesigners` (
  `fdesigner_id` int(11) NOT NULL,
  `fdesigner_fname` varchar(45) DEFAULT NULL,
  `fdesigner_lname` varchar(45) DEFAULT NULL,
  `fdesigner_brandname` varchar(100) DEFAULT NULL,
  `fdesigner_email` varchar(45) DEFAULT NULL,
  `fdesigner_pwd` varchar(45) DEFAULT NULL,
  `fdesigner_phone` varchar(45) DEFAULT NULL,
  `fdesigner_location` varchar(90) DEFAULT NULL,
  `fdesigner_signage` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fashiondesigners`
--

INSERT INTO `fashiondesigners` (`fdesigner_id`, `fdesigner_fname`, `fdesigner_lname`, `fdesigner_brandname`, `fdesigner_email`, `fdesigner_pwd`, `fdesigner_phone`, `fdesigner_location`, `fdesigner_signage`) VALUES
(1, 'seun', 'olaniyi', 'seun concepts', 'seun@gmail.com', 'ade', '08036205135', 'ogba,lagos', NULL),
(2, 'praise', 'adekunle', 'ade concepts', 'tzpraise@gmail.com', 'ade', '08036205135', 'ketu ,lagos', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fashiondesigns`
--

CREATE TABLE `fashiondesigns` (
  `fdesigns_id` int(11) NOT NULL,
  `designcat_id` int(11) DEFAULT NULL,
  `fdesigners_id` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `fdesigns_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fashiondesigns`
--

INSERT INTO `fashiondesigns` (`fdesigns_id`, `designcat_id`, `fdesigners_id`, `gender_id`, `fdesigns_description`) VALUES
(17, 1, 2, 1, 'affdvb hnj'),
(18, 2, 2, 1, 'wegrthygnbregb'),
(19, 3, 2, 2, 'evsfghbd'),
(20, 4, 2, 2, 'bftfrsva'),
(21, 5, 2, 1, 'ssssssssssssssss'),
(22, 6, 2, 1, 'cdaaaaaaaaaaaaaaa'),
(23, 1, 1, 1, 'aevgrnh'),
(24, 2, 1, 2, 'wgrbh'),
(25, 3, 1, 2, 'fgggtfr'),
(26, 4, 1, 1, 'ryyyyyyyyyyyyyyy'),
(27, 5, 1, 1, 'gttttttttttttttrf'),
(28, 6, 1, 1, 'rfffffwwwwwwwwwwwwwwwww'),
(29, 1, 1, 1, 'trgnyhgjm'),
(30, 1, 1, 2, 'gergetbhny h'),
(31, 1, 2, 1, 'f4grtyn');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_type`) VALUES
(1, 'male'),
(2, 'female'),
(3, 'unisex');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `fk4_idx` (`fdesigners_id`);

--
-- Indexes for table `designcategory`
--
ALTER TABLE `designcategory`
  ADD PRIMARY KEY (`designcat_id`);

--
-- Indexes for table `designpictures`
--
ALTER TABLE `designpictures`
  ADD PRIMARY KEY (`dpictures_id`),
  ADD KEY `fk8` (`fdesigns_id`);

--
-- Indexes for table `fashiondesigners`
--
ALTER TABLE `fashiondesigners`
  ADD PRIMARY KEY (`fdesigner_id`);

--
-- Indexes for table `fashiondesigns`
--
ALTER TABLE `fashiondesigns`
  ADD PRIMARY KEY (`fdesigns_id`),
  ADD KEY `fk1_idx` (`designcat_id`),
  ADD KEY `fk2_idx` (`fdesigners_id`),
  ADD KEY `fk3_idx` (`gender_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designcategory`
--
ALTER TABLE `designcategory`
  MODIFY `designcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designpictures`
--
ALTER TABLE `designpictures`
  MODIFY `dpictures_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `fashiondesigners`
--
ALTER TABLE `fashiondesigners`
  MODIFY `fdesigner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fashiondesigns`
--
ALTER TABLE `fashiondesigns`
  MODIFY `fdesigns_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`fdesigners_id`) REFERENCES `fashiondesigners` (`fdesigner_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `designpictures`
--
ALTER TABLE `designpictures`
  ADD CONSTRAINT `fk8` FOREIGN KEY (`fdesigns_id`) REFERENCES `fashiondesigns` (`fdesigns_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fashiondesigns`
--
ALTER TABLE `fashiondesigns`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`designcat_id`) REFERENCES `designcategory` (`designcat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`fdesigners_id`) REFERENCES `fashiondesigners` (`fdesigner_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
