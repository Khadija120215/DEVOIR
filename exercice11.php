<?php
$date_saisie = readline("Entrez une date au format AAAA-MM-JJ : ");
$date = new DateTime($date_saisie);
$fin_annee = new DateTime($date->format("Y") . "-12-31");
$jours_restants = $fin_annee->diff($date)->days;
echo "Il reste $jours_restants jours jusqu'à la fin de l'année.\n";
?>