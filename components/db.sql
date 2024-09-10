-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 09:47 AM
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
(2, 'Bangalore', 'Urban and Cultural Retreat', 'Bangalore'),
(3, 'Chennai', 'This itinerary covers Chennai\'s rich cultural heritage, historical landmarks, local cuisine, and a day trip to Mahabalipuram. It provides a blend of religious sites, museums, coastal experiences, and local shopping spots.', 'Chennai'),
(4, 'Delhi&Gurgaon', 'This itinerary gives you a blend of Delhi’s historical and cultural richness along with Gurgaon\'s modern urban lifestyle. The trip includes iconic sites like Qutub Minar and Red Fort, as well as the vibrant markets of Delhi and the modern shopping and entertainment complexes in Gurgaon.', 'Delhi&Gurgaon'),
(5, 'Kolkata', 'This itinerary covers Kolkata’s colonial heritage, spiritual landmarks, vibrant culture, and traditional Bengali cuisine, offering a balanced mix of history, religion, and local experiences.', 'Kolkata');

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
(1, 1, 'Ahmedabad Cultural Exploration', '09/10/2024', '09/21/2024', '1500.00', '20', 'Day 1: Arrival and Old Ahmedabad|08:00 AM - Arrival at Sardar Vallabhbhai Patel International Airport|09:30 AM - Check-in at Hyatt Regency Ahmedabad|11:00 AM - Visit Sabarmati Ashram (Gandhi Ashram)|01:00 PM - Lunch at Agashiye (Traditional Gujarati Thali)|03:00 PM - Explore the historic Jama Masjid|05:00 PM - Walk through Manek Chowk (Evening Market)|07:00 PM - Dinner at Vishalla Restaurant (Traditional Gujarati Cuisine)|09:00 PM - Return to Hyatt Regency Ahmedabad|Day 2: Heritage and Architecture|08:00 AM - Breakfast at the Hotel|09:00 AM - Visit the Adalaj Stepwell|11:00 AM - Tour the Calico Museum of Textiles|01:00 PM - Lunch at Swati Snacks (Famous for Local Delicacies)|03:00 PM - Explore the Sidi Saiyyed Mosque (Famous for its intricate stone lattice work)|05:00 PM - Visit Kankaria Lake (Boating, Zoo, and Mini-Train)|07:30 PM - Dinner at Rajwadu (Theme Restaurant with Folk Performances)|09:30 PM - Return to Hyatt Regency Ahmedabad|Day 3: Modern Ahmedabad and Departure|08:00 AM - Breakfast at the Hotel|09:00 AM - Visit the Gujarat Science City (IMAX Theater, Planetarium, and Hall of Space)|12:00 PM - Lunch at The Green House (Cafe with a mix of Gujarati and Continental dishes)|02:00 PM - Visit the Sarkhej Roza (Historic Architectural Complex)|04:00 PM - Shopping at Law Garden Night Market (Handicrafts and Textiles)|06:00 PM - Check out from the Hotel|07:00 PM - Transfer to Sardar Vallabhbhai Patel International Airport|09:00 PM - Flight Departure\n'),
(2, 2, 'Bangalore Urban and Cultural Retreat', '09/10/2024', '09/21/2024', '1700.00', '10', 'Day 1: Arrival and Central Bangalore|08:00 AM - Arrival at Kempegowda International Airport|09:30 AM - Check-in at The Leela Palace Bangalore|11:00 AM - Visit Lalbagh Botanical Garden|01:00 PM - Lunch at Mavalli Tiffin Room (MTR) (Traditional South Indian Cuisine)|03:00 PM - Explore Bangalore Palace|05:00 PM - Walk around Cubbon Park and Vidhana Soudha (Karnataka State Legislature)|07:00 PM - Dinner at Karavalli (Authentic Coastal Cuisine)|09:00 PM - Return to The Leela Palace Bangalore|Day 2: Heritage and Technology|08:00 AM - Breakfast at the Hotel|09:00 AM - Visit ISKCON Temple Bangalore|11:00 AM - Explore the National Gallery of Modern Art|01:00 PM - Lunch at The Only Place (Famous for Continental and American Cuisine)|03:00 PM - Visit Visvesvaraya Industrial and Technological Museum|05:00 PM - Explore the Commercial Street (Shopping Hub)|07:30 PM - Dinner at Toit (Popular Microbrewery and Pub)|09:30 PM - Return to The Leela Palace Bangalore|Day 3: Nature and Departure|07:30 AM - Early Breakfast at the Hotel|08:30 AM - Day Trip to Nandi Hills (Hill Station near Bangalore)|10:00 AM - Explore the Hilltop Temple and Enjoy Panoramic Views|01:00 PM - Lunch at a Local Restaurant in Nandi Hills|03:00 PM - Return to Bangalore|05:00 PM - Visit the Tipu Sultan’s Summer Palace|06:30 PM - Check out from the Hotel|07:30 PM - Transfer to Kempegowda International Airport|09:30 PM - Flight Departure\n'),
(3, 3, 'Chennai Cultural and Coastal Getaway ', '09/10/2024', '09/21/2024', '2400', '15', 'Day 1: Historical and Religious Landmarks|08:00 AM - Arrival at Chennai International Airport|09:30 AM - Check-in at ITC Grand Chola, Chennai|11:00 AM - Visit Kapaleeshwarar Temple (Famous Dravidian-style temple)|01:00 PM - Lunch at Murugan Idli Shop (Traditional South Indian Breakfast)|03:00 PM - Visit San Thome Basilica (One of the 12 Apostles of Jesus Christ’s tomb)|05:00 PM - Walk along Marina Beach (One of the longest urban beaches in the world)|07:00 PM - Dinner at Dakshin, ITC Grand Chola (Traditional South Indian cuisine)|09:00 PM - Return to ITC Grand Chola for the night|Day 2: Cultural Exploration and Shopping|08:00 AM - Breakfast at the Hotel|09:00 AM - Visit Fort St. George (Historical British fortress)|11:30 AM - Tour the Government Museum (Oldest museum in India, with archaeological and art collections)|01:30 PM - Lunch at Annalakshmi (Popular vegetarian restaurant)|03:00 PM - Explore Parry’s Corner and Sowcarpet (Shopping for traditional goods and fabrics)|05:30 PM - Visit Valluvar Kottam (Monument dedicated to poet-saint Thiruvalluvar)|07:30 PM - Dinner at Benjarong (Famous for South-East Asian cuisine)|09:00 PM - Return to ITC Grand Chola for the night|Day 3: Day Trip to Mahabalipuram and Departure|07:30 AM - Early Breakfast at the Hotel|08:30 AM - Day trip to Mahabalipuram (UNESCO World Heritage Site, famous for rock-cut temples and sculptures)|10:00 AM - Visit Shore Temple and Arjuna’s Penance (Historic landmarks)|01:00 PM - Lunch at Moonrakers Restaurant (Seafood restaurant in Mahabalipuram)|03:00 PM - Explore Pancha Rathas (Five Rathas) and Krishna’s Butterball|05:00 PM - Return to Chennai|07:00 PM - Check out from the Hotel|08:30 PM - Transfer to Chennai International Airport for departure\r\n'),
(4, 4, 'Delhi & Gurgaon Urban Exploration', '09/10/24', '09/21/24', '1800', '15', 'Day 1: Historical Delhi|08:00 AM - Arrival at Indira Gandhi International Airport, Delhi|09:30 AM - Check-in at The Imperial Hotel, New Delhi|11:00 AM - Visit India Gate and Rajpath (National War Memorial)|12:30 PM - Lunch at Saravana Bhavan (Famous South Indian Vegetarian Restaurant)|02:00 PM - Explore Qutub Minar (UNESCO World Heritage Site)|04:00 PM - Visit Humayun’s Tomb (Another UNESCO Heritage Site)|06:00 PM - Stroll through Lodhi Gardens|07:30 PM - Dinner at Indian Accent (Award-winning fine dining restaurant)|09:00 PM - Return to The Imperial Hotel for the night|Day 2: Old Delhi and Connaught Place|08:00 AM - Breakfast at the Hotel|09:00 AM - Visit Red Fort (Historic Mughal fort and UNESCO World Heritage Site)|11:00 AM - Explore Jama Masjid (One of the largest mosques in India)|12:30 PM - Lunch at Karim’s in Chandni Chowk (Famous for Mughlai cuisine)|02:00 PM - Rickshaw ride through Chandni Chowk market|03:30 PM - Visit Raj Ghat (Memorial of Mahatma Gandhi)|05:00 PM - Shopping and walking around Connaught Place (Central Delhi shopping and food hub)|07:30 PM - Dinner at Pind Balluchi (North Indian cuisine with traditional village ambiance)|09:00 PM - Return to The Imperial Hotel for the night|Day 3: Gurgaon - Modern Urban Experience|08:00 AM - Early Breakfast at the Hotel|09:00 AM - Drive to Gurgaon (Approx. 1 hour from central Delhi)|10:00 AM - Check-in at The Oberoi, Gurgaon|11:00 AM - Visit Kingdom of Dreams (India’s first live entertainment, theater, and leisure destination)|01:30 PM - Lunch at Cyber Hub (A trendy complex with a variety of restaurants and cafes)|03:00 PM - Explore Ambience Mall (One of India’s largest malls for shopping and leisure activities)|05:00 PM - Visit Aravalli Biodiversity Park for an evening nature walk|07:30 PM - Dinner at Farzi Café (Modern Indian cuisine with a twist)|09:30 PM - Check out from The Oberoi and head to the airport for departure\r\n'),
(5, 5, 'Kolkata - Cultural Heritage & Colonial Charm', '09/10/24', '09/21/24', '1400', '25', 'Day 1: Exploring Colonial Kolkata|08:00 AM - Arrival at Netaji Subhas Chandra Bose International Airport, Kolkata|09:30 AM - Check-in at The Oberoi Grand, Kolkata|11:00 AM - Visit Victoria Memorial (Iconic British-era monument and museum)|01:00 PM - Lunch at Peter Cat (Famous for its Chelo Kebab)|02:30 PM - Visit St. Paul’s Cathedral (19th-century Anglican Cathedral)|04:00 PM - Explore Indian Museum (The largest and oldest museum in India)|06:00 PM - Walk through Park Street (Famous for its vibrant nightlife, cafes, and colonial-era buildings)|07:30 PM - Dinner at Mocambo (Classic Continental cuisine)|09:00 PM - Return to The Oberoi Grand for the night|Day 2: Culture, Temples, and Food|08:00 AM - Breakfast at the Hotel|09:00 AM - Visit Howrah Bridge (Iconic cantilever bridge over the Hooghly River)|10:30 AM - Visit Dakshineswar Kali Temple (Dedicated to Goddess Kali, famous for its spiritual history)|12:30 PM - Lunch at Bhojohori Manna (Traditional Bengali cuisine)|02:00 PM - Visit Belur Math (Spiritual headquarters of the Ramakrishna Mission)|04:00 PM - Explore Kumartuli (Potter’s quarter, famous for making clay idols of gods and goddesses)|06:30 PM - Sunset boat ride along the Hooghly River|08:00 PM - Dinner at 6 Ballygunge Place (Bengali fine dining restaurant)|09:30 PM - Return to The Oberoi Grand for the night|Day 3: Markets, Gardens, and Departure|08:00 AM - Early Breakfast at the Hotel|09:00 AM - Visit Marble Palace (19th-century mansion known for its stunning architecture and art collection)|11:00 AM - Explore New Market (Shopping for traditional handicrafts, sarees, and street food)|01:00 PM - Lunch at Flurys (Iconic tearoom known for cakes, pastries, and continental cuisine)|02:30 PM - Visit the Eden Gardens (Famous cricket stadium)|04:00 PM - Stroll through the Botanical Gardens (Home to the Great Banyan Tree)|06:30 PM - Check out from the Hotel|07:30 PM - Transfer to Netaji Subhas Chandra Bose International Airport for departure\r\n');

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
