<?php
$numero = 12;

$resultado = match (true){
    $numero === 1 => "ENERO",
    $numero === 2 => "FEBRERO",
    $numero === 3 => "MARZO",
    $numero === 4 => "ABRIL",
    $numero === 5 => "MAYO",
    $numero === 6 => "JUNIO",
    $numero === 7 => "JULIO",
    $numero === 8 => "AGOSTO",
    $numero === 9 => "SEPTIEMBRE",
    $numero === 10 => "OCTUBRE",
    $numero === 11 => "NOVIEMBRE",
    $numero === 12 => "DICIEMBRE",
    default => " no es una vocal ni una consonante"
};

echo $resultado;