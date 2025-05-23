<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $donnees = file_get_contents("php://input"); // Récupère les données brutes
    $fichier = fopen("preferences.json", "a"); // "a" pour ajouter à la fin
    fwrite($fichier, date("Y-m-d H:i:s") . "\n");
    fwrite($fichier, $donnees . "\n\n");
    fclose($fichier);
    echo "Données enregistrées avec succès.";
} else {
    echo "Méthode non autorisée.";
}
?>