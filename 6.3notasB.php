<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID = $_POST['ID'];
$ID2 = $_POST['ID2'];
$FECHA = $_POST['FECHA'];
$NOM = $_POST['NOMBRE'];
$NOTA = $_POST['NOTAS'];
$MAT = $_POST['MATERIA'];
$query ="UPDATE  apuntes SET ID='$ID2',FECHA='$FECHA', NOMBRE='$NOM', NOTA='$NOTA' where ID='$ID'";
$res = $conexion -> query($query);
if ($res){
 header("Location:6.1notas.php");
}
?>