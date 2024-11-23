<?php
$nombres = explode(" ", readline("Entrez une liste de nombres séparés par des espaces : "));
$moyenne = array_sum($nombres) / count($nombres);
$maximum = max($nombres);
$minimum = min($nombres);
echo "Moyenne : $moyenne, Maximum : $maximum, Minimum : $minimum\n";
?>