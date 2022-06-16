
-- Creo la base de datos cursolucas
CREATE DATABASE cursolucas;
-- Entro a la base de datos cursolucas
USE cursolucas;
-- Listo las tablas de la base de datos
SHOW tables; 

-- DATOS PARA ORGANIZARME
-- Nombre   VARCHAR(50)
-- Apellido VARCHAR(50)
-- Email    TINYTEXT(50)
-- Cedula   INT(8)
-- Edad     DATE()
-- Telefono VARCHAR(15)
-- Genero   ENUM("Masculino","Femenino","Otros")
-- Domicilio TEXT

CREATE TABLE personas(
	nombre VARCHAR(50),
	apellido VARCHAR(50),
	email TINYTEXT,
	cedula INT(8),
	fechaNacimiento DATE,
	telefono VARCHAR(15),
	genero ENUM("Masculino","Femenino","Otros"),
	domicilio TEXT,
	pais CHAR(2),
	PRIMARY KEY(cedula)
)
-- Ver tabla
SHOW CREATE TABLE personas;

CREATE TABLE `personas` (
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` tinytext,
  `cedula` int(8) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `genero` enum('Masculino','Femenino','Otros') DEFAULT NULL,
  `domicilio` text,
  `pais` char(2) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

-- Extraemos datos de la tabla.

SELECT * FROM personas;

INSERT INTO personas(nombre,apellido,email,cedula,fechaNacimiento,telefono,genero,domicilio,pais)
values("Lucas","Acuna","luquitaa100@gmail.com",54641369,"2003-08-10","092802483","Masculino","La casa de enfrente a la plaza", "UY")

INSERT INTO personas SET
nombre = "Hugo",
apellido = "Lol",
email = "hugolol@gmail.com",
cedula = "123456789",
fechaNacimiento = "2000-10-10",
telefono = "099123456",
genero = "Masculino",
domicilio = "En la esquina",
pais = "UY";

INSERT INTO personas SET
nombre = "Lucas",
apellido = "Minecraft",
email = "lucaselpro@gmail.com",
cedula = "18888889",
fechaNacimiento = "2003-12-14",
telefono = "093125426",
genero = "Masculino",
domicilio = "enfrente al banco",
pais = "UY";

INSERT INTO personas SET
nombre = "Lucas",
apellido = "Counter",
email = "lucas123@gmail.com",
cedula = "999999",
fechaNacimiento = "2000-12-10",
telefono = "092123456",
genero = "Masculino",
domicilio = "en la ruta",
pais = "UY";

INSERT INTO personas SET
nombre = "Maria",
email = "mariamaria@gmail.com",
cedula = "123123122",
fechaNacimiento = "2000-10-13",
genero = "Masculino",
domicilio = "En la esquina",
pais = "UY";

DROP TABLE personas;

-- Usar where para buscar solo un tipo de nombre, apellido o dato.
SELECT * FROM personas
WHERE nombre = "Lucas";