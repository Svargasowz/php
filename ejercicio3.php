<?php
//escribe un programa que solicite al usuario que ingrese un numeordel 1 al 7 luego el programadebe imprimir el dia de la semana
//correspondiente al numero ingresado por ejemplo si el usuario ingre el 1 el progrma debe imprimir numeor invalido

//se escribe el numero que queremos
$usuario = 7;
//dias de la semana
$nombre = ["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
//los numeors de la semana pero por numero
$numero = [1,2,3,4,5,6,7];
//aqui es en donde llama al numero y el numeor que elije la persona y el nombre que seria el nombre de el dia de la semana

if($numero[0] == $usuario){
    echo $nombre[0];
}
elseif($numero[1] == $usuario){
    echo $nombre[1];
}
elseif($numero[2] == $usuario){
    echo $nombre[2];
}
elseif($numero[3] == $usuario){
    echo $nombre[3];
}
elseif($numero[4] == $usuario){
    echo $nombre[4];
}
elseif($numero[5] == $usuario){
    echo $nombre[5];
}
elseif($numero[6] == $usuario){
    echo $nombre[6];
}
elseif($numero[7] == $usuario){
    echo $nombre[7];
}

