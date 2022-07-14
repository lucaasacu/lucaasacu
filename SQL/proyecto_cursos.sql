CREATE DATABASE cursolucas;
USE cursolucas; 
SHOW tables; 


CREATE TABLE alumnos(
	documento INT(9),	
	nombre VARCHAR(50),
	apellido VARCHAR(50),
	fechaNacimiento DATE,
	tipoDocumento ENUM("CI","Pasaporte"),
	PRIMARY KEY (documento)
);

CREATE TABLE tiposCursos(
	id INT(5) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50),
	descripcion TEXT,
	PRIMARY KEY(id) 
);
CREATE TABLE profesores(
	documento INT(9),
	nombre	VARCHAR(50),
	apellido VARCHAR(50),
	fechaNacimiento DATE,
	PRIMARY KEY (documento)

);

CREATE TABLE cursos(
	codigo INT(10) NOT NULL AUTO_INCREMENT,
	nombre	VARCHAR(100),
	anio YEAR,
	tipoCurso INT(5),
	profesor INT(9),
	PRIMARY KEY (codigo),
	KEY cur_tipoCurso(tipoCurso),
	KEY cur_profesor(profesor),
	-- Creo la primera consraint dandole un nombre "cur_tipocur_fk1" y enganchando el campo tipoCurso
	-- De la cursos con el campo "id" de la tabla tiposCursos
	CONSTRAINT cur_tipoCurso_fk1 FOREIGN KEY (tipoCurso) REFERENCES tiposCursos(id),
	CONSTRAINT cur_profesor_fk2 FOREIGN KEY (profesor) REFERENCES profesores(documento)
);

CREATE TABLE alumnos_cursos(
	id BIGINT(10) NOT NULL AUTO_INCREMENT,
	codigoCurso	INT(10),
	documento INT(9) COMMENT "Es el documento del alumno",
	PRIMARY KEY (id),
	KEY alcur_codigoCurso (codigoCurso),
	KEY alcur_documento (documento),
	CONSTRAINT alcur_codigoCurso_fk1 FOREIGN KEY (codigoCurso) REFERENCES cursos(codigo),
	CONSTRAINT alcur_documento_fk2 FOREIGN KEY (documento) REFERENCES alumnos(documento)
	

);