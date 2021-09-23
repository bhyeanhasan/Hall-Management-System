-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 06:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `student_border_number` varchar(100) NOT NULL,
  `student_name` varchar(500) NOT NULL,
  `complain_subject` text NOT NULL,
  `complain` text NOT NULL,
  `complain_status` varchar(200) NOT NULL DEFAULT 'pending',
  `complain_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `student_border_number`, `student_name`, `complain_subject`, `complain`, `complain_status`, `complain_time`) VALUES
(1, 'fddg', 'fdga', 'dsfgdfsg', 'dfsgfd', 'pending', '2021-09-23 00:00:00'),
(2, 'vbx', 'fghdgfjz', 'sdafdsf', 'ruyiryiyiiyuiuri', 'pending', '2021-09-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_by` varchar(100) NOT NULL,
  `notice_sub` text NOT NULL,
  `notice` text NOT NULL,
  `notice_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_by`, `notice_sub`, `notice`, `notice_time`) VALUES
(1, '67', 'dfdasgfdg', 'dfgadfgfdgh', '0000-00-00 00:00:00'),
(2, 'as', 'zxbfb', 'gjghjg', '2021-09-23 10:19:36');

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
(334624),
(805933);

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
('Kamrul Hasan', 'kaamrulhaasaan10@gmail.com', 'Asdf 1234', 111, 'Moydandighi', 'Moydandighi', 'Bhangura', 'Pabna'),
('Md. Babul Hasan', 'bhyean@gmail.com', 'AmiAmi6262', 122, 'mirjapursafdasfg', 'bjhbksdbfka', 'jsdhfj', 'sadfsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_registration`
--
ALTER TABLE `tbl_student_registration`
  ADD PRIMARY KEY (`student_border_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
