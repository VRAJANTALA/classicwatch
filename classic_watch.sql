-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 02:16 PM
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
-- Database: `classic_watch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_table`
--

CREATE TABLE `admin_login_table` (
  `Admin_Login_id` varchar(11) NOT NULL,
  `Admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login_table`
--

INSERT INTO `admin_login_table` (`Admin_Login_id`, `Admin_password`) VALUES
('Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `pri` double NOT NULL,
  `tot` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `uid`, `pid`, `qty`, `pri`, `tot`, `image`, `name`) VALUES
(19, '', '18', 1, 22766, 22766, 'images/1679114974.jpg', ''),
(24, '', '', 1, 4799, 4799, 'images/1679112505.jpg', ''),
(53, '', '38', 1, 1580, 1580, 'images/1680342408.jpg', 'Sonata Stainless Stile '),
(57, '5', '46', 1, 6599, 6599, 'images/1680345284.jpg', 'Hublot mens'),
(65, '', '14', 1, 7999, 7999, 'images/1679114502.jpg', 'Fossil Gold Edition '),
(66, '', '14', 1, 7999, 7999, 'images/1679114502.jpg', 'Fossil Gold Edition '),
(67, '', '14', 1, 7999, 7999, 'images/1679114502.jpg', 'Fossil Gold Edition '),
(100, '', '43', 2, 23400, 46800, 'images/1680343732.jpg', 'G-SHOCK GM2100MG-1A ');

-- --------------------------------------------------------

--
-- Table structure for table `categories_types`
--

CREATE TABLE `categories_types` (
  `Category_id` int(11) NOT NULL,
  `Category_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories_types`
--

INSERT INTO `categories_types` (`Category_id`, `Category_Name`) VALUES
(1, 'Smart Watch'),
(2, 'Stel Belt Watch'),
(3, 'Premium Watch'),
(4, 'Leather Watch'),
(21, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `contact_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(15) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`contact_id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'Shiv Patel', 'Shivpatel01234@gmail.com', 'watch', 'give me for more watch information'),
(2, 'vijay sharma', 'vijaysharma7542@gmail.com', 'castilo', 'black castilo watch in stock now??'),
(3, 'rajvi patel', 'rajvipatel0111@gmail.com', 'samsung smart w', 'When Pink color available?'),
(4, 'khushal khokhar', 'Khushalkhokhar07@gmail.com', 'Diamond watch', 'Discount'),
(5, 'Parth bhanderi', 'parthbhanderii555@gmail.com', 'premeuim watch', 'Any offer avialabe?');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `creditcardid` int(11) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expdate` varchar(11) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`creditcardid`, `cardnumber`, `cvv`, `expdate`, `cname`) VALUES
(4, '2822669978950012', '345', '2028-03', 'JENISHA SURANI	'),
(5, '7777888899994444', '111', '2029-09', 'mahendrabhai'),
(6, '44778855001122', '154', '2023-03', 'Patel Shiv');

-- --------------------------------------------------------

--
-- Table structure for table `debitcard`
--

CREATE TABLE `debitcard` (
  `debitcardid` int(11) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expdate` varchar(11) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `debitcard`
--

INSERT INTO `debitcard` (`debitcardid`, `cardnumber`, `cvv`, `expdate`, `cname`) VALUES
(1, '658956441102', 145, '2033-03', 'henil katrodiya	'),
(2, '156974562013', 265, '2042-04', 'JENISHA SURANI	'),
(3, '154678956231', 154, '2041-03', 'PATEL SHIV MAHENMDRA'),
(4, '156918002013', 154, '2042-03', 'PATEL SHIV MAHENDRAB'),
(5, '157850026544', 154, '2042-03', 'PATEL SHIV MAHENDRAB'),
(6, '178956321456', 154, '2042-03', 'PATEL SHIV MAHENDRAB');

-- --------------------------------------------------------

--
-- Table structure for table `ordersummary`
--

CREATE TABLE `ordersummary` (
  `Order_id` int(11) NOT NULL,
  `User_id` int(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `PhoneNumber` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Total` int(11) NOT NULL,
  `Payment_method` varchar(30) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Product_quantity` int(10) NOT NULL,
  `Product_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordersummary`
--

INSERT INTO `ordersummary` (`Order_id`, `User_id`, `Name`, `City`, `Address`, `Pincode`, `PhoneNumber`, `Email`, `Total`, `Payment_method`, `image`, `Product_name`, `Product_quantity`, `Product_price`) VALUES
(3, 0, 'JENISHA SURANI	', 'SURAT', 'B-301,MEGH MALHAR SOCITY,SARTHANA JAKATNAKA	', 395006, '8866774499	', 'Jenishasurani111@gmail.com	', 4299, 'Debit Card', 'images/', 'Rose Gold Women Watch   ', 1, 4299),
(38, 2, 'Shiv Patel', 'KAMREJ,SURAT', '7-JOKHA ,NEAR KAMREJ,SURAT	', 395006, '81284 46720	', 'SHIVPATEL01234@GMAIL.COM	', 82999, 'Credit Card', 'images/', 'Apple Watch Altra GPS  ', 1, 82999),
(40, 1, 'Henil Katrodiya', 'Surat', '68-MARUTI NAGAR,NEAR HIRABAG	', 395006, '9724461502', 'henilkatrodita444@gmail.com	', 7999, 'Cash on Delivery', 'images/', 'Fossil Gold Edition ', 1, 7999);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `Bank_name` varchar(30) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Total_amout` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_id` int(11) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Company_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`Product_id`, `Product_name`, `Category_id`, `image`, `Price`, `Quantity`, `Description`, `Company_name`) VALUES
(1, 'Samsung Galaxy Watch 5 Bluetooth ', 1, '1679112323.jpg', 7899, 266, '\"Samsung Galaxy Watch is new latest touch screen smart watch\"', 'Samsung '),
(2, 'fitbit versa', 1, '1679112505.jpg', 4799, 156, '\"This is best smart watch for all and nice watch\"', 'Fitbit Versa'),
(3, 'Timex Steel Belt Watch', 2, '1679114477.jpg', 2750, 101, '\"It is made with original steal belt..\"', 'Timex'),
(5, 'Fastrack Steel Belt ', 2, '1679112876.jpg', 1499, 111, '\"Fastrack silver belt steel watch with round dial\"', 'Fastrack '),
(6, 'ROLEX DIAMOND WATCH', 3, '1679113013.jpg', 7499, 155, '\"Brand New Rado Diamond Watch , gold steel belt watch with white diamonds.\"', 'ROLEX'),
(7, 'Fastrack black leather Belt ', 4, '1679113166.jpg', 1599, 100, '\"Fastrack Black Leather Watch Very Nice.\"', 'Fastrack '),
(8, 'RADO BLACK LEATHER WATCH', 4, '1679113279.jpg', 1299, 100, '\"Rado Black Leather Watch with Premium Quality.\"', 'RADO'),
(9, 'ROLEX STEEL YELLOW GOLD WATCH', 3, '1679113442.jpg', 3799, 101, '\"Official Certified Chronometer self-winding movement. Stainless steel and 18k yellow gold oyster case 34.0 mm in diameter.Rolex logo on a watch.\"', 'ROLEX '),
(10, 'BIP DMART WATCH', 1, '1679113662.jpg', 4999, 100, '\"Amazfit Bip Smart Watch with heart Rate Moniter Features : Show Message Notification,check weather,step counter,calaries burn checker,heart rate moniter. \"', 'BIP DMART WATCH'),
(11, 'Fossil Premium Leather Watch', 4, '1679113794.jpg', 4599, 100, '\"Fossil Premium Leather Watch.\"', 'Fossil '),
(12, 'Fastrack Leather Belt Watch', 4, '1679113998.jpg', 2299, 100, '\"Fastrack Original Leather Belt Watch.\"', 'Fastrack '),
(13, 'Fossil Smart Watch Gen 5', 1, '1679114270.jpg', 8888, 99, '\"Fossil Brand New calling function smart watch with inbuilt GPS,smart tracker , heart rate moniter.\"', 'Fossil '),
(14, 'Fossil Gold Edition ', 2, '1679114502.jpg', 7999, 100, '\"Fossil Gold Edition Watch With Round Dial.\"', 'Fossil '),
(15, 'Titan Silver Watch', 2, '1679114620.jpg', 1599, 100, '\"Titan Sliver Watch With Date Function.\"', 'Titan'),
(16, 'Rado Gold Diamonds W', 3, '1679114722.jpg', 6850, 100, '\"Causal Watch\"', 'Rado '),
(17, 'Apple Watch Sereies 5', 1, '1679114863.jpg', 32999, 100, '\"Apple Watch series 5 with GPS and Calling Function \"', 'Apple '),
(18, 'Oneplus Band Edition', 1, '1679114974.jpg', 22766, 100, '\"The Oneplus Band Steven Harrington Edition a 1.78-inch Amoled screen of 60hz refresh rate and 500nits brightness level.\"', 'Oneplus'),
(19, 'Fastrack Unisex Watch', 1, '1679115071.jpg', 3799, 100, '\"Show Mwssage notification , Calling Function , Check Weather , Step Counter.\"', 'Fastrack '),
(20, 'Apple Watch Series 6 GPS', 1, '1679115192.jpg', 49999, 100, '\"Latest version of apple smart watch series 6 gps system.\"', 'Apple '),
(21, 'Fossil ROse Gold Watch', 3, '1679115303.jpg', 9999, 101, '\"It is a rose gold eddition watch of fossil brand.\"', 'Fossil '),
(22, 'Titan Women Watch', 2, '1679116534.jpg', 1745, 100, '\"Titan Silver Dial Silver Stainless Steel Strap Watch For Women NN2598SM01 - Kamal Watch Company.\"\r\n', 'Titan'),
(23, 'Apple Watch Altra GPS  ', 1, '1679141198.jpg', 82999, 100, '\"Latest version of apple smart watch series 6 gps system.\"', 'Apple '),
(24, 'OnePlus Nord Watch ', 1, '1679141744.jpg', 4749, 100, '\"OnePlus Nord Watch 1.78 Inch AMOLED Display Deep Blue Smart Watch.\"', 'OnePlus '),
(25, 'Quartz Woman Watch', 3, '1679117069.jpg', 1799, 100, '\"This is Premium watch for woman.\"', 'Quartz '),
(26, 'Sonata Women Watch     ', 3, '1679118462.jpg', 6544, 111, '\"This is premium watch for women.\"', 'sonata'),
(27, 'Rolex Best Watch', 2, '1679117365.jpg', 6599, 100, '\"Best Steal belt watch.\"', 'Rolex'),
(28, 'sonata woman watch', 2, '1679117458.jpg', 4666, 122, '\"Steal belt woman watch.\"', 'sonata'),
(29, 'Steal Belt Quartz', 2, '1679117634.jpg', 1466, 111, '\"Fridja Women Watches Narrow Stainless Steel Band Quartz Watch Girls Ultra-Thin Wristwatches\"', 'Quartz'),
(30, 'Quartz Women Watch  ', 3, '1679117842.jpg', 679, 88, '\"Quartz WM White Dial Gold Stainless Steel Strap Watch for Women and Girls.\"', 'Quartz'),
(31, 'Rolex Explorer', 3, '1679139289.jpg', 7799, 111, '\"The Perpetual movements that equip the Rolex models play a key role in the reputation for excellence of Rolex watches.\"', 'Rolex'),
(32, 'Titan Leather Watch', 4, '1679139580.jpg', 10645, 100, '\"The Perpetual movements that equip the Rolex models play a key role in the reputation for excellence of Rolex watches.\"', 'Titan'),
(33, 'Titan Automatic Watch ', 4, '1679139793.jpg', 16120, 99, '\"Automatic Watch with Blue Dial & Brown Strap.\"', 'Titan'),
(34, 'Titan Jacqueline Navy     ', 4, '1679140312.jpg', 9995, 101, '\"Jacqueline Navy Leather Watch for woman.\"', 'Titan'),
(35, 'Guess Women  Watch', 4, '1679140864.jpg', 775, 100, '\"IRIDESCENT CASE PURPLE GENUINE LEATHER WATCH.\"', 'Guess'),
(36, 'Noise Smart Watch', 1, '1679141558.jpg', 2341, 100, '\"Noise ColorFit Pro 2 Oxy Smartwatch with Spo2 Sensor.\"', 'Noise '),
(37, 'Rose Gold Women Watch   ', 1, '1679142633.jpg', 4299, 100, '\"A-TGTGA Smart Watch for Women (Dial/Receive Calls,150+ Faces) smartwatch for Android Phones and iPhone, Fitness Tracker with Sleep HR Monitoring,SMS Reminder,IP67 Waterproof. \"', 'TGTGA'),
(38, 'Sonata Stainless Stile ', 2, '1680342408.jpg', 1580, 111, '\"Sonata Stainlestil golden ladies watch..\"', 'Sonata'),
(39, 'Steal Belt Watch', 2, '1680342613.jpg', 1999, 16, '\"Steel Belt Watch Fashion Women Watches Ladies Solid Pattern Wristwatch Clock.\"', 'Impoted'),
(40, 'Arden Coach Watch', 2, '1680343048.jpg', 1299, 100, '\"Refined and modern, the Arden watch is a minimalist, go-with-everything style. This gold tone bracelet design is finished with a dimensional Coach Signature crown.\"', 'Impoted'),
(41, 'Guess Mens Watch', 2, '1680343240.jpg', 5850, 100, '\"Guess Mens Watch in Golden Adition .\"', 'Guess'),
(42, 'Omega Constellation', 3, '1680343459.jpg', 22299, 100, '\"The exalted splendour of jewellery manifested through a watch. Such is the promise of this unique and extraordinary Constellation - one of the most expensive Omega watches.\"', 'Omega '),
(43, 'G-SHOCK GM2100MG-1A ', 3, '1680343732.jpg', 23400, 16, '\"Luxury & Fashion Digital Watches Collection | G-SHOCK | CASIO.\"', 'G-Shock'),
(45, 'Gucci', 3, '1680344982.jpg', 2659, 100, '\"Rose GOld Watch For Women.\"', 'Gucci'),
(46, 'Hublot mens', 3, '1680345284.jpg', 6599, 100, '\"UNICO ESSENTIAL GREY WATCH FOR MEN\"', 'Hublot'),
(47, 'Onepluse watch', 4, '1680345684.jpg', 2469, 100, '\"Oneplus leather belt watch.\"', 'Onepluse '),
(48, 'Rolex Leather Watch', 4, '1680346005.jpg', 6599, 121, '\"Rollex leather watch for men .\"', 'Rolex '),
(49, 'Titan mens', 4, '1680346326.jpg', 5698, 100, '\"On Trend White Dial Leather Strap Watch.\"', 'Titan'),
(50, 'SYLVI Z BLACK ', 4, '1680348124.jpg', 1299, 100, '\"SYLVI\r\nHAWK Z BLACK.\"', 'NAVIFORCE');

-- --------------------------------------------------------

--
-- Table structure for table `return_products`
--

CREATE TABLE `return_products` (
  `id` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Product_quantity` int(100) NOT NULL,
  `Product_price` int(100) NOT NULL,
  `Total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `return_products`
--

INSERT INTO `return_products` (`id`, `Name`, `PhoneNumber`, `Product_name`, `Product_quantity`, `Product_price`, `Total`) VALUES
(32, 'shiv', '+918401902747', 'Fossil Gold Edition ', 1, 7999, 7999),
(33, 'JENISHA', '+918401902747', 'Quartz Woman Watch', 1, 1799, 1799),
(34, 'jenisha surani', '2599689430', 'Fossil Premium Leather Watch', 1, 4599, 4599);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `User_Id` int(13) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile_Number` varchar(13) NOT NULL,
  `Email_Id` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Birthdate` date NOT NULL,
  `Address` varchar(70) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`User_Id`, `Name`, `Mobile_Number`, `Email_Id`, `Password`, `Birthdate`, `Address`, `City`, `Pincode`) VALUES
(1, 'Henil Katrodiya', '9724461502', 'henilkatrodita444@gmail.com', 'HENIL111', '2003-02-22', '68-MARUTI NAGAR,NEAR HIRABAG', 'SURAT', '395006'),
(2, 'SHIV PATEL', '81284 46720', 'SHIVPATEL01234@GMAIL.COM', 'SHIV0123', '2003-04-20', '7-JOKHA ,NEAR KAMREJ,SURAT', 'kamrej,Surat', '395006'),
(3, 'JENISHA SURANI', '8866774499', 'Jenishasurani111@gmail.com', 'JENISHA1', '2003-02-02', 'B-301,MEGH MALHAR SOCITY,SARTHANA JAKATNAKA', 'SURAT', '395006'),
(4, 'Dixit Lathiya', '9427537553', 'dixitlathiya0777@gmail.com', 'DIXIT007', '2002-09-01', '108-chamunda row house,near punagam', 'SURAT', '395006'),
(5, 'Vishva Gujarati', '7795689544', 'Vishvagujarati@gmail.com', 'Vishva07', '2002-01-15', '68-suryoday soc, near yogichowk', 'SURAT', '395006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  ADD PRIMARY KEY (`Admin_Login_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `categories_types`
--
ALTER TABLE `categories_types`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`creditcardid`);

--
-- Indexes for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD PRIMARY KEY (`debitcardid`);

--
-- Indexes for table `ordersummary`
--
ALTER TABLE `ordersummary`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `Order_id` (`Order_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `return_products`
--
ALTER TABLE `return_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`,`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `categories_types`
--
ALTER TABLE `categories_types`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `creditcard`
--
ALTER TABLE `creditcard`
  MODIFY `creditcardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `debitcard`
--
ALTER TABLE `debitcard`
  MODIFY `debitcardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordersummary`
--
ALTER TABLE `ordersummary`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `return_products`
--
ALTER TABLE `return_products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `User_Id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
