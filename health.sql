-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 05:19 PM
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
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `antenatal`
--

CREATE TABLE `antenatal` (
  `Id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `idNo` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `husbandName` varchar(255) DEFAULT NULL,
  `husbandPhone` varchar(255) DEFAULT NULL,
  `motherPhone` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `maternalServices` varchar(255) DEFAULT NULL,
  `caste` varchar(255) DEFAULT NULL,
  `anmName` varchar(255) DEFAULT NULL,
  `anmPhone` varchar(255) DEFAULT NULL,
  `ashaName` varchar(255) DEFAULT NULL,
  `ashaPhone` varchar(255) DEFAULT NULL,
  `deliveryFacility` varchar(255) DEFAULT NULL,
  `facilityName` varchar(255) DEFAULT NULL,
  `lmp` date DEFAULT NULL,
  `firstANC` date DEFAULT NULL,
  `secondANC` date DEFAULT NULL,
  `thirdANC` date DEFAULT NULL,
  `fourthANC` date DEFAULT NULL,
  `tt1` date DEFAULT NULL,
  `tt2` date DEFAULT NULL,
  `ttBooster` date DEFAULT NULL,
  `ifaTablets` varchar(255) DEFAULT NULL,
  `anemia` varchar(255) DEFAULT NULL,
  `complication` varchar(255) DEFAULT NULL,
  `rtiSti` varchar(255) DEFAULT NULL,
  `deliveryDate` date DEFAULT NULL,
  `placeOfDelivery` varchar(255) DEFAULT NULL,
  `deliveryType` varchar(255) DEFAULT NULL,
  `complications` varchar(255) DEFAULT NULL,
  `dischargeDate` date DEFAULT NULL,
  `mothersSupport` varchar(255) DEFAULT NULL,
  `abortion` varchar(255) DEFAULT NULL,
  `pncHomeVisit` varchar(255) DEFAULT NULL,
  `pncComplications` varchar(255) DEFAULT NULL,
  `contraceptionMethod` varchar(255) DEFAULT NULL,
  `pncCheckup` varchar(255) DEFAULT NULL,
  `outcomeNumbers` varchar(255) DEFAULT NULL,
  `child1Sex` varchar(255) DEFAULT NULL,
  `child1Weight` varchar(255) DEFAULT NULL,
  `child1Condition` varchar(255) DEFAULT NULL,
  `child1Feeding` varchar(255) DEFAULT NULL,
  `child2Sex` varchar(255) DEFAULT NULL,
  `child2Weight` varchar(255) DEFAULT NULL,
  `child2Condition` varchar(255) DEFAULT NULL,
  `child2Feeding` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antenatal`
--

INSERT INTO `antenatal` (`Id`, `fullName`, `address`, `idNo`, `village`, `husbandName`, `husbandPhone`, `motherPhone`, `dob`, `maternalServices`, `caste`, `anmName`, `anmPhone`, `ashaName`, `ashaPhone`, `deliveryFacility`, `facilityName`, `lmp`, `firstANC`, `secondANC`, `thirdANC`, `fourthANC`, `tt1`, `tt2`, `ttBooster`, `ifaTablets`, `anemia`, `complication`, `rtiSti`, `deliveryDate`, `placeOfDelivery`, `deliveryType`, `complications`, `dischargeDate`, `mothersSupport`, `abortion`, `pncHomeVisit`, `pncComplications`, `contraceptionMethod`, `pncCheckup`, `outcomeNumbers`, `child1Sex`, `child1Weight`, `child1Condition`, `child1Feeding`, `child2Sex`, `child2Weight`, `child2Condition`, `child2Feeding`) VALUES
(1, 'FRED SSEGINDA', 'kampala', 'DAA45670TU', 'esedtseedry', 'John', '+256709086964', '0987654323', '0000-00-00', 'Yes', 'SCis', 'Vivian Recheal Nabwire', '0987654323', 'Peter Wasswa', '+256709086964', 'Drugs', 'Peter Wasswa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'ewttretyy5e44', 'sgdgfy', 'dsfgfyutyut', 'reeyt', '0000-00-00', 'loiojuik', 'kololliloik', 'oiioiokiki', '0000-00-00', 'ereuierjklgfjk', 'fddsdfsda', 'rwtreurti', 'uteqwq', 'erei', 'eweyt', 'eswteu', 'tuioin utte', 'okiuuyyrcers', 'etwu', 'frtyryyusdsasSD', 'kjkjtyrea', 'jkkjdgssdaa', 'sgfdghf', 'sgffrt');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `DOB` varchar(50) DEFAULT NULL,
  `Age` varchar(200) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Village` varchar(50) DEFAULT NULL,
  `NationalID` varchar(50) DEFAULT NULL,
  `Next_of_kin` varchar(250) DEFAULT NULL,
  `KinContact` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`Id`, `Name`, `DOB`, `Age`, `Address`, `Village`, `NationalID`, `Next_of_kin`, `KinContact`) VALUES
(1, 'Peter Wasswa', '2000-07-14', '35', 'Busia', 'Makerere', 'CMV12345FF', 'Wampamba', '0789564345'),
(2, 'Mark Mayambala', '2016-11-19', '54', 'kampala', 'Makerere', 'MNC34566TR', 'Eve', '0789564345');

-- --------------------------------------------------------

--
-- Table structure for table `postnatal`
--

CREATE TABLE `postnatal` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `ipNo` varchar(50) DEFAULT NULL,
  `ward` varchar(50) DEFAULT NULL,
  `dateOfAdmission` date DEFAULT NULL,
  `dateOfDischarge` date DEFAULT NULL,
  `typeOfDelivery` varchar(50) DEFAULT NULL,
  `dateOfDelivery` date DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `baby` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `feedingOption` varchar(50) DEFAULT NULL,
  `vitaminAGiven` varchar(3) DEFAULT NULL,
  `familySize` int(11) DEFAULT NULL,
  `dualProtection` varchar(3) DEFAULT NULL,
  `hivTesting` varchar(3) DEFAULT NULL,
  `infantFeeding` varchar(255) DEFAULT NULL,
  `heavyBleeding` varchar(3) DEFAULT NULL,
  `facialPuffiness` varchar(3) DEFAULT NULL,
  `fever` varchar(3) DEFAULT NULL,
  `vomiting` varchar(3) DEFAULT NULL,
  `smellingDischarge` varchar(3) DEFAULT NULL,
  `legPain` varchar(3) DEFAULT NULL,
  `abdominalPain` varchar(3) DEFAULT NULL,
  `abnormalBreathing` varchar(3) DEFAULT NULL,
  `failureToBreastfeed` varchar(3) DEFAULT NULL,
  `babyFever` varchar(3) DEFAULT NULL,
  `yellowEyesBody` varchar(3) DEFAULT NULL,
  `convulsion` varchar(3) DEFAULT NULL,
  `cordStump` varchar(3) DEFAULT NULL,
  `generalWeakness` varchar(3) DEFAULT NULL,
  `failureToPass` varchar(3) DEFAULT NULL,
  `injuries` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postnatal`
--

INSERT INTO `postnatal` (`id`, `fullName`, `ipNo`, `ward`, `dateOfAdmission`, `dateOfDischarge`, `typeOfDelivery`, `dateOfDelivery`, `mother`, `baby`, `sex`, `weight`, `feedingOption`, `vitaminAGiven`, `familySize`, `dualProtection`, `hivTesting`, `infantFeeding`, `heavyBleeding`, `facialPuffiness`, `fever`, `vomiting`, `smellingDischarge`, `legPain`, `abdominalPain`, `abnormalBreathing`, `failureToBreastfeed`, `babyFever`, `yellowEyesBody`, `convulsion`, `cordStump`, `generalWeakness`, `failureToPass`, `injuries`) VALUES
(1, 'FRED SSEGINDA', '0900', 'Men', '2023-05-01', '2023-05-25', 'Casuality', '2023-05-09', 'Normal', 'Normal', 'Male', 13.2, 'Breastfeeding', 'No', 5, 'Dou', 'Yes', 'Breastfeeding', 'Nor', 'Yel', 'Not', 'No', 'Not', 'Som', 'Coo', 'Nor', 'Not', 'Nor', 'Blu', 'Con', 'Noo', 'Ste', 'Imp', 'Everything fine'),
(2, 'Peter Wasswa', '07000', 'Men', '2023-05-15', '2023-06-07', 'Casuality', '2023-05-22', 'Normal', 'Normal', 'Female', 10, 'Breastfeeding', 'No', 3, 'Dou', 'No', 'Breastfeeding', 'Nor', 'Yel', 'Not', 'No', 'Not', 'Som', 'Coo', 'Nor', 'Not', 'Nor', 'Blu', 'Con', 'Noo', 'Ste', 'Imp', 'Steady progress');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `username`, `email`, `contact`, `password`) VALUES
(1, 'Fred', 'Sseginda', 'Fredo', 'fredsseginda70@gmail.com', '078905678', 'drop'),
(2, 'Denis', 'Onen', 'Denis', 'denisonen259@gmail.com', '0774758884', 'onen911');

-- --------------------------------------------------------

--
-- Table structure for table `rtable`
--

CREATE TABLE `rtable` (
  `Id` int(11) NOT NULL,
  `Telephone` varchar(150) DEFAULT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `RName` varchar(200) DEFAULT NULL,
  `Contact` varchar(250) DEFAULT NULL,
  `RAgency` varchar(50) DEFAULT NULL,
  `Grade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rtable`
--

INSERT INTO `rtable` (`Id`, `Telephone`, `FullName`, `RName`, `Contact`, `RAgency`, `Grade`) VALUES
(1, '+256709086964', 'Vivian Recheal Nabwire', 'Kato Emma', '0789765432122', 'Mulago', 'IV'),
(2, '+256709086964', 'FRED SSEGINDA', 'Kato Emma', '0789765432122', 'Mulago', 'IV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antenatal`
--
ALTER TABLE `antenatal`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `postnatal`
--
ALTER TABLE `postnatal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rtable`
--
ALTER TABLE `rtable`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antenatal`
--
ALTER TABLE `antenatal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postnatal`
--
ALTER TABLE `postnatal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rtable`
--
ALTER TABLE `rtable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
