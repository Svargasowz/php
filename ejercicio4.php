<?php
//colocar la edad//

$edad = "18";

//escribir si tiene edad
$permiso = "si";

//aquu
if($edad >= "18"){
    echo " ya tienes la edad para conducir pero ¿tienes permiso para conducir? ";
    echo $permiso;

}
if($permiso== "si"){
    echo ", entonces puedes conducir";
}
if($permiso == "no"){
   echo "Debes obtener una licensia";
}
elseif($edad < "17"){
    echo "No puedes conducir";
}