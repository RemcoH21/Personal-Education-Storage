-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 feb 2018 om 11:52
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personaleducationstorage`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `search`
--

CREATE TABLE `search` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(256) NOT NULL,
  `s_text` text NOT NULL,
  `s_author` varchar(256) NOT NULL,
  `s_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `search`
--

INSERT INTO `search` (`s_id`, `s_title`, `s_text`, `s_author`, `s_date`) VALUES
(1, 'Who am I?', 'My name is Remco Hanenburg, I live in Franeker and I am 18 years old.', 'Remco Hanenburg', '2017-11-14 12:55:11'),
(2, 'About my study', 'I am studying Software development at ROC Friese Poort Leeuwarden. I do know a bit about the program languages PHP and Javascript. I am learning something about C++, Bootstrap and OOP PHP. I definitly like this study!', 'Remco Hanenburg', '2017-11-14 12:55:11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_firstname` varchar(256) NOT NULL,
  `u_lastname` varchar(256) NOT NULL,
  `u_email` varchar(256) NOT NULL,
  `u_username` varchar(256) NOT NULL,
  `u_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`u_id`, `u_firstname`, `u_lastname`, `u_email`, `u_username`, `u_password`) VALUES
(3, 'wesley', 'verbrugge', 'w.verbrugge@home.nl', 'r3solution', '$2y$10$Du5GB2OeytKys0IKaRxHOuY/7IBm.qLrbCyCThRr/rx7hBI5WSkY6'),
(4, 'Remco', 'Hanenburg', 'remcohanenburg@hotmail.nl', 'Remghost', '$2y$10$1A1gm5gVI3wbEs.5LTWwReL7nGDybLzIl98tGkZIWETCziU5qabA6');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `search`
--
ALTER TABLE `search`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
