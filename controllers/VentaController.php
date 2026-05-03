<?php

require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../services/VentaService.php";

class VentaController {

    private $db;
    private $service;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->service = new VentaService($this->db);
    }

    public function vender($data) {
        return $this->service->procesarVenta(
            $data['producto_id'],
            $data['cantidad']
        );
    }
}