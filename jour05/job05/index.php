<?php
function occurrences($str, $char) {
    $compteur = 0; 

    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $char) {
            $compteur++; 
        }
    }

    return $compteur; 
}

$texte = "Bonjour";
$lettre = "o";

echo "La lettre '$lettre' apparaît " . occurrences($texte, $lettre) . " fois dans '$texte'.";
?>
