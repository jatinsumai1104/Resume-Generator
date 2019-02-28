-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 03:53 AM
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
-- Database: `resume_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'jatin@gmail.com', '$2y$10$CBS4qy2yUljnTOQKFWseROjEeG3rKP042jCh0QE7PnilXaVzi0ME.', 0, '2018-10-21 12:56:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(2, 'chirag@gmail.com', '$2y$10$IcsyCngZzZ3NwevyJiBlTOh7vokAw.FstvWgP5V2hyUVDW41qAb5O', 0, '2018-10-21 13:11:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(3, '', '$2y$10$6Owg0c30077FKzLn0TULeeYSa3E3w9jrcu2/JPmt7MyBLzhviZufm', 0, '2018-10-21 20:32:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_college_name`
--

CREATE TABLE `user_college_name` (
  `user_id` int(11) NOT NULL,
  `user_hsc_marks` int(5) NOT NULL,
  `user_hsc_college_name` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_college_name`
--

INSERT INTO `user_college_name` (`user_id`, `user_hsc_marks`, `user_hsc_college_name`, `deleted`, `created_at`, `deleted_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 79, 'chm college', 0, '2018-10-21 12:58:25', '0000-00-00 00:00:00', '2018-10-21 12:58:25', 1, 0, 0),
(2, 75, 'chm', 0, '2018-10-21 13:13:58', '0000-00-00 00:00:00', '2018-10-21 13:13:58', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_co_curriculars`
--

CREATE TABLE `user_co_curriculars` (
  `user_id` int(11) NOT NULL,
  `curricular_name` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_co_curriculars`
--

INSERT INTO `user_co_curriculars` (`user_id`, `curricular_name`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'no', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'love to learn new languages', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_phone_number` varchar(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_git_link` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_current_pointer` float NOT NULL,
  `user_current_college_name` varchar(255) NOT NULL,
  `user_achivements` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_details_id`, `user_id`, `user_first_name`, `user_last_name`, `user_phone_number`, `user_email`, `user_git_link`, `user_address`, `user_age`, `user_current_pointer`, `user_current_college_name`, `user_achivements`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'Jatin', 'Sumai', '9767205838', 'jatinrider1999@gmail.com', 'jatinsumai50', '406;Olympia 2', 19, 8.9, 'vesit', 'no', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, 2, 'Chirag', 'Raghani', '7744824253', 'chiragraghani420@gmail.com', 'chirag420', 'ulhasnagar', 19, 8.5, 'vesit', '1st - hachton - 1st year, 2nd - mini_militia competition', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_experience`
--

CREATE TABLE `user_experience` (
  `user_id` int(11) NOT NULL,
  `user_experience_title` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`user_id`, `user_experience_title`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'no', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'no', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_extra_curricular`
--

CREATE TABLE `user_extra_curricular` (
  `user_id` int(11) NOT NULL,
  `extra_curricular_name` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_extra_curricular`
--

INSERT INTO `user_extra_curricular` (`user_id`, `extra_curricular_name`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'no', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'love to play games', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_fully_registered`
--

CREATE TABLE `user_fully_registered` (
  `user_fully_registered_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_fully_registered` int(1) NOT NULL DEFAULT '0',
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_fully_registered`
--

INSERT INTO `user_fully_registered` (`user_fully_registered_id`, `user_id`, `is_fully_registered`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, 0, '2018-10-21 12:56:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, 2, 1, 0, '2018-10-21 13:11:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0, 0),
(3, 3, 0, 0, '2018-10-21 20:32:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_known_languages`
--

CREATE TABLE `user_known_languages` (
  `user_id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_known_languages`
--

INSERT INTO `user_known_languages` (`user_id`, `language`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'no', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'c, java, python, js, node-js, php, laravel', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_projects`
--

CREATE TABLE `user_projects` (
  `user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_projects`
--

INSERT INTO `user_projects` (`user_id`, `project_name`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'no', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'activo build on basic \"CodeIgniter\", ERP based on Basic \"php\" concepts, resume generator based on \"CodeIgniter\"', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_school_details`
--

CREATE TABLE `user_school_details` (
  `user_id` int(11) NOT NULL,
  `user_ssc_marks` varchar(5) NOT NULL,
  `user_school_name` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_school_details`
--

INSERT INTO `user_school_details` (`user_id`, `user_ssc_marks`, `user_school_name`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, '84', 'New English School', 0, '2018-10-21 12:58:25', '2018-10-21 12:58:25', '0000-00-00 00:00:00', 1, 0, 0),
(2, '79', 'Satya sai school', 0, '2018-10-21 13:13:58', '2018-10-21 13:13:58', '0000-00-00 00:00:00', 2, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_college_name`
--
ALTER TABLE `user_college_name`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_co_curriculars`
--
ALTER TABLE `user_co_curriculars`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_details_id`);

--
-- Indexes for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_extra_curricular`
--
ALTER TABLE `user_extra_curricular`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_fully_registered`
--
ALTER TABLE `user_fully_registered`
  ADD PRIMARY KEY (`user_fully_registered_id`);

--
-- Indexes for table `user_known_languages`
--
ALTER TABLE `user_known_languages`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_projects`
--
ALTER TABLE `user_projects`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_school_details`
--
ALTER TABLE `user_school_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_college_name`
--
ALTER TABLE `user_college_name`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_co_curriculars`
--
ALTER TABLE `user_co_curriculars`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_extra_curricular`
--
ALTER TABLE `user_extra_curricular`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_fully_registered`
--
ALTER TABLE `user_fully_registered`
  MODIFY `user_fully_registered_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_known_languages`
--
ALTER TABLE `user_known_languages`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_projects`
--
ALTER TABLE `user_projects`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_school_details`
--
ALTER TABLE `user_school_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
