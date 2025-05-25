    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trek & Peaks</title>
    <link rel="stylesheet" href="site2.css">
</head>
<body>

 
<div class="container">
    <div class="navbar">
        <ul>
            <li><a href="accueil.html"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
            <li><a href="information.html">Information</a></li>
            <li><a href="filtre_recherche.php">Rechercher</a></li>
        </ul>
        <ul>
            <li class="inscription"><a href="inscription.html">S'inscrire</a></li>
            <li class="connexion"><a href="connexion.html">Se connecter</a></li>
        </ul>
    </div>

    <div class="bloc_p_voyage">  
                   <?php
                $filename = 'preferences.json';

                if (!file_exists($filename)) {
                    die("Erreur : fichier non trouvé.");
                }

                $contenu = file_get_contents($filename);
                if ($contenu === false || trim($contenu) === '') {
                    die("Erreur : fichier vide ou non lisible.");
                }

                $data = json_decode($contenu, true);
                if (!is_array($data) || empty($data)) {
                    die("Erreur : données JSON invalides.");
                }

                $lastIndex = array_key_last($data);
                $dernierVoyage = $data[$lastIndex]['voyage'] ?? null;

                if ($dernierVoyage === null) {
                    die("Erreur : aucun voyage trouvé.");
                }

                // Extraction des infos
                $destination    = $dernierVoyage['destination']    ?? 'N/A';
                $dateDepart     = $dernierVoyage['dateDepart']     ?? 'N/A';
                $dateRetour     = $dernierVoyage['dateRetour']     ?? 'N/A';
                $nbAdultes      = $dernierVoyage['nbAdultes']      ?? 0;
                $nbEnfants      = $dernierVoyage['nbEnfants']      ?? 0;
                $logements      = $dernierVoyage['logements']      ?? [];
                $restaurations  = $dernierVoyage['restaurations']  ?? [];
                $activites      = $dernierVoyage['activites']      ?? [];
                $transports     = $dernierVoyage['transports']     ?? [];
                $montantLogement = 0;
                $montantRestauration = 0;
                $montantActivite = 0;
                $montantTransport = 0;

                if (!empty($logements)) {
                    foreach ($logements as $logement) {
                        $montantLogement += (float)$logement['value'];
                    }
                }

                if (!empty($restaurations)) {
                    foreach ($restaurations as $restauration) {
                        $montantRestauration += (float)$restauration['value'];
                    }
                }

                if (!empty($activites)) {
                    foreach ($activites as $activite) {
                        $montantActivite += (float)$activite['value'];
                    }
                }

                if (!empty($transports)) {
                    foreach ($transports as $transport) {
                        $montantTransport += (float)$transport['value'];
                    }
                }

                $prixVoyage =
                    ($montantRestauration * $nbAdultes) + ($montantRestauration * 0.60 * $nbEnfants) +
                    ($montantActivite * $nbAdultes) + ($montantActivite * 0.60 * $nbEnfants) +
                    ($montantTransport * $nbAdultes) + ($montantTransport * 0.60 * $nbEnfants) +
                    (($montantLogement * 0.70) * $nbAdultes) + (($montantLogement * 0.70) * 0.60 * $nbEnfants);


                echo "<h1>Récapitualtif de votre Séjour : $destination</h1>";
                echo "<p><strong>Date départ :</strong> $dateDepart</p>";
                echo "<p><strong>Date retour :</strong> $dateRetour</p>";
                echo "<p><strong>Adultes :</strong> $nbAdultes | <strong>Enfants :</strong> $nbEnfants</p>";

                echo "<h3>Logements :</h3><ul>";
                foreach ($logements as $logement) {
                    echo "<li>{$logement['nom']} (prix : {$logement['value']})</li>";
                }
                echo "</ul>";

                echo "<h3>Restaurations :</h3><ul>";
                foreach ($restaurations as $restauration) {
                    echo "<li>{$restauration['nom']} (prix : {$restauration['value']})</li>";
                }
                echo "</ul>";

                echo "<h3>Activités :</h3><ul>";
                foreach ($activites as $activite) {
                    echo "<li>{$activite['nom']} (prix : {$activite['value']})</li>";
                }
                echo "</ul>";

                echo "<h3>Transports :</h3><ul>";
                foreach ($transports as $transport) {
                    echo "<li>{$transport['nom']} (prix : {$transport['value']})</li>";
                }
                echo "</ul>";

                echo "<h3>Prix total : {$prixVoyage} €</h3>"; 
            
            ?>  
               <button class="btn_1">ajouter au panier</button>
            <button class="btn_1">modifier le voyage </button>
    </div>
</div>



</body>
</html>












