-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2011 at 05:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookmyhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `privilege`, `contact`) VALUES
(1, 'deepak', 'sharma', 'deepak', 'ignou', 'admin', '0112454758'),
(2, 'kapil', 'sharma', 'kapil', 'ignou', 'manager', '1124547856'),
(3, 'vinod', 'rana', 'vinod', 'ignou', 'manager', '782327322'),
(4, 'karan', 'malhotra', 'karan', 'ignou', 'manager', '01124547856'),
(7, 'sumit', 'rana', 'sumit', 'ignou', 'manager', '01124578955'),
(8, 'vinay', 'tripathi', 'vinay', 'ignou', 'manager', '01124857487'),
(9, 'rihan', 'khan', 'rihan', 'ignou', 'manager', '9854758545'),
(12, 'chandni', 'nagpal', 'chandni', 'ignou', 'admin', '9211722250');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(70) NOT NULL,
  `city_code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `city_code`) VALUES
(1, 'Uttar Pradesh', 'up'),
(2, 'Maharashtra', 'mh'),
(3, 'Andhra Pradesh', 'ap'),
(4, 'Tamil Nadu', 'tn'),
(5, 'Madhya Pradesh', 'mp'),
(6, 'Rajasthan', 'rj'),
(7, 'Karnataka', 'kt'),
(8, 'Gujarat', 'gr'),
(9, 'Orissa', 'or'),
(10, 'Kerala', 'kr'),
(11, 'Jharkhand', 'jh'),
(12, 'Assam', 'as'),
(13, 'Punjab', 'pu'),
(14, 'Haryana', 'hr'),
(15, 'Chhattisgarh', 'cht'),
(16, 'Jammu and Kashmir', 'jk'),
(17, 'Himachal Pradesh', 'hp'),
(18, 'Uttrakhand', 'ut'),
(19, 'Goa', 'ga'),
(20, 'Arunachal Pradesh', 'arp'),
(21, 'Sikkim', 'sk'),
(22, 'Delhi', 'dl'),
(23, 'Chandigarh', 'ch');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `check_in_date` varchar(20) NOT NULL,
  `check_out_date` varchar(20) NOT NULL,
  `booking_date` date NOT NULL,
  `guest_ordered` int(11) NOT NULL,
  `room_ordered` int(11) NOT NULL,
  `hotel_code` varchar(20) NOT NULL,
  `booking_no` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact_number`, `email`, `check_in_date`, `check_out_date`, `booking_date`, `guest_ordered`, `room_ordered`, `hotel_code`, `booking_no`) VALUES
(1, 'deepak', '014578542', 'deepak@gmail.com', '2022-03-11', '2023-03-11', '2011-03-27', 2, 1, 'cph', 'bmh254758'),
(2, 'piyush', '9015475848', 'tushant.sharma@rediff.com', '2022-03-11', '2023-03-11', '2011-03-27', 4, 2, 'hotku', 'bmh46856'),
(3, 'naveen', '9015955939', 'tushant.sharma@rediff.com', '2022-03-11', '2023-03-11', '2011-03-27', 2, 1, 'hotku', 'bmh60020'),
(4, 'rahul', '9015955939', 'deepak@gmail.com', '22-3-11', '23-3-11', '2011-03-27', 2, 1, 'hotku', 'bmh17314'),
(5, 'amit', '901457854', 'depak@deep.com', '22-3-11', '23-3-11', '2011-03-27', 4, 2, 'sph', 'bmh96475'),
(6, 'Deepak Sharma', '9015955939', 'deepak_9187dude@yahoo.co.in', '22-5-11', '23-5-11', '2011-03-27', 4, 3, 'hotku', 'bmh82770');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `hotel_code` varchar(10) NOT NULL,
  `city_code` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `booked_rooms` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `manager_id` int(11) NOT NULL DEFAULT '0',
  `fare` int(6) NOT NULL DEFAULT '1000',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `hotel_code`, `city_code`, `address`, `total_rooms`, `booked_rooms`, `phone`, `manager_id`, `fare`) VALUES
(1, 'International villa delhi', 'ivd', 'ap', 'RKPURAM PLOT NO.324', 50, 20, '01124586547', 4, 1000),
(2, 'Hotel Packis ', 'hp', 'ap', 'Karol Bagh ', 40, 10, '01145789658', 2, 1020),
(3, 'Kumar hotel', 'kh', 'ap', 'Gurgaon', 43, 23, '01206589547', 3, 1000),
(4, 'Hiten hotel', 'hh', 'ap', 'Sanjay Nagar', 30, 15, '01205478547', 7, 3000),
(5, 'purity hotels', 'puhot', 'ap', 'Mayur Vihar', 100, 39, '01124586547', 2, 1000),
(7, 'kerala hotels', 'kerh', 'ap', 'pitampura', 200, 23, '01145475848', 1, 1000),
(8, 'hotel moonlight', 'hotmon', 'ap', 'near beach', 200, 30, '09784574578', 2, 2000),
(9, 'hotel kuriosity', 'hotku', 'dl', 'e-32, main haiway', 50, 20, '08474547854', 3, 1000),
(10, 'dipansh hotel', 'diphot', 'ap', 'mg road, 376', 40, 15, '90124587548', 7, 1000),
(12, 'city park hotel', 'cph', 'ap', 'pitampura, delhi', 200, 50, '01154545456', 3, 1000),
(13, 'shivani park hotel', 'sph', 'ch', 'mohali, city road, 343', 200, 150, '02245787747', 7, 5000),
(14, 'Assam international', 'asin', 'as', 'ravala, sec-2', 50, 20, '9854745214', 4, 1000);
