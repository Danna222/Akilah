<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID=$_POST['ID'];
$NOM = $_POST['NOMBRE'];
$query = "DELETE FROM usuarios WHERE ID='$ID' or NOMBRE='$NOM'";
$res = $conexion -> query($query);
if ($res){
 header("Location:4.1usuarios.php");
}
?>