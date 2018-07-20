-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jul-2018 às 18:26
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rei-do-almoco-trono`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `created`, `modified`) VALUES
(1, 'produto1', '2018-07-20 14:54:14', '2018-07-20 14:54:14'),
(2, 'produto2', '2018-07-20 14:54:23', '2018-07-20 14:54:23'),
(3, 'produto3', '2018-07-20 15:08:26', '2018-07-20 15:08:26'),
(4, 'produto4', '2018-07-20 15:08:35', '2018-07-20 15:08:35'),
(5, 'produto5', '2018-07-20 15:08:47', '2018-07-20 15:08:47'),
(6, 'produto6', '2018-07-20 15:08:55', '2018-07-20 15:08:55'),
(7, 'produto7', '2018-07-20 15:09:05', '2018-07-20 15:09:05'),
(8, 'produto8', '2018-07-20 15:09:15', '2018-07-20 15:09:15'),
(9, 'produto9', '2018-07-20 15:09:24', '2018-07-20 15:09:24'),
(10, 'produto10', '2018-07-20 15:09:32', '2018-07-20 15:09:32'),
(11, 'produto11', '2018-07-20 15:09:41', '2018-07-20 15:09:41'),
(12, '12', NULL, NULL),
(13, '13', NULL, NULL),
(14, '14', NULL, NULL),
(15, '15', NULL, NULL),
(16, '16', NULL, NULL),
(17, '17', NULL, NULL),
(18, '18', NULL, NULL),
(19, '19', NULL, NULL),
(20, '20', NULL, NULL),
(21, '21', NULL, NULL),
(22, '22', NULL, NULL),
(23, '23', NULL, NULL),
(24, '24', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`) VALUES
(1, 'felipe', 'felipe@gmail.com', '123', '2018-07-20 14:46:28', '2018-07-20 14:46:28'),
(2, 'gica', 'giane@gmail.com', '234', '2018-07-20 14:46:44', '2018-07-20 14:46:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
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
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
