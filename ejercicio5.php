<?php
//escribe un programa que solicite al usuario que ingrese dos numeors. luego el programa debe imprimir si ambos numeros son mayores que 10 utilizando
//utilizando la sentencia if y los operadores logicos && y > si ambos numeors son mayores que 10 el programa debe imprimir solo uno de los numeors e smayor que 10 si ninguno de los numeors
//es mayor que 10 el programa debe imprimir ninguno de los numeors es mayor que 10

//aqui se escribe los dos numeor
$primerNumero = "2";
$segundoNumero = "11";

//si los dos son mayores que diez mostrara lo siguiente
if($primerNumero > 10 && $segundoNumero > 10){
    echo "los dos numeros son mayores que a diez";
}
//cuando solo uno es mayor que a diez
elseif($primerNumero < 10 && $segundoNumero > 10){
    echo "solo uno de los numero es mayor que a diez";
}

//cuando ninguno de los dos pasa de diez mostrara lo siguiente 

elseif($primerNumero && $segundoNumero <10){
    echo "ningunos de los dos es mayor";
}