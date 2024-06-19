<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID=$_POST['ID'];
$query = "DELETE FROM pendientes WHERE ID='$ID'";
$res = $conexion -> query($query);
if ($res){
 header("Location:5.1tareas.php");
}
?>