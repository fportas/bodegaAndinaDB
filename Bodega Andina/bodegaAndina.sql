-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2019 a las 20:18:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
(2, 'onnig', 'onnig', 'ar', 'onnig@gmail.com', 'img_andina_5d16b79e4b625.png', '$2y$10$97i76dciJO55PNxpoWhqXO15i2SPC1c7JWgeYEz.Mp3WS.Iph1wJS'),
(5, 'Aurelio Ibarra', 'aurelioibarra', 'ar', 'aurelioibarra@mail.com', 'img_andina_5d175ea169aaf.jpg', '$2y$10$F4GObkVI2TdHunToTXKnLeCUSbosnU/OgCTxSreaQqzKCVtVQCiQu'),
(7, 'Graciela I', 'gracielai', 'ar', 'gracielai@mail.com', 'img_andina_5d17b069087d2.jpg', '$2y$10$VVjY/O0m3VpY11Cb8Thg6OlnWU0f4scQOwwr2GYTkhzxu3GFA0t.2'),
(8, 'salvador uriel', 'salvadoruriel', 'ar', 'salvadoruriel@mail.com', 'img_andina_5d17b2f2de824.jpg', '$2y$10$pCh/BcZn09rAIKVBCh.C1uZKrfVhSvmcy1UZZtFVG4eZ./Q5yUFAq'),
(9, 'cecilia martinez', 'ceciliamartinez', 'ar', 'ceciliamartinez@mail.com', 'img_andina_5d17c19e07a45.jpg', '$2y$10$afTvk/VHhuL3tO5lAmf6RuVNYVPiWyTMMaJnUYkHM1j8b/FVlC4FO'),
(10, 'hugo portas', 'hugoportas', 'ar', 'hugoportas@mail.com', 'img_andina_5d17d001c0e20.jpg', '$2y$10$TsIF2JCqLlpBqTtqw/BIn.gtZDODzgp4PvlMTVl54RhXdzDw64Wt2'),
(11, 'maru gargiulo', 'marugargiulo', 'ar', 'marugargiulo@mail.com', 'img_andina_5d17e9712aa2b.jpg', '$2y$10$mShLaEDO2Lk9aGrDd1j6aeMWFgtiFq.9cJDmqevzYYcHfTLLahsea'),
(12, 'julian boschi', 'julianboschi', 'ar', 'julianboschi@mail.com', 'img_andina_5d17eeb18afc1.png', '$2y$10$nszzg7pkfAXDiGC6oqdKhe.qjN.tSg98Ww.feETmMMzTWCJtdRI9m'),
(13, 'diego lopez', 'diegolopez', 'ar', 'diegolopez@mail.com', 'img_andina_5d17f06f732b2.jpg', '$2y$10$e9LU//RAqV./O4K6Wp/7TegydTx0eQUpfMhFTIlBUQDk/7oz8laB.'),
(14, 'daniela', 'daniela', 'ar', 'daniela@mail.com', 'img_andina_5d17f4ee93d44.jpg', '$2y$10$rPTQvmZod2T9F1oXItPXc.CIwKIr8FkJxFdzCg.r9E8CPmJGKLeU6'),
(15, 'poli', 'poli', 'ar', 'poli@mail.com', 'img_andina_5d17f8bf02e32.jpg', '$2y$10$6gt20hD88Oj5eT/gO5POz.7juWMj7uDNcN.JU8.BnSJQnDDWgnhtq'),
(16, 'jimena', 'jimena', 'ar', 'jimena@mail.com', 'img_andina_5d17f915e53b9.jpg', '$2y$10$G9c8MkTS92K2fGrGQ5IhMupOkz7x5Jd7OEVcJSWEeX4sUytcEm8BW'),
(17, 'gabriela', 'gabriela', 'ar', 'gabriela@mail.com', 'img_andina_5d17f9a502637.jpg', '$2y$10$bbBOcGm0i229auuUjEIdWuHBld5vHXhoTp7o4HodX7zRew9Z7ip7a'),
(18, 'derlis', 'derlis', 'pa', 'derlis@mail.com', 'img_andina_5d18cd5d42609.jpg', '$2y$10$Sn77vy10g7MZX4jDO5dr4OdlKQdrwRDIHDDbDL1d4CRTDeJLo6k6W'),
(19, 'ana', 'ana', 'ar', 'ana@mail.com', 'img_andina_5d18d186e67f0.jpg', '$2y$10$iHUfdVWLDLcFySwFamHnIu/YuSKPmmjvbtU35NHyecyKeLR.JqH8i'),
(20, 'arduino', 'arduino', 'ar', 'arduino@mail.com', 'img_andina_5d19085b09433.jpg', '$2y$10$XMTR6FsPrsi6K8xIa2gVueDoMSLiSE/6D3OKsW4ysT7LEngYa/prK'),
(21, 'sara connor', 'saraconnor', 'al', 'saraconnor@mail.com', 'img_andina_5d1908bee245a.jpg', '$2y$10$XzhojTW9e6BOpM2vlRFRu.Tm7AVFu6RQrGA16v3BGcwwY/bwjF9ba'),
(22, 'Maria Eugenia', 'mariaeugenia', 'ar', 'mariaeugenia@mail.com', 'img_andina_5d1a9a76d2b2b.jpg', '$2y$10$Hbd4SCdcBVZ/Br94D/Rt..FQIE9wcHRuJ1hwqKathnuwiwbqHmd8q'),
(23, 'juan', 'juan', 'bo', 'juan@mail.com', 'img_andina_5d1a9c4602ecb.jpg', '$2y$10$2m2M.RHSXrNBmfRdlcmcH.tMhf9A8bQQuBjIV3.jc15qaqWKwr9Ne'),
(24, 'diego', 'diego', 'al', 'diego@mail.com', 'img_andina_5d1a9dc2caf25.jpg', '$2y$10$NHkdB8ckdpwctTuNbnaKueZzzUBCwmzrpunK9OEnXHiwd6BUo1d3W'),
(25, 'armando', 'armando', 'al', 'armando@mail.com', 'img_andina_5d1a9e1f54c5d.jpg', '$2y$10$y.04swLFcnS.1Yj2RdFdPOpLv2fp6MXwCNoHoAX0WpgWQ4ZtecTXm'),
(26, 'julia', 'julia', 'cl', 'julia@mail.com', 'img_andina_5d1aa272bd6b2.jpg', '$2y$10$wCRqMbr5qDFmrN9Y01sbgem9Ts7fQK6dE2ecRDPMPfH2ot0ic00ay');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
