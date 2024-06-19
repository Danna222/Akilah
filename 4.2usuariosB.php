<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID=$_POST['ID'];
$CORREO = $_POST['CORREO'];
$NOM = $_POST['NOMBRE'];
$APE = $_POST['APELLIDO'];
$CONTRA = $_POST['CONTRASEÑA'];
$query ="INSERT into usuarios(ID,CORREO,NOMBRE,APELLIDO,CONTRASEÑA)values('$ID','$CORREO','$NOM','$APE','$CONTRA')";
$res = $conexion -> query($query);
if ($res){
 header("Location:4.1usuarios.php");
}
?>