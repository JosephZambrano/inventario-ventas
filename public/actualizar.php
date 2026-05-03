<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$controller = new ProductoController();
$controller->actualizar($_POST);

header("Location: index.php");