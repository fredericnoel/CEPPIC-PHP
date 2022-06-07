<?php

$resultat = "<ul>";

$i = -128;

while ($i <= 1257) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
    }

    $i++;
}

$resultat .= "</ul>";

echo $resultat;
