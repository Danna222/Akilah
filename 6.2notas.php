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
<div><p>Crear Apunte</p>
 <form method="post" action="6.2notasB.php">
 ID: <input type="text" name="ID" size="4"> <br>
 Fecha: <br>
        <input type="date" name="FECHA"> <br>
    Nombre: 
        <input type="text" name="NOMBRE"> <br>
        Materia:
        <input type="radio" name="MATERIA" value="Matematicas"> Matematicas 
        <input type="radio" name="MATERIA" value="Español"> Español 
        <input type="radio" name="MATERIA" value="Fisica"> Fisica 
        <input type="radio" name="MATERIA" value="Quimica"> Quimica 
        <input type="radio" name="MATERIA" value="Geografia"> Geografia 
        <input type="radio" name="MATERIA" value="Historia"> Historia 
        <input type="radio" name="MATERIA" value="Historia"> Otro: <input type="text" name="MATERIA"> <br>
        Notas: <br>
        <textarea name="NOTAS" id="NOTAS" rows="20" cols="40"></textarea>
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