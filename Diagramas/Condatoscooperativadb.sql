-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2020 a las 19:22:46
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cooperativadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acessos`
--

CREATE TABLE `acessos` (
  `ace_id` int(11) NOT NULL,
  `ace_fecha_intento` varchar(12) NOT NULL,
  `ace_tipo_acceso` varchar(20) NOT NULL,
  `ace_observaciones` varchar(250) DEFAULT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acessos`
--

INSERT INTO `acessos` (`ace_id`, `ace_fecha_intento`, `ace_tipo_acceso`, `ace_observaciones`, `usuarios_usu_usuario`) VALUES
(1, '15/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(2, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(3, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(4, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(5, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(6, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(7, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(8, '15/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(9, '15/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(10, '15/06/2020', 'Cliente', 'conectado', 'remigio2'),
(11, '15/06/2020', 'Cliente', 'conectado', 'remigio2'),
(12, '15/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(13, '15/06/2020', 'Cliente', 'conectado', 'remigio2'),
(14, '15/06/2020', 'Cliente', 'conectado', 'remigio2'),
(15, '15/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(16, '15/06/2020', 'Cliente', 'conectado', 'remigio3'),
(17, '15/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(18, '15/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(19, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(20, '15/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(21, '15/06/2020', 'Cliente', 'conectado', 'cliente1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_cuenta_ahorros` int(11) NOT NULL,
  `cli_fecha_registro` varchar(12) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_cuenta_ahorros`, `cli_fecha_registro`, `usuarios_usu_usuario`) VALUES
(0, 1, '12/06/2020', 'cliente1'),
(0, 2, '12/06/2020', 'cliente2'),
(0, 3, '12/06/2020', 'cliente3'),
(0, 4, '12/06/2020', 'cliente4'),
(0, 5, '12/06/2020', 'cliente5'),
(0, 6, '12/06/2020', 'cliente6'),
(0, 7, '12/06/2020', 'cliente7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `cre_id` int(11) NOT NULL,
  `clientes_cli_cuenta_ahorros` int(11) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `cre_tipo_amortizacion` varchar(20) NOT NULL,
  `cre_monto` float NOT NULL,
  `cre_plazo` varchar(25) NOT NULL,
  `cre_numero_cuotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `cuo_id` int(11) NOT NULL,
  `cuo_fecha` date NOT NULL,
  `cuot_monto` float NOT NULL,
  `cuo_estado` varchar(20) NOT NULL,
  `creditos_cre_id` int(11) NOT NULL,
  `estadocuentas_ect_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `dep_id` int(11) NOT NULL,
  `dep_iden_depositante` varchar(13) NOT NULL,
  `dep_nombre_depositante1` varchar(250) NOT NULL,
  `dep_monto` float NOT NULL,
  `clientes_cli_cuenta_ahorros` int(11) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `estadocuentas_ect_id` int(11) NOT NULL,
  `dep_fecha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `depositos`
--

INSERT INTO `depositos` (`dep_id`, `dep_iden_depositante`, `dep_nombre_depositante1`, `dep_monto`, `clientes_cli_cuenta_ahorros`, `usuarios_usu_usuario`, `estadocuentas_ect_id`, `dep_fecha`) VALUES
(1, '154654', 'juan', 10, 1, 'AJADAN', 1, '12/06/2020'),
(2, '154654', 'juan', 20, 1, 'AJADAN', 1, '12/06/2020'),
(3, '15151', 'depo', 15, 2, 'AJADAN', 1, '15/06/2020'),
(4, '4511', 'depo', 15, 1, 'AJADAN', 1, '15/06/2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocuentas`
--

CREATE TABLE `estadocuentas` (
  `ect_id` int(11) NOT NULL,
  `ect_fecha` date NOT NULL,
  `ect_tipo_operacion` varchar(25) NOT NULL,
  `ect_saldo` float NOT NULL,
  `clientes_cli_cuenta_ahorros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estadocuentas`
--

INSERT INTO `estadocuentas` (`ect_id`, `ect_fecha`, `ect_tipo_operacion`, `ect_saldo`, `clientes_cli_cuenta_ahorros`) VALUES
(1, '0000-00-00', 'INICIAL', 5, 1),
(2, '0000-00-00', 'INICIAL', 5, 2),
(3, '0000-00-00', 'INICIAL', 5, 3),
(4, '0000-00-00', 'INICIAL', 5, 4),
(5, '0000-00-00', 'INICIAL', 5, 5),
(6, '2020-06-12', 'INICIAL', 5, 6),
(7, '2020-06-12', 'INICIAL', 5, 7),
(8, '2020-06-12', 'RETIRO', 2, 2),
(9, '2020-06-12', 'DEPOSITO', 25, 1),
(10, '2020-06-12', 'RETIRO', 15, 1),
(15, '2020-06-12', 'RETIRO', 5, 1),
(16, '2020-06-15', 'DEPOSITO', 17, 2),
(17, '2020-06-15', 'RETIRO', 12, 2),
(18, '2020-06-15', 'DEPOSITO', 20, 1),
(19, '2020-06-15', 'RETIRO', 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `per_id` int(11) NOT NULL,
  `per_identificacion` varchar(13) NOT NULL,
  `per_nombre` varchar(250) NOT NULL,
  `per_apellido` varchar(250) NOT NULL,
  `per_telefono` varchar(50) NOT NULL,
  `per_direccion` varchar(250) NOT NULL,
  `per_correo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`per_id`, `per_identificacion`, `per_nombre`, `per_apellido`, `per_telefono`, `per_direccion`, `per_correo`) VALUES
(1, '0106405236', 'ANGEL', 'JADAN', '0990537351', 'JADAN', 'ANGEL.JADAN12@GMAIL.COM'),
(0, '01645032234', 'cliente1', 'cliente1', '51515', 'cuenca', 'cli@.com'),
(0, '01645032264', 'CAJERO3', 'CAJERO3', '595121', 'Cuenca', 'ajadanc@est.ups.edu.ec'),
(0, '016450322641', 'CAJERO1', 'cajero1', '048494', 'cuenca', 'caj'),
(0, '1155121', 'Abg', 'ab', '454851', 'cuenca', 'ajadanc@est.ups.edu.ec'),
(0, '11551216', 'Abg', 'ab', '454851', 'cuenca', 'ajadanc@est.ups.edu.ec'),
(0, '12315465', 'cliente2', 'cliente2', '048494', 'cuenca', 'caj'),
(0, '1231546535', 'cliente3', 'cliente3', '048494', 'lkjflkasj', 'caj'),
(0, '12315465356', 'cliente4', 'cliente4', '048494', 'lkjflkasj', 'caj'),
(0, '12315465358', 'CAJERO2', 'cajero2', '0990537351', 'Jadan', 'ajadanc@est.ups.edu.ec'),
(0, '1231546560', 'cliente6', 'cliente6', '048494', 'lkjflkasj', 'caj'),
(0, '1231546561', 'cliente7', 'cliente7', '048494', 'lkjflkasj', 'caj'),
(0, '1231546569', 'cliente5', 'cliente5', '048494', 'lkjflkasj', 'caj'),
(0, '12456', 'CAJERO4', 'CAJERO4', '4846112', 'Cuenca', 'ajadanc@est.ups.edu.ec'),
(0, '4554655', 'Remigio', 'Hurtado', '459845', 'cuenca', 'remigiohurtado@gmail.com'),
(0, '45546556', 'Remigio', 'Hurtado', '545', 'cuenca', 'remigiohurtado@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiros`
--

CREATE TABLE `retiros` (
  `ret_id` int(11) NOT NULL,
  `ret_identificacion_beneficiario` varchar(13) NOT NULL,
  `ret_monto` float NOT NULL,
  `ret_fecha` date NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `clientes_cli_cuenta_ahorros` int(11) NOT NULL,
  `estadocuentas_ect_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `retiros`
--

INSERT INTO `retiros` (`ret_id`, `ret_identificacion_beneficiario`, `ret_monto`, `ret_fecha`, `usuarios_usu_usuario`, `clientes_cli_cuenta_ahorros`, `estadocuentas_ect_id`) VALUES
(1, '1545445454', 3, '2020-06-12', 'CAJERO1', 2, 8),
(3, '1545445454', 10, '2020-06-12', 'CAJERO1', 1, 15),
(4, '165161', 5, '2020-06-15', 'AJADAN', 2, 17),
(5, '65612', 1, '2020-06-15', 'AJADAN', 1, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) DEFAULT NULL,
  `usu_usuario` varchar(50) NOT NULL,
  `usu_password` varchar(50) NOT NULL,
  `usu_tipo_usuario` varchar(25) NOT NULL,
  `usu_fecha_registro` varchar(50) NOT NULL,
  `personas_per_identificacion` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_usuario`, `usu_password`, `usu_tipo_usuario`, `usu_fecha_registro`, `personas_per_identificacion`) VALUES
(NULL, 'AJADAN', 'Angel', 'Administrador', '12/6/2020', '0106405236'),
(0, 'CAJERO1', 'cajero1', 'Cajero', '12/06/2020', '016450322641'),
(0, 'CAJERO2', '32G8bV', 'Cajero', '12/06/2020', '12315465358'),
(0, 'CAJERO3', 'OQX9eq', 'Cajero', '12/06/2020', '01645032264'),
(0, 'CAJERO4', 'sNBMWi', 'Cajero', '12/06/2020', '12456'),
(0, 'CAJERO6', 'Kn0Llm', 'Cajero', '15/06/2020', '11551216'),
(0, 'cliente1', 'cliente1', 'Cliente', '12/06/2020', '01645032234'),
(0, 'cliente2', 'SMqMYH', 'Cliente', '12/06/2020', '12315465'),
(0, 'cliente3', 'AiZiJB', 'Cliente', '12/06/2020', '1231546535'),
(0, 'cliente4', 'ocWvTR', 'Cliente', '12/06/2020', '12315465356'),
(0, 'cliente5', 'vDgT9X', 'Cliente', '12/06/2020', '1231546569'),
(0, 'cliente6', 'MC9V2N', 'Cliente', '12/06/2020', '1231546560'),
(0, 'cliente7', 'qcY9Fq', 'Cliente', '12/06/2020', '1231546561'),
(0, 'remigio2', 'bj4nlp', 'Cliente', '15/06/2020', '4554655'),
(0, 'remigio3', 'weQ90Z', 'Cliente', '15/06/2020', '45546556');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`ace_id`),
  ADD KEY `acessos_usuarios_fk` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_cuenta_ahorros`),
  ADD UNIQUE KEY `clientes__idx` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`cre_id`),
  ADD KEY `creditos_clientes_fk` (`clientes_cli_cuenta_ahorros`),
  ADD KEY `creditos_usuarios_fk` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`cuo_id`),
  ADD KEY `cuotas_creditos_fk` (`creditos_cre_id`),
  ADD KEY `cuotas_estadocuentas_fk` (`estadocuentas_ect_id`);

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`dep_id`),
  ADD KEY `depositos_clientes_fk` (`clientes_cli_cuenta_ahorros`),
  ADD KEY `depositos_estadocuentas_fk` (`estadocuentas_ect_id`),
  ADD KEY `depositos_usuarios_fk` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `estadocuentas`
--
ALTER TABLE `estadocuentas`
  ADD PRIMARY KEY (`ect_id`),
  ADD KEY `estadocuentas_clientes_fk` (`clientes_cli_cuenta_ahorros`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`per_identificacion`);

--
-- Indices de la tabla `retiros`
--
ALTER TABLE `retiros`
  ADD PRIMARY KEY (`ret_id`),
  ADD KEY `retiros_clientes_fk` (`clientes_cli_cuenta_ahorros`),
  ADD KEY `retiros_estadocuentas_fk` (`estadocuentas_ect_id`),
  ADD KEY `retiros_usuarios_fk` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_usuario`),
  ADD UNIQUE KEY `usuarios__id` (`personas_per_identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acessos`
--
ALTER TABLE `acessos`
  MODIFY `ace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `cuo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `depositos`
--
ALTER TABLE `depositos`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estadocuentas`
--
ALTER TABLE `estadocuentas`
  MODIFY `ect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `retiros`
--
ALTER TABLE `retiros`
  MODIFY `ret_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acessos`
--
ALTER TABLE `acessos`
  ADD CONSTRAINT `acessos_usuarios_fk` FOREIGN KEY (`usuarios_usu_usuario`) REFERENCES `usuarios` (`usu_usuario`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_usuarios_fk` FOREIGN KEY (`usuarios_usu_usuario`) REFERENCES `usuarios` (`usu_usuario`);

--
-- Filtros para la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD CONSTRAINT `creditos_clientes_fk` FOREIGN KEY (`clientes_cli_cuenta_ahorros`) REFERENCES `clientes` (`cli_cuenta_ahorros`),
  ADD CONSTRAINT `creditos_usuarios_fk` FOREIGN KEY (`usuarios_usu_usuario`) REFERENCES `usuarios` (`usu_usuario`);

--
-- Filtros para la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD CONSTRAINT `cuotas_creditos_fk` FOREIGN KEY (`creditos_cre_id`) REFERENCES `creditos` (`cre_id`),
  ADD CONSTRAINT `cuotas_estadocuentas_fk` FOREIGN KEY (`estadocuentas_ect_id`) REFERENCES `estadocuentas` (`ect_id`);

--
-- Filtros para la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD CONSTRAINT `depositos_clientes_fk` FOREIGN KEY (`clientes_cli_cuenta_ahorros`) REFERENCES `clientes` (`cli_cuenta_ahorros`),
  ADD CONSTRAINT `depositos_estadocuentas_fk` FOREIGN KEY (`estadocuentas_ect_id`) REFERENCES `estadocuentas` (`ect_id`),
  ADD CONSTRAINT `depositos_usuarios_fk` FOREIGN KEY (`usuarios_usu_usuario`) REFERENCES `usuarios` (`usu_usuario`);

--
-- Filtros para la tabla `estadocuentas`
--
ALTER TABLE `estadocuentas`
  ADD CONSTRAINT `estadocuentas_clientes_fk` FOREIGN KEY (`clientes_cli_cuenta_ahorros`) REFERENCES `clientes` (`cli_cuenta_ahorros`);

--
-- Filtros para la tabla `retiros`
--
ALTER TABLE `retiros`
  ADD CONSTRAINT `retiros_clientes_fk` FOREIGN KEY (`clientes_cli_cuenta_ahorros`) REFERENCES `clientes` (`cli_cuenta_ahorros`),
  ADD CONSTRAINT `retiros_estadocuentas_fk` FOREIGN KEY (`estadocuentas_ect_id`) REFERENCES `estadocuentas` (`ect_id`),
  ADD CONSTRAINT `retiros_usuarios_fk` FOREIGN KEY (`usuarios_usu_usuario`) REFERENCES `usuarios` (`usu_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_personas_fk` FOREIGN KEY (`personas_per_identificacion`) REFERENCES `personas` (`per_identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
