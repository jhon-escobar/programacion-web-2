<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
for ($i = 0; $i < 10; $i++) {
  echo "El valor de i es: " . $i . "<br>";
}

$i = 0;
while ($i < 10) {
  echo "El valor de i es: " . $i . "<br>";
  $i++;
}

$i = 0;
do {
  echo "El valor de i es: " . $i . "<br>";
  $i++;
} while ($i < 10);

$frutas = array("manzana", "banana", "naranja");
foreach ($frutas as $fruta) {
  echo "La fruta es: " . $fruta . "<br>";
}

/*while (true) {
  echo "Este bucle se ejecutará para siempre.";
}*/
?>

<body>
    
</body>
</html>