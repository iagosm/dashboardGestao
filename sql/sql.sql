CREATE DATABASE ism;

CREATE TABLE `endereco` (
    `idendereco` int(11) AUTO_INCREMENT PRIMARY KEY,
    `cep` varchar(7) NOT NULL,
    `endereco` varchar(7) NOT NULL, 
    `cidade` varchar(7) NOT NULL, 
    `uf` varchar(7) NOT NULL,
    `bairro` varchar(7) NOT NULL, 
    `ativo` varchar(7) NOT NULL,  
    `created_at` datetime NOT NULL, 
    `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `endereco` (
  `idendereco` int(11) AUTO_INCREMENT PRIMARY KEY,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(100) NOT NULL, 
  `cidade` varchar(30) NOT NULL, 
  `uf` varchar(2) NOT NULL,
  `bairro` varchar(50) NOT NULL, 
  `observacao` VARCHAR(255) NOT NULL,
  `ativo` ENUM('S', 'N') NOT NULL,  
  `created_at` datetime NOT NULL, 
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `genero` (
  `idgenero` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(30) NOT NULL,
  `ativo` enum('S', 'N') NOT NULL,
  `created_at` datetime NOT NULL, 
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cliente` (
  `idcliente` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(7) NOT NULL,
  `cpf` varchar(14) NOT NULL, 
  `rg` varchar(20) NOT NULL, 
  `telefone1` varchar(20) NOT NULL,
  `telefone2` varchar(20) NULL,
  `email` varchar(255) NOT NULL, 
  `id_genero` int(11) NOT NULL, 
  `id_endereco` int(11) NOT NULL,
  `created_at` datetime NOT NULL, 
  `updated_at` datetime NOT NULL,
  FOREIGN KEY (id_endereco) REFERENCES endereco(idendereco),
  FOREIGN KEY (id_genero) REFERENCES genero(idgenero)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;