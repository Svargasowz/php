<?php
 

//el numeor de la nota sacada
$numero = 100;

//el nombre 
$resultado = match (true){
    $numero <= 20 => "mejor suerte pa la proxima",
    $numero <= 40 => "casi",
    $numero <= 60 => "no tan mal",
    $numero <= 80 => "bien",
    $numero <= 89 => "bastante bien",
    $numero <= 100 => "exelente",
};

echo $resultado;