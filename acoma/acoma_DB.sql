-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.2.0.4976
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para acoma
CREATE DATABASE IF NOT EXISTS `acoma` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `acoma`;


-- Volcando estructura para tabla acoma.ctg_tiposusuario
CREATE TABLE IF NOT EXISTS `ctg_tiposusuario` (
  `id_TipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tx_TipoUsuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_TipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.ctg_tiposusuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `ctg_tiposusuario` DISABLE KEYS */;
INSERT INTO `ctg_tiposusuario` (`id_TipoUsuario`, `tx_TipoUsuario`) VALUES
	(1, 'Administrador'),
	(2, 'Asociado');
/*!40000 ALTER TABLE `ctg_tiposusuario` ENABLE KEYS */;


-- Volcando estructura para tabla acoma.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `IDFOTO` int(8) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  `ARCHIVO` varchar(100) NOT NULL,
  `POSICION` tinyint(3) NOT NULL,
  `ESTADO` enum('visible','invisible') NOT NULL DEFAULT 'visible',
  `FKGALERIA` int(11) NOT NULL,
  PRIMARY KEY (`IDFOTO`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.fotos: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` (`IDFOTO`, `NOMBRE`, `ARCHIVO`, `POSICION`, `ESTADO`, `FKGALERIA`) VALUES
	(184, 'Foto 1', '1434792121.jpg', 0, 'visible', 77),
	(185, 'Foto 2', '1434792133.jpg', 1, 'visible', 77),
	(186, 'Foto 3', '1434792145.jpg', 2, 'visible', 77),
	(187, 'Foto 4', '1434792158.jpg', 3, 'visible', 77),
	(188, 'Foto 5', '1434792168.jpg', 4, 'visible', 77),
	(189, 'Foto 1', '1436860886.jpg', 0, 'visible', 78),
	(190, 'Foto 2', '1436860897.jpg', 1, 'visible', 78),
	(191, 'Foto 3', '1436861182.jpg', 2, 'visible', 78),
	(192, 'Foto 4', '1436861201.jpg', 3, 'visible', 78),
	(193, 'Foto 5', '1436864227.jpg', 4, 'visible', 78),
	(194, 'Foto 6', '1436864239.jpg', 5, 'visible', 78);
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;


-- Volcando estructura para tabla acoma.galerias
CREATE TABLE IF NOT EXISTS `galerias` (
  `IDGALERIA` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(100) NOT NULL,
  `FECHA_ALTA` datetime NOT NULL,
  `DESCRIPCION` text,
  PRIMARY KEY (`IDGALERIA`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.galerias: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `galerias` DISABLE KEYS */;
INSERT INTO `galerias` (`IDGALERIA`, `TITULO`, `FECHA_ALTA`, `DESCRIPCION`) VALUES
	(77, 'Sed maximus eleifend nibh et sollicitudin', '2015-06-19 10:02:19', 'Nullam venenatis auctor quam, ut luctus justo ultrices vitae. Etiam id urna id nulla sodales dignissim. Donec vitae erat ultricies quam fringilla porttitor vitae id ipsum. Aenean nec lacinia sem, sit amet maximus tortor. Pellentesque dictum arcu at sollicitudin laoreet.'),
	(78, 'Vestibulum ut nunc id ex sodales tincidunt in risus, commodo mattis lobortis vel elit', '2015-07-14 09:44:48', 'Nullam venenatis auctor quam, ut luctus justo ultrices vitae. Etiam id urna id nulla sodales dignissim. Donec vitae erat ultricies quam fringilla porttitor vitae id ipsum. Aenean nec lacinia sem, sit amet maximus tortor. Pellentesque dictum arcu at sollicitudin laoreet.');
/*!40000 ALTER TABLE `galerias` ENABLE KEYS */;


-- Volcando estructura para tabla acoma.newsletter
CREATE TABLE IF NOT EXISTS `newsletter` (
  `ID_news_mail` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `news_mail` varchar(100) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  PRIMARY KEY (`ID_news_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.newsletter: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` (`ID_news_mail`, `news_mail`, `fecha_alta`) VALUES
	(2, 'mohatar@gmail.com', '2015-07-22 19:20:53'),
	(5, 'mohatar@yahoo.com', '2015-07-28 09:34:25');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;


-- Volcando estructura para tabla acoma.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `IDNOTICIAS` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(100) NOT NULL,
  `FECHA_ALTA` datetime NOT NULL,
  `DESCRIPCION` text,
  `FOTO` varchar(100) NOT NULL,
  PRIMARY KEY (`IDNOTICIAS`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.noticias: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`IDNOTICIAS`, `TITULO`, `FECHA_ALTA`, `DESCRIPCION`, `FOTO`) VALUES
	(9, 'Vestibulum ut nunc id ex sodales tincidunt in risus, commodo mattis lobortis vel elit', '2015-07-11 20:00:46', 'Quisque tristique, purus nec pulvinar ullamcorper, augue sapien accumsan dui, eget auctor eros odio in dolor. Nam vulputate id dui et scelerisque. Ut pellentesque, ipsum in Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Nunc vitae eleifend justo, nec venenatis lacus. Duis id risus in sapien varius tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vitae ipsum risus. Donec euismod eros quis leo euismod, sed pharetra sem pellentesque. Etiam egestas nulla sit amet eros consectetur, et tempor felis dictum. Nulla in dapibus dui. Proin pretium mi mi, a vehicula quam elementum sit amet. ', '1436873961.jpg'),
	(10, 'Sed maximus eleifend nibh et sollicitudin', '2015-07-11 21:14:03', 'Ut tristique lacinia consequat. Nulla facilisi. In erat urna, tincidunt sed ultricies vitae, facilisis nec nisi. Mauris eget sagittis libero. Mauris vehicula rutrum ex sit amet laoreet.Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Nunc vitae eleifend justo, nec venenatis lacus. Duis id risus in sapien varius tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vitae ipsum risus. Donec euismod eros quis leo euismod, sed pharetra sem pellentesque. Etiam egestas nulla sit amet eros consectetur, et tempor felis dictum. Nulla in dapibus dui. Proin pretium mi mi, a vehicula quam elementum sit amet. ', '1436873978.jpg'),
	(11, 'Fusce velit turpis, faucibus sed quam et, facilisis sollicitudin risus', '2015-07-11 21:56:20', 'Quisque tristique, purus nec pulvinar ullamcorper, augue sapien accumsan dui, eget auctor eros odio in dolor. Nam vulputate id dui et scelerisque. Ut pellentesque. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Nunc vitae eleifend justo, nec venenatis lacus. Duis id risus in sapien varius tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vitae ipsum risus. Donec euismod eros quis leo euismod, sed pharetra sem pellentesque. Etiam egestas nulla sit amet eros consectetur, et tempor felis dictum. Nulla in dapibus dui. Proin pretium mi mi, a vehicula quam elementum sit amet. ', '1436873992.jpg');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


-- Volcando estructura para tabla acoma.noticias_ultimas
CREATE TABLE IF NOT EXISTS `noticias_ultimas` (
  `ID_UL_NOTICIA` int(8) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(100) NOT NULL,
  `FECHA_ALTA` datetime NOT NULL,
  `DESCRIPCION` text NOT NULL,
  PRIMARY KEY (`ID_UL_NOTICIA`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.noticias_ultimas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias_ultimas` DISABLE KEYS */;
INSERT INTO `noticias_ultimas` (`ID_UL_NOTICIA`, `TITULO`, `FECHA_ALTA`, `DESCRIPCION`) VALUES
	(1, 'Lorem ipsum dolor.', '2015-07-12 20:25:19', 'Vestibulum ut nunc id ex sodales tincidunt. In vel justo sem. Maecenas posuere nisi in nibh rhoncus, ut feugiat ligula tempus. Proin placerat imperdiet leo quis scelerisque. Integer vitae tellus sit amet nisl consequat imperdiet. Ut eget consequat nulla. Vivamus a varius risus, ut consectetur metus. '),
	(2, 'Sed maximus eleifend ', '2015-07-12 20:26:35', 'Sed maximus eleifend nibh et sollicitudin. Nunc ac efficitur magna, quis gravida massa. Quisque a eros lacinia, pretium ipsum ac, ultrices sem. Sed pulvinar risus nec arcu lacinia aliquet. Sed lobortis lacus orci, consequat pulvinar magna condimentum sed. Nunc libero nisl, dapibus a diam sed, pellentesque facilisis ipsum. Etiam ipsum orci, tincidunt ut enim sed, mattis interdum eros. Nam id tellus ac est sagittis iaculis nec a neque.'),
	(3, 'Nam laoreet est vel', '2015-07-12 20:28:31', 'Nam laoreet est vel ex malesuada pellentesque. Suspendisse non volutpat sapien. Etiam bibendum lacinia aliquet. Ut iaculis erat in feugiat molestie. Curabitur euismod at orci ut auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam at eleifend arcu.'),
	(4, 'Nam mattis nunc nec volutpat vehicula', '2015-07-13 00:39:14', 'Vivamus tincidunt leo elit, id iaculis magna aliquam et. Mauris maximus nulla orci, in fermentum ante facilisis quis. Ut consequat justo elit, sed elementum magna pellentesque sit amet. Curabitur nunc est, finibus aliquet rhoncus egestas, tristique et neque.');
/*!40000 ALTER TABLE `noticias_ultimas` ENABLE KEYS */;


-- Volcando estructura para tabla acoma.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(50) NOT NULL,
  `tx_apellidoPaterno` varchar(50) NOT NULL,
  `tx_apellidoMaterno` varchar(50) NOT NULL,
  `tx_correo` varchar(100) NOT NULL,
  `tx_username` varchar(50) NOT NULL,
  `tx_password` varchar(250) NOT NULL,
  `id_TipoUsuario` int(11) DEFAULT NULL,
  `dt_registro` datetime NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_TipoUsuario` (`id_TipoUsuario`),
  CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`id_TipoUsuario`) REFERENCES `ctg_tiposusuario` (`id_TipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acoma.tbl_users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id_usuario`, `tx_nombre`, `tx_apellidoPaterno`, `tx_apellidoMaterno`, `tx_correo`, `tx_username`, `tx_password`, `id_TipoUsuario`, `dt_registro`) VALUES
	(1, 'Javier', 'Delgado', 'Mohatar', 'mohatar@yahoo.com', 'xabertum', '201f1475d730d05a72ac6a3c20f02132', 1, '2015-06-29 19:43:48'),
	(3, 'Rebeca', 'NuÃ±ez', 'carrizosa', 'algo@gmail.com', 'ezcar', '201f1475d730d05a72ac6a3c20f02132', 1, '2015-07-06 18:00:12'),
	(6, 'Ruben', 'Delgado', 'Mohatar', 'conductores@gmail.com', 'miguel', '201f1475d730d05a72ac6a3c20f02132', 2, '2015-07-12 11:31:40');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
