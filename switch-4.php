<?php
//un programa que tome una fecha como entrada en formato dia mes año y muestre diferente el mes 

//elejir la fecha
$numero= '1-enero-2023';

//las diferentes festividades segun la fecha
$fecha =  match($numero){
    '1-enero-2023'=> 'Año nuevo',
    '8-marzo-2023'=> 'dia de la mujer',
    '2-abril-2023'=> 'Día Internacional de Libro Infantil y Juvenil',
    '1-mayo-2023' => 'Día Internacional de los Trabajadores',
    '23-junio-2023' => 'Noche de San Juan',
    default => " no es una vocal ni una consonante"
    
};
echo $fecha;