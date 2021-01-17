-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 11:17 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darkroseevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `First_Name` varchar(256) NOT NULL,
  `Last_Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `image`, `First_Name`, `Last_Name`, `Email`, `Password`) VALUES
(1, '', 'Admin', '', 'admin@gmail.com', 'admin90');

-- --------------------------------------------------------

--
-- Table structure for table `car_rental_demo`
--

CREATE TABLE `car_rental_demo` (
  `car_id` int(11) NOT NULL,
  `vendor_name` varchar(256) NOT NULL,
  `vendor_email` varchar(256) NOT NULL,
  `car_name` varchar(256) NOT NULL,
  `car_model_no` varchar(256) NOT NULL,
  `car_number` varchar(256) NOT NULL,
  `car_color` varchar(256) NOT NULL,
  `car_brand` varchar(256) NOT NULL,
  `image_one` varchar(256) NOT NULL,
  `image_two` varchar(256) NOT NULL,
  `image_three` varchar(256) NOT NULL,
  `image_four` varchar(256) NOT NULL,
  `owner_name` varchar(256) NOT NULL,
  `owner_contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `deal_id` int(11) NOT NULL,
  `deal_name` varchar(256) NOT NULL,
  `deal_payment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `decor_demo`
--

CREATE TABLE `decor_demo` (
  `vendor_name` varchar(256) NOT NULL,
  `vendor_email` varchar(256) NOT NULL,
  `style_name` varchar(256) NOT NULL,
  `decor_images_front` varchar(256) NOT NULL,
  `image_two` varchar(256) NOT NULL,
  `image_three` varchar(256) NOT NULL,
  `image_four` varchar(256) NOT NULL,
  `imahe_five` varchar(256) NOT NULL,
  `image_six` varchar(256) NOT NULL,
  `decor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `Function_type` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `Function_Time` varchar(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Num_of_guests` int(11) NOT NULL,
  `deal_type` varchar(256) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invitation_demo`
--

CREATE TABLE `invitation_demo` (
  `in_id` int(11) NOT NULL,
  `vendor_name` varchar(256) NOT NULL,
  `vendor_email` varchar(256) NOT NULL,
  `invitation_name` varchar(256) NOT NULL,
  `invitation_front_image` varchar(256) NOT NULL,
  `image_two` varchar(256) NOT NULL,
  `image_three` varchar(256) NOT NULL,
  `image_four` varchar(256) NOT NULL,
  `image_five` varchar(256) NOT NULL,
  `image_six` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `function_type` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `function_time` varchar(256) NOT NULL,
  `client_name` varchar(256) NOT NULL,
  `client_contact` int(11) NOT NULL,
  `Num_of_Guests` int(11) NOT NULL,
  `status_of_event` varchar(256) NOT NULL,
  `deal_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photography_demo`
--

CREATE TABLE `photography_demo` (
  `ph_id` int(11) NOT NULL,
  `vendor_name` varchar(256) NOT NULL,
  `vendor_email` varchar(256) NOT NULL,
  `photoshoot_name` varchar(256) NOT NULL,
  `front_image` varchar(256) NOT NULL,
  `image_two` varchar(256) NOT NULL,
  `image_three` varchar(256) NOT NULL,
  `image_four` varchar(256) NOT NULL,
  `image_five` varchar(256) NOT NULL,
  `image_six` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `First_Name` varchar(256) NOT NULL,
  `Last_Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Gender` varchar(256) NOT NULL,
  `picture` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `First_Name`, `Last_Name`, `Email`, `PhoneNo`, `Password`, `Gender`, `picture`) VALUES
(1, '', '', 'user@gmail.com', 0, 'user123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(256) NOT NULL,
  `Last_Name` varchar(256) NOT NULL,
  `vendor_pic` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Work_Type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`ID`, `First_Name`, `Last_Name`, `vendor_pic`, `Password`, `Email`, `PhoneNo`, `Work_Type`) VALUES
(1, '', '', '', 'vendor123', 'vendors@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_address`
--

CREATE TABLE `vendors_address` (
  `v_id` int(11) NOT NULL,
  `vendor_name` varchar(256) NOT NULL,
  `vendor_email` varchar(256) NOT NULL,
  `house_no` varchar(256) NOT NULL,
  `street_no` varchar(256) NOT NULL,
  `area` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `province` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `postal_code` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `venues_demo`
--

CREATE TABLE `venues_demo` (
  `venue_id` int(11) NOT NULL,
  `vendor_name` varchar(256) NOT NULL,
  `vendor_email` varchar(256) NOT NULL,
  `place_name` varchar(256) NOT NULL,
  `venue_address` varchar(256) NOT NULL,
  `front_image` varchar(256) NOT NULL,
  `image_two` varchar(256) NOT NULL,
  `image_three` varchar(256) NOT NULL,
  `image_four` varchar(256) NOT NULL,
  `image_five` varchar(256) NOT NULL,
  `image_six` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `car_rental_demo`
--
ALTER TABLE `car_rental_demo`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `decor_demo`
--
ALTER TABLE `decor_demo`
  ADD PRIMARY KEY (`decor_id`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitation_demo`
--
ALTER TABLE `invitation_demo`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `photography_demo`
--
ALTER TABLE `photography_demo`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendors_address`
--
ALTER TABLE `vendors_address`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `venues_demo`
--
ALTER TABLE `venues_demo`
  ADD PRIMARY KEY (`venue_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
