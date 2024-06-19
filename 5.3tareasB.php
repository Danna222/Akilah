<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID=$_POST['ID'];
$MATERIAS = $_POST['MATERIA'];
$FECHA = $_POST['FECHA'];
$TIPO = $_POST['TIPO'];
$NOTAS = $_POST['NOTAS'];
$query ="UPDATE  pendientes SET FECHA='$FECHA',NOMBRE='$MATERIAS', TIPO='$TIPO', NOTAS='$NOTAS' where ID='$ID'";
$res = $conexion -> query($query);
if ($res){
 header("Location:5.1tareas.php");
}
?>