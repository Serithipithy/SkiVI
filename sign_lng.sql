-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 17, 2021 la 08:49 PM
-- Versiune server: 10.4.19-MariaDB
-- Versiune PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `sign_lng`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `courses`
--

CREATE TABLE `courses` (
  `title` varchar(100) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `courses`
--

INSERT INTO `courses` (`title`, `link`, `text`, `data`) VALUES
('Sequestered Signing', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/Rw4ZK4V2o-A\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'Week 1 Day 1', '2021-06-17 15:57:37'),
('Sequestered Signing2', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/JY8KYk8wDY4\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'Week 1 Day 2', '2021-06-17 15:58:13'),
('Sequestered Signing3', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/_fsNNt3BcrU\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'Week 1 Day ', '2021-06-17 15:58:46'),
('Sequestered Signing4', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/bcX0_g4b1f4\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'Week 1 Day 4', '2021-06-17 15:59:20'),
('Sequestered Signing5 ', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/-5CxIbGOLyY\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'Week 1 Day 5', '2021-06-17 15:59:52');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `info`
--

CREATE TABLE `info` (
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `info`
--

INSERT INTO `info` (`title`, `description`, `image`) VALUES
('Sign language', 'Sign languages (also known as signed languages) are languages that use the visual-manual modality to convey meaning. Sign languages are expressed through manual articulations in combination with non-manual elements.', 'img');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`title`);

--
-- Indexuri pentru tabele `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
