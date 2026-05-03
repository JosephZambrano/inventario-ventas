<?php
require_once "../controllers/ProductoController.php";

$controller = new ProductoController();
$productos = $controller->listar();
?>

<h1>Inventario de Productos</h1>

<form method="POST" action="productos.php">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="number" name="stock" placeholder="Stock">
    <input type="number" name="precio" step="0.01" min="0" placeholder="Precio">
    <button type="submit">Guardar</button>
</form>

<hr>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Stock</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>

<?php while($row = $productos->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['stock'] ?></td>
    <td><?= $row['precio'] ?></td>
    <td>
    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
    |
    <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar producto?')">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>