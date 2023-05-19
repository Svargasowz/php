<?php
//elejir la letra
$letra = 'a';
//aqui es en  donde estan las lestras separadas si son vocales o consonante
$resultado = match($letra){
   "a","e","i","o","u" => "es una vocal",
   "b","c","d","f","g","h" => "es una consonante",
   //aqui cuando colocan algo que no tiene nada que ver
   default => " no es una vocal ni una consonante"
};
echo $resultado;