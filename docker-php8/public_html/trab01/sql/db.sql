-- tads.profissao definition

CREATE TABLE `profissao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `interesse` text DEFAULT NULL,
  `recado` text DEFAULT NULL,
  `promo` tinyint(1) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;