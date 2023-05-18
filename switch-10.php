<?php
$numero = 3;

$resultado = match (true){
    $numero === 1 => "",
    $numero === 2 => "",
    $numero === 3 => "",
    $numero === 4 => "",
    $numero === 5 => ""
};

echo $resultado;