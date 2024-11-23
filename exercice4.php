<?php
function ppcm($a, $b) {
    $produit = $a * $b;
    while ($b != 0) {
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    }
    return $produit / $a;
}

$a = intval(readline("Entrez le premier entier : "));
$b = intval(readline("Entrez le deuxième entier : "));
echo "Le PPCM de $a et $b est " . ppcm($a, $b) . ".\n";
?>