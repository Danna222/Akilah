<?php 
$conexion=new mysqli("localhost","root","","akilah");

$NOM = $_POST['NOMBRE'];
$query = "DELETE FROM estudio WHERE NOMBRE='$NOM'";
$res = $conexion -> query($query);
if ($res){
 header("Location:7.1estudio.php");
}
?>