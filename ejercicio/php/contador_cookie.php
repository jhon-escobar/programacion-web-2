<?php
if(isset($_COOKIE['contador'])){
    $valor=$_COOKIE['contador']+1;
    echo "es la visita $valor";
    setcookie("contador",$valor,0);/*expir Expira en 1 hora */
    
}
else
{
    echo"es la vista uno";
    setcookie("conrador",1,0);/*expira en 1 hora */
}
?>