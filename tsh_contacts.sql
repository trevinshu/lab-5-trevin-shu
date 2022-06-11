-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2020 at 04:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshu2_dmit2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tsh_contacts`
--

CREATE TABLE `tsh_contacts` (
  `id` int(11) NOT NULL,
  `tsh_bname` varchar(255) NOT NULL,
  `tsh_name` varchar(255) NOT NULL,
  `tsh_email` varchar(255) NOT NULL,
  `tsh_website` varchar(255) NOT NULL,
  `tsh_phone` varchar(255) NOT NULL,
  `tsh_address` varchar(255) NOT NULL,
  `tsh_city` varchar(255) NOT NULL,
  `tsh_province` varchar(255) NOT NULL,
  `tsh_description` text NOT NULL,
  `tsh_resume` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsh_contacts`
--

INSERT INTO `tsh_contacts` (`id`, `tsh_bname`, `tsh_name`, `tsh_email`, `tsh_website`, `tsh_phone`, `tsh_address`, `tsh_city`, `tsh_province`, `tsh_description`, `tsh_resume`) VALUES
(8, 'Paper Leaf', 'Andy Junior', 'info@paper-leaf.com', 'https://paper-leaf.com', '7806330415', '10217 106 St #200 T5J 1H5', 'Edmonton', 'AB', 'A full stack app and software development firm.', '1'),
(9, 'Mediashaker', 'Patrick Bins', 'rfp@mediashaker.com', 'https://www.mediashaker.com', '7807027545', '3FLR-10650 113 Street NW T5H 3H6', 'Edmonton', 'AB', 'A web design, PPC, Digital Marketing & SEO company.', ''),
(10, 'Devebyte', 'Justin Jones', 'info@devebyte.com', 'https://www.mediashaker.com', '7804454359', '107 Ekota Crescent NW T6K 2J6', 'Edmonton', 'AB', 'A web development, digital marketing and SEO agency.', '1'),
(11, 'Strong Coffee Marketing', 'Chris Harney', 'contact@strongcoffeemarketing.com', 'https://strongcoffeemarketing.com', '8778337305', '#102 10549 108 Street NW T5H 2Z8', 'Edmonton', 'AB', 'A digital marketing and web design company.', ''),
(12, 'Stealth', 'Ken Sparrow', 'hello@stealthmedia.com', 'https://stealthmedia.com/', '7804818783', '10180 101 Street NW T5J 3S4', 'Edmonton', 'AB', 'A logo design, web design, SEO, video & photo, rep management, traditional media & print, digital campaigns company.', '1'),
(13, 'Creologic Web Design', 'Ryan Hamilton', 'info@creologic.ca', 'https://creologic.ca', '7806286826', 'Suite 3400 Manulife Place 10180 - 101 Street T5J 3S4', 'Edmonton', 'AB', 'A web design company.', ''),
(14, 'New Local Media', 'Dan Kauss', 'info@newlocalmedia.com', 'https://newlocalmedia.com', '7803942700', '134-10909 106 Street NW T5H 4M7', 'Edmonton', 'AB', 'Builds custom mobile friendly WordPress websites and Web Applications.', '1'),
(15, 'YEG Digital', 'Jackie Jackson', 'info@yegdigital.com', 'https://newlocalmedia.com', '7808840591', '10059 112 Street NW', 'Edmonton', 'AB', 'Digital Marketing, Web Design & SEO company.', ''),
(16, 'Savian', 'Jeff Murray', 'hello@savian.ca', 'https://savian.ca', '7808623204', '4196 93 Street NW Suite 202 T6E 5P5', 'Edmonton', 'AB', 'Strategic planning, branding & design, animation, web, and social development company.', ''),
(17, 'WSI Marketing', 'Tasha Watson', 'info@wsi.ca', 'https://www.smartwsimarketing.com', '7807585800', '200, 5041 Gateway Boulevard NW T6H 4R7', 'Edmonton', 'AB', 'Website Design, Paid Search, SEO, Ecommerce Websites and Internet Marketing Company.', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tsh_contacts`
--
ALTER TABLE `tsh_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tsh_contacts`
--
ALTER TABLE `tsh_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
