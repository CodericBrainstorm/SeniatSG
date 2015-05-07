CREATE DATABASE IF NOT EXISTS seniat;

USE seniat;

DROP TABLE IF EXISTS alcabala;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO alcabala VALUES("1","04/08/2013","07:15 AM","10:15 PM","15","6420","4","1");
INSERT INTO alcabala VALUES("2","09/04/2013","07:10 AM","04:10 PM","9","4815","5","2");
INSERT INTO alcabala VALUES("3","30/04/2013","08:10 AM","05:10 PM","9","2889","3","3");
INSERT INTO alcabala VALUES("4","07/05/2013","08:10 AM","05:10 PM","9","2889","3","4");
INSERT INTO alcabala VALUES("5","21/05/2013","07:15 PM","10:15 PM","3","2889","9","5");
INSERT INTO alcabala VALUES("6","08/05/2013","09:25 PM","11:25 PM","2","856","4","6");
INSERT INTO alcabala VALUES("7","02/05/2013","08:35 AM","11:35 AM","3","1284","4","7");
INSERT INTO alcabala VALUES("8","02/05/2013","08:35 AM","11:35 AM","3","1284","4","8");
INSERT INTO alcabala VALUES("9","02/05/2013","08:35 AM","11:35 AM","3","1284","4","9");
INSERT INTO alcabala VALUES("10","02/05/2013","08:35 AM","11:35 AM","3","1284","4","10");
INSERT INTO alcabala VALUES("11","02/05/2013","08:35 AM","11:35 AM","3","1284","4","11");
INSERT INTO alcabala VALUES("12","02/05/2013","08:35 AM","11:35 AM","3","1284","4","12");
INSERT INTO alcabala VALUES("13","02/05/2013","08:35 AM","11:35 AM","3","1284","4","13");
INSERT INTO alcabala VALUES("14","07/05/2013","01:45 PM","04:45 PM","3","1284","4","14");
INSERT INTO alcabala VALUES("15","07/05/2013","01:45 PM","04:45 PM","3","1284","4","15");
INSERT INTO alcabala VALUES("16","07/05/2013","01:45 PM","04:45 PM","3","1284","4","16");
INSERT INTO alcabala VALUES("17","07/05/2013","01:45 PM","04:45 PM","3","1284","4","17");
INSERT INTO alcabala VALUES("18","07/05/2013","01:45 PM","04:45 PM","3","1284","4","18");
INSERT INTO alcabala VALUES("19","07/05/2013","02:00 PM","05:00 PM","3","1926","6","19");
INSERT INTO alcabala VALUES("20","07/05/2013","02:00 PM","05:00 PM","3","1926","6","20");
INSERT INTO alcabala VALUES("21","07/05/2013","02:00 PM","05:00 PM","3","1926","6","21");
INSERT INTO alcabala VALUES("22","07/05/2013","02:00 PM","05:00 PM","3","1926","6","22");
INSERT INTO alcabala VALUES("23","07/05/2013","02:00 PM","05:00 PM","3","1926","6","23");
INSERT INTO alcabala VALUES("24","07/05/2013","02:00 PM","05:00 PM","3","1926","6","24");
INSERT INTO alcabala VALUES("25","07/05/2013","02:00 PM","05:00 PM","3","1926","6","25");
INSERT INTO alcabala VALUES("26","07/05/2013","02:00 PM","05:00 PM","3","1926","6","26");
INSERT INTO alcabala VALUES("27","07/05/2013","02:00 PM","05:00 PM","3","1926","6","27");
INSERT INTO alcabala VALUES("28","04/08/2013","07:15 AM","10:15 PM","15","6420","4","28");
INSERT INTO alcabala VALUES("29","04/08/2013","07:15 AM","10:15 PM","15","6420","4","29");
INSERT INTO alcabala VALUES("30","04/08/2013","07:15 AM","10:15 PM","15","6420","4","30");
INSERT INTO alcabala VALUES("31","04/08/2013","07:15 AM","10:15 PM","15","6420","4","31");
INSERT INTO alcabala VALUES("32","04/08/2013","07:15 AM","10:15 PM","15","6420","4","32");
INSERT INTO alcabala VALUES("33","04/08/2013","07:15 AM","10:15 PM","15","6420","4","33");
INSERT INTO alcabala VALUES("34","04/08/2013","07:15 AM","10:15 PM","15","6420","4","34");
INSERT INTO alcabala VALUES("35","08/05/2013","02:05 PM","11:05 PM","9","4815","5","35");
INSERT INTO alcabala VALUES("36","08/05/2013","02:05 PM","11:05 PM","9","4815","5","36");
INSERT INTO alcabala VALUES("37","08/05/2013","02:05 PM","11:05 PM","9","4815","5","37");
INSERT INTO alcabala VALUES("38","22/05/2013","01:10 PM","10:10 PM","9","4815","5","38");
INSERT INTO alcabala VALUES("39","08/05/2013","09:15 AM","04:15 PM","7","3745","5","39");



