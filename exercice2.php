<?php
$nombre = intval(readline("Entrez un nombre : "));
if ($nombre % 3 === 0 && $nombre % 5 === 0) {
    echo "$nombre est un multiple de 3 et de 5.\n";
} else {
    echo "$nombre n'est pas un multiple de 3 et de 5.\n";
}
?>