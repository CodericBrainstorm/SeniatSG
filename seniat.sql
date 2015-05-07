-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-05-2013 a las 23:45:17
-- Versión del servidor: 5.5.25
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `seniat`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_planilla`(IN `con` VARCHAR(45), IN `rif` VARCHAR(45), IN `veh` VARCHAR(45), IN `mue` VARCHAR(45), IN `fecarr` VARCHAR(45), IN `fecsal` VARCHAR(45), IN `fech` VARCHAR(45), IN `uni` INT, IN `fv` VARCHAR(45), IN `hvi` VARCHAR(45), IN `hvf` VARCHAR(45), IN `tvh` VARCHAR(45), IN `tvb` DOUBLE, IN `tvut` VARCHAR(45), IN `fo` VARCHAR(45), IN `hoi` VARCHAR(45), IN `hof` VARCHAR(45), IN `toh` VARCHAR(45), IN `tob` DOUBLE, IN `tout` VARCHAR(45), IN `fa` VARCHAR(45), IN `hai` VARCHAR(45), IN `haf` VARCHAR(45), IN `tah` VARCHAR(45), IN `tab` DOUBLE, IN `taut` VARCHAR(45), IN `fd` VARCHAR(45), IN `hdi` VARCHAR(45), IN `hdf` VARCHAR(45), IN `tdh` VARCHAR(45), IN `tdb` DOUBLE, IN `tdut` VARCHAR(45), IN `fotros` VARCHAR(45), IN `puertos` VARCHAR(45), IN `totros` DOUBLE, IN `desay` DOUBLE, IN `almue` DOUBLE, IN `cena` DOUBLE, IN `ced` VARCHAR(45), IN `hor` VARCHAR(45), IN `totalp` VARCHAR(45))
BEGIN
  SET @ced=ced;
  INSERT INTO planilla (contrib, rif, vehiculo, muelle, fec_arribo, fec_salida, fecha, uni_tributa,hora, total_p)
              VALUES (con,rif,veh,mue,fecarr,fecsal, fech, uni, hor, totalp);
  SET @idplan=(SELECT LAST_INSERT_ID());
  
  INSERT INTO us_planilla (cedula, id_planilla)
  	      VALUES (@ced, @idplan);
  
  INSERT INTO visita (fecha_v, hora_v_ini, hora_v_fin, total_v_horas, total_v_bs, total_v_ut, id_planilla)
  	      VALUES(fv,hvi,hvf,tvh,tvb,tvut,@idplan);
 
  INSERT INTO operaciones (fecha_o, hora_o_ini, hora_o_fin, total_o_horas, total_o_bs, total_o_ut, id_planilla)
              VALUES(fo,hoi,hof,toh,tob,tout,@idplan);
  
  INSERT INTO alcabala (fecha_a, hora_a_ini, hora_a_fin, total_a_horas, total_a_bs, total_a_ut, id_planilla)
  	      VALUES(fa,hai,haf,tah,tab,taut,@idplan);
       
  
  INSERT INTO despacho (fecha_d, hora_d_ini, hora_d_fin, total_d_horas, total_d_bs, total_d_ut, id_planilla)
  	      VALUES(fd,hdi,hdf,tdh,tdb,tdut,@idplan);
  
  
  INSERT INTO otros_gastos (fecha_otros, puerto,total_bs_otros, desayuno, almuerzo, cena, id_planilla) 
  	      VALUES(fotros,puertos,totros,desay,almue,cena,@idplan);
  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `elim_plan`(IN `idplan` INT)
BEGIN
DELETE FROM planilla where id_planilla=idplan;
DELETE FROM us_planilla where id_planilla=idplan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nvo_user`(IN `ced` VARCHAR(45), IN `nom` VARCHAR(45), IN `ape` VARCHAR(45), IN `log` VARCHAR(45), IN `cla` VARCHAR(45), IN `corr` VARCHAR(100), IN `idtip` VARCHAR(45))
BEGIN
insert into usuarios(cedula, nombre, apellido, login,clave,correo, id_tipo) values (ced,nom,ape,log,cla,corr,idtip);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `upd_plan`(IN `idplan` INT, IN `cont` VARCHAR(45), IN `rif` VARCHAR(45), IN `veh` VARCHAR(45), IN `mue` VARCHAR(45), IN `feca` VARCHAR(45), IN `fecs` VARCHAR(45), IN `fec` VARCHAR(45), IN `unit` VARCHAR(45), IN `hor` VARCHAR(45), IN `totp` VARCHAR(45), IN `fv` VARCHAR(45), IN `hvi` VARCHAR(45), IN `hvf` VARCHAR(45), IN `tvh` INT, IN `tvb` DOUBLE, IN `tvu` INT, IN `fo` VARCHAR(45), IN `hoi` VARCHAR(45), IN `hof` VARCHAR(45), IN `toh` INT, IN `tob` DOUBLE, IN `tou` DOUBLE, IN `fa` VARCHAR(45), IN `hai` VARCHAR(45), IN `haf` VARCHAR(45), IN `tah` INT, IN `tab` DOUBLE, IN `tau` INT, IN `fd` VARCHAR(45), IN `hdi` VARCHAR(45), IN `hdf` VARCHAR(45), IN `tdh` INT, IN `tdb` DOUBLE, IN `tdu` INT, IN `fot` VARCHAR(45), IN `puer` VARCHAR(45), IN `tbot` DOUBLE, IN `desay` DOUBLE, IN `almuer` DOUBLE, IN `cen` DOUBLE)
BEGIN

   update planilla set contrib=cont, rif=rif, vehiculo=veh, muelle=mue, fec_arribo=feca, fec_salida=fecs, fecha=fec, uni_tributa=unit, hora=hor, total_p=totp where id_planilla=idplan ;
   
   update visita set fecha_v=fv, hora_v_ini=hvi, 
   	 	     hora_v_fin=hvf, total_v_horas=tvh, 
   		     total_v_bs=tvb, total_v_ut=tvu 
   		     where id_planilla=idplan;

   update operaciones set fecha_o=fo, hora_o_ini=hoi, 
   			  hora_o_fin=hof, total_o_horas=toh, 
                          total_o_bs=tob, total_o_ut=tou
                          where id_planilla=idplan;
   
   update alcabala set fecha_a=fa, hora_a_ini=hai, 
   		        hora_a_fin=haf, total_a_horas=tah, 
                        total_a_bs=tab, total_a_ut=tau 
                        where id_planilla=idplan;
   
   update despacho set fecha_d=fd, hora_d_ini=hdi, 
                       hora_d_fin=hdf, total_d_horas=tdh, 
                       total_d_bs=tdb, total_d_ut=tdu 
                       where id_planilla=idplan;
 
   update otros_gastos set fecha_otros=fot, puerto=puer,
   		           total_bs_otros=tbot, desayuno=desay,
                           almuerzo=almuer, cena=cen
                           where id_planilla=idplan;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `upd_user`(IN `ced` VARCHAR(45), IN `nom` VARCHAR(45), IN `ape` VARCHAR(45), IN `log` VARCHAR(45), IN `cla` VARCHAR(45), IN `corr` VARCHAR(100), IN `idtip` VARCHAR(45), IN `idus` INT)
