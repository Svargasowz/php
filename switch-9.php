<?php
$numero = "11:00";

$resultado = match (true){
    $numero === "01:00" => "una de la madrugada",
    $numero === "02:00" => "dos de la madrugada",
    $numero === "03:00" => "tres de la madrugada ",
    $numero === "04:00" => "cuatro de la madrugada",
    $numero === "05:00" => "cinco de la madrugada",
    $numero === "06:00" => "seis de la mañana",
    $numero === "07:00" => "siete de la mañana",
    $numero === "08:00" => "ocho de la mañana",
    $numero === "09:00" => "nueve de la mañana",
    $numero === "10:00" => "diez de la mañana",
    $numero === "11:00" => "once de la mañana",
    $numero === "12:00" => "doce de la tarde",
    $numero === "13:00" => "una de la tarde",
    $numero === "14:00" => "dos de la tarde",
    $numero === "15:00" => "tres de la tarde ",
    $numero === "16:00" => "cuatro de la tarde",
    $numero === "17:00" => "cinco de la tarde",
    $numero === "18:00" => "seis de la tarde",
    $numero === "19:00" => "siete de la noche",
    $numero === "20:00" => "ocho de la noche",
    $numero === "21:00" => "nueve de la noche",
    $numero === "22:00" => "diez de la noche",
    $numero === "23:00" => "once de la noche",
    $numero === "00:00" => "doce de la noche",
    default => " no es una vocal ni una consonante"
};

echo $resultado;