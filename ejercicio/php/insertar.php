<?php
include('cpnexion.php');
    $sql="insert into agenda(
    Nombre,Direccion,Telefono,Email,Celular)
values
('$_POST[txtNombre]','$_POST[txtDireccion]','$_POST[txtTelefono]','$_POST[txtEmail]','$_POST[txtCelular]');
    //echo $sql;
    $consulta=mysql_query($sql,$link);
    if (isset($consulta))
    {echo"elemento insertado con exito"
    }

    "

?>