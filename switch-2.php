<?php
//crea un programa que recibe el nombre de un color como entrada y muestreun mensaje diferente segun el color
//utilizando el ciclo math

//elegir el color
$color = 'negro';

//las diferentes funiones segun el collor que elija
$resultado = match($color){
    'rojo' => 'EL color es calido',
    'amarillo' => 'El color es muy calido',
    'azul' => 'El color es frio',
    'negro' => 'El color es muy frio',
    default => 'NO EXISTE'
    
};

echo $resultado;


