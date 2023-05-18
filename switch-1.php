<?php
$numero = 3;

$resultado = match (true){
    $numero === 1 => "hola",
    $numero === 2 => "hola de nuevo",
    $numero === 3 => "adios"
};

echo $resultado;