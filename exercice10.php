<?php
$chaine = strtolower(readline("Entrez une chaîne de caractères : "));
$voyelles = "aeiouy";
$nb_voyelles = 0;
$nb_consonnes = 0;

for ($i = 0; $i < strlen($chaine); $i++) {
    if (ctype_alpha($chaine[$i])) {
        if (strpos($voyelles, $chaine[$i]) !== false) {
            $nb_voyelles++;
        } else {
            $nb_consonnes++;
        }
    }
}
echo "Nombre de voyelles : $nb_voyelles\n";
echo "Nombre de consonnes : $nb_consonnes\n";
?>