DROP TABLE IF EXISTS despacho;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO despacho VALUES("1","04/10/2013","07:15 AM","10:15 AM","3","214","1","1");
INSERT INTO despacho VALUES("2","18/04/2013","07:10 AM","02:10 PM","7","3745","5","2");
INSERT INTO despacho VALUES("3","02/04/2013","01:10 AM","05:10 AM","4","1284","3","3");
INSERT INTO despacho VALUES("4","13/05/2013","01:10 AM","02:10 AM","1","1070","0","4");
INSERT INTO despacho VALUES("5","20/05/2013","02:15 PM","08:15 PM","6","4494","7","5");
INSERT INTO despacho VALUES("6","08/05/2013","08:25 PM","09:25 PM","1","428","4","6");
INSERT INTO despacho VALUES("7","01/05/2013","09:35 AM","11:35 AM","2","856","4","7");
INSERT INTO despacho VALUES("8","01/05/2013","09:35 AM","11:35 AM","2","856","4","8");
INSERT INTO despacho VALUES("9","01/05/2013","09:35 AM","11:35 AM","2","856","4","9");
INSERT INTO despacho VALUES("10","01/05/2013","09:35 AM","11:35 AM","2","856","4","10");
INSERT INTO despacho VALUES("11","01/05/2013","09:35 AM","11:35 AM","2","856","4","11");
INSERT INTO despacho VALUES("12","01/05/2013","09:35 AM","11:35 AM","2","856","4","12");
INSERT INTO despacho VALUES("13","01/05/2013","09:35 AM","11:35 AM","2","856","4","13");
INSERT INTO despacho VALUES("14","07/05/2013","02:45 PM","04:45 PM","2","856","4","14");
INSERT INTO despacho VALUES("15","07/05/2013","02:45 PM","04:45 PM","2","856","4","15");
INSERT INTO despacho VALUES("16","07/05/2013","02:45 PM","04:45 PM","2","856","4","16");
INSERT INTO despacho VALUES("17","07/05/2013","02:45 PM","04:45 PM","2","856","4","17");
INSERT INTO despacho VALUES("18","07/05/2013","02:45 PM","04:45 PM","2","856","4","18");
INSERT INTO despacho VALUES("19","14/05/2013","08:00 PM","10:00 PM","2","1070","5","19");
INSERT INTO despacho VALUES("20","14/05/2013","08:00 PM","10:00 PM","2","1070","5","20");
INSERT INTO despacho VALUES("21","14/05/2013","08:00 PM","10:00 PM","2","1070","5","21");
INSERT INTO despacho VALUES("22","14/05/2013","08:00 PM","10:00 PM","2","1070","5","22");
INSERT INTO despacho VALUES("23","14/05/2013","08:00 PM","10:00 PM","2","1070","5","23");
INSERT INTO despacho VALUES("24","14/05/2013","08:00 PM","10:00 PM","2","1070","5","24");
INSERT INTO despacho VALUES("25","14/05/2013","08:00 PM","10:00 PM","2","1070","5","25");
INSERT INTO despacho VALUES("26","14/05/2013","08:00 PM","10:00 PM","2","1070","5","26");
INSERT INTO despacho VALUES("27","14/05/2013","08:00 PM","10:00 PM","2","1070","5","27");
INSERT INTO despacho VALUES("28","04/10/2013","07:15 AM","10:15 AM","3","214","1","28");
INSERT INTO despacho VALUES("29","04/10/2013","07:15 AM","10:15 AM","3","214","1","29");
INSERT INTO despacho VALUES("30","04/10/2013","07:15 AM","10:15 AM","3","214","1","30");
INSERT INTO despacho VALUES("31","04/10/2013","07:15 AM","10:15 AM","3","214","1","31");
INSERT INTO despacho VALUES("32","04/10/2013","07:15 AM","10:15 AM","3","214","1","32");
INSERT INTO despacho VALUES("33","04/10/2013","07:15 AM","10:15 AM","3","214","1","33");
INSERT INTO despacho VALUES("34","04/10/2013","07:15 AM","10:15 AM","3","214","1","34");
INSERT INTO despacho VALUES("35","28/05/2013","01:05 AM","10:05 AM","9","2889","3","35");
INSERT INTO despacho VALUES("36","28/05/2013","01:05 AM","10:05 AM","9","2889","3","36");
INSERT INTO despacho VALUES("37","28/05/2013","01:05 AM","10:05 AM","9","2889","3","37");
INSERT INTO despacho VALUES("38","14/05/2013","12:10 PM","11:10 PM","11","5885","5","38");
INSERT INTO despacho VALUES("39","15/05/2013","02:15 PM","09:15 PM","7","3745","5","39");



