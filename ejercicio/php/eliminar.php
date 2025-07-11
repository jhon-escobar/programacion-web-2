<?php
include('conexcion.php');
$id=$_GET['id'];
$sql='delete from agenda where ID='.$id;
$consulta=mysql_query($sql,$link)
?>