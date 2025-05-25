<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $donneesJson = file_get_contents("php://input");
        $donnees = json_decode($donneesJson, true);

        if ($donnees === null) {
            http_response_code(400);
            echo "Données JSON invalides.";
            exit;
        }

        $filename = "preferences.json";

        $jsonFormate = json_encode($donnees, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        if (file_put_contents($filename, $jsonFormate) === false) {
            http_response_code(500);
            echo "Erreur lors de l'écriture du fichier.";
            exit;
        }

        echo "Données enregistrées avec succès.";
    } else {
        http_response_code(405);
        echo "Méthode non autorisée.";
    }
?>
