-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 18:00:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2021_dominguezluis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencias`
--

CREATE TABLE `tbl_incidencias` (
  `id_inc` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `descrip` text NOT NULL,
  `dispo` enum('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesas`
--

CREATE TABLE `tbl_mesas` (
  `id_mesa` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `num_sillas_mesa` int(2) NOT NULL,
  `disponibilidad_mesa` enum('disponible','no disponible') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_mesas`
--

INSERT INTO `tbl_mesas` (`id_mesa`, `id_sala`, `num_sillas_mesa`, `disponibilidad_mesa`) VALUES
(1, 1, 2, 'disponible'),
(2, 1, 2, 'disponible'),
(3, 1, 4, 'disponible'),
(4, 1, 4, 'disponible'),
(5, 1, 6, 'disponible'),
(6, 1, 6, 'disponible'),
(7, 2, 2, 'disponible'),
(8, 2, 2, 'disponible'),
(9, 2, 4, 'disponible'),
(10, 2, 4, 'disponible'),
(11, 2, 6, 'disponible'),
(12, 2, 6, 'disponible'),
(13, 3, 2, 'disponible'),
(14, 3, 2, 'disponible'),
(15, 3, 4, 'disponible'),
(16, 3, 4, 'disponible'),
(17, 3, 6, 'disponible'),
(18, 3, 6, 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservas`
--

CREATE TABLE `tbl_reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `dia_reserva` date NOT NULL,
  `franja_horaria` enum('13-14','14-15','15-16','16-17','20-21','21-22','22-23','23-00') NOT NULL,
  `comensales` int(11) NOT NULL,
  `telefono` text NOT NULL,
  `nombre_reserva` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_reservas`
--

INSERT INTO `tbl_reservas` (`id_reserva`, `id_mesa`, `dia_reserva`, `franja_horaria`, `comensales`, `telefono`, `nombre_reserva`, `id_user`) VALUES
(6, 5, '2020-12-19', '21-22', 5, '123123123', 'Samu', 1),
(7, 1, '2020-12-24', '22-23', 2, '123654987', 'Qwe', 1),
(9, 1, '2020-12-19', '16-17', 3, '63454353413', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_salas`
--

CREATE TABLE `tbl_salas` (
  `id_sala` int(11) NOT NULL,
  `num_mesas` int(2) NOT NULL,
  `num_sillas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_salas`
--

INSERT INTO `tbl_salas` (`id_sala`, `num_mesas`, `num_sillas`) VALUES
(1, 6, 24),
(2, 6, 24),
(3, 6, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `passwd_user` varchar(50) NOT NULL,
  `status_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`Id_user`, `email_user`, `passwd_user`, `status_user`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(7, 'camarero2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(8, 'camarero@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  ADD PRIMARY KEY (`id_inc`),
  ADD KEY `fk_id_inc` (`id_mesa`);

--
-- Indices de la tabla `tbl_mesas`
--
ALTER TABLE `tbl_mesas`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `fk_id_sala` (`id_sala`);

--
-- Indices de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_id_mesa` (`id_mesa`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Indices de la tabla `tbl_salas`
--
ALTER TABLE `tbl_salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id_user`),
  ADD KEY `fk_user_reserva` (`Id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  MODIFY `id_inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_mesas`
--
ALTER TABLE `tbl_mesas`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbl_salas`
--
ALTER TABLE `tbl_salas`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  ADD CONSTRAINT `fk_id_inc` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesas` (`id_mesa`);

--
-- Filtros para la tabla `tbl_mesas`
--
ALTER TABLE `tbl_mesas`
  ADD CONSTRAINT `fk_id_sala` FOREIGN KEY (`id_sala`) REFERENCES `tbl_salas` (`id_sala`);

--
-- Filtros para la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD CONSTRAINT `fk_id_mesa` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesas` (`id_mesa`),
  ADD CONSTRAINT `tbl_reservas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`Id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
