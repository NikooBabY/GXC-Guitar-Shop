-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 12:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `productid`, `comments`, `userid`) VALUES
(1, 10, 'Very nice', 1),
(2, 2, 'sualjhsdafk\r\n', 1),
(3, 2, 'sdf', 0),
(4, 2, 'amsdfm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `final2`
--

CREATE TABLE `final2` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final2`
--

INSERT INTO `final2` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `admin`) VALUES
(1, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(2, 'Rupak', 'Rajbanshi', 'rupitupi', '93373a70fe807888d0b32176d366bedf', 'rupitupi@gmail.com', 0),
(3, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 1),
(4, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(5, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(6, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(7, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `id` int(11) NOT NULL,
  `instruments` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `model` varchar(500) NOT NULL,
  `newproimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`id`, `instruments`, `price`, `description`, `model`, `newproimage`) VALUES
(1, 'Electric Guitar', '$559.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Squier Bullet Mustang', '125320_CP_.jpg'),
(2, 'Electric Guitar', '$449.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Squier Classic Vibe', '489711_CP_.jpg'),
(3, 'Electric Guitar', '$1999.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Gretsch G5222 Electromatic', '147516_CP_.jpg'),
(4, 'Electric Guitar', '$3999.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Gibson Les Paul', '167600_CP_.jpg'),
(5, 'Electric Guitar', '$299.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Ibanez Electromagnet 33', '506277_CP_.jpg'),
(6, 'Electric Guitar', '$499.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'PRS SE Custom 24', '106932_CP_.jpg'),
(7, 'Electric Guitar', '$1099.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'PRS SE Hollowbody', '413558_CP_.jpg'),
(8, 'Electric Guitar', '$699.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Ibanez Genesis Collection', '31719_CP_.jpg'),
(9, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Hex Sting P300HB', '636025_CP_.jpg'),
(10, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Stagg C542 Classical', '933830_CP_.jpg'),
(11, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'James Neligan BES-ACE', '699330_CP_.jpg'),
(12, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Yamaha FS100C', '381659_CP_.jpg'),
(13, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Manaslu ATAL Semi', '828277_CP_.jpg'),
(14, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Dreammaker Tondar', '296053_CP_.jpg'),
(15, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Samick Greg Bennett', '810643_CP_.jpg'),
(16, 'Acoustic Guitar', '$199.99', 'No matter your budget, style or tonal expectations, we are sure to help you find your musical companion. Read on to see our top picks, or jump to the end of this piece for some handy buying advice that will guide you through purchasing one of these fabulous guitars.', 'Mantra Prakriti', '961128_CP_.jpg'),
(17, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', ' Squier Classic Vibe \'60s', '717608_CP_.jpg'),
(18, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'Yamaha BB435 Bass', '104357_CP_.jpg'),
(19, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'Epiphone Thunderbird', '631455_CP_.jpg'),
(20, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'G&L Tribute L-2000', '936302_CP_.jpg'),
(21, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'Schecter Stiletto', '818033_CP_.jpg'),
(22, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'Fender JMJ Road', '564122_CP_.jpg'),
(23, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'Ibanez SR2405W 5', '956169_CP_.jpg'),
(24, 'Bass Guitar', '$559.99', 'The four-string bass is usually tuned the same as the double bass, which corresponds to pitches one octave lower than the four lowest-pitched strings of a guitar (typically E, A, D, and G). It is played primarily with the fingers or thumb, or with a pick. To be heard at normal performance volumes, electric basses require external amplification.', 'Ernie Ball StingRay', '199172_CP_.jpg'),
(25, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'Fender Pugilist distortion', '74955_CP_.jpg'),
(26, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'EarthQuaker Devices', '40352_CP_.jpg'),
(27, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'Strymon TimeLine', '90032_CP_.jpg'),
(28, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'Boss RV-500 reverb', '408927_CP_.jpg'),
(29, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'Electro-Harmonix Op', '355420_CP_.jpg'),
(30, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'Jim Dunlop JC95', '927350_CP_.jpg'),
(31, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'Boss CE-2W Waza', '187020_CP_.jpg'),
(32, 'Pedals', '$99.99', 'The Ampworks modeler is a stress-free way to experience real amp sound in any situation. Since it’s ultra-compact design enables it to fit into the accessory pocket of a guitar case, it’s easy to take it along wherever you go − home, studio or stage. This compact unit is also great for PC-based recording systems with limited desktop space.', 'MXR EVH Phase 90', '95160_CP_.jpg'),
(34, 'New Arrivals', '$199.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'Limited Edition Vintera® \'70s Telecaster® Deluxe', '327606_CP_.jpg'),
(35, 'New Arrivals', '$199.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'JV Modified \'60s Stratocaster®', '20407_CP_.jpg'),
(36, 'New Arrivals', '$199.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'American Acoustasonic® Telecaster® All-Mahogany', '995768_CP_.jpg'),
(37, 'New Arrivals', '$199.99', 'The JV Modified Series combines classic aesthetics with modern playability to suit the needs of today’s guitarist. Taking cues from the now highly sought-after “Japanese Vintage” reissues from the early ‘80s, JV Modified guitars are a refined take on a modern classic.', 'American Acoustasonic® Telecaster® All-Mahogany', '199980_CP_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final2`
--
ALTER TABLE `final2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `final2`
--
ALTER TABLE `final2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
