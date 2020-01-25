-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 07:11 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_at_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_services`
--

CREATE TABLE `add_services` (
  `s_id` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_services`
--

INSERT INTO `add_services` (`s_id`, `title`, `details`) VALUES
('s-001', 'Air Condition', '							The best of the best AC services which not only include air conditioners regular repair but also AC servicing, AC air duct leakage repair, AC cooling repair, AC filter related services, etc. If you are moving into a new house and need your Air conditioners to be installed, we do that too!  Air conditioner Packing, Storing and Moving Service Most of us move into new houses and often find it hard to pack, store and move the AC since its machinery is technical and fragile. Worry no more as our skilled staff is great at handling your air conditioners from the start till the end.\r\n\r\n\r\nWe can unpack it for you, install it, store its spare parts and when itâ€™s time to moving again, we can remove it from the walls, pack it and move it to the new location effortlessly. Regular Maintenance and Repair Regular maintenance is necessary when you use your air conditioners 24/7. It is thus important you hire a professional electrician who specializes in AC repair. Our AC expert electricians are great at minor repairs, adding AC gas, optimizing air cooling and managing other AC related problems.						'),
('s-002', 'Electric Repair ', 'If you are considering an Electric Repair & Maintenance for your home, there are a few things you should be aware of; an Electric Repair & Maintenance is no small task, and the more you know about whatâ€™s available, the better youâ€™ll be able to communicate to your contractor what you expect from the job. MHPT Electric Repair & Maintenanceproviding the range of Electric Repair & Maintenance, changing of wires, replacement of lights, dimmer switch, wall sockets, chandelier lights etcâ€¦Service@Home also providing services for changing or installation Modular Switches, Semi Modular Switches, Light Fitting & Luminaries, MCB And Distribution Box, Wires & Cables.			'),
('s-003', 'Plumbing Works ', 'Plumbing Services as an integral part of all modern day households. Plumbing brings in water into a home, providing convenience and also it serves as drainage and takes waste away from the home. Plumbing work is typically regulated by government agencies and is vital that it functions properly to optimize health and safety. Dishwashers, bathtubs, sinks and showers all rely on proper plumbing Services. A faulty drain line or a leaky faucet may seem like minor problems on the surface, but if either is not fixed correctly, the problem will become larger and more dangerous. Repairing a leaking faucet or shower head, a clogged garbage disposal, a dishwasher that will not drain, or water heater that is not heating are the focus of plumbing projects. Any plumbing installation or repair should be done thoroughly to help insure that future problems will not occur.Plumbing Services are often a result of old pipes and techniques. SErvive@Home Plumbing Services provides services for any plumbing problem and can identify and fix future problems improper 						'),
('s-004', 'Carpentry Works ', 'We can build, repair, carve, install and everything else that might be on your mind. A true carpenter is he who can do everything with perfection and precision. Our highly qualified, experienced carpenters have that and more. We take pride in working for small single person apartments, villas and other residential areas along with all sorts of commercial property. We are a call away!														\r\n							'),
('s-005', 'Painting Services ', 'SErvice@Home Home Maintenance Services  inspirational team of painting Services and decorating have the knowledge and experience to understand your decorating requirements, offer advice where required, and redecorate your home or establishment to a more than professional standard. Our team of painting provides an outstanding quality of painting and decorating at highly competitive rates and offer a FREE Quotation service for all your painting and decorating needs. Our painting team is specializing in interior / exterior painting and decorating, wallpapering, plastering, tiling, covering and more.\r\n\r\nOur painters and decorators pride themselves on an attention to design and detail which is rarely found within companies working to our highly competitive quotations. We are able to achieve the short turnaround time required by many clients by careful planning of work, whether as part of a refurbishment or a separate painting and decorating job.\r\n\r\nWhat We Do\r\n\r\n\r\nTo start â€“ we cover the area with protection and sheeting to prevent spills\r\n\r\nWe fill any holes in the walls and ceilings\r\n\r\nWe sand and prepare the surfaces of the ceilings and walls\r\n\r\nIf cost is an issue we will use high grade lining paper\r\n\r\nFor new plaster we apply a watered down undercoat (new plaster absorbs paint)\r\n\r\nWe follow by applying an undercoat of paint or two coats if appropriate.'),
('s-006', 'Cleaning Services ', 'SErvie@Home Cleaning Services is a one-stop solution for your needs in cleaning your homes. We employ the most professional house cleaners in Dubai, who are guaranteed to make your home sparkle from top to bottom. Whether youâ€™re after one-time house cleaning, moving out house cleaning, MHPT Cleaning Service has all your needs covered. MHPT  Cleaning Service offers good quality cleaning services with attractive house cleaning packages and rates. Our focus on listening to the needs of our customers and providing top quality service is what keeps our customers coming back to us.														\r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `ph_no`, `email`, `company`, `subject`, `message`) VALUES
(1, 'fh', 'sudhuk', 'ee@dd', 'sfws', 'fsf', 'sfs'),
(2, 'Nahian', '1222121', 'nn@bb', 'ghk', 'ed', 'uhui'),
(3, 'NN', '121', 'bn@jj', 'vbvh', 'wttw', 'trgr'),
(4, 'NN', '121', 'bn@jj', 'vbvh', 'wttw', 'trgr'),
(5, 'Biral', '55', 'bb@h', 'dfgd', 'dhd', 'gffhg'),
(6, 'Biral', '55', 'bb@h', 'dfgd', 'dhd', 'gffhg'),
(7, 'Rokon', '1258', 'R@jii', 'rt', 'ey', 'ioo'),
(8, 'Sadia', '12', 'nn@g', 'SBIT', 'AC', 'hjrthjir'),
(9, 'ROKON', '01767966889', 'rokon7901@gmail.com', 'NR company', 'Electric repair', 'I need to a good  electric enginner.');

-- --------------------------------------------------------

--
-- Table structure for table `service_package`
--

CREATE TABLE `service_package` (
  `s_title` varchar(20) NOT NULL,
  `package_id` varchar(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_details` text NOT NULL,
  `p_duration` varchar(20) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_package`
--

INSERT INTO `service_package` (`s_title`, `package_id`, `p_name`, `p_details`, `p_duration`, `price`) VALUES
('s-001', 'p-001', 'AC Maintenance', '', '1 day', 2000),
('s-001', 'p-002', 'AC Servicing', '', '1 day', 2000),
('s-001', 'p-003', 'Emergency AC Repair', '', '1 day', 2000),
('s-001', 'p-004', 'Air Conditioner Main', '', '1 day', 2000),
('s-001', 'p-005', 'AC Preventive Mainte', '', '1 day', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_services`
--
ALTER TABLE `add_services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_package`
--
ALTER TABLE `service_package`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `service_package_ibfk_1` (`s_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_package`
--
ALTER TABLE `service_package`
  ADD CONSTRAINT `service_package_ibfk_1` FOREIGN KEY (`s_title`) REFERENCES `add_services` (`s_id`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
