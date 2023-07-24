-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 24. čec 2023, 14:47
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `test_db`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `cenik`
--

CREATE TABLE `cenik` (
  `id` int(11) NOT NULL,
  `název` varchar(600) NOT NULL,
  `cena` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `cenik`
--

INSERT INTO `cenik` (`id`, `název`, `cena`) VALUES
(10, 'KOMBINOVANÁ PEDIKÚRA', 450),
(11, 'PŘÍSTROJOVÁ PEDIKÚRA - SUCHÁ (bez skalpelu)', 450),
(12, 'WELLNESS PÉČE', 600),
(13, 'LAKOVÁNÍ', 100),
(14, 'PARAFÍNOVÝ ZÁBAL ZA STUDENA', 120),
(15, 'PEELING CHODIDEL/ZÁBAL CHODIDEL', 150),
(16, 'ODLAKOVÁNÍ', 50),
(17, 'P-SHINE (samostatně)', 250),
(18, 'P-SHINE (s pedikúrou)', 200),
(19, 'POTAŽENÍ NEHTŮ GELEM', 300),
(20, 'ODFRÉZOVÁNÍ ZTLUŠTĚLÝCH NEHTŮ od', 250),
(21, 'ODSTRANĚNÍ GEL LAKU (z jiné provozovny)', 200),
(22, 'DEPILACE VOSKEM (dle rozsahu)od', 300),
(23, 'APLIKACE ROVNÁTEK UNGUISAN', 450);

-- --------------------------------------------------------

--
-- Struktura tabulky `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(27, 'IMG-640da9e4ae6705.36847898.jpeg'),
(28, 'IMG-640daf20bc1c33.59339346.jpeg'),
(29, 'IMG-640daf25825638.82425449.jpeg'),
(31, 'IMG-640daf3a9d06a7.25568093.jpeg'),
(33, 'IMG-640daf639e41a8.82771375.jpeg');

-- --------------------------------------------------------

--
-- Struktura tabulky `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nazev` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `items`
--

INSERT INTO `items` (`id`, `nazev`) VALUES
(1, 'bruska 2000 turbo'),
(2, 'bruska 2000 turbo');

-- --------------------------------------------------------

--
-- Struktura tabulky `recenze`
--

CREATE TABLE `recenze` (
  `id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `hodnocení` int(11) NOT NULL,
  `nazev` varchar(100) NOT NULL,
  `popis` varchar(2500) NOT NULL,
  `Jméno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(8, 'admin', '$2y$10$vhFAeUM7SRJ2AOYHtDgrz.0LrG5okki6HLtpaIQYtJhBw/ZNGhJDC');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `cenik`
--
ALTER TABLE `cenik`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `recenze`
--
ALTER TABLE `recenze`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `cenik`
--
ALTER TABLE `cenik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pro tabulku `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pro tabulku `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pro tabulku `recenze`
--
ALTER TABLE `recenze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
