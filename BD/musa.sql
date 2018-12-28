-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2018 a las 00:07:09
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_cadaver`
--

CREATE TABLE `ejercicio_cadaver` (
  `id_frase` int(3) NOT NULL,
  `frase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de frases predeterminadas';

--
-- Volcado de datos para la tabla `ejercicio_cadaver`
--

INSERT INTO `ejercicio_cadaver` (`id_frase`, `frase`) VALUES
(1, 'La noche ameritaba que...'),
(2, '\"Sabes lo que tienes que hacer\" '),
(3, 'Consolarla no era una opción, ¿verdad?'),
(4, 'Caminar a veces despejaba, pero...'),
(5, 'Era contraproducente porque...'),
(6, '...y entonces, todo acabó.'),
(7, 'Epicuro sabría cómo solucionar aquello, pero...'),
(8, 'Si agarras una estrella'),
(9, '...la guardas en...'),
(10, 'La soledad, como todo, era...'),
(11, 'El sol se pone y mientras tanto'),
(12, 'No bastaba con sonreír porque entonces descubriría la verdad'),
(13, 'Llueve en Puerto Rico'),
(14, 'La paciencia es una virtud'),
(15, 'enseñar a los ancianos a pensar como niños, pero...'),
(16, 'Las moscas son menos tontas que eso'),
(17, '¡Ríete,...!'),
(18, 'Los sueños, sueños son'),
(19, 'pero'),
(20, 'y'),
(21, 'entonces'),
(22, 'solucionaría aquello'),
(23, 'pero mañana'),
(24, 'puentes rotos'),
(25, 'frases mal hechas'),
(26, 'mecheros de cristal'),
(27, 'acabar tirado'),
(28, 'los'),
(29, 'las'),
(30, 'cómodamente'),
(31, 'se atropellan'),
(32, 'el destino aborrece'),
(33, 'flamante victoria'),
(34, 'pulcritud exacta'),
(35, 'fanatismo'),
(36, 'Era'),
(37, 'es'),
(38, 'cómplice'),
(39, 'un ardid así'),
(40, 'espectros'),
(41, 'estrellarse'),
(42, 'hacerse añicos'),
(43, 'consolidar'),
(44, 'digerir ese trago amargo'),
(45, 'subtexto es aquel que...'),
(46, 'tras el velo plateado'),
(47, 'magníficas doncellas'),
(48, 'manecillas de reloj averiadas'),
(49, 'evocará aquello y...'),
(50, 'dirá lo que siente porque sino...'),
(51, '¿Acaso no había terminado?'),
(52, '¿cuánto tiempo más podría pasar?'),
(53, 'Momentos así descritos'),
(54, 'pocos amaneceres'),
(55, 'Torrente'),
(56, 'Quieren quererme pero no puedo tolerarlo'),
(57, '- Mira ésto y dime qué piensas.\r\n- Pienso que, ya es tarde.'),
(59, 'proximamente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_cadaver_usuario`
--

CREATE TABLE `ejercicio_cadaver_usuario` (
  `id_frase_creada` int(3) NOT NULL,
  `frase` text NOT NULL,
  `frase_creada` text NOT NULL,
  `id_usuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejercicio_cadaver_usuario`
--

INSERT INTO `ejercicio_cadaver_usuario` (`id_frase_creada`, `frase`, `frase_creada`, `id_usuario`) VALUES
(1, 'La soledad, como todo, era...', 'ce', 19),
(2, 'ï¿½Acaso no habï¿½a terminado?', 'df', 19),
(3, 'acabar tirado', 'aqui solo', 19),
(4, 'fanatismo', 'khv', 19),
(5, 'tras el velo plateado', 'j b7', 19),
(6, 'Consolarla no era una opciï¿½n, ï¿½verdad?', 'eggr', 19),
(7, 'manecillas de reloj averiadas', 'fgshj', 19),
(8, 'acabar tirado', 'sÃ³lo porque sÃ­', 20),
(9, 'pulcritud exacta', 'La que existe aquÃ­', 20),
(10, 'pulcritud exacta', 'La que existe aquÃ­', 20),
(11, 'un ardid asï¿½', 'aparece cuando menos lo planeas', 20),
(12, 'hacerse aï¿½icos', 'contra el cristal de la vida', 20),
(13, 'El sol se pone y mientras tanto', 'arh', 19),
(14, 'El sol se pone y mientras tanto', 'arh', 19),
(15, 'El sol se pone y mientras tanto', 'arh', 19),
(16, 'El sol se pone y mientras tanto', 'arh', 19),
(17, '', 'eshgwh', 19),
(18, 'La noche ameritaba que...', 'sea asi', 19),
(19, 'consolidar', 'lo que paso', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `nick` varchar(12) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `clave`, `nombre`, `apellido`, `nick`, `mail`) VALUES
(14, 'ceci', 'Cecilia', 'Mermoz', 'ceci', 'ceci'),
(15, 'ff44570aca8241914870afbc310cdb85', 'Juan', 'Perez', 'Juancho', 'ff44570aca8241914870afbc310cdb85'),
(16, 'ff44570aca8241914870afbc310cdb85', 'Juan', 'Perez', 'Juancho', 'j@m.com'),
(17, 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(18, 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(19, '9b5394fd929896fb9e90e26b3d18e63d', 'ce', 'ce', 'ce', 'ce@ce.com'),
(20, 'fe650ed860c0a0c299e4559bc124cb12', 'Lucrecia', 'Maltes', 'lucre', 'luma@s.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicio_cadaver`
--
ALTER TABLE `ejercicio_cadaver`
  ADD PRIMARY KEY (`id_frase`);

--
-- Indices de la tabla `ejercicio_cadaver_usuario`
--
ALTER TABLE `ejercicio_cadaver_usuario`
  ADD PRIMARY KEY (`id_frase_creada`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicio_cadaver`
--
ALTER TABLE `ejercicio_cadaver`
  MODIFY `id_frase` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `ejercicio_cadaver_usuario`
--
ALTER TABLE `ejercicio_cadaver_usuario`
  MODIFY `id_frase_creada` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
