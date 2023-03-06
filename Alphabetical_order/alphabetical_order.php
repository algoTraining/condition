<?php

echo "Entrez le premier prénom : ";
$nameOne = readline();

echo "Entrez le deuxième prénom : ";
$nameTwo = readline();

echo "Entrez le troisième prénom : ";
$nameThree = readline();

$unsortName = [];

array_push($unsortName, $nameOne, $nameTwo, $nameThree);
$sortName = $unsortName;
sort($sortName);

if ($unsortName !== $sortName) {
    echo "Ceci n'est pas dans un ordre alphabétique. \n";
} else {
    echo "Ceci est dans un ordre alphabétique. \n";
}