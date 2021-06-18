-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 17, 2021 la 08:47 PM
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
-- Bază de date: `first_aid`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `courses`
--

CREATE TABLE `courses` (
  `title` varchar(100) NOT NULL,
  `link` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `courses`
--

INSERT INTO `courses` (`title`, `link`, `text`, `data`) VALUES
('Allergic Reactions', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/PDGqg4pgzvI\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', '', '2021-06-17 16:26:56'),
('BREATHING PROBLEMS', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/KBQZjsKrUBo\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'Breathing problems can arise from underlying lung diseases such as asthma or emphysema, as well as from illnesses such as pneumonia. Be aware that the other body system problems such as heart attack, stroke, seizure, or anxiety can all result in breathing issues as well.Signs of a breathing problem include fast or shallow breathing, noisy breathing, producing unusual sounds, or the inability to talk due to breathlessness. Persons with asthma often make a musical sound when breathing, which can be heard as wheezing. Severe allergic reactions can also cause wheezing. High-pitched sounds during inhalation may suggest a partial blockage of the upper airway.Persons who have asthma or chronic lung disease are generally familiar on how to use their breathing medications. Common medications include albuterol and atrovent inhalers. The use of a spacer (a tube attached to the inhaler that holds the medication until the person breathes it in) can improve the effect of these medications. A person in severe distress may be unable to properly use their inhaler. Call 911 if the person appears in significant distress.', '2021-06-17 16:26:32'),
('FIRST AID BASICS', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/h_WYZFC5USk\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', 'The first step in any emergency is the recognition of the problem and providing help. When in doubt or when someone is seriously injured or ill, you should always activate the emergency response system by calling 911 in the United States, or your own locality’s Emergency Medical Services (EMS) number. If you’re not sure how serious the situation is, the 911/EMS operator will ask you a series of questions to determine the severity of the situation.', '2021-06-17 16:25:50'),
('Heart Diseases', '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/bG2x1U6AZCc\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', '', '2021-06-17 16:27:34');

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
('First aid', 'First aid is the first and immediate assistance given to any person suffering from either a minor or serious illness or injury, with care provided to preserve life, prevent the condition from worsening, or to promote recovery. ... First aid is generally performed by someone with basic medical training.', 'img');

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
