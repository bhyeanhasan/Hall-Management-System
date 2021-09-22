-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 09:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbsmrh`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_verification_code`
--

CREATE TABLE `student_verification_code` (
  `verification_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_verification_code`
--

INSERT INTO `student_verification_code` (`verification_code`) VALUES
(175255),
(534805),
(334624);

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`admin_name`, `admin_email`, `admin_password`, `id`) VALUES
('admin', 'admin@bbsmrh.com', 'Admin 1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_staff`
--

CREATE TABLE `table_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_staff`
--

INSERT INTO `table_staff` (`staff_id`, `staff_name`, `staff_email`, `staff_password`) VALUES
(1, 'Siddik', 'siddik@gmail.com', 'Siddik 1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_registration`
--

CREATE TABLE `tbl_student_registration` (
  `student_full_name` text NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_password` varchar(50) NOT NULL,
  `student_border_number` int(11) NOT NULL,
  `village_or_road_name` varchar(100) NOT NULL,
  `post_office_name` varchar(100) NOT NULL,
  `sub_district_name` varchar(100) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_registration`
--

INSERT INTO `tbl_student_registration` (`student_full_name`, `student_email`, `student_password`, `student_border_number`, `village_or_road_name`, `post_office_name`, `sub_district_name`, `district_name`) VALUES
('Kamrul Hasan', 'kamrulhasan231113@gmail.com', 'Abcd#1234', 69, 'Moydandighi', 'Moydandighi', 'Bhangura', 'Pabna'),
('Habib Wahid', 'kamrulonfiverr@gmail.com', 'Mony 6566', 78, 'Khanshama', 'Khanshama', 'Jhalokathi', 'Pabna'),
('Kamrul Hasan', 'kaamrulhaasaan10@gmail.com', 'Asdf 1234', 111, 'Moydandighi', 'Moydandighi', 'Bhangura', 'Pabna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student_registration`
--
ALTER TABLE `tbl_student_registration`
  ADD PRIMARY KEY (`student_border_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
