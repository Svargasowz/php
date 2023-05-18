<?php
$cantidadDeCamisas = 3;
$precioCamisas = 50000;

($cantidadDeCamisas >= 3) ? $total = $cantidadDeCamisas * $precioCamisas * 0.8: $total = $cantidadDeCamisas * $precioCamisas * 0.9;

echo $total;


