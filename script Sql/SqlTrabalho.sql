CREATE DATABASE `aula`;

DROP TABLE IF EXISTS `aula`.`paciente`;
CREATE TABLE  `aula`.`paciente` (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `idade` int,
  `sexo` varchar(1),
  `email` varchar(40),
  `telefone` varchar(15),
  `endereco` varchar(50),
  `id_estado` int,
  `numero` int,
  `ativo` char(1),
  PRIMARY KEY (`id_paciente`)
) 
ENGINE=InnoDB;

DROP TABLE IF EXISTS `aula`.`usuario`;
CREATE TABLE  `aula`.`usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` int,  
  `email` varchar(40),
  `telefone` varchar(15),
  `endereco` varchar(50),
  `id_estado` int,
  `numero` int,
  PRIMARY KEY (`id_usuario`)
) 
ENGINE=InnoDB;

DROP TABLE IF EXISTS `aula`.`doutor`;
CREATE TABLE  `aula`.`doutor` (
  `id_doutor` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(40),
  `telefone` varchar(15),
  `endereco` varchar(50),
  `id_estado` int,
  `numero` int,
  `id_consulta` int,
  PRIMARY KEY (`id_doutor`)
) 
ENGINE=InnoDB;

DROP TABLE IF EXISTS `aula`.`consulta`;
CREATE TABLE  `aula`.`consulta` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `id_paciente` int NOT NULL,
  `id_doutor` int NOT NULL,
  `data_consulta` date,
  `hora` varchar(5),
  `atendida` varchar(1),
  `observacao` varchar(100),
  PRIMARY KEY (`id_consulta`)
) 
ENGINE=InnoDB;

DROP TABLE IF EXISTS `aula`.`estado`;
CREATE TABLE  `aula`.`estado` (
  `id_estado` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(40),
  `sigla` varchar(2),  
  PRIMARY KEY (`id_estado`)
) 
ENGINE=InnoDB;

INSERT INTO `aula.estado` (`descricao`, `sigla`) VALUES
('Acre', 'AC'),
('Alagoas', 'AL'),
('Amazonas', 'AM'),
('Amapá', 'AP'),
('Bahia', 'BA'),
('Ceará', 'CE'),
('Distrito Federal', 'DF'),
('Espírito Santo', 'ES'),
('Goiás', 'GO'),
('Maranhão', 'MA'),
('Minas Gerais', 'MG'),
('Mato Grosso do Sul', 'MS'),
('Mato Grosso', 'MT'),
('Pará', 'PA'),
('Paraíba', 'PB'),
('Pernambuco', 'PE'),
('Piauí', 'PI'),
('Paraná', 'PR'),
('Rio de Janeiro', 'RJ'),
('Rio Grande do Norte', 'RN'),
('Roraima', 'RR'),
('Rondônia', 'RO'),
('Rio Grande do Sul', 'RS'),
('Santa Catarina', 'SC'),
('Sergipe', 'SE'),
('São Paulo', 'SP'),
('Tocantins', 'TO');
