-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 19:55:02
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsweetqueen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_apartado`
--

CREATE TABLE `tbl_apartado` (
  `idApartado` int(6) NOT NULL,
  `idSucursal` int(6) NOT NULL,
  `idCliente` int(6) NOT NULL,
  `Anticipo` float(10,2) NOT NULL,
  `Cantidad` int(20) NOT NULL,
  `Detalles` varchar(100) NOT NULL,
  `FechaAnticipo` date NOT NULL,
  `liquidacion` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_apartado`
--

INSERT INTO `tbl_apartado` (`idApartado`, `idSucursal`, `idCliente`, `Anticipo`, `Cantidad`, `Detalles`, `FechaAnticipo`, `liquidacion`) VALUES
(1, 11, 10, 100.00, 2, 'Sabor Vainilla', '2023-10-25', 350.00),
(2, 11, 12, 500.00, 2, 'Sabor fresa', '2023-10-09', 110.00),
(3, 11, 13, 100.00, 3, 'Sabor chocolate', '2023-10-10', 400.00),
(4, 12, 14, 500.00, 1, 'Sabor vainilla / chocolate', '2023-10-18', 100.00),
(5, 12, 15, 100.00, 2, 'Sabor red velvet', '2023-10-12', 600.00),
(6, 12, 16, 900.00, 4, 'Sabor vainilla / chocolate', '2023-10-05', 300.00),
(10, 12, 17, 100.00, 1, 'Sabor chocolate', '2023-10-01', 300.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_apartado`
--
ALTER TABLE `tbl_apartado`
  ADD PRIMARY KEY (`idApartado`,`idSucursal`,`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_apartado`
--
ALTER TABLE `tbl_apartado`
  MODIFY `idApartado` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
