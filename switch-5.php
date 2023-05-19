<?php
//escribe un programa que tome un numero del 1 al 7 como entrada y muestre el nombre del dia de la semana

//numeor de dias
$numero = 7;

//segun el numero que elejimos y dira el nombre correspondiente
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
//para mostrar el resultado
echo $resultado;