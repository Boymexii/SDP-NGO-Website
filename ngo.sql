-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 17, 2019 at 05:18 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(8) NOT NULL,
  `category` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `short_description` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `recommended_amount` int(40) NOT NULL,
  `end_method` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `category`, `title`, `fullname`, `short_description`, `description`, `recommended_amount`, `end_method`, `country`, `start_date`, `end_date`) VALUES
(5, 'Enviroment', 'demo', 'kingsley', 'demo', 'demo', 30000, 'After goal achieve', 'demo', '2019-05-31', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Enviroment'),
(2, 'Food and Drinks'),
(3, 'Travel and Outdoors'),
(4, 'Nonprofit'),
(5, 'Innovation'),
(6, 'Health and Fitness'),
(7, 'Community Projects');

-- --------------------------------------------------------

--
-- Table structure for table `end_method`
--

CREATE TABLE `end_method` (
  `id` int(8) NOT NULL,
  `method` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `end_method`
--

INSERT INTO `end_method` (`id`, `method`) VALUES
(1, 'After goal achieve'),
(2, 'After end date');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `choice` varchar(10) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `choice`, `bio`, `email`, `password`) VALUES
(1, 'kingsley', 'boymexii', 'NGO', '', 'kingsleyanamelechi@gmail.com', 'c7f7caa82eb5f57cc52012bdc6b334fa');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(8) NOT NULL,
  `choice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `choice`) VALUES
(1, 'NGO'),
(2, 'User'),
(1, 'NGO'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fullname` (`fullname`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `end_method`
--
ALTER TABLE `end_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
