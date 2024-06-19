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
<div><p>Editar Sesion de estudio</p>
<form method="post" action="7.3estudioB.php">
    Nombre de la sesion a actualizar: <input type="text" name="NOMBRE1"> <br>
 Fecha: <br>
        <input type="date" name="FECHA"> <br>
        Hora: <br>
        <input type="time" name="HORA"> <br>
         Nuevo Nombre: <br>
        <input type="text" name="NOMBRE"> <br>
        Materia: <br>
        <input type="radio" name="MATERIA" value="Matematicas"> Matematicas<br>
        <input type="radio" name="MATERIA" value="Español"> Español <br>
        <input type="radio" name="MATERIA" value="Fisica"> Fisica <br>
        <input type="radio" name="MATERIA" value="Quimica"> Quimica <br>
        <input type="radio" name="MATERIA" value="Geografia"> Geografia <br>
        <input type="radio" name="MATERIA" value="Historia"> Historia <br>
        <input type="radio" name="MATERIA" value="Otro"> Otro <br>
        Notas: <br>
        <textarea name="NOTAS" id="NOTAS" rows="6" cols="30"></textarea>
    <button type="submit" name="Confirmar">Confirmar</button>
    </form>
    </form>
</div>
<a href="3inicio.html"><button>inicio</button></a>
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
        margin:100px auto;
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