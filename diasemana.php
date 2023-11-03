<?php
$numero = $_GET["dia"];

if ($numero >= 1 && $numero <= 7) {
    
    $diasSemana = [
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado",
        7 => "Domingo"
    ];

    
    echo "El día de la semana es: " . $diasSemana[$numero];
} else {
    
    echo "Error: El número debe estar entre 1 y 7.";
}
?>
