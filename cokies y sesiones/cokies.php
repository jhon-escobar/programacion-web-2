<?php
if (isset($_COOKIE['contadot'])) {
    $contador = $_COOKIE['contador'] + 1;

} else {
    $contador = 1 ;

}
setcookie
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visitas de cokies</title>

</head>
<body>
    <H1>contador de visitas</H1>
    <p>esta pagina  ha sido visitada<?php echo $contador;?> veces en los ultimmos dias.</p>
  
</body>
</html>