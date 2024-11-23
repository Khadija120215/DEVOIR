<?php
$rayon = floatval(readline("Entrez le rayon du cercle : "));
$diametre = 2 * $rayon;
$perimetre = 2 * pi() * $rayon;
$surface = pi() * pow($rayon, 2);
echo "Diamètre : $diametre, Périmètre : $perimetre, Surface : $surface\n";
?>