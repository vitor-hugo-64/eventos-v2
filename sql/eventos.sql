# Host: 172.16.0.5  (Version 5.7.21-0ubuntu0.16.04.1)
# Date: 2018-05-21 14:50:35
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "c_administrador"
#

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "c_administrador"
#

INSERT INTO `c_administrador` VALUES (8,'Vitor Hugo Balon de Oliveira','vitorhugooliveira64@gmail.com','eae.DhB.cUkM.','2018-05-21 09:10:04','s','n','s'),(9,'Danilo Oliveira','danilo@liberato.com.br','eaMhCeXdKUNZs','2018-05-21 10:17:22','s','n','s'),(10,'Sandra Oliveira','sandra.oliveira@liberato.com.br','eaQWYitlMN0u.','2018-05-21 11:11:19','n','n','s');

#
# Structure for table "c_endereco"
#

CREATE TABLE `c_endereco` (
  `cod_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(70) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "c_endereco"
#

INSERT INTO `c_endereco` VALUES (3,'Minha Casa',238,'Orsi','Metzler','Campo Bom ','RS','Brasil');

#
# Structure for table "c_evento"
#

CREATE TABLE `c_evento` (
  `cod_evento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_evento` varchar(70) DEFAULT NULL,
  `data_realizacao` datetime DEFAULT NULL,
  `cod_endereco` int(11) DEFAULT NULL,
  `inscricoes_abertas` enum('s','n') NOT NULL DEFAULT 's',
  `cod_administrador` int(11) NOT NULL,
  `texto_inicio_certificado` text,
  `texto_corpo_certificado` text,
  PRIMARY KEY (`cod_evento`),
  KEY `fk_cevento_cendereco` (`cod_endereco`),
  KEY `fk_c_evento_c_administrador1_idx` (`cod_administrador`),
  CONSTRAINT `fk_c_evento_c_administrador1` FOREIGN KEY (`cod_administrador`) REFERENCES `c_administrador` (`cod_administrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cevento_cendereco` FOREIGN KEY (`cod_endereco`) REFERENCES `c_endereco` (`cod_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "c_evento"
#

INSERT INTO `c_evento` VALUES (11,'Speaker','1998-05-30 17:30:00',3,'s',8,'Certificamos que','Participou do nosso evento.'),(12,'Foca no Trabalho','2018-05-24 09:30:00',3,'s',10,'Certificamos que','Participou do Seminário Foca no Trabalho. Sendo que a partir de agora vai ser mais eficiente naquilo que faz.');

#
# Structure for table "c_acessos_administrador_evento"
#

CREATE TABLE `c_acessos_administrador_evento` (
  `cod_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `cod_administrador` int(11) NOT NULL,
  `cod_evento` int(11) NOT NULL,
  PRIMARY KEY (`cod_acesso`),
  KEY `fk_acessos_administrador_evento_c_administrador1_idx` (`cod_administrador`),
  KEY `fk_acessos_administrador_evento_c_evento1_idx` (`cod_evento`),
  CONSTRAINT `fk_acessos_administrador_evento_c_administrador1` FOREIGN KEY (`cod_administrador`) REFERENCES `c_administrador` (`cod_administrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acessos_administrador_evento_c_evento1` FOREIGN KEY (`cod_evento`) REFERENCES `c_evento` (`cod_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "c_acessos_administrador_evento"
#

INSERT INTO `c_acessos_administrador_evento` VALUES (4,8,11);

#
# Structure for table "c_livro"
#

CREATE TABLE `c_livro` (
  `cod_livro` int(11) NOT NULL AUTO_INCREMENT,
  `numero_do_livro` int(11) NOT NULL,
  `numero_de_folhas` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "c_livro"
#


#
# Structure for table "c_folha"
#

CREATE TABLE `c_folha` (
  `cod_folha` int(11) NOT NULL AUTO_INCREMENT,
  `numero_da_folha` int(11) DEFAULT NULL,
  `numero_de_registros` int(11) DEFAULT NULL,
  `cod_livro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_folha`),
  KEY `fk_cfolha_clivro` (`cod_livro`),
  CONSTRAINT `fk_cfolha_clivro` FOREIGN KEY (`cod_livro`) REFERENCES `c_livro` (`cod_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "c_folha"
#


#
# Structure for table "c_participante"
#

CREATE TABLE `c_participante` (
  `cod_participante` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_participante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "c_participante"
#


#
# Structure for table "c_liberacao_certificado"
#

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
  `texto_inicio_certificado` text,
  `texto_corpo_certificado` text,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "c_liberacao_certificado"
#


#
# Structure for table "c_registro"
#

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "c_registro"
#


#
# Function "ALTERAR_SENHA"
#

CREATE FUNCTION `ALTERAR_SENHA`( senha_informado varchar(40), id_admin_informado int) RETURNS int(11)
BEGIN

	update c_administrador
    set senha = senha_informado, trocar_senha = 'n'
    where cod_administrador = id_admin_informado;
    
    return 5;

END;

#
# Function "ATUALIZAR_ADMINISTRADOR"
#

CREATE FUNCTION `ATUALIZAR_ADMINISTRADOR`(cod_administrador_informado int, nome_informado varchar(50), email_informado varchar(50), super_admin_informado char(1), trocar_senha_informado char(1), conta_ativa_informado char(1)) RETURNS int(11)
BEGIN

    declare super_admin_cursor char(1);
	declare senha_cursor varchar(40);
    declare ultimo_acesso_cursor datetime;
    declare c1 cursor for
		select senha, ultimo_acesso, super_admin from c_administrador where cod_administrador = cod_administrador_informado;
    
	OPEN c1;
		FETCH c1 INTO senha_cursor, ultimo_acesso_cursor, super_admin_cursor;
	CLOSE c1;

	if super_admin_cursor = 'n' then
    
		delete from c_administrador where cod_administrador = cod_administrador_informado;
		insert into c_administrador values( cod_administrador_informado, nome_informado, email_informado, senha_cursor, ultimo_acesso_cursor, super_admin_informado, trocar_senha_informado, conta_ativa_informado);
		return 3;
        
    else
		return 4;
    end if;

RETURN 1;
END;

#
# Function "ATUALIZAR_ENDERECO"
#

CREATE FUNCTION `ATUALIZAR_ENDERECO`(cod_endereco_informado int, descricao_informado varchar(50), numero_informado int, rua_informado varchar(50), bairro_informado varchar(50), cidade_informado varchar(50), estado_informado char(2), pais_informado varchar(50)) RETURNS int(11)
BEGIN

	declare numero_cursor int;
    declare c1 cursor for
		select numero from c_endereco 
        where 
        descricao = descricao_informado
        and numero = numero_informado 
        and rua = rua_informado 
        and bairro = bairro_informado 
        and cidade = cidade_informado 
        and estado = estado_informado
        and pais = pais_informado;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET numero_cursor = null;
    
	OPEN c1;
		FETCH c1 INTO numero_cursor;
	CLOSE c1;
    
    if numero_cursor is null then
		update c_endereco 
        set
        descricao = descricao_informado, 
        numero = numero_informado, 
        rua = rua_informado, 
        bairro = bairro_informado, 
        cidade = cidade_informado, 
        estado = estado_informado, 
        pais = pais_informado
        where cod_endereco = cod_endereco_informado;
    	return 3;
    else
		return 2;
    end if;	

RETURN 1;
END;

#
# Function "ATUALIZAR_EVENTO"
#

CREATE FUNCTION `ATUALIZAR_EVENTO`( cod_evento_informado int, descricao_evento_informado varchar(70), data_realizacao_informado datetime, cod_endereco_informado int, inscricoes_abertas_informado char(1), cod_administrador_informado int, texto_inicio_informado text, texto_corpo_informado text) RETURNS int(11)
BEGIN

	delete from c_evento where cod_evento = cod_evento_informado;
    
    insert into c_evento values( cod_evento_informado, descricao_evento_informado, data_realizacao_informado, cod_endereco_informado, inscricoes_abertas_informado, cod_administrador_informado, texto_inicio_informado, texto_corpo_informado);

	RETURN 1;
END;

#
# Function "CADASTRAR_ADMINISTRADOR"
#

CREATE FUNCTION `CADASTRAR_ADMINISTRADOR`( nome_informado varchar(50), email_informado varchar(50), senha_informado varchar(40), super_admin_informado char(1), trocar_senha_informado char(1)) RETURNS int(11)
BEGIN

    DECLARE email_cursor varchar(50);
	DECLARE c1 CURSOR FOR
		SELECT email
		FROM c_administrador
		WHERE email = email_informado;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET email_cursor = null;
     
	OPEN c1;
		FETCH c1 INTO email_cursor;
	CLOSE c1;
    
    
    if email_cursor is null then
		INSERT INTO c_administrador VALUES( DEFAULT, nome_informado, email_informado, senha_informado, now(), super_admin_informado, trocar_senha_informado, DEFAULT);
		return 1;
    else
		return 2;
    end if;

RETURN 1;
END;

#
# Function "CADASTRAR_ENDERECO"
#

CREATE FUNCTION `CADASTRAR_ENDERECO`( descricao_informa varchar(50), numero_informa int, rua_informa varchar(50), bairro_informa varchar(50), cidade_informa varchar(50), estado_informa char(2), pais_informa varchar(50)) RETURNS int(11)
BEGIN

	declare numero_cursor int;
    declare c1 cursor for
		select numero from c_endereco where numero = numero_informa 
        and rua = rua_informa 
        and bairro = bairro_informa 
        and cidade = cidade_informa 
        and estado = estado_informa;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET numero_cursor = null;
    
	OPEN c1;
		FETCH c1 INTO numero_cursor;
	CLOSE c1;
    
    if numero_cursor is null then
		insert into c_endereco values( DEFAULT, descricao_informa, numero_informa, rua_informa, bairro_informa, cidade_informa, estado_informa, pais_informa);
        return 1;
    else
		return 2;
    end if;

RETURN 1;
END;

#
# Function "CRIAR_EVENTO"
#

CREATE FUNCTION `CRIAR_EVENTO`( descricao_evento_informado varchar(70), data_realizacao_informado datetime, cod_endereco_informado int, cod_administrador_informado int, inicio_certificado_informado text, corpo_certificado_informado text) RETURNS int(11)
BEGIN

	declare cod_evento int;

	insert into c_evento values( default, descricao_evento_informado, data_realizacao_informado, cod_endereco_informado, default, cod_administrador_informado, inicio_certificado_informado, corpo_certificado_informado);

	RETURN 1;
END;
