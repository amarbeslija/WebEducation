-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 01:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vijesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `news_datetime` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_datetime`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue risus tortor, nec faucibus dolor aliquet vel. Etiam congue lacus sit amet suscipit finibus. Curabitur metus leo, vestibulum nec urna et, faucibus feugiat sapien. Nam in accumsan neque. Maecenas congue leo nulla, vitae efficitur dolor fringilla id. Praesent faucibus laoreet orci eget cursus. Etiam erat tortor, tristique et nulla vel, pellentesque vulputate nisl. Etiam orci lacus, faucibus eu blandit a, hendrerit nec quam.', '12.01.2019 13:02:00'),
(2, 'Duis sem sem', 'Duis sem sem, tempor quis turpis eu, condimentum sodales quam. Etiam quis placerat erat. Vestibulum eget lacus blandit, lobortis diam mattis, hendrerit sem. Curabitur commodo tellus odio, in ultricies erat porta in. Cras ut tristique augue. Aliquam erat volutpat. Pellentesque id est eu orci sagittis lacinia vel eget urna. Fusce sed tellus vel mi interdum ultrices. Mauris dictum molestie nunc, non commodo magna pharetra ac.', '12.01.2019 13:02:00'),
(3, 'Lorem ipsum dolor sit amet 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue risus tortor, nec faucibus dolor aliquet vel. Etiam congue lacus sit amet suscipit finibus. Curabitur metus leo, vestibulum nec urna et, faucibus feugiat sapien. Nam in accumsan neque. Maecenas congue leo nulla, vitae efficitur dolor fringilla id. Praesent faucibus laoreet orci eget cursus. Etiam erat tortor, tristique et nulla vel, pellentesque vulputate nisl. Etiam orci lacus, faucibus eu blandit a, hendrerit nec quam.', '12.01.2019 13:02:00'),
(4, 'Duis sem sem 2', 'Duis sem sem, tempor quis turpis eu, condimentum sodales quam. Etiam quis placerat erat. Vestibulum eget lacus blandit, lobortis diam mattis, hendrerit sem. Curabitur commodo tellus odio, in ultricies erat porta in. Cras ut tristique augue. Aliquam erat volutpat. Pellentesque id est eu orci sagittis lacinia vel eget urna. Fusce sed tellus vel mi interdum ultrices. Mauris dictum molestie nunc, non commodo magna pharetra ac.', '12.01.2019 13:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
