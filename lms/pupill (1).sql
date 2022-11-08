-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 11:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupill`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `class_code` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `teacher2` varchar(255) NOT NULL,
  `teacher3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `school`, `class_code`, `teacher`, `teacher2`, `teacher3`) VALUES
(109, 'X-8', 'Shkolla Digjitale', 'non', 'LirikRexhepi', 'TestTeacher', ''),
(118, 'XI-3', 'Shkolla Digjitale', 'nf1', 'LirikRexhepi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `completed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `title`, `information`, `image`, `student`, `teacher`, `class`, `completed`) VALUES
(105, 'Homework #1', 'Homework Text', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(106, 'Homework #1', 'Homework Text', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(107, 'Matematike', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(108, 'Matematike', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(109, 'audgausdhauisd', 'audgausdhauisd', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(110, 'audgausdhauisd', 'audgausdhauisd', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(111, 'douadihaskdhaushdakhd', 'douadihaskdhaushdakhd', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(112, 'douadihaskdhaushdakhd', 'douadihaskdhaushdakhd', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(113, 'Matematike 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(114, 'Matematike 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(115, 'Matematike 12345', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', 'teachersUse.png', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(116, 'Matematike 12345', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', 'teachersUse.png', 'Ben', 'LirikRexhepi', 'X-8', ''),
(117, 'Detyra123', 'Detyra info', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(118, 'Detyra123', 'Detyra info', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(119, 'Matematike 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', 'teachersUse.png', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(120, 'Matematike 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', 'teachersUse.png', 'Ben', 'LirikRexhepi', 'X-8', ''),
(121, 'HomeWork Sunday', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', 'teachersUse.png', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(122, 'HomeWork Sunday', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', 'teachersUse.png', 'Ben', 'LirikRexhepi', 'X-8', ''),
(123, 'Test', 'Test', 'teachersUse.png', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(124, 'Test', 'Test', 'teachersUse.png', 'Ben', 'LirikRexhepi', 'X-8', ''),
(125, 'Matematike', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(126, 'Matematike', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(127, 'titulli', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', 'true'),
(128, 'titulli', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus malesuada nisl ac aliquam. Sed at bibendum odio, a imperdiet nunc. Duis et interdum erat. Proin interdum ac velit et ornare. Cras fringilla, ipsum hendrerit feugiat lacinia, velit mag', '', 'Ben', 'LirikRexhepi', 'X-8', ''),
(129, 'digilab', 'we', 'Orari Mesimor.docx', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', ''),
(130, 'digilab', 'we', 'Orari Mesimor.docx', 'Ben', 'LirikRexhepi', 'X-8', ''),
(131, 'Html', 'First time working with html', 'Untitled.png', 'LirikRexhepiii', 'LirikRexhepi', 'X-8', ''),
(132, 'Html', 'First time working with html', 'Untitled.png', 'Ben', 'LirikRexhepi', 'X-8', '');

-- --------------------------------------------------------

--
-- Table structure for table `homeworksubmit`
--

CREATE TABLE `homeworksubmit` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `homeworkNumber` int(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `completed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeworksubmit`
--

INSERT INTO `homeworksubmit` (`id`, `title`, `answer`, `image`, `class`, `homeworkNumber`, `student`, `teacher`, `completed`) VALUES
(37, 'Homework #1', 'The answer to homework #1 is simple', '', 'X-8', 105, 'LirikRexhepiii', 'LirikRexhepi', 'false'),
(38, 'Matematike', 'ougiygiygigig', '', 'X-8', 107, 'LirikRexhepiii', 'LirikRexhepi', 'false'),
(39, 'audgausdhauisd', 'audgausdhauisd', '', 'X-8', 109, 'LirikRexhepiii', 'LirikRexhepi', 'false'),
(40, 'douadihaskdhaushdakhd', 'douadihaskdhaushdakhd', '', 'X-8', 111, 'LirikRexhepiii', 'LirikRexhepi', 'true'),
(41, 'Matematike 123', 'Zgjidhja123', 'Untitled.png', 'X-8', 113, 'LirikRexhepiii', 'LirikRexhepi', 'true'),
(42, 'Matematike 12345', 'Zgjidhja', 'Untitled.png', 'X-8', 115, 'LirikRexhepiii', 'LirikRexhepi', 'false'),
(43, 'Detyra123', 'pergjegjja', '', 'X-8', 117, 'LirikRexhepiii', 'LirikRexhepi', 'true'),
(44, 'Matematike 123', 'answer', 'Untitled.png', 'X-8', 119, 'LirikRexhepiii', 'LirikRexhepi', ''),
(45, 'HomeWork Sunday', '2+2=4', 'Untitled.png', 'X-8', 121, 'LirikRexhepiii', 'LirikRexhepi', 'false'),
(46, 'Test', 'answer', '', 'X-8', 123, 'LirikRexhepiii', 'LirikRexhepi', 'false'),
(47, 'Matematike', 'pergjigja', '', 'X-8', 125, 'LirikRexhepiii', 'LirikRexhepi', ''),
(48, 'titulli', 'fsdsdfs', '', 'X-8', 127, 'LirikRexhepiii', 'LirikRexhepi', '');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `nameOfCard` varchar(255) DEFAULT NULL,
  `creditCardNumber` int(255) DEFAULT NULL,
  `expMonth` varchar(20) DEFAULT NULL,
  `expYear` varchar(24) DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(255) NOT NULL,
  `SchoolName` varchar(255) NOT NULL,
  `AdminCode` varchar(255) NOT NULL,
  `StudentCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `SchoolName`, `AdminCode`, `StudentCode`) VALUES
(5, 'Shkolla Digjitale', 'xbuOQB', 'xbuOQBTxw');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `math-grade` varchar(255) NOT NULL,
  `bio-grade` varchar(255) NOT NULL,
  `english-grade` varchar(255) NOT NULL,
  `missingTrue` int(255) NOT NULL,
  `missingFalse` int(255) NOT NULL,
  `completed` int(255) NOT NULL,
  `missed` int(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `password`, `class`, `school`, `math-grade`, `bio-grade`, `english-grade`, `missingTrue`, `missingFalse`, `completed`, `missed`, `role`) VALUES
(7, 'LirikRexhepiii', 'GitHub123', 'X-8', '0', '2', '0', '0', 7, 0, 1, 1, 0),
(11, 'Ben', 'ten', 'X-8', 'Shkolla Digjitale', '', '', '', 0, 0, 0, 0, 0),
(14, 'vesa', 'vesa', 'XI-7', 'Naim Frasheri', '4', '5', '5', 3, 2, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fullname`, `password`, `subject`, `school`, `class`, `role`) VALUES
(34, 'LirikRexhepi', 'GitHub123', 'math', 'Shkolla Digjitale', 'Klasa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeworksubmit`
--
ALTER TABLE `homeworksubmit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `homeworksubmit`
--
ALTER TABLE `homeworksubmit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
