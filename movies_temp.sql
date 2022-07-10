-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 06:13 PM
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
-- Database: `movies_temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies_list`
--

CREATE TABLE `movies_list` (
  `num` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `length` varchar(10) NOT NULL,
  `rating` varchar(7) NOT NULL,
  `year` varchar(6) NOT NULL,
  `image` varchar(50) NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `director` varchar(20) NOT NULL,
  `starring` varchar(100) NOT NULL,
  `views` varchar(9) NOT NULL,
  `genre1` varchar(20) NOT NULL,
  `genre2` varchar(20) NOT NULL,
  `genre3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies_list`
--

INSERT INTO `movies_list` (`num`, `movie_name`, `length`, `rating`, `year`, `image`, `trailer`, `video`, `description`, `director`, `starring`, `views`, `genre1`, `genre2`, `genre3`) VALUES
(2, 'John Wick 3', '2h 11m', '7.4/10', '2019', 'jw3_image.jpg', 'jw3_trailer.mp4', 'jw3_movie.mp4', 'After gunning down a member of the High Table  -the shadowy international assassin\'s guild -legendary hit man John Wick finds himself stripped of the organization\'s protective services. Now stuck with a $14 million bounty on his head, Wick must fight his way through the streets of New York as he becomes the target of the world\'s most ruthless killers.', 'Chad Stahelski', '	\r\nKeanu Reeves, Halle Berry, Laurence Fishburne, Mark Dacascos', '981,000', 'Crime', 'Mystery', 'Thriller'),
(3, 'Tenet', '2h 30m', '7.3/10', '2020', 'tenet_image.jpg', 'tenet_trailer.mp4', 'tenet_movie.mp4', 'When a few objects that can be manipulated and used as weapons in the future fall into the wrong hands, a CIA operative, known as the Protagonist, must save the world.', 'Christopher Nolan', 'John David Washington, Robert Pattinson, Elizabeth Debicki, Dimple Kapadia', '782,000', 'Science Fiction', 'Spy', 'Crime'),
(4, 'Wonder Woman 1984', '2h 31m', '5.1/10', '2020', 'ww_image.jpg', 'ww_trailer.mp4', 'ww_video.mp4', 'Wonder Woman finds herself battling two opponents, Maxwell Lord, a shrewd entrepreneur, and Barbara Minerva, a friend-turned-foe. Meanwhile, she also ends up crossing paths with her love interest.', 'Patty Jenkins', 'Gal Gadot, Chris Pine, Kristen Wiig, Pedro Pascal', '621,000', 'Action', 'Fantasy', 'Superhero'),
(5, 'Thor Love And Thunder', '1h 59m', '7.2/10', '2022', 'thor_image.jpg', 'thor_trailer.mp4', 'thor_movie.mp4', 'Thor embarks on a journey unlike anything he\'s ever faced -- a quest for inner peace. However, his retirement gets interrupted by Gorr the God Butcher, a galactic killer who seeks the extinction of the gods.', 'Taika Waititi', 'Chris Hemsworth, Christian Bale, Tessa Thompson, Jaimie Alexander', '491,000', 'Action', 'Fantasy', 'Superhero'),
(6, 'Godzilla King of Monsters', '2h 12m', '6/10', '2019', 'godzilla_image.jpg', 'godzilla_trailer.mp4', 'godzilla_trailer.mp4', 'A legendary monster named King Ghidorah awakens Rodan, as well as other titans, to destroy the world. To defeat them, the crypto-zoological organisation Monarch must rely on the almighty Godzilla.', 'Michael Dougherty', 'Raymond Burr', '439,000', 'Action', 'Science Fiction', 'Fantasy'),
(7, 'Heropanti 2', '2h 15m', '3.3/10', '2022', 'heropanti_image.jpg', 'heropanti_trailer.mp4', 'heropanti_trailer.mp4', 'A vigilante is sent on a mission by the government to kill enemy troops. However, things go wrong when he\'s mistaken for the leader of the troops.', 'Ahmed Khan', 'Tiger Shroff, Nawazuddin Siddiqui, Tara Sutaria', '54,000', 'Romance', 'Action', 'Mystery'),
(8, 'Black Widow', '2h 13m', '6.7/10', '2021', 'bw_image.jpg', 'bw_trailer.mp4', 'bw_trailer.mp4', 'Natasha Romanoff, a former KGB spy, is shocked to find out that her ex handler, General Dreykov, is still alive. While evading capture by Taskmaster, she is forced to confront her dark past.', 'Cate Shortland', 'Scarlett Johansson, Florence Pugh, David Harbour, \r\nO-T Fagbenle', '237,000', 'Science Fiction', 'Spy', 'Thriller'),
(1, 'Fast And Furious 6', '2h 39m', '8.3/10', '2013', 'ff6_image.jpg', 'ff6_trailer.mp4', 'ff6_trailer.mp4', 'Hobbs is tasked with catching a team of mercenary drivers who manage to evade him every time. However, he enlists the help of Dominic and his team in exchange for full pardons for their past crimes.', 'Justin Lin', 'Vin Diesel, Paul Walker, Dwayne Johnson, Michelle Rodriguez', '992,000', 'Action', 'Crime', 'Thriller');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
