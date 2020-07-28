create database registro;
use registro;
create table usuarios (
	id int auto_increment primary key,
	nombre varchar(20),
	telefono varchar(64),
	email VARCHAR(64)
);