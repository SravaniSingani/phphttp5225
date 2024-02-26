-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2024 at 05:37 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CarRentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandID`, `brandName`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(3, 'Ford'),
(4, 'BMW'),
(5, 'Mercedes Benz');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(11) NOT NULL,
  `brandID` int(11) DEFAULT NULL,
  `model` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `rentalRate` decimal(10,2) NOT NULL,
  `imageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `brandID`, `model`, `year`, `rentalRate`, `imageURL`) VALUES
(1, 1, 'Camry', 2022, '50.00', 'https://cdn.jdpower.com/Models/640x480/2022-Toyota-Camry-TRDV6.jpg'),
(4, 2, 'HRV', 2023, '70.55', 'https://www.iihs.org/cdn-cgi/image/width=636/api/ratings/model-year-images/3208/'),
(5, 4, 'X5', 2022, '90.00', 'https://media.ed.edmunds-media.com/bmw/x5/2021/oem/2021_bmw_x5_4dr-suv_m50i_fq_oem_1_600.jpg'),
(6, 5, 'C Class', 2021, '85.00', 'https://images.pistonheads.com/nimg/43794/20C0673_091.jpg'),
(7, 1, 'RAV4', 2020, '55.00', 'https://cdn.jdpower.com/Models/640x480/2020-Toyota-RAV4-HybridLE.jpg'),
(8, 2, 'Accord', 2022, '52.00', 'https://cdn.jdpower.com/Models/640x480/2022-Honda-AccordSedan-Sport.jpg'),
(9, 3, 'Escape', 2021, '60.00', 'https://s3.amazonaws.com/s3images.edealer.ca/Pictures/2023-07/6732433/6733728/122292907.jpeg'),
(10, 4, '3 Series', 2023, '75.00', 'https://cdn.bmwblog.com/wp-content/uploads/2022/05/bmw-3-series-facelift-2023-15.jpg'),
(11, 5, 'E-Class', 2022, '95.00', 'https://media.ed.edmunds-media.com/mercedes-benz/e-class/2021/oem/2021_mercedes-benz_e-class_sedan_amg-e-53_fq_oem_1_1280.jpg'),
(12, 1, 'Highlander', 2023, '65.00', 'https://img.autobytel.com/chrome/colormatched_01/white/640/cc_2023tos16_01_640/cc_2023tos160090_01_640_218.jpg'),
(13, 3, 'Explorer', 2020, '68.00', 'https://cars.usnews.com/static/images/Auto/izmo/i159614814/2022_ford_explorer_angularfront.jpg'),
(16, 4, 'X3', 2020, '66.66', 'https://www.bmwusa.com/content/dam/bmw/common/vehicles/2023/my24/x-models/x3/core-models/mobile/BMW-MY24-X3-DetailPage-Core-MakeitYours-Mobile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
