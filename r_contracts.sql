-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 04:36 PM
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
-- Database: `r_contracts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `user_email_id` varchar(60) NOT NULL,
  `name_of_company` varchar(250) NOT NULL,
  `employer_email` varchar(250) NOT NULL,
  `company_website` varchar(250) NOT NULL,
  `employer_phn` int(11) NOT NULL,
  `sub_by` varchar(250) NOT NULL,
  `sub_for_company` varchar(20) NOT NULL,
  `blacklisted` set('YES','NO') NOT NULL,
  `createdDtae` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `user_email_id`, `name_of_company`, `employer_email`, `company_website`, `employer_phn`, `sub_by`, `sub_for_company`, `blacklisted`, `createdDtae`) VALUES
(20, 'user@gmail.com', 'ghrhr', 'hthth@bgfb', 'http://www.cattechnologies.com', 464646434, 'grgrgrgr', 'CAT SOFTWARE', 'NO', '2021-10-04 12:52:17'),
(21, 'user@gmail.com', 'fhfghfgh', 'sonakshi.jai92@gmail.com', 'http://www.cattechnologies.com', 43354646, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 12:53:51'),
(22, 'user@gmail.com', 'fhfghfgh', 'sonakshihj.jai92@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 12:54:40'),
(23, 'user@gmail.com', 'fhfghfgh', 'user@u.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 12:57:35'),
(24, 'user@gmail.com', 'fhfghfgh', 'sonakshi.jai@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asdaaaaaaaaaaaaaaaaaaa', 'CAT SOFTWARE', 'NO', '2021-10-04 12:59:35'),
(25, 'user@gmail.com', 'fhfghfgh', 'usehjkhr@u.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 13:00:26'),
(26, 'user@gmail.com', 'fhfghfgh', 'sonaksdfdfhi.jai92@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 13:01:31'),
(27, 'user@gmail.com', 'fhfghfgh', 'useghjgfr@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 13:02:34'),
(28, 'user@gmail.com', 'fhfghfgh', 'user@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 13:05:05'),
(31, 'user@gmail.com', 'fhfghfgh', 'sondfgdgakshi.jai92@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 13:15:47'),
(32, 'user@gmail.com', 'fhfghfgh', 'sonakfggfgfshi.jai92@gmail.com', 'http://www.cattechnologies.com', 14444444, 'asdaaaaaaaaaaaaaaaaaaa', 'CAT SOFTWARE', 'NO', '2021-10-04 13:19:00'),
(34, 'user@gmail.com', 'fhfghfgh', 'sondsdsdakshi.jai92@gmail.com', 'http://www.cattechnologies.com', 1234567, 'asda', 'CAT SOFTWARE', 'NO', '2021-10-04 13:21:27'),
(35, 'user@gmail.com', 'aaa', 'aaa@a.com', 'http://www.cat.com', 111111, 'aaaa', 'CAT SOFTWARE', 'YES', '2021-10-04 13:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `contract_media`
--

CREATE TABLE `contract_media` (
  `mediaId` int(11) NOT NULL,
  `contractor_id` varchar(60) NOT NULL,
  `media_files` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_media`
--

