<?php
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


