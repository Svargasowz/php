<?php

$texto = "colombia";

$a = $texto;
$b = &$texto;

echo "<br>";
echo $a;
echo "<br>";
echo $b;

$texto = "Brasil";
echo "<br>";
echo $a;
echo "<br>";
echo $b;

?>

