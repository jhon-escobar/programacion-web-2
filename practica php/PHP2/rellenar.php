<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$columnas = 7;
$filas = 3;
for($i=0; $i<$columnas;$i++)
{
    for($j=0;$j<$filas;$j++)
    {
        $matriz[$i][$j]=$i*$j;

    }

}

?>
</body>
</html>