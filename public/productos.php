<?php
require_once "../controllers/ProductoController.php";

$controller = new ProductoController();

$result = $controller->crear($_POST);

header("Location: index.php");