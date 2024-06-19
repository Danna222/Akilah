<?php
session_start();
require_once 'productos.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membresia</title>
</head>
<body bgcolor="#FFDAB9">
    <div style="background-color:white; margin:auto;width: 300px;padding:0px 10px;border:solid black 1px;">
    <center><h1>Ofertas Disponibles</h1></center>
    <ul>
    <?php foreach ($productos as $id => $producto): ?>
        <li style="list-style:none;">
            <center><img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" width="100"></center> <br>
            <?php echo $producto['nombre']; ?> - <?php echo $producto['precio']; ?>
            <form action="Premium.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Agregar al Carrito">
            </form>
        </li>
    <?php endforeach; ?>
    </ul>
    <a href="3inicio.html"><button>Inicio</button></a>
    </div>
</body>
</html>
