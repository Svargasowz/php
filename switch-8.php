<?php
// 8. Desarrolla un programa que tome una cadena de texto como entrada y
//muestre un mensaje según la longitud de la cadena utilizando el ciclo `match`.
//Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "La cadena es
//larga".

//escribir la palabra y el $contar = strelen es para que cuentes en total cuantas letras son
$palabra = 'elefante';
$contar = strlen($palabra);
 
//$contar dira si es muy corta o larga
$resultado = match(true){
    $contar <=9 => "la cadena es corta",
    $contar >=10 => "la cadena es larga"
};

//para mostrar
echo $resultado;
?>
