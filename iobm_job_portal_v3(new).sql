-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 04:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iobm_job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sId` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `dob` date NOT NULL,
  `role` text NOT NULL,
  `photo` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sId`, `name`, `contact`, `dob`, `role`, `photo`, `email`, `address`, `password`, `added_by`, `created_at`, `status`) VALUES
(1, 'Abdul Khalique', '12341234567', '2020-11-01', 'Admin', '5fcea3d586e1c.jpg', 'abdul.khalique@iobm.edu.pk', 'Korangi Creek Iobm Karachi', '$2y$10$MffJ4vGawJAWjx.qnBtYEO7f8m7Rz.yc5Ibo/cHqmGUyF/TH21uBe', 1, '2020-11-19', 'Active'),
(2, 'Kausar Saeed', '12341234567', '2020-11-01', 'Admin', '128.jpg', 'kausar.saeed@iobm.edu.pk', 'Korangi Creek Iobm Karachi', '$2y$10$MffJ4vGawJAWjx.qnBtYEO7f8m7Rz.yc5Ibo/cHqmGUyF/TH21uBe', 1, '2020-11-19', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `eId` int(11) NOT NULL,
  `name` text NOT NULL,
  `logo` text NOT NULL,
  `website` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `company_profile` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`eId`, `name`, `logo`, `website`, `contact`, `address`, `company_profile`, `email`, `password`, `approved`, `approved_by`, `created_at`) VALUES
(100, 'Pearson Spectre Litt', '5fc7a5ec47975.png', 'iobm.edu.pk', '03350355132', 'iobm korangi', '<ul><li>Pakistan International Airlines is the national flag carrier of Pakistan under the administrative control of the Secretary to the Government of Pakistan for Aviation.</li><li> PIA is Pakistan\'s largest airline and operates a fleet of more than 30 aircraft. </li><li>The airline operates nearly 100 flights daily, servicing 18 domestic destinations and 25 international destinations across Asia, Europe, the Middle East and North America.</li></ul>', 'wick@psl.com', '$2y$10$MffJ4vGawJAWjx.qnBtYEO7f8m7Rz.yc5Ibo/cHqmGUyF/TH21uBe', 1, NULL, '2019-12-06 10:28:55'),
(101, 'Pakistan State Oil', '5fc7a64e2511a.png', 'iobm.edu.pk', '03350355132', 'iobm', 'PSO a oil company', 'shareef@pso.com', '$2y$10$MffJ4vGawJAWjx.qnBtYEO7f8m7Rz.yc5Ibo/cHqmGUyF/TH21uBe', 1, 1, '2020-12-06 09:54:24'),
(102, 'Orient Electronics', '5fc7a695eb94e.png', 'iobm.edu.pk', '03350355132', 'iobm', 'Orient, makers of your water dispenser.', 'alex@orient.com', '$2y$10$MffJ4vGawJAWjx.qnBtYEO7f8m7Rz.yc5Ibo/cHqmGUyF/TH21uBe', 1, 1, '2020-12-06 09:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE `hits` (
  `ipAddress` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`ipAddress`, `created_at`) VALUES
('::1', '2020-12-09 08:24:15'),
('::1', '2020-12-09 08:24:15'),
('::1', '2020-12-09 08:24:56'),
('::1', '2020-12-09 08:38:23'),
('::1', '2020-12-09 08:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jId` int(11) NOT NULL,
  `employer` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `department` text NOT NULL,
  `experience` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `skills` text NOT NULL,
  `education` text NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `approved_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jId`, `employer`, `title`, `department`, `experience`, `type`, `description`, `skills`, `education`, `salary`, `created_at`, `deadline`, `approved`, `approved_by`) VALUES
