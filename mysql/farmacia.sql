CREATE DATABASE farmacia;
USE farmacia;

CREATE TABLE personal(
	id_personal int NOT NULL AUTO_INCREMENT,
	nombre		varchar(40) NOT NULL,
	apellido1	varchar(40) NOT NULL,
	apellido2	varchar(40) NOT NULL,
	email		varchar(40) NOT NULL,
	contra1		varchar(40) NOT NULL, 
	contra2		varchar(40) NOT NULL,
	telefono	numeric(10,0) NOT NULL,
	direccion	varchar(40) NOT NULL,
	tipo		varchar(40) NOT NULL,
PRIMARY KEY(id_personal)); 

CREATE TABLE nuevo_producto(
	id_producto int NOT NULL AUTO_INCREMENT,
	codigo		int NOT NULL,
	nombre		varchar(40) NOT NULL,
	clase		varchar(40) NOT NULL,
	marca		varchar(40) NOT NULL,
	precio		float NOT NULL,
	registro	date NOT NULL,
	caducidad	date NOT NULL,
	descripcion varchar(50),
PRIMARY KEY(id_producto)); 

CREATE TABLE ventas(
	id_venta    int NOT NULL AUTO_INCREMENT,
	no_venta	int NOT NULL,
	nombre		varchar(40) NOT NULL,
	precio		float NOT NULL,
	cantidad	varchar(40) NOT NULL,
	subtotal	float NOT NULL,
	nom_persona varchar(40) NOT NULL,  
PRIMARY KEY(id_venta)); 

INSERT INTO personal(nombre,apellido1,apellido2,email,contra1,contra2,telefono,direccion,tipo) VALUES ('root','ADMIN','ADMIN','pharmaSoft@hotmail.com','toor','toor',0123456789,'Salgado escutia 250','Administrador');












		