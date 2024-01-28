-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 07:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `government  records`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('StoryTeller', 'Ngwono123');

-- --------------------------------------------------------

--
-- Table structure for table `completed_projects`
--

CREATE TABLE `completed_projects` (
  `user_id` int(11) NOT NULL,
  `Project Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Project Location` varchar(255) NOT NULL,
  `Implementing Agency` varchar(255) NOT NULL,
  `Project Duration` varchar(255) NOT NULL,
  `Budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed_projects`
--

INSERT INTO `completed_projects` (`user_id`, `Project Title`, `Description`, `Project Location`, `Implementing Agency`, `Project Duration`, `Budget`) VALUES
(1, 'construction of classroom\r\n\r\n', 'The project aimed to education sector in the Rongai constituency in Nakuru county, benefiting local communities and promoting brighter and excellent minds.', 'Mang\'u in Rongai constituency, Nakuru County', 'Ministry of Infrastructure and Development', 'December 2022 - December 2023', 'ksh. 50,000,000\r\n'),
(2, 'construction of classroom\r\n\r\n', 'The project aimed to education sector in the Rongai constituency in Nakuru county, benefiting local communities and promoting brighter and excellent minds.', 'Mang\'u in Rongai constituency, Nakuru County', 'Ministry of Infrastructure and Development', 'December 2022 - December 2023', 'ksh. 50,000,000\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Toto Lavender', 'lavender@gmail.com', '', 'Toto just wants to know about jobs used to be set for youths in the local places, azin zilienda wapi'),
(2, 'Victoria Amanda', 'victoriaamanda@gmail.com', '', 'Amanda penjo apenja ni ere ngima mayom manusingo nwa yawa.'),
(3, 'bob watata', 'bob@gmail.com', '', 'help us ordinary citizen to make the government on toes to perfome their promises\r\n'),
(4, 'Toto Vanessah', 'totovanessah@gmail.com', '', 'princess is curious. ni lini tutatetewa'),
(5, 'Toto Lavender', 'lavender@gmail.com', '', 'what happened to kimwarer and aror dam. gava hutend kuficha these caprits');

-- --------------------------------------------------------

--
-- Table structure for table `government_projects`
--

CREATE TABLE `government_projects` (
  `user_id` int(10) NOT NULL,
  `Project Title` varchar(1000) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Project Location` varchar(1000) NOT NULL,
  `Implementing Agency` varchar(1000) NOT NULL,
  `Project Duration` varchar(1000) NOT NULL,
  `Budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government_projects`
--

INSERT INTO `government_projects` (`user_id`, `Project Title`, `Description`, `Project Location`, `Implementing Agency`, `Project Duration`, `Budget`) VALUES
(1, 'construction of mega dams ', 'will be done on masinga dam to facilitate the increase of food production in Kenya ', 'kiambu county', 'Ngo\'s', '3months', '50million'),
(2, 'Electrifying Kenya', ' recovering home in Kenya is in the process of having electricity', 'Kenyan home', 'Kenya power', '1year', '45million'),
(19, 'reforestation', '\r\nUnderstanding the importance of reforestation is crucial. The world we live in would not be the same if it weren’t for the forests spread across the globe on every continent because they play a vital role in our survival.\r\n\r\nBesides restoring forests, preventing excess greenhouse gas emissions and reversing biodiversity loss are the primary aims of reforestation.\r\n\r\nAnd the reason why we should grasp the importance of reforestation; here are some stats that describe the criticality of the situation.', 'along Ngong road, raila odinga road and tom mboya and waiyaki way in nairobi', 'environmental conservation authorities', '7month', 'ksh. 450000'),
(21, 'building of express way', 'this road wil be build from Westland to Mlolongo in Nairobi. This road will be used to reduce vihicle jam in the cbd', 'nairobi county', 'national government', '3yrs', '10million'),
(23, 'Kazi Mashinani', 'this job will give employment opportunities to the youths all over the country', 'all counties in kenya', 'county government agencies', '5yrs', '5million');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilephoto` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `fullname`, `email`, `profilephoto`, `password`) VALUES
(15, 'Victoria Amanda', 'amanda@gmail.com', '7-Figure1-1.png', 'amanda'),
(16, 'felix odhiambo', 'felixngwono@gmail.com', 'about.jpg', 'marley'),
(17, 'Nicole Atieno', 'nicky@gmail.com', 'about.jpg', 'Nicky'),
(18, 'oduor nyamango', 'nyamango@gmail.com', 'about.jpg', 'oduor'),
(19, 'lawrence ogola', 'ogola@gmail.com', 'contact.webp', 'ogola');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_projects`
--

CREATE TABLE `upcoming_projects` (
  `user_id` int(10) NOT NULL,
  `Project Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Project Location` varchar(255) NOT NULL,
  `Implementing Agency` varchar(255) NOT NULL,
  `Project Duration` varchar(50) NOT NULL,
  `Budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_projects`
--

INSERT INTO `upcoming_projects` (`user_id`, `Project Title`, `Description`, `Project Location`, `Implementing Agency`, `Project Duration`, `Budget`) VALUES
(1, 'road construction', 'construction of Maseno-Kombewa road', 'seme sub-county, Kisumu county', 'NCA', '4months', '5million'),
(2, 'road construction', 'construction of Maseno-Kombewa road', 'seme sub-county, Kisumu county', 'NCA', '4months', '5million'),
(3, 'road construction', 'construction of Maseno-Kombewa road', 'seme sub-county, Kisumu county', 'NCA', '4months', '5million'),
(4, 'health care', 'there will be the construction of a health care service in Oyugis in Homabay County', 'Homa bay county', 'county government', '4months', '10million\r\n'),
(5, 'health care', 'there will be the construction of a health care service in Oyugis in Homabay County', 'Homa bay county', 'county government', '4months', '10million\r\n'),
(6, 'construction of church', 'there will be construction of a church for service in Kangemi in Nairobi county', 'Kangemi', 'Community development fund agency', '2months', 'ksh. 5000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `government_projects`
--
ALTER TABLE `government_projects`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keyword` (`keyword`);

--
-- Indexes for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed_projects`
--
ALTER TABLE `completed_projects`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `government_projects`
--
ALTER TABLE `government_projects`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
