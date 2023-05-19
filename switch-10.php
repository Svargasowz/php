<?php
/* 10. Crea un programa que reciba una opción del 1 al 5 como entrada y realice una
acción diferente según la opción utilizando el ciclo `match`. */

$numero = 3;

//las diferentes funciones
$resultado = match (true){
    $numero === 1 => "dormir",
    $numero === 2 => "saltar",
    $numero === 3 => "correr",
    $numero === 4 => "voltereta",
    $numero === 5 => "patada"
};

//funciones
echo $resultado;