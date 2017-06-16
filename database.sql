-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 01:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--
CREATE DATABASE IF NOT EXISTS `sih` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sih`;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `cid` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`cid`, `regno`, `cname`, `email`, `password`, `phone`, `image`) VALUES
(1, '0001', 'Techno India NJR', 'techno@technonjr.org', 'techno', '987654321', 'techno.jpg'),
(2, '0002', 'Geetanjali Institute of Technology', 'git@git.org', 'git', '987456321', 'git.jpg'),
(3, '003', 'Arya College OF Engg.', 'aryacollegeengg@ayainfo.in', 'aryacollege', '77375826358', 'arya.jpg'),
(4, '0004', 'Pacific College', 'pacific_college@gmail.com', 'pacificcollge', '8696932742', 'Pacific.jpg'),
(5, '0005', 'Poornima College Of Engg.', 'Poornima_College@poo.in', 'sacninas', '7412536983', 'poo.jpg'),
(6, '0006', 'MNIT', 'MNIT_College@MNIT.in', 'sascinnnsdf', '9563258741', 'MNIT.jpg'),
(7, '0007', 'JSS Technical College', 'JSS@gmail.cpm', 'sachinsabdfjsha', '963258741', 'JSS.jpg'),
(8, '0008', 'SKIT College Of Engg.', 'SKITcollege@gmail.com', 'nitinsaknjajdfsa', '7742194998', 'SKIT.jpg'),
(9, '0009', 'Government College OF Enginerring,Ajmer', 'govt_ajmer@yahoo.com', '3456543212', '7412036985', 'Govt_ajmer.jpg'),
(10, '000010', 'Aryabhatta college of enginerring and research center', 'aryabhatta@gmail.com', 'jsskjskjdf', '7652147856', 'aryabhatt.jpg'),
(11, '000011', 'St wilfreds institute of engineering and technology', 'st_wilfreds@tecjhnonjr.in', 'researcher', '9828675024', 'st.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `ptitle` tinytext NOT NULL,
  `pdetail` longtext NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pimage` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `plike` int(11) NOT NULL DEFAULT '0',
  `pdislike` int(11) NOT NULL DEFAULT '0',
  `venue` varchar(100) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `etime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `cid`, `ptitle`, `pdetail`, `ptime`, `pimage`, `category`, `plike`, `pdislike`, `venue`, `stime`, `etime`) VALUES
(1, 1, 'IOT Workshop', 'Topics To Be Covered\r\n1. Introduction to Robotics.\r\n2. Introduction to Embedded systems.\r\n3. Introduction to programming in embedded.\r\n4. Introduction to Relay Driver IC.\r\n5. Introduction to ADC.\r\n6. Introduction To Wifi.\r\n7. Introduction to ESP 8266 module.\r\n8. Introduction to GPRS. Introduction to TCP/IP.\r\n\r\nWho Could Attend ?\r\n1. Students seeking future in Embedded and Robotics Industry.\r\n2. Robotics enthusiasts who want to accomplish the impossible.\r\n3. Any Engineering student of any year and any branch is eligible for this workshop.\r\n4. College teaching staff & faculties and workshop coordinators.', '2017-04-01 18:45:09', 'iot_workshop123.jpg', 'Workshop', 0, 0, 'Udaipur', '2017-04-15 08:00:00', '2017-04-15 17:00:00'),
(2, 2, 'Data Mining:Beyond Globally Optimal: Focused Learning for Improved Recommendations', 'Abstract\r\n\r\nWhen building a recommender system, how can we ensure that all items are modeled well? Classically, recommender systems are built, optimized, and tuned to improve a global prediction objective, such as root mean squared error. However, as we demonstrate, these recommender systems often leave many items badly-modeled and thus under-served. Further, we give both empirical and theoretical evidence that no single matrix factorization, under current state-of-the-art methods, gives optimal results for each item.\r\n\r\nAs a result, we ask: how can we learn additional models to improve the recommendation quality for a specified subset of items? We offer a new technique called focused learning, based on hyperparameter optimization and a customized matrix factorization objective. Applying focused learning on top of weighted matrix factorization, factorization machines, and LLORMA, we demonstrate prediction accuracy improvements on multiple datasets. For instance, on MovieLens we achieve as much as a 17% improvement in prediction accuracy for niche movies, cold-start items, and even the most badly-modeled items in the original model.', '2017-04-01 18:44:55', 'data_mining2.jpg', 'Research', 0, 0, 'Udaipur', '2017-04-08 10:00:00', '2017-04-09 17:00:00'),
(3, 1, 'Google Cloud Training', 'aining and Certification for you to make the most of Google Cloud technologies. Our classes include technical skills and best practices to help you get up to speed quickly and continue your learning journey. We offer fundamental to advanced level training in on-demand, live, and virtual options. Certifications help you validate and prove your skill and expertise in Google Cloud technologies.', '2017-04-02 07:43:22', 'cloud3.png', 'Training', 0, 0, 'Udaipur', '2017-04-03 08:00:00', '2017-04-06 15:00:00'),
(4, 1, ' Certificate Course on Research Methodology', 'The Objective of this course to pay attention to the most important dimension of Research i.e. Research Methodology. It will enable the Researchers to develop the most appropriate methodology for their Research Studies. The mission of the course is to impart research skills to the beginners and help improve the quality of Research by the existing researchers.\r\n\r\nThe Course Structure is designed in a way that the learning of Research Methodology can move from Mugging up syndrome to fun-practical method; from a teaching process to an experimental process, from memorizing to brainstorming, from clearing the examination to feedback learning, from knowledge transfer to knowledge creation, from competitive learning to collaborative learning. \r\n\r\nThe Participants of the Course will start the course by reading the provided literature at the end of the course they will find themselves equipped enough to author a book or two themselves.\r\n\r\nThis course is now available in all the major languages. Study Material can also be provided in your language.You can request for the same by sending us an email.', '2017-04-02 08:51:56', 'machine4.jpg', 'Training', 0, 0, 'Udaipur', '2017-04-01T08:00', '2017-05-01T15:00'),
(5, 2, 'Introduction to Deep Learning with IntelÂ® Nervanaâ„¢ and the Neonâ„¢ Framework', 'Watch this technical session to learn about IntelÂ® Nervanaâ„¢ technology and the Neonâ„¢ deep learning framework. Intel engineer John Lakness walks us through a variety of use cases and technology solutions using the Neonâ„¢ framework, as well as dives deep into the various techniques and methods for training deep neural networks using the Neonâ„¢ framework.', '2017-04-02 08:59:49', 'artificial5.jpg', 'Research', 0, 0, 'Udaipur', '2017-04-06T10:00', '2017-04-07T17:00'),
(6, 2, 'Data Mining, Data Analytics', 'Brief introduction of data mining and analysis of data by google developer and its future scope.', '2017-04-02 10:48:19', '12.jpg', 'Seminar', 0, 0, 'CTAE Udaipur', '2017-04-24 10:00:00', '2017-04-24 14:00:00'),
(8, 2, 'Tranings on Raspberry pi Technology', 'Wide informaton of this technology will be provided.', '2017-04-02 10:49:39', '13.jpg', 'Training', 0, 0, 'jodhpur', '2017-04-03 06:00:20', '2017-04-10 07:27:38'),
(9, 2, 'Workshop on GUI.', 'Brief introduction to GUI will be  provided.', '2017-04-02 10:49:27', '14.jpg', 'Workshop', 0, 0, 'Alwar', '2017-06-07 10:00:00', '2017-06-07 18:00:00'),
(10, 1, 'Research on IOT with Infrastructure\r\n', 'Great Research By 3rd year mechnical and computer Science Engg. Students.\r\nThey analysis on large phase.\r\n In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus', '2017-04-02 10:49:11', '24.jpg', 'Research', 0, 0, 'Techno india ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 20, 'Research on IOT with Infrastructure\r\n', 'Great Research By 3rd year mechnical and computer Science Engg. Students.\r\nThey analysis on large phase.\r\n In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus', '2017-04-02 10:30:50', '', 'Research', 0, 0, 'Techno india ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'Seminar on SWACHH BHARAT ABHIYAN ', 'This seminar is going online which is taking by PM Narendra Modi.\r\nSo more and more participant should participate and take a knowledge.', '2017-04-02 10:48:51', '18.jpg', 'Seminar', 0, 0, 'S.S. College Of Engginerring', '2017-05-12 12:00:00', '2017-05-15 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `scollege` varchar(100) NOT NULL,
  `sphone` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `email`, `password`, `username`, `sname`, `scollege`, `sphone`, `city`) VALUES
(1, 'sachinbadalaudr@gmail.com', 'sachin', 'sachin', 'Sachin Badala', 'Techno India NJR', '8386853265', 'Udaipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
