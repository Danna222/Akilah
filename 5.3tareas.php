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
<div><p>Actualizar Pendiente</p>
 <form method="post" action="5.3tareasB.php">
    ID del pendiente a actualizar: <br>
    <input type="text" name="ID"> <br>
 Fecha Limite: <br>
        <input type="date" name="FECHA"> <br>
        Materia: <br>
        <input type="radio" name="MATERIA" value="Matematicas"> Matematicas<br>
        <input type="radio" name="MATERIA" value="Español"> Español <br>
        <input type="radio" name="MATERIA" value="Fisica"> Fisica <br>
        <input type="radio" name="MATERIA" value="Quimica"> Quimica <br>
        <input type="radio" name="MATERIA" value="Geografia"> Geografia <br>
        <input type="radio" name="MATERIA" value="Historia"> Historia <br>
        <input type="radio" name="MATERIA" value="Historia"> Otro: <input type="text" name="MATERIA"> <br>
        Tipo: <br>
        <input type="checkbox" name="TIPO" value="Tarea">Tarea <br>
        <input type="checkbox" name="TIPO" value="Exposicion">Exposicion <br>
        <input type="checkbox" name="TIPO" value="Proyecto">Proyecto <br>
        <input type="checkbox" name="TIPO" value="Trabajo">Trabajo <br>
        Notas: <br>
        <textarea name="NOTAS" id="NOTAS" rows="6" cols="30"></textarea>
    <button type="submit" name="Confirmar">Confirmar</button>
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