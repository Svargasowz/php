<?php
// escrine un progrma que solicite al usuario que ingrese su edad si la edad es mayor o igual a 18
//el programa debe preguntar si tiene licensia de conducir  si la respuesta es si el programa debe imprimir puedes conducir s
//si la respuesta es no el progrma debe imprimir debes obtener una licensia  de conducir primero
//si la edad es menor que 18 el programa debe imprimir debes imprimir no puedes conducir


//colocar la edad//

$edad = "18";

//escribir si tiene edad
$permiso = "si";

//aqui se compara la edad con 18 si es mayor de 18 se le soltara el mensaje
if($edad >= "18"){
    echo " ya tienes la edad para conducir pero ¿tienes permiso para conducir? ";
    echo $permiso;

} 
//aqui se compara permiso con si y si la respuesta es si entonces podra conducir 
if($permiso== "si"){
    echo ", entonces puedes conducir";
}
//y si es no soltara el mensaje que tendra con conseguir la licensia
if($permiso == "no"){
   echo "Debes obtener una licensia";
}
//si la edad es menor que 17 no podra conducir
elseif($edad < "17"){
    echo "No puedes conducir";
}