-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 03:42 PM
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
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `superhero`
--

CREATE TABLE `superhero` (
  `sh_id` int(11) NOT NULL,
  `sh_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sh_alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sh_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sh_desc` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `sh_datetime` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `superhero`
--

INSERT INTO `superhero` (`sh_id`, `sh_name`, `sh_alias`, `sh_image`, `sh_desc`, `sh_datetime`) VALUES
(1, 'Bruce Wayne', 'Batman', 'https://images-na.ssl-images-amazon.com/images/S/cmx-images-prod/StoryArc/235/235._SX400_QL80_TTD_.jpg', 'https://hr.wikipedia.org/wiki/Batman', '12.01.2019 15:38:00'),
(2, 'Tony Stark', 'Iron man', 'https://thumbs.mic.com/N2NkY2QyOTAxMCMvYlNkYWZUV2h0eE9FUlM5WTk1SVF5T21tN0hVPS80OTJ4MDoxNDI4eDkzNi80MDB4NDAwL2ZpbHRlcnM6Zm9ybWF0KGpwZWcpOnF1YWxpdHkoODApL2h0dHBzOi8vczMuYW1hem9uYXdzLmNvbS9wb2xpY3ltaWMtaW1hZ2VzL2gzY3R4aW1ya3FpdXFyMHNzazIyN2lxdjhwZHB6cmllY3dxYnpsaWV0dnJ0NXk3M2Zmam9sdnBrZnhycDR4Z3UuanBn.jpg', 'https://en.wikipedia.org/wiki/Iron_Man_(2008_film)', '12.01.2019 15:38:00'),
(3, 'Dick Grayson', 'Robin', 'https://solarmovie.id/all/img/char/1so0soso2so5so2so9/31fb4cd00a4fba3a/93783faf6bbd46fd.jpg?t=1539358801', 'https://en.wikipedia.org/wiki/Robin_(character)', '12.01.2019 15:38:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superhero`
--
ALTER TABLE `superhero`
  ADD PRIMARY KEY (`sh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `superhero`
--
ALTER TABLE `superhero`
  MODIFY `sh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
