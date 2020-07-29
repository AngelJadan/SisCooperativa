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
  `ace_id` INT AUTO_INCREMENT NOT NULL,
  `ace_fecha_intento` varchar(12) NOT NULL,
  `ace_tipo_acceso` varchar(20) NOT NULL,
  `ace_observaciones` varchar(250) DEFAULT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  PRIMARY KEY(ace_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` INT NOT NULL,
  `cli_cuenta_ahorros` INT NOT NULL,
  `cli_fecha_registro` varchar(12) NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `cre_id` INT AUTO_INCREMENT NOT NULL,
  `cre_tipo_amortizacion` varchar(20) NOT NULL,
  `cre_monto` float(12,2) NOT NULL,
  `cre_plazo` INT(2) NOT NULL,
  `cre_numero_cuotas` INT(2) NOT NULL,
  `cre_estado` VARCHAR(50) NOT NULL,
  `cre_interes` FLOAT(12,2) NOT NULL,
  `cre_intereses_p` FLOAT(12,2) NOT NULL,
  `cre_act_laboral` VARCHAR(250) NOT NULL,
  `cre_empresa` VARCHAR(250) NOT NULL,
  `cre_dir_empresa` VARCHAR(250) NOT NULL,
  `cre_tiempo_empleo` INT NOT NULL,
  `cre_ingreso` FLOAT(12,2) NOT NULL,
  `cre_tipo` VARCHAR(20) NOT NULL,
  `cre_proposito` VARCHAR(250) NOT NULL,
  `cre_avaluo` FLOAT(12,2) NOT NULL,
  `cre_garante`	VARCHAR(50) NOT NULL,
  `cre_copia_cedula`	VARCHAR(250),
  `cre_copia_planilla` VARCHAR(250),
  `cre_copia_rol` VARCHAR(250),
  `cre_edad` INT NOT NULL,
  `Personas_per_identificacion` varchar(50) NOT NULL,
  `Localidades_loc_id` INT NOT NULL,
  PRIMARY KEY(cre_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `cuo_id` INT AUTO_INCREMENT NOT NULL,
  `cuo_monto` float NOT NULL,
  `creditos_cre_id` INT NOT NULL,
  `estadocuentas_ect_id` INT NOT NULL,
  `cuo_numero` INT  NOT NULL,
  `cuo_fecha_vencimiento` date not null,
  `cuo_fecha_pago` date,
  `cuo_estado` VARCHAR(20) NOT NULL,
  PRIMARY KEY(cuo_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `dep_id` INT AUTO_INCREMENT NOT NULL,
  `dep_iden_depositante` varchar(13) NOT NULL,
  `dep_nombre_depositante1` varchar(250) NOT NULL,
  `dep_monto` float NOT NULL,
  `clientes_cli_cuenta_ahorros` INT NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `estadocuentas_ect_id` INT NOT NULL,
  `dep_fecha` varchar(12) NOT NULL,
  PRIMARY KEY(dep_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocuentas`
--

CREATE TABLE `estadocuentas` (
  `ect_id` INT AUTO_INCREMENT NOT NULL,
  `ect_fecha` date NOT NULL,
  `ect_tipo_operacion` varchar(25) NOT NULL,
  `ect_monto` float(12,2) NOT NULL,
  `ect_saldo` float NOT NULL,
  `clientes_cli_cuenta_ahorros` INT NOT NULL,
  PRIMARY KEY(ect_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `per_id` INT AUTO_INCREMENT NOT NULL,
  `per_identificacion` varchar(13) NOT NULL,
  `per_nombre` varchar(250) NOT NULL,
  `per_apellido` varchar(250) NOT NULL,
  `per_telefono` varchar(50) NOT NULL,
  `per_direccion` varchar(250) NOT NULL,
  `per_correo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiros`
--

CREATE TABLE `retiros` (
  `ret_id` INT AUTO_INCREMENT NOT NULL,
  `ret_identificacion_beneficiario` varchar(13) NOT NULL,
  `ret_monto` float NOT NULL,
  `ret_fecha` date NOT NULL,
  `usuarios_usu_usuario` varchar(50) NOT NULL,
  `clientes_cli_cuenta_ahorros` INT NOT NULL,
  `estadocuentas_ect_id` INT NOT NULL,
  PRIMARY KEY(ret_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` INT,
  `usu_usuario` varchar(50) NOT NULL,
  `usu_password` varchar(50) NOT NULL,
  `usu_tipo_usuario` varchar(25) NOT NULL,
  `usu_fecha_registro` varchar(50) NOT NULL,
  `personas_per_identificacion` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--
-----------------------------------------------------------
---- Nueva tabla------------
CREATE TABLE `Localidades`(
	`loc_id` INT NOT NULL,
	`loc_nombre` VARCHAR(250) NOT NULL,
	`Localidades_loc_id` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Indices de la tabla `acessos`
--
 ALTER TABLE `acessos`
--  ADD PRIMARY KEY (`ace_id`),
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
--  ADD PRIMARY KEY (`cre_id`),
  ADD KEY `personas_personas_fk` (`Personas_per_identificacion`),
  ADD KEY `localidades_localidades_fk` (`Localidades_loc_id`);

--
-- Indices de la tabla `cuotas`
--
 ALTER TABLE `cuotas`
--  ADD PRIMARY KEY (`cuo_id`),
  ADD KEY `cuotas_creditos_fk` (`creditos_cre_id`);
 

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
--  ADD PRIMARY KEY (`dep_id`),
  ADD KEY `depositos_clientes_fk` (`clientes_cli_cuenta_ahorros`),
  ADD KEY `depositos_estadocuentas_fk` (`estadocuentas_ect_id`),
  ADD KEY `depositos_usuarios_fk` (`usuarios_usu_usuario`);

--
-- Indices de la tabla `estadocuentas`
--
 ALTER TABLE `estadocuentas`
  -- ADD PRIMARY KEY (`ect_id`),
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
  -- ADD PRIMARY KEY (`ret_id`),
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
  ADD CONSTRAINT `personas_personas_fk` FOREIGN KEY (`personas_per_identificacion`) REFERENCES `personas` (`per_identificacion`),
  ADD CONSTRAINT `localidades_localidades_fk` FOREIGN KEY (`Localidades_loc_id`) REFERENCES `Localidades` (`loc_id`);

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

---
--- primary localidades
---
ALTER TABLE `Localidades`
	ADD PRIMARY KEY(`loc_id`);
ALTER TABLE Localidades MODIFY loc_id INTEGER NOT NULL AUTO_INCREMENT
	
	
ALTER TABLE `Personas`
	ADD `per_sexo`VARCHAR(10) NOT NULL;
ALTER TABLE `Personas`
	ADD `per_tipo_documento` VARCHAR(20) NOT NULL;
ALTER TABLE `Personas`
	ADD `per_estado_civil` VARCHAR(20) NOT NULL;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

