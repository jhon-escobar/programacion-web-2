<?php

echo "Ingrese el primer número: ";
$numero1 = trim(fgets(STDIN));

if (!is_numeric($numero1)) {
    echo "Error: El primer valor ingresado no es un número.\n";
    exit(1);
}

echo "Ingrese el segundo número: ";
$numero2 = trim(fgets(STDIN));

if (!is_numeric($numero2)) {
    echo "Error: El segundo valor ingresado no es un número.\n";
    exit(1);
}

$suma = $numero1 + $numero2;

echo "La suma de $numero1 y $numero2 es: $suma\n";

?>