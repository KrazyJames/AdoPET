CREATE DATABASE `adopetws` /*!40100 DEFAULT CHARACTER SET latin1 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `especie` varchar(50) NOT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `genero` int(11) DEFAULT NULL,
  `edad` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `adopetws`.`usuarios`
(`id`,
`nombre`,
`username`,
`correo`,
`contrasena`,
`telefono`)
VALUES
(<{id: }>,
<{nombre: }>,
<{username: }>,
<{correo: }>,
<{contrasena: }>,
<{telefono: }>);

INSERT INTO `adopetws`.`mascotas`
(`id`,
`nombre`,
`especie`,
`raza`,
`genero`,
`edad`)
VALUES
(<{id: }>,
<{nombre: }>,
<{especie: }>,
<{raza: }>,
<{genero: }>,
<{edad: }>);
