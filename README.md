# Sistema Web de Inventario y Ventas

# Descripción del sistema

Este proyecto es una aplicación web desarrollada en PHP que permite gestionar productos y registrar ventas de forma sencilla.

El sistema incluye funcionalidades de inventario (CRUD de productos) y un módulo de ventas que descuenta automáticamente el stock y calcula el total de cada transacción.

Está desarrollado siguiendo buenas prácticas como separación por capas (Modelos, Controladores y Servicios), validaciones de datos y uso de base de datos MySQL.


# Funcionalidades

- Crear productos
- Listar productos
- Editar productos
- Eliminar productos
- Registrar ventas
- Cálculo automático de total
- Descuento automático de stock
- Validación de datos



# Tecnologías utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP
- Git y GitHub



# Requisitos

Para ejecutar este proyecto necesitas:

- Tener instalado XAMPP (o servidor con PHP y MySQL)
- PHP 8 o superior
- MySQL o MariaDB
- Navegador web (Chrome recomendado)


# Instalación

Sigue estos pasos para ejecutar el proyecto en tu entorno local:

# 1. Clonar el repositorio

```bash
git clone https://github.com/TU-USUARIO/inventario-ventas.git


# 2. Mover el proyecto

Colocando en la carpeta 

C:\xampp\htdocs\

# 3. Crear la base de datos

Abre MySQL Workbench o phpMyAdmin y ejecuta:

CREATE DATABASE inventario;
USE inventario;

# 4. Importar tablas 

/database/inventario.sql

# 5. Configurar conexion

/config/database.php

Credenciales por defecto:

host: localhost
usuario: root
password: ""
base de datos: inventario

# 6. Ejecutar el sistema

http://localhost/inventario-ventas/