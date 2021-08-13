-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 22, 2021 alle 14:21
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wg1jf3lh_dea_siemens`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `maintenance_delay`
--

CREATE TABLE `maintenance_delay` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `duration` time NOT NULL,
  `machine` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `maintenance_delay`
--

INSERT INTO `maintenance_delay` (`id`, `code`, `message`, `start`, `end`, `duration`, `machine`) VALUES
(1, 23, 'Sostituzione valvola 3', '2021-06-15 08:19:06', '2021-06-15 16:19:06', '01:00:06', 1),
(2, 44, 'Sostituzione valvola 67', '2021-06-09 08:00:00', '2021-06-08 09:20:12', '00:20:12', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `maintenance_delay`
--
ALTER TABLE `maintenance_delay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machine_fk` (`machine`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `maintenance_delay`
--
ALTER TABLE `maintenance_delay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `maintenance_delay`
--
ALTER TABLE `maintenance_delay`
  ADD CONSTRAINT `maintenance_delay_ibfk_1` FOREIGN KEY (`machine`) REFERENCES `ficep_machines` (`machine_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
