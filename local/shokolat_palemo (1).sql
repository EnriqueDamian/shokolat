-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2019 a las 22:00:56
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shokolat_palemo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(12) NOT NULL,
  `nombres_contacto` varchar(255) NOT NULL,
  `apellidos_contacto` varchar(255) NOT NULL,
  `telefono_contacto` varchar(255) NOT NULL,
  `correo_contacto` varchar(255) NOT NULL,
  `mensaje_contacto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nombres_contacto`, `apellidos_contacto`, `telefono_contacto`, `correo_contacto`, `mensaje_contacto`) VALUES
(1, 'David Alfonso', 'Pasos', '9999632567', 'david.pasos19@hotmail.com', 'me gustaria hacer una exportacion con ustedes....una tonelada de chocolates'),
(2, 'David', 'Smith', '999986545', 'david.pasos19@hotmail.com', 'esta es otra prueba del proyecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id_historia` int(12) NOT NULL,
  `texto_historia` text NOT NULL,
  `imagen_historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id_historia`, `texto_historia`, `imagen_historia`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore saepe deserunt autem, ut optio ipsam quos sint a enim sequi recusandae aliquam itaque, velit consectetur quidem numquam! Doloremque, in, unde.\r\n             ', '1566592974.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(12) NOT NULL,
  `nombre_marca` varchar(100) NOT NULL,
  `marca_img_banner` text NOT NULL,
  `marca_img_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`, `marca_img_banner`, `marca_img_logo`) VALUES
(6, 'KOROVKA', '1566942884.png', '15669428841.jpg'),
(7, 'ALIONKA', '1566944327.png', '15669443271.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision`
--

CREATE TABLE `mision` (
  `id_mision` int(11) NOT NULL,
  `mision` text NOT NULL,
  `imagen_mision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mision`
--

INSERT INTO `mision` (`id_mision`, `mision`, `imagen_mision`) VALUES
(1, 'Liderazgo y compromiso de llevar la máxima calidad de productos a las manos de todos.', '1566881440.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(12) NOT NULL,
  `id_marca` int(12) NOT NULL,
  `nombre_producto` text NOT NULL,
  `descripcion_producto` text NOT NULL,
  `cantidad_producto` varchar(100) NOT NULL,
  `imagen_producto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_marca`, `nombre_producto`, `descripcion_producto`, `cantidad_producto`, `imagen_producto`) VALUES
(15, 6, 'PRODUCTO 1 KOROVKA', 'PRODUCTO 1 KOROVKA MUY BUENO', '50 gr', '1566942938.jpg'),
(16, 6, 'PRODUCTO 2 KOROVKA', 'PRODUCTO 2 KOROVKA MUY BUENO', '50 gr', '1566942967.jpg'),
(17, 6, 'PRODUCTO 3 KOROVKA', 'PRODUCTO 3 KOROVKA MUY BUENO', '50 gr', '1566942988.jpg'),
(19, 7, 'PRODUCTO 1 ALIONKA', 'PRODUCTO 1 ALIONKA MUY BUENO', '50 gr', '1566944392.png'),
(20, 7, 'PRODUCTO 2 ALIONKA', 'PRODUCTO 2 ALIONKA MUY BUENO', '50 gr', '1566944413.png'),
(21, 7, 'PRODUCTO 3 ALIONKA', 'PRODUCTO 3 ALIONKA MUY BUENO', '50 gr', '1566944431.png'),
(22, 7, 'PRODUCTO 4 ALIONKA', 'PRODUCTO 4 ALIONKA MUY BUENO', '50 gr', '1566944453.png'),
(23, 6, 'PRODUCTO 4 KOROVKA', 'PRODUCTO 4 KOROVKA MUY BUENO', '50 gr', '1567028784.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vision`
--

CREATE TABLE `vision` (
  `id_vision` int(12) NOT NULL,
  `vision` text NOT NULL,
  `imagen_vision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vision`
--

INSERT INTO `vision` (`id_vision`, `vision`, `imagen_vision`) VALUES
(1, 'En 2020 estar posicionados en todo el territorio Mexicano y comenzar la expansión a mercados centro y sur americanos.', '1567029554.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id_historia`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `mision`
--
ALTER TABLE `mision`
  ADD PRIMARY KEY (`id_mision`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id_vision`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id_historia` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `mision`
--
ALTER TABLE `mision`
  MODIFY `id_mision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `vision`
--
ALTER TABLE `vision`
  MODIFY `id_vision` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
