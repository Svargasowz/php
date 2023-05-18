<?php
$letra = 'a';
$resultado = match($letra){
   "a","e","i","o","u" => "es una vocal",
   "b","c","d","f","g","h" => "es una consonante",
   default => " no es una vocal ni una consonante"
};
echo $resultado;