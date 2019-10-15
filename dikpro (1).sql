-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2017 a las 17:37:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dikpro`
--
CREATE DATABASE IF NOT EXISTS `dikpro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dikpro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_tb_cliente` int(11) NOT NULL,
  `Cliente_Nombre_Comercial` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `Contacto_Razon_Social` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Ciudad` varchar(25) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Telefono` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Cedula_Ruc` varchar(13) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `condicion` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_tb_cliente`, `Cliente_Nombre_Comercial`, `Contacto_Razon_Social`, `Direccion`, `Ciudad`, `Telefono`, `Cedula_Ruc`, `Email`, `condicion`) VALUES
(2, 'Pekes', 'Karen Pastillo', 'Garcia Moreno y Roca', 'Otavalo', '16516', '1002234027', 'notiene@hotmail.com', 1),
(3, 'Dikapsa', 'Hector Oña', 'Barrio Monserrath', 'Otavalo', '0999448323', '1001403839001', 'info@dikapsa.com', 1),
(4, 'Ejemplo', 'Emjemplio', NULL, NULL, '23', '1001001001', 'notiene@hotmail.com', 1),
(234, 'Creative Web', 'Santiago Ona Sanchez', 'Sucre Y Colon Esq', 'Otavalo', '0999174980', '1002906426001', 'santysos1@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_descripcion_procesos`
--

CREATE TABLE `tb_descripcion_procesos` (
  `id_tb_descripcion_procesos` int(11) NOT NULL,
  `descripcion_procesos` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_descripcion_servicios`
--

CREATE TABLE `tb_descripcion_servicios` (
  `id_tb_descripcion_servicios` int(11) NOT NULL,
  `id_tb_Servicios` int(11) NOT NULL,
  `Productos` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tb_descripcion_servicios`
--

INSERT INTO `tb_descripcion_servicios` (`id_tb_descripcion_servicios`, `id_tb_Servicios`, `Productos`) VALUES
(1, 1, 'Boletos'),
(2, 1, 'Libretines A4'),
(3, 1, 'Libretines A5'),
(4, 1, 'Libretines A6'),
(5, 1, 'Libretines A7'),
(6, 1, 'Libretines 1/3'),
(7, 1, 'Formularios'),
(8, 2, 'Afiches'),
(9, 2, 'Calendarios'),
(10, 2, 'Carnets'),
(11, 2, 'Carpetas'),
(12, 2, 'Cartillas - Menus'),
(13, 2, 'Catalogos'),
(14, 2, 'Credenciales'),
(15, 2, 'Diplomas'),
(16, 2, 'Dipticos'),
(17, 2, 'Diseno'),
(18, 2, 'Etiquetas'),
(19, 2, 'Flyers'),
(20, 2, 'Hojas Membretadas'),
(21, 2, 'Impresiones A3'),
(22, 2, 'Impresiones A4'),
(23, 2, 'Impresiones Mega A3'),
(24, 2, 'Invitaciones - Tarjetas'),
(25, 2, 'Stickers'),
(26, 2, 'Tarjetas de Presentacion'),
(27, 2, 'Tripticos'),
(28, 5, 'Impresion Lona Mate'),
(29, 5, 'Impresion Blue Back'),
(30, 5, 'Impresion Lona Brillante'),
(31, 5, 'Impresion Lona Traslucida'),
(32, 5, 'Impresion Microperforado'),
(33, 5, 'Impresion Tela'),
(34, 5, 'Impresion Vinil Adhesivo'),
(35, 5, 'Impresion Vinil Transparente'),
(36, 5, 'Piso Max'),
(37, 5, 'Roll Up'),
(38, 5, 'Rotulo con Estructura'),
(39, 5, 'Rotulo Luminoso'),
(40, 5, 'Señaletica Acrilico'),
(41, 5, 'Señaletica PVC'),
(42, 5, 'Señaletica Vidrio'),
(43, 5, 'Varios Productos Acrilico'),
(44, 5, 'Vinil Sobre PVC'),
(45, 3, 'Carpetas'),
(46, 3, 'Etiquetas'),
(47, 3, 'Folletos'),
(48, 3, 'Hojas Impresas'),
(49, 3, 'Hojas Membretadas'),
(50, 3, 'Impresion Tarjetas'),
(51, 3, 'Kardex'),
(52, 3, 'Sobres Membretados'),
(53, 3, 'Tripticos'),
(54, 3, 'Volantes'),
(55, 3, 'Libros'),
(56, 4, 'Boletos'),
(57, 4, 'Cajas Impresas'),
(58, 4, 'Calendarios'),
(59, 4, 'Carpetas'),
(60, 4, 'Catalogos'),
(61, 4, 'Dipticos'),
(62, 4, 'Etiquetas'),
(63, 4, 'Hojas Membretadas'),
(64, 4, 'Libretas'),
(65, 4, 'Papeletas'),
(66, 4, 'Plegables'),
(67, 4, 'Sobres Membretados'),
(68, 4, 'Tarjetas Varias'),
(69, 4, 'Tarjetas de Presentacion'),
(70, 4, 'Tripticos'),
(71, 4, 'Volantes'),
(72, 4, 'Folletos'),
(73, 4, 'Peridicos'),
(74, 4, 'Revistas'),
(75, 4, 'Afiches'),
(76, 4, 'Libros'),
(77, 6, 'Agendas'),
(78, 6, 'Folletos'),
(79, 6, 'Hojas Impresas'),
(80, 6, 'Hojas Membretadas'),
(81, 6, 'Libretas'),
(82, 6, 'Libros 1 Color'),
(83, 6, 'Papel Ministro'),
(84, 6, 'Papel Perforado'),
(85, 6, 'Papeletas'),
(86, 6, 'Peridicos'),
(87, 6, 'Revistas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_detalle_orden`
--

CREATE TABLE `tb_detalle_orden` (
  `id_do` int(11) NOT NULL,
  `id_tb_ordenes` int(11) NOT NULL,
  `id_tb_descripcion_servicios` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Valor_Unitario` decimal(8,2) DEFAULT NULL,
  `Descripcion` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleados`
--

CREATE TABLE `tb_empleados` (
  `id_tb_empleados` int(11) NOT NULL,
  `tb_empleados` varchar(45) DEFAULT NULL,
  `id_tb_tipo_empleados` int(11) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_empleados`
--

INSERT INTO `tb_empleados` (`id_tb_empleados`, `tb_empleados`, `id_tb_tipo_empleados`, `condicion`) VALUES
(1, 'Paulina Bravo', 3, 1),
(2, 'Juan Lema', 1, 1),
(3, 'Alvaro Mera', 2, 1),
(4, 'Fernando Guerra', 5, 1),
(5, 'df', 1, 1),
(6, 'Victor', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ordenes`
--

CREATE TABLE `tb_ordenes` (
  `id_tb_ordenes` int(11) NOT NULL,
  `Fecha_de_Inicio` datetime DEFAULT CURRENT_TIMESTAMP,
  `Fecha_de_Entrega` datetime DEFAULT NULL,
  `Revision_de_Diseno` datetime DEFAULT NULL,
  `Sub_Total` decimal(8,2) DEFAULT NULL,
  `IVA` decimal(8,2) DEFAULT NULL,
  `Abono` decimal(8,2) DEFAULT NULL,
  `Observaciones` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_tb_cliente` int(11) NOT NULL,
  `id_tb_empleados` int(11) NOT NULL,
  `condicion` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_procesos`
--

CREATE TABLE `tb_procesos` (
  `id_tb_procesos` int(11) NOT NULL,
  `tb_ordenes_id_tb_ordenes` int(11) NOT NULL,
  `id_tb_descripcion_procesos` int(11) NOT NULL,
  `tb_fecha_hora` datetime DEFAULT NULL,
  `id_tb_empleados` int(11) NOT NULL,
  `id_tb_empleados1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios`
--

CREATE TABLE `tb_servicios` (
  `id_tb_Servicios` int(11) NOT NULL,
  `Servicio` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tb_servicios`
--

INSERT INTO `tb_servicios` (`id_tb_Servicios`, `Servicio`) VALUES
(1, 'Comprobantes'),
(2, 'Xerox Digital'),
(3, 'Offset 1 - 2 Colores'),
(4, 'Offset Full Color'),
(5, 'Gigantografias'),
(6, 'MOZP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_empleados`
--

CREATE TABLE `tb_tipo_empleados` (
  `id_tb_tipo_empleados` int(11) NOT NULL,
  `tipo_empleados` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_tipo_empleados`
--

INSERT INTO `tb_tipo_empleados` (`id_tb_tipo_empleados`, `tipo_empleados`) VALUES
(1, 'Producción'),
(2, 'Diseñadores'),
(3, 'Ventas'),
(4, 'Gerencia'),
(5, 'Corporativos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `condicion` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `condicion`) VALUES
(2, 'Santiago Ona Sanchez', 'santysos@hotmail.com', '$2y$10$HFoDaUJlDtqyoi.mfO.P6ekAFhzwgrOYAfGoUQbPudVBYCRgRId4O', '58A114247DGLwLKwi6fr5zJUTBgBTtWhy1I6cFO6mUPHjT0bc2bU2xtICpYu', '2017-04-07 20:53:19', '2017-04-07 20:53:19', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_tb_cliente`);

--
-- Indices de la tabla `tb_descripcion_procesos`
--
ALTER TABLE `tb_descripcion_procesos`
  ADD PRIMARY KEY (`id_tb_descripcion_procesos`);

--
-- Indices de la tabla `tb_descripcion_servicios`
--
ALTER TABLE `tb_descripcion_servicios`
  ADD PRIMARY KEY (`id_tb_descripcion_servicios`),
  ADD KEY `fk_tb_descripcion_servicios_tb_servicios1_idx` (`id_tb_Servicios`);

--
-- Indices de la tabla `tb_detalle_orden`
--
ALTER TABLE `tb_detalle_orden`
  ADD PRIMARY KEY (`id_do`),
  ADD KEY `fk_tb_detalle_orden_tb_descripcion_servicios1_idx1` (`id_tb_descripcion_servicios`),
  ADD KEY `fk_tb_detalle_orden_tb_ordenes1_idx1` (`id_tb_ordenes`);

--
-- Indices de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD PRIMARY KEY (`id_tb_empleados`),
  ADD KEY `fk_tb_empleados_tb_tipo_empleados_idx` (`id_tb_tipo_empleados`);

--
-- Indices de la tabla `tb_ordenes`
--
ALTER TABLE `tb_ordenes`
  ADD PRIMARY KEY (`id_tb_ordenes`),
  ADD KEY `fk_tb_ordenes_tb_cliente1_idx` (`id_tb_cliente`),
  ADD KEY `fk_tb_ordenes_tb_empleados1_idx` (`id_tb_empleados`);

--
-- Indices de la tabla `tb_procesos`
--
ALTER TABLE `tb_procesos`
  ADD PRIMARY KEY (`id_tb_procesos`),
  ADD KEY `fk_tb_procesos_tb_descripcion_procesos1_idx` (`id_tb_descripcion_procesos`),
  ADD KEY `fk_tb_procesos_tb_empleados1_idx` (`id_tb_empleados`),
  ADD KEY `fk_tb_procesos_tb_ordenes1_idx` (`tb_ordenes_id_tb_ordenes`),
  ADD KEY `fk_tb_procesos_tb_empleados2_idx` (`id_tb_empleados1`);

--
-- Indices de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  ADD PRIMARY KEY (`id_tb_Servicios`);

--
-- Indices de la tabla `tb_tipo_empleados`
--
ALTER TABLE `tb_tipo_empleados`
  ADD PRIMARY KEY (`id_tb_tipo_empleados`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_tb_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
--
-- AUTO_INCREMENT de la tabla `tb_descripcion_procesos`
--
ALTER TABLE `tb_descripcion_procesos`
  MODIFY `id_tb_descripcion_procesos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_descripcion_servicios`
--
ALTER TABLE `tb_descripcion_servicios`
  MODIFY `id_tb_descripcion_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `tb_detalle_orden`
--
ALTER TABLE `tb_detalle_orden`
  MODIFY `id_do` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  MODIFY `id_tb_empleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tb_ordenes`
--
ALTER TABLE `tb_ordenes`
  MODIFY `id_tb_ordenes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_procesos`
--
ALTER TABLE `tb_procesos`
  MODIFY `id_tb_procesos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  MODIFY `id_tb_Servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tb_tipo_empleados`
--
ALTER TABLE `tb_tipo_empleados`
  MODIFY `id_tb_tipo_empleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_descripcion_servicios`
--
ALTER TABLE `tb_descripcion_servicios`
  ADD CONSTRAINT `fk_tb_descripcion_servicios_tb_servicios1` FOREIGN KEY (`id_tb_Servicios`) REFERENCES `tb_servicios` (`id_tb_Servicios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_detalle_orden`
--
ALTER TABLE `tb_detalle_orden`
  ADD CONSTRAINT `fk_tb_detalle_orden_tb_descripcion_servicios1` FOREIGN KEY (`id_tb_descripcion_servicios`) REFERENCES `tb_descripcion_servicios` (`id_tb_descripcion_servicios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_detalle_orden_tb_ordenes1` FOREIGN KEY (`id_tb_ordenes`) REFERENCES `tb_ordenes` (`id_tb_ordenes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD CONSTRAINT `fk_tb_empleados_tb_tipo_empleados` FOREIGN KEY (`id_tb_tipo_empleados`) REFERENCES `tb_tipo_empleados` (`id_tb_tipo_empleados`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_ordenes`
--
ALTER TABLE `tb_ordenes`
  ADD CONSTRAINT `fk_tb_ordenes_tb_cliente1` FOREIGN KEY (`id_tb_cliente`) REFERENCES `tb_cliente` (`id_tb_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_ordenes_tb_empleados1` FOREIGN KEY (`id_tb_empleados`) REFERENCES `tb_empleados` (`id_tb_empleados`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_procesos`
--
ALTER TABLE `tb_procesos`
  ADD CONSTRAINT `fk_tb_procesos_tb_descripcion_procesos1` FOREIGN KEY (`id_tb_descripcion_procesos`) REFERENCES `tb_descripcion_procesos` (`id_tb_descripcion_procesos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_procesos_tb_empleados1` FOREIGN KEY (`id_tb_empleados`) REFERENCES `tb_empleados` (`id_tb_empleados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_procesos_tb_empleados2` FOREIGN KEY (`id_tb_empleados1`) REFERENCES `tb_empleados` (`id_tb_empleados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_procesos_tb_ordenes1` FOREIGN KEY (`tb_ordenes_id_tb_ordenes`) REFERENCES `tb_ordenes` (`id_tb_ordenes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
