-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 11:22 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(40) NOT NULL,
  `user_id` int(40) NOT NULL,
  `itinerary_id` int(40) NOT NULL,
  `booking_date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `did` int(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `region` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`did`, `name`, `description`, `region`) VALUES
(1, 'Ahemdabad', 'Cultural Exploration', 'Gujarat'),
(2, 'Bangalore', 'Urban and Cultural Retreat', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `fid` int(40) NOT NULL,
  `filter_type` varchar(20) NOT NULL,
  `filter_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `iid` int(40) NOT NULL,
  `destination_id` int(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `max_travellers` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `itineraries`
--

INSERT INTO `itineraries` (`iid`, `destination_id`, `name`, `start_date`, `end_date`, `price`, `max_travellers`, `description`) VALUES
(1, 1, 'Ahmedabad Cultural Exploration', '08/29/2024', '09/01/2024', '1500.00', '20', 'Day 1: Arrival and Old Ahmedabad\n\n    08:00 AM - Arrival at Sardar Vallabhbhai Patel International Airport\n    09:30 AM - Check-in at Hyatt Regency Ahmedabad\n    11:00 AM - Visit Sabarmati Ashram (Gandhi Ashram)\n    01:00 PM - Lunch at Agashiye (Traditional Gujarati Thali)\n    03:00 PM - Explore the historic Jama Masjid\n    05:00 PM - Walk through Manek Chowk (Evening Market)\n    07:00 PM - Dinner at Vishalla Restaurant (Traditional Gujarati Cuisine)\n    09:00 PM - Return to Hyatt Regency Ahmedabad\n\nDay 2: Heritage and Architecture\n\n    08:00 AM - Breakfast at the Hotel\n    09:00 AM - Visit the Adalaj Stepwell\n    11:00 AM - Tour the Calico Museum of Textiles\n    01:00 PM - Lunch at Swati Snacks (Famous for Local Delicacies)\n    03:00 PM - Explore the Sidi Saiyyed Mosque (Famous for its intricate stone lattice work)\n    05:00 PM - Visit Kankaria Lake (Boating, Zoo, and Mini-Train)\n    07:30 PM - Dinner at Rajwadu (Theme Restaurant with Folk Performances)\n    09:30 PM - Return to Hyatt Regency Ahmedabad\n\nDay 3: Modern Ahmedabad and Departure\n\n    08:00 AM - Breakfast at the Hotel\n    09:00 AM - Visit the Gujarat Science City (IMAX Theater, Planetarium, and Hall of Space)\n    12:00 PM - Lunch at The Green House (Cafe with a mix of Gujarati and Continental dishes)\n    02:00 PM - Visit the Sarkhej Roza (Historic Architectural Complex)\n    04:00 PM - Shopping at Law Garden Night Market (Handicrafts and Textiles)\n    06:00 PM - Check out from the Hotel\n    07:00 PM - Transfer to Sardar Vallabhbhai Patel International Airport\n    09:00 PM - Flight Departure'),
(2, 2, 'Bangalore Urban and Cultural Retreat', '08/29/2024', '09/01/2024', '1700.00', '10', 'Day 1: Arrival and Central Bangalore\n\n    08:00 AM - Arrival at Kempegowda International Airport\n    09:30 AM - Check-in at The Leela Palace Bangalore\n    11:00 AM - Visit Lalbagh Botanical Garden\n    01:00 PM - Lunch at Mavalli Tiffin Room (MTR) (Traditional South Indian Cuisine)\n    03:00 PM - Explore Bangalore Palace\n    05:00 PM - Walk around Cubbon Park and Vidhana Soudha (Karnataka State Legislature)\n    07:00 PM - Dinner at Karavalli (Authentic Coastal Cuisine)\n    09:00 PM - Return to The Leela Palace Bangalore\n\nDay 2: Heritage and Technology\n\n    08:00 AM - Breakfast at the Hotel\n    09:00 AM - Visit ISKCON Temple Bangalore\n    11:00 AM - Explore the National Gallery of Modern Art\n    01:00 PM - Lunch at The Only Place (Famous for Continental and American Cuisine)\n    03:00 PM - Visit Visvesvaraya Industrial and Technological Museum\n    05:00 PM - Explore the Commercial Street (Shopping Hub)\n    07:30 PM - Dinner at Toit (Popular Microbrewery and Pub)\n    09:30 PM - Return to The Leela Palace Bangalore\n\nDay 3: Nature and Departure\n\n    07:30 AM - Early Breakfast at the Hotel\n    08:30 AM - Day Trip to Nandi Hills (Hill Station near Bangalore)\n    10:00 AM - Explore the Hilltop Temple and Enjoy Panoramic Views\n    01:00 PM - Lunch at a Local Restaurant in Nandi Hills\n    03:00 PM - Return to Bangalore\n    05:00 PM - Visit the Tipu Sultan’s Summer Palace\n    06:30 PM - Check out from the Hotel\n    07:30 PM - Transfer to Kempegowda International Airport\n    09:30 PM - Flight Departure');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `pass_hash`) VALUES
(1, 'Flame', 'xyz@gmail.com', '$2y$10$ESgMpc.J.9c4iFms6CnxseRvg1XIVp27awMxVkWX1KgmtsyPE/wVW'),
(2, 'Flame2', 'guptearchit@gmail.com', '$2y$10$RIQiaIuWWe9C0dNfla1A5uP4EpKNBjhGpwBVA0Sri1rAakBbEaeNC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`iid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `itineraries_book_fk` FOREIGN KEY (`itinerary_id`) REFERENCES `itineraries` (`iid`),
  ADD CONSTRAINT `user_book_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
