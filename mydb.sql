-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 04:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `length` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `program_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`length`, `name`, `program_id`) VALUES
(50, 'Web Development', 1),
(50, 'Business Intelligence', 3),
(50, 'Digital Marketing', 4),
(50, 'Math', 5),
(50, 'Humanities', 6),
(50, 'Calculus', 7),
(50, 'Java Mobile', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `program_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `address`, `phone_number`, `gender`, `birth_date`, `email`, `program_id`) VALUES
(1, 'Daniel', 'Klein', '33 Chauret', 514, 'male', '1985-06-18', 'daniel.klein@videotron.ca', 1),
(2, 'John', 'Smith', '123 Main Street', 555, 'male', '1985-09-19', 'Johnsmith@yahoo.com', 2),
(3, 'Shawn', 'Moore', '12 Elm', 666, 'male', '1985-08-17', 'shawnmoore@yahoo.com', 2),
(4, 'Donald', 'Trump', '22 6e Avenue', 666, 'male', '1985-08-17', 'dtrump@yahoo.com', 4),
(5, 'Marie', 'Tyler', '12 7e Avenue', 111, 'female', '1985-08-01', 'mariet@yahoo.com', 3),
(6, 'Tyler', 'Durden', '34 Paper Street', 111, 'male', '1985-06-27', 'tdurden@yahoo.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `full_name`) VALUES
('danielklein', 'ed41c74acdee02facfea87cd2d92016d9437fe8f', 'Daniel Klein'),
('smoore', 'db09fb26e0e6632f4181cad3742400e9ade5b2fd', 'Shawn Moore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
