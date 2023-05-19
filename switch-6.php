<?php
//elejir el numeor del mes
$numero = 12;

//segun el numeor elejido soltara el nombre del mes correspondiente
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
    //default es tipo por si alguien escribe un dato que no corresponda
    default => " no es una vocal ni una consonante"
};

//para mostrar//
echo $resultado;