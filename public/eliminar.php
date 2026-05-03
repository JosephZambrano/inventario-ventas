<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$controller = new ProductoController();
$controller->eliminar($_GET['id']);

header("Location: index.php");