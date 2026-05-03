<?php

class Producto {
    private $conn;
    private $table = "productos";

    public $id;
    public $nombre;
    public $stock;
    public $precio;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Crear producto
    public function crear() {
        $sql = "INSERT INTO " . $this->table . " (nombre, stock, precio)
                VALUES (:nombre, :stock, :precio)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":stock", $this->stock);
        $stmt->bindParam(":precio", $this->precio);

        return $stmt->execute();
    }

    // Listar
    public function listar() {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    // Eliminar
    public function eliminar() {
        $sql = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}