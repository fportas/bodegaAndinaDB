-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-06-2019 a las 22:07:37
-- Versión del servidor: 5.7.26-0ubuntu0.18.10.1
-- Versión de PHP: 7.2.19-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodegaAndina`
--
CREATE DATABASE IF NOT EXISTS `bodegaAndina` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bodegaAndina`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user` varchar(100) NOT NULL,
  `country` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `name`, `user`, `country`, `email`, `avatar`, `password`) VALUES
(1, 'Javier Herrera', 'herrerajavier', 'cl', 'herrerajavier@mail.com', '', ''),
(2, 'onnig', 'onnig', 'ar', 'onnig@gmail.com', 'img_andina_5d16b79e4b625.png', '$2y$10$97i76dciJO55PNxpoWhqXO15i2SPC1c7JWgeYEz.Mp3WS.Iph1wJS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
