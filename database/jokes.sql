-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2023 at 12:33 AM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andreari_joke-o-pedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `jokes`
--

CREATE TABLE `jokes` (
  `id` int(11) NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `joke` varchar(280) CHARACTER SET utf8mb4 NOT NULL,
  `punchline` varchar(70) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jokes`
--

INSERT INTO `jokes` (`id`, `type`, `joke`, `punchline`) VALUES
(1, 'pun', 'Why was six afraid of seven?', 'Because 7-8-9'),
(2, 'anti-joke', 'What did the cowboy say at his second rodeo?', 'This ain\'t my first rodeo!'),
(3, 'Pun', 'What do you call a fake noodle?', 'an impasta'),
(4, 'Anti-joke', 'I can still remember my Grandpa\\\'s last words before he kicked the bucket.', 'He said, \\\"Hey, how far do you think I can kick this bucket?\\\"'),
(5, 'Dark humor', 'Son: How do stars die?', 'Dad: An overdose, usually.'),
(6, 'Knock-knock', 'Knock knock? Who\\\'s there? Orange? Orange who?', 'Orange you glad I didn\\\'t say socks!'),
(7, 'One-liner', 'I went to buy some camo pants but couldnâ€™t find any.', 'n/a'),
(8, 'Other', 'Why should you always borrow money from a pessimist?', 'Because they\\\'ll never expect it back!'),
(9, 'Anti-joke', 'What\\\'s blue and smells like red paint?', 'blue paint'),
(10, 'Pun', 'Whatâ€™s the difference between a hippo and a zippo?', 'Oneâ€™s pretty heavy and the otherâ€™s a little lighter.'),
(11, 'One-liner', 'The last thing I want to do is hurt you; but itâ€™s still on the list.', 'n/a'),
(12, 'Dark humor', 'why did sally fall off the swing?', 'Because she had no arms');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jokes`
--
ALTER TABLE `jokes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jokes`
--
ALTER TABLE `jokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
