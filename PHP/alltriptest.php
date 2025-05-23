<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trek & Peaks</title>
    <link rel="stylesheet" href="site2.css">
</head>
<body>
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
                if(isset($_SESSION['user_statut']) && $_SESSION['user_statut'] == 'admin'){
                    echo '<li><a href="administrateur.php">Admin</a></li>';
                }
            ?>
            <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
            <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
        </ul>
    </div>

   <!-- <div class="container">-->
   <!--</div>-->
    <div class="voyagelist">
    <?php
    // Lecture et décodage du fichier JSON
    $jsonContent = file_get_contents("destination3.json");
    if ($jsonContent === false) {
        echo "Impossible de lire le fichier JSON.";
        exit;
    }

    $data = json_decode($jsonContent, true);
    if ($data === null) {
        echo "Erreur lors du décodage du fichier JSON.";
        exit;
    }

    // Parcours de chaque voyage dans le fichier JSON
    foreach ($data as $voyage) {
        // --- Infos générales ---
        $date_depart     = $voyage["date_depart"] ?? "";
        $date_arrivee    = $voyage["date_arrivee"] ?? "";
        $destination     = $voyage["lieu"] ?? "";
        $etape1          = $voyage["etape1"] ?? "";
        $etape2          = $voyage["etape2"] ?? "";
        $etape3          = $voyage["etape3"] ?? "";
        $urlimage1       = $voyage["urlimage1"] ?? "";
        $urlimage2       = $voyage["urlimage2"] ?? "";
        $montant_final   = $voyage["montant_final"] ?? "";

        // --- Transports ---
        $transport1_e1 = $voyage["transport1_e1"] ?? "";
        $prix_transport1_e1 = $voyage["prix_transport1_e1"] ?? "";
        $transport2_e1 = $voyage["transport2_e1"] ?? "";
        $prix_transport2_e1 = $voyage["prix_transport2_e1"] ?? "";

        $transport1_e2 = $voyage["transport1_e2"] ?? "";
        $prix_transport1_e2 = $voyage["prix_transport1_e2"] ?? "";
        $transport2_e2 = $voyage["transport2_e2"] ?? "";
        $prix_transport2_e2 = $voyage["prix_transport2_e2"] ?? "";

        $transport1_e3 = $voyage["transport1_e3"] ?? "";
        $prix_transport1_e3 = $voyage["prix_transport1_e3"] ?? "";
        $transport2_e3 = $voyage["transport2_e3"] ?? "";
        $prix_transport2_e3 = $voyage["prix_transport2_e3"] ?? "";

        // --- restauration ---
        $restauration1_e1 =$voyage["restauration1_e1"] ?? "";
        $prix_restauration1_e1 =$voyage["prix_restauration1_e1"] ?? "";
        $restauration2_e1 =$voyage["restauration_e1"] ?? "";
        $prix_restauration2_e1 =$voyage["prix_restauration2_e1"] ?? "";

        $restauration1_e2 =$voyage["restauration1_e2"] ?? "";
        $prix_restauration1_e2 =$voyage["prix_restauration1_e2"] ?? "";
        $restauration2_e2 =$voyage["restauration2_e2"] ?? "";
        $prix_restauration2_e2 =$voyage["prix_restauration2_e2"] ?? "";

        $restauration1_e3 =$voyage["restauration1_e3"] ?? "";
        $prix_restauration1_e3 =$voyage["prix_restauration1_e3"] ?? "";
        $restauration2_e3 =$voyage["restauration2_e3"] ?? "";
        $prix_restauration2_e3 =$voyage["prix_restauration2_e3"] ?? "";

        // --- Logements ---
        $logement1_e1 = $voyage["logement1_e1"] ?? "";
        $prix_logement1_e1 = $voyage["prix_logement1_e1"] ?? "";
        $logement2_e1 = $voyage["logement2_e1"] ?? "";
        $prix_logement2_e1 = $voyage["prix_logement2_e1"] ?? "";
        $logement3_e1 = $voyage["logement3_e1"] ?? "";
        $prix_logement3_e1 = $voyage["prix_logement3_e1"] ?? "";

        $logement1_e2 = $voyage["logement1_e2"] ?? "";
        $prix_logement1_e2 = $voyage["prix_logement1_e2"] ?? "";
        $logement2_e2 = $voyage["logement2_e2"] ?? "";
        $prix_logement2_e2 = $voyage["prix_logement2_e2"] ?? "";
        $logement3_e2 = $voyage["logement3_e2"] ?? "";
        $prix_logement3_e2 = $voyage["prix_logement3_e2"] ?? "";

        $logement1_e3 = $voyage["logement1_e3"] ?? "";
        $prix_logement1_e3 = $voyage["prix_logement1_e3"] ?? "";
        $logement2_e3 = $voyage["logement2_e3"] ?? "";
        $prix_logement2_e3 = $voyage["prix_logement2_e3"] ?? "";
        $logement3_e3 = $voyage["logement3_e3"] ?? "";
        $prix_logement3_e3 = $voyage["prix_logement3_e3"] ?? "";

        // --- Activités étape 1 ---
        $activiteA_e1 = $voyage["activiteA_e1"] ?? "";
        $prix_Aae1    = $voyage["prix_Aae1"] ?? "";
        $activiteB_e1 = $voyage["activiteB_e1"] ?? "";
        $prix_Abe1    = $voyage["prix_Abe1"] ?? "";
        $activiteC_e1 = $voyage["activiteC_e1"] ?? "";
        $prix_Ace1    = $voyage["prix_Ace1"] ?? "";

        // --- Activités étape 2 ---
        $activiteA_e2 = $voyage["activiteA_e2"] ?? "";
        $prix_Aae2    = $voyage["prix_Aae2"] ?? "";
        $activiteB_e2 = $voyage["activiteB_e2"] ?? "";
        $prix_Abe2    = $voyage["prix_Abe2"] ?? "";
        $activiteC_e2 = $voyage["activiteC_e2"] ?? "";
        $prix_Ace2    = $voyage["prix_Ace2"] ?? "";

        // --- Activités étape 3 ---
        $activiteA_e3 = $voyage["activiteA_e3"] ?? "";
        $prix_Aae3    = $voyage["prix_Aae3"] ?? "";
        $activiteB_e3 = $voyage["activiteB_e3"] ?? "";
        $prix_Abe3    = $voyage["prix_Abe3"] ?? "";
        $activiteC_e3 = $voyage["activiteC_e3"] ?? "";
        $prix_Ace3    = $voyage["prix_Ace3"] ?? "";

        // --- Tags (si utilisés dans ton template) ---
        $tag1 = $voyage["tag1"] ?? "";
        $tag2 = $voyage["tag2"] ?? "";
        $tag3 = $voyage["tag3"] ?? "";
        $tag4 = $voyage["tag4"] ?? "";

        // Inclure le template pour ce voyage
        include('voyagetemplate2.php');
    }
    ?>
    </div>

   



</body>
</html>