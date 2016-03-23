-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2016 a las 09:56:36
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projectnaif`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correction`
--

CREATE TABLE IF NOT EXISTS `correction` (
  `IDExam` int(11) NOT NULL,
  `QuestionNum` varchar(10) NOT NULL,
  `Answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `ID` int(11) NOT NULL,
  `Year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `IDUser` int(11) NOT NULL,
  `IDExam` int(11) NOT NULL,
  `ScoreBWP` int(10) NOT NULL,
  `ScoreITS` int(10) NOT NULL,
  `ScoreAE` int(10) NOT NULL,
  `ScoreSK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `AusbildungYear` int(4) NOT NULL,
  `AusbildungType` varchar(50) NOT NULL,
  `Picture` varchar(50) DEFAULT NULL,
  `Score` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usercorrection`
--

CREATE TABLE IF NOT EXISTS `usercorrection` (
  `IDUser` int(11) NOT NULL,
  `UserAnswer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correction`
--
ALTER TABLE `correction`
  ADD KEY `IDExam` (`IDExam`);

--
-- Indices de la tabla `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `score`
--
ALTER TABLE `score`
  ADD KEY `IDUser` (`IDUser`),
  ADD KEY `IDExam` (`IDExam`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `usercorrection`
--
ALTER TABLE `usercorrection`
  ADD KEY `IDUser` (`IDUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `exam`
--
ALTER TABLE `exam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `correction`
--
ALTER TABLE `correction`
  ADD CONSTRAINT `correction_ibfk_1` FOREIGN KEY (`IDExam`) REFERENCES `exam` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`IDExam`) REFERENCES `exam` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usercorrection`
--
ALTER TABLE `usercorrection`
  ADD CONSTRAINT `usercorrection_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
