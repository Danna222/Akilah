<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID=$_POST['ID'];
$NOM = $_POST['NOMBRE'];
$query = "DELETE FROM apuntes WHERE ID='$ID' or NOMBRE='$NOM'";
$res = $conexion -> query($query);
if ($res){
 header("Location:6.1notas.php");
}
?>