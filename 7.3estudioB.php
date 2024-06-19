<?php 
$conexion=new mysqli("localhost","root","","akilah");

$NOM2 = $_POST['NOMBRE1'];
$FECHA = $_POST['FECHA'];
$NOM = $_POST['NOMBRE'];
$NOTA = $_POST['NOTAS'];
$HORA = $_POST['HORA'];
$query ="UPDATE  estudio SET FECHA='$FECHA', HORA='$HORA', NOMBRE='$NOM', NOTA='$NOTA' where NOMBRE='$NOM2'";
$res = $conexion -> query($query);
if ($res){
 header("Location:7.1estudio.php");
}
?>