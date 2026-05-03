<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$controller = new ProductoController();

$id = $_GET['id'];
$producto = $controller->obtener($id);
?>

<h2>Editar Producto</h2>

<form method="POST" action="actualizar.php">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>">
    <input type="number" name="stock" value="<?= $producto['stock'] ?>">
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>">

    <button type="submit">Actualizar</button>
</form>