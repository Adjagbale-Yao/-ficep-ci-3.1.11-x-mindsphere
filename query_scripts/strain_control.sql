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
-- Struttura della tabella `strain_control`
--

CREATE TABLE `strain_control` (
  `id` int(11) NOT NULL,
  `minimum` int(11) NOT NULL,
  `maximum` int(11) NOT NULL,
  `first_threshold_out` int(11) NOT NULL,
  `second_threshold_out` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `machine` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `strain_control`
--

INSERT INTO `strain_control` (`id`, `minimum`, `maximum`, `first_threshold_out`, `second_threshold_out`, `value`, `machine`) VALUES
(7, 2, 200, 46, 44, 12, 1),
(8, 5, 200, 45, 21, 7, 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `strain_control`
--
ALTER TABLE `strain_control`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machine_fk` (`machine`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `strain_control`
--
ALTER TABLE `strain_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `strain_control`
--
ALTER TABLE `strain_control`
  ADD CONSTRAINT `strain_control_ibfk_1` FOREIGN KEY (`machine`) REFERENCES `ficep_machines` (`machine_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