DROP TABLE IF EXISTS operaciones;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO operaciones VALUES("1","04/01/2013","02:15 PM","09:15 PM","7","749","1","1");
INSERT INTO operaciones VALUES("2","10/04/2013","01:10 AM","04:10 AM","3","1284","4","2");
INSERT INTO operaciones VALUES("3","02/04/2013","07:10 AM","02:10 PM","7","2247","3","3");
INSERT INTO operaciones VALUES("4","05/05/2013","01:10 AM","10:10 AM","9","8667","9","4");
INSERT INTO operaciones VALUES("5","20/05/2013","01:15 AM","05:15 PM","16","5136","3","5");
INSERT INTO operaciones VALUES("6","01/05/2013","01:25 PM","09:25 PM","8","4280","5","6");
INSERT INTO operaciones VALUES("7","08/05/2013","07:35 AM","04:35 PM","9","5778","6","7");
INSERT INTO operaciones VALUES("8","08/05/2013","07:35 AM","04:35 PM","9","5778","6","8");
INSERT INTO operaciones VALUES("9","08/05/2013","07:35 AM","04:35 PM","9","5778","6","9");
INSERT INTO operaciones VALUES("10","08/05/2013","07:35 AM","04:35 PM","9","5778","6","10");
INSERT INTO operaciones VALUES("11","08/05/2013","07:35 AM","04:35 PM","9","5778","6","11");
INSERT INTO operaciones VALUES("12","08/05/2013","07:35 AM","04:35 PM","9","5778","6","12");
INSERT INTO operaciones VALUES("13","08/05/2013","07:35 AM","04:35 PM","9","5778","6","13");
INSERT INTO operaciones VALUES("14","07/05/2013","01:40 AM","04:40 AM","3","321","1","14");
INSERT INTO operaciones VALUES("15","07/05/2013","01:40 AM","04:40 AM","3","321","1","15");
INSERT INTO operaciones VALUES("16","07/05/2013","01:40 AM","04:40 AM","3","321","1","16");
INSERT INTO operaciones VALUES("17","07/05/2013","01:40 AM","04:40 AM","3","321","1","17");
INSERT INTO operaciones VALUES("18","07/05/2013","01:40 AM","04:40 AM","3","321","1","18");
INSERT INTO operaciones VALUES("19","07/05/2013","07:00 AM","10:00 AM","3","642","2","19");
INSERT INTO operaciones VALUES("20","07/05/2013","07:00 AM","10:00 AM","3","642","2","20");
INSERT INTO operaciones VALUES("21","07/05/2013","07:00 AM","10:00 AM","3","642","2","21");
INSERT INTO operaciones VALUES("22","07/05/2013","07:00 AM","10:00 AM","3","642","2","22");
INSERT INTO operaciones VALUES("23","07/05/2013","07:00 AM","10:00 AM","3","642","2","23");
INSERT INTO operaciones VALUES("24","07/05/2013","07:00 AM","10:00 AM","3","642","2","24");
INSERT INTO operaciones VALUES("25","07/05/2013","07:00 AM","10:00 AM","3","642","2","25");
INSERT INTO operaciones VALUES("26","07/05/2013","07:00 AM","10:00 AM","3","642","2","26");
INSERT INTO operaciones VALUES("27","07/05/2013","07:00 AM","10:00 AM","3","642","2","27");
INSERT INTO operaciones VALUES("28","04/01/2013","02:15 PM","09:15 PM","7","749","1","28");
INSERT INTO operaciones VALUES("29","04/01/2013","02:15 PM","09:15 PM","7","749","1","29");
INSERT INTO operaciones VALUES("30","04/01/2013","02:15 PM","09:15 PM","7","749","1","30");
INSERT INTO operaciones VALUES("31","04/01/2013","02:15 PM","09:15 PM","7","749","1","31");
INSERT INTO operaciones VALUES("32","04/01/2013","02:15 PM","09:15 PM","7","749","1","32");
INSERT INTO operaciones VALUES("33","04/01/2013","02:15 PM","09:15 PM","7","749","1","33");
INSERT INTO operaciones VALUES("34","04/01/2013","02:15 PM","09:15 PM","7","749","1","34");
INSERT INTO operaciones VALUES("35","15/05/2013","08:05 PM","10:05 PM","2","1070","5","35");
INSERT INTO operaciones VALUES("36","15/05/2013","08:05 PM","10:05 PM","2","1070","5","36");
INSERT INTO operaciones VALUES("37","15/05/2013","08:05 PM","10:05 PM","2","1070","5","37");
INSERT INTO operaciones VALUES("38","06/05/2013","08:10 AM","05:10 PM","9","6741","7","38");
INSERT INTO operaciones VALUES("39","29/05/2013","09:15 PM","10:15 PM","1","749","7","39");



