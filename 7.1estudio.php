<?php
$conexion=mysqli_connect ('localhost', 'root','', 'akilah');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div id="cuerpo">
        <div style="text-align:left;">
        <a href="7.2estudio.php"><button>nuevo</button></a>
        <a href="7.3estudio.php"><button>editar</button></a>
        <a href="7.4estudio.php"><button>eliminar</button></a>
        <br> <br>
        </div>
<?php
$sql="SELECT * from estudio";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>    <table>
        <tr><td><b>Fecha y Hora:</b> <?php echo $mostrar ['FECHA'] ?> <?php echo $mostrar ['HORA'] ?> </td></tr>
        <tr><td><b>Nombre:</b> <?php echo $mostrar ['NOMBRE'] ?> <b>Materia: </b><?php echo $mostrar ['MATERIA'] ?>
        <tr><td><b>Nota:</b> <?php echo $mostrar ['NOTA'] ?></td></tr></table> <br>
<?php
}
?>
</div>
    </center>
    <a href="3inicio.html"><button>atras</button></a>
</body>
<style>
    table, th, td {
        width: 100%;
  border: 1px solid;
}
    table {
    
  border-collapse: collapse;
}
body{
    background-color: #f8c277;
   }
#cuerpo{
    border: 1px black solid;
    background-color: white;
    width: 360px;
    height: 850px;
    padding: 10px;
    overflow-y: scroll;
    margin-bottom:10px;
}
</style>
</html>
