-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2023 a las 23:48:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `militar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(20) NOT NULL,
  `nit` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `atecedentes` varchar(20) NOT NULL,
  `tpos` varchar(20) NOT NULL,
  `direcion` int(11) NOT NULL,
  `teléfono` int(11) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `lugart` varchar(20) NOT NULL,
  `nombreem` varchar(20) NOT NULL,
  `salario` float NOT NULL,
  `enfermedad` varchar(20) NOT NULL,
  `padecimiento` varchar(20) NOT NULL,
  `dolencia` varchar(20) NOT NULL,
  `arere` varchar(20) NOT NULL,
  `medico` varchar(20) NOT NULL,
  `espesialidadmedi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