BEGIN
 
 update usuarios set cedula=ced, nombre=nom, apellido=ape, login=log, clave=cla, correo=corr, id_tipo=idtip where id=idus ;
 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcabala`
--

CREATE TABLE `alcabala` (
  `id_alcabala` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_a` varchar(45) NOT NULL,
  `hora_a_ini` varchar(45) NOT NULL,
  `hora_a_fin` varchar(45) NOT NULL,
  `total_a_horas` int(11) NOT NULL,
  `total_a_bs` double NOT NULL,
  `total_a_ut` int(11) NOT NULL,
  `id_planilla` int(11) NOT NULL,
  PRIMARY KEY (`id_alcabala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `alcabala`
--

INSERT INTO `alcabala` (`id_alcabala`, `fecha_a`, `hora_a_ini`, `hora_a_fin`, `total_a_horas`, `total_a_bs`, `total_a_ut`, `id_planilla`) VALUES
(1, '04/08/2013', '07:15 AM', '10:15 PM', 15, 6420, 4, 1),
(2, '09/04/2013', '07:10 AM', '04:10 PM', 9, 4815, 5, 2),
(3, '30/04/2013', '08:10 AM', '05:10 PM', 9, 2889, 3, 3),
(4, '07/05/2013', '08:10 AM', '05:10 PM', 9, 2889, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE `despacho` (
  `id_despacho` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_d` varchar(45) NOT NULL,
  `hora_d_ini` varchar(45) NOT NULL,
  `hora_d_fin` varchar(45) NOT NULL,
  `total_d_horas` int(45) NOT NULL,
  `total_d_bs` double NOT NULL,
  `total_d_ut` int(11) NOT NULL,
  `id_planilla` int(11) NOT NULL,
  PRIMARY KEY (`id_despacho`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`id_despacho`, `fecha_d`, `hora_d_ini`, `hora_d_fin`, `total_d_horas`, `total_d_bs`, `total_d_ut`, `id_planilla`) VALUES
(1, '04/10/2013', '02:15 PM', '04:15 PM', 2, 214, 1, 1),
(2, '18/04/2013', '07:10 AM', '02:10 PM', 7, 3745, 5, 2),
(3, '02/04/2013', '01:10 AM', '05:10 AM', 4, 1284, 3, 3),
(4, '13/05/2013', '01:10 AM', '02:10 AM', 1, 1070, 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `id_ope` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_o` varchar(45) NOT NULL,
  `hora_o_ini` varchar(45) NOT NULL,
  `hora_o_fin` varchar(45) NOT NULL,
  `total_o_horas` int(11) NOT NULL,
  `total_o_bs` double NOT NULL,
  `total_o_ut` int(11) NOT NULL,
  `id_planilla` int(11) NOT NULL,
  PRIMARY KEY (`id_ope`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `operaciones`
--

INSERT INTO `operaciones` (`id_ope`, `fecha_o`, `hora_o_ini`, `hora_o_fin`, `total_o_horas`, `total_o_bs`, `total_o_ut`, `id_planilla`) VALUES
(1, '04/01/2013', '02:15 PM', '09:15 PM', 7, 749, 1, 1),
(2, '10/04/2013', '01:10 AM', '04:10 AM', 3, 1284, 4, 2),
(3, '02/04/2013', '07:10 AM', '02:10 PM', 7, 2247, 3, 3),
(4, '05/05/2013', '01:10 AM', '10:10 AM', 9, 8667, 9, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_gastos`
--

CREATE TABLE `otros_gastos` (
  `id_otros` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_otros` varchar(45) NOT NULL,
  `puerto` varchar(45) NOT NULL,
  `total_bs_otros` double NOT NULL,
  `desayuno` double NOT NULL,
  `almuerzo` double NOT NULL,
  `cena` double NOT NULL,
  `id_planilla` int(11) NOT NULL,
  PRIMARY KEY (`id_otros`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `otros_gastos`
--

INSERT INTO `otros_gastos` (`id_otros`, `fecha_otros`, `puerto`, `total_bs_otros`, `desayuno`, `almuerzo`, `cena`, `id_planilla`) VALUES
(1, '04/01/2013', '100', 218, 34, 0, 69, 1),
(2, '09/04/2013', '10', 80.5, 0, 69, 0, 2),
(3, '24/04/2013', '10', 149.5, 0, 69, 69, 3),
(4, '20/05/2013', '10', 149.5, 0, 69, 69, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_viat`
--

CREATE TABLE `otros_viat` (
  `id_otros` int(11) NOT NULL,
  `id_viaticos` int(11) NOT NULL,
  PRIMARY KEY (`id_otros`,`id_viaticos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `id_planilla` int(11) NOT NULL AUTO_INCREMENT,
  `contrib` varchar(45) NOT NULL,
  `rif` varchar(45) NOT NULL,
  `vehiculo` varchar(45) NOT NULL,
  `muelle` varchar(45) NOT NULL,
  `fec_arribo` varchar(45) NOT NULL,
  `fec_salida` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `uni_tributa` int(11) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `total_p` varchar(45) NOT NULL,
  PRIMARY KEY (`id_planilla`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`id_planilla`, `contrib`, `rif`, `vehiculo`, `muelle`, `fec_arribo`, `fec_salida`, `fecha`, `uni_tributa`, `hora`, `total_p`) VALUES
(1, 'ARMANDO ZABALA', 'V-17.972.078-0', 'AVION', 'PUENTE 35', '04/22/2013', '04/03/2013', '04/30/2013', 107, '03:15 PM', '8778'),
(4, 'Zulymar ', 'J-23.232.323-2', 'Barco', 'Muelle 1', '06/05/2013', '04/05/2013', '06/05/2013', 0, '04:00 PM', '13417.5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `id_tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombre`, `apellido`, `login`, `clave`, `correo`, `id_tipo`) VALUES
(34, 'V-17.972.052', 'Armando', 'Zabala', 'Armando986', '1234', 'armzba@gmail.com', '2'),
(36, 'V-17.972.057', 'Admin', 'Admin', 'Admin', '12345', 'admin@localhost', '1'),
(37, 'V-87.487.897', 'SID WILSON', 'ISD', 'sid', '1234', 'sid@di.com', '1'),
(38, 'V-23.442.342', 'sid', 'wilson', 'sid', '1234', 'sid@di.com', '1'),
(39, 'V-77.374.777', 'Pauly', 'D', 'paul', '12345', 'pauld@di.com', '1'),
(40, 'V-34.423.232', 'pedro', 'fdsfddsfs', 'arm', '12345', 'arm@gmail.com', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us_planilla`
--

CREATE TABLE `us_planilla` (
  `cedula` varchar(45) NOT NULL,
  `id_planilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us_planilla`
--

INSERT INTO `us_planilla` (`cedula`, `id_planilla`) VALUES
('V-17.972.052', 1),
('V-17.972.052', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us_tipo`
--

CREATE TABLE `us_tipo` (
  `tipo_us` varchar(45) NOT NULL,
  `id_tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us_tipo`
--

INSERT INTO `us_tipo` (`tipo_us`, `id_tipo`) VALUES
('Administrador', '1'),
('Usuario', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaticos`
--

CREATE TABLE `viaticos` (
  `id_viatico` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `costo` double NOT NULL,
  PRIMARY KEY (`id_viatico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `id_visita` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_v` varchar(45) NOT NULL,
  `hora_v_ini` varchar(45) NOT NULL,
  `hora_v_fin` varchar(45) NOT NULL,
  `total_v_horas` int(11) NOT NULL,
  `total_v_bs` double NOT NULL,
  `total_v_ut` int(11) NOT NULL,
  `id_planilla` int(11) NOT NULL,
  PRIMARY KEY (`id_visita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`id_visita`, `fecha_v`, `hora_v_ini`, `hora_v_fin`, `total_v_horas`, `total_v_bs`, `total_v_ut`, `id_planilla`) VALUES
(1, '04/02/2013', '01:15 AM', '12:15 PM', 11, 1177, 1, 1),
(2, '02/04/2013', '02:05 PM', '09:05 AM', 14, 4494, 3, 2),
(3, '02/04/2013', '07:10 AM', '10:10 PM', 15, 6420, 4, 3),
(4, '05/05/2013', '08:10 PM', '11:10 PM', 3, 642, 2, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
