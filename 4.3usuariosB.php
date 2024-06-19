<?php 
$conexion=new mysqli("localhost","root","","akilah");
$ID=$_POST['ID'];
$ID2=$_POST['ID2'];
$CORREO = $_POST['CORREO'];
$NOM = $_POST['NOMBRE'];
$APE = $_POST['APELLIDO'];
$CONTRA = $_POST['CONTRASEÑA'];
$query ="UPDATE  usuarios SET ID='$ID2',CORREO='$CORREO', NOMBRE='$NOM', APELLIDO='$APE',CONTRASEÑA='$CONTRA' where ID='$ID'";
$res = $conexion -> query($query);
if ($res){
 header("Location:4.1usuarios.php");
}
?>