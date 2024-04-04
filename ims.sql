-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 06:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `student_phone` varchar(15) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `nok_phone` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `blood_group` varchar(2) DEFAULT NULL,
  `session` varchar(9) NOT NULL,
  `course_of_study` varchar(100) NOT NULL,
  `program_type` varchar(10) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `exp_date` varchar(4) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `reg_number`, `first_name`, `others`, `student_phone`, `department`, `faculty`, `nok_phone`, `gender`, `blood_group`, `session`, `course_of_study`, `program_type`, `image_path`, `exp_date`, `status`) VALUES
(1, 'KB/20/ND/00001', 'Abba', ' Isah', '8170060093', 'zara@gamil.com', '1', '8063253405', 'M', 'B+', '2020/2021', 'ND OTM', 'UG-PT', 'user2.png', '2027', 1),
(2, 'KB/20/ND/00002', 'Surajo', 'Saad Sani', '9061659027', '', '', '8063253406', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(3, 'KB/20/ND/00003', 'Ali', ' Ashiru', '8145132148', '', '', '8063253407', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(4, 'KB/20/ND/00004', 'Abdulazeez', 'Musa Umar', '8068238871', '', '', '8063253408', 'M', 'O+', '2020/2021', 'ND OTM', 'UG-PT', 'user2.png', '2027', 1),
(5, 'KB/20/ND/00005', 'Abdulhamid', ' Nuhu', '8026790290', '', '', '8063253409', 'M', 'B+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(6, 'KB/20/ND/00006', 'Abdullahi', 'Muhammad Iliyasu', '7066183039', '', '', '8063253410', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(7, 'KB/20/ND/00007', 'Emmanuel', 'Okoro Kalu', '7081554067', '', '', '8063253411', 'M', 'O+', '2020/2021', 'ND OTM', 'UG-PT', 'user2.png', '2027', 1),
(8, 'KB/20/ND/00008', 'Aliyu', ' Mukhtar', '9011787672', '', '', '8063253412', 'M', 'A-', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(9, 'KB/20/ND/00009', 'Habiba', ' Abubakar', '7038564027', '', '', '8063253413', 'F', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(10, 'KB/20/ND/00010', 'Aishatu', ' Tahir', '8039430421', '', '', '8063253414', 'F', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(11, 'KB/20/ND/00011', 'Abubakar', 'Sadiq Muhammad', '8145459311', '', '', '8063253415', 'M', 'A+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(12, 'KB/20/ND/00012', 'Aisha', 'Abdulhadi Aminu', '7036360593', '', '', '8063253416', 'F', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(13, 'KB/20/ND/00013', 'Murtala', 'Gambo Ahmad', '8034408088', '', '', '8063253417', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(14, 'KB/20/ND/00014', 'Salisu', ' Shehu', '9030690214', '', '', '8063253418', 'M', 'A+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(15, 'KB/20/ND/00015', 'Abubakar', 'Nasir Usman', '8140675010', '', '', '8063253419', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(16, 'KB/20/ND/00016', 'Yahaya', ' Musa', '8068885595', '', '', '8063253420', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(17, 'KB/20/ND/00017', 'Umaima', 'Muhammad Usman', '8037237711', '', '', '8063253421', 'F', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(18, 'KB/20/ND/00018', 'Halimatu', 'Isah Rabi\'u', '8144577038', '', '', '8063253422', 'F', 'B+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(19, 'KB/20/ND/00019', 'Khadija', 'Isah Rabi\'u', '7063921911', '', '', '8063253423', 'F', 'B+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(20, 'KB/20/ND/00020', 'Umar', 'Abdullahi Umar', '8074994665', '', '', '8063253424', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(21, 'KB/20/ND/00021', 'Agatha', 'Jummai Kamai', '7038879020', '', '', '8063253425', 'F', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(22, 'KB/20/ND/00022', 'Joy', 'Ikpemehnogena Abdullahi', '9030828897', '', '', '8063253426', 'F', 'A+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(23, 'KB/20/ND/00023', 'Abubakar', 'Musa Haruna', '8168371310', '', '', '8063253427', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(24, 'KB/20/ND/00024', 'Tijjani', 'Maryam Muhammad', '8165981328', '', '', '8063253428', 'F', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(25, 'KB/20/ND/00025', 'Ibrahim', ' Mohammed', '8031364713', '', '', '8063253429', 'M', 'AB', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(26, 'KB/20/ND/00026', 'Hudu', ' Sabo', '8024501850', '', '', '8063253430', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(27, 'KB/20/ND/00027', 'Yabi', 'Ibrahim Baita', '8133911302', '', '', '8063253431', 'F', 'A+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(28, 'KB/20/ND/00028', 'Auwalu', 'Sabiu Abubakar', '8030661835', '', '', '8063253432', 'M', 'O+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(29, 'KB/20/ND/00029', 'Halima', ' Zahraddeen', '8032214322', '', '', '8063253433', 'F', 'B+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1),
(30, 'KB/20/ND/00030', 'Ashiru', 'A Alhaji', '8135565881', '', '', '8063253434', 'M', 'B+', '2020/2021', 'ND Civil', 'UG-PT', 'user2.png', '2027', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `trans_by` varchar(200) NOT NULL,
  `trans_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `email`, `fullname`, `phone`, `role`, `password`, `status`, `trans_by`, `trans_date`) VALUES
(2, 'ubaz27@gmail.com', 'Umar Balarabe', '99', 1, 'manufa', 1, 'ubaz', '2023-09-05 21:18:58'),
(12, 'aashehu.cs@buk.edu.ng', 'Umar Balarabe AA', '09156204078', 1, '', 1, 'ubaz', '2023-09-05 21:20:00'),
(13, 'iyusufahmad@gmail.com', 'Yusuf Ahmad', '07037969117', 1, '', 1, 'ubaz', '2023-11-20 14:48:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_number` (`reg_number`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=757;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
