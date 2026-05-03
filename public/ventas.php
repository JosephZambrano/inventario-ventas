<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$controller = new ProductoController();
$productos = $controller->listar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="styles/style.css">
    <title>Venta</title>
</head>
<body>
    
<h1>Registrar Venta</h1>

<form method="POST" action="procesar_venta.php">

    <select name="producto_id">
        <?php while($row = $productos->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $row['id'] ?>">
                <?= $row['nombre'] ?> (Stock: <?= $row['stock'] ?>)
            </option>
        <?php } ?>
    </select>

    <input type="number" name="cantidad" placeholder="Cantidad">

    <button type="submit">Vender</button>
</form>
    <a href="index.php">
        <button>Volver</button>
    </a>
</body>
</html>