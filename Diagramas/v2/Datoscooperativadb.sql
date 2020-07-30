-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2020 a las 05:20:34
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
(21, '15/06/2020', 'Cliente', 'conectado', 'cliente1'),
(31, '26/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(35, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(39, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(40, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(41, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(42, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(43, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(44, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(45, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(46, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(47, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(48, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(49, '27/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(50, '27/06/2020', 'Administrador', 'conectado', 'AJADAN'),
(51, '27/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(52, '27/06/2020', 'Cajero', 'conectado', 'CAJERO1'),
(53, '11/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(54, '11/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(55, '11/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(56, '14/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(57, '15/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(58, '15/07/2020', 'Cajero', 'conectado', 'CAJERO1'),
(59, '15/07/2020', 'Cliente', 'conectado', 'cliente1'),
(60, '18/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(61, '18/07/2020', 'Cajero', 'conectado', 'CAJERO1'),
(62, '20/07/2020', 'Administrador', 'conectado', 'AJADAN'),
(63, '20/07/2020', 'Administrador', 'conectado', 'AJADAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_cuenta_ahorros` int(11) NOT NULL,
  `cli_fecha_registro` varchar(12) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cli_cuenta_ahorros`, `cli_fecha_registro`, `usuarios_usu_usuario`) VALUES
(1, '12/06/2020', 'cliente1'),
(2, '12/06/2020', 'cliente2'),
(3, '12/06/2020', 'cliente3'),
(4, '12/06/2020', 'cliente4'),
(5, '12/06/2020', 'cliente5'),
(6, '12/06/2020', 'cliente6'),
(7, '12/06/2020', 'cliente7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `cre_id` int(11) NOT NULL,
  `cre_tipo_amortizacion` varchar(20) NOT NULL,
  `cre_monto` float(12,2) NOT NULL,
  `cre_plazo` int(2) NOT NULL,
  `cre_numero_cuotas` int(2) NOT NULL,
  `cre_estado` varchar(50) NOT NULL,
  `cre_interes` float(12,2) NOT NULL,
  `cre_intereses_p` float(12,2) NOT NULL,
  `cre_act_laboral` varchar(250) NOT NULL,
  `cre_empresa` varchar(250) NOT NULL,
  `cre_dir_empresa` varchar(250) NOT NULL,
  `cre_tiempo_empleo` int(11) NOT NULL,
  `cre_ingreso` float(12,2) NOT NULL,
  `cre_tipo` varchar(20) NOT NULL,
  `cre_proposito` varchar(250) NOT NULL,
  `cre_avaluo` float(12,2) NOT NULL,
  `cre_garante` varchar(50) NOT NULL,
  `cre_copia_cedula` varchar(250) DEFAULT NULL,
  `cre_copia_planilla` varchar(250) DEFAULT NULL,
  `cre_copia_rol` varchar(250) DEFAULT NULL,
  `cre_edad` int(11) NOT NULL,
  `Personas_per_identificacion` varchar(50) NOT NULL,
  `Localidades_loc_id` int(11) NOT NULL,
  `cre_total` float(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`cre_id`, `cre_tipo_amortizacion`, `cre_monto`, `cre_plazo`, `cre_numero_cuotas`, `cre_estado`, `cre_interes`, `cre_intereses_p`, `cre_act_laboral`, `cre_empresa`, `cre_dir_empresa`, `cre_tiempo_empleo`, `cre_ingreso`, `cre_tipo`, `cre_proposito`, `cre_avaluo`, `cre_garante`, `cre_copia_cedula`, `cre_copia_planilla`, `cre_copia_rol`, `cre_edad`, `Personas_per_identificacion`, `Localidades_loc_id`, `cre_total`) VALUES
(1, 'Pendiente', 1500.00, 1500, 1500, 'Pendiente', 0.00, 0.00, '2', 'jjlkjlk', 'jlkjklj', 2, 1200.00, '2', '2', 30000.00, 'na', '', '', '', 18, '01645032234', 3, 0.00),
(2, 'Pendiente', 1500.00, 1500, 1500, 'Pendiente', 0.00, 0.00, '2', 'jjlkjlk', 'jlkjklj', 2, 1200.00, '3', '3', 30000.00, 'na', '', '', '', 18, '01645032234', 3, 0.00),
(5, 'Pendiente', 1500.00, 1500, 1500, 'Pendiente', 0.00, 0.00, '2', 'jjlkjlk', 'jlkjklj', 2, 1200.00, '3', '3', 30000.00, 'na', '', '', '', 18, '01645032234', 3, 0.00),
(6, 'Pendiente', 1500.00, 1500, 1500, 'Pendiente', 0.00, 0.00, '2', 'jjlkjlk', 'jlkjklj', 2, 1200.00, '3', '3', 30000.00, 'na', '', '', '', 18, '01645032234', 3, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `cuo_id` int(11) NOT NULL,
  `cuo_monto` float NOT NULL,
  `creditos_cre_id` int(11) NOT NULL,
  `estadocuentas_ect_id` int(11) NOT NULL,
  `cuo_numero` int(11) NOT NULL,
  `cuo_fecha_vencimiento` date NOT NULL,
  `cuo_fecha_pago` date DEFAULT NULL,
  `cuo_estado` varchar(20) NOT NULL
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
(4, '4511', 'depo', 15, 1, 'AJADAN', 1, '15/06/2020'),
(5, '154654', 'juan', 30, 1, 'AJADAN', 1, '15/07/2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocuentas`
--

CREATE TABLE `estadocuentas` (
  `ect_id` int(11) NOT NULL,
  `ect_fecha` date NOT NULL,
  `ect_tipo_operacion` varchar(25) NOT NULL,
  `ect_saldo` float NOT NULL,
  `clientes_cli_cuenta_ahorros` int(11) NOT NULL,
  `ect_monto` float(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estadocuentas`
--

INSERT INTO `estadocuentas` (`ect_id`, `ect_fecha`, `ect_tipo_operacion`, `ect_saldo`, `clientes_cli_cuenta_ahorros`, `ect_monto`) VALUES
(1, '0000-00-00', 'INICIAL', 5, 1, 0.00),
(2, '0000-00-00', 'INICIAL', 5, 2, 0.00),
(3, '0000-00-00', 'INICIAL', 5, 3, 0.00),
(4, '0000-00-00', 'INICIAL', 5, 4, 0.00),
(5, '0000-00-00', 'INICIAL', 5, 5, 0.00),
(6, '2020-06-12', 'INICIAL', 5, 6, 0.00),
(7, '2020-06-12', 'INICIAL', 5, 7, 0.00),
(8, '2020-06-12', 'RETIRO', 2, 2, 0.00),
(9, '2020-06-12', 'DEPOSITO', 25, 1, 0.00),
(10, '2020-06-12', 'RETIRO', 15, 1, 0.00),
(15, '2020-06-12', 'RETIRO', 5, 1, 0.00),
(16, '2020-06-15', 'DEPOSITO', 17, 2, 0.00),
(17, '2020-06-15', 'RETIRO', 12, 2, 0.00),
(18, '2020-06-15', 'DEPOSITO', 20, 1, 0.00),
(19, '2020-06-15', 'RETIRO', 19, 1, 0.00),
(20, '2020-07-15', 'DEPOSITO', 49, 1, 0.00),
(21, '2020-07-18', 'RETIRO', 49, 1, 0.00),
(22, '2020-07-08', 'N/D Credito', 29, 1, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `loc_id` int(11) NOT NULL,
  `loc_nombre` varchar(250) NOT NULL,
  `Localidades_loc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`loc_id`, `loc_nombre`, `Localidades_loc_id`) VALUES
(1, 'ECUADOR', 0),
(2, 'AZUAY', 1),
(3, 'CUENCA', 2),
(4, 'GUALACEO', 2),
(5, 'CAÑAR', 1),
(6, 'AZOGUES', 4);

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
  `per_correo` varchar(250) NOT NULL,
  `per_sexo` varchar(10) NOT NULL,
  `per_tipo_documento` varchar(20) NOT NULL,
  `per_estado_civil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`per_id`, `per_identificacion`, `per_nombre`, `per_apellido`, `per_telefono`, `per_direccion`, `per_correo`, `per_sexo`, `per_tipo_documento`, `per_estado_civil`) VALUES
(1, '0106405236', 'ANGEL', 'JADAN', '0990537351', 'JADAN', 'angel.jadan12@gmail.com', 'Masculino', 'Cedula', 'Solter@'),
(0, '01645032234', 'cliente1', 'cliente1', '51515', 'cuenca', 'cli@prueba1.com', '', '', ''),
(0, '01645032264', 'CAJERO3', 'CAJERO3', '595121', 'Cuenca', 'ajadanc@est.ups.edu.ec', 'Masculino', 'Pasaporte', ''),
(0, '016450322641', 'CAJERO1', 'cajero1', '048494', 'cuenca', 'caj', 'Masculino', 'Pasaporte', ''),
(0, '1155121', 'Abg', 'ab', '454851', 'cuenca', 'ajadanc@est.ups.edu.ec', 'Masculino', 'Pasaporte', 'Casad@'),
(0, '11551216', 'Abg', 'ab', '454851', 'cuenca', 'ajadanc@est.ups.edu.ec', 'Masculino', 'Pasaporte', 'Casad@'),
(0, '12315465', 'cliente2', 'cliente2', '048494', 'cuenca', 'caj', '', '', ''),
(0, '1231546535', 'cliente3', 'cliente3', '048494', 'lkjflkasj', 'caj', '', '', ''),
(0, '12315465356', 'cliente4', 'cliente4', '048494', 'lkjflkasj', 'caj', '', '', ''),
(0, '12315465358', 'CAJERO2', 'cajero2', '0990537351', 'Jadan', 'ajadanc@est.ups.edu.ec', 'Femenino', 'Pasaporte', ''),
(0, '1231546560', 'cliente6', 'cliente6', '048494', 'lkjflkasj', 'caj', '', '', ''),
(0, '1231546561', 'cliente7', 'cliente7', '048494', 'lkjflkasj', 'caj', '', '', ''),
(0, '1231546569', 'cliente5', 'cliente5', '048494', 'lkjflkasj', 'caj', '', '', ''),
(0, '12456', 'CAJERO4', 'CAJERO4', '4846112', 'Cuenca', 'ajadanc@est.ups.edu.ec', '', '', ''),
(0, '4554655', 'Remigio', 'Hurtado', '459845', 'cuenca', 'remigiohurtado@gmail.com', '', '', ''),
(0, '45546556', 'Remigio', 'Hurtado', '545', 'cuenca', 'remigiohurtado@gmail.com', '', '', '');

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
  `per_id` int(11) NOT NULL,
  `usu_usuario` varchar(50) NOT NULL,
  `usu_password` varchar(50) NOT NULL,
  `usu_tipo_usuario` varchar(25) NOT NULL,
  `usu_fecha_registro` varchar(50) NOT NULL,
  `personas_per_identificacion` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`per_id`, `usu_usuario`, `usu_password`, `usu_tipo_usuario`, `usu_fecha_registro`, `personas_per_identificacion`) VALUES
(2, 'AJADAN', 'Angel', 'Administrador', '12/6/2020', '0106405236'),
(3, 'CAJERO1', 'cajero1', 'Cajero', '12/06/2020', '016450322641'),
(4, 'CAJERO2', '32G8bV', 'Cajero', '12/06/2020', '12315465358'),
(5, 'CAJERO3', 'OQX9eq', 'Cajero', '12/06/2020', '01645032264'),
(6, 'CAJERO4', 'sNBMWi', 'Cajero', '12/06/2020', '12456'),
(7, 'CAJERO6', 'Kn0Llm', 'Cajero', '15/06/2020', '11551216'),
(8, 'cliente1', 'cliente1', 'Cliente', '12/06/2020', '01645032234'),
(9, 'cliente2', 'SMqMYH', 'Cliente', '12/06/2020', '12315465'),
(10, 'cliente3', 'AiZiJB', 'Cliente', '12/06/2020', '1231546535'),
(11, 'cliente4', 'ocWvTR', 'Cliente', '12/06/2020', '12315465356'),
(12, 'cliente5', 'vDgT9X', 'Cliente', '12/06/2020', '1231546569'),
(13, 'cliente6', 'MC9V2N', 'Cliente', '12/06/2020', '1231546560'),
(14, 'cliente7', 'qcY9Fq', 'Cliente', '12/06/2020', '1231546561'),
(15, 'remigio2', 'bj4nlp', 'Cliente', '15/06/2020', '4554655'),
(16, 'remigio3', 'weQ90Z', 'Cliente', '15/06/2020', '45546556');

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
  ADD KEY `personas_personas_fk` (`Personas_per_identificacion`),
  ADD KEY `localidades_localidades_fk` (`Localidades_loc_id`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`cuo_id`),
  ADD KEY `cuotas_creditos_fk` (`creditos_cre_id`);

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
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`loc_id`);

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
  ADD UNIQUE KEY `usuarios__id` (`personas_per_identificacion`),
  ADD UNIQUE KEY `per_id` (`per_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acessos`
--
ALTER TABLE `acessos`
  MODIFY `ace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `cuo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `depositos`
--
ALTER TABLE `depositos`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estadocuentas`
--
ALTER TABLE `estadocuentas`
  MODIFY `ect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `retiros`
--
ALTER TABLE `retiros`
  MODIFY `ret_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  ADD CONSTRAINT `localidades_localidades_fk` FOREIGN KEY (`Localidades_loc_id`) REFERENCES `localidades` (`loc_id`),
  ADD CONSTRAINT `personas_personas_fk` FOREIGN KEY (`Personas_per_identificacion`) REFERENCES `personas` (`per_identificacion`);

--
-- Filtros para la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD CONSTRAINT `cuotas_creditos_fk` FOREIGN KEY (`creditos_cre_id`) REFERENCES `creditos` (`cre_id`);

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
