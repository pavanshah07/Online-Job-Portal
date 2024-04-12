-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 01:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg`
--

CREATE TABLE `candidate_reg` (
  `candidate_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `at_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`candidate_id`, `f_name`, `l_name`, `email`, `username`, `password`, `phone`, `address`, `city`, `state`, `pin_code`, `photo`, `status`, `at_date`) VALUES
(1, 'Pavan', 'Shah', 'shahpavan50@gmail.com', 'Pavan', 'Pavan12345', '8799423605', '10, Kailash, Bungalows, Surat', '1', '1', 395005, 'images/Pvn.png', 'accepted', '2023-04-19'),
(2, 'Juhi', 'Soni', 'sonijuhi@gmail.com', 'Juhi', 'Juhi12345', '9409534435', '201,Gajera cir. App.', '10', '1', 395820, 'images/Juhi.png', 'accepted', '2023-04-19'),
(3, 'Savita', 'Dharmik', 'dharmiksavi@gmail.com', 'Savi', 'Savi12345', '7227890838', '301, Bhagunagar Soc.', '7', '3', 395012, 'images/Savita.png', 'accepted', '2023-04-20'),
(4, 'Raghav', 'Soni', 'raghav@gmail.com', 'Raghav', 'Raghav12345', '8160541975', '34, Yogi Chowk', '1', '1', 395004, 'images/Raghav.png', 'accepted', '2023-04-20'),
(5, 'Soni', 'Yash', 'yash1212@gmail.com', 'Yash', 'Yash12345', '9925814763', '04, Sarita Soc.', '12', '2', 395001, 'images/yash.png', 'accepted', '2023-04-21'),
(6, 'Shah', 'Dipak', 'dipakshah12@gmail.com', 'Dipak', 'Dipak12345', '7990308370', '21, Sangam App.', '2', '1', 405211, 'images/dipak.png', 'accepted', '2023-04-22'),
(12, 'Pavan', 'Shah', 'shahpavan46@gmail.com', 'Pvn', 'Pavan12345', '8799423605', 'G-10, Kailash Appt, Surat,', '1', '1', 395006, 'images/Pvn.png', 'accepted', '2024-03-10'),
(13, 'Juhi', 'Soni', 'juhisoni@gmail.com', 'Juhu', 'Juhi12345', '8744535623', 'Gajera, Katargam, ', '1', '1', 395004, 'images/Juhi.png', 'accepted', '2024-03-08'),
(14, 'Savita', 'Dharmik', 'savi@gmail.com', 'Savita', 'Savi12345', '8744535623', 'Kalupur, Ahemdabad', '10', '1', 567345, 'images/Savita.png', 'accepted', '2024-03-05'),
(15, 'Raghu', 'Shah', 'raghavshah@gmail.com', 'Raghu', 'Raghav12345', '7899623467', 'Main road, Udaipur', '12', '2', 890567, 'images/Raghav.png', 'accepted', '2024-03-03'),
(16, 'Sanjay', 'Sain', 'sanju@gmail.com', 'Sanju', 'Sanju12345', '7844578934', 'Siri road, Jaipur', '13', '2', 456789, 'images/sanju.png', 'accepted', '2024-03-01'),
(18, 'Aaditya', 'Khoiwal', 'aadi12@gmail.com', 'Aadi', 'Aadi12345', '8765431238', 'Renuka bhavan', '9', '13', 567890, 'images/author-image-4-646x680.jpg', 'accepted', '2024-03-10'),
(20, 'Mihir', 'Soni', 'mihir@gmail.com', 'Mihir', 'Mihir12345', '8799453456', 'Pal , surat', '1', '1', 345678, 'images/mihir.png', 'accepted', '2024-03-10'),
(21, 'Jay', 'Patel', 'jaypatel12@gmail.com', 'Jay', 'Jay12345', '7689456789', 'Suray appt.', '14', '14', 345678, 'images/admin.jpg', 'accepted', '2024-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `citymaster`
--

CREATE TABLE `citymaster` (
  `cityid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citymaster`
--

INSERT INTO `citymaster` (`cityid`, `stateid`, `cityname`) VALUES
(1, 1, 'SURAT'),
(2, 1, 'VADODARA'),
(3, 2, 'JAISALMER'),
(7, 3, 'MUMBAI'),
(9, 13, 'BENGALURU'),
(10, 1, 'AHEMDABAD'),
(11, 3, 'BANDRA'),
(12, 2, 'UDAIPUR'),
(13, 2, 'JAIPUR'),
(14, 14, 'KOCHI');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `name`, `email`, `message`) VALUES
(8, 'Pavan Shah', 'shahpavan46@gmail.com', 'Plz apply for a job issue'),
(9, 'Juhi Soni', 'juhisoni21@gmail.com', 'Facing issue in login'),
(10, 'Savita dharmik', 'dharmiksavi@gmail.com', 'finding a technical issue in payment.'),
(11, 'Yash Soni', 'yashsoni065@gmail.com', 'Yash & sons tries to scam me. Please ban this company.'),
(12, 'Pavan Shah', 'pavanshah05@gmail.com', 'Work form home available?'),
(13, 'Raghav Shah', 'raghavshah12@gmail.com', 'i got some bug in login page.'),
(14, 'Sanjay Sain', 'sanju12@gmail.com', 'Is Part-time job available?');

-- --------------------------------------------------------

--
-- Table structure for table `done_exam`
--

CREATE TABLE `done_exam` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `que1_ans` varchar(255) NOT NULL,
  `que2_ans` varchar(255) NOT NULL,
  `que3_ans` varchar(255) NOT NULL,
  `que4_ans` text NOT NULL,
  `que5_ans` text NOT NULL,
  `score` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `candidate_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `done_exam`