(2, '101', 'Management Trainee', 'Finance', 'Fresh Graduate', 'Full Time', 'lorem', 'lorem', 'lorem', '25000', '2020-11-19 15:29:49', '2021-01-07', 1, 1),
(4, '102', 'CEO', 'Finance', 'Fresh Graduates', 'Internship', 'lorem', 'lorem', 'lorem', '0', '2020-11-19 15:31:12', '2021-01-07', 1, 1),
(46, '100', 'IT admin officer', 'IT', '2 years', 'fulltime', '<ul><li>Responsible for the overall quality system in the HR department.\r\n</li><li>Understanding and executing staffing requisition, requirements, and issues from all departments.\r\n</li><li>Draft and update of documents such as job descriptions, employee handbook, performance appraisal, forms, SOP, policies, and other HR-related documents.\r\n</li><li>Sourcing candidates via job online advertisement.\r\n</li><li>Screening the candidates by resume shortlisting, phone interview, and personal interviews with coordination with the concerned departments &amp; background verification of the shortlisted candidates.\r\n</li><li>Issuing Letter of Offer/Intent/Employment to the selected candidate.\r\nMaintain employees’ leaves, medical, and attendance records. Keeping track of employees’ attendance/absenteeism and report to the Operations Manager.</li></ul>', '<ul><li>Possess a degree in Human Resource\r\nComputer literate particularly with Microsoft Outlook, Microsoft Excel, Microsoft Word &amp; Microsoft PowerPoint.\r\n</li><li>Strong organizational skills with excellent attention to detail, willingness to develop &amp; learn new skills.</li><li>\r\nAbility to communicate effectively &amp; professionally.</li></ul>', 'BSCS', '25000', '2020-11-18 18:53:22', '2021-01-07', 1, 1),
(48, '', 'OS Manual Osama ', 'IT', '2', 'fulltime', '<p>hi</p>', '<p>hi</p>', 'bba', '3', '2020-12-06 23:47:56', '1995-02-03', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mId` int(11) NOT NULL,
  `type` varchar(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `iobm_id` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `semester` varchar(8) NOT NULL,
  `courses` varchar(8) NOT NULL,
  `transcript` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `approved_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mId`, `type`, `name`, `iobm_id`, `email`, `photo`, `dob`, `contact`, `address`, `semester`, `courses`, `transcript`, `cv`, `password`, `approved`, `approved_by`, `created_at`) VALUES
(1030, 'Student', 'Osama Mateen', '20171-22275', 'osamamateen23@gmail.com', '5fbeaf4628221.jpg', '2020-11-25', '03350355132', 'Korangi Creek Iobm Karachi', '7th', '33', '5fc7a71dd7c04.pdf', '5fc7a713f100e.pdf', '$2y$10$Huu9D2r0UNj0noxHC5Q.yugB3b.D/oaxhFLRUPeyTHta0NOWMEkIK', 1, 2, '2019-12-06 09:52:35'),
(1031, 'Alumni', 'John Doe', '20171-22716', 'johndoe@abc.com', '5fbeafd81a0ed.jpeg', '2020-11-27', '03350355132', 'Korangi Creek Iobm Karachi', 'complete', 'complete', '5fc7a772e7965.pdf', '5fc7a77b94f1d.pdf', '$2y$10$wJfzv4ocjQVbg0GwrxZCD.IaVV1oJZkuEZx7/JVCK6oLT9LkGmXHe', 0, 1, '2020-12-06 09:52:35'),
(1032, 'Alumni', 'Imran Hasan', '20171-22716', 'imran@abc.com', '5fc7a55987f2c.jpg', '2020-11-27', '03350355132', 'Korangi Creek Iobm Karachi', '8th', '40', '5fc7a73c96fea.pdf', '5fc7a74528463.pdf', '$2y$10$.4AC3l7No1r2PD4YlGfYyuqeaqfEjawieNNgxqu/BPe7XrArnUE9a', 1, 1, '2020-12-06 09:52:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sId`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`eId`),
  ADD KEY `approved_by` (`approved_by`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jId`),
  ADD KEY `approved_by` (`approved_by`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mId`),
  ADD KEY `approved_by` (`approved_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1041;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `admin` (`sId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`approved_by`) REFERENCES `admin` (`sId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`approved_by`) REFERENCES `admin` (`sId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`approved_by`) REFERENCES `admin` (`sId`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
