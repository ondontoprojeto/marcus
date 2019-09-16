-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Ago-2019 às 20:26
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `odontologico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadpessoa`
--

CREATE TABLE `cadpessoa` (
  `id_pessoa` int(11) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `doencabase` varchar(255) DEFAULT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  `medicamentos` varchar(255) DEFAULT NULL,
  `cirurgia` varchar(255) DEFAULT NULL,
  `internacoes` varchar(255) DEFAULT NULL,
  `pa` varchar(255) DEFAULT NULL,
  `queixaprinc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadpessoa`
--

INSERT INTO `cadpessoa` (`id_pessoa`, `cpf`, `rg`, `nome`, `telefone`, `celular`, `email`, `cep`, `endereco`, `bairro`, `nascimento`, `cidade`, `uf`, `doencabase`, `alergia`, `medicamentos`, `cirurgia`, `internacoes`, `pa`, `queixaprinc`) VALUES
(1, '123.654.789-00', '34566', 'leandro', '767676', '8765432', 'le22cerqueira@', '1234', 'rua', 'tiju', '1983-03-11', 'rio', 'rh', '', '', '', '', '', '', ''),
(2, '095.443.637-77', '12345678', 'Leandro Cerqueira', '21 2222-3333', '21 98365-6429', 'le22cerqueira@gmail.com', '20530-420', 'Rua SÃ£o Miguel 500', 'Tijuca', '2000-03-11', 'Rio de Janeiro', 'RJ', 'NÃ£o tem', 'Sim', 'NÃ£o', 'sem ', 'nÃ£o', 'nÃ£o sei', 'Dor de dente'),
(3, '095.443.637-77', '12345678', 'Leandro Cerqueira', '21 2222-3333', '21 98365-6429', 'le22cerqueira@gmail.com', '20530-420', 'Rua SÃ£o Miguel 500', 'Tijuca', '2000-03-11', 'Rio de Janeiro', 'RJ', 'NÃ£o tem', 'Sim', 'NÃ£o', 'sem ', 'nÃ£o', 'nÃ£o sei', 'Dor de dente'),
(4, '095.443.637-77', '12345678', 'Leandro Cerqueira da silva', '21 2222-3333', '21 98365-6429', 'le22cerqueira@gmail.com', '20530-420', 'Rua SÃ£o Miguel 500', 'Tijuca', '2000-03-11', 'Rio de Janeiro', 'RJ', 'NÃ£o tem', 'Sim', 'NÃ£o', 'sem ', 'nÃ£o', 'nÃ£o sei', 'Dor de dente'),
(5, '', '12345678', 'Leandro', '21 2222-3333', '21 98365-6429', 'le22cerqueira@gmail.com', '20530-420', 'Rua SÃ£o Miguel 500', 'Tijuca', '2000-03-11', 'Rio de Janeiro', 'RJ', 'NÃ£o tem', 'Sim', 'NÃ£o', 'sem ', 'nÃ£o', 'nÃ£o sei', 'Dor de dente'),
(6, '', '12345678', 'Leandro C.', '21 2222-3333', '21 98365-6429', 'le22cerqueira@gmail.com', '20530-420', 'Rua SÃ£o Miguel 500', 'Tijuca', '2000-03-11', 'Rio de Janeiro', 'RJ', 'NÃ£o tem', 'Sim', 'NÃ£o', 'sem ', 'nÃ£o', 'nÃ£o sei', 'Dor de dente'),
(7, '', '12345678', 'Leandro C.', '21 2222-3333', '21 98365-6429', 'le22cerqueira@gmail.com', '20530-420', 'Rua SÃ£o Miguel 500', 'Tijuca', '2000-03-11', 'Rio de Janeiro', 'RJ', 'NÃ£o tem', 'Sim', 'NÃ£o', 'sem ', 'nÃ£o', 'nÃ£o sei', 'Dor de dente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadpessoa`
--
ALTER TABLE `cadpessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadpessoa`
--
ALTER TABLE `cadpessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
