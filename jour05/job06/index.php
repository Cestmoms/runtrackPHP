<?php

function leetSpeak($str) {
    $leet = ""; 

    for ($i = 0; isset($str[$i]); $i++) {
        $c = strtoupper($str[$i]); 
        if ($c == "A") {
            $leet .= "4";
        } elseif ($c == "E") {
            $leet .= "3";
        } elseif ($c == "I") {
            $leet .= "1";
        } elseif ($c == "O") {
            $leet .= "0";
        } elseif ($c == "S") {
            $leet .= "5";
        } else {
            $leet .= $str[$i]; 
        }
    }

    return $leet; 
}

$texte = "Bonjour LaPlateforme";
echo leetSpeak($texte);
?>
