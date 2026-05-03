<?php

class Venta {
    private $conn;
    private $table = "ventas";

    public $id;
    public $producto_id;
    public $cantidad;
    public $total;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function crear() {
        $sql = "INSERT INTO " . $this->table . " (producto_id, cantidad, total)
                VALUES (:producto_id, :cantidad, :total)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":producto_id", $this->producto_id);
        $stmt->bindParam(":cantidad", $this->cantidad);
        $stmt->bindParam(":total", $this->total);

        return $stmt->execute();
    }
}