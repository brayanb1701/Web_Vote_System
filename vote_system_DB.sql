-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2018 a las 08:07:49
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nombre1` varchar(30) NOT NULL,
  `nombre2` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `grado` varchar(5) NOT NULL,
  `activo` varchar(1) NOT NULL DEFAULT 'S',
  `activo2` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `matricula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `grado`, `activo`, `activo2`) VALUES
(1, 1001, '1', '1', '1', '1', '2', 'S', 'S'),
(2, 1002, '2', '2', '2', '2', '2', 'S', 'S'),
(3, 1003, '3', '3', '3', '3', '2', 'S', 'S'),
(4, 1004, '4', '4', '4', '4', '2', 'S', 'S'),
(5, 1005, '5', '5', '5', '5', '2', 'S', 'S'),
(6, 1006, '6', '6', '6', '6', '2', 'S', 'S'),
(7, 1007, '7', '7', '7', '7', '2', 'S', 'S'),
(8, 1008, '8', '8', '8', '8', '2', 'S', 'S'),
(9, 1009, '9', '9', '9', '9', '2', 'S', 'S'),
(10, 1010, '10', '10', '10', '10', '3', 'S', 'S'),
(11, 1011, '11', '11', '11', '11', '3', 'S', 'S'),
(12, 1012, '12', '12', '12', '12', '3', 'S', 'S'),
(13, 1013, '13', '13', '13', '13', '3', 'S', 'S'),
(14, 1014, '14', '14', '14', '14', '3', 'S', 'S'),
(15, 1015, '15', '15', '15', '15', '3', 'S', 'S'),
(16, 1016, '16', '16', '16', '16', '3', 'S', 'S'),
(17, 1017, '17', '17', '17', '17', '3', 'S', 'S'),
(18, 1018, '18', '18', '18', '18', '3', 'S', 'S'),
(19, 1019, '19', '19', '19', '19', '3', 'S', 'S'),
(20, 1020, '20', '20', '20', '20', '4', 'S', 'S'),
(21, 1021, '21', '21', '21', '21', '4', 'S', 'S'),
(22, 1022, '22', '22', '22', '22', '4', 'S', 'S'),
(23, 1023, '23', '23', '23', '23', '4', 'S', 'S'),
(24, 1024, '24', '24', '24', '24', '4', 'S', 'S'),
(25, 1025, '25', '25', '25', '25', '4', 'S', 'S'),
(26, 1026, '26', '26', '26', '26', '4', 'S', 'S'),
(27, 1027, '27', '27', '27', '27', '4', 'S', 'S'),
(28, 1028, '28', '28', '28', '28', '4', 'S', 'S'),
(29, 1029, '29', '29', '29', '29', '4', 'S', 'S'),
(30, 1030, '30', '30', '30', '30', '5', 'S', 'S'),
(31, 1031, '31', '31', '31', '31', '5', 'S', 'S'),
(32, 1032, '32', '32', '32', '32', '5', 'S', 'S'),
(33, 1033, '33', '33', '33', '33', '5', 'S', 'S'),
(34, 1034, '34', '34', '34', '34', '5', 'S', 'S'),
(35, 1035, '35', '35', '35', '35', '5', 'S', 'S'),
(36, 1036, '36', '36', '36', '36', '5', 'S', 'S'),
(37, 1037, '37', '37', '37', '37', '5', 'S', 'S'),
(38, 1038, '38', '38', '38', '38', '5', 'S', 'S'),
(39, 1039, '39', '39', '39', '39', '5', 'S', 'S'),
(40, 1040, '40', '40', '40', '40', '6', 'N', 'S'),
(41, 1041, '41', '41', '41', '41', '6', 'N', 'S'),
(42, 1042, '42', '42', '42', '42', '6', 'N', 'S'),
(43, 1043, '43', '43', '43', '43', '6', 'N', 'S'),
(44, 1044, '44', '44', '44', '44', '6', 'N', 'S'),
(45, 1045, '45', '45', '45', '45', '6', 'N', 'S'),
(46, 1046, '46', '46', '46', '46', '6', 'N', 'S'),
(47, 1047, '47', '47', '47', '47', '6', 'N', 'S'),
(48, 1048, '48', '48', '48', '48', '6', 'N', 'S'),
(49, 1049, '49', '49', '49', '49', '6', 'N', 'S'),
(50, 1050, '50', '50', '50', '50', '7', 'S', 'S'),
(51, 1051, '51', '51', '51', '51', '7', 'S', 'S'),
(52, 1052, '52', '52', '52', '52', '7', 'S', 'S'),
(53, 1053, '53', '53', '53', '53', '7', 'S', 'S'),
(54, 1054, '54', '54', '54', '54', '7', 'S', 'S'),
(55, 1055, '55', '55', '55', '55', '7', 'S', 'S'),
(56, 1056, '56', '56', '56', '56', '7', 'S', 'S'),
(57, 1057, '57', '57', '57', '57', '7', 'S', 'S'),
(58, 1058, '58', '58', '58', '58', '7', 'S', 'S'),
(59, 1059, '59', '59', '59', '59', '7', 'S', 'S'),
(60, 1060, '60', '60', '60', '60', '8', 'S', 'S'),
(61, 1061, '61', '61', '61', '61', '8', 'S', 'S'),
(62, 1062, '62', '62', '62', '62', '8', 'S', 'S'),
(63, 1063, '63', '63', '63', '63', '8', 'S', 'S'),
(64, 1064, '64', '64', '64', '64', '8', 'S', 'S'),
(65, 1065, '65', '65', '65', '65', '8', 'S', 'S'),
(66, 1066, '66', '66', '66', '66', '8', 'S', 'S'),
(67, 1067, '67', '67', '67', '67', '8', 'S', 'S'),
(68, 1068, '68', '68', '68', '68', '8', 'S', 'S'),
(69, 1069, '69', '69', '69', '69', '8', 'S', 'S'),
(70, 1070, '70', '70', '70', '70', '9', 'S', 'S'),
(71, 1071, '71', '71', '71', '71', '9', 'S', 'S'),
(72, 1072, '72', '72', '72', '72', '9', 'S', 'S'),
(73, 1073, '73', '73', '73', '73', '9', 'S', 'S'),
(74, 1074, '74', '74', '74', '74', '9', 'S', 'S'),
(75, 1075, '75', '75', '75', '75', '9', 'S', 'S'),
(76, 1076, '76', '76', '76', '76', '9', 'S', 'S'),
(77, 1077, '77', '77', '77', '77', '9', 'S', 'S'),
(78, 1078, '78', '78', '78', '78', '9', 'S', 'S'),
(79, 1079, '79', '79', '79', '79', '9', 'S', 'S'),
(80, 1080, '80', '80', '80', '80', '10', 'S', 'S'),
(81, 1081, '81', '81', '81', '81', '10', 'S', 'S'),
(82, 1082, '82', '82', '82', '82', '10', 'S', 'S'),
(83, 1083, '83', '83', '83', '83', '10', 'S', 'S'),
(84, 1084, '84', '84', '84', '84', '10', 'S', 'S'),
(85, 1085, '85', '85', '85', '85', '10', 'S', 'S'),
(86, 1086, '86', '86', '86', '86', '10', 'S', 'S'),
(87, 1087, '87', '87', '87', '87', '10', 'S', 'S'),
(88, 1088, '88', '88', '88', '88', '10', 'S', 'S'),
(89, 1089, '89', '89', '89', '89', '10', 'S', 'S'),
(90, 1090, '90', '90', '90', '90', '11', 'S', 'S'),
(91, 1091, '91', '91', '91', '91', '11', 'S', 'S'),
(92, 1092, '92', '92', '92', '92', '11', 'S', 'S'),
(93, 1093, '93', '93', '93', '93', '11', 'S', 'S'),
(94, 1094, '94', '94', '94', '94', '11', 'S', 'S'),
(95, 1095, '95', '95', '95', '95', '11', 'S', 'S'),
(96, 1096, '96', '96', '96', '96', '11', 'S', 'S'),
(97, 1097, '97', '97', '97', '97', '11', 'S', 'S'),
(98, 1098, '98', '98', '98', '98', '11', 'S', 'S'),
(99, 1099, '99', '99', '99', '99', '11', 'S', 'S'),
(100, 1100, '100', '100', '100', '100', '2', 'S', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_voto`
--

CREATE TABLE `alumno_voto` (
  `id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno_voto`
--

INSERT INTO `alumno_voto` (`id`) VALUES
('1001'),
('1003'),
('1008'),
('1010'),
('1030'),
('1031');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `alumnos_id` int(11) NOT NULL,
  `tipo` varchar(5) NOT NULL,
  `n_votacion` varchar(1) NOT NULL,
  `color` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `alumnos_id`, `tipo`, `n_votacion`, `color`) VALUES
(1, 0, '5', '0', 'ffffff'),
(7, 1030, '5', '1', '0000FF'),
(8, 1031, '5', '2', 'FF6600'),
(10, 0, '11', '0', 'ffffff'),
(11, 1090, '11', '3', '00CC00'),
(12, 1091, '11', '4', '00CC00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `voto_blanco` varchar(1) NOT NULL DEFAULT 'S',
  `id` int(11) NOT NULL,
  `fecha_cierre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`voto_blanco`, `id`, `fecha_cierre`) VALUES
('S', 1, '2018-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `grado` varchar(5) NOT NULL,
  `voto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `grado`, `voto_id`) VALUES
(1, '2', 1),
(2, '2', 1),
(4, '2', 0),
(5, '2', 1),
(6, '3', 0),
(7, '3', 2),
(8, '4', 1),
(9, '5', 2),
(13, '9', 0),
(15, '11', 0),
(16, '6', 3),
(17, '7', 4),
(18, '8', 3),
(19, '10', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votaciones_2015`
--

CREATE TABLE `votaciones_2015` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `voto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `votaciones_2015`
--

INSERT INTO `votaciones_2015` (`id`, `alumno_id`, `voto_id`) VALUES
(1, 1071, 1),
(2, 1080, 3),
(3, 1040, 3),
(4, 1090, 3),
(5, 1035, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_voto`
--
ALTER TABLE `alumno_voto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo_n` (`tipo`,`n_votacion`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `votaciones_2015`
--
ALTER TABLE `votaciones_2015`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `parametros`
--
ALTER TABLE `parametros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `votaciones_2015`
--
ALTER TABLE `votaciones_2015`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
