<?php


$numero1 = $_GET["num1"];

$numero2 = $_GET["num2"];

$numero3 = $_GET["num3"];

$numero_mayor = max($numero1, $numero2, $numero3);


echo "El número mayor es: $numero_mayor";
?>