DROP TABLE IF EXISTS otros_gastos;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO otros_gastos VALUES("1","04/01/2013","46","225.4","34.5","69","69","1");
INSERT INTO otros_gastos VALUES("2","09/04/2013","10","80.5","0","69","0","2");
INSERT INTO otros_gastos VALUES("3","24/04/2013","10","149.5","0","69","69","3");
INSERT INTO otros_gastos VALUES("4","20/05/2013","10","46","34.5","1","1","4");
INSERT INTO otros_gastos VALUES("5","13/05/2013","10","45.5","34","0","0","5");
INSERT INTO otros_gastos VALUES("6","20/05/2013","10","45.5","34","0","1","6");
INSERT INTO otros_gastos VALUES("7","07/05/2013","10","80.5","1","69","1","7");
INSERT INTO otros_gastos VALUES("8","07/05/2013","10","80.5","1","69","1","8");
INSERT INTO otros_gastos VALUES("9","07/05/2013","10","114.5","34","69","1","9");
INSERT INTO otros_gastos VALUES("10","07/05/2013","10","114.5","34","69","1","10");
INSERT INTO otros_gastos VALUES("11","07/05/2013","10","114.5","34","69","1","11");
INSERT INTO otros_gastos VALUES("12","07/05/2013","10","114.5","34","69","1","12");
INSERT INTO otros_gastos VALUES("13","07/05/2013","10","114.5","34","69","1","13");
INSERT INTO otros_gastos VALUES("14","08/05/2013","10","45.5","34","1","1","14");
INSERT INTO otros_gastos VALUES("15","08/05/2013","10","45.5","34","1","1","15");
INSERT INTO otros_gastos VALUES("16","08/05/2013","10","45.5","34","1","1","16");
INSERT INTO otros_gastos VALUES("17","08/05/2013","10","45.5","34","1","1","17");
INSERT INTO otros_gastos VALUES("18","08/05/2013","10","115","34.5","69","1","18");
INSERT INTO otros_gastos VALUES("19","20/05/2013","10","115","34.5","69","1","19");
INSERT INTO otros_gastos VALUES("20","20/05/2013","10","45.5","34","1","1","20");
INSERT INTO otros_gastos VALUES("21","20/05/2013","10","45.5","34","1","1","21");
INSERT INTO otros_gastos VALUES("22","20/05/2013","10","45.5","34","1","1","22");
INSERT INTO otros_gastos VALUES("23","20/05/2013","10","45.5","34","1","1","23");
INSERT INTO otros_gastos VALUES("24","20/05/2013","10","45.5","34","1","1","24");
INSERT INTO otros_gastos VALUES("25","20/05/2013","10","45.5","34","1","1","25");
INSERT INTO otros_gastos VALUES("26","20/05/2013","10","45.5","34","1","1","26");
INSERT INTO otros_gastos VALUES("27","20/05/2013","10","45.5","34","1","1","27");
INSERT INTO otros_gastos VALUES("28","04/01/2013","10","149.5","1","69","69","28");
INSERT INTO otros_gastos VALUES("29","04/01/2013","46","190.9","1","69","69","29");
INSERT INTO otros_gastos VALUES("30","04/01/2013","46","190.9","1","69","69","30");
INSERT INTO otros_gastos VALUES("31","04/01/2013","46","190.9","1","69","69","31");
INSERT INTO otros_gastos VALUES("32","04/01/2013","46","190.9","1","69","69","32");
INSERT INTO otros_gastos VALUES("33","04/01/2013","46","190.9","1","69","69","33");
INSERT INTO otros_gastos VALUES("34","04/01/2013","46","190.9","1","69","69","34");
INSERT INTO otros_gastos VALUES("35","01/05/2013","100","218.5","34.5","69","1","35");
INSERT INTO otros_gastos VALUES("36","01/05/2013","100","287.5","34.5","69","69","36");
INSERT INTO otros_gastos VALUES("37","01/05/2013","100","287.5","34.5","69","69","37");
INSERT INTO otros_gastos VALUES("38","01/05/2013","36","213.9","34.5","69","69","38");
INSERT INTO otros_gastos VALUES("39","07/05/2013","100","218","34","69","1","39");



