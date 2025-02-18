<?php
//Générer un tableau avec 5 élèves et des notes entre 0 et 20.
//Calculer la moyenne de chaque élève.
//Afficher s’ils ont réussi (moyenne >= 10) ou échoué.

// Liste des élèves
$eleves = ["Sophia", "Batman", "Goku", "Reina", "TotallySpies"];

// Tableau pour stocker les notes
$notes = [];
$moyennes = [];

// Générer des notes pour chaque élève
foreach ($eleves as $eleve) {
    $Nombre_examens = rand(3, 8); // Chaque élève a entre 3 et 8 examens
    $somme = 0;

    for ($i = 0; $i < $Nombre_examens; $i++) {
        $note = random_int(0, 20); // Génère une note aléatoire
        $notes[$eleve][] = $note;  // Stocke la note
        $somme += $note;           // Ajoute la note à la somme
    }

    // Calcul de la moyenne
    $moyenne = $somme / $Nombre_examens;
    $moyennes[$eleve] = round($moyenne, 2); // Stocke la moyenne arrondie
}

// Affichage des résultats
echo "<pre>";
print_r($notes); // Affiche les notes de chaque élève
print_r($moyennes); // Affiche les moyennes de chaque élève
echo "</pre>";

?>







