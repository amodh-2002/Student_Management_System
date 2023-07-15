-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2023 at 03:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Jee', 'jee@gmail.com', 938389292, 'hii there'),
(2, 'neet', 'neet@gmail.com', 938389892, 'hii there neet here'),
(3, 'jad', 'jad11@gmail.com', 828829911, 'nice college'),
(4, 'JASH', 'jash12@gmail.com', 823898943, 'Helllo there I am back');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `description`, `image`) VALUES
(27, 'Dr. Rajesh Sharma (Mechanical Department)', 'Dr. Sharma is a renowned mechanical engineer known for his expertise in automotive design and manufacturing. He combines theoretical knowledge with practical experience to offer students a comprehensive understanding of the field. ', 'image/tiger.jpg'),
(28, 'Prof Deepa Patel (Computer Science Department)', ' Prof. Patel is a visionary computer scientist specializing in data science and machine learning. With a strong emphasis on research and innovation, she encourages students to explore the frontiers of technology.', 'image/tiger.jpg'),
(29, 'Dr. Priya Singh (Electrical Department)', 'Dr. Singh is a dedicated electrical engineer with expertise in power systems and renewable energy. Her passion for sustainable solutions drives her teaching approach, inspiring students to pursue green energy alternatives. ', 'image/tiger.jpg'),
(30, 'Professor Arjun Desai (Electronics Department)', 'Prof. Desai is a seasoned electronics expert with a keen interest in integrated circuit design and telecommunications. His vast industry experience and innovative teaching methods ensure that students gain practical skills ', 'image/tiger.jpg'),
(31, 'Dr. Sunita Mishra (Computer Science Department)', 'Dr. Mishra is a dynamic computer scientist specializing in cybersecurity and network protocols. With a focus on practical applications and ethical hacking, she prepares students to defend against cyber threats.', 'image/tiger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 93838489, 'admin@gmail.com', 'admin', 'admin123'),
(3, 'am', 245566143, 'am12@gmail.com', 'student', 'ad123'),
(4, 'JASH', 93498392, 'jash12@gmail.com', 'student', 'jash123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
