<?php
$nombre = intval(readline("Entrez un nombre à trois chiffres : "));
for ($compteur = 1; ; $compteur++) {
    $aleatoire = rand(100, 999);
    if ($aleatoire === $nombre) {
        break;
    }
}
echo "Trouvé après $compteur tirages.\n";
?>