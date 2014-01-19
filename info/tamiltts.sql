-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2014 at 05:56 மாலை
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tamiltts`
--
CREATE DATABASE IF NOT EXISTS `tamiltts` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tamiltts`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_words`
--

CREATE TABLE IF NOT EXISTS `tb_words` (
  `word` varchar(255) COLLATE utf8_bin NOT NULL,
  `length` int(11) NOT NULL,
  `combined_words` int(11) DEFAULT NULL,
  PRIMARY KEY (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_words`
--

INSERT INTO `tb_words` (`word`, `length`, `combined_words`) VALUES
('அதாவது', 4, NULL),
('அந்த', 3, NULL),
('அறிந்து', 4, NULL),
('ஆகும்', 3, NULL),
('ஆயிரக்கணக்கானோர்', 10, NULL),
('இங்கு', 3, NULL),
('இணைந்த', 4, NULL),
('இணைப்பு', 4, NULL),
('இந்த', 3, NULL),
('இந்தத்', 4, NULL),
('இன்', 2, NULL),
('இருந்து', 4, NULL),
('உங்களுக்கு', 6, NULL),
('உங்கள்', 4, NULL),
('உரிமமானது', 6, NULL),
('உரிமம்', 4, NULL),
('உரிமைகளை', 5, NULL),
('உரிமையை', 4, NULL),
('உலகம்', 4, NULL),
('உள்ளன', 4, NULL),
('எதுவும்', 4, NULL),
('ஏற்ப', 3, NULL),
('ஐப்', 2, NULL),
('ஒருங்கிணைப்பட்டிருந்தால்', 13, NULL),
('கட்டமைத்த', 6, NULL),
('கட்டற்ற', 5, NULL),
('கிடைக்கச்', 5, NULL),
('கீழ்', 2, NULL),
('குறியீட்டில்', 6, NULL),
('கொள்ள', 3, NULL),
('கொள்கைகள்', 5, NULL),
('சமூகம்', 4, NULL),
('செய்யப்பட்டுள்ளது', 10, NULL),
('செய்யலாம்', 5, NULL),
('சேவை', 2, NULL),
('சேவைகளுக்குப்', 7, NULL),
('சேவைகள்', 4, NULL),
('தனியுரிமைக்', 6, NULL),
('தயாரிப்பில்', 6, NULL),
('தயாரிப்புக்குப்', 8, NULL),
('திறந்த', 4, NULL),
('தேவைகளுக்கு', 6, NULL),
('நகலெடுக்கலாம்', 8, NULL),
('நீங்கள்', 4, NULL),
('பட்டியலிடப்பட்டிருக்கும்', 14, NULL),
('பதிப்புகளை', 6, NULL),
('பயன்படுத்தலாம்', 9, NULL),
('பற்றி', 3, NULL),
('பல', 2, NULL),
('பிரிவில்', 4, NULL),
('பிரிவு', 3, NULL),
('பையர்பாக்ஸ்', 6, NULL),
('பொது', 2, NULL),
('பொருந்தக்கூடிய', 8, NULL),
('பொருந்தும்', 5, NULL),
('மற்றவர்களுக்கு', 9, NULL),
('மற்றும்', 4, NULL),
('மாற்றங்களையும்', 8, NULL),
('மாற்றியமைத்த', 7, NULL),
('முழுவதும்', 5, NULL),
('மூல', 2, NULL),
('மூலக்', 3, NULL),
('மென்பொருள்', 5, NULL),
('மொசில்லா', 4, NULL),
('வலை', 2, NULL),
('வழங்கப்பட்டிருக்க', 11, NULL),
('வழங்குகிறது', 7, NULL),
('விதிமுறைகளின்', 7, NULL),
('விதிமுறைகள்', 6, NULL),
('விநியோகிக்கலாம்', 8, NULL),
('விநியோகிப்பதற்கான', 10, NULL),
('விஷயங்கள்', 6, NULL),
('வேண்டிய', 4, NULL),
('வேண்டும்', 4, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
