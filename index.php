<?php
$conexion=mysqli_connect ('localhost', 'root','', 'akilah');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<div><p>Akilah</p>
 <form method="post" action="2splash.php">
        ID: <br>
        <input type="text" name="ID"> <br>
        Correo: <br>
        <input type="text" name="CORREO"> <br>
        Nombre: <br>
        <input type="text" name="NOMBRE"> <br>
        Apellido: <br>
        <input type="text" name="APELLIDO"> <br>
        Contraseña: <br>
        <input type="password" name="CONTRASEÑA"> <br> <br>
    <button type="submit" name="Confirmar">Confirmar</button>
    </form>
</div>
</body>
<style>
body{
    background-color: #f8c277;
   }
    div{
        font-size:larger;
        background-color:white;
        max-width: 300px;
        padding:20px;
        border-radius:30px;
        margin:150px auto;
    }
    p{
        font-size:200%;
        text-align: center;
        font-weight:bold;
        color:#FFC300;
    }
</style>
</html>
<body> 
