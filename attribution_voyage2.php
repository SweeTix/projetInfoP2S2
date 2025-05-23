


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
            <li><a href="accueil.html"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
            <li><a href="information.html">Information</a></li>
            <li><a href="rechercher.html">Rechercher</a></li>
        </ul>
        <ul>
            <li class="inscription"><a href="inscription.html">S'inscrire</a></li>
            <li class="connexion"><a href="connexion.html">Se connecter</a></li>
        </ul>
    </div>

   <!-- <div class="container">-->
   <!--</div>-->
    <div class="voyagelist">
    <div class="voyagelist">
   <?php


if (isset($_GET['destination'])) {
    $destination = $_GET['destination'];
} else {
    $destination = null; // ou une valeur par défaut
}



$nomRecherche = $destination; // Assure-toi que $destination est défini avant

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

foreach ($data as $ligne) {
    if ($ligne['lieu'] === $nomRecherche) {
        // On utilise $ligne, pas $voyage
        $destination     = $ligne["lieu"] ?? "";
        $etape1          = $ligne["etape1"] ?? "";
        $etape2          = $ligne["etape2"] ?? "";
        $etape3          = $ligne["etape3"] ?? "";
        $urlimage1       = $ligne["urlimage1"] ?? "";
        $urlimage2       = $ligne["urlimage2"] ?? "";
        $montant_final   = $ligne["montant_final"] ?? "";

        // Transports
        $transport1_e1 = $ligne["transport1_e1"] ?? "";
        $prix_transport1_e1 = $ligne["prix_transport1_e1"] ?? "";
        $transport2_e1 = $ligne["transport2_e1"] ?? "";
        $prix_transport2_e1 = $ligne["prix_transport2_e1"] ?? "";

        $transport1_e2 = $ligne["transport1_e2"] ?? "";
        $prix_transport1_e2 = $ligne["prix_transport1_e2"] ?? "";
        $transport2_e2 = $ligne["transport2_e2"] ?? "";
        $prix_transport2_e2 = $ligne["prix_transport2_e2"] ?? "";

        $transport1_e3 = $ligne["transport1_e3"] ?? "";
        $prix_transport1_e3 = $ligne["prix_transport1_e3"] ?? "";
        $transport2_e3 = $ligne["transport2_e3"] ?? "";
        $prix_transport2_e3 = $ligne["prix_transport2_e3"] ?? "";

        // Restauration
        $restauration1_e1 = $ligne["restauration1_e1"] ?? "";
        $prix_restauration1_e1 = $ligne["prix_restauration1_e1"] ?? "";
        $restauration2_e1 = $ligne["restauration2_e1"] ?? "";
        $prix_restauration2_e1 = $ligne["prix_restauration2_e1"] ?? "";

        $restauration1_e2 = $ligne["restauration1_e2"] ?? "";
        $prix_restauration1_e2 = $ligne["prix_restauration1_e2"] ?? "";
        $restauration2_e2 = $ligne["restauration2_e2"] ?? "";
        $prix_restauration2_e2 = $ligne["prix_restauration2_e2"] ?? "";

        $restauration1_e3 = $ligne["restauration1_e3"] ?? "";
        $prix_restauration1_e3 = $ligne["prix_restauration1_e3"] ?? "";
        $restauration2_e3 = $ligne["restauration2_e3"] ?? "";
        $prix_restauration2_e3 = $ligne["prix_restauration2_e3"] ?? "";

        // Logements
        $logement1_e1 = $ligne["logement1_e1"] ?? "";
        $prix_logement1_e1 = $ligne["prix_logement1_e1"] ?? "";
        $logement2_e1 = $ligne["logement2_e1"] ?? "";
        $prix_logement2_e1 = $ligne["prix_logement2_e1"] ?? "";
        $logement3_e1 = $ligne["logement3_e1"] ?? "";
        $prix_logement3_e1 = $ligne["prix_logement3_e1"] ?? "";

        $logement1_e2 = $ligne["logement1_e2"] ?? "";
        $prix_logement1_e2 = $ligne["prix_logement1_e2"] ?? "";
        $logement2_e2 = $ligne["logement2_e2"] ?? "";
        $prix_logement2_e2 = $ligne["prix_logement2_e2"] ?? "";
        $logement3_e2 = $ligne["logement3_e2"] ?? "";
        $prix_logement3_e2 = $ligne["prix_logement3_e2"] ?? "";

        $logement1_e3 = $ligne["logement1_e3"] ?? "";
        $prix_logement1_e3 = $ligne["prix_logement1_e3"] ?? "";
        $logement2_e3 = $ligne["logement2_e3"] ?? "";
        $prix_logement2_e3 = $ligne["prix_logement2_e3"] ?? "";
        $logement3_e3 = $ligne["logement3_e3"] ?? "";
        $prix_logement3_e3 = $ligne["prix_logement3_e3"] ?? "";

        // Activités
        $activiteA_e1 = $ligne["activiteA_e1"] ?? "";
        $prix_Aae1    = $ligne["prix_Aae1"] ?? "";
        $activiteB_e1 = $ligne["activiteB_e1"] ?? "";
        $prix_Abe1    = $ligne["prix_Abe1"] ?? "";
        $activiteC_e1 = $ligne["activiteC_e1"] ?? "";
        $prix_Ace1    = $ligne["prix_Ace1"] ?? "";

        $activiteA_e2 = $ligne["activiteA_e2"] ?? "";
        $prix_Aae2    = $ligne["prix_Aae2"] ?? "";
        $activiteB_e2 = $ligne["activiteB_e2"] ?? "";
        $prix_Abe2    = $ligne["prix_Abe2"] ?? "";
        $activiteC_e2 = $ligne["activiteC_e2"] ?? "";
        $prix_Ace2    = $ligne["prix_Ace2"] ?? "";

        $activiteA_e3 = $ligne["activiteA_e3"] ?? "";
        $prix_Aae3    = $ligne["prix_Aae3"] ?? "";
        $activiteB_e3 = $ligne["activiteB_e3"] ?? "";
        $prix_Abe3    = $ligne["prix_Abe3"] ?? "";
        $activiteC_e3 = $ligne["activiteC_e3"] ?? "";
        $prix_Ace3    = $ligne["prix_Ace3"] ?? "";

        // Tags
        $tag1 = $ligne["tag1"] ?? "";
        $tag2 = $ligne["tag2"] ?? "";
        $tag3 = $ligne["tag3"] ?? "";
        $tag4 = $ligne["tag4"] ?? "";

        break; // On sort de la boucle une fois trouvé
    }
}

include('voyagetemplate2.php');
?>

   
</div>

    </div>

   



</body>
</html>