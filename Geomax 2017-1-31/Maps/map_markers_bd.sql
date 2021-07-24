-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 12:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `map_markers_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers_tbl`
--

CREATE TABLE IF NOT EXISTS `markers_tbl` (
  `marker_id` int(11) NOT NULL AUTO_INCREMENT,
  `marker_lat` float(20,14) NOT NULL,
  `marker_lng` float(20,14) NOT NULL,
  `marker_desc` text NOT NULL,
  `marker_img` varchar(20) DEFAULT NULL,
  `at_speed` decimal(5,2) NOT NULL,
  `from_speed` decimal(5,2) NOT NULL,
  `to_speed` decimal(5,2) NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `buffer_radius` decimal(20,10) NOT NULL,
  PRIMARY KEY (`marker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `markers_tbl`
--

INSERT INTO `markers_tbl` (`marker_id`, `marker_lat`, `marker_lng`, `marker_desc`, `marker_img`, `at_speed`, `from_speed`, `to_speed`, `from_time`, `to_time`, `buffer_radius`) VALUES
(1, 65.47653198242188, -163.43214416503906, 'Marker 1', 'cust_marker2.png', '50.00', '20.90', '100.00', '10:20:00', '23:00:00', '50.0000000000'),
(5, 60.88655090332031, -163.61230468750000, 'circle test', 'cust_marker2.png', '0.00', '0.00', '0.00', '05:00:00', '12:00:00', '50.0000000000'),
(6, 65.55095672607422, -161.88914489746094, 'overlap test', 'cust_marker2.png', '100.00', '50.12', '150.50', '00:00:00', '22:00:00', '50.0000000000'),
(12, 65.47750091552734, -163.41905212402344, '1212', 'cust_marker2.png', '0.00', '0.00', '0.00', '12:00:00', '12:00:00', '50.0000000000'),
(13, 64.24765014648438, -160.78359985351562, '', 'cust_marker2.png', '0.00', '0.00', '0.00', '00:00:00', '00:00:00', '50.0000000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
