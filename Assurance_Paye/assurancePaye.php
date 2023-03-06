<?php

echo "Entrez l'âge de l'utilisateur : ";
$userAge = (int)readline();

if ($userAge < 18) {
    echo "Cet utilisateur doit être majeur pour conduire. \n";
    die();
}

do {
    echo "Tapez 1 pour un homme, 2 pour une femme : ";
    $userGender = (int)readline();
} while ($userGender !== 1 && $userGender !== 2);

if ($userAge > 22 && $userGender === 1) {
    echo "Cet utilisateur doit payer le supplément. \n";
    die();
}

if ($userGender === 2 && ($userAge < 20 || $userAge >= 30)) {
    echo "Cet utilisateur doit payer le supplément. \n";
    die();
}

echo "Entrez le nombre d'années de permis de conduire : ";
$yearsLicence = intval(readline());

if ($yearsLicence > 5) {
    echo "Cet utilisateur ne paie pas de supplément car il a plus de 5 ans de permis de conduire. \n";
}
