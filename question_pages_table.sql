-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 10:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `s.no.` int(10) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `(A)` varchar(100) NOT NULL,
  `(B)` varchar(100) NOT NULL,
  `(C)` varchar(100) NOT NULL,
  `(D)` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`s.no.`, `questions`, `(A)`, `(B)`, `(C)`, `(D)`) VALUES
(1, 'The brain of any Computer system is.', 'ALU\r\n', 'CPU', 'Memory', 'Control Unit'),
(2, ' Who is the father of Computer?', 'James Gosling\r\n', 'Charles Babbage', 'Dennis Ritchie', 'Bjarne Stroustrup'),
(3, ' What is the full form of CPU?', 'Computer Processing Unit\r\n', 'Computer Principle Unit', 'Central Processing Unit', 'Control Processing Unit'),
(4, ' ALU stands for', 'Arithmetic Logic Unit\r\n', 'Application Logic Unit', 'Array Logic Unit', 'None of these'),
(5, 'Which of the following is not output device?', 'Printer\r\n', 'VDU', 'Scanner', 'All'),
(6, 'Which of the following is not input device?', 'Printer\r\n', 'Mouse', 'Touch Pad', 'None of these'),
(7, '_________ is Volatile Memory.', 'ROM\r\n', 'EPROME', 'HDD', 'RAM'),
(8, 'Hardware can work without device driver', 'True\r\n', 'False', '', ''),
(9, 'Which of the following device can be used to directly image printed text.', 'OCR\r\n', 'OMR', 'MICR', 'All of above'),
(10, 'Operating System is ', 'Hardware\r\n\r\n', 'Software which manage resources of the system', 'Software which perform computation', 'None of the Above');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `s.no.` int(10) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `(A)` varchar(100) NOT NULL,
  `(B)` varchar(100) NOT NULL,
  `(C)` varchar(100) NOT NULL,
  `(D)` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`s.no.`, `questions`, `(A)`, `(B)`, `(C)`, `(D)`) VALUES
(1, 'Who is a Inventor of PhP?', 'Guido Van Rossum\r\n', 'Rossum Van', 'Tim Burner\'s Lee', 'Rasmus Lerdrof '),
(2, 'Which of the following is correct about PHP?', 'Which of the following is correct about PHP?', 'PHP is a server side scripting language that is embedded in HTML.', ' It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sit', ' All of the above.'),
(3, 'Which of the following function is used to get length of a string?', 'strlen()', 'size()', 'length', ' None of these'),
(4, 'PhP Stands for _____?', ' Hypertext Transfer Protocol\r\n', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Preprocessed Hypertext Page '),
(5, ' What will be the output of this code?\r\n $var = \'false\';\r\nif ($var) {\r\necho \'true\';\r\n} else {\r\necho \'false\';\r\n}', 'True', 'False', '', ''),
(6, 'How do we access the value of \'d\' later? \r\n$a = array(\r\n\'a\',\r\n3 => \'b\',\r\n1 => \'c\',\r\n\'d\'\r\n); ', ' $a[0]\r\n$a[3]\r\n$a[2]\r\n$a[1] ', '$a[3]', '$a[2]', '$a[1] '),
(7, ' Which of the following is NOT a valid PHP comparison operator? ', ' >= ', ' <=> ', ' <> ', ' !='),
(8, 'Which statement about the code below is correct?\r\nclass A {}\r\nclass B {}\r\nclass C extends A, B {}', ' the code is perfectly fine ', ' classes can not be empty ', ' class C can not extend both A and B', ' qualifiers \'public\' or \'private\' are missing in class definitions '),
(9, 'Which of the following differences are valid between PHP 4 and PHP 5?', ' improved MySQL support', ' Support for inheritance ', ' Built-in native support for SQLite ', ' Both a and c '),
(10, ' What is the difference between echo and print? ', ' Echo can take multiple parameters where as print cannot', ' Print can take multiple parameters where as echo cannot ', 'They both behave the same. ', 'Print is a function where as echo is not.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `s.no.` int(10) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `(A)` varchar(100) NOT NULL,
  `(B)` varchar(100) NOT NULL,
  `(C)` varchar(100) NOT NULL,
  `(D)` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`s.no.`, `questions`, `(A)`, `(B)`, `(C)`, `(D)`) VALUES
(1, ' Who is a Inventor of Python?', ' Guido Van Rossum\r\n', 'Rossum Van', 'Tim Burner\'s Lee', 'Rasmus Lerdrof'),
(2, 'What is a correct syntax to output \"Hello World\" in Python?', ' print(\"Hello World\")', ' print(Hello World)\r\n', 'echo(\"Hello World\")', ' echo(Hello World)'),
(3, 'How do you create a variable with the numeric value 5?', ' x = 5', ' x = 5;', ' x = int(5)', ' All of the above'),
(4, ' What is the output of the following code?\r\nfor i in range(10,15,-1):\r\nprint(i) ', ' 10, 11, 12, 13, 14', ' 10, 11, 12, 13, 14, 15', '11, 12, 13, 14', '10, 11, 12, 13'),
(5, 'A string is immutable in Python?', 'True', 'False', '', ''),
(6, 'What is the output of the following code?\r\ns = \'\\t\\t\\t\\n\\nQuizzHub\\n\\n\\n\\t\\t\\t\'\r\ns.strip()', '\'\\n\\nQuizzHub\\n\\n\\n\'', ' \'QuizzHub\' , \'\\t\\t\\t\\n\\n \\n\\n\\n\\t\\t\\t\'\r\n\r\n', '\'QuizzHub\'', 'None of these'),
(7, 'Select the option for following code :\r\ns = 0\r\nfor d in range(0, 5, 0.1):\r\ns += d\r\nprint(s)', ' Syntax Error', ' Type Error\r\n\r\n', 'Runtime Error', 'Both b and c'),
(8, ' What will be the value of the following Python expression?\r\n a =4 + 3 % 5', '7', '1', '2', '4'),
(9, ' Which of the following is used to define a block of code in Python language?', ' Key\r\n\r\n\r\n', 'Indentation', ' Brackets', 'All of the Above'),
(10, ' Python supports the creation of anonymous functions at runtime, using a construct called _____', 'Anonymous\r\n\r\n\r\n', 'Pi', 'Lamda', 'None of the Above');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
