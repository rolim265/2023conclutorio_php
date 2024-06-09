-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/11/2023 às 01:52
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
-- Banco de dados: `logins_feira`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `email`, `senha`) VALUES
(16, 'yure@cavalos.com', '$2y$10$VaBgKRH/SJwZFLA5JEAjN.lrxZeAaU1Ctjy87pdqLq/4S3PzFXXyW'),
(17, 'teste@teste.com', '$2y$10$bmEwCt8w48RFj6oYXQb.V.VNoTuiBky.TVNc4cd1UVpi3qxsPozZC'),
(18, 'rolim@ooop.com', '$2y$10$AmD1x/wosvSLclco1BV1AeX58gP87HQyZUGlq7fsDBvLnlnxNyHbO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `meus_locais`
--

CREATE TABLE `meus_locais` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `decricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `meus_locais`
--

INSERT INTO `meus_locais` (`id`, `nome`, `img`, `lugar`, `decricao`) VALUES
(1, 'Grand Plaza Shopping Santo André', 'https://expressaoabcelitoral.com.br/wp-content/uploads/2022/08/GPS_Grand-Plaza-Shopping.jpg', 'https://www.google.com/maps/place/Grand+Plaza+Shopping/@-23.6487368,-46.5346137,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce4294ff676307:0xd9bb1a8238ff865a!8m2!3d-23.6487368!4d-46.5320388!16s%2Fg%2F120l7rzg?hl=pt-BR&entry=ttu\'', 'Lugar ótimo para passear com a família e acessível com elevador para cadeirantes, banheiro com uso especial para deficientes.'),
(2, 'Parque Municipal Gruta de Santa Luzia', 'https://lh5.googleusercontent.com/p/AF1QipPrpL5LW6la2SbgJxdlZfVWpI39ouDPFhy91XdY=w408-h306-k-no', 'https://www.google.com/maps/place/Parque+Ecol%C3%B3gico+da+Gruta+Santa+Luzia/@-23.6769977,-46.4113569,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce6c3bae33d8c1:0xb2d27f5956829645!8m2!3d-23.6769977!4d-46.408782!16s%2Fg%2F1225km75?hl=pt-BR&entry=ttu', 'Entrada gratuita, acessível para cadeirantes.'),
(3, 'Parque Municipal Max Feffer', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQME0BGBz_IoWhOkgHkxgz-KpIMBM-H24y4LWKV0AjyDdKLyDPzQcdzah1xNVr55Q4jCEg&usqp=CAU', 'https://www.google.com/maps/place/Parque+Municipal+Max+Feffer/@-23.5301564,-46.3243311,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce7b0ab66967d5:0x4a1cb575f50ae3ef!8m2!3d-23.5301564!4d-46.3217562!16s%2Fg%2F11mnhjzdyn?hl=pt-BR&entry=ttu', 'O parque conta com pistas de ciclismo e caminhada(acessível para cadeirantes), quadras poliesportivas, quadra de vôlei de areia, campo de futebol, piscina, pista de skate, ginásio, academia ao ar livre, playground e salão para eventos (Salão Zumbi dos Pal');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `meus_locais`
--
ALTER TABLE `meus_locais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `meus_locais`
--
ALTER TABLE `meus_locais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
