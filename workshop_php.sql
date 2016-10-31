-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 31 okt 2016 om 11:35
-- Serverversie: 5.7.12
-- PHP-versie: 7.0.5-2+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_php`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`id`, `post_date`, `post_title`, `post_content`) VALUES
(1, '2016-07-01', 'Vandaag is het 1 juli', 'Dit is de inhoud van het bericht'),
(2, '2016-07-05', 'Vandaag is het 5 juli', 'Fantastisch'),
(3, '2016-10-02', 'Vandaag is het 2 oktober', 'Super vet'),
(4, '2016-09-13', 'Test', 'Test'),
(5, '2016-10-03', 'sadasdasd', 'asdasd'),
(6, '2016-03-12', 'TEST', 'TEST'),
(7, '2016-11-18', 'asdasd', 'asdasd'),
(8, '2016-03-12', 'TEST', 'TEST CONTENT'),
(9, '2016-03-12', 'TEST', 'TEST CONTENT'),
(10, '2016-03-12', 'TEST', 'TEST CONTENT');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
