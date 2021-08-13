-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 21, 2021 alle 18:14
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6

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
-- Struttura della tabella `ficep_machines`
--

CREATE TABLE `ficep_machines` (
  `machine_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `customer` varchar(150) DEFAULT NULL,
  `plant` varchar(150) DEFAULT NULL,
  `technology` varchar(150) DEFAULT NULL,
  `model` varchar(150) DEFAULT NULL,
  `tool_id` varchar(150) DEFAULT NULL,
  `cemas_tool_id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `ficep_machines`
--

INSERT INTO `ficep_machines` (`machine_id`, `name`, `customer`, `plant`, `technology`, `model`, `tool_id`, `cemas_tool_id`) VALUES
(1, '20HF', 'Magneti Marelli', 'Tangeri', 'VIBRATION', 'HF', '-', '-'),
(2, 'DD713.2', 'FTP', 'Goiana - BR', 'LASER', 'DD', '-', '-'),
(3, 'HF MET', 'METAL spa', 'Gazzada Schianno', 'VIBRATION', 'HF-4C', '-', '-'),
(4, 'HD FOR', 'Forging lte', 'Gazzada Schianno', 'VIBRATION', 'HD', '-', '-'),
(5, 'HF111', 'CNH', 'Campinas', 'LASER', 'HF', '-', '-');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ficep_machines`
--
ALTER TABLE `ficep_machines`
  ADD PRIMARY KEY (`machine_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ficep_machines`
--
ALTER TABLE `ficep_machines`
  MODIFY `machine_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
