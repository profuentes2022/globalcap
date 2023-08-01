-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2023 a las 23:48:33
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
-- Base de datos: `clientejeradi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jerardi`
--

CREATE TABLE `jerardi` (
  `nombre` varchar(20) NOT NULL,
  `nit` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `historial` varchar(20) NOT NULL,
  `tipos` varchar(5) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `direccion` float NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `lugartra` varchar(20) NOT NULL,
  `nombreem` varchar(20) NOT NULL,
  `salario` float NOT NULL,
  `enfermedad` varchar(20) NOT NULL,
  `paciente` varchar(20) NOT NULL,
  `dolencia` varchar(30) NOT NULL,
  `areare` varchar(20) NOT NULL,
  `medicina` varchar(20) NOT NULL,
  `especialista` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
