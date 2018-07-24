-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jul-2018 às 12:14
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
(4, 'felipe rodrigues farias', 'felipe.rodrigues.dev@gmail.com', '$2y$10$KtiAl88QszGexorqdKq1D.0wdcmoKqsmGltF2tON6NvY9KZvlUWGO', '2018-07-23 17:02:41', '2018-07-23 17:02:41'),
(5, 'giane', 'giane@gmail.com', '$2y$10$UHESJHgFUIO52Pz.vXm.jOSPt7fUXTLoZ/eEEEOgOotRPDLHqDk2y', '2018-07-24 06:40:23', '2018-07-24 06:40:23'),
(6, 'flavio', 'flavio@gmail.com', '$2y$10$.Emi8p2Sa.YKC0tX1SaMK.Nk8c1/J/Ozfb9UlLrTKUfBbDZdpkoCu', '2018-07-24 06:44:09', '2018-07-24 06:44:09'),
(7, 'manu', 'manu@gmail.com', '$2y$10$xkMOv7GTt33OVfmlg5yXse7ZU2wClSoSkml86I.B.wpq0LXL101Yq', '2018-07-24 07:00:26', '2018-07-24 07:00:26'),
(8, 'SELMA', 'selma@gmail.com', '$2y$10$7clgpfpTNBazPpNqvy45YOW3Wrehpjaztczioq.09rpEJOKM67kBO', '2018-07-24 07:41:41', '2018-07-24 07:41:41'),
(9, 'gustavo', 'gustavo@gmail.com', '$2y$10$7CDBhsPXqEOLRuA3udrmVO.WRLxqfnzGJtFa07oEHdh7I.rHQVCti', '2018-07-24 08:50:37', '2018-07-24 08:50:37'),
(10, 'Cristiana Mello', 'cris@gmail.com', '$2y$10$yoU4LgqAsEL75jQCgV7fn.BwozdAuYcfRbV/zGcGKLMnVou37I/iK', '2018-07-24 09:19:34', '2018-07-24 09:19:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE `votos` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `votos`
--

INSERT INTO `votos` (`id`, `users_id`, `produtos_id`) VALUES
(20, 4, 2),
(22, 6, 5),
(24, 5, 7),
(35, 7, 2),
(38, 8, 2),
(39, 9, 5);

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
-- Indexes for table `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id` (`users_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
