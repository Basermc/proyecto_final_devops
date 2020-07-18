create database agenda;
use agenda;
create table agenda (
	id int auto_increment primary key,
	nombre varchar(20),
	telefono varchar(64),
	email VARCHAR(64)
);