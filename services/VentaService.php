<?php

require_once __DIR__ . "/../models/Venta.php";
require_once __DIR__ . "/../models/Producto.php";

class VentaService {

    private $venta;
    private $producto;

    public function __construct($db) {
        $this->venta = new Venta($db);
        $this->producto = new Producto($db);
    }

    public function procesarVenta($producto_id, $cantidad) {

        // Obtener producto
        $this->producto->id = $producto_id;
        $prod = $this->producto->obtenerPorId();

        if (!$prod) {
            return "Producto no existe";
        }

        if ($cantidad <= 0) {
            return "Cantidad inválida";
        }

        if ($cantidad > $prod['stock']) {
            return "Stock insuficiente";
        }

        // Calcular total
        $total = $cantidad * $prod['precio'];

        // Guardar venta
        $this->venta->producto_id = $producto_id;
        $this->venta->cantidad = $cantidad;
        $this->venta->total = number_format($total, 2, '.', '');

        $this->venta->crear();

        // Actualizar stock
        $nuevoStock = $prod['stock'] - $cantidad;

        $this->producto->id = $producto_id;
        $this->producto->nombre = $prod['nombre'];
        $this->producto->stock = $nuevoStock;
        $this->producto->precio = $prod['precio'];

        $this->producto->actualizar();

        return true;
    }
}