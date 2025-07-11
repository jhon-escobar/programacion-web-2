<?php
$link=new mysqli("localhost","root","","prueba2");

if(! $link -> connect_error)
die("conexion exitosa".$link->connect_error);

?>