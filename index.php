<?php

function afficherMessage($prenom) {
    $resultat = "<p>Bonjour " . $prenom . "</p>";
    return $resultat;
}

function calculerSurface(int|float $longueur, int|float $largeur) : float
{
    return abs($longueur * $largeur);
}

function calculerLongueurLargeur(float $diagonale) : string
{
    $diagonale = 2.54 * abs($diagonale);
    $longueur = round($diagonale / sqrt(1 + (9/16) ** 2 ), 2);
    $largeur = round((9 * $longueur) / 16, 2);
    $longueur = str_replace('.', ',', $longueur);
    $largeur = str_replace('.', ',', $largeur);
    $resultat = "Longueur : $longueur cm, largeur : $largeur cm";
    return $resultat;
}

echo calculerLongueurLargeur(50);
