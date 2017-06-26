-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2017 a las 04:48:22
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ideasplus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_por_idea`
--

CREATE TABLE IF NOT EXISTS `area_por_idea` (
`ID_AREAIDEA` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL,
  `ID_AREA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE IF NOT EXISTS `cronograma` (
`ID_CRONOGRAMA` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `ID_DOCENTE` int(11) NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  `HORA_INICIO` time NOT NULL,
  `HORA_FIN` time NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea_log`
--

CREATE TABLE IF NOT EXISTS `idea_log` (
`ID_IDEALOG` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL,
  `TITULO` varchar(250) DEFAULT NULL,
  `DESCRIPCION` text,
  `PRIVADO` tinyint(1) DEFAULT NULL,
  `AREA` varchar(30) DEFAULT NULL,
  `USUARIO_CREA` varchar(60) DEFAULT NULL,
  `ESTUDIANTE` varchar(60) DEFAULT NULL,
  `DOCENTE` varchar(60) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `USUARIO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ACCION` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `idea_log`
--

INSERT INTO `idea_log` (`ID_IDEALOG`, `ID_IDEA`, `TITULO`, `DESCRIPCION`, `PRIVADO`, `AREA`, `USUARIO_CREA`, `ESTUDIANTE`, `DOCENTE`, `ESTADO`, `FECHA`, `USUARIO`, `ACCION`) VALUES
(1, 0, 'PEPE', 'PELUA', 1, '2', '0', '1', '1', '1', '2017-05-28 22:57:00', 'root@localhost', NULL),
(2, 0, 'WEWQQ', '23123123121', 1, '2', '0', '1', '1', '1', '2017-05-28 23:00:44', 'root@localhost', 'INSERT'),
(3, 0, 'TRTERTER', '', 0, '0', '0', NULL, NULL, '0', '2017-05-28 23:01:00', 'root@localhost', 'INSERT'),
(4, 11, 'TRTERTER', '', 0, '0', '0', NULL, NULL, '0', '2017-05-28 23:01:25', 'root@localhost', 'UPDATE'),
(5, 11, 'TRTERTER', 'FFFFFFFFF', 1, '2', '1', '1', '1', '1', '2017-05-28 23:03:26', 'root@localhost', 'UPDATE'),
(6, 11, 'ANTONIO DEL MIGUEL', 'PERRR', 1, '2', '1', '1', '1', '1', '2017-05-28 23:03:43', 'root@localhost', 'UPDATE'),
(7, 0, 'cristian', '43432', 0, '1', '0', NULL, NULL, '0', '2017-05-28 23:28:00', 'root@localhost', 'INSERT'),
(8, 0, 'asdasa', 'dsdsad', 0, '2', '0', NULL, NULL, '0', '2017-05-28 23:28:37', 'root@localhost', 'INSERT'),
(9, 0, 'dddd', 'dsds', 1, '2', '0', NULL, NULL, '0', '2017-05-28 23:28:44', 'root@localhost', 'INSERT'),
(10, 1, 'CRISTIAN', 'CR	', 2, '1', '0', NULL, NULL, '0', '2017-05-29 12:08:49', 'root@localhost', 'UPDATE'),
(11, 0, 'ytyt', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 13:14:27', 'root@localhost', 'INSERT'),
(12, 0, 'uytutuut', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 13:14:35', 'root@localhost', 'INSERT'),
(13, 0, '1', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 13:14:58', 'root@localhost', 'INSERT'),
(14, 0, '2', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 13:14:59', 'root@localhost', 'INSERT'),
(15, 0, '3', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 13:15:00', 'root@localhost', 'INSERT'),
(16, 0, '4', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 13:15:01', 'root@localhost', 'INSERT'),
(17, 18, '2', '', 0, '0', '0', NULL, NULL, '0', '2017-05-29 16:02:37', 'root@localhost', 'UPDATE'),
(18, 18, '2', 'weqewewqe', 1, '1', '1', '1', '1', '1', '2017-05-29 16:02:57', 'root@localhost', 'UPDATE'),
(19, 0, 'fqwfqwfqw', 'qwfqwfqwf', 1, '3', '35', NULL, NULL, '0', '2017-05-29 18:59:41', 'root@localhost', 'INSERT'),
(20, 0, 'Mi otra idea', 'Mi otra idea', 2, '4', '35', NULL, NULL, '0', '2017-05-29 18:59:56', 'root@localhost', 'INSERT'),
(21, 19, 'fqwfqwfqw', 'qwfqwfqwf', 1, '3', '35', NULL, NULL, '0', '2017-05-31 18:36:41', 'root@localhost', 'UPDATE'),
(22, 0, 'Hola', 'asfasfasfasm', 1, '2', '35', NULL, NULL, '2', '2017-05-31 18:50:39', 'root@localhost', 'INSERT'),
(23, 0, 'Andreas', 'm', 1, '3', '36', NULL, NULL, '2', '2017-05-31 19:03:05', 'root@localhost', 'INSERT'),
(24, 20, 'Mi otra idea', 'Mi otra idea', 2, '4', '35', NULL, NULL, '0', '2017-05-31 19:03:38', 'root@localhost', 'UPDATE'),
(25, 0, 'mi idea', 'qefmqefq', 1, '2', '33', NULL, NULL, '2', '2017-05-31 19:15:49', 'root@localhost', 'INSERT'),
(26, 21, 'Hola', 'asfasfasfasm', 1, '2', '35', NULL, NULL, '2', '2017-05-31 19:16:06', 'root@localhost', 'UPDATE'),
(27, 0, 'MI idea es hacer un balon', 'Hola mundo', 2, '2', '40', NULL, NULL, '2', '2017-05-31 19:59:58', 'root@localhost', 'INSERT'),
(28, 21, 'Hola', 'asfasfasfasm', 1, '2', '35', '35', NULL, '2', '2017-05-31 20:00:28', 'root@localhost', 'UPDATE'),
(29, 0, '12312', '12312', 1, '3', '33', NULL, NULL, '0', '2017-06-03 21:35:13', 'root@localhost', 'INSERT'),
(30, 0, 'qwfqw', 'fqwfqw', 1, '2', '33', NULL, NULL, '2', '2017-06-03 21:47:58', 'root@localhost', 'INSERT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_area_interes`
--

CREATE TABLE IF NOT EXISTS `tb_area_interes` (
`ID_AREAINTERES` int(11) NOT NULL,
  `NOMBRE_AREA` varchar(30) NOT NULL DEFAULT '',
  `DESCRIPCION` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tb_area_interes`
--

INSERT INTO `tb_area_interes` (`ID_AREAINTERES`, `NOMBRE_AREA`, `DESCRIPCION`) VALUES
(2, 'Tecnologia', 'tecnologias'),
(3, 'Web', 'ththtgt'),
(5, 'Otra Area', 'fqwfqw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
`ID_ESTADO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `TIPO` char(1) NOT NULL,
  `VALOR` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tb_estado`
--

INSERT INTO `tb_estado` (`ID_ESTADO`, `NOMBRE`, `TIPO`, `VALOR`) VALUES
(1, 'false', '0', 0),
(2, 'true', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_idea`
--

CREATE TABLE IF NOT EXISTS `tb_idea` (
`ID_IDEA` int(11) NOT NULL,
  `TITULO` varchar(250) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `PRIVADO` tinyint(1) NOT NULL,
  `ID_AREA` int(11) NOT NULL,
  `ID_USUARIO_CREA` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) DEFAULT NULL,
  `ID_DOCENTE` int(11) DEFAULT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `FECHA_PUBLICACION` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `tb_idea`
--

INSERT INTO `tb_idea` (`ID_IDEA`, `TITULO`, `DESCRIPCION`, `PRIVADO`, `ID_AREA`, `ID_USUARIO_CREA`, `ID_ESTUDIANTE`, `ID_DOCENTE`, `ID_ESTADO`, `FECHA_PUBLICACION`) VALUES
(18, '2', 'weqewewqe', 1, 0, 0, NULL, NULL, 0, '0000-00-00'),
(19, 'fqwfqwfqw', 'qwfqwfqwf', 1, 3, 35, 35, NULL, 0, '2017-05-30'),
(20, 'Mi otra idea', 'Mi otra idea', 2, 4, 35, 35, NULL, 0, '2017-05-30'),
(21, 'Hola', 'asfasfasfasm', 1, 2, 35, 35, NULL, 2, '2017-06-01'),
(22, 'Andreas', 'm', 1, 3, 36, NULL, NULL, 2, '2017-06-01'),
(24, 'qwfqw', 'fqwfqw', 1, 2, 33, NULL, NULL, 2, '2017-06-04');

--
-- Disparadores `tb_idea`
--
DELIMITER //
CREATE TRIGGER `idea_Trigger` AFTER UPDATE ON `tb_idea`
 FOR EACH ROW BEGIN
INSERT INTO idea_log (USUARIO, FECHA, ID_IDEA, TITULO, DESCRIPCION, PRIVADO, AREA, USUARIO_CREA, ESTUDIANTE, DOCENTE, ESTADO, ACCION)
VALUES (user(), now(), OLD.ID_IDEA, OLD.TITULO, OLD.DESCRIPCION, OLD.PRIVADO, OLD.ID_AREA, OLD.ID_USUARIO_CREA, OLD.ID_ESTUDIANTE, OLD.ID_DOCENTE, OLD.ID_ESTADO, 'UPDATE');
END
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `idea_log` BEFORE INSERT ON `tb_idea`
 FOR EACH ROW BEGIN
INSERT INTO idea_log (USUARIO, FECHA, ID_IDEA, TITULO, DESCRIPCION, PRIVADO, AREA, USUARIO_CREA, ESTUDIANTE, DOCENTE, ESTADO, ACCION)
VALUES (user(), now(), NEW.ID_IDEA, NEW.TITULO, NEW.DESCRIPCION, NEW.PRIVADO, NEW.ID_AREA, NEW.ID_USUARIO_CREA, NEW.ID_ESTUDIANTE, NEW.ID_DOCENTE, NEW.ID_ESTADO, 'INSERT');
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE IF NOT EXISTS `tb_rol` (
`ID_ROL` int(11) NOT NULL,
  `NOMBRE_ROL` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tb_rol`
--

INSERT INTO `tb_rol` (`ID_ROL`, `NOMBRE_ROL`) VALUES
(1, 'Profesor22'),
(2, 'Estudiante'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
`ID_USUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `DOCUMENTO` int(11) DEFAULT NULL,
  `TIPO_DOCUMENTO` varchar(20) DEFAULT NULL,
  `CORREO` varchar(60) NOT NULL DEFAULT '',
  `ID_ROL` int(11) DEFAULT NULL,
  `ID_ESTADO` int(11) DEFAULT NULL,
  `GENERO` char(1) DEFAULT NULL COMMENT 'M=Masculino;F=Femenino',
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `CONTRASENA` varchar(500) DEFAULT NULL,
  `TELEFONO` varchar(11) DEFAULT NULL,
  `CELULAR` varchar(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `DOCUMENTO`, `TIPO_DOCUMENTO`, `CORREO`, `ID_ROL`, `ID_ESTADO`, `GENERO`, `FECHA_NACIMIENTO`, `CONTRASENA`, `TELEFONO`, `CELULAR`) VALUES
(31, 'yuya', 'BOTINA', 456465456, 'cedula ciudadania', 'cristian_botina@hotmail1.com', 1, 2, 'M', '1989-03-23', '123456', '3359441', '3188277354'),
(33, 'luis', 'aragon', 31987987, 'cedula', 'luis@gmail.com', 2, 2, 'M', '1989-12-31', '123456', '3549874', '3216549877'),
(34, 'micheal', 'rosero', 1143826532, 'CC', 'michael@gmail.com', 3, 2, 'M', '1989-03-19', '123456', '354444', '32145'),
(36, 'andres', 'pastrana', 123456, 'CC', 'andres@hotmail.com', 2, 1, 'F', '1989-02-02', '123456', '32345677', '321345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_por_idea`
--
ALTER TABLE `area_por_idea`
 ADD PRIMARY KEY (`ID_AREAIDEA`), ADD KEY `ID_IDEA` (`ID_IDEA`), ADD KEY `ID_AREA` (`ID_AREA`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
 ADD PRIMARY KEY (`ID_CRONOGRAMA`), ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`), ADD KEY `ID_DOCENTE` (`ID_DOCENTE`), ADD KEY `ID_ESTADO` (`ID_ESTADO`), ADD KEY `ID_IDEA` (`ID_IDEA`);

--
-- Indices de la tabla `idea_log`
--
ALTER TABLE `idea_log`
 ADD PRIMARY KEY (`ID_IDEALOG`);

--
-- Indices de la tabla `tb_area_interes`
--
ALTER TABLE `tb_area_interes`
 ADD PRIMARY KEY (`ID_AREAINTERES`);

--
-- Indices de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
 ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indices de la tabla `tb_idea`
--
ALTER TABLE `tb_idea`
 ADD PRIMARY KEY (`ID_IDEA`), ADD KEY `ID_AREA` (`ID_AREA`), ADD KEY `ID_USUARIO_CREA` (`ID_USUARIO_CREA`), ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`), ADD KEY `ID_DOCENTE` (`ID_DOCENTE`), ADD KEY `ID_ESTADO` (`ID_ESTADO`);

--
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
 ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
 ADD PRIMARY KEY (`ID_USUARIO`), ADD KEY `ID_ESTADO` (`ID_ESTADO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_por_idea`
--
ALTER TABLE `area_por_idea`
MODIFY `ID_AREAIDEA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
MODIFY `ID_CRONOGRAMA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idea_log`
--
ALTER TABLE `idea_log`
MODIFY `ID_IDEALOG` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `tb_area_interes`
--
ALTER TABLE `tb_area_interes`
MODIFY `ID_AREAINTERES` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_idea`
--
ALTER TABLE `tb_idea`
MODIFY `ID_IDEA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
