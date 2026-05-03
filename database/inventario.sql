create database inventario;

use  inventario;

create table productos(
	id int auto_increment primary key,
    nombre varchar(100) not null,
    stock int not null,
    precio decimal(10,2) not null,
    created_at timestamp default current_timestamp );

create table ventas(
	id int auto_increment primary key,
    producto_id int,
    cantidad int not null,
    total decimal (10,2) not null,
    fecha timestamp default current_timestamp,
    foreign key (producto_id) references productos(id) );
    

