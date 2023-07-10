-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 11:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messageboard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `photo`, `last_login`) VALUES
(1, 'Christian', 'fdc.christianm@gmail.com', '123123', '', '2023-07-07 09:29:09'),
(2, 'Breanna Wyatt', 'sasymaqis@mailinator.com', 'Pa$$w0rd!', '', '2023-07-07 09:29:09'),
(3, 'Brody Weber', 'nizirebypa@mailinator.com', 'Pa$$w0rd!', '', '2023-07-07 09:29:09'),
(4, 'Brody Weber', 'nizirebypa@mailinator.com', 'Pa$$w0rd!123', '', '2023-07-07 09:29:09'),
(5, 'Gray Russell', 'fypuno@mailinator.com', 'Pa$$w0rd!', '', '2023-07-07 09:29:09'),
(6, 'Melyssa Newman', 'huhomapys@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', '2023-07-07 09:29:09'),
(7, 'Kai Allen', 'gubiwebuw@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', '2023-07-07 09:29:09'),
(8, 'Uma Crawford', 'pyzo@mailinator.com', '5a98cf76de77b626cf462026235b72346e4b4c9d', '', '2023-07-07 09:29:09'),
(9, 'Stone Peck', 'zocypu@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', '2023-07-07 09:29:09'),
(10, 'Kevyn Neal', 'bakob@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', '2023-07-07 09:29:09'),
(11, 'Dana Murphy', 'hunyx@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', NULL),
(12, 'Adena Mathews', 'hosowejyn@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', NULL),
(13, 'Russell Velazquez', 'putow@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', NULL),
(14, 'Tanisha Gilbert', 'jyqy@mailinator.com', 'e30e63dcb6dc6258b85b7886e52773e2e2e18ef5', '', '2023-07-10 03:26:12'),
(15, 'Kristen Caldwell', 'hebesa@mailinator.com', 'a8cdc2b3dd81439ec348bd8966dd9f6b7da6a264', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
