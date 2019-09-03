-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Set-2019 às 13:43
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
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id_especialidade` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `observacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `numeroproduto` int(11) DEFAULT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(100) DEFAULT NULL,
  `vencimento` date NOT NULL,
  `complemento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `administrador` varchar(50) NOT NULL,
  `dentista` varchar(30) NOT NULL,
  `secretaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `orcamento` varchar(3) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `inicio_tratamento` date DEFAULT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `situacaoficha` varchar(20) DEFAULT NULL,
  `doencabase` varchar(255) DEFAULT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  `medicamentos` varchar(255) DEFAULT NULL,
  `cirurgia` varchar(255) DEFAULT NULL,
  `internacoes` varchar(255) DEFAULT NULL,
  `pa` varchar(255) DEFAULT NULL,
  `queixaprinc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `cpf`, `rg`, `nome`, `orcamento`, `telefone`, `celular`, `email`, `cep`, `endereco`, `complemento`, `bairro`, `nascimento`, `inicio_tratamento`, `cidade`, `uf`, `situacaoficha`, `doencabase`, `alergia`, `medicamentos`, `cirurgia`, `internacoes`, `pa`, `queixaprinc`) VALUES
(1, '12345', '', 'leandro Cerqueira', 'Sim', '21 22334455', '21 98365-6529', 'le22cerqueira@gmail.com', '20231-050', 'Rua Andre Cavalcanti', '158', 'Santa Tereza', '1983-03-11', '0000-00-00', 'Rio de Janeiro', 'RJ', 'Ativa', '', 'Sim', 'NÃ£o tem', 'Sim', 'NÃ£o', 'Sei nÃ£o', ''),
(2, '06074840717', '', 'leandro', 'Sim', '21 22334455', '21 98365-6529', 'le22cerqueira@yahoo.com.br', '20231-050', 'Rua Andre Cavalcanti', '158', 'Santa Tereza', '1983-03-11', '0000-00-00', 'Rio de Janeiro', 'RJ', 'Ativa', '', 'Sim', 'NÃ£o tem', 'Sim', 'NÃ£o', 'Sei nÃ£o', ''),
(3, '123456', '', 'leandro Cerqueira da silva', 'Sim', '21 22334455', '21 98365-6529', 'gabrielc_23@yahoo.com.br', '20231-050', 'Rua Andre Cavalcanti', '158', 'Santa Tereza', '1983-03-11', '2019-08-30', 'Rio de Janeiro', 'RJ', 'Ativa', '', 'Sim', 'NÃ£o tem', 'Sim', 'NÃ£o', 'Sei nÃ£o', ''),
(4, '13011', '', 'leandro', 'Sim', '21 22334455', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(5, '1234567890', '', 'Cerqueira Leandro', 'nÃ£', '21 22334455', '21 98365-6529', 'le22cerqueira@gmail.com', '20231-050', 'Rua Andre Cavalcanti', '158', 'Santa Tereza', '1983-03-11', '2019-08-01', 'Rio de Janeiro', 'RJ', 'Ativa', '', 'Sim', 'NÃ£o tem', 'Sim', 'NÃ£o', 'Sei nÃ£o', ''),
(6, '123456789-00', '', 'leandro Cerqueira', 'nÃ£', '21 22334455', '', '', '', '', '', 'Santa Tereza', '0000-00-00', '0000-00-00', 'Rio de Janeiro', 'RJ', '', '', 'Sim', '', '', '', '', ''),
(7, '123456789-00', '', 'leandro', 'Sim', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 'Sim', 'NÃ£o', '', ''),
(8, '123.456.678-90', '', 'leandro Cerqueira', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'Rio de Janeiro', '', '', '', '', '', 'Sim', '', '', ''),
(9, '123456789-00', '', 'leandro Cerqueira', 'Sim', '21 22334455', '21 98365-6529', 'le22cerqueira@yahoo.com.br', '20231-050', 'Rua Andre Cavalcanti', '158', 'Santa Tereza', '1983-03-11', '2019-08-31', 'Rio de Janeiro', 'RJ', 'Ativa', '', 'Sim', 'NÃ£o tem', 'Sim', 'NÃ£o', 'Sei nÃ£o', ''),
(10, '123456789-00', '', 'leandro Cerqueira da silva', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', 'leandro', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(12, '095.443.637-77', '', 'leandro Cerqueira', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(13, '123456789-00', '', 'leandro Cerqueira da silva', 'Sim', '21 22334455', '21 98365-6529', 'le22cerqueira@yahoo.com.br', '20231-050', 'Rua Andre Cavalcanti', '158', 'Santa Tereza', '1983-03-11', '2019-08-31', 'Rio de Janeiro', 'RJ', 'Ativa', '', 'Sim', 'NÃ£o tem', 'Sim', 'NÃ£o', 'Sei nÃ£o', ''),
(14, '095.443.637-77', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(15, '095.443.637-77', '123456789', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id_especialidade`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `login` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
