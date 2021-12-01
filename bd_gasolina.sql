-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 05:22:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gasolina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(9) NOT NULL,
  `precio` varchar(250) NOT NULL,
  `tipo_articulo` varchar(250) NOT NULL,
  `tipo_gasolina` varchar(250) NOT NULL,
  `distribuidor` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `sucursal` varchar(250) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `precio`, `tipo_articulo`, `tipo_gasolina`, `distribuidor`, `ciudad`, `sucursal`, `codigo`) VALUES
(0, '', '', '', '', '', '', 1),
(32696, '$100', 'Inflado de llantas', 'No cargó', 'No cargó', 'Juárez', 'Gran Patio', 2),
(32697, '$200', 'Aceite de Motor', 'Premium', 'Pemex', 'Juárez', 'Las Torrres', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `nombre` varchar(50) NOT NULL,
  `codigo_id` int(50) NOT NULL,
  `turno` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `sucursal` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`nombre`, `codigo_id`, `turno`, `telefono`, `sucursal`, `direccion`, `edad`) VALUES
('', 1, '', 0, '', '', 0),
('Fany Ramirez', 32698, 'Matutino', 2147483647, 'Gran Patio', 'C. Humaritza 2345', 17),
('Karyme', 32699, 'Matutino', 2147483647, 'Las Torrres', 'C. San José 2345', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `nombre_sucursal` varchar(250) NOT NULL,
  `direccion_sucursal` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `telefono_sucursal` int(250) NOT NULL,
  `ventas` varchar(250) NOT NULL,
  `num_empleados` int(250) NOT NULL,
  `articulos` varchar(250) NOT NULL,
  `codigo` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`nombre_sucursal`, `direccion_sucursal`, `ciudad`, `telefono_sucursal`, `ventas`, `num_empleados`, `articulos`, `codigo`) VALUES
('', '', '', 0, '0', 0, '', 1),
('Suc. Las Torres ', 'Avenida Las Torres, Blvd Zaragoza', 'Juárez', 1234567890, '$40,000', 20, '$600', 3),
('Suc. Gran Patio', 'Blvd. Zaragoza, Calle Parral', 'Juárez', 1234567890, '$37,549', 12, '$600', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `litros` int(250) NOT NULL,
  `precio` int(250) NOT NULL,
  `tipo_gasolina` varchar(250) NOT NULL,
  `sucursal` varchar(250) NOT NULL,
  `calidad` varchar(250) NOT NULL,
  `tipo_de_pago` varchar(250) NOT NULL,
  `venta_total` varchar(250) NOT NULL,
  `codigo` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`litros`, `precio`, `tipo_gasolina`, `sucursal`, `calidad`, `tipo_de_pago`, `venta_total`, `codigo`) VALUES
(0, 0, '', '', '', '', '', 1),
(40, 20, 'Regular', 'Las Torrres', 'Regular', 'Tarjeta', '800', 3),
(78, 20, 'Premium', 'Gran Patio', 'Premium', 'Efectivo', '1560', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigo_id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `codigo_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32700;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `codigo` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `codigo` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
