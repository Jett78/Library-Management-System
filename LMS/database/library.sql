-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 06:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Cell` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Username`, `Password`, `Cell`, `Address`) VALUES
('Saujanya Shrestha', 'saujanya@gmail.com', 'saujanya', 'qwerty', '9840362754', 'Sano thimi,Bhaktapur'),
('Saujanya Shrestha', 'saujanya@gmail.com', 'saujanya', 'qwerty', '9840362754', 'Sano thimi,Bhaktapur');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(255) NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_num` varchar(255) NOT NULL,
  `book_edition` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_num`, `book_edition`, `author_name`, `category`) VALUES
(1, 'DSA', '1000', '2021', 'Ram Krishna', 'Academic'),
(2, 'DSA', '6654', '2021', 'Ram Krishna', 'Academic'),
(3, 'DSA', '9898', '2018', 'Jeniffer Lorez', 'Academic'),
(4, 'The Book Thief', '6258', '2021', 'Marcus Zukas', 'Novel'),
(5, 'The Alchemist', '8521', '2007', 'Paulo Coelho', 'Novel'),
(6, 'Harry Potter', '2145', '1998', 'J.K Rowling', 'Novel'),
(7, 'The Kite Runner', '8745', '2001', 'Munas Mads', 'Poet'),
(8, '1984(paperBack)', '2585', '1997', 'George Orwell', 'Poem'),
(9, 'Mary on Cross', '8475', '2000', 'The Ghost', 'Fantasy'),
(10, 'Soha', '7485', '2018', 'Sohail Khan', 'Fiction'),
(11, 'Local Train', '7536', '1998', 'Dines Bajracharya', 'History'),
(12, 'Social Studies', '9632', '2007', 'Sau kumar sen', 'Academic'),
(13, 'science', '9847', '2009', 'laxmi shrestha', 'Academic');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE `issued` (
  `student_id` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_num` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `issue_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issued`
--

INSERT INTO `issued` (`student_id`, `book_name`, `book_num`, `book_author`, `issue_date`) VALUES
(3, 'The Alchemist', '8521', 'Paul Coelho', '23-12-27'),
(3, 'soha', '7485', 'Sohail Khan', '23-12-27'),
(11, 'science', '9847', 'laxmi shrestha', '23-12-27'),
(1, 'Soha', '7485', 'Soha', '24-02-04'),
(1, 'The Alchemist', '8521', 'Paul Coelho', '24-02-04'),
(1, 'Harry Potter', '2145', 'J.K Rowling', '24-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Cell` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Username`, `Password`, `Cell`, `Address`) VALUES
(1, 'Jeet', 'jetdeula@yahoo.com', 'Jett', 'sssss', '9898989', 'ses'),
(2, 'Joseph Suarez', 'jojo@gmail.com', 'Jose', '99885474', '9841425487', 'Kevin Owens'),
(3, 'Saujanya Shrestha', 'sau@yahoo.com', 'saujanya', 'qwerty', '9840362754', 'Sano Thimi'),
(4, 'John Lenon', 'johny@hotmail.com', 'Johny69', 'qscd984555521', '9841424578', 'Balkot-11'),
(5, 'Sohail Paudel', 'paudel98@yahoo.com', 'Sohy88', 'Sohail76888', '7414547895', 'Emukhel,Patan'),
(6, 'Mohan Kapali', 'mohan@yahoo.com', 'Lalmohan', 'asdfer998520', '9856247895', 'Mohanpur-99'),
(7, 'Nirav Giri', 'nirav@gmail.com', 'Nirvana852', 'nirvan852145', '9774154896', 'Lost street-99'),
(8, 'Random Nepali', 'nepali99@yahoo.com', 'Randomnep', 'qwsdfc99985', '9625147854', 'Solukhumbu'),
(9, 'Hell Heaven', 'heyyy@hotmail.com', 'Heavenhell', 'heaven98652', '98414548795', 'Satan -666'),
(10, 'Random Guy', 'random@rocketmail.com', 'Random58', 'sssss', '9852147852', 'Thimi-15'),
(11, 'saurav stha', 'saurav1@gmail.com', 'saurav', 'aaaaa', '988888888', 'patan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
