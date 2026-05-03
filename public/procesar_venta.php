<?php
require_once __DIR__ . "/../controllers/VentaController.php";

$controller = new VentaController();

$result = $controller->vender($_POST);

if ($result === true) {
    header("Location: ventas.php?success=1");
} else {
    echo $result;
}