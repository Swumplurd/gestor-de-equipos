-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para gestor-equipos
CREATE DATABASE IF NOT EXISTS `gestor-equipos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gestor-equipos`;

-- Volcando estructura para tabla gestor-equipos.t_equipos
CREATE TABLE IF NOT EXISTS `t_equipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centro_salud` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  `dispositivo` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `n_serie` varchar(50) NOT NULL,
  `teclado` varchar(50) NOT NULL,
  `mouse` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `mac` varchar(50) NOT NULL,
  `win` varchar(50) NOT NULL DEFAULT 'off',
  `office` varchar(50) NOT NULL DEFAULT 'off',
  `antivirus` varchar(50) NOT NULL DEFAULT 'off',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
