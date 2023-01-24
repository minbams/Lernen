-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 06:32 PM
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
-- Database: `databaselern`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` varchar(11) NOT NULL,
  `id_member` varchar(11) NOT NULL,
  `emailcontact` varchar(50) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `id_member`, `emailcontact`, `topic`, `message`) VALUES
('CT00001', 'M00001', 'Thunsuda.jai@gmail.com', 'Topic', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` varchar(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `length` varchar(50) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `video` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `subject`, `coursename`, `price`, `content`, `length`, `requirement`, `description`, `image`, `video`) VALUES
('C00001', 'ENGLISH', 'Grammar Start-Up', 399, 'The parts of an English sentence, Nouns, Verbs , A Closer Look at Sentence Objects, The Other Words, Adjectives, Adverbs and More, Prepositions, Conjunctions, The Four Sentence Types and The Four Sentence Structures', 'Total Length 1 Hour 18 Minutes', 'Requirements : A basic understanding of English is needed to listen to the lectures.', 'Who this course is for : Take this course if you want to build a strong understanding of English structure.', '1.png', '1'),
('C00002', 'ENGLISH', 'Speak English With Confidence', 1200, 'Why your mind goes blank, They key to conversation confidence, The magic trick that the \"naturals\" use, A five-minute exercise for spontaneity, How to never run out of things to say and How to talk about yourself and tell great stories', 'Total Length 3 Hours 55 Minutes', 'Requirements : An open mind and desire to improve.', 'Who this course is for : Anyone whose mind goes blank during conversations, Anyone who wants to improve their social skills and Anyone who struggles with shyness.', '2.png', '2'),
('C00003', 'MATHEMATICS', 'Calculas I', 2500, 'Limits & Continuity, Derivatives and Applications of Derivatives', 'Total Length 12 Hours 46 Minutes', 'Requirements : If you have some experience with Trigonometry and Precalculus, that will definitely be helpful, but it\'s not absolutely necessary.', 'Who this course is for : Current calculus students, or students about to start calculus who are looking to get ahead, Homeschool parents looking for extra support with calculus and Anyone who wants to study calculus for fun.', '3.png', '3'),
('C00004', 'MATHEMATICS', 'Calculas II', 2500, 'Integrals, Applications of Integrals, Polar & Parametric and Sequences & Series', 'Total Length 30 Hours 58 Minutes', 'Requirements : A good foundation in Calculus I (limits and derivatives) is required for this course.', 'Who this course is for : Anyone who\'s completed Calculas I and wants to take the next step, Current calculus students or students about to start Calculas II who are looking to get ahead.', '4.png', '4'),
('C00005', 'PHYSICS', 'Basic Physics For Beginners', 599, 'Standard & Metric System including Metric Prefixes, Vectors & Scalars, Standard & Scientific Notation, Linear Motion (1-Dimensional Motion), Projectile Motion: 2-Dimensional Motion, Newton\'s Laws of Motion, Free Body Diagrams and Forces Actin', 'Total Length 18 Hours 17 Minutes', 'Requirements : I suggest you have access to a printer to be able to print out the worksheets associated with each lesson.', 'Who this course is for : High School students, Anyone interested in learning about Physics and Final Exam Prep.', '5.png', '5'),
('C00006', 'PROGRAMMING', 'Introduction to Programming with Python', 2000, 'Programming Fundamentals, Python Basics, Python Fundamentals, Data Structures, Object Oriented Programming with Python, Functional Programming with Python, Lambdas, Decorators, Generators, Testing in Python, Debugging And more', 'Total Length 72 Hours 30 Minutes', 'Requirements : Your enthusiasm to learn this go-to programming language. It’s a valuable lifetime skill which you can’t un-learn!', 'Who this course is for : Beginners with no previous programming experience looking to obtain the skills to get their first programming job and Anyone looking to to build the minimum Python programming skills.', '6.png', '6'),
('C00007', 'PROGRAMMING', 'Object-Oriented Programming', 829, 'Write clean code that is reusable, modular, and readable, Level up your Python programming skills, Learn the fundamental object-oriented programming concepts, Apply OOP concepts to your Python code and Work on a project', 'Total Length 5 Hours 37 Minutes', 'Requirements : Basic understanding of Python lists, dictionaries and functions.', 'Who this course is for : Beginners who want to learn the fundamental concepts of object-oriented programming and Beginners who want to learn how to apply object-oriented programming concepts in Python.', '7.png', '7'),
('C00008', 'MARKETING', 'Social Media Marketing Mastery', 1500, 'Facebook, Instagram, Twitter, Pinterest, Google Ads and Google My Business, Youtube, LinkedIn and Other Social Media Platforms', 'Total Length 10 Hours 17 Minutes', 'Requirements : A desire to grow your businesses via Social Media Marketing.', 'Who this course is for : New or Advanced MARKETERS looking to learn how to create ads on all the social media networks, Business Owners and Social Media Marketing Employees.', '8.png', '8'),
('C00009', 'BUSINESS', 'Customer Service Training', 649, 'Empathy: Show sympathy and empathy to your customers, Take Control: To achieve conflict resolution in customer service, you must take control of the situation, Advocacy: Where we focus on turning upset customers into brand advocates', 'Total Length 49 Minutes', 'Requirements : Eagerness to improve your customer relationship management skills.', 'Who this course is for : Customer service managers, Customer service representatives and Sales professionals.', '9.png', '9');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `userpass` varchar(30) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `userpass`, `fname`, `lname`, `email`, `phone`) VALUES
('M00001', 'minbams', '1234', 'Thunsuda', 'Jaidee', 'thunsuda.jai@gmail.com', 812345678),
('M00002', 'somchai', '1234', 'Somchai', 'Jaidee', 'somchai.jai@gmail.com', 809876126);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id_receipt` varchar(11) NOT NULL,
  `id_course` varchar(11) NOT NULL,
  `id_member` varchar(11) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnum` varchar(19) NOT NULL,
  `expiry` varchar(5) NOT NULL,
  `cvv` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id_receipt`, `id_course`, `id_member`, `cardname`, `cardnum`, `expiry`, `cvv`) VALUES
('R00001', 'C00002', 'M00001', 'Thunsuda Jaidee', '1234 1234 1234 1234', '11/07', '125');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_address`
--

CREATE TABLE `receipt_address` (
  `id_receipt` varchar(11) NOT NULL,
  `id_member` varchar(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt_address`
--

INSERT INTO `receipt_address` (`id_receipt`, `id_member`, `street`, `city`, `state`, `zipcode`) VALUES
('R00001', 'M00001', 'Tiwanon', 'Pakkret', 'Nonthaburi', '11120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id_receipt`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `receipt_address`
--
ALTER TABLE `receipt_address`
  ADD PRIMARY KEY (`id_receipt`),
  ADD KEY `id_member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
