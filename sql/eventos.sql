# Host: 127.0.0.1  (Version 5.7.21-log)
# Date: 2018-05-17 01:07:17
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "c_administrador"
#

DROP TABLE IF EXISTS `c_administrador`;
CREATE TABLE `c_administrador` (
  `cod_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `ultimo_acesso` datetime DEFAULT NULL,
  `super_admin` char(1) NOT NULL DEFAULT 'n',
  `trocar_senha` char(1) NOT NULL DEFAULT 'n',
  `conta_ativa` enum('s','n') DEFAULT 's',
  PRIMARY KEY (`cod_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "c_administrador"
#

INSERT INTO `c_administrador` VALUES (1,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 18:01:57','s','n','s'),(2,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 18:03:28','s','n','s'),(3,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 18:30:58','s','n','s'),(4,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 18:50:23','s','n','s'),(5,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 22:51:38','s','n','s'),(6,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 22:52:18','s','n','s'),(7,'Badanha de Oliveira','badanha@badanha.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2018-05-16 22:56:35','s','n','s');

#
# Structure for table "c_endereco"
#

DROP TABLE IF EXISTS `c_endereco`;
CREATE TABLE `c_endereco` (
  `cod_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_endereco"
#


#
# Structure for table "c_evento"
#

DROP TABLE IF EXISTS `c_evento`;
CREATE TABLE `c_evento` (
  `cod_evento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_evento` varchar(70) DEFAULT NULL,
  `data_realizacao` date DEFAULT NULL,
  `cod_endereco` int(11) DEFAULT NULL,
  `inscricoes_abertas` enum('s','n') NOT NULL DEFAULT 's',
  `cod_administrador` int(11) NOT NULL,
  PRIMARY KEY (`cod_evento`),
  KEY `fk_cevento_cendereco` (`cod_endereco`),
  KEY `fk_c_evento_c_administrador1_idx` (`cod_administrador`),
  CONSTRAINT `fk_c_evento_c_administrador1` FOREIGN KEY (`cod_administrador`) REFERENCES `c_administrador` (`cod_administrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cevento_cendereco` FOREIGN KEY (`cod_endereco`) REFERENCES `c_endereco` (`cod_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_evento"
#


#
# Structure for table "c_acessos_administrador_evento"
#

DROP TABLE IF EXISTS `c_acessos_administrador_evento`;
CREATE TABLE `c_acessos_administrador_evento` (
  `cod_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `cod_administrador` int(11) NOT NULL,
  `cod_evento` int(11) NOT NULL,
  PRIMARY KEY (`cod_acesso`),
  KEY `fk_acessos_administrador_evento_c_administrador1_idx` (`cod_administrador`),
  KEY `fk_acessos_administrador_evento_c_evento1_idx` (`cod_evento`),
  CONSTRAINT `fk_acessos_administrador_evento_c_administrador1` FOREIGN KEY (`cod_administrador`) REFERENCES `c_administrador` (`cod_administrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acessos_administrador_evento_c_evento1` FOREIGN KEY (`cod_evento`) REFERENCES `c_evento` (`cod_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_acessos_administrador_evento"
#


#
# Structure for table "c_evento_log"
#

DROP TABLE IF EXISTS `c_evento_log`;
CREATE TABLE `c_evento_log` (
  `cod_log` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_log` enum('i','u','d') NOT NULL,
  `cod_administrador` int(11) DEFAULT NULL,
  `nome_administrador` varchar(50) DEFAULT NULL,
  `cod_evento` int(11) DEFAULT NULL,
  `descricao_evento` varchar(70) DEFAULT NULL,
  `data_log` date DEFAULT NULL,
  PRIMARY KEY (`cod_log`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_evento_log"
#


#
# Structure for table "c_livro"
#

DROP TABLE IF EXISTS `c_livro`;
CREATE TABLE `c_livro` (
  `cod_livro` int(11) NOT NULL AUTO_INCREMENT,
  `numero_do_livro` int(11) NOT NULL,
  `numero_de_folhas` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_livro"
#


#
# Structure for table "c_folha"
#

DROP TABLE IF EXISTS `c_folha`;
CREATE TABLE `c_folha` (
  `cod_folha` int(11) NOT NULL AUTO_INCREMENT,
  `numero_da_folha` int(11) DEFAULT NULL,
  `numero_de_registros` int(11) DEFAULT NULL,
  `cod_livro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_folha`),
  KEY `fk_cfolha_clivro` (`cod_livro`),
  CONSTRAINT `fk_cfolha_clivro` FOREIGN KEY (`cod_livro`) REFERENCES `c_livro` (`cod_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_folha"
#


#
# Structure for table "c_participante"
#

DROP TABLE IF EXISTS `c_participante`;
CREATE TABLE `c_participante` (
  `cod_participante` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_participante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_participante"
#


#
# Structure for table "c_liberacao_certificado"
#

DROP TABLE IF EXISTS `c_liberacao_certificado`;
CREATE TABLE `c_liberacao_certificado` (
  `cod_liberacao_certificado` int(11) NOT NULL AUTO_INCREMENT,
  `numero_registro` int(11) DEFAULT NULL,
  `numero_folha` int(11) DEFAULT NULL,
  `numero_livro` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `descricao_evento` varchar(70) DEFAULT NULL,
  `data_realizacao` date DEFAULT NULL,
  `data_liberacao` date DEFAULT NULL,
  `liberacao_disponivel` enum('s','n') DEFAULT 's',
  `cod_participante` int(11) DEFAULT NULL,
  `cod_evento` int(11) DEFAULT NULL,
  `cod_administrador` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_liberacao_certificado`),
  KEY `fk_cliberacao_cparticipante` (`cod_participante`),
  KEY `fk_cliberacao_cevento` (`cod_evento`),
  KEY `fk_cliberacao_cadministrador` (`cod_administrador`),
  CONSTRAINT `fk_cliberacao_cadministrador` FOREIGN KEY (`cod_administrador`) REFERENCES `c_administrador` (`cod_administrador`),
  CONSTRAINT `fk_cliberacao_cevento` FOREIGN KEY (`cod_evento`) REFERENCES `c_evento` (`cod_evento`),
  CONSTRAINT `fk_cliberacao_cparticipante` FOREIGN KEY (`cod_participante`) REFERENCES `c_participante` (`cod_participante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_liberacao_certificado"
#


#
# Structure for table "c_registro"
#

DROP TABLE IF EXISTS `c_registro`;
CREATE TABLE `c_registro` (
  `cod_registro` int(11) NOT NULL AUTO_INCREMENT,
  `numero_do_registro` int(11) DEFAULT NULL,
  `cod_evento` int(11) DEFAULT NULL,
  `cod_participante` int(11) DEFAULT NULL,
  `cod_folha` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_registro`),
  KEY `fk_cregistro_cevento` (`cod_evento`),
  KEY `fk_cregistro_cfolha` (`cod_folha`),
  KEY `fk_cregistro_cparticipante` (`cod_participante`),
  CONSTRAINT `fk_cregistro_cevento` FOREIGN KEY (`cod_evento`) REFERENCES `c_evento` (`cod_evento`),
  CONSTRAINT `fk_cregistro_cfolha` FOREIGN KEY (`cod_folha`) REFERENCES `c_folha` (`cod_folha`),
  CONSTRAINT `fk_cregistro_cparticipante` FOREIGN KEY (`cod_participante`) REFERENCES `c_participante` (`cod_participante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "c_registro"
#

