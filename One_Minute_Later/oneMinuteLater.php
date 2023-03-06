<?php

echo "Entrez l'heure : ";
$hours = (int)readline();

echo "Entrez les minutes : ";
$mins = (int)readline();

if ($hours >= 24 || $mins >= 60) {
    echo "Désolé, l'heure rentrée est incorrecte.";
    die();
}

$mins++;
if ($mins === 60) {
    $hours++;
    $mins = 0;
}

if ($hours === 24) {
    $hours = 0;
}

echo "Dans une minute, il sera " . $hours . " heures et " . $mins . " minutes. \n";
