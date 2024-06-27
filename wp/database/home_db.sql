-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 07:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
('BcjKNX58e4x7bIqIvxG7', 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permits`
--

CREATE TABLE `permits` (
  `permitId` int(50) NOT NULL,
  `builderName` varchar(40) NOT NULL,
  `licenseNum` int(50) NOT NULL,
  `buildCon` int(40) NOT NULL,
  `homAddr` varchar(100) NOT NULL,
  `ConstrAddr` varchar(100) NOT NULL,
  `govId` varchar(100) NOT NULL,
  `buildingMap` varchar(100) NOT NULL,
  `propDescr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permits`
--

INSERT INTO `permits` (`permitId`, `builderName`, `licenseNum`, `buildCon`, `homAddr`, `ConstrAddr`, `govId`, `buildingMap`, `propDescr`) VALUES
(1, 'Ranmet', 1234565456, 0, '1 Big Red Avenue', '48 Beulah Drive', 'fgged.jpeg', '.jpeg', '1 Big Red Avenue scarborough1 Big Red Avenue scarborough1 Big Red Avenue scarborough1 Big Red Avenue scarborough1 Big Red Avenue scarborough1 Big Red Avenue scarborough1 Big Red Avenue scarborough1 Big Red Avenue scarborough'),
(2, 'adf', 23456, 345, 'fgsg', 'ageeag', 'eag', 'aeg', 'aegae');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `offer` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `furnished` varchar(50) NOT NULL,
  `bhk` varchar(10) NOT NULL,
  `deposite` varchar(10) NOT NULL,
  `bedroom` varchar(10) NOT NULL,
  `bathroom` varchar(10) NOT NULL,
  `balcony` varchar(10) NOT NULL,
  `carpet` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `total_floors` varchar(2) NOT NULL,
  `room_floor` varchar(2) NOT NULL,
  `loan` varchar(50) NOT NULL,
  `lift` varchar(3) NOT NULL DEFAULT 'no',
  `security_guard` varchar(3) NOT NULL DEFAULT 'no',
  `play_ground` varchar(3) NOT NULL DEFAULT 'no',
  `garden` varchar(3) NOT NULL DEFAULT 'no',
  `water_supply` varchar(3) NOT NULL DEFAULT 'no',
  `power_backup` varchar(3) NOT NULL DEFAULT 'no',
  `parking_area` varchar(3) NOT NULL DEFAULT 'no',
  `gym` varchar(3) NOT NULL DEFAULT 'no',
  `shopping_mall` varchar(3) NOT NULL DEFAULT 'no',
  `hospital` varchar(3) NOT NULL DEFAULT 'no',
  `school` varchar(3) NOT NULL DEFAULT 'no',
  `market_area` varchar(3) NOT NULL DEFAULT 'no',
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `image_04` varchar(50) NOT NULL,
  `image_05` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `property_name`, `address`, `price`, `type`, `offer`, `status`, `furnished`, `bhk`, `deposite`, `bedroom`, `bathroom`, `balcony`, `carpet`, `age`, `total_floors`, `room_floor`, `loan`, `lift`, `security_guard`, `play_ground`, `garden`, `water_supply`, `power_backup`, `parking_area`, `gym`, `shopping_mall`, `hospital`, `school`, `market_area`, `image_01`, `image_02`, `image_03`, `image_04`, `image_05`, `description`, `date`) VALUES
('4kjMdXZROhGxoxGYH6Zr', 'j8RoHOrxdgTt4NKSTGcQ', 'Bungalow', '1 big red Avenue, Toronto', '5000', 'house', 'sale', 'ready to move', 'furnished', '1', '0', '1', '1', '1', '10000', '10', '2', '1', 'available', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'xpItkfg6zyjG72Q0IyCQ.jpeg', 'c63vBfyANCuKVoVXGPbv.jpeg', 'Fmo20Zop6dak5SRh0rQk.jpeg', '', '', 'This brand new 1-bedroom, 1-bathroom condominium is a stunning lower level home that provides privacy and is surrounded by nature. The modern and luxurious design features high-end finishes with attention to detail throughout the house. You will love the comfort and warmth provided by the radiant heat floors during the colder months. The concrete construction of the house ensures a peaceful and quiet living experience with minimal outside noise. Backing onto the Castor River provides a tranquil and picturesque backdrop to your daily life. This home comes with all the modern amenities you could ask for, including in-suite laundry, parking, and ample storage space. The location is prime, in a growing community with easy access to major highways, shopping, dining, and entertainment. Photos are from a Le Castor unit and have been virtually staged. Exteriors virtually enhanced.', '2023-11-23'),
('iJo4uiAqw4sZOmi9bULr', 'j8RoHOrxdgTt4NKSTGcQ', 'Semi Detatched', '5 Big Red Ave , Toronto', '10000', 'house', 'sale', 'ready to move', 'furnished', '1', '0', '1', '1', '0', '15000', '5', '2', '1', 'available', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'CdiQl6sRafUVQnHbRqvq.jpeg', 'FrRxgk4LgjR20DbQ1JVt.jpg', '', '7PTXUISwXw7LzDtwlfGQ.jpeg', '', 'This brand new 1-bedroom, 1-bathroom condominium is a stunning lower level home that provides privacy and is surrounded by nature. The modern and luxurious design features high-end finishes with attention to detail throughout the house. You will love the comfort and warmth provided by the radiant heat floors during the colder months. The concrete construction of the house ensures a peaceful and quiet living experience with minimal outside noise. Backing onto the Castor River provides a tranquil and picturesque backdrop to your daily life. This home comes with all the modern amenities you could ask for, including in-suite laundry, parking, and ample storage space. The location is prime, in a growing community with easy access to major highways, shopping, dining, and entertainment. Photos are from a Le Castor unit and have been virtually staged. Exteriors virtually enhanced.', '2023-11-23'),
('5gcvsoA0FPwjw44cpHmm', 'j8RoHOrxdgTt4NKSTGcQ', '2-Story 4-Bedroom House', '125 King Street, Toronto', '1500000', 'house', 'sale', 'ready to move', 'furnished', '4', '0', '4', '1', '1', '10', '1', '2', '2', 'available', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'NQ4kPlx92c5Xqrg1a5jV.jpg', '4q0swhvezU3Jm9wzdUPN.jpg', 'otI2yHNAHfroFU4mJqXa.jpg', 'vvmhAywbHszzQuzO4QB9.jpg', 'G9VJWqzuMNnU2jInrfHf.jpg', 'A turret-styled bay window is showcased on a stone wall, while dormers and columns combine both country and traditional styles on this 4-bed home plan. \r\nThe foyer has a 2-story (18&#39;-high) ceiling and opens to the dining room on the left and to the great room ahead.\r\nFrench doors from both the great room and master suite access the 26&#39;8&#34; wide and 7&#39; deep rear porch.\r\nThe master bedroom has a 10&#39;6&#34; tray ceiling.\r\nA U-shaped staircase takes you upstairs where three bedrooms share a bathroom and there is 374 square feet of expansion space in the bonus room.', '2023-11-24'),
('Zukz5o6qBsQmgLUgXaBx', 'j8RoHOrxdgTt4NKSTGcQ', 'Mansion', 'Orchard Park, Brampton', '150000', 'house', 'sale', 'ready to move', 'furnished', '5', '0', '5', '5', '1', '200', '1', '3', '2', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'kTj7jUftaMZ6CZLm8Cw6.jpg', 'M9c1XAEhYUyHUAPgWJMF.jpg', 't8BcVHKk3rxnBtZDK0h6.jpg', 'daxtG0jFLVMZfr7ARru6.jpg', 'izkmMDhFjDDNObiSo4BP.jpg', 'Experience unparalleled luxury in this 5-bedroom, 5-bathroom bungalow. Nestled in a serene location, the open-concept design seamlessly connects the living room, dining area, and gourmet kitchen. Large windows flood the interior with natural light, creating a warm and inviting atmosphere. The master suite is a sanctuary of luxury, boasting a spacious layout, walk-in closet, and a spa-like ensuite bathroom. The remaining bedrooms are equally well-appointed, providing comfort and privacy. With 5 bathrooms featuring modern fixtures, convenience is paramount. Beyond, a sprawling backyard with lush landscaping offers a perfect setting for outdoor activities. This bungalow is the epitome of refined living.', '2023-11-26'),
('WsUQDrfwkuWbFqetpGfO', 'a2xy14jPWsksWWg3h8fy', '2 Bedroom Apartment ', '125 King street , Toronto', '2500', 'Flat', 'Rent', 'Ready to Move', 'Furnished', '2', '1200', '2', '2', '1', '12', '2', '1', '1', 'Not Available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'VA02O9l1PHSMRr5oCH25.webp', 'RmwUWWXUxRS32cx9BFYt.webp', 'BfE8qsGpip3sEe9QMQnj.webp', 'Y5ayYyfmDatWXUZ2gqj4.webp', 'MTdNkOPCc32jUyhzxeRn.webp', 'Rosebury Square offers large spacious luxury apartments in the heart of city. Only a ten minute walk away from Eglinton West subway, Glencairn subway & the LRT. Six Minute drive to Yorkdale Mall! Enjoy living steps away from the onsite grocery store (Sobeys), pharmacy and daycare.\r\n\r\n', '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `property_id`, `sender`, `receiver`, `date`) VALUES
('w2o1fWiIsQ7ph5pKhdw8', '4kjMdXZROhGxoxGYH6Zr', 'a2xy14jPWsksWWg3h8fy', 'j8RoHOrxdgTt4NKSTGcQ', '2023-11-23'),
('idalWZ2CLDcd3gF1rRIZ', '4kjMdXZROhGxoxGYH6Zr', 'j8RoHOrxdgTt4NKSTGcQ', 'j8RoHOrxdgTt4NKSTGcQ', '2023-11-23'),
('UcKjPO3HXfIo2qaWJKlE', 'Zukz5o6qBsQmgLUgXaBx', 'j8RoHOrxdgTt4NKSTGcQ', 'j8RoHOrxdgTt4NKSTGcQ', '2023-11-29'),
('vjPBPdq78ls3cxIBma7r', '5gcvsoA0FPwjw44cpHmm', 'j8RoHOrxdgTt4NKSTGcQ', 'j8RoHOrxdgTt4NKSTGcQ', '2023-12-05'),
('P9I83b2hMmJ1X4M3nrTc', '5gcvsoA0FPwjw44cpHmm', 'a2xy14jPWsksWWg3h8fy', 'j8RoHOrxdgTt4NKSTGcQ', '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `property_id`, `user_id`) VALUES
('mJUU3Qxgl7qNBbIupeF9', 'Zukz5o6qBsQmgLUgXaBx', 'j8RoHOrxdgTt4NKSTGcQ'),
('3MQENxGNqry7UhOHHVhi', '5gcvsoA0FPwjw44cpHmm', 'j8RoHOrxdgTt4NKSTGcQ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
('a2xy14jPWsksWWg3h8fy', 'Ranmeet Singh', '123456789', 'ranmeetsingh@hothome.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('j8RoHOrxdgTt4NKSTGcQ', 'Ayush', '123456789', 'ayush@hothome.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('HBDeclsXyDBkc4ccf93e', 'harpreet', '2345678765', 'harpreet@hothome.com', '1f8ac10f23c5b5bc1167bda84b833e5c057a77d2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permits`
--
ALTER TABLE `permits`
  ADD PRIMARY KEY (`permitId`,`licenseNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permits`
--
ALTER TABLE `permits`
  MODIFY `permitId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
