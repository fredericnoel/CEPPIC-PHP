<?php

$resultat = "<ul>";

for ($i = -128 ; $i <= 1257 ; $i++) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
    }
}

$resultat .= "</ul>";

echo $resultat;
