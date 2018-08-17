-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql311.epizy.com
-- Generation Time: Aug 17, 2018 at 02:51 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_22350484_kgecstu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `dept1` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `number`, `dept`, `dept1`, `pass`, `time`) VALUES
(35, 'Sagnik Roy', 'sagnikroy009@gmail.com', '9475245371', 'vc', 'Vidyasagar Chhatrabas', '1234', '2018-07-20 07:02:33.944666'),
(27, 'Abhiraj Singh Rana', 'abhirajsinghrana@gmail.com', '8116438974', 'itb3', 'Department of Information Technology(3rd Year Btech)', 'abhiraj123', '2018-07-07 17:35:27.291261'),
(32, 'Anubhav Jain', 'anubhav823@gmail.com', '8910818183', 'cseb3', 'Department of Computer Science and Engineering(3rd Year Btech)', '1234567890@12', '2018-07-08 13:28:07.763875'),
(29, 'Sagnik Chatterjee', 'sagnik15051998@gmail.com', '7585080289', 'eeb3', 'Department of Electrical Engineering(3rd Year Btech)', 'sonureonsonu', '2018-07-08 05:29:32.328450'),
(28, 'Akshay kedia', 'kediaakshay098@gmail.com', '9547996834', 'mca3', 'Department of Computer Application(MCA 3rd Year)', 'akshay2196', '2018-07-08 04:37:39.225086');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `tag` longtext NOT NULL,
  `date` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `dept` varchar(100) NOT NULL,
  `dept1` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `type`, `tag`, `date`, `content`, `dept`, `dept1`, `time`) VALUES
(28, 'Representative', 'Welcome', '7th July 2018', 'Hello.the new website made by Sagnik Roy.All are welcome.', 'itb3', 'Department of Information Technology(3rd Year Btech)', '2018-07-08 03:44:51.504797'),
(29, 'Welcome ', 'Kgec mca final year', '8-07-2018', 'Welcome ', 'mca3', 'Department of Computer Application(MCA 3rd Year)', '2018-07-08 05:27:44.914267'),
(47, 'Representative', 'Members of Anti Ragging Committee of VC', '20-Jul-2018', 'An Anti Raging Committee is formed in Vidyasagar Chhatrabas.\r\nThe members are: 1.Md Akram Zaki(CSE 4th Year) 2.Rittik Raj (CSE 4th Year) 3.Abhishek Jha (CSE 4th Year) 4. Rounak Pal (ECE 3rd Year).\r\nThe member in 2nd Year will be published later.', 'vc', 'Vidyasagar Chhatrabas', '2018-07-20 07:07:37.263193'),
(42, 'Representative', 'Welcome Notice', '8th July 2018', 'Welcome all 3rd year BTech Electrical Engineering students. This site is mainly to publish the important notices, or any upcoming events'' notifications, regarding our academic or co-curriculum activities. Do check this out, as I will make sure to keep this area updated with the correct news.', 'eeb3', 'Department of Electrical Engineering(3rd Year Btech)', '2018-07-08 19:28:57.567059'),
(44, 'Starting of Sem classes', 'Re-opening of classes for 5th Sem', '10/07/2018', 'This is to inform that or classes for 5th sem are scheduled to start from 23/07/18. I hope those who have gone for VT, will have completed their training withing the mentioned date. So, try to attend classes from above mentioned date, i.e. 23rd of July.\r\nAnd secondly, although we have an optional subject (DS, CO, or Microprocessor-Microcontroller), we have to go with the last one, since we don''t have faculty for the previous 2 subjects in our dept, and if we opt for giving internals for those subjects, at the end of the day, problems might arise, while calculation of marks. So, Microprocessors-Microcontrollers for us. Thanks... ', 'eeb3', 'Department of Electrical Engineering(3rd Year Btech)', '2018-07-10 13:06:40.351298');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