DROP TABLE IF EXISTS otros_viat;

CREATE TABLE `otros_viat` (
  `id_otros` int(11) NOT NULL,
  `id_viaticos` int(11) NOT NULL,
  PRIMARY KEY (`id_otros`,`id_viaticos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS planilla;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO planilla VALUES("1","ARMAsDOssxxssss","V-17.972.078-0","AVIONsxxx","PUENTE 35","04/03/2013","04/22/2013","04/30/2013","107","03:15 PM","8785.4");
INSERT INTO planilla VALUES("4","Zulymar xxxx","J-23.232.323-2","Barcoxx","Muelle 1","04/05/2013","06/05/2013","06/05/2013","0","04:00 PM","13314");
INSERT INTO planilla VALUES("37","Ramonssss","J-45.535.345-4","Embarcacion","dsf","22/05/2013","24/05/2013","14/05/2013","107","09:05 PM","10276");
INSERT INTO planilla VALUES("38","Andresxxxx","J-43.543.543-5","Barquito","Guanta","17/05/2013","23/05/2013","30/05/2013","107","05:10 AM","20153.4");
INSERT INTO planilla VALUES("39","Carlos","V-33.242.342-3","dsf","dsf","23/05/2013","21/05/2013","22/05/2013","107","09:10 AM","12951");



DROP TABLE IF EXISTS us_planilla;

CREATE TABLE `us_planilla` (
  `cedula` varchar(45) NOT NULL,
  `id_planilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO us_planilla VALUES("V-17.972.052","1");
INSERT INTO us_planilla VALUES("V-17.972.052","4");
INSERT INTO us_planilla VALUES("V-17.972.052","37");
INSERT INTO us_planilla VALUES("V-17.972.052","38");
INSERT INTO us_planilla VALUES("V-17.972.052","39");



DROP TABLE IF EXISTS us_tipo;

CREATE TABLE `us_tipo` (
  `tipo_us` varchar(45) NOT NULL,
  `id_tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO us_tipo VALUES("Administrador","1");
INSERT INTO us_tipo VALUES("Usuario","2");
INSERT INTO us_tipo VALUES("Funcionario","3");



DROP TABLE IF EXISTS usuarios;

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES("34","V-17.972.052","Armandod","Zabala","Armando986","1234","armzba@gmail.com","3");
INSERT INTO usuarios VALUES("36","V-17.972.057","Admin","Admin","Admin","12345","admin@localhost","1");



DROP TABLE IF EXISTS viaticos;

CREATE TABLE `viaticos` (
  `id_viatico` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `costo` double NOT NULL,
  PRIMARY KEY (`id_viatico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS visita;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO visita VALUES("1","04/02/2013","01:15 AM","12:15 PM","11","1177","1","1");
INSERT INTO visita VALUES("2","02/04/2013","02:05 PM","09:05 AM","14","4494","3","2");
INSERT INTO visita VALUES("3","02/04/2013","07:10 AM","10:10 PM","15","6420","4","3");
INSERT INTO visita VALUES("4","05/05/2013","08:10 PM","11:10 PM","3","642","2","4");
INSERT INTO visita VALUES("5","01/05/2013","09:15 AM","11:15 AM","2","642","3","5");
INSERT INTO visita VALUES("6","02/05/2013","08:25 AM","11:25 AM","3","1284","4","6");
INSERT INTO visita VALUES("7","13/05/2013","02:35 PM","09:35 AM","14","5992","4","7");
INSERT INTO visita VALUES("8","13/05/2013","02:35 PM","09:35 AM","14","5992","4","8");
INSERT INTO visita VALUES("9","13/05/2013","02:35 PM","09:35 AM","14","5992","4","9");
INSERT INTO visita VALUES("10","13/05/2013","02:35 PM","09:35 AM","14","5992","4","10");
INSERT INTO visita VALUES("11","13/05/2013","02:35 PM","09:35 AM","14","5992","4","11");
INSERT INTO visita VALUES("12","13/05/2013","02:35 PM","09:35 AM","14","5992","4","12");
INSERT INTO visita VALUES("13","13/05/2013","02:35 PM","09:35 AM","14","5992","4","13");
INSERT INTO visita VALUES("14","22/05/2013","01:40 AM","08:40 AM","7","3745","5","14");
INSERT INTO visita VALUES("15","22/05/2013","01:40 AM","08:40 AM","7","3745","5","15");
INSERT INTO visita VALUES("16","22/05/2013","01:40 AM","08:40 AM","7","3745","5","16");
INSERT INTO visita VALUES("17","22/05/2013","01:40 AM","08:40 AM","7","3745","5","17");
INSERT INTO visita VALUES("18","22/05/2013","01:40 AM","08:40 AM","7","3745","5","18");
INSERT INTO visita VALUES("19","07/05/2013","02:00 PM","03:00 PM","1","535","5","19");
INSERT INTO visita VALUES("20","07/05/2013","02:00 PM","03:00 PM","1","535","5","20");
INSERT INTO visita VALUES("21","07/05/2013","02:00 PM","03:00 PM","1","535","5","21");
INSERT INTO visita VALUES("22","07/05/2013","02:00 PM","03:00 PM","1","535","5","22");
INSERT INTO visita VALUES("23","07/05/2013","02:00 PM","03:00 PM","1","535","5","23");
INSERT INTO visita VALUES("24","07/05/2013","02:00 PM","03:00 PM","1","535","5","24");
INSERT INTO visita VALUES("25","07/05/2013","02:00 PM","03:00 PM","1","535","5","25");
INSERT INTO visita VALUES("26","07/05/2013","02:00 PM","03:00 PM","1","535","5","26");
INSERT INTO visita VALUES("27","07/05/2013","02:00 PM","03:00 PM","1","535","5","27");
INSERT INTO visita VALUES("28","04/02/2013","01:15 AM","12:15 PM","11","1177","1","28");
INSERT INTO visita VALUES("29","04/02/2013","01:15 AM","12:15 PM","11","1177","1","29");
INSERT INTO visita VALUES("30","04/02/2013","01:15 AM","12:15 PM","11","1177","1","30");
INSERT INTO visita VALUES("31","04/02/2013","01:15 AM","12:15 PM","11","1177","1","31");
INSERT INTO visita VALUES("32","04/02/2013","01:15 AM","12:15 PM","11","1177","1","32");
INSERT INTO visita VALUES("33","04/02/2013","01:15 AM","12:15 PM","11","1177","1","33");
INSERT INTO visita VALUES("34","04/02/2013","01:15 AM","12:15 PM","11","1177","1","34");
INSERT INTO visita VALUES("35","07/05/2013","02:05 AM","04:05 AM","2","1284","6","35");
INSERT INTO visita VALUES("36","07/05/2013","02:05 AM","04:05 AM","2","1284","6","36");
INSERT INTO visita VALUES("37","07/05/2013","02:05 AM","04:05 AM","2","1284","6","37");
INSERT INTO visita VALUES("38","23/05/2013","02:10 AM","10:10 AM","8","2568","3","38");
INSERT INTO visita VALUES("39","06/05/2013","02:10 PM","02:10 AM","14","4494","3","39");



