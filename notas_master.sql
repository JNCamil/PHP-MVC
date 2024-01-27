CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE `Usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (id),
  UNIQUE (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Notas` (
  `id` int(255) NOT NULL,
  `usuario_id` int (255) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE Notas ADD FOREIGN KEY (usuario_id) REFERENCES Usuarios (id) ON DELETE CASCADE ON UPDATE CASCADE;