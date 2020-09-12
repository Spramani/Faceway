-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2019 at 02:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faceway`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_id` int(10) NOT NULL,
  `receiver_id` int(10) NOT NULL,
  `chat_type` varchar(6) NOT NULL,
  `massage` text NOT NULL,
  `media_path` varchar(20) DEFAULT NULL,
  `chat_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`),
  KEY `chat_type` (`chat_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `user_id`, `comment_text`, `comment_created_date`) VALUES
(73, 105, 18, 'how are you', '2019-04-19 13:34:37'),
(74, 106, 18, 'superb pic', '2019-04-19 13:35:34'),
(75, 108, 18, 'smile', '2019-04-19 13:37:50'),
(77, 110, 18, 'fxgd b', '2019-04-25 13:19:57'),
(78, 112, 18, 'fcv', '2019-04-25 13:24:21'),
(79, 106, 19, 'dofdfl;vc,', '2019-06-06 13:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `comment_like`
--

DROP TABLE IF EXISTS `comment_like`;
CREATE TABLE IF NOT EXISTS `comment_like` (
  `comment_like_id` int(10) NOT NULL AUTO_INCREMENT,
  `comment_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment_like_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_like_id`),
  KEY `comment_id` (`comment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_like`
--

INSERT INTO `comment_like` (`comment_like_id`, `comment_id`, `user_id`, `comment_like_created_date`) VALUES
(45, 74, 18, '2019-04-19 13:35:36'),
(46, 75, 18, '2019-04-19 13:37:52'),
(48, 77, 18, '2019-04-25 13:19:59'),
(49, 78, 18, '2019-04-25 13:24:23'),
(50, 74, 19, '2019-06-06 13:50:00'),
(51, 79, 19, '2019-06-06 13:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `e_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `college_university` varchar(100) DEFAULT NULL,
  `college_joining_date` varchar(20) DEFAULT NULL,
  `address_of_college` text,
  `secondary_school` varchar(100) DEFAULT NULL,
  `school_joining_date` varchar(20) DEFAULT NULL,
  `address_of_school` text,
  `education_create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`e_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_id`, `user_id`, `college_university`, `college_joining_date`, `address_of_college`, `secondary_school`, `school_joining_date`, `address_of_school`, `education_create_date`) VALUES
(8, 18, 'udhna college', '25/06/2017', 'ranchode nager', 'tapovan', '25/06/2015', 'nana varachha', '2019-04-19 13:27:25'),
(9, 19, '', '', '', '', '', '', '2019-06-06 13:48:14'),
(10, 20, '', '', '', '', '', '', '2019-06-28 14:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

DROP TABLE IF EXISTS `friend`;
CREATE TABLE IF NOT EXISTS `friend` (
  `friend_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `user_friend_id` int(10) NOT NULL,
  `friend_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`friend_id`),
  KEY `user_id` (`user_id`),
  KEY `user_friend_id` (`user_friend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`friend_id`, `user_id`, `user_friend_id`, `friend_created_date`) VALUES
(1, 18, 19, '2019-06-28 13:59:27'),
(2, 19, 18, '2019-06-28 14:02:20'),
(3, 19, 18, '2019-06-28 14:02:21'),
(4, 19, 18, '2019-06-28 14:02:25'),
(5, 18, 20, '2019-06-28 14:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE IF NOT EXISTS `hobbies` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `hobbies` text,
  `favourite_TV_Shows` text,
  `favourite_Movies` text,
  `favourite_Games` text,
  `favourite_Music_Bands_Artists` text,
  `favourite_Books` text,
  `favourite_Writers` text,
  `other_Interests` text,
  `hobbies_create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`h_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`h_id`, `user_id`, `hobbies`, `favourite_TV_Shows`, `favourite_Movies`, `favourite_Games`, `favourite_Music_Bands_Artists`, `favourite_Books`, `favourite_Writers`, `other_Interests`, `hobbies_create_date`) VALUES
(41, 18, 'study', 'sub tv', 'kesari', 'GTA 5', 'sa re ga ma', 'ONe Things', 'dr.shubham ramani', 'swiming', '2019-04-19 13:27:25'),
(42, 19, '', '', '', '', '', '', '', '', '2019-06-06 13:48:13'),
(43, 20, '', '', '', '', '', '', '', '', '2019-06-28 14:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `notification_type` int(2) NOT NULL COMMENT '1=REQUEST,2=REQUEST_ACCEPT,3=LIKE_ON_POST,4=COMMENT,5=LIKE_ON_COMMENT',
  `sender_id` int(10) NOT NULL,
  `post_id` int(10) DEFAULT NULL,
  `chat_id` int(10) DEFAULT NULL,
  `comment_id` int(10) DEFAULT NULL,
  `notification_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notification_id`),
  KEY `user_id` (`user_id`),
  KEY `sender_id` (`sender_id`),
  KEY `post_id` (`post_id`),
  KEY `chat_id` (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_id`, `notification_type`, `sender_id`, `post_id`, `chat_id`, `comment_id`, `notification_created_date`) VALUES
(13, 18, 2, 19, NULL, NULL, NULL, '2019-06-28 14:02:20'),
(14, 18, 2, 19, NULL, NULL, NULL, '2019-06-28 14:02:21'),
(15, 18, 2, 19, NULL, NULL, NULL, '2019-06-28 14:02:25'),
(17, 20, 2, 18, NULL, NULL, NULL, '2019-06-28 14:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

DROP TABLE IF EXISTS `otp_table`;
CREATE TABLE IF NOT EXISTS `otp_table` (
  `o_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `otp_code` int(5) NOT NULL,
  `otp_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_table`
--

INSERT INTO `otp_table` (`o_id`, `user_id`, `otp_code`, `otp_created_date`) VALUES
(64, 20, 5470, '2019-06-28 14:05:07'),
(58, 19, 5659, '2019-06-28 13:53:13'),
(63, 18, 4829, '2019-06-28 13:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `post_type` int(1) NOT NULL,
  `decription` text,
  `media_path` varchar(20) DEFAULT NULL,
  `post_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_type`, `decription`, `media_path`, `post_created_date`) VALUES
(105, 18, 0, 'hello', NULL, '2019-04-19 13:34:05'),
(106, 18, 1, 'enjoy time', '57059736.jpg', '2019-04-19 13:35:21'),
(107, 18, 1, NULL, '93855855.jpg', '2019-04-19 13:36:10'),
(108, 18, 2, 'bollywood song', '925075110.mp4', '2019-04-19 13:37:20'),
(110, 18, 0, 'dfbv', NULL, '2019-04-25 13:19:44'),
(111, 18, 1, NULL, '1565116915.jpeg', '2019-04-25 13:22:17'),
(112, 18, 2, NULL, '1407489759.mp4', '2019-04-25 13:23:39'),
(113, 18, 2, NULL, '1653123625.mp4', '2019-04-25 13:23:39'),
(114, 18, 2, NULL, '1010207459.mp4', '2019-04-25 13:23:39'),
(116, 18, 1, NULL, '1412516867.jpg', '2019-06-28 13:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

DROP TABLE IF EXISTS `post_like`;
CREATE TABLE IF NOT EXISTS `post_like` (
  `post_like_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_like_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_like_id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_like_id`, `post_id`, `user_id`, `post_like_created_date`) VALUES
(96, 105, 18, '2019-04-19 13:34:39'),
(97, 106, 18, '2019-04-19 13:35:33'),
(98, 107, 18, '2019-04-19 13:36:15'),
(100, 108, 18, '2019-04-19 13:37:51'),
(102, 110, 18, '2019-04-25 13:19:48'),
(103, 111, 18, '2019-04-25 13:22:21'),
(104, 110, 19, '2019-06-06 13:49:21'),
(107, 112, 19, '2019-06-06 13:49:36'),
(108, 111, 19, '2019-06-06 13:49:43'),
(110, 106, 19, '2019-06-06 13:50:07'),
(111, 116, 18, '2019-06-28 13:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

DROP TABLE IF EXISTS `relationship`;
CREATE TABLE IF NOT EXISTS `relationship` (
  `relationship_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_id` int(10) NOT NULL,
  `receiver_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `relationship_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`relationship_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_name_id` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_gender` tinyint(1) NOT NULL,
  `u_contact` varchar(15) DEFAULT NULL,
  `u_website` varchar(20) DEFAULT NULL,
  `u_dob` varchar(20) DEFAULT NULL,
  `u_coverpic` varchar(50) DEFAULT 'default.png',
  `u_profilepic` varchar(50) DEFAULT 'default.png',
  `u_bio` text,
  `u_birthplace` varchar(30) DEFAULT NULL,
  `u_lives_in` varchar(30) DEFAULT NULL,
  `u_occupation` varchar(50) DEFAULT NULL,
  `u_is_privat` tinyint(1) NOT NULL DEFAULT '0',
  `u_status` tinyint(1) NOT NULL DEFAULT '1',
  `u_merrige_status` int(5) DEFAULT NULL,
  `user_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_nsme_id` (`u_name_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_name_id`, `u_email`, `u_password`, `u_gender`, `u_contact`, `u_website`, `u_dob`, `u_coverpic`, `u_profilepic`, `u_bio`, `u_birthplace`, `u_lives_in`, `u_occupation`, `u_is_privat`, `u_status`, `u_merrige_status`, `user_created_date`) VALUES
(18, 'shubham ramani', 'bhai', 'shubhamramani903@gmail.com', '123', 1, '7575031095', 'www.shbham.com', '27/08/1999', '1556178694.png', '1555664100.png', 'hello i am shubham ramani.', 'surat', 'surat', 'study', 0, 1, NULL, '2019-04-19 13:27:25'),
(19, 'xyz', 'good', 'shubhamramani903@gmail.com', '123', 1, NULL, NULL, NULL, 'default.png', 'default.png', NULL, NULL, NULL, NULL, 0, 1, NULL, '2019-06-06 13:48:13'),
(20, 'ramani', 'shubham', 'shubhamramani222@gmail.com', '123', 1, NULL, NULL, NULL, 'default.png', 'default.png', NULL, NULL, NULL, NULL, 0, 1, NULL, '2019-06-28 14:04:48');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_like`
--
ALTER TABLE `comment_like`
  ADD CONSTRAINT `comment_like_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_like_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `friend_ibfk_2` FOREIGN KEY (`user_friend_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `notification_ibfk_4` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`chat_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `post_like_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `relationship`
--
ALTER TABLE `relationship`
  ADD CONSTRAINT `relationship_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `relationship_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
