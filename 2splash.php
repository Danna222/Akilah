<?php
$conexion=mysqli_connect ('localhost', 'root','', 'akilah');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10;url=3inicio.html">
    <title>Splash Screen</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url(Akilah-logo.png);
            background-size: contain;
            background-repeat:no-repeat;
            background-position-x: center;
            background-position-y: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation-name: fadeOut;
            animation-duration: 30s;
        }
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        .content {
            color: black;
            margin: 0 auto;
        }
    </style>
</head>
</html>
<?php
$ID = $_POST['ID'];
$CORREO = $_POST['CORREO'];
$NOM = $_POST['NOMBRE'];
$APE = $_POST['APELLIDO'];
$CONTRA = $_POST['CONTRASEÑA'];
mysqli_query($conexion,"INSERT into usuarios(ID,CORREO,NOMBRE,APELLIDO,CONTRASEÑA)values('$ID','$CORREO','$NOM','$APE','$CONTRA')") 
or die ("");
mysqli_close($conexion);
?>
