-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 06:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jojo_streamer`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `s_index` int(10) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `episode_no` int(10) NOT NULL,
  `comment_data` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`s_index`, `u_name`, `episode_no`, `comment_data`, `status`) VALUES
(1, 'suplexbb', 1, 'hello bratan', 1),
(2, 'suplexbb', 1, 'heelo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `episode_list`
--

CREATE TABLE `episode_list` (
  `s_index` int(10) NOT NULL,
  `episode_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episode_list`
--

INSERT INTO `episode_list` (`s_index`, `episode_no`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `series_info`
--

CREATE TABLE `series_info` (
  `s_index` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_summary` text NOT NULL,
  `s_image` varchar(20) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_count` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series_info`
--

INSERT INTO `series_info` (`s_index`, `s_name`, `s_summary`, `s_image`, `add_date`, `view_count`) VALUES
(1, 'One Punch Man', 'The seemingly ordinary and unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, he trained relentlessly for three years—and lost all of his hair in the process. Now, Saitama is incredibly powerful, so much so that no enemy is able to defeat him in battle. In fact, all it takes to defeat evildoers with just one punch has led to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.', 'opm.jpg', '2016-11-26 18:25:05', 0),
(2, 'Fairy Tail', 'Set in an imaginary world, the Earth Land, there exists a Mage Guild called "Fairy Tail". Fairy Tail is stationed in the town Magnolia, residing in the Kingdom of Fiore, and is currently governed by Makarov, Guild''s master. \r\n\r\nLucy Heartfilia, a 17-year-old girl, wishes to become a full-fledged mage and join one of the most prestigious Mage Guilds in the world, Fairy Tail. \r\n\r\nOne day, out of pure coincidence, she meets Natsu Dragneel, a boy who is transportation-sick, but very cheerful in nature. However, the thing she does not know is that Natsu is the closest connection to Fairy Tail, as he is a Mage in Fairy Tail.', 'fairy tail.jpg', '2016-11-26 12:23:09', 0),
(3, 'Shingeki no Kyojin', 'Several hundred years ago, humans were nearly exterminated by giants. Giants are typically several stories tall, seem to have no intelligence, devour human beings and, worst of all, seem to do it for the pleasure rather than as a food source. A small percentage of humanity survived by walling themselves in a city protected by extremely high walls, even taller than the biggest of giants.\r\n\r\nFlash forward to the present and the city has not seen a giant in over 100 years. Teenage boy Eren and his foster sister Mikasa witness something horrific as the city walls are destroyed by a super giant that appears out of thin air. As the smaller giants flood the city, the two kids watch in horror as their mother is eaten alive. Eren vows that he will murder every single giant and take revenge for all of mankind.', 'aot.jpg', '2016-11-26 12:27:17', 0),
(4, 'Tokyo Ghoul', 'The suspense horror/dark fantasy story is set in Tokyo, which is haunted by mysterious "ghouls" who are devouring humans. People are gripped by the fear of these ghouls whose identities are masked in mystery. An ordinary college student named Kaneki encounters Rize, a girl who is an avid reader like him, at the café he frequents. Little does he realize that his fate will change overnight.', 'tokyo ghoul.jpg', '2016-11-26 12:27:17', 0),
(5, 'Steins;Gate', 'Steins;Gate is set in the summer of 2010, approximately one year after the events that took place in Chaos;Head, in Akihabara.\r\n\r\nSteins;Gate is about a group of friends who have customized their microwave into a device that can send text messages to the past. As they perform different experiments, an organization named SERN, who has been doing their own research on time travel, tracks them down and now the characters have to find a way to avoid being captured by them.', 'steins gate.jpg', '2016-11-26 12:29:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_name` varchar(20) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pass` varchar(15) NOT NULL,
  `u_type` varchar(10) NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_name`, `u_email`, `u_pass`, `u_type`) VALUES
('suplexbb', 'supricorn@gmail.com', '776020', 'normal'),
('suplexbb32', 'supricorn23@gmail.com', '776020', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`s_index`,`u_name`,`episode_no`),
  ADD KEY `comments_ibfk_1` (`u_name`),
  ADD KEY `s_index` (`s_index`,`episode_no`);

--
-- Indexes for table `episode_list`
--
ALTER TABLE `episode_list`
  ADD PRIMARY KEY (`s_index`,`episode_no`);

--
-- Indexes for table `series_info`
--
ALTER TABLE `series_info`
  ADD PRIMARY KEY (`s_index`),
  ADD UNIQUE KEY `index_no` (`s_index`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_name`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `series_info`
--
ALTER TABLE `series_info`
  MODIFY `s_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`u_name`) REFERENCES `user_info` (`u_name`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`s_index`,`episode_no`) REFERENCES `episode_list` (`s_index`, `episode_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `episode_list`
--
ALTER TABLE `episode_list`
  ADD CONSTRAINT `episode_list_ibfk_1` FOREIGN KEY (`s_index`) REFERENCES `series_info` (`s_index`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