INSERT INTO `contract_media` (`mediaId`, `contractor_id`, `media_files`) VALUES
(16, '20', 'assets/images/contractorMedia/Lighthouse.jpg'),
(17, '21', 'assets/images/contractorMedia/Tulips1.jpg'),
(18, '22', 'assets/images/contractorMedia/Tulips4.jpg'),
(19, '23', 'assets/images/contractorMedia/Penguins2.jpg'),
(20, '24', 'assets/images/contractorMedia/Lighthouse1.jpg'),
(21, '25', 'assets/images/contractorMedia/Tulips5.jpg'),
(22, '26', 'assets/images/contractorMedia/Tulips6.jpg'),
(23, '27', 'assets/images/contractorMedia/Penguins3.jpg'),
(24, '28', 'assets/images/contractorMedia/Penguins4.jpg'),
(27, '31', 'assets/images/contractorMedia/Lighthouse2.jpg'),
(28, '32', 'assets/images/contractorMedia/Chrysanthemum.jpg'),
(30, '34', 'assets/images/contractorMedia/Penguins7.jpg'),
(31, '35', 'assets/images/contractorMedia/Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paperworks_documents`
--

CREATE TABLE `paperworks_documents` (
  `id` int(11) NOT NULL,
  `paper_work_id` int(11) NOT NULL,
  `user_paperwork_document` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active-1,Delete-0',
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paperworks_documents`
--

INSERT INTO `paperworks_documents` (`id`, `paper_work_id`, `user_paperwork_document`, `status`, `created_date_time`) VALUES
(17, 3, 'assets/images/paperMedia/dcp-t310-inktank-mfp2.jpg', 1, '2021-09-27 09:39:04'),
(18, 3, 'assets/images/paperMedia/dcp-t310-inktank-mfp3.jpg', 1, '2021-09-27 09:39:04'),
(19, 3, 'assets/images/paperMedia/dcp-t710w-inktank-mfp3.jpg', 1, '2021-09-27 09:39:04'),
(20, 6, 'assets/images/paperMedia/Koala1.jpg', 1, '2021-10-04 11:03:40'),
(21, 6, 'assets/images/paperMedia/Lighthouse1.jpg', 1, '2021-10-04 11:03:40'),
(22, 6, 'assets/images/paperMedia/Penguins1.jpg', 1, '2021-10-04 11:03:40'),
(23, 6, 'assets/images/paperMedia/Tulips.jpg', 1, '2021-10-04 11:03:40'),
(24, 7, 'assets/images/paperMedia/Lighthouse2.jpg', 1, '2021-10-04 11:04:53'),
(25, 7, 'assets/images/paperMedia/Penguins2.jpg', 1, '2021-10-04 11:04:53'),
(26, 7, 'assets/images/paperMedia/Tulips1.jpg', 1, '2021-10-04 11:04:53'),
(40, 15, 'assets/images/paperMedia/Chrysanthemum3.jpg', 1, '2021-10-04 15:23:57'),
(41, 15, 'assets/images/paperMedia/Desert1.jpg', 1, '2021-10-04 15:23:57'),
(42, 16, 'assets/images/paperMedia/Hydrangeas1.jpg', 1, '2021-10-04 15:24:37'),
(43, 16, 'assets/images/paperMedia/Penguins6.jpg', 1, '2021-10-04 15:24:37'),
(44, 17, 'assets/images/paperMedia/Desert2.jpg', 1, '2021-10-04 15:35:00'),
(45, 17, 'assets/images/paperMedia/Lighthouse4.jpg', 1, '2021-10-04 15:35:00'),
(46, 18, 'assets/images/paperMedia/Desert3.jpg', 1, '2021-10-04 15:35:35'),
(47, 18, 'assets/images/paperMedia/Penguins7.jpg', 1, '2021-10-04 15:35:35'),
(48, 19, 'assets/images/paperMedia/Chrysanthemum4.jpg', 1, '2021-10-04 15:36:16'),
(49, 19, 'assets/images/paperMedia/Desert4.jpg', 1, '2021-10-04 15:36:16'),
(50, 19, 'assets/images/paperMedia/Koala4.jpg', 1, '2021-10-04 15:36:16'),
(51, 20, 'assets/images/paperMedia/Hydrangeas2.jpg', 1, '2021-10-04 15:37:00'),
(52, 20, 'assets/images/paperMedia/Jellyfish1.jpg', 1, '2021-10-04 15:37:00'),
(53, 20, 'assets/images/paperMedia/Tulips4.jpg', 1, '2021-10-04 15:37:00'),
(54, 23, 'assets/images/paperMedia/Hydrangeas4.jpg', 1, '2021-10-04 16:02:42'),
(55, 23, 'assets/images/paperMedia/Jellyfish3.jpg', 1, '2021-10-04 16:02:42'),
(56, 23, 'assets/images/paperMedia/Penguins10.jpg', 1, '2021-10-04 16:02:42'),
(57, 23, 'assets/images/paperMedia/Tulips8.jpg', 1, '2021-10-04 16:02:42'),
(58, 24, 'assets/images/paperMedia/Hydrangeas5.jpg', 1, '2021-10-04 16:05:42'),
(59, 24, 'assets/images/paperMedia/Jellyfish4.jpg', 1, '2021-10-04 16:05:42'),
(60, 24, 'assets/images/paperMedia/Penguins11.jpg', 1, '2021-10-04 16:05:42'),
(61, 24, 'assets/images/paperMedia/Tulips9.jpg', 1, '2021-10-04 16:05:42'),
(62, 25, 'assets/images/paperMedia/Jellyfish5.jpg', 1, '2021-10-04 16:14:50'),
(63, 25, 'assets/images/paperMedia/Tulips10.jpg', 1, '2021-10-04 16:14:50'),
(64, 26, 'assets/images/paperMedia/Desert5.jpg', 1, '2021-10-05 08:11:16'),
(65, 26, 'assets/images/paperMedia/Lighthouse5.jpg', 1, '2021-10-05 08:11:16'),
(66, 27, 'assets/images/paperMedia/Penguins12.jpg', 1, '2021-10-05 08:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `paper_work`
--

CREATE TABLE `paper_work` (
  `id` int(11) NOT NULL,
  `user_email_id` varchar(255) NOT NULL,
  `name_of_candidate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `employer_company_name` varchar(255) NOT NULL,
  `employer_website` varchar(255) NOT NULL,
  `sub_by_rec_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper_work`
--

INSERT INTO `paper_work` (`id`, `user_email_id`, `name_of_candidate`, `email`, `phone`, `employer_company_name`, `employer_website`, `sub_by_rec_name`, `manager_name`) VALUES
(15, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '123', 'ada', 'http://www.fb.com', 'sona', 'sonakshi'),
(16, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '123', 'ada', 'http://www.fb.com', 'sona', 'sonakshi'),
(17, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '123', 'ada', 'http://www.f324b.com', 'sona j', 'sonakshi j'),
(18, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '1234', 'ada33333', 'http://www.fb.com', 'sonaasda', 'sonakshi'),
(19, 'user@gmail.com', 'user users', 'sona@gmail.com', '123', 'ada33333', 'http://www.f324b.com', 'sona j', 'j'),
(20, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '14324323', 'ada33333', 'http://www.f324b.com', 'sona j', 'sonakshi j'),
(23, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '123', 'ada', 'http://www.fb.com', 'sona', 'sonakshi'),
(24, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '1234', 'ada', 'http://www.fb.com', 'sona j', 'sonakshi j'),
(25, 'user@gmail.com', 'user users', 'user@u.com', '123', 'ada', 'http://www.f324b.com', 'sona j', 'sonakshi'),
(26, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '1234', 'ada', 'http://www.fb.com', 'sona', 'sonakshi'),
(27, 'user@gmail.com', 'Sonakshi Jaiswal', 'sonakshi.jai92@gmail.com', '123', 'ada', 'http://www.fb.com', 'sona', 'sonakshi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(10, 'user', 'user@gmail.com', '01cfcd4f6b8770febfb40cb906715822');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_media`
--
ALTER TABLE `contract_media`
  ADD PRIMARY KEY (`mediaId`);

--
-- Indexes for table `paperworks_documents`
--
ALTER TABLE `paperworks_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_work`
--
ALTER TABLE `paper_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contract_media`
--
ALTER TABLE `contract_media`
  MODIFY `mediaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `paperworks_documents`
--
ALTER TABLE `paperworks_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `paper_work`
--
ALTER TABLE `paper_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
