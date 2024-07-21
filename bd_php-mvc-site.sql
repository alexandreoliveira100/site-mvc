-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Maio-2024 às 15:50
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_php-mvc-site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_abouts_companies`
--

CREATE TABLE `sts_abouts_companies` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(220) NOT NULL,
  `sts_situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sts_abouts_companies`
--

INSERT INTO `sts_abouts_companies` (`id`, `title`, `description`, `image`, `sts_situation_id`, `created`, `modified`) VALUES
(1, 'Sobre Empresa título 1', 'Aliquam posuere, tortor at mollis vestibulum, arcu metus varius mi, sit amet dignissim ante lacus vitae nisi. Nam tortor massa, ornare at efficitur ut, accumsan nec quam. Morbi ullamcorper at felis eu semper. Vivamus nisi neque, pharetra a laoreet a, consequat non erat. Vestibulum nisl odio, gravida sed mauris non, aliquam commodo nibh. Vivamus eleifend arcu eu ultrices pulvinar.', 'alexandre.jpg', 1, '2024-05-30 22:18:56', NULL),
(5, 'Sobre empresa 2', 'Aenean molestie blandit eros id fringilla. Vestibulum sed luctus leo. In sed dui leo. Vivamus laoreet a sem a tempus. Suspendisse lacinia nisl a dui ornare consequat eu vitae mauris. Nulla maximus, justo nec posuere lacinia, nibh ex rhoncus urna, vitae sagittis risus sem sit amet mi. Sed feugiat elementum ligula, vitae pretium elit viverra vel.', 'alex.jpg', 2, '2024-05-31 09:49:46', NULL),
(6, 'Sobre empresa 3', 'Nulla purus ipsum, ullamcorper sed eros eu, condimentum sodales odio. Sed ante ligula, egestas ut ornare ut, tempus sit amet diam. Integer pretium pellentesque lacus sit amet fermentum. ', 'eu.jpg', 1, '2024-05-31 09:49:46', NULL),
(7, 'Sobre Empresa 3', 'Nulla purus ipsum, ullamcorper sed eros eu, condimentum sodales odio. Sed ante ligula, egestas ut ornare ut, tempus sit amet diam. Integer pretium pellentesque lacus sit amet fermentum. ', 'ele.jpg', 3, '2024-05-31 09:49:46', NULL),
(8, 'Sobre empresa 4', 'faucibus. Proin a magna tortor. Etiam et varius lorem, nec aliquam magna. Duis vitae arcu risus. Sed fringilla porta libero at vulputate. Curabitur vitae imperdiet urna, sit amet scelerisque orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;', 'nos.jpg', 1, '2024-05-31 10:01:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_contacts_msgs`
--

CREATE TABLE `sts_contacts_msgs` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `subject` varchar(220) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sts_contacts_msgs`
--

INSERT INTO `sts_contacts_msgs` (`id`, `name`, `email`, `subject`, `content`, `created`, `modified`) VALUES
(1, 'alexandre', 'alexandre.somostodosum@gmail.com', 'galaxias', 'andromenda 1', '2024-05-29 12:11:42', NULL),
(2, 'gevanilda', 'gevanilda@gmail.com', 'Minha mulher', 'Minha flor', '2024-05-29 12:12:52', NULL),
(3, 'gevanilda', 'gevanilda@gmail.com', 'Minha mulher', 'Minha flor', '2024-05-29 12:36:32', NULL),
(4, 'alberto', 'alberto@gmail.com', 'planetas', 'planetas exitem muitos', '2024-05-29 12:37:09', NULL),
(5, 'alberto', 'alberto@gmail.com', 'planetas', 'planetas exitem muitos', '2024-05-29 12:41:11', NULL),
(6, 'alberto', 'alberto@gmail.com', 'planetas', 'planetas exitem muitos', '2024-05-29 12:41:27', NULL),
(7, 'alberto', 'alberto@gmail.com', 'planetas', 'planetas exitem muitos', '2024-05-29 12:41:54', NULL),
(8, 'falcão', 'falcao@gmail.com', 'Colega de trablho', 'Falcão zorde', '2024-05-29 12:42:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_homes_tops`
--

CREATE TABLE `sts_homes_tops` (
  `id` int(11) NOT NULL,
  `title_top` varchar(220) NOT NULL,
  `description_top` varchar(220) NOT NULL,
  `link_btn_top` varchar(220) NOT NULL,
  `txt_btn_top` varchar(44) NOT NULL,
  `image` varchar(220) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sts_homes_tops`
--

INSERT INTO `sts_homes_tops` (`id`, `title_top`, `description_top`, `link_btn_top`, `txt_btn_top`, `image`, `created`, `modified`) VALUES
(1, 'Temos a solução que sua empresa precisa', 'Somos todos um com Deus', 'http://localhost/php-mvc-site/', 'Contato', 'topo.jpg', '2024-05-21 12:28:17', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_situations`
--

CREATE TABLE `sts_situations` (
  `id` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sts_situations`
--

INSERT INTO `sts_situations` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Ativo', '2024-05-30 22:02:32', NULL),
(2, 'Inativo', '2024-05-30 22:02:32', NULL),
(3, 'Analise', '2024-05-30 22:03:32', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `sts_abouts_companies`
--
ALTER TABLE `sts_abouts_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sts_situation_id` (`sts_situation_id`);

--
-- Índices para tabela `sts_contacts_msgs`
--
ALTER TABLE `sts_contacts_msgs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sts_homes_tops`
--
ALTER TABLE `sts_homes_tops`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sts_situations`
--
ALTER TABLE `sts_situations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sts_abouts_companies`
--
ALTER TABLE `sts_abouts_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `sts_contacts_msgs`
--
ALTER TABLE `sts_contacts_msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `sts_homes_tops`
--
ALTER TABLE `sts_homes_tops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sts_situations`
--
ALTER TABLE `sts_situations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `sts_abouts_companies`
--
ALTER TABLE `sts_abouts_companies`
  ADD CONSTRAINT `sts_abouts_companies_ibfk_1` FOREIGN KEY (`sts_situation_id`) REFERENCES `sts_situations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
