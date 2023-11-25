-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2023 às 04:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sadm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nome`, `email`, `senha`) VALUES
(1, 'Alexandre Pires da Fonseca', 'alexandre@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Milena', 'milena@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nome`, `descricao`) VALUES
(4, 'Assédio Sexual', 'Assédio sexual é um comportamento indesejado de natureza sexual que é cometido sem consentimento. Isso pode incluir avanços, insinuações, propostas ou qualquer conduta de caráter sexual que cause desconforto, medo, humilhação ou constrangimento à vítima. Pode ocorrer em vários contextos, como no trabalho, na rua, em ambientes educacionais e em relacionamentos pessoais. É fundamental entender que o assédio sexual é ilegal e viola os direitos individuais, causando impactos emocionais e psicológicos significativos para as vítimas.'),
(5, 'Assédio Moral', 'O assédio moral, também conhecido como bullying, é um comportamento agressivo e repetitivo que tem o objetivo de prejudicar psicologicamente, humilhar, intimidar ou isolar uma pessoa. Pode acontecer no ambiente de trabalho, na escola, em relações interpessoais ou em qualquer contexto social. Esse tipo de assédio pode se manifestar por meio de intimidação, insultos, difamação, exclusão social, manipulação, entre outras formas de abuso psicológico. É uma situação que pode causar sérios danos à saúde mental e emocional da vítima, afetando sua autoestima, confiança e qualidade de vida.'),
(6, 'Violência Sexual', 'A chave aqui é a ausência de consentimento. Quando alguém é forçado, coagido, manipulado, ou incapaz de dar consentimento (seja por incapacidade, idade ou outras circunstâncias), qualquer ato sexual subsequente pode ser considerado violência sexual. É uma violação séria dos direitos e da integridade da vítima, tendo um impacto extremamente traumático e duradouro.'),
(7, 'Estupro', 'O estupro é uma forma grave de violência sexual em que uma pessoa é forçada a ter relações sexuais, ou qualquer ato de natureza sexual, sem seu consentimento. Isso pode incluir penetração vaginal, anal ou oral, com qualquer parte do corpo ou objeto, e é perpetrado por meio de coerção, força física, ameaça, manipulação ou quando a vítima não está em condições de dar consentimento (seja por intoxicação, incapacidade, coerção mental etc.). É um crime muito sério que viola os direitos fundamentais da vítima e tem repercussões físicas, emocionais e psicológicas profundas.'),
(8, 'Violência Psicológica ', 'É considerada qualquer conduta que: cause dano emocional e diminuição da autoestima; prejudique e perturbe o pleno desenvolvimento da mulher; ou vise degradar ou controlar suas ações, comportamentos, crenças e decisões.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `iddenuncia` int(11) NOT NULL,
  `nome_denuciante` varchar(100) DEFAULT NULL,
  `info_contato` varchar(100) DEFAULT NULL,
  `data_hora` datetime NOT NULL,
  `local_ocorrencia` varchar(100) NOT NULL,
  `descricao_incidente` text NOT NULL,
  `tipo_incidente` int(11) NOT NULL,
  `nome_agressor` varchar(100) DEFAULT NULL,
  `detalhe_agressor` text NOT NULL,
  `testemunhas` text DEFAULT NULL,
  `evidencia` text DEFAULT NULL,
  `relacao_agressor` varchar(100) DEFAULT NULL,
  `data_envio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `denuncia`
--

INSERT INTO `denuncia` (`iddenuncia`, `nome_denuciante`, `info_contato`, `data_hora`, `local_ocorrencia`, `descricao_incidente`, `tipo_incidente`, `nome_agressor`, `detalhe_agressor`, `testemunhas`, `evidencia`, `relacao_agressor`, `data_envio`) VALUES
(21, 'Milena Escobar ', '', '2023-11-11 15:20:00', 'em casa', 'kkkkkkkkkkkkkkkk', 4, '', '', '', '', '', '2023-11-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Índices de tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`iddenuncia`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `iddenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
