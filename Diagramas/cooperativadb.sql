-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2020 a las 17:39:16
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
  `ace_id` decimal(10,0) NOT NULL,
  `ace_fecha_intento` varchar(12) NOT NULL,
  `ace_tipo_acceso` varchar(20) NOT NULL,
  `ace_observaciones` varchar(250) DEFAULT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` decimal(10,0) NOT NULL,
  `cli_cuenta_ahorros` decimal(10,0) NOT NULL,
  `cli_fecha_registro` varchar(12) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `cre_id` decimal(10,0) NOT NULL,
  `clientes_cli_cuenta_ahorros` decimal(10,0) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `cre_tipo_amortizacion` varchar(20) NOT NULL,
  `cre_monto` float NOT NULL,
  `cre_plazo` varchar(25) NOT NULL,
  `cre_numero_cuotas` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `cuo_id` decimal(10,0) NOT NULL,
  `cuo_fecha` date NOT NULL,
  `cuot_monto` float NOT NULL,
  `cuo_estado` varchar(20) NOT NULL,
  `creditos_cre_id` decimal(10,0) NOT NULL,
  `estadocuentas_ect_id` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `dep_id` decimal(10,0) ,
  `dep_iden_depositante` varchar(13) ,
  `dep_nombre_depositante1` varchar(250) ,
  `dep_monto` float ,
  `clientes_cli_cuenta_ahorros` decimal(10,0) ,
  `usuarios_usu_usuario` varchar(50),
  `estadocuentas_ect_id` decimal(10,0),
  `dep_fecha` varchar (13)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocuentas`
--

CREATE TABLE `estadocuentas` (
  `ect_id` decimal(10,0) NOT NULL,
  `ect_fecha` date NOT NULL,
  `ect_tipo_operacion` varchar(25) NOT NULL,
  `ect_saldo` float NOT NULL,
  `clientes_cli_cuenta_ahorros` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `per_id` decimal(10,0) NOT NULL,
  `per_identificacion` varchar(13) NOT NULL,
  `per_nombre` varchar(250) NOT NULL,
  `per_apellido` varchar(250) NOT NULL,
  `per_telefono` varchar(50) NOT NULL,
  `per_direccion` varchar(250) NOT NULL,
  `per_correo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiros`
--

CREATE TABLE `retiros` (
  `ret_id` decimal(10,0) NOT NULL,
  `ret_identificacion_beneficiario` varchar(13) NOT NULL,
  `ret_monto` float NOT NULL,
  `ret_fecha` date NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `clientes_cli_cuenta_ahorros` decimal(10,0) NOT NULL,
  `estadocuentas_ect_id` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` decimal(10,0) NOT NULL,
  `usu_usuario` varchar(50) NOT NULL,
  `usu_password` varchar(50) NOT NULL,
  `usu_tipo_usuario` varchar(25) NOT NULL,
  `usu_fecha_registro` varchar(50) NOT NULL,
  `personas_per_identificacion` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD UNIQUE KEY `retiros_ret_identificacion_beneficiario_un` (`ret_identificacion_beneficiario`),
  ADD KEY `retiros_clientes_fk` (`clientes_cli_cuenta_ahorros`),
  ADD KEY `retiros_estadocuentas_fk` (`estadocuentas_ect_id`),
  ADD KEY `retiros_usuarios_fk` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_usuario`),
  ADD UNIQUE KEY `usuarios__idx` (`personas_per_identificacion`);

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
