-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 03:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'kavita', '123@gmail.com', '123', '2021-09-24 16:27:30'),
(2, 'asha', 'abc123@gmail.com', '123', '2021-09-24 16:27:39'),
(3, 'admin', 'admin@gmail.com', 'admin', '2024-01-09 20:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_cat`
--

CREATE TABLE `tbl_blog_cat` (
  `bolg_cat_id` int(10) NOT NULL,
  `cat_nm` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog_cat`
--

INSERT INTO `tbl_blog_cat` (`bolg_cat_id`, `cat_nm`, `created_at`) VALUES
(5, 'Travel and Adventure', '2024-02-23 21:08:24'),
(6, 'Health and Wellness', '2024-02-23 21:08:32'),
(7, 'Personal Development', '2024-02-23 21:08:53'),
(8, 'Technology and Gadgets', '2024-02-23 21:09:03'),
(9, 'Book Reviews and Literature', '2024-02-23 21:09:10'),
(10, 'Finance and Money Management', '2024-02-23 21:09:18'),
(11, 'Career Development', '2024-02-23 21:09:26'),
(12, 'Art and Creativity', '2024-02-23 21:09:32'),
(13, 'Science and Technology News', '2024-02-23 21:09:42'),
(14, 'Social Issues and Advocacy', '2024-02-23 21:09:49'),
(15, 'Language Learning', '2024-02-23 21:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_detail`
--

CREATE TABLE `tbl_blog_detail` (
  `blog_id` int(10) NOT NULL,
  `blog_user_id` int(10) NOT NULL,
  `blog_cat_id` int(10) NOT NULL,
  `blog_title` varchar(30) NOT NULL,
  `blog_img` text NOT NULL,
  `blog_description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_user`
--

CREATE TABLE `tbl_blog_user` (
  `blog_user_id` int(10) NOT NULL,
  `blog_fname` varchar(20) NOT NULL,
  `blog_lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` text NOT NULL,
  `dob` datetime NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_no` text NOT NULL,
  `img` text NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog_user`
--

INSERT INTO `tbl_blog_user` (`blog_user_id`, `blog_fname`, `blog_lname`, `email`, `pwd`, `dob`, `city`, `contact_no`, `img`, `address`, `created_at`) VALUES
(1, 'kavita', 'jotangiya', '123@gmail.com', '1234321', '2021-09-23 14:08:41', 'gondal', '1232456578', 'bc6.jpg', 'gondal', '2021-09-23 17:40:03'),
(2, 'asha', 'rajapara', '123@gmail.com', '1234321', '2021-09-23 14:08:41', 'gondal', '1232456578', 'bc6.jpg', 'gondal', '2021-09-23 17:40:15'),
(3, 'admin', '', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '', '', '', '', '2021-12-14 10:50:18'),
(4, 'Asha', 'Rajapara', 'asharajapara112@gmail.com', '977609f03178b7aea60011835d943911', '2002-11-02 00:00:00', 'Rajkot', '7600320520', 'WhatsApp Image 2021-11-05 at 10.53.21 AM.jpeg', 'Rajkot', '2024-02-23 20:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `img` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `img`, `created_at`) VALUES
(2, 'programming', 'Database-Management-System.png', '2021-09-20 16:43:32'),
(11, 'language', 'computer-coding.jpg', '2021-09-20 16:54:24'),
(33, 'phython', 'computer-coding.jpg', '2021-10-06 17:06:09'),
(38, 'java', '3c8.jpg', '2021-12-14 08:23:35'),
(39, 'Cyber Security', 'cs.png', '2024-01-09 20:19:06'),
(40, 'Bigdata', '3.jpg', '2024-02-07 10:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `comments` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `name`, `email`, `phone`, `comments`, `created_at`) VALUES
(1, 'kavita', 'kavi@gmail.com', '9944556321', 'abcdesfr', '0000-00-00 00:00:00'),
(2, 'asha', '123@gmail.com', '1203654789', 'fmwrjkfwrkfn,dsm', '2021-10-05 15:14:05'),
(4, 'aka', '123abc@gmail.com', '99857421', 'jjhgiugjhb', '2021-12-13 18:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `sub_course_id` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `question` text NOT NULL,
  `ans_1` text NOT NULL,
  `ans_2` text NOT NULL,
  `ans_3` text NOT NULL,
  `ans_4` text NOT NULL,
  `right_ans` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`sub_course_id`, `quiz_id`, `question`, `ans_1`, `ans_2`, `ans_3`, `ans_4`, `right_ans`, `created_at`) VALUES
(27, 2, 'The DBMS language component which can be\r\nembedded in a program is', 'The data definition language (DDL)', 'The data manipulation language(DML)', 'The database administrator(DBL)', 'A query language', 'The data manipulation language(DML)', '2021-09-23 15:57:02'),
(33, 4, 'sfgwrtrsf', 'ajdlakmlakm', 'akdsliejdlkam', 'fgdfhgdfb', 'fgdtgtdhgd', 'gfertresgtrsdfg', '2021-10-06 16:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quizuser_marks`
--

CREATE TABLE `tbl_quizuser_marks` (
  `mark_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `sub_course_id` int(10) NOT NULL,
  `total_marks` int(10) NOT NULL,
  `option_marks` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_user`
--

CREATE TABLE `tbl_quiz_user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz_user`
--

INSERT INTO `tbl_quiz_user` (`user_id`, `username`, `pwd`, `email`, `created_at`) VALUES
(0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '2021-12-13 18:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcourse_detail`
--

CREATE TABLE `tbl_subcourse_detail` (
  `sub_course_id` int(10) NOT NULL,
  `subcourse_detail_id` int(10) NOT NULL,
  `subcourse_detail_name` varchar(30) NOT NULL,
  `subcourse_detail_description` text NOT NULL,
  `video` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcourse_detail`
--

INSERT INTO `tbl_subcourse_detail` (`sub_course_id`, `subcourse_detail_id`, `subcourse_detail_name`, `subcourse_detail_description`, `video`, `created_at`) VALUES
(27, 17, 'php', 'PHP is a server-side language that can be used in conjunction with a database to create dynamic web pages. Minimal, music, guitar, art', '1080x2160 wallpaper.jpg', '2021-09-23 15:38:52'),
(33, 18, 'phpmyadmin', 'phpMyAdmin is an open-source software tool introduced on September 9, 1998, which is written in PHP. Basically, it is a third-party tool to manage the tables and data inside the database. phpMyAdmin supports various type of operations on MariaDB and MySQL. The main purpose of phpMyAdmin is to handle the administration of MySQL over the web.', 'phpmyadmin.jpg', '2021-09-26 22:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_course`
--

CREATE TABLE `tbl_sub_course` (
  `sub_course_id` int(10) NOT NULL,
  `sub_course_name` varchar(30) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `more_description` text NOT NULL,
  `course_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sub_course`
--

INSERT INTO `tbl_sub_course` (`sub_course_id`, `sub_course_name`, `img`, `description`, `more_description`, `course_id`, `created_at`) VALUES
(27, 'sub_course_name', '85.jpg', '                                                                                        description                                                \r\n                                                                                            \r\n                                            ', 'more_description                                                                                        ', 2, '2021-09-21 15:17:12'),
(33, 'php', 'php.jpg', 'PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.', 'PHP tutorial for beginners and professionals provides in-depth knowledge of PHP scripting language. Our PHP tutorial will help you to learn PHP scripting language easily.\r\n\r\nThis PHP tutorial covers all the topics of PHP such as introduction, control statements, functions, array, string, file handling, form handling, regular expression, date and time, object-oriented programming in PHP, math, PHP MySQL, PHP with Ajax, PHP with jQuery and PHP with XML.', 2, '2021-09-21 16:22:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog_cat`
--
ALTER TABLE `tbl_blog_cat`
  ADD PRIMARY KEY (`bolg_cat_id`);

--
-- Indexes for table `tbl_blog_detail`
--
ALTER TABLE `tbl_blog_detail`
  ADD PRIMARY KEY (`blog_id`,`blog_user_id`),
  ADD KEY `blog_cat_id` (`blog_cat_id`),
  ADD KEY `blog_user_id` (`blog_user_id`);

--
-- Indexes for table `tbl_blog_user`
--
ALTER TABLE `tbl_blog_user`
  ADD PRIMARY KEY (`blog_user_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `sub_course_id` (`sub_course_id`);

--
-- Indexes for table `tbl_quizuser_marks`
--
ALTER TABLE `tbl_quizuser_marks`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `mark_id` (`mark_id`);

--
-- Indexes for table `tbl_quiz_user`
--
ALTER TABLE `tbl_quiz_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_subcourse_detail`
--
ALTER TABLE `tbl_subcourse_detail`
  ADD PRIMARY KEY (`subcourse_detail_id`),
  ADD KEY `sub_course_id` (`sub_course_id`);

--
-- Indexes for table `tbl_sub_course`
--
ALTER TABLE `tbl_sub_course`
  ADD PRIMARY KEY (`sub_course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_blog_cat`
--
ALTER TABLE `tbl_blog_cat`
  MODIFY `bolg_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_blog_detail`
--
ALTER TABLE `tbl_blog_detail`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_blog_user`
--
ALTER TABLE `tbl_blog_user`
  MODIFY `blog_user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subcourse_detail`
--
ALTER TABLE `tbl_subcourse_detail`
  MODIFY `subcourse_detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_sub_course`
--
ALTER TABLE `tbl_sub_course`
  MODIFY `sub_course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_blog_detail`
--
ALTER TABLE `tbl_blog_detail`
  ADD CONSTRAINT `tbl_blog_detail_ibfk_1` FOREIGN KEY (`blog_user_id`) REFERENCES `tbl_blog_user` (`blog_user_id`),
  ADD CONSTRAINT `tbl_blog_detail_ibfk_2` FOREIGN KEY (`blog_cat_id`) REFERENCES `tbl_blog_cat` (`bolg_cat_id`);

--
-- Constraints for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD CONSTRAINT `tbl_quiz_ibfk_1` FOREIGN KEY (`sub_course_id`) REFERENCES `tbl_sub_course` (`sub_course_id`);

--
-- Constraints for table `tbl_quizuser_marks`
--
ALTER TABLE `tbl_quizuser_marks`
  ADD CONSTRAINT `tbl_quizuser_marks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_quizuser_marks` (`mark_id`);

--
-- Constraints for table `tbl_subcourse_detail`
--
ALTER TABLE `tbl_subcourse_detail`
  ADD CONSTRAINT `tbl_subcourse_detail_ibfk_1` FOREIGN KEY (`sub_course_id`) REFERENCES `tbl_sub_course` (`sub_course_id`);

--
-- Constraints for table `tbl_sub_course`
--
ALTER TABLE `tbl_sub_course`
  ADD CONSTRAINT `tbl_sub_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tbl_course` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
