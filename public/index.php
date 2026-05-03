<?php
require_once "../controllers/ProductoController.php";

$controller = new ProductoController();
$productos = $controller->listar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="styles/style.css">
    <title>Inicio</title>
</head>
<body>
    

<h1>Inventario de Productos</h1>

<form method="POST" action="productos.php">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="number" name="stock" placeholder="Stock">
    <input type="number" name="precio" step="0.01" min="0" placeholder="Precio">
    <button type="submit">Guardar</button>
    
</form>
    <a href="ventas.php">
        <button>Vender</button>
    </a>
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

</body>
</html>