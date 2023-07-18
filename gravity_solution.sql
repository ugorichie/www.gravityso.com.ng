-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 06:12 PM
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
-- Database: `gravity_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL,
  `admin_firstname` varchar(45) NOT NULL,
  `admin_lastname` varchar(45) NOT NULL,
  `admin_DOB` date NOT NULL,
  `admin_phone` varchar(45) NOT NULL,
  `admin_gender` enum('male','female','','') NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_password`, `admin_firstname`, `admin_lastname`, `admin_DOB`, `admin_phone`, `admin_gender`, `state_id`) VALUES
(1, 'ugo@gmail.com', 'ugo1234', 'ugo', 'ugo-ugo', '2023-06-11', '07062353627', 'male', 4);

-- --------------------------------------------------------

--
-- Table structure for table `collab`
--

CREATE TABLE `collab` (
  `collab_id` int(11) NOT NULL,
  `collab_title` varchar(100) NOT NULL,
  `collab_role` varchar(100) NOT NULL,
  `collab_address` varchar(250) NOT NULL,
  `engineer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `collab`
--

INSERT INTO `collab` (`collab_id`, `collab_title`, `collab_role`, `collab_address`, `engineer_id`) VALUES
(1, 'Jiji Rooftop Hotels', 'site engineer', '15/17 altitude bant avenue, ikeja allen avenue. LG20211 Nigeria', 16);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `commenter_email` varchar(100) NOT NULL,
  `comment_message` varchar(255) DEFAULT NULL,
  `comment_time` date NOT NULL DEFAULT current_timestamp(),
  `rating` int(11) DEFAULT NULL,
  `engineer_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `commenter_email`, `comment_message`, `comment_time`, `rating`, `engineer_id`, `admin_id`) VALUES
(6, 'ademan@yahoo.com', 'Johns handy work was great, i truly recommend his craft', '2023-07-05', 5, 16, NULL),
(7, 'agness@gmail.com', 'He was rude to  me on first meeting, i really do not wish to deal with such engineer anymore.', '2023-07-05', 1, 16, NULL),
(8, 'princess@gmail.com', 'Quite a understanding engineer he is, i had a smooth project with him overseeing all sectors', '2023-07-05', 4, 16, NULL),
(9, 'vivi@gmail.com', 'This is some superb work list you got there Mr John! im highly impressed.\r\nwould contact you asap via your mail, I have some projects for you', '2023-07-05', 3, 16, NULL),
(10, 'ugo@yahoo.com', 'This engineer lady is not someone you want to hand your building projects to, rude and sassy. \r\nZero customer service and management skill is second to non from below', '2023-07-05', 2, 15, NULL),
(11, 'Gabrieldey@yahoo.com', 'Excellent and reserved with her duties, delligent to making you building plans work.\r\nI\'d subscribe to her, everyday and everytime', '2023-07-05', 5, 15, NULL),
(12, 'jermy@gmail.com', 'just okay to work with, the Art hub was a success, it took 5months instead of the supposed 9months because she was dilligent to the practice', '2023-07-05', 5, 15, NULL),
(14, 'Caspian@yahoo.com', 'i am not supprised he has no work currently on, he stood me up  on our first meeting, totally unacceptable. You should do better', '2023-07-05', 0, 14, NULL),
(15, 'aja@yahoo.com', 'This has to be one of the most influential engineers i know \r\nHis works and collaborations are excellent. kudos!', '2023-07-13', 4, 18, NULL),
(16, 'aka@yahoo.com', 'The Hut Resort is a great work by you Richard. i look forward to having more works with you in the nearest future.\r\nNice word', '2023-07-13', 4, 18, NULL),
(17, 'vic@gmail.com', 'might look old but really experienced, i love his calmness and agility to work.\r\nOur first meeting was a nice once. Thanks ', '2023-07-13', 4, 19, NULL),
(18, 'kay@yahoo.com', ' Castle Sea Hotels for so long has been a standing project worthy of admiration, i commend you and look forward to having more works with you ma\'am', '2023-07-14', 4, 22, NULL),
(19, 'ugy@yahoo.com', 'You are simply the best Engr Favour', '2023-07-14', 4, 22, NULL),
(20, 'joe@gmail.com', 'I recommend her!!', '2023-07-14', 5, 22, NULL),
(21, 'gyal@yahoo.com', 'Special Designer. Thats all i can say about Engr Johnson Jack.\r\nExceptionally brilliant', '2023-07-14', 4, 17, NULL),
(22, 'mrJames@yahoo.com', 'Johnson, good job with my project, at first i doubted you but you proved me wrong. i look forward to having more projects with you.', '2023-07-14', 5, 17, NULL),
(23, 'fred@yahoo.com', 'Great Work Precious. i enjoyed every bit of our project session. ', '2023-07-14', 4, 21, NULL),
(24, 'meek@yahoo.com', 'i solely recomend Engineer precious to whatever project there is', '2023-07-14', 5, 21, NULL),
(25, 'lordzay@yahoo.com', 'i look forward to working with you again. deligent and dedicated engineer', '2023-07-14', 4, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `engineerdetails`
--

CREATE TABLE `engineerdetails` (
  `engineer_id` int(11) NOT NULL,
  `engineer_firstname` varchar(45) NOT NULL,
  `engineer_lastname` varchar(45) NOT NULL,
  `engineer_othername` varchar(45) DEFAULT NULL,
  `engineer_gender` enum('male','female') NOT NULL,
  `engineer_YOE` enum('0-2','3-5','6-8','10>') NOT NULL,
  `engineer_DOB` date NOT NULL,
  `engineer_email` varchar(100) NOT NULL,
  `engineer_password` varchar(100) NOT NULL,
  `engineer_phone` varchar(45) NOT NULL,
  `engineer_image` varchar(255) NOT NULL,
  `role` enum('engineer','admin') NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `engineerdetails`
--

INSERT INTO `engineerdetails` (`engineer_id`, `engineer_firstname`, `engineer_lastname`, `engineer_othername`, `engineer_gender`, `engineer_YOE`, `engineer_DOB`, `engineer_email`, `engineer_password`, `engineer_phone`, `engineer_image`, `role`, `state_id`) VALUES
(6, 'adenike', 'Tiamiyu', 'Judith', 'female', '3-5', '2023-06-15', 'ade@gmail.com', '123456789', '080236728288', '', 'engineer', 18),
(13, 'Tosinn', 'Tosino', 'Tosin', 'male', '0-2', '2023-06-08', 'Tosin1234@gmail.com', 'Tosin1234', '09034920293', '', 'admin', 25),
(14, 'E. Aristotole', 'Ifeanyi', '', 'male', '6-8', '2023-06-08', 'Aris12@gmail.com', '12345678', '08026738273', '1688398554teacher3.jpg', 'engineer', 4),
(15, 'C. Onyejiaka', 'Ada', 'Adaeze', 'female', '6-8', '1993-07-18', 'ada@gmail.com', '$2y$10$2tJ6Rq6g/SE4N/EpP2QwS.FS56OLg/DjEMT6MzNP2ywhQrjE8olh2', '09090909090', '1688400898IMG_0164.JPG', 'engineer', 4),
(16, 'johna', 'Emaka', 'Mbah', 'male', '0-2', '2023-06-03', 'john@gmail.com', '$2y$10$7Noc0BYaWDaIbVorkfQheu/t2aCJvuaG9/fXQigsAxBUzaVsbZ30O', '09090909090', '1689344571pass8.jpg', 'engineer', 1),
(17, 'O. Jackma', 'Johnson', 'jacksom', 'male', '3-5', '2023-05-29', 'jack@gmail.com', '$2y$10$f.eO6EWtrlXAU/lLwJG94eb6X8a0DlJpVPtbbdvnV4HS6g9/DBDfi', '+2349023234321', '1688398554teacher3.jpg', 'engineer', 5),
(18, 'Richard', 'Raymond', 'Carl', 'male', '3-5', '1991-02-12', 'rich@gmail.com', '$2y$10$lIzhuP8kWkMxqj/iDYWcIu29zbiKy2DlEZZp1cQLFYHOU90t7etsC', '07028371623', '1689256083pass3.jpg', 'engineer', 5),
(19, 'Vincent', 'W. Enyama', 'Gidi', 'male', '3-5', '1992-07-13', 'vincent@gmail.com', '$2y$10$gj8qnPFem58UVH6/LEbI4eaB29R.sNLo1tB1K0nqG.mbO5d/OrLTS', '09012651265', '1689268700pass6.jpg', 'engineer', 12),
(21, 'Precious', 'I. Oguchi', 'Precious', 'female', '6-8', '1984-07-12', 'precious@gmail.com', '$2y$10$RAZpe8CEvyrlw2OFmL8vGOJ4QUBqzPiGBgDRNzm9iGCXodAml4YhS', '081362723632', '1689337945pass11.jpg', 'engineer', 3),
(22, 'Favour', 'Patience O.', 'Ray', 'male', '0-2', '1992-07-14', 'favour@gmail.com', '$2y$10$zl.7xZ4uGhEkaSLQB13tIevu4Ym/1LqU46LWKaBNefomHu5cq4d3O', '09037827364', '1689309736teacher1.jpg', 'engineer', 25),
(23, 'ugochukwu', 'oguchi', 'richard', 'male', '0-2', '1995-07-27', 'ugoebukaoguchi@gmail.com', '$2y$10$BaZGCkEv31ewLLXEBWxLuu5uOI9HykK8u9j61DNEA4bHFhRSGNqEm', '07062353627', '', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `engineerwork`
--

CREATE TABLE `engineerwork` (
  `engineeer_work_id` int(11) NOT NULL,
  `work_image` varchar(500) NOT NULL,
  `work_title` varchar(50) NOT NULL,
  `work_description` varchar(500) NOT NULL,
  `engineer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `engineerwork`
--

INSERT INTO `engineerwork` (`engineeer_work_id`, `work_image`, `work_title`, `work_description`, `engineer_id`) VALUES
(6, '1689190484caro1.jpg', 'Roven Silver Hotel', 'Roven Silver Hotel sited at Park Avenue Abuja, developed and managed by my team spans through a breadth of 4000sq/km .', 15),
(7, '1689259318im2.jpg', 'Micar Glass Block U.K', 'Micar Block is a UK mass apartment for residential purpose by my team. delivered within a year ', 18),
(8, '1689259788im10.jpg', 'Moil Hut Underground Resort', 'The Underground Resort took about 2 years to complete, spans a breadth of 9000sqKm in the heart of Maiduguri.', 18),
(9, '1689269440im18.jpg', 'Warri Tower Watch', 'A spotlight tower watch for warri indegenes. this was made with imported silk brick and its spans 300sqKm.', 17),
(10, '1689309594im21.jpg', 'Castle Sea Hotel. Lagos', 'The Grey and Gold hotel stands tall at 400ft in the heart of Lagos Island, just beside the Island Lake', 22),
(11, '1689310383im9.jpg', 'Horse Stable Homes Lagos Mainland', 'Horse Stable Homes stands tall at 250ft and spans through a width 4000sqKm and is accessible through all lagos routes', 22),
(12, '1689336793caro2.jpg', 'Chief James Idoghos Homes', 'Chief James Home in Lagos State stands tall at about 600ft in Amster Avenue, Brooks Estate Lagos.', 17),
(13, '1689337175caro3.jpg', 'Square Heights Park.', 'Square Heights Park located in the hearts of Owerri was carefully structured with some imported slabs from Uk.', 17),
(14, '1689337703caro4.jpg', 'Block Mason De Wing', 'A french owned resturant located in Adamawa was my first contract and it spans through the width of 490spKm', 21),
(15, '1689339164im16.jpg', 'WoodBee Glass House', 'Glass House stands tall at 900ft and spans througha width of 670sqKm, located in Nigeria', 21),
(16, '1689345091im5.jpg', 'Chief Pascals Home', 'Chief Pascals Home, an epitome of simplicity and class, stands tall at 400ft in central Abia state. ', 16),
(17, '1689345294im19.jpg', 'Port Cast Umuahia', 'Situated in the hearts of Umuahia, Abia state. A project i designed and supervised with my team.', 16),
(18, '1689345480im17.jpg', 'Eiffel Glass House', 'Stands tall at 910ft in the heart of Lagos Island, Lagos State, carefully developed by my superb team', 16),
(19, '1689345939im11.jpg', 'Had\'marhim Palace', 'A beautiful piece of structure standing tall at 930ft in the Federal Capital Territory Abuja. Imported slated glasses from Australia .', 15);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `engineer_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  `time_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(10) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci COMMENT='States in Nigeria.';

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state`) VALUES
(1, 'Abia State'),
(2, 'Adamawa State'),
(3, 'Akwa Ibom State'),
(4, 'Anambra State'),
(5, 'Bauchi State'),
(6, 'Bayelsa State'),
(7, 'Benue State'),
(8, 'Borno State'),
(9, 'Cross River State'),
(10, 'Delta State'),
(11, 'Ebonyi State'),
(12, 'Edo State'),
(13, 'Ekiti State'),
(14, 'Enugu State'),
(15, 'FCT'),
(16, 'Gombe State'),
(17, 'Imo State'),
(18, 'Jigawa State'),
(19, 'Kaduna State'),
(20, 'Kano State'),
(21, 'Katsina State'),
(22, 'Kebbi State'),
(23, 'Kogi State'),
(24, 'Kwara State'),
(25, 'Lagos State'),
(26, 'Nasarawa State'),
(27, 'Niger State'),
(28, 'Ogun State'),
(29, 'Ondo State'),
(30, 'Osun State'),
(31, 'Oyo State'),
(32, 'Plateau State'),
(33, 'Rivers State'),
(34, 'Sokoto State'),
(35, 'Taraba State'),
(36, 'Yobe State'),
(37, 'Zamfara State');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(11) NOT NULL,
  `sub_date` datetime NOT NULL DEFAULT current_timestamp(),
  `sub_amount` double NOT NULL,
  `expire_date` date NOT NULL,
  `engineer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sub_id`, `sub_date`, `sub_amount`, `expire_date`, `engineer_id`) VALUES
(4, '2023-07-05 19:18:03', 40000, '2024-07-05', 14),
(5, '2023-07-07 15:54:51', 69000, '2012-06-27', 16),
(6, '2023-07-07 15:57:04', 340000, '2024-07-07', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email_UNIQUE` (`admin_email`),
  ADD UNIQUE KEY `admin_phone_UNIQUE` (`admin_phone`),
  ADD KEY `admin state` (`state_id`) USING BTREE;

--
-- Indexes for table `collab`
--
ALTER TABLE `collab`
  ADD PRIMARY KEY (`collab_id`),
  ADD KEY `engineer to collab` (`engineer_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `engineer that got comments_idx` (`engineer_id`),
  ADD KEY `comment given by admin_idx` (`admin_id`),
  ADD KEY `commenter_email_UNIQUE` (`commenter_email`) USING BTREE;

--
-- Indexes for table `engineerdetails`
--
ALTER TABLE `engineerdetails`
  ADD PRIMARY KEY (`engineer_id`),
  ADD UNIQUE KEY `engineer_email_unique` (`engineer_email`) USING BTREE,
  ADD KEY `engineer_phone` (`engineer_phone`) USING BTREE,
  ADD KEY `engineer state` (`state_id`) USING BTREE;

--
-- Indexes for table `engineerwork`
--
ALTER TABLE `engineerwork`
  ADD PRIMARY KEY (`engineeer_work_id`),
  ADD KEY `engineer work relation_idx` (`engineer_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `engineer posting events_idx` (`engineer_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `engineers that subscribe_idx` (`engineer_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collab`
--
ALTER TABLE `collab`
  MODIFY `collab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `engineerdetails`
--
ALTER TABLE `engineerdetails`
  MODIFY `engineer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `engineerwork`
--
ALTER TABLE `engineerwork`
  MODIFY `engineeer_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collab`
--
ALTER TABLE `collab`
  ADD CONSTRAINT `engineer to collab` FOREIGN KEY (`engineer_id`) REFERENCES `engineerdetails` (`engineer_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment given by admin` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `engineer that got comments` FOREIGN KEY (`engineer_id`) REFERENCES `engineerdetails` (`engineer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `engineerwork`
--
ALTER TABLE `engineerwork`
  ADD CONSTRAINT `engineer work relation` FOREIGN KEY (`engineer_id`) REFERENCES `engineerdetails` (`engineer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `engineer posting events` FOREIGN KEY (`engineer_id`) REFERENCES `engineerdetails` (`engineer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `engineers that subscribe` FOREIGN KEY (`engineer_id`) REFERENCES `engineerdetails` (`engineer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
