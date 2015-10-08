------------ STORED PROCEDURES ABM VOTOS-------


------------DELETE VOTO--------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarVoto`(IN `idd` INT(100))
    MODIFIES SQL DATA
    DETERMINISTIC
DELETE FROM votos WHERE id=idd

---------INSERT VOTO------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVoto`(IN `id` INT(25), IN `sexo` VARCHAR(25), IN `presidente` VARCHAR(25), IN `provincia` VARCHAR(25))
    MODIFIES SQL DATA
    DETERMINISTIC
INSERT into votos (id,sexo,presidente,provincia)values(id,sexo,presidente,provincia)


---------UPDATE VOTO-----------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarVotoParametros`(IN `idd` INT(25), IN `sexxo` VARCHAR(25), IN `ppresidente` VARCHAR(25), IN `pprovincia` VARCHAR(25))
    MODIFIES SQL DATA
    DETERMINISTIC
update votos 
				set sexo=sexxo,
				presidente=ppresidente,
				provincia=pprovincia
				WHERE id=idd



-------------SELECT VOTO-----------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodosLosVotos`()
    DETERMINISTIC
select * from votos