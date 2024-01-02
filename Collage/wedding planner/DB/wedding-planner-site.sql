-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 02:49 PM
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
-- Database: `wedding-planner-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_place`
--

CREATE TABLE `event_place` (
  `id` int(11) NOT NULL,
  `event_img` varchar(250) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_place`
--

INSERT INTO `event_place` (`id`, `event_img`, `venue_id`, `description`) VALUES
(1, './uploads/v2.jpg', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(2, './uploads/v3.webp', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(3, './uploads/v4.jpg', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(4, './uploads/v5.jpg', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad ');

-- --------------------------------------------------------

--
-- Table structure for table `event_venue`
--

CREATE TABLE `event_venue` (
  `venue_id` int(11) NOT NULL,
  `venue_name` varchar(220) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_venue`
--

INSERT INTO `event_venue` (`venue_id`, `venue_name`, `date_time`) VALUES
(1, 'Indoore venue', '2023-09-15 17:41:37'),
(2, 'garden venue', '2023-09-15 17:41:43'),
(3, 'outdoore venue', '2023-09-15 17:41:49'),
(4, 'beach side venue', '2023-09-15 17:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobileno` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `firstname`, `lastname`, `mobileno`, `email`, `password`, `date`, `role`) VALUES
(1, 'het', 'patel', '789456123', 'het@gmail.com', '123', '2023-09-15 17:40:55', 1),
(2, 'milan', 'patel', '8451285412', 'milan@gmail.com', '1', '2023-09-15 17:50:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_form`
--

CREATE TABLE `wedding_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rooms` varchar(10) NOT NULL,
  `attendees` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `comments` varchar(255) NOT NULL,
  `nodays` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_form`
--

INSERT INTO `wedding_form` (`id`, `name`, `phone`, `email`, `rooms`, `attendees`, `start_date`, `end_date`, `comments`, `nodays`, `date_time`) VALUES
(1, 'nikunj korat', '9874536129', 'nik123@gmail.com', '10', '75', '2023-09-02', '2023-09-06', 'best services riquered', 4, '2023-09-15 17:46:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_place`
--
ALTER TABLE `event_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_venue`
--
ALTER TABLE `event_venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `wedding_form`
--
ALTER TABLE `wedding_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_place`
--
ALTER TABLE `event_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_venue`
--
ALTER TABLE `event_venue`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wedding_form`
--
ALTER TABLE `wedding_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
