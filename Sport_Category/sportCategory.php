<?php

echo "Entrez l'age de la personne : ";
$userAge = (int)readline();

switch ($userAge) {
    case $userAge <= 17:
        echo "Désolé ce joueur ne peut être dans aucune catégorie. \n";
        break;

    case $userAge < 20:
        echo "Joueur dans la catégorie junior! \n";
        break;

    case $userAge < 23:
        echo "Joueur dans la catégorie espoir! \n";
        break;

    case $userAge < 40:
        echo "Joueur dans la catégorie sénior! \n";
        break;

    case $userAge >= 40:
        echo "Joueur dans la catégorie vétéran. \n";
        break;
}