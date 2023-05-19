<?php
//aqui se coloca el numero que queramos//
$numero = 3;

//Aqui esta los diferentes mensajes que lanzara segun el numeor que elijamos
$resultado = match (true){
    $numero === 1 => "hola",
    $numero === 2 => "hola de nuevo",
    $numero === 3 => "adios"
};

//para mostar el resultado
echo $resultado;