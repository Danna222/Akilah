<?php
session_start();
require_once 'productos.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];
   
    // Si el producto ya está en el carrito, incrementa la cantidad
    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]['cantidad']++;
    } else { // Agrega el producto al carrito
        $_SESSION['carrito'][$id] = array(
            'nombre' => $productos[$id]['nombre'],
            'precio' => $productos[$id]['precio'],
            'cantidad' => 1
        );
    }
}


// Función para calcular el total del carrito
function calcular_total() {
    $total = 0;
    foreach ($_SESSION['carrito'] as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}


// Función para mostrar el carrito
function mostrar_carrito() {
    echo "<h2>Carrito de Compras</h2>";
    if (!empty($_SESSION['carrito'])) {
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $id => $producto) {
            echo "<li>" . $producto['nombre'] . " - $" . $producto['precio'] . " x " . $producto['cantidad'] . "</li>";
        }
        echo "</ul>";
        echo "<p>Total: $" . calcular_total() . "</p>";
    } else {
        echo "<p>El carrito está vacío.</p>";
    }
}


require_once 'productos.php';


// Función para vaciar el carrito
function vaciar_carrito() {
    unset($_SESSION['carrito']);
}


if (isset($_POST['vaciar'])) {
    vaciar_carrito();
}


// Resto del código...
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membresias</title>
</head>
<body bgcolor="#FFDAB9">
<div style="background-color:white; margin:auto;width:500px;padding:0px 10px; padding-bottom:5px;border:solid black 1px;">
    <a href="8PREMIUM.php">Regresar</a>
    <?php mostrar_carrito(); ?>
 
    <form action="Premium.php" method="post">
        <input type="submit" name="vaciar" value="Vaciar Carrito"> <br>
    </form>
    </div>
</body>
</html>