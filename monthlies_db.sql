-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 03:05 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monthlies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `age` int(11) NOT NULL,
  `location` text NOT NULL,
  `marital_status` text NOT NULL,
  `address` text NOT NULL,
  `phone_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `date_joined`, `age`, `location`, `marital_status`, `address`, `phone_number`) VALUES
(1, 'shittu olumide ayodeji', 'iamholumeedey007@gmail.com', 'olumide', '2021-05-04 12:59:45', 18, 'Ondo State', 'Single', 'new site area c isusda owo.', '14242753278'),
(2, 'Yisa Dedorah', 'yisadebby@gmail.com', 'Iyanu15#', '2021-04-27 02:30:49', 23, 'Kaduna, Nigeria.', 'Married', 'Number 1, Yuhnuda Kaduna', '9061183812');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cycle_weight` text NOT NULL,
  `date_last_seen` date NOT NULL,
  `duration` text NOT NULL,
  `cycle_length` int(11) NOT NULL,
  `cycle_problems` text NOT NULL,
  `predicted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `cycle_weight`, `date_last_seen`, `duration`, `cycle_length`, `cycle_problems`, `predicted_date`) VALUES
(2, 1, 'light', '2021-05-29', '5', 25, 'liMenstrual Crampsght', '2021-06-23'),
(3, 1, 'heavy', '2021-05-11', '5', 24, 'Mood Changes', '2021-06-04'),
(5, 1, 'light', '2021-05-20', '3', 24, 'Pains in lower abdomen', '2021-06-13'),
(6, 1, 'heavy', '2021-02-16', '5', 24, 'Acne', '2021-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
