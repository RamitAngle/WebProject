-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 04:47 PM
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
-- Database: `moviegram`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sd` varchar(240) NOT NULL,
  `ld` text NOT NULL,
  `launguage` varchar(75) NOT NULL,
  `CDFC` varchar(25) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `song_link` text NOT NULL,
  `movie_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `image`, `title`, `sd`, `ld`, `launguage`, `CDFC`, `catagory`, `song_link`, `movie_link`) VALUES
(3, 'f5a21f64af7359f7aaa7c29dee8a12a97630e707cdbf71e0ae6b063322fb8575.jpg', 'K.G.F: Chapter 2', 'Rocky successfully rises as the leader and saviour of the people of the Kolar Gold Fields. But, in his goal to fulfil his mothers wishes, Rocky must tackle Adheera, Inayat Khalil and Ramika Sen.', 'The blood-soaked land of Kolar Gold Fields (KGF) has a new overlord now - Rocky, whose name strikes fear in the heart of his foes. His allies look up to Rocky as their savior, the government sees him as a threat to law and order; enemies are clamoring for revenge and conspiring for his downfall. Bloodier battles and darker days await as Rocky continues on his quest for unchallenged supremacy.', 'Hindi', 'U/A', 'Bollywood', 'https://www.jiosaavn.com/album/kgf-chapter-2/BTioyie3Rgc_', 'https://youtu.be/Qah9sSIXJqk?si=Er-HLfL0rVcKoMX4'),
(4, 'OMG 2.jpg', 'OMG 2', 'A devout father takes on a dogmatic school - and his own moral convictions - after his son is expelled from school for an embarrassing video that has gone viral.', 'Kanti Sharan Mudgal a devotee of Lord Shiva who runs a shop in the temple premises and lives happily with his family.He gets a shocked when he finds that his son Vivek has been admitted to hospital and finds that the Doctor only wants to speak to him.After Doctors consultation Kanti finds from Viveks friend Zaheer that in order to increase size of his penis Vivek had taken pills after his classmates questioned about his size which lead him to hospitalization.Kanti convinces Vivek to join back school but he is issued a rustication letter after his video goes viral of masturbating in school bathroom.Kantis world turns upside down after this incident as the video becomes viral in society and everyone avoids his family.As Kanti is true follower of Lord Shiva he sends his messenger to help Kanti in his difficult times.The messenger roams as a vagabond in the region and helps Kanti in his difficult times.Kanti gets the courage and files a case against Viveks school and others responsible for the same and also files a plea in court to make sex education compulsory in school so that kids dont go wrong way.', 'Hindi', 'U/A', 'Bollywood', 'https://www.jiosaavn.com/album/omg-2/t5XBxIwvpms_', 'https://youtu.be/Y6ZKXqM7HNQ?si=lvq_HlkZciqgmrVw'),
(5, 'MV5BYWRmZGVhMjgtNTQ5Mi00MDIxLWJiMmYtMWMxNzcyMmM5YjY5XkEyXkFqcGdeQXVyMTU0ODI1NTA2._V1_.jpg', 'Animal', 'A son undergoes a remarkable transformation as the bond with his father begins to fracture, and he becomes consumed by a quest for vengeance.', 'Balbir Singh is a rich industrialist but has no time for his family. His son Ranvijay loves him to the core and considers him a superhero. But differences develop between them, and Ranvijay is sent to boarding school. Years later, he returns to celebrate the 60th birthday of Balbir but is asked to leave the house. While leaving, he is surprised to see Gitanjali, who has broken her engagement and wants to be with him. They both get married in a private ceremony and shift to US. Eight years later, Balbir is attacked by unknown assailants but survives. Ranvijay returns with Gitanjali and his kids to be with his family, and starts a war with the people who tried to assassinate Balbir.', 'English', 'U', 'Hollywood', 'https://www.jiosaavn.com/album/animal/8Ps4qqBA6,Y_', 'https://youtu.be/8FkLRUJj-o0?si=R9-k5ssgeiJ-Fu_9');

-- --------------------------------------------------------

--
-- Table structure for table `otts`
--

CREATE TABLE `otts` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sd` varchar(250) NOT NULL,
  `ld` text NOT NULL,
  `launguage` varchar(75) NOT NULL,
  `CDFC` varchar(25) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `song_link` text NOT NULL,
  `movie_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otts`
--

INSERT INTO `otts` (`id`, `image`, `title`, `sd`, `ld`, `launguage`, `CDFC`, `platform`, `song_link`, `movie_link`) VALUES
(1, '3992d5a0d1458ab8348d53c63975204a.jpg', 'Bambai Meri Jaan 2023 S01', 'In his quest to clean the mean streets of Bombay and keep in check the rise of organised crime in post-Independence India, an honest cop puts everything on the line, including the thing he wants to protect the most - his family.', 'Bambai Meri Jaan chronicles the life of gangster Dara Kadri through the eyes of his father, an ex-cop, Ismail Kadri. In this season, we see how Dara puts everything on the line, including his family. He goes on to become a cold-blooded, fearless gangster who uses his business acumen to fight not only the police and his rivals but also his own demons along the way.', 'Hindi', 'U/A', 'Amazon Prime', 'N/a', 'https://youtu.be/mkTcLd3b_Us?si=1VjsgNe4Nw6INmqL'),
(2, '6BABCF8F-5AA2-4F87-A41B-B1DFC33EA4FC-223x300.jpeg', 'Criminal Justice: Adhura Sach1 season', 'Criminal Justice: Adhura Sach is an Indian Hindi-language legal drama web series directed by Rohan Sippy. Starring Pankaj Tripathi, Shweta Basu Prasad, Purab Kohli, Swastika Mukherjee and Adinath Kothare in prominent roles, the storyline follows the ', 'Mukul Ahuja is a young and spoilt son of Avantika Ahuja and Arvind Ahuja and stepson of Neeraj Ahuja. ', 'Hindi', 'U/A', 'Disney+ Hotstar', 'N/a', 'https://www.imdb.com/video/vi259441177/?ref_=ext_shr_lnk'),
(3, 'kaala_2_1692789436.jpg', 'Kaala 2023 S1', 'An Intelligence Bureau officer must solve a case rooted in the underbelly of a crime world, with power, revenge, and action playing in the background.', 'An Intelligence Bureau officer solving a case that involves criminal masterminds, power and revenge', 'Hindi', 'A', 'Disney+ Hotstar', 'N/a', 'https://www.imdb.com/video/vi49727257/?ref_=ttvi_vi_imdb_2'),
(5, 'images.jpeg', 'Farzi', 'Sunny, a brilliant small-time artist is propelled into the high-stakes world of counterfeiting when he creates the perfect fake currency note.', 'An artist who gets pulled into the murky high stakes of a con job and a fiery task force officer on the mission to rid the country of his menaces in a fast-paced, edgy one-of-a-kind thriller.', 'Hindi', 'U/A', 'Amazon Prime', 'https://www.jiosaavn.com/album/farzi-original-series-soundtrack/zEzRQbSsYb0_', 'https://youtu.be/KQdgKpNYho8?si=XYJty8oBlaHmexNP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otts`
--
ALTER TABLE `otts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otts`
--
ALTER TABLE `otts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
