-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 10:40 PM
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
-- Database: `lbs_system_version_1.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(2030359, 'Apurbo Karmokar', 'apurbo326k@gmail.com', 'apurbo1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

CREATE TABLE `admin_contact` (
  `admin_id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_contact`
--

INSERT INTO `admin_contact` (`admin_id`, `contact`) VALUES
(2030359, '01797531431');

-- --------------------------------------------------------

--
-- Table structure for table `bo_account`
--

CREATE TABLE `bo_account` (
  `bo_account_number` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `poa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_account_nominee`
--

CREATE TABLE `bo_account_nominee` (
  `nominee_id` int(11) NOT NULL,
  `bo_account_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `corporate_id` int(11) NOT NULL,
  `bo_account_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_contact`
--

CREATE TABLE `crm_contact` (
  `crm_id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_skill`
--

CREATE TABLE `crm_skill` (
  `crm_id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cusmoter_bank_account`
--

CREATE TABLE `cusmoter_bank_account` (
  `bank_account_number` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bank_code` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_code` int(11) NOT NULL,
  `routing_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `tiin_number` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_relationship_manager`
--

CREATE TABLE `customer_relationship_manager` (
  `crm_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `first_account_holder`
--

CREATE TABLE `first_account_holder` (
  `corporate_id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `passport` int(11) NOT NULL,
  `bank_account_number` int(11) NOT NULL,
  `statement` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `driving_licence` int(11) NOT NULL,
  `father` varchar(255) NOT NULL,
  `father_dob` date NOT NULL,
  `fgender` varchar(255) NOT NULL,
  `fnationality` varchar(255) NOT NULL,
  `faddress` varchar(255) NOT NULL,
  `fnumber` int(11) NOT NULL,
  `femail` varchar(255) NOT NULL,
  `foccupation` varchar(255) NOT NULL,
  `fetiin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_of_settlement`
--

CREATE TABLE `head_of_settlement` (
  `dept_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hos_contact`
--

CREATE TABLE `hos_contact` (
  `dept_id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individual`
--

CREATE TABLE `individual` (
  `individual_id` int(11) NOT NULL,
  `bo_account_number` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `passport` int(11) NOT NULL,
  `bank_account_no` int(11) NOT NULL,
  `statement` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `employee_card` int(11) NOT NULL,
  `trade_license` int(11) NOT NULL,
  `authorized_person_photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `joint`
--

CREATE TABLE `joint` (
  `joint_id` int(11) NOT NULL,
  `bo_account_number` int(11) NOT NULL,
  `nid_p1` int(11) NOT NULL,
  `number_p1` int(11) NOT NULL,
  `passport_p1` int(11) NOT NULL,
  `bank_account_no_p1` int(11) NOT NULL,
  `statement_p1` int(11) NOT NULL,
  `photo_p1` int(11) NOT NULL,
  `employee_p1` int(11) NOT NULL,
  `trade_p1` int(11) NOT NULL,
  `au_person1_photo` int(11) NOT NULL,
  `nid_p2` int(11) NOT NULL,
  `number_p2` int(11) NOT NULL,
  `passport_p2` int(11) NOT NULL,
  `bank_account_p2` int(11) NOT NULL,
  `statement_p2` int(11) NOT NULL,
  `photo_p2` int(11) NOT NULL,
  `employee_p2` int(11) NOT NULL,
  `trade_p2` int(11) NOT NULL,
  `au_person2_photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc_profile`
--

CREATE TABLE `kyc_profile` (
  `profile_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_of_account` varchar(255) NOT NULL,
  `crm_id` int(11) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `tiin` int(11) NOT NULL,
  `driving_license_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `minor`
--

CREATE TABLE `minor` (
  `minor_id` int(11) NOT NULL,
  `nominee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `nominee1_id` int(11) NOT NULL,
  `nominee2_id` int(11) DEFAULT NULL,
  `minor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nominee1`
--

CREATE TABLE `nominee1` (
  `nominee1_id` int(11) NOT NULL,
  `nominee_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `number` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `signature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nominee2`
--

CREATE TABLE `nominee2` (
  `nominee2_id` int(11) NOT NULL,
  `nominee_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `number` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `signature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poa`
--

CREATE TABLE `poa` (
  `poa_code` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signature_card`
--

CREATE TABLE `signature_card` (
  `signature_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bo_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bank_account_no` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `account_booking_channel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `value_added_service`
--

CREATE TABLE `value_added_service` (
  `service_code` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `investor_name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `applying_date` date NOT NULL,
  `Internet_treading` varchar(255) NOT NULL,
  `order_management` varchar(255) NOT NULL,
  `sms_service` varchar(255) NOT NULL,
  `email_service` varchar(255) NOT NULL,
  `customer_signature` varchar(255) NOT NULL,
  `authority_signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`contact`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `bo_account`
--
ALTER TABLE `bo_account`
  ADD PRIMARY KEY (`bo_account_number`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `poa_id` (`poa_id`);

--
-- Indexes for table `bo_account_nominee`
--
ALTER TABLE `bo_account_nominee`
  ADD PRIMARY KEY (`nominee_id`),
  ADD KEY `bo_account_number` (`bo_account_number`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`corporate_id`),
  ADD KEY `bo_account_number` (`bo_account_number`);

--
-- Indexes for table `crm_contact`
--
ALTER TABLE `crm_contact`
  ADD PRIMARY KEY (`contact`),
  ADD KEY `crm_id` (`crm_id`);

--
-- Indexes for table `crm_skill`
--
ALTER TABLE `crm_skill`
  ADD PRIMARY KEY (`skill`),
  ADD KEY `crm_id` (`crm_id`);

--
-- Indexes for table `cusmoter_bank_account`
--
ALTER TABLE `cusmoter_bank_account`
  ADD PRIMARY KEY (`bank_account_number`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `customer_relationship_manager`
--
ALTER TABLE `customer_relationship_manager`
  ADD PRIMARY KEY (`crm_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `first_account_holder`
--
ALTER TABLE `first_account_holder`
  ADD PRIMARY KEY (`corporate_id`);

--
-- Indexes for table `head_of_settlement`
--
ALTER TABLE `head_of_settlement`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `hos_contact`
--
ALTER TABLE `hos_contact`
  ADD PRIMARY KEY (`contact`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `individual`
--
ALTER TABLE `individual`
  ADD PRIMARY KEY (`individual_id`),
  ADD KEY `bo_account_number` (`bo_account_number`);

--
-- Indexes for table `joint`
--
ALTER TABLE `joint`
  ADD PRIMARY KEY (`joint_id`),
  ADD KEY `bo_account_number` (`bo_account_number`);

--
-- Indexes for table `kyc_profile`
--
ALTER TABLE `kyc_profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `minor`
--
ALTER TABLE `minor`
  ADD PRIMARY KEY (`minor_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `nominee1`
--
ALTER TABLE `nominee1`
  ADD PRIMARY KEY (`nominee1_id`),
  ADD KEY `nominee_id` (`nominee_id`);

--
-- Indexes for table `nominee2`
--
ALTER TABLE `nominee2`
  ADD PRIMARY KEY (`nominee2_id`),
  ADD KEY `nominee_id` (`nominee_id`);

--
-- Indexes for table `poa`
--
ALTER TABLE `poa`
  ADD PRIMARY KEY (`poa_code`);

--
-- Indexes for table `signature_card`
--
ALTER TABLE `signature_card`
  ADD PRIMARY KEY (`signature_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `value_added_service`
--
ALTER TABLE `value_added_service`
  ADD PRIMARY KEY (`service_code`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2030360;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `corporate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cusmoter_bank_account`
--
ALTER TABLE `cusmoter_bank_account`
  MODIFY `bank_account_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_relationship_manager`
--
ALTER TABLE `customer_relationship_manager`
  MODIFY `crm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `head_of_settlement`
--
ALTER TABLE `head_of_settlement`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individual`
--
ALTER TABLE `individual`
  MODIFY `individual_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joint`
--
ALTER TABLE `joint`
  MODIFY `joint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kyc_profile`
--
ALTER TABLE `kyc_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `minor`
--
ALTER TABLE `minor`
  MODIFY `minor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `nominee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nominee1`
--
ALTER TABLE `nominee1`
  MODIFY `nominee1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nominee2`
--
ALTER TABLE `nominee2`
  MODIFY `nominee2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signature_card`
--
ALTER TABLE `signature_card`
  MODIFY `signature_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `value_added_service`
--
ALTER TABLE `value_added_service`
  MODIFY `service_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD CONSTRAINT `admin_contact_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `bo_account`
--
ALTER TABLE `bo_account`
  ADD CONSTRAINT `bo_account_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `bo_account_ibfk_2` FOREIGN KEY (`poa_id`) REFERENCES `poa` (`poa_code`);

--
-- Constraints for table `bo_account_nominee`
--
ALTER TABLE `bo_account_nominee`
  ADD CONSTRAINT `bo_account_nominee_ibfk_1` FOREIGN KEY (`bo_account_number`) REFERENCES `bo_account` (`bo_account_number`);

--
-- Constraints for table `corporate`
--
ALTER TABLE `corporate`
  ADD CONSTRAINT `corporate_ibfk_1` FOREIGN KEY (`bo_account_number`) REFERENCES `bo_account` (`bo_account_number`);

--
-- Constraints for table `crm_contact`
--
ALTER TABLE `crm_contact`
  ADD CONSTRAINT `crm_contact_ibfk_1` FOREIGN KEY (`crm_id`) REFERENCES `customer_relationship_manager` (`crm_id`);

--
-- Constraints for table `crm_skill`
--
ALTER TABLE `crm_skill`
  ADD CONSTRAINT `crm_skill_ibfk_1` FOREIGN KEY (`crm_id`) REFERENCES `customer_relationship_manager` (`crm_id`);

--
-- Constraints for table `cusmoter_bank_account`
--
ALTER TABLE `cusmoter_bank_account`
  ADD CONSTRAINT `cusmoter_bank_account_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `customer_relationship_manager`
--
ALTER TABLE `customer_relationship_manager`
  ADD CONSTRAINT `customer_relationship_manager_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `head_of_settlement` (`dept_id`),
  ADD CONSTRAINT `customer_relationship_manager_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `first_account_holder`
--
ALTER TABLE `first_account_holder`
  ADD CONSTRAINT `first_account_holder_ibfk_1` FOREIGN KEY (`corporate_id`) REFERENCES `corporate` (`corporate_id`);

--
-- Constraints for table `head_of_settlement`
--
ALTER TABLE `head_of_settlement`
  ADD CONSTRAINT `head_of_settlement_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `hos_contact`
--
ALTER TABLE `hos_contact`
  ADD CONSTRAINT `hos_contact_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `head_of_settlement` (`dept_id`);

--
-- Constraints for table `individual`
--
ALTER TABLE `individual`
  ADD CONSTRAINT `individual_ibfk_1` FOREIGN KEY (`bo_account_number`) REFERENCES `bo_account` (`bo_account_number`);

--
-- Constraints for table `joint`
--
ALTER TABLE `joint`
  ADD CONSTRAINT `joint_ibfk_1` FOREIGN KEY (`bo_account_number`) REFERENCES `bo_account` (`bo_account_number`);

--
-- Constraints for table `kyc_profile`
--
ALTER TABLE `kyc_profile`
  ADD CONSTRAINT `kyc_profile_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `nominee`
--
ALTER TABLE `nominee`
  ADD CONSTRAINT `nominee_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `nominee_ibfk_2` FOREIGN KEY (`nominee_id`) REFERENCES `bo_account_nominee` (`nominee_id`);

--
-- Constraints for table `nominee1`
--
ALTER TABLE `nominee1`
  ADD CONSTRAINT `nominee1_ibfk_1` FOREIGN KEY (`nominee_id`) REFERENCES `nominee` (`nominee_id`);

--
-- Constraints for table `nominee2`
--
ALTER TABLE `nominee2`
  ADD CONSTRAINT `nominee2_ibfk_1` FOREIGN KEY (`nominee_id`) REFERENCES `nominee` (`nominee_id`);

--
-- Constraints for table `signature_card`
--
ALTER TABLE `signature_card`
  ADD CONSTRAINT `signature_card_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `value_added_service`
--
ALTER TABLE `value_added_service`
  ADD CONSTRAINT `value_added_service_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