--

INSERT INTO `done_exam` (`id`, `exam_id`, `employer_id`, `candidate_id`, `que1_ans`, `que2_ans`, `que3_ans`, `que4_ans`, `que5_ans`, `score`, `job_id`, `candidate_status`) VALUES
(6, 6, 2, 1, 'Hypertext Preprocessor', 'List Barely', '! (Exclamation)', 'global scope', '//', 1, 16, 'rejected'),
(7, 7, 2, 1, ' 120 metres', '45 km/hr', '3 : 2', '564', '589', 2, 17, 'selected'),
(8, 8, 5, 1, 'Bytecode is executed by JVM', 'Architecture Neutral', 'Unicode escape sequence', '8', '9', 10, 18, ''),
(9, 9, 5, 1, '0', '24', 'new List(3, true)', '15', '14', 2, 19, 'selected'),
(10, 3, 2, 5, 'Hypertext Preprocessor', 'Default constants', 'function myFunction()', 'uniqueid()', 'The isset() function is used to check whether a variable is set or not', 2, 12, 'selected'),
(11, 8, 5, 5, 'Bytecode is executed by JVM', 'Architecture Neutral', 'Unicode escape sequence', '8', '9', 10, 18, ''),
(12, 9, 5, 8, '0', '24', 'new List(3, true)', '//', 'java class', 2, 19, ''),
(13, 9, 5, 9, '0', '23', 'new List(false, 3)', '#', 'java class', 2, 19, ''),
(14, 9, 5, 13, '0', '24', 'new List(false, 3)', 'abc', 'java class\r\n', 1, 19, ''),
(15, 9, 5, 14, '0', '23', 'new List(false, 3)', 'abc', 'java class\r\n', 2, 19, ''),
(17, 9, 5, 15, '0', '23', 'new List(false, 3)', 'py', 'java class', 2, 19, ''),
(18, 13, 15, 15, '16', '//', '1969', 'py', '.py', 2, 23, 'selected'),
(19, 3, 2, 12, 'Hypertext Preprocessor', 'Inbuilt constants', 'function myFunction()', 'The uniqid() function generates a unique ID based on the microtime (the current time in microseconds).', 'The isset() function determines whether a variable is set', 2, 12, ''),
(20, 13, 15, 1, '32', '//', '1969', 'python', '.py', 1, 23, ''),
(21, 9, 11, 12, '0', '23', 'new List(3, true)', ' This for loop declaration is not valid because the increment/decrement statement is missing. ', 'Anonymous inner class', 3, 19, 'selected'),
(22, 3, 2, 2, 'Hypertext Preprocessor', 'Magic constants', 'function myFunction()', 'abvariab', 'variable set', 3, 12, 'selected'),
(23, 3, 2, 13, 'Hypertext Preprocessor', 'Magic constants', 'function myFunction()', 'avs', 'grgrg', 3, 12, 'selected'),
(24, 6, 4, 12, 'Hypertext Preprocessor', 'Rasmus Lerdrof', '$ (Dollar)', 'isset', '##', 3, 16, ''),
(25, 17, 17, 12, 'Universal Experience', 'User Interface', 'Hierarchy', 'hhjyh', 'ghth', 1, 28, 'selected'),
(26, 4, 1, 4, 'Both of the above\r\n', 'glob()\r\n', 'setcookie()\r\n', 'NO', '>?', 0, 13, 'rejected'),
(27, 15, 1, 2, 'npm install create-react-app', 'Render', '2', '3', 'Variable', 0, 25, 'selected');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `employer_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `at_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`employer_id`, `company_name`, `position`, `f_name`, `l_name`, `email`, `username`, `password`, `phone`, `address`, `city`, `state`, `pin_code`, `photo`, `status`, `at_date`) VALUES
(1, 'Shah', 'CEO', 'Pavan', 'Shah', 'shahpavan50@gmail.com', 'Pavan', 'Pavan12345', '8799423605', 'G-10, Kailash App.', '1', '1', 395820, 'images/Pvn.png', 'accepted', '2024-02-08'),
(2, 'Soni', 'CEO', 'Juhi', 'Soni', 'juhisoni21@gmail.com', 'Juhi', 'Juhi12345', '9409534435', 'Gajera, Katargam,', '14', '14', 396101, 'images/Juhi.png', 'accepted', '2023-03-30'),
(3, 'Raghu', 'CEO', 'Raghav', 'Shah', 'raghavshah12@gmail.com', 'Raghav', 'Raghav12345', '8160541975', '301, Khumbhariya Soc.', '12', '2', 395820, 'images/Raghav.png', 'accepted', '2023-01-18'),
(4, 'Savi', 'CEO', 'Savita', 'Dharmik', 'savi23@gmail.com', 'Savita', 'Savita12345', '7227890838', 'Vesu , Manek chok', '10', '1', 394101, 'images/Savita.png', 'accepted', '2023-04-22'),
(5, 'Yash & sons', 'CEO', 'Yash', 'Soni', 'yashsoni065@gmail.com', 'Yash', 'Yash12345', '6356750154', '04, Sarita Soc.', '7', '3', 394101, 'images/yash.png', 'accepted', '2023-04-22'),
(6, 'Dipak&sons', 'CEO', 'Dipak', 'Shah', 'dipakshah@gmail.com', 'Dipak', 'Dipak12345', '7990308370a', '23, Varsh Soc.', '9', '13', 395827, 'images/dipak.png', 'accepted', '2023-04-23'),
(8, 'test', 'CEO', 'Timbadiya', 'dvs', 'divu@gmail.com', 'test', 'Test@123', '9824434545', '88, Kailash Appartment', '2', '3', 395012, 'images/admin.jpg', 'pending', '2023-04-24'),
(9, ' Shah', 'CEO', 'Pavan', 'Shah', 'pvnshah@gmail.com', 'Pvn', 'Pavan12345', '8799423605', 'G-10, Kailash Appt, Surat,', '1', '1', 395006, 'images/Pvn.png', 'accepted', '2024-03-01'),
(11, 'soni', 'CEO', 'Mihir', 'Soni', 'mihir12@gmail.com', 'Mihir', 'Mihir12345', '9408710986', '21, Raj Mahal Soc.', '1', '1', 395820, 'images/mihir.png', 'accepted', '2023-04-25'),
(17, 'Soni', 'CEO', 'Juhu', 'Soni', 'soni123@gmail.com', 'Juhu', 'Juhi12345', '9876543212', 'Katargam , Surat', '1', '1', 395006, 'images/Juhi.png', 'accepted', '2024-03-05'),
(18, 'Savi', 'HR', 'Savita', 'Dharmik', 'savidharmik@gmail.com', 'Savita', 'Savi12345', '7899623467', 'Vesu , Surat', '1', '1', 395440, 'images/Savita.png', 'accepted', '2024-03-03'),
(19, 'Raghu', 'CEO', 'Raghu', 'Shah', 'ragahvshah@gmail.com', 'Raghu', 'Raghav12345', '7674578923', 'Sarita,, road, Kochi', '14', '14', 567345, 'images/Raghav.png', 'accepted', '2024-03-05'),
(20, 'J&P', 'Director', 'Pj', 'Shah', 'pjsoni54@gmail.com', 'PJ', 'Pavan12345', '8799423605', 'Bandra, Mumbai', '7', '3', 678234, 'images/Pvn.png', 'pending', '2024-03-10'),
(21, 'DJ Group', 'HR', 'Sani', 'Jain', 'sanijain@gmail.com', 'Sani', 'Sani@123', '8944356789', 'Virar, gali no5', '7', '3', 567345, 'images/admin.jpg', 'pending', '2024-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `que1` text NOT NULL,
  `que1_optA` varchar(255) NOT NULL,
  `que1_optB` varchar(255) NOT NULL,
  `que1_optC` varchar(255) NOT NULL,
  `que1_optD` varchar(255) NOT NULL,
  `que1_Ans` varchar(255) NOT NULL,
  `que2` text NOT NULL,
  `que2_optA` varchar(255) NOT NULL,
  `que2_optB` varchar(255) NOT NULL,
  `que2_optC` varchar(255) NOT NULL,
  `que2_optD` varchar(255) NOT NULL,
  `que2_Ans` varchar(255) NOT NULL,
  `que3` text NOT NULL,
  `que3_optA` varchar(255) NOT NULL,
  `que3_optB` varchar(255) NOT NULL,
  `que3_optC` varchar(255) NOT NULL,
  `que3_optD` varchar(255) NOT NULL,
  `que3_Ans` varchar(255) NOT NULL,
  `que4` text NOT NULL,
  `que5` text NOT NULL,
  `step` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `job_id`, `employer_id`, `que1`, `que1_optA`, `que1_optB`, `que1_optC`, `que1_optD`, `que1_Ans`, `que2`, `que2_optA`, `que2_optB`, `que2_optC`, `que2_optD`, `que2_Ans`, `que3`, `que3_optA`, `que3_optB`, `que3_optC`, `que3_optD`, `que3_Ans`, `que4`, `que5`, `step`) VALUES
