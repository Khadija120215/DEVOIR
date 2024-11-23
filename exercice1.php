
<?php
$mot = readline("Entrez un mot : ");
if ($mot === strrev($mot)) {
    echo "$mot est un palindrome.\n";
} else {
    echo "$mot n'est pas un palindrome.\n";
}
?>