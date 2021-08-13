-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 24, 2021 alle 16:03
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
-- Struttura della tabella `stroke_sets`
--

CREATE TABLE `stroke_sets` (
  `Id` int(11) NOT NULL,
  `machine` int(10) UNSIGNED NOT NULL,
  `shift` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `number_pieces` int(11) NOT NULL,
  `type` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `stroke_sets`
--

INSERT INTO `stroke_sets` (`Id`, `machine`, `shift`, `day`, `number_pieces`, `type`) VALUES
(7, 1, 55, 123, 100, 5),
(8, 1, 55, 123, 44, 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `stroke_sets`
--
ALTER TABLE `stroke_sets`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `machine_id_fk` (`machine`),
  ADD KEY `ficep_type_fk` (`type`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `stroke_sets`
--
ALTER TABLE `stroke_sets`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `stroke_sets`
--
ALTER TABLE `stroke_sets`
  ADD CONSTRAINT `stroke_sets_ibfk_1` FOREIGN KEY (`machine`) REFERENCES `ficep_machines` (`machine_id`),
  ADD CONSTRAINT `stroke_sets_ibfk_2` FOREIGN KEY (`type`) REFERENCES `ficep_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