(3, 12, 2, 'PHP stands for', 'Hypertext Preprocessor', 'Pretext Hypertext Preprocessor', 'Personal Home Processor', 'None of the above', 'Hypertext Preprocessor', 'Which of the following starts with __ (double underscore) in PHP?', 'Inbuilt constants', 'User-defined constants', 'Magic constants', 'Default constants', 'Magic constants', 'Which of the following is the correct way to create a function in PHP?', 'Create myFunction()', 'New_function myFunction()', 'function myFunction()', 'None of the above', 'function myFunction()', 'Write PHP function is used to generate unique id ?', 'What is the use of isset() function in PHP?', 6),
(4, 13, 1, 'What is the use of sprintf() function in PHP ?', 'used to print the output of program', 'used to send output to variable', 'Both of the above\n', 'None of the above\n', 'used to send output to variable', 'Which of the following function is used to find files in PHP?\n\n', 'glob()\n', 'fold()\n', 'file()\n', 'None of the above\n', 'glob()\n', 'Which of the following function is used to set cookie in PHP?\n\n', 'createcookie()\n', 'makecookie()', 'setcookie()\n', 'None of the above\n', 'setcookie()\n', 'Which is/are the code editors in PHP?\n\n', 'Which is used to end a statement in PHP?\n\n', 6),
(5, 14, 2, 'how many level do you have ???', '1', '2', '3', '4', '2', 'how many languages do you need ???', '1', '2', '3', '4', '2', 'how many animals are there ??', '2', '3', '4', '5', '4', 'why i select you ??', 'in what feild expriance do you have ??', 6),
(6, 16, 4, ' PHP stands for -', 'Hypertext Preprocessor', 'Pretext Hypertext Preprocessor', 'Personal Home Processor', 'None of the above', 'Hypertext Preprocessor', 'Who is known as the father of PHP?', 'Drek Kolkevi', 'List Barely', 'Rasmus Lerdrof', 'None of the above', 'Rasmus Lerdrof', 'Variable name in PHP starts with -', '! (Exclamation)', '$ (Dollar)', '& (Ampersand)', '# (Hash)', '$ (Dollar)', 'Which of the following is not a variable scope in PHP?', 'Which of the following is correct to add a comment in php?', 6),
(7, 17, 6, 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', ' 120 metres', ' 180 metres', '324 metres', '150 metres', ' 120 metres', 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', ' 50 km/hr', ' 54 km/hr', ' 55 km/hr', ' 50 km/hr', 'Two trains running in opposite directions cross a man standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is:', ' 1 : 3', '3 : 2', ' 3 : 4', 'None of these', '3 : 2', '\nA train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr', 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', 6),
(8, 18, 5, ' Which of the following option leads to the portability and security of Java?\r\n\r\n', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', 'Bytecode is executed by JVM', 'Which of the following is not a Java features?\r\n\r\n', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Dynamic', 'The u0021 article referred to as a\r\n\r\n', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'Unicode escape sequence', ' Which of the following is a valid declaration of a char?', 'What is the return type of the hashCode() method in the Object class', 6),
(9, 19, 11, 'What does the expression float a = 35 / 0 return?', '0', 'Not a Number', 'Infinity', 'Run time exception', '0', 'Evaluate the following Java expression, if x=3, y=5, and z=10:\r\n\r\n++z + y - y + z + x++', '24', '23', '20', '25', '23', 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'new List(false, 3)', 'new List(3, true)', 'new List(true, 3)', 'new List(3, false)', 'new List(3, true)', 'Which of the following for loop declaration is not valid?', 'Which of the following is true about the anonymous inner class?', 6),
(13, 23, 15, 'What is the maximum possible length of an identifier?\r\n', '16', '32', '56', '23', '16', 'Which character is used in Python to make a single line comment?', '//', '/', '?', ';', '//', 'In which year was the Python language developed?', '1995', '1969', '1898', '1789', '1995', 'In which language is Python written?\r\n', 'Which one of the following is the correct extension of the Python file?', 6),
(14, 24, 1, ' \r\nAutomatic type conversion is possible in which of the possible cases?', 'Byte to int', 'int to long', 'long to int ', 'short to int', 'int to long', ' Which one of the following is not a Java feature?', ' Object-oriented', 'Use of pointers', 'Portable', ' Dynamic and Extensible', 'Use of pointers', ' Which of these cannot be used for a variable name in Java?', 'identifier & keyword', ' identifier', ' keyword', ' none of the mentioned', 'keyword', ' What is the extension of java code files?', '. Which environment variable is used to set the java path?', 6),
(15, 25, 1, 'Which of the following command is used to install create-react-app?', 'npm install -g create-react-app', 'npm install create-react-app', 'npm install -f create-react-app', 'npm install -f create-react-app install -g create-react-app', 'npm install -g create-react-app', 'Which of the following acts as the input of a class-based component?', 'Class', 'Factory', 'Render', 'Props', 'Props', 'How many numbers of elements a valid react component can return?', '1', '2', '5', '4', '1', ' How many ways of defining your variables in ES6?', ' What is a state in React?', 6),
(16, 27, 9, 'What is the size of float and double in java?', '32 34', '32 32', '64 64', '34 64', '32 34', 'Number of primitive data types in Java are?', '6', '7', '8', '9', '8', 'Arrays in java are-\r\n\r\n\r\n\r\n\r\n\r\n', 'Object', 'object reference', 'primitive data type', 'none', 'object', 'When is the finalize() method called?\r\n\r\n\r\n\r\n\r\n', 'What is the variables declared in a class for the use of all methods of the class called?\r\n\r\n\r\n\r\n\r\n\r\n', 6),
(17, 28, 17, 'What does \"UX\" stand for in web design?', 'Universal Experience', 'User Experience', 'User Expertise', 'Universal Expertise', 'User Experience', 'What does \"UI\" stand for in web design?', 'User Interaction', 'User Interface', 'Universal Interface', 'User Impact', 'User Interface', 'Which design principle emphasizes the consistency of design elements and user interactions across a website?', 'Proximity', 'Hierarchy', 'Consistency', 'Emphasis', 'Consistency', ' Which term refers to the process of designing web interfaces that are easy for users to understand and navigate?', 'What is the primary purpose of \"mockups\" in web design?', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_photo` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_post` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `descriprition` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `at_create` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `company_photo`, `position`, `location`, `job_post`, `skills`, `descriprition`, `time`, `salary`, `employer_id`, `step`, `at_create`) VALUES
(12, 'Soni Industries12', 'images/job/product-3-720x480.jpg', 'HR1233', 'Ahmedabad, Gujarat', 'Web Designer', 'HTML,CSS,JQuery', 'bgggg', 'Part-time', '8000', 2, 6, '2023-03-20'),
(13, 'Industries', 'images/job/product-1-720x480.jpg', 'CEO', 'Surat, Gujarat', 'Android Designer', 'HTML,CSS,JQuery', 'fgrtyhujiftged', 'Full-time', '6000', 1, 6, '2023-03-22'),
(14, 'Soni Industries12', 'images/job/contact-1-600x400.jpg', 'HR', 'Surat, Gujarat', 'Android developer', 'HTML,android studio', 'aswdefrtgyhujiklbgvfcdxsz', 'Full-time', '23210', 2, 6, '2023-03-24'),
(15, 'soni', 'images/job/product-1-720x480.jpg', 'CFO', 'Surat,Gujarat', 'Android developer', 'HTML,android studio', 'aswdefrtgyhujiklbgvfcdxsz', 'Full-time', '23210', 3, 6, '2023-03-24'),
(16, 'infosys', 'images/job/product-2-720x480.jpg', 'CFO', 'Surat,Gujarat', 'Php developer', 'HTML,android studio', 'All', 'Full-time', '65000', 4, 6, '2023-04-17'),
(17, 'Desai', 'images/job/product-1-720x480.jpg', 'CFO', 'Surat,Gujarat', 'Android developer', 'Aptitude', 'all', 'Full-time', '23210', 6, 6, '2023-04-17'),
(18, 'infosys', 'images/job/infosys.jpg', 'Manager', 'Mumbai, Maharastra', 'Java Developer', 'Basic Oops, Core java,Dsa', 'Java Dev: Design and develop software using Java programming language.\r\nCode and test software, fix bugs and maintain existing code.\r\nCollaborate with team members and stakeholders to identify requirements and deliver solutions.\r\nWrite clean, efficient, and well-documented code.', 'Full-time', '80000', 5, 6, '2023-04-19'),
(19, 'Tcs', 'images/job/TCS_Logo (1).jpg', 'Employer', 'Vadodara, Gujarat', 'Java Developer', 'Basic Oops, Core java,Dsa', 'Java Dev: Design and develop software using Java programming language.\r\nCode and test software, fix bugs and maintain existing code.\r\nCollaborate with team members and stakeholders to identify requirements and deliver solutions.\r\nWrite clean, efficient, and well-documented code.', 'Full-time', '1000000', 11, 6, '2023-04-19'),
(25, 'Microsoft', 'images/job/microsoft.jpg', 'Manager', 'Mumbai', 'MERN Stack ', 'React.js , MongoDB, MERN', 'ALL WORKS', 'Part-time', '50000', 1, 6, '2024-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `selected_candidate`
--

CREATE TABLE `selected_candidate` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `at_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selected_candidate`
--

INSERT INTO `selected_candidate` (`id`, `candidate_id`, `employer_id`, `job_id`, `at_date`) VALUES
(4, 1, 5, 19, '2023-04-19'),
(5, 15, 15, 23, '2023-04-19'),
(6, 2, 2, 12, '2023-12-25'),
(7, 12, 11, 19, '2023-12-25'),
(8, 12, 11, 19, '2023-12-27'),
(9, 13, 2, 12, '2023-12-27'),
(10, 12, 17, 28, '2024-03-09'),
(11, 12, 17, 28, '2024-03-09'),
(14, 2, 1, 25, '2024-03-10'),
(15, 1, 2, 17, '2024-03-10'),
(16, 5, 2, 12, '2024-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `statemaster`
--

CREATE TABLE `statemaster` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statemaster`
--

INSERT INTO `statemaster` (`stateid`, `statename`) VALUES
(1, 'GUJARAT'),
(2, 'RAJASTHAN'),
(3, 'MAHARASHTRA'),
(13, 'KARNATAKA'),
(14, 'KERLA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `done_exam`
--
ALTER TABLE `done_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_candidate`
--
ALTER TABLE `selected_candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statemaster`
--
ALTER TABLE `statemaster`
  ADD PRIMARY KEY (`stateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `citymaster`
--
ALTER TABLE `citymaster`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `done_exam`
--
ALTER TABLE `done_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `selected_candidate`
--
ALTER TABLE `selected_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `statemaster`
--
ALTER TABLE `statemaster`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
