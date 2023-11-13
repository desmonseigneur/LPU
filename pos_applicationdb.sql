-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 05:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_applicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `deductiontbl`
--

CREATE TABLE `deductiontbl` (
  `deduction_date` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `faculty_savings_deposit` double NOT NULL,
  `faculty_savings_loan` double NOT NULL,
  `id` int(11) NOT NULL,
  `income_tax_contri` double NOT NULL,
  `other_loans` double NOT NULL,
  `pagibig_contri` double NOT NULL,
  `pagibig_loan` double NOT NULL,
  `philHealth_contri` double NOT NULL,
  `salary_loan` double NOT NULL,
  `sss_contri` double NOT NULL,
  `total_deduction` double NOT NULL,
  `sss_loan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deductiontbl`
--

INSERT INTO `deductiontbl` (`deduction_date`, `employee_no`, `faculty_savings_deposit`, `faculty_savings_loan`, `id`, `income_tax_contri`, `other_loans`, `pagibig_contri`, `pagibig_loan`, `philHealth_contri`, `salary_loan`, `sss_contri`, `total_deduction`, `sss_loan`) VALUES
('September 5, 2021', '12345', 879, 459, 29, 0, 357, 465, 465, 4050, 620, 180, 18502.27, 123);

-- --------------------------------------------------------

--
-- Table structure for table `incometbl`
--

CREATE TABLE `incometbl` (
  `id` int(11) NOT NULL,
  `income_date` varchar(255) NOT NULL,
  `basic_rate_hour` double NOT NULL,
  `basic_income` double NOT NULL,
  `hono_rate_hour` double NOT NULL,
  `hono_num_hrs` double NOT NULL,
  `hono_income` double NOT NULL,
  `other_rate_hour` double NOT NULL,
  `other_num_hrs` double NOT NULL,
  `other_income` double NOT NULL,
  `gross_income` double NOT NULL,
  `net_income` double NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `basic_num_hrs` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incometbl`
--

INSERT INTO `incometbl` (`id`, `income_date`, `basic_rate_hour`, `basic_income`, `hono_rate_hour`, `hono_num_hrs`, `hono_income`, `other_rate_hour`, `other_num_hrs`, `other_income`, `gross_income`, `net_income`, `employee_no`, `basic_num_hrs`) VALUES
(42, 'September 5, 2021', 456, 41940, 456, 546, 3495, 564, 546, 0, 45435, 26932.73, '12345', 546);

-- --------------------------------------------------------

--
-- Table structure for table `personal_infotbl`
--

CREATE TABLE `personal_infotbl` (
  `id` int(11) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `address_line1` text NOT NULL,
  `address_line2` text NOT NULL,
  `birth_date` varchar(25) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `employee_status` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `other_social_media_account` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `picpath` text NOT NULL,
  `qualified_dependent_status` varchar(255) NOT NULL,
  `social_media_account_id` varchar(255) NOT NULL,
  `state_province` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_infotbl`
--

INSERT INTO `personal_infotbl` (`id`, `employee_no`, `address_line1`, `address_line2`, `birth_date`, `civil_status`, `contact_no`, `country`, `department`, `designation`, `email_address`, `employee_status`, `fname`, `gender`, `lname`, `mname`, `municipality`, `nationality`, `other_social_media_account`, `pay_date`, `picpath`, `qualified_dependent_status`, `social_media_account_id`, `state_province`, `suffix`, `zip_code`) VALUES
(12, '10001000', '', '', '2020-10-19', 'S', '231231', 'Phillipines', 'Computer Engineering Department', 'Chairperson', 'testingtester001@gmail.com', 'Contractual', 'Anabella', 'F', 'Doctor', 'Cajoles', '', 'Filipino', '', '2023-11-12', '', 'S3 or ME3', '', '', '', 0),
(13, '10101111', '', '', '2023-01-24', 'LS', '', 'Phillipines', 'Computer Engineering', 'Wala', '', 'Part Time', 'Roger', 'M', 'Rogers III', 'Smith', '', 'Filipino', '', '2023-11-12', '', 'S2 or ME2', '', '', '', 0),
(14, '11111111', '', '', '2023-08-04', 'LS', '', 'Phillipines', 'CEO', 'Affiliate Admin', '', 'Contractual', 'a', 'M', 'a a', 'a', '', 'Filipino', '', '2023-11-12', '', 'S or ME', '', '', '', 0),
(15, '12345', '', '', '0000-00-00', 'M', '', 'Phillipines', 'Computer Engineering Department', 'Chairperson', '', 'Contractual', 'Anabella', 'M', 'Doctor', 'Cajelos', '', 'Filipino', '', '2019-09-05', '', 'S2 or ME2', '', '', '', 0),
(16, '12346', '', '', 'undefined', 'S', '', 'Phillipines', 'CEO', 'Chief Operating Office', '', 'Permanent', 'John', 'M', 'Doe Jr.', 'Black', '', 'Filipino', '', '2023-11-12', '', 'S1 or ME1', '', '', '', 0),
(17, '12347', '', '', '2005-10-11', 'S', '', 'Phillipines', 'Internal Medicine', 'Surgery', '', 'Resident', 'Sylvana', 'F', 'Taken', 'Goods', '', 'Filipino', '', '2023-11-12', '', 'S3 or ME3', '', '', '', 0),
(18, '222222A', '', '', '2001-11-02', 'S', '', 'Phillipines', 'a', 'a', '', 'a', 'Jessa', 'F', 'Goza Ma.', 'Sara', '', 'Filipino', '', '2023-11-12', '', 'S or ME', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salestbl`
--

CREATE TABLE `salestbl` (
  `cash_given` double NOT NULL,
  `customer_change` double NOT NULL,
  `discounted_amount` double NOT NULL,
  `discount_amount` decimal(65,2) NOT NULL,
  `discount_option` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_discounted_amount` double NOT NULL,
  `total_discount_given` double NOT NULL,
  `total_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salestbl`
--

INSERT INTO `salestbl` (`cash_given`, `customer_change`, `discounted_amount`, `discount_amount`, `discount_option`, `employee_no`, `id`, `item_name`, `price`, `quantity`, `total_discounted_amount`, `total_discount_given`, `total_quantity`) VALUES
(6000, 5268, 732.8, '183.20', 'Discount Card', '', 17, 'Soup Ladle', 916.82, 2, 732, 183, 2),
(6000, 5268, 732.8, '183.20', 'Discount Card', '', 18, 'Soup Ladle', 916.82, 2, 732, 183, 2),
(20000, 18900, 1100.8, '275.20', 'Discount Card', '', 19, 'Lantern', 688.99, 2, 1100, 275, 2),
(3500, 2400, 1100.8, '275.20', 'Discount Card', '', 20, 'Minimalist Chandelier', 1111.56, 1, 2200, 550, 3),
(5000, 88, 4912, '0.00', 'No discount', '', 21, 'Bread Knife', 2456.44, 2, 4912, 0, 2),
(4000, 2535, 1465.6, '366.40', 'Discount Card', '', 22, 'Soup Ladle', 916.82, 2, 6377, 366, 4),
(7000, -5505, 12505.6, '3126.40', 'Discount Card', '', 23, 'Belle', 3908.52, 4, 12505, 3126, 4),
(3000, 2930, 70, '30.00', 'Senior Citizen', '', 24, 'Reusable Bag', 50.5, 2, 70, 30, 2),
(2000, 1930, 70, '30.00', 'Senior Citizen', '', 25, 'Paper Bag', 10.5, 3, 140, 60, 5),
(0, 0, 0, '0.00', 'undefined', '', 26, 'Peeler', 3451.97, 0, 0, 0, 0),
(3000, 98, 2902, '0.00', 'undefined', '', 27, 'Serrated Knife', 2902.36, 1, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounttbl`
--

CREATE TABLE `user_accounttbl` (
  `confirm_password` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounttbl`
--

INSERT INTO `user_accounttbl` (`confirm_password`, `employee_no`, `id`, `password`, `username`, `privilege`) VALUES
('', '12345', 6, '', '', 0),
('', '23', 7, '', '', 0),
('', '10001000', 9, '', '', 0),
('', '10101111', 10, '', '', 0),
('', '11111111', 11, '', '', 0),
('', '12345', 12, '', '', 0),
('', '12346', 13, '', '', 0),
('', '12347', 14, '', '', 0),
('', '222222A', 15, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deductiontbl`
--
ALTER TABLE `deductiontbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incometbl`
--
ALTER TABLE `incometbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_infotbl`
--
ALTER TABLE `personal_infotbl`
  ADD PRIMARY KEY (`employee_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `salestbl`
--
ALTER TABLE `salestbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounttbl`
--
ALTER TABLE `user_accounttbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deductiontbl`
--
ALTER TABLE `deductiontbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `incometbl`
--
ALTER TABLE `incometbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_infotbl`
--
ALTER TABLE `personal_infotbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `salestbl`
--
ALTER TABLE `salestbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_accounttbl`
--
ALTER TABLE `user_accounttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
