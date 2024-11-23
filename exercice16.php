<?php
function capitaliser(&$tableau) {
    foreach ($tableau as &$element) {
        $element = ucfirst(strtolower($element));
    }
}

$chaines = explode(" ", readline("Entrez des chaînes de caractères séparées par des espaces : "));
capitaliser($chaines);
print_r($chaines);
?>