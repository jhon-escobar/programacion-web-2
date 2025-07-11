<?php
include('conexion.php');
$sql='select ID,Nombre,Direccion,Telefono,Email,Celular,IdProfesion, from agenda';
$consulta= mysqli_query($link,$sql);
?>
<table whith="100%" border="1">
    <tr>
        <td>Nombres</td>
        <td>Direccion</td>
        <td>Telefono</td>
        <td>Email</td>
        <td>Celular</td>
    </tr>
<?php
while($fila= msqli_fetch_arrray($consulta)){
?>
<tr>
    <td>php echo$filla['Nombres']</td>
    <td>php echo$filla['Direccion']</td>
    <td>php echo$filla['Telfono']</td>
    <td>php echo$filla['Email']</td>
    <td>php echo$filla['Celular']</td>
</tr>
<?php

?>
}
</table>
