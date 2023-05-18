<?php
$numero = 3;

$resultado = match (true){
    $numero === 1 => "adios",
    $numero === 2 => "buena madrugada",
    $numero === 3 => "hola buenas tardes",
    $numero === 4 => "hola buenas noche",
    $numero === 5 => "hola buenos dias"
};

echo $resultado;