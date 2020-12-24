-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 08:13 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` int(11) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `header_content1` mediumtext NOT NULL,
  `header_content2` mediumtext NOT NULL,
  `logo` text NOT NULL,
  `hb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `header`, `header_content1`, `header_content2`, `logo`, `hb`) VALUES
(1, 'one', '0', '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `username`, `name`, `email`, `password`, `status`) VALUES
(1, 'admin', '', 'Admin@gmail.com', '12345', ''),
(4, 'admin2', 'habib', 'habibur.rahaman1520@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(5, 'admin5', 'name', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(6, 'author', '', 'habibur.rahaman1520@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(7, 'Habib', '', 'habibur.rahman1520@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(8, 'habib', 'habib', 'habibur.rahman1520@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(9, 'admin25', 'hi', 'habibur.rahman1520@gmail.com', '12345', '1'),
(10, 'admin', '', 'Admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(11, 'test12', '', 'aa@aa.comaa', 'e10adc3949ba59abbe56e057f20f883e', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contmesg`
--

CREATE TABLE `contmesg` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contmesg`
--

INSERT INTO `contmesg` (`id`, `name`, `email`, `address`, `message`) VALUES
(1, 'sdsdaa', '', '', ''),
(3, 'habib', 'Admin@gmail.com', 'vvvvvv', 'hi'),
(4, 'habib', 'habibur.rahman1520@gmail.com', 'vvvvvv500', 'hello'),
(5, 'hi', 'habibur.rahaman1520@gmail.com', '555', ''),
(13, 'hoi', 'Admin@gmail.com', 'vvvvvv500hh', 'hello'),
(14, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `header_content1` varchar(255) NOT NULL,
  `header_content2` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `hb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `header`, `header_content1`, `header_content2`, `logo`, `hb`) VALUES
(32, 'Hello', 'try best', 'your choess', '20201215171225_5505857.png', '20201215171248_2505910.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `popularartical`
--

CREATE TABLE `popularartical` (
  `id` int(11) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `hb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popularartical`
--

INSERT INTO `popularartical` (`id`, `Title`, `hb`) VALUES
(1, 'lorium ipsam', '20201215171243_681186.jpg'),
(4, 'one', '0');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `post` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `like_post` int(11) NOT NULL,
  `dislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `image`, `post`, `post_by`, `like_post`, `dislike`) VALUES
(5, 'lorium ipsam', '0000-00-00', '20201207211243_1360028.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 11, 0),
(7, 'lorium ipsam', '0000-00-00', '20201207211252_3566132.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '', 0, 0),
(8, 'lorium ipsam', '0000-00-00', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(9, 'lorium ipsam', '0000-00-00', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(10, 'lorium ipsam', '0000-00-00', '', 'this is done', '', 0, 0),
(11, 'glop', '2020-12-04', '', 'tree', 'habib', 0, 0),
(12, 'one', '0000-00-00', '', 'tree', 'golap', 0, 0),
(13, 'one', '0000-00-00', '', 'tree', 'golap', 0, 0),
(14, 'two', '0000-00-00', '', 'tree', 'golap', 0, 0),
(15, 'one', '0000-00-00', '', '', '', 0, 0),
(16, 'glop', '0000-00-00', '', '', '', 8, 0),
(17, 'two', '0000-00-00', '', '', '', 0, 0),
(18, 'two', '0000-00-00', '', '', '', 0, 0),
(19, 'glop', '0000-00-00', '20201219181230_1607076.jpg', '', '', 1, 0),
(24, 'two', '0000-00-00', '20201214211232_8885096.jpg', 'treeb', 'golap to', 8, 0),
(25, 'lorium ipsam do', '0000-00-00', '20201219181206_6220946.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(26, 'lorium ipsam2', '0000-00-00', '20201217201254_2878156.jpg', 'specimen book. It has su', 'habib', 2, 0),
(27, 'lorium ipsam', '2020-12-21', '20201220191259_1271367.jpg', 'habib8 i', 'habib', 1, 0),
(28, 'lorium ipsam', '2020-12-01', '20201221171250_7282839.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(29, 'lorium ipsam', '0000-00-00', '20201221171235_5397609.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(30, 'lorium ipsam2', '0000-00-00', '20201220201257_6534021.jpg', 'this is done', 'admin2', 0, 0),
(31, 'lorium ipsam2', '2020-12-22', '20201221061243_2733300.jpg', ' make a type specimen book. It has su', 'habib', 0, 0),
(32, 'lorium ipsam2', '0000-00-00', '20201221061247_6243137.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0),
(33, 'lorium ipsam3', '2020-12-21', '20201221071240_3466462.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0),
(34, 'lorium ipsam2', '2020-12-21', '20201221171203_3335327.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(35, 'lorium ipsam do', '0000-00-00', '20201221171235_8183436.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(36, 'lorium ipsam2', '0000-00-00', '20201221171255_7811536.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0),
(37, 'lorium ipsam do', '0000-00-00', '20201221171251_6230188.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(38, 'kkkk', '0000-00-00', '20201221171242_8797480.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0),
(39, 'lorium ipsam', '2020-12-21', '20201221171229_3561212.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0),
(40, 'lorium ipsam35', '2020-12-21', '20201221171233_1320738.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'habib', 0, 0),
(41, 'lorium ipsam35', '2020-12-14', '20201221171218_5028271.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0),
(42, 'lorium ipsam2', '0000-00-00', '20201221191213_963090.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'admin2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `status`) VALUES
(1, 'admin', 'habib', 'habib@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contmesg`
--
ALTER TABLE `contmesg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popularartical`
--
ALTER TABLE `popularartical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contmesg`
--
ALTER TABLE `contmesg`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `popularartical`
--
ALTER TABLE `popularartical`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
