-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 07:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw1_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Booking_ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(8000) NOT NULL,
  `Image_Path` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Booking_ID`, `Title`, `Description`, `Image_Path`) VALUES
(1, 'Kathmandu', ' Kathmandu the heartbeat of Nepal and the reilgious capital of the world.', 'images/Kathmandu.jpg'),
(2, 'Bhaktapur', 'Bhaktapur, a historic city in the Kathmandu Valley known for its well-preserved ancient architecture and traditional Newari culture. ', 'images/Bhaktapur.jpg'),
(3, 'Patan', 'Patan, a city in the Kathmandu Valley celebrated for its intricate temples, rich artistic heritage, and vibrant local crafts.', 'images/patan.jpg'),
(4, 'Swayambhunath', 'Swayambhunath, also known as the \"Monkey Temple\", is an ancient stupa perched atop a hill in Kathmandu, offering panoramic views of the city and featuring intricate religious art and a sense of spiritual serenity. ', 'images/swayambhu.jpg'),
(5, 'Changunarayan', 'Changunarayan is an ancient Hindu temple nestled atop a hill near Kathmandu, celebrated for its exquisite architecture, intricate stone carvings, and its distinction as one of Nepals oldest and most revered religious sites. ', 'images/changu.jpg'),
(6, 'Shiva Statue', 'The Shiva statue in Sanga stands as an impressive and towering representation of Lord Shiva, captivating visitors with its colossal size and profound spiritual significance.', 'images/Shiva.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_order`
--

CREATE TABLE `bookings_order` (
  `Booking_Order_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Booking_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_order`
--

INSERT INTO `bookings_order` (`Booking_Order_ID`, `Username`, `Booking_ID`) VALUES
(7, 'Hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Email`, `Username`, `Address`, `Password`) VALUES
(1, 'Hello', 'Hello', 'Hello', 'hello@hello.com', 'Hello', 'Hello', '$2y$10$TTS.kUTR3CTR6/QA/ODo3u9GQS6LvM5WNSEz1UjoqJ2XRTlatdP5.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Indexes for table `bookings_order`
--
ALTER TABLE `bookings_order`
  ADD PRIMARY KEY (`Booking_Order_ID`),
  ADD KEY `Booking_ID` (`Booking_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings_order`
--
ALTER TABLE `bookings_order`
  MODIFY `Booking_Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings_order`
--
ALTER TABLE `bookings_order`
  ADD CONSTRAINT `bookings_order_ibfk_1` FOREIGN KEY (`Booking_ID`) REFERENCES `bookings` (`Booking_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
