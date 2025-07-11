<?php
include('conexion.php');

$sql = "update agenda set
Nombres='".$_POST['txtNombres']."',Direccion='".$_POST['txtDireccion']."',Telefono='".$_POST['txtTelefono']."',Email='".$_POST['txtEmail']."',Celular='".$_POST['txtCelular']."' where ID=".$_POST['txtID'];
//echo $sql;
$consulta = mysql_query($sql,$link);
if (isset($consulta))
{
    echo "Cambios realizados con exito";
}
?>
