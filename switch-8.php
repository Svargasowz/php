<?php

$palabra = 'elefante';
$contar = strlen($palabra);
 
$resultado = match(true){
    
    $contar <=9 => "la cadena es corta",
    $contar >=10 => "la cadena es larga"
};

echo $resultado;
?>
