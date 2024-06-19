<?php 
$conexion=new mysqli("localhost","root","","akilah");
$MATERIA = $_POST['MATERIA'];
$NOMBRE = $_POST['NOMBRE'];
$FECHA = $_POST['FECHA'];
$HORA = $_POST['HORA'];
$NOTAS = $_POST['NOTAS'];
$query ="INSERT into estudio(FECHA,HORA,NOMBRE,MATERIA,NOTA)values('$FECHA','$HORA','$NOMBRE','$MATERIA','$NOTAS')";
$res = $conexion -> query($query);
if ($res){
 header("Location:7.1estudio.php");
}
?>