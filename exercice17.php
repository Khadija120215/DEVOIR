<?php
function calculerSinus($angle, $unite = "r") {
    if ($unite === "d") {
        $angle = deg2rad($angle);
    } elseif ($unite === "g") {
        $angle = $angle * pi() / 200;
    }
    return sin($angle);
}

$angle = floatval(readline("Entrez un angle : "));
$unite = readline("Entrez l'unité (r pour radians, d pour degrés, g pour grades) : ");
echo "Le sinus de $angle en $unite est : " . calculerSinus($angle, $unite) . "\n";
?> 