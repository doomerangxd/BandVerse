-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2023 a las 06:18:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bandverse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandas`
--

CREATE TABLE `bandas` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `formacion` varchar(155) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `portada` varchar(255) NOT NULL,
  `foto_izquierda` varchar(255) NOT NULL,
  `foto_derecha` varchar(255) NOT NULL,
  `color_fondo` varchar(255) NOT NULL,
  `letra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bandas`
--

INSERT INTO `bandas` (`id`, `nombre`, `ciudad`, `genero`, `formacion`, `descripcion`, `portada`, `foto_izquierda`, `foto_derecha`, `color_fondo`, `letra`) VALUES
(1, 'bandaPrueba', 'Valencia', 'Metalcore', '2000', 'Esto es una prueba, no hay discos ni tampoco esperanzas', '', '', '', '', ''),
(2, 'bandaPrueba', 'Valencia', 'Metalcore', '2000', 'Esto es una prueba, no hay discos ni tampoco esperanzas', '', '', '', '', ''),
(3, 'bandaPruebaDos', 'Valencia', 'Metalcore', '2000', 'Esto es una prueba, no hay discos ni tampoco esperanzas', '', '', '', '', ''),
(4, 'bandaPruebaDos', 'Valencia', 'Metalcore', '2000', 'Esto es una prueba, no hay discos ni tampoco esperanzas', '', '', '', '', ''),
(5, 'bandaPrueba', 'Valencia', 'Metal', '2000', 'Esto es una prueba, no hay discos ni tampoco esperanzas', 'crisix.PNG', '', '', '', ''),
(6, 'bandaPruebaTres', 'Barcelona', 'Punk', '2004', 'No hay esperanza pero tampoco miedo', 'Angelus-Apatrida.jpg', '', '', '', ''),
(7, 'Saratoga', 'Madrid', 'Metal', '1992', 'Saratoga rules', 'lepoka.jpg', '', '', '', ''),
(8, 'Saratoga', 'Madrid', 'Metal Extremo', '1992', 'Saratoga rules', 'saratoga.jpg', '', '', '', ''),
(9, 'Saratoga', 'Madrid', 'Metal Extremo', '1992', 'Con más de 30 años en los escenarios, presentan su nuevo disco XXX', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '', ''),
(10, 'Saratoga', 'Madrid', 'Power Metal', '1992', 'Tras más de 30 años en los escenarios, la banda Madrileña Saratoga presenta su último disco XXX', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '', ''),
(11, 'Saratoga', 'Madrid', 'Power Metal', '1992', 'Tras más de 30 años en los escenarios, la banda Madrileña Saratoga presenta su último disco XXX', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#e81111', ''),
(12, 'Saratoga', 'Palencia', 'Power Metal', '1992', 'Nos gusta el mainkra y el heavy finlandés', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#0fe6e3', ''),
(13, 'Saratoga', 'Madrid', 'Metalcore', '1992', 'Esto es una prueba, no hay discos ni tampoco esperanzas', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#c90bfe', ''),
(14, 'Saratoga', 'Palencia', 'Metalcore', '1992', 'Esto es una prueba, no hay discos ni tampoco esperanzas', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#c800ff', ''),
(15, 'Saratoga', 'Madrid', 'Metalcore', '2000', 'Esto es una prueba, no hay discos ni tampoco esperanzas', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#ee00ff', 'a'),
(16, 'Saratoga', 'Madrid', 'Power Metal', '1992', 'Saratoga rules', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#04ff00', 'a'),
(17, 'Saratoga', 'Madrid', 'Power Metal', '1992', 'Con más de 30 años en los escenarios, presentan su nuevo disco XXX', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#c20000', 'a'),
(18, 'Saratoga', 'Madrid', 'Power Metal', '1992', 'Con más de 30 años en los escenarios, presentan su nuevo disco XXX', 'saratoga.jpg', 'izquierda.jpg', 'derecha.jpg', '#a11212', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `compras` int(255) NOT NULL,
  `precio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`compras`, `precio`) VALUES
