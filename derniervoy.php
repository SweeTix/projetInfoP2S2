<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Trek & Peaks</title>
        <link rel="stylesheet" href="pagevoyage.css">
    </head>
    <body>
        <style>
            .bloc_p_voyage{
                background-color: rgba(9, 52, 28, 0.4);
                box-shadow: 0 0 10px rgba(0, 0, 0, 1);
                padding: 20px;
                margin: auto;
                margin-top: 5%;
                border-radius: 8px;
                width: 60%;
            }
            
            .bloc_p_voyage h1{
                font-size: 30px;
                color: rgb(255, 205, 96);
            }

            .bloc_p_voyage p{
                font-size: 22px;
                color: white;
            }
            
            .btn1 {
                font-size: 25px;
                background-color: rgb(255, 205, 96);
                color: white;
            }
        </style>
        <div class="navbar">
            <ul>
                <li><a href="accueil.php"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="rechercher.php">Rechercher</a></li>
            </ul>
            <ul>
                <?php
                    if(isset($_SESSION['user_statut'])){
                        echo '<li><a href="panier.php"><img src="panier.png" alt="Panier" width="30" height="30"></a></li>';
                    }
                    ?>
                <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
                <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
            </ul>
        </div>
          
        <div class="fond">
            <div class="bloc_p_voyage">
                <?php
                    if (isset($_GET['destination'])) {
                        $destination = $_GET['destination'];
                    } else {
                        $destination = null; // ou une valeur par défaut
                    }

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

                    // Extraction des infos
                    $destination    = $data['destination']    ?? 'N/A';
                    $dateDepart     = $data['dateDepart']     ?? 'N/A';
                    $dateRetour     = $data['dateRetour']     ?? 'N/A';
                    $nbAdultes      = $data['nbAdultes']      ?? 0;
                    $nbEnfants      = $data['nbEnfants']      ?? 0;
                    $logements      = $data['logements']      ?? [];
                    $restaurations  = $data['restaurations']  ?? [];
                    $activites      = $data['activites']      ?? [];
                    $transports     = $data['transports']     ?? [];
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
                    echo "<p><strong>Date départ :</strong></p>" . $dateDepart;
                    echo "<p><strong>Date retour :</strong></p>" . $dateRetour;
                    echo "<p><strong>Adultes :</strong></p>" . $nbAdultes . "<p>| <strong>Enfants :</strong></p>" . $nbEnfants;

                    echo "<p>Logements :</p><ul>";
                    foreach ($logements as $logement) {
                        echo "<li>{$logement['nom']} (prix : {$logement['value']})</li>";
                    }
                    echo "</ul>";

                    echo "<p>Restaurations :</p><ul>";
                    foreach ($restaurations as $restauration) {
                        echo "<li>{$restauration['nom']} (prix : {$restauration['value']})</li>";
                    }
                    echo "</ul>";

                    echo "<p>Activités :</p><ul>";
                    foreach ($activites as $activite) {
                        echo "<li>{$activite['nom']} (prix : {$activite['value']})</li>";
                    }
                    echo "</ul>";

                    echo "<p>Transports :</p><ul>";
                    foreach ($transports as $transport) {
                        echo "<li>{$transport['nom']} (prix : {$transport['value']})</li>";
                    }
                    echo "</ul>";

                    echo "<p>Prix total : {$prixVoyage} €</p>"; 
                ?>  
                <button class="btn_1"><a href="ajout_panier.php">ajouter au panier</a></button>
                <button class="btn_1"><a href="attribution_voyage2.php?destination=<?php echo urlencode($destination); ?>">modifier le voyage</a></button>
            </div>
        </div>
        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
    </body>
</html>