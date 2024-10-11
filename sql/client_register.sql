-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3350
-- Generation Time: Sep 09, 2024 at 01:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_register`
--

CREATE TABLE `client_register` (
  `id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `subscription` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_register`
--

INSERT INTO `client_register` (`id`, `fname`, `lname`, `mobile`, `email`, `pass`, `subscription`) VALUES
(1, 'Chandra', 'Koppisetti', '7288037884', 'chand@mail.com', '87', ''),
(3, 'Hari', 'Kiran', '9490878837', 'harikiran@gmail.com', '998', ''),
(4, 'Rakshan', 'Kumar', '6301334640', 'rakshan5678@gmail.com', '00', ''),
(5, 'Teja', 'Rohith', '63024', 'tejarohithkatakham@gmail.com', '$2y$10$09QP7eUPBq4f/UxE4/8kE.E.6QIIfWSqwlJEB7a05eq', ''),
(13, 'Sohan', 'Koonisetti', '9502396074', 'sohankoonisetti@gmail.com', '$2y$10$XSJWX7w.rN17TjWJR1loxOkXwFlqgrjkjdRx1dmebf3', 'BASIC'),
(14, 'Sohan', 'Koonisetti', '9502396074', 'sohankoonisetti@gmail.com', '$2y$10$32sXoZrRuuzGLpAmcEsNJe7eoRu1Ch64/nJFutMs5mF', 'BASIC'),
(15, 'Grace', 'Tej', '8341397233', 'gracetejaswini@gmail.com', '$2y$10$cVr0VZJLMe8bJwURHEF/VOiOZ4oaR7G9Bj05PYa34XR', 'STANDARD'),
(16, 'Sai', 'Praveen', '7660825962', 'saipraveenk@gmail.com', '$2y$10$FbV8Sq0mbSCpK7UOY7czz.v0H87hyzYvcriuCFTwLDc', 'BASIC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_register`
--
ALTER TABLE `client_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_register`
--
ALTER TABLE `client_register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