(1, '0'),
(2, '0'),
(3, '0'),
(4, '0'),
(5, '0'),
(6, '0'),
(7, '0'),
(8, '0'),
(9, '0'),
(10, '0'),
(11, '0'),
(12, '0'),
(13, '0'),
(14, '0'),
(15, '0'),
(16, '0'),
(17, '0'),
(18, '0'),
(19, '0'),
(20, '0'),
(21, '0'),
(22, '0'),
(23, '0'),
(24, '0'),
(25, '0'),
(26, '0'),
(27, '0'),
(28, ''),
(29, 'hey'),
(30, 'hey'),
(31, 'hey'),
(32, 'hey'),
(33, 'hey'),
(34, 'hey'),
(35, 'hey'),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, '777777777'),
(46, '777777777777x'),
(47, '7777777777777777x');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

CREATE TABLE `comprobante` (
  `id` int(11) NOT NULL,
  `letra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telf` int(255) NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `mensaje` varchar(400) NOT NULL,
  `empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellidos`, `email`, `telf`, `motivo`, `mensaje`, `empresa`) VALUES
(1, 'prueba', 'prueba', 'prueba@gmail.com', 666666666, 'prueba', 'hola', ''),
(2, 'prueba', 'prueba', 'prueba@gmail.com', 666666666, 'prueba', 'sample text 2', 'Hola'),
(3, 'prueba', 'prueba', 'prueba@gmail.com', 0, 'prueba', 'hola', ''),
(4, 'prueba', 'prueba', 'prueba@gmail.com', 666666666, 'prueba', 'mensaje de prueba, que no sirve de mucho pero es de prueba', ''),
(5, 'prueba', 'prueba', 'prueba@gmail.com', 666666666, 'prueba', 'asdasd', ''),
(6, '', 'prueba', 'prueba@gmail.com', 0, 'prueba', 'asd', ''),
(7, '', 'prueba', 'prueba@gmail.com', 666666666, 'prueba', 'asdasd xxxxxxxxxxxxxxxxxxxxx', ''),
(8, 'prueba', 'prueba', 'prueba@gmail.com', 0, 'prueba', 'asdasdasd', ''),
(9, 'Alejandro', 'Pérez Galvan', 'alejandro@bandverse.com', 2147483647, 'Colaboración', 'Me gustaría ser patrocinadoen su página de instagram y feisbuk', ''),
(10, 'Alejandro', 'Pérez Galvan', 'alejandro@bandverse.com', 2147483647, 'Colaboración', 'Hola', ''),
(11, 'Javier', 'Gargallo Franch', 'javiDos@bandverse.com', 2147483647, 'Clave de emisión', 'Me gustaría pedir la clave emisión para el día 27 de Abril a las 19:00h', ''),
(12, 'Javi', 'Gargallo Franch', 'javiTres@bandverse.com', 666666666, 'Clave de emisión', 'Me gustaría emitir en directo el día 28 de Abril a las 19:00h', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `anyo` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_banda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`id`, `titulo`, `anyo`, `foto`, `id_banda`) VALUES
(1, 'Disco de prueba', '2001', '72seasons.jpg', 0),
(2, 'Disco de prueba', '2002', 'aonruna.jpg', 0),
(3, 'Disco de prueba', '2002', 'cabaret.jpg', 0),
(4, 'Disco de prueba', '2001', 'aonruna.jpg', 0),
(5, 'Disco de prueba', '2001', 'baile.jpg', 0),
(6, 'Disco de prueba', '2005', 'circodelatierra.jpeg', 6),
(7, 'Saratoga', '1993', 'giveem.jpg', 7),
(8, 'Tributo', '1994', 'clock.jpg', 7),
(9, 'Mi ciudad', '1995', 'beerserkers.JPG', 7),
(10, 'Vientos de Guerra', '1999', 'hiddenevolution.jpg', 7),
(11, 'Agotarás', '2002', 'NapalmDeathScum.jpg', 7),
(12, 'Tierra de lobos', '2005', 'colorful-nebulosa_52683-102250.jpeg', 8),
(13, 'Vientos de Guerra', '1999', 'vientosdeguerra.jpg', 9),
(14, 'Agotarás', '2002', 'agotaras.jpg', 9),
(15, 'El Clan de la Lucha', '2004', 'clandelalucha.jpg', 9),
(16, 'Tierra de Lobos', '2005', 'tierradelobos.jpg', 9),
(17, 'Aeternus', '2018', 'aeternus.jpg', 9),
(18, 'XXX 30 Aniversario', '2021', 'xxx.jpg', 9),
(19, 'Vientos de Guerra', '1999', 'vientosdeguerra.jpg', 10),
(20, 'Agotarás', '2002', 'agotaras.jpg', 10),
(21, 'El Clan de La Lucha', '2004', 'clandelalucha.jpg', 10),
(22, 'Tierra de Lobos', '2005', 'tierradelobos.jpg', 10),
(23, 'Aeternus', '2018', 'aeternus.jpg', 10),
(24, 'XXX', '2021', 'xxx.jpg', 10),
(25, 'Vientos de Guerra', '1999', 'vientosdeguerra.jpg', 11),
(26, 'Agotarás', '2002', 'agotaras.jpg', 11),
(27, 'El Clan de la Lucha', '2004', 'clandelalucha.jpg', 11),
(28, 'Tierra de Lobos', '2005', 'tierradelobos.jpg', 11),
(29, 'Aeternus', '2018', 'aeternus.jpg', 11),
(30, 'XXX', '2021', 'xxx.jpg', 11),
(31, 'LPC', '1999', 'aeternus.jpg', 12),
(32, 'Tierra de lobos', '2005', 'tierradelobos.jpg', 13),
(33, 'Vientos de Guerra', '1999', 'vientosdeguerra.jpg', 14),
(34, 'Tierra de lobos', '2005', 'tierradelobos.jpg', 15),
(35, 'Disco de prueba', '2001', 'clandelalucha.jpg', 16),
(36, 'Vientos de Guerra', '1999', 'vientosdeguerra.jpg', 17),
(37, 'Agotarás', '2002', 'agotaras.jpg', 17),
(38, 'El Clan de la Lucha', '2004', 'clandelalucha.jpg', 17),
(39, 'Tierra de Lobos', '2005', 'tierradelobos.jpg', 17),
(40, 'Aeternus', '2018', 'aeternus.jpg', 17),
(41, 'XXX', '2021', 'xxx.jpg', 17),
(42, 'Vientos de Guerra', '1999', 'vientosdeguerra.jpg', 18),
(43, 'Agotarás', '2002', 'agotaras.jpg', 18),
(44, 'El Clan de la Lucha', '2004', 'clandelalucha.jpg', 18),
(45, 'Tierra de Lobos', '2005', 'tierradelobos.jpg', 18),
(46, 'Aeternus', '2018', 'aeternus.jpg', 18),
(47, 'XXX', '2021', 'xxx.jpg', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `instrumento` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_banda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `nombre`, `instrumento`, `foto`, `id_banda`) VALUES
(1, 'Prueba', 'Guitarra', 'angel.jpg', 0),
(2, 'Prueba', 'zxc', 'angel.jpg', 0),
(3, 'Prueba', 'zxc', 'angel.jpg', 0),
(4, 'Prueba', 'Guitarra', 'angel.jpg', 0),
(5, 'Prueba', 'Guitarra', 'angel.jpg', 0),
(6, 'Prueba', 'Voz', 'carlitos.jpg', 6),
(7, 'Tete Novoa', 'Voz', 'alexruna.jpg', 7),
(8, 'Nico Del Hierro', 'Bajo', 'carlosZaph.jpg', 7),
(9, 'Jero Ramiro', 'Guitarra', 'davialvarez.jpg', 7),
(10, 'Arnau', 'Batería', 'daviddryriver.jpg', 7),
(11, 'Tete Novoa', 'Voz', 'tete.jpg', 8),
(12, 'Nico del Hierro', 'Bajo', 'nico.jpg', 8),
(13, 'Jero Ramiro', 'Guitarra', 'jer+.jpg', 8),
(14, 'El Estepario Siberiano ', 'Batería', 'estepario.jpg', 8),
(15, 'Tete Novoa', 'Voz', 'tete.jpg', 9),
(16, 'Nico del Hierro', 'Bajo', 'nico.jpg', 9),
(17, 'Jero Ramiro', 'Guitarra', 'jer+.jpg', 9),
(18, 'El Estepario Siberiano', 'Batería', 'estepario.jpg', 9),
(19, 'Tete Novoa', 'Voz', 'tete.jpg', 10),
(20, 'Nico del Hierro', 'Bajo', 'nico.jpg', 10),
(21, 'Jero Ramiro', 'Guitarra', 'jer+.jpg', 10),
(22, 'El Estepario Siberiano', 'Batería', 'estepario.jpg', 10),
(23, 'Tete Novoa', 'Voz', 'tete.jpg', 11),
(24, 'Nico del Hierro', 'Bajo', 'nico.jpg', 11),
(25, 'Jero Ramiro', 'Guitarra', 'jer+.jpg', 11),
(26, 'El Estepario Siberiano', 'Batería', 'estepario.jpg', 11),
(27, 'Puta', 'Los cojones', 'tete.jpg', 12),
(28, 'Caca', 'Marimba', 'nico.jpg', 12),
(29, 'Pipi', 'Triangulo', 'jer+.jpg', 12),
(30, 'Javi', 'Guitarra', 'estepario.jpg', 12),
(31, 'Tete Novoa', 'Voz', 'tete.jpg', 13),
(32, 'Tete Novoa', 'Voz', 'tete.jpg', 14),
(33, 'Tete Novoa', 'Voz', 'tete.jpg', 15),
(34, 'Prueba', 'Guitarra', 'tete.jpg', 16),
(35, 'Tete Novoa', 'Voz', 'tete.jpg', 17),
(36, 'Nico del Hierro', 'Bajo', 'nico.jpg', 17),
(37, 'Jero Ramiro', 'Guitarra', 'jer+.jpg', 17),
(38, 'El Estepario Siberiano', 'Batería', 'estepario.jpg', 17),
(39, 'Tete Novoa', 'Voz', 'tete.jpg', 18),
(40, 'Nico del Hierro', 'Bajo', 'nico.jpg', 18),
(41, 'Jero Ramiro', 'Guitarra', 'jer+.jpg', 18),
(42, 'El Estepario Siberiano', 'Batería', 'estepario.jpg', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE `pruebas` (
  `id` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id`, `ruta`) VALUES
(1, 'pin.jpg'),
(2, 'man.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(50) NOT NULL,
  `localizacion` varchar(255) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `localizacion`, `descripcion`, `ruta`) VALUES
(2, 'Tienda', 'Las imágenes se ven borrosas', ''),
(4, 'Bandas', 'Las imágenes se ven borrosas', ''),
(5, 'Contacto', '', 'pruebasReportes/niñolargo.jpg'),
(6, 'Login', 'Las imágenes se ven borrosas', 'pruebasReportes/cd.png'),
(7, 'Inicio', 'Las imágenes se ven borrosas', 'pruebasReportes/rive.jpeg'),
(8, 'Contacto', 'Las imágenes se ven borrosas', 'pruebasReportes/colorful-nebulosa_52683-102250.avif'),
(9, 'Tienda', 'Las tallas no se seleccionan bien', 'pruebasReportes/WhatsApp Image 2023-03-17 at 11.18.38.jpeg'),
(10, 'Contacto', 'El nº de teléfono no se envia bien', 'pruebasReportes/captura.png'),
(11, 'Inicio', 'La info está desactualizada', 'pruebasReportes/captura.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id` int(11) NOT NULL,
  `articulo` varchar(255) NOT NULL,
  `precio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `articulo`, `precio`) VALUES
(1, 'Camiseta básica', 10),
(2, 'Camiseta larga', 13),
(3, 'Sudadera', 22),
(4, 'Panuelo', 3),
(5, 'Mochila Grande', 35),
(6, 'Mochila pequeña', 35),
(7, 'Taza', 5),
(8, 'Pin', 3),
(9, 'Poster licuado', 5),
(10, 'Poster galaxy', 5),
(11, 'Poster live', 5),
(12, 'pua bandverse', 1),
(13, 'BandVerse Mix 2023', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `username`, `password`) VALUES
(1, 'Javi', 'Gargallo', 'javi@bandverse.com', 'doom', 'hola123'),
(2, 'cliente', 'cli', 'prueba2@gmail.com', 'doc', 'doc123'),
(3, 'prueba', 'prueba', 'prueba@gmail.com', 'userprueba', 'hola123'),
(5, 'Javi', 'Gargallo Franch', 'javiDos@bandverse.com', 'hola', 'hola123'),
(6, 'Javi', 'Gargallo Franch', 'javiTres@bandverse.com', 'hola2', 'hola123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`compras`);

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bandas`
--
ALTER TABLE `bandas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `compras` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
