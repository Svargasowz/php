<?php
$numero = 7;

$resultado = match (true){
    $numero === 1 => "lunes",
    $numero === 2 => "martes",
    $numero === 3 => "miercoles",
    $numero === 4 => "jueves",
    $numero === 5 => "viernes",
    $numero === 6 => "sabado",
    $numero === 7 => "domingo",
    default => " no es una vocal ni una consonante"
};

echo $resultado;