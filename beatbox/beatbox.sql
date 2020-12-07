-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2020 às 01:00
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `beatbox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(191) NOT NULL,
  `descrição` text NOT NULL,
  `quantidade` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `descrição`, `quantidade`) VALUES
(16, 'Violões', 'Instrumento com umas parada de tecitura ai que não entendo', 58),
(17, 'Guitarras', '', 0),
(18, 'Baterias', 'Instrumento completo de percussão', 54),
(19, 'Violino', 'Violino+Arco', 57),
(20, 'Citaras', 'Indiano', 58),
(21, 'Acessorios', 'Tudo que ajuda a fazer barulho', 0),
(22, 'Piano', 'Coisa linda de se ver, classico, uma maravilha', 54),
(23, 'Baixo', 'SLAP!!!', 57),
(41, 'Guitarras', '', 0),
(42, 'Baterias', 'Instrumento completo de percussão', 54),
(43, 'Violino', 'Violino+Arco', 57),
(44, 'Citaras', 'Indiano', 58),
(45, 'Acessorios', 'Tudo que ajuda a fazer barulho', 0),
(46, 'Piano', 'Coisa linda de se ver, classico, uma maravilha', 54),
(47, 'Baixo', 'SLAP!!!', 57);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `descricao` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `quantidade`, `preco`, `img`, `descricao`) VALUES
(11, 'Atabaque de madeira', 'Violões', 82, '154.00', 'trio-atabaque-tarraxa_1.jpg', 'Barulhenta'),
(12, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(13, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(14, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(15, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(16, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(17, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(18, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(19, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(20, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(21, 'Bateria BateBastante', 'Baterias', 82, '154.00', 'bateria-odery.jpg', 'Barulhenta'),
(22, 'Amplificador FazBarulho', 'Baterias', 120, '24.99', 'amp.webp', 'Pra estourar os ouvidos da galera'),
(23, 'Amplificador FazBarulho', 'Baterias', 120, '24.99', 'amp.webp', 'Pra estourar os ouvidos da galera'),
(24, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(25, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(26, 'Guitarrinha Bunitinha', 'Guitarras', 54, '54.00', 'Gibson-Flying-V.jpg', 'Parece a letra V VVVVV'),
(27, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(28, 'Bateria BateBastante', 'Baterias', 82, '154.00', 'bateria-odery.jpg', 'Barulhenta'),
(30, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(31, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(32, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(33, 'Bateria BateBastante', 'Baterias', 82, '154.00', 'bateria-odery.jpg', 'Barulhenta'),
(34, 'Amplificador FazBarulho', 'Baterias', 120, '24.99', 'amp.webp', 'Pra estourar os ouvidos da galera'),
(35, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(36, 'Bateria BateBastante', 'Baterias', 82, '154.00', 'bateria-odery.jpg', 'Barulhenta'),
(37, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(38, 'Guitarrinha do Chimbinha', 'Guitarras', 54, '54.00', 'guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg', 'Guitarrinha bunitinha do chimbinha'),
(39, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica'),
(40, 'Violino Violinizador', 'Violino', 100, '550.00', 'violino.jpg', 'Musica bonita e clássica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Antonio Marcos', 'antoniomarcos@beatbox.com', '123456'),
(2, 'Pedro', 'pedro@beatbox.com', '45678'),
(3, 'Larissa', 'larissa@beatbox.com', '12345678'),
(5, 'Hyago', 'hyago@beatbox.com', '789456'),
(6, 'Beatriz', 'beatriz@beatbox.com', '4566123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
