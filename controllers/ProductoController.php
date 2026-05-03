<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../models/Producto.php";

class ProductoController {

    private $db;
    private $producto;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->producto = new Producto($this->db);
    }

    // Crear producto con validaciones
    public function crear($data) {

        if (empty($data['nombre'])) {
            return "Nombre obligatorio";
        }

        if ($data['stock'] < 0) {
            return "Stock no puede ser negativo";
        }

        if (!is_numeric($data['precio']) || $data['precio'] <= 0) { 
            return "Precio inválido";
        }

        $this->producto->nombre = $data['nombre'];
        $this->producto->stock = $data['stock'];
        $this->producto->precio = $data['precio'];

        return $this->producto->crear();
    }

    public function listar() {
        return $this->producto->listar();
    }

    public function obtener($id) {
    $this->producto->id = $id;
    return $this->producto->obtenerPorId();
}

public function actualizar($data) {

    if (empty($data['nombre'])) {
        return "Nombre obligatorio";
    }

    if ($data['stock'] < 0) {
        return "Stock no puede ser negativo";
    }

    if (!is_numeric($data['precio']) || $data['precio'] <= 0) {
        return "Precio inválido";
    }

    $this->producto->id = $data['id'];
    $this->producto->nombre = $data['nombre'];
    $this->producto->stock = $data['stock'];
    $this->producto->precio = number_format($data['precio'], 2, '.', '');

    return $this->producto->actualizar();
}

public function eliminar($id) {
    $this->producto->id = $id;
    return $this->producto->eliminar();
}
}