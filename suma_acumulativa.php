<?php
$n = $_GET["numero"];
$suma = 0;
for ($i = 1; $i <= $n; $i++) {
    $suma += $i;
}
echo "La suma de los números desde 1 hasta $n es: $suma";
?>
