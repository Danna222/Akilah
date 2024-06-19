<?php 
$conexion=new mysqli("localhost","root","","akilah");
$MATERIAS = $_POST['MATERIA'];
$FECHA = $_POST['FECHA'];
$TIPO = $_POST['TIPO'];
$NOTAS = $_POST['NOTAS'];
$query ="INSERT into pendientes(FECHA,NOMBRE,TIPO,ID,NOTAS)values('$FECHA','$MATERIAS','$TIPO','','$NOTAS')";
$res = $conexion -> query($query);
if ($res){
 header("Location:5.1tareas.php");
}
?>