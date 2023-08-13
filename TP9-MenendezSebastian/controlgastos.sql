-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-08-2023 a las 19:13:14
-- Versión del servidor: 5.7.28
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlgastos`
--
CREATE DATABASE IF NOT EXISTS `controlgastos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `controlgastos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

DROP TABLE IF EXISTS `familiares`;
CREATE TABLE IF NOT EXISTS `familiares` (
  `idFamiliar` int(3) NOT NULL AUTO_INCREMENT,
  `familiar` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idFamiliar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`idFamiliar`, `familiar`) VALUES
(1, 'Padre/Madre'),
(2, 'Hijo/Hija'),
(3, 'Otro/Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

DROP TABLE IF EXISTS `formapago`;
CREATE TABLE IF NOT EXISTS `formapago` (
  `idFormaPago` int(3) NOT NULL AUTO_INCREMENT,
  `formaPago` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idFormaPago`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formapago`
--

INSERT INTO `formapago` (`idFormaPago`, `formaPago`) VALUES
(1, 'Efectivo'),
(2, 'Cheque'),
(3, 'Tarjeta de crédito'),
(4, 'Transferencia Bancaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

DROP TABLE IF EXISTS `movimientos`;
CREATE TABLE IF NOT EXISTS `movimientos` (
  `idMovimiento` int(10) NOT NULL AUTO_INCREMENT,
  `idFamiliar` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `idFormaPago` int(3) NOT NULL,
  `tipoMovimiento` enum('Egreso','Ingreso') COLLATE utf8_unicode_ci NOT NULL,
  `monto` decimal(12,2) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idMovimiento`),
  KEY `FK_idFamiliar` (`idFamiliar`),
  KEY `FK_idFormaPago` (`idFormaPago`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`idMovimiento`, `idFamiliar`, `fecha`, `idFormaPago`, `tipoMovimiento`, `monto`, `descripcion`) VALUES
(1, 1, '2023-08-01', 1, 'Egreso', '500.00', 'Café'),
(2, 2, '2023-08-01', 1, 'Egreso', '1000.00', 'Carga SUBE'),
(3, 2, '2023-08-01', 1, 'Egreso', '2000.00', 'Cuota Club'),
(4, 1, '2023-08-01', 4, 'Ingreso', '250000.00', 'Sueldo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`idFamiliar`) REFERENCES `familiares` (`idFamiliar`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`idFormaPago`) REFERENCES `formapago` (`idFormaPago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
