-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 04:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `f_name`, `l_name`, `email`, `password`, `salary`) VALUES
(1, 'aaaaaaaa', 'adasd', 'admin@a.com', 'adasd', 1001),
(3, 'saddasd', 'adasd', 'sd@a.com', 'asda', 1000),
(4, 'asd', 'asdaaaaaaaa', 'aaaa@a.com', 'asaasd', 998),
(8, 'asdas', 'asd', 'admin@a.com', 'asdad', 30),
(9, 'ads', 'asdasd', 'sonakshi.jai92@gmail.com', 'sdfs', 2432423);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `email`) VALUES
(1, 'dsgdfsdfsdf', 29, 'emailsdfs'),
(2, 'xzascszd', 16, 'nvasd@adajhg.com'),
(3, 'xzascszd', 16, 'nvasd@adajhg.com'),
(4, 'xzascszd', 16, 'nvasd@adajhg.com'),
(5, 'xzascszd', 16, 'nvasd@adajhg.com'),
(6, 'sasas', 24, 'nvasd@adajhg.com'),
(7, 'sasas', 24, 'nvasd@adajhg.com'),
(8, 'sasas', 24, 'nvasd@adajhg.com'),
(9, 'hhh', 10, 'nvasd@adajhg.com'),
(10, 'hhh', 10, 'nvasd@adajhg.com'),
(11, 'sonakshi', 2, 'nvasd@adajhg.com'),
(12, 'Sonakshi Jaiswal', 8, 'nvasd@adajhg.com'),
(13, 'sonakshi', 12, 'admin@a.com'),
(14, 'sonakshi', -5, 'admin@a.com'),
(15, 'abc', -3, 'user@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` int(100) NOT NULL,
  `birthday` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `phone`, `birthday`, `gender`) VALUES
(27, 'sonakshi', 'jaiswal', 'adminaaaa@a.com', '', 11111111, '2021-10-29', 'female'),
(28, 'sonakshi', 'fghf', 'nvasd@adajhg.com', '', 123, '2021-10-29', 'female'),
(31, 'sonakshi', 'jaiswal', 'admin@a.com', '', 123, '2021-10-29', 'female'),
(33, 'sonakshi', 'jaiswal', 'admin@a.com', '', 123, '2021-10-29', 'female'),
(34, 'dfh', 'fghf', 'admin@a.com', '3131', 123, '2021-10-29', 'male'),
(37, 'adasda', 'fghf', 'admin@a.com', '', 1234, '2021-10-29', 'male'),
(42, 'adasda', 'fghf', 'nvasd@adajhg.com', 'dasda', 14324323, '2021-10-29', 'male'),
(75, 'abcdef', 'hijklmnop', 'j@gmail.com', 'fsdfskgl654564', 46465464, '2021-10-29', 'male'),
(76, 'asha', 'hh', 'abc@abc.com', '234', 123, '2021-10-29', 'female'),
(77, 'sonakshi', 'jaiswal', 'sonakshi.jai92@gmail.com', 'adsad', 14324323, '0000-00-00', 'female'),
(83, 'adasda', 'adas', 'user@u.com', 'asd', 1234, '2000-04-01', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `employeed` varchar(200) NOT NULL,
  `salary` int(50) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `curr_location` varchar(200) NOT NULL,
  `other_phone` int(200) NOT NULL,
  `alt_email` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `u_id`, `address`, `city`, `state`, `country`, `employeed`, `salary`, `occupation`, `curr_location`, `other_phone`, `alt_email`, `education`, `image`, `notes`) VALUES
(22, 27, 'hyderabad', 'Vijayawada', 'AP', 'india', 'yes', 1233131, 'php', 'hydsssssssssssss', 12313123, 'daaaasfs@gfg.com', 'postgraduation,phd', 'profile/Hydrangeas.jpg', '      asdasdaaaaaaaaa'),
(23, 28, 'asdas', 'asda', 'Telangana', 'india', 'no', 0, 'it', 'hyd', 12313123, 'dsfs@gfg.com', 'schooling,intermediate,degree', 'profile/Koala.jpg', '  xcvxcv'),
(26, 31, 'hyd', 'Hyderadab', 'Telangana', 'india', 'yes', 12121, 'php developer', 'hyd', 12121, 'dsfs@gfg.com', 'schooling,intermediate,degree', 'profile/Chrysanthemum.jpg', 'wqwwqw'),
(28, 33, 'hyd', 'Hyderadab', 'Telangana', 'australia', 'yes', 23442, '23423234', 'hyd', 12121, 'jai@gmail.com', 'schooling,intermediate', 'profile/Penguins.jpg', ' sdffsdfs'),
(29, 34, 'asdas', 'asda', 'Telangana ', 'usa', 'yes', 12313, 'php developer', 'hyd', 121321121, 'jai@gmail.com', 'schooling,intermediate', 'profile/Koala.jpg', '12313'),
(32, 37, 'adasd', 'Vijayawada', 'Telangana ', 'india', 'no', 4213242, 'php developer', 'dadsad', 12313123, 'jai@gmail.com', 'postgraduation,phd', 'profile/Tulips.jpg', '   2342sdfdss'),
(37, 42, 'asdas', 'Hyderadab', 'Telangana', 'srilanka', 'no', 0, 'it', 'adasd', 12313123, 'dsfs@gfg.com', 'schooling,intermediate', 'profile/Jellyfish.jpg', ' werwrwr 345345b dfgdfg 345345 etrert'),
(70, 75, 'abids', 'Hyderadab', 'Telangana', 'india', 'yes', 4322342, 'phpsssssssssssssss developer', 'Vijayawada ', 1111111, 'dsfsssssssssssssss@gfg.com', 'schooling,intermediate', 'profile/2021-10-29-15-54-29Penguins.jpg.jpg', ' '),
(71, 76, 'rtytry', 'asda', 'AP', 'australia', 'no', 0, 'fsdf', 'dadsad', 12121, 'dsfsssssssssssssss@gfg.com', 'degree,postgraduation,phd', 'profile/2021-10-29-15-56-18Tulips.jpg.jpg', ' ttttttttttttt'),
(72, 77, 'asda', 'Hyderadab', 'Telangana', 'australia', 'yes', 43223423, '23423234', 'Vijayawada ', 423423, 'dsfs@gfg.com', 'schooling,intermediate,degree,postgraduation,phd', 'profile/2021-10-29-16-17-27Chrysanthemum.jpg.jpg', ' '),
(78, 83, 'asdas', 'asda', 'wererewrwwrw', 'usa', 'yes', 2147483647, 'php developer', '123123', 12313, 'jai@gmail.com', 'schooling', 'profile/2021-10-29-16-30-06Penguins.jpg.jpg', ' 1231313wfesr eterte ertert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
