<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID = $_POST['ID'];
$FECHA = $_POST['FECHA'];
$NOM = $_POST['NOMBRE'];
$NOTA = $_POST['NOTAS'];
$MAT = $_POST['MATERIA'];
$query ="INSERT into apuntes(ID,FECHA,NOMBRE,MATERIA,NOTA)values('$ID','$FECHA','$NOM','$MAT','$NOTA')";
$res = $conexion -> query($query);
if ($res){
 header("Location:6.1notas.php");
}
?>