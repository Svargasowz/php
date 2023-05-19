<?php
//un programa que tome un numero entero como entrada y muestre un mensaje diferente dependiendode si el numero es 1 2 0 3 el ciclo macht

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