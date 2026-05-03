<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$controller = new ProductoController();

$id = $_GET['id'];
$producto = $controller->obtener($id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="styles/style.css">
    <title>Editar Producto</title>
</head>
<body>
    
</body>
</html>
<h1>Editar Producto</h1>

<form method="POST" action="actualizar.php">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>">
    <input type="number" name="stock" value="<?= $producto['stock'] ?>">
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>">

    <button type="submit">Actualizar</button>
</form>
    <a href="index.php">
        <button>Volver</button>
    </a>