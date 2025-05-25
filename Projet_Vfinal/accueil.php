<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trek & Peaks</title>
    <link rel="stylesheet" href="site.css">
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
                ?>
                <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
                <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
            </ul>
        </div>
        
        <div class="fond">
            <div class="titre">
                <h1>Trek & Peaks</h1>
                <p>Découvrez ce que la montagne a à vous offrir de mieux<br>à travers différents voyages autour du monde.</p>
            </div>
            <h1><u>Nos prochains voyages :</u></h1>
            <div class="annonces-container">
                <?php
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
                    $i = 0;
                    foreach ($data as $voyage) {
                        // --- Infos générales ---
                        $destination     = $voyage["lieu"] ?? "";
                        $date_depart     = $voyage["date_depart"] ?? "";
                        $date_arrivee    = $voyage["date_arrivee"] ?? "";

                        $etape1          = $voyage["etape1"] ?? "";
                        $etape2          = $voyage["etape2"] ?? "";
                        $etape3          = $voyage["etape3"] ?? "";
                        $urlimage1       = $voyage["urlimage1"] ?? "";
                        $urlimage2       = $voyage["urlimage2"] ?? "";
                        $montant_final   = $voyage["montant_final"] ?? "";

                    
                        // --- Tags (si utilisés dans ton template) ---
                        $tag1 = $voyage["tag1"] ?? "";
                        $tag2 = $voyage["tag2"] ?? "";
                        $tag3 = $voyage["tag3"] ?? "";
                        $tag4 = $voyage["tag4"] ?? "";
                        
                        if($i < 5){
                            include('annonce.php');
                        }
                        
                        $i = $i + 1;
                    }
                ?>
            </div>
            <a href="rechercher.php"><button class="bouton-recherche-accueil">Rechercher</button></a>
        </div>
        
        <div class="content">
            <p class="separateur"><b>_____________________________________________</b></p>
            
            <div class="case">
                <img src="destinations.jpg" alt="Destinations">
                <p>
                    <b>Destinations</b><br><br>Découvrez une multitude de destinations avec notre agence de voyage !
                    Des sommets enneigés des Alpes aux paysages sauvages des Rocheuses, en passant par les villages authentiques des Pyrénées,
                    nous vous emmenons là où la nature est reine. Partez pour une aventure inoubliable, adaptée à vos envies, que ce soit pour le ski, 
                    la randonnée ou un séjour détente en altitude !
                </p>
            </div>
            <div class="case">
                <img src="logements.jpg" alt="Logements">
                <p>
                    <b>Logement</b><br><br>Profitez d’un large choix de logements pour vos voyages ! 
                    Chalets cosy avec vue panoramique, hôtels de charme au pied des pistes ou refuges authentiques en pleine nature, 
                    nous avons l’hébergement idéal pour votre séjour. Confort, authenticité et dépaysement garantis, quelle que soit votre destination !
                </p>
            </div>
            <div class="case">
                <img src="activites.jpg" alt="Activités">
                <p>
                    <b>Activités</b><br><br>Vivez des expériences inoubliables en montagne grâce à notre large gamme d’activités ! 
                    Ski, snowboard, randonnées en raquettes, parapente ou encore bains thermaux, il y en a pour tous les goûts et toutes les saisons. 
                    Que vous soyez en quête d’adrénaline ou de détente, nous avons l’aventure qu’il vous faut !
                </p>
            </div>

            <p class="separateur"><b>_____________________________________________</b></p>

            <h1>Nos Destinations</h1>
        </div>

        <div class="destinations">
            <div class="carte">
                <div class="point alpes" data-name="Alpes"></div>
                <div class="point pyrenees" data-name="Pyrénées"></div>
                <div class="point himalaya" data-name="Himalaya"></div>
                <div class="point oural" data-name="Oural"></div>
                <div class="point caucase" data-name="Caucase"></div>
                <div class="point rocheuses" data-name="Rocheuses"></div>
                <div class="point andes" data-name="Andes"></div>
                <div class="point appalaches" data-name="Appalaches"></div>
                <div class="point carpates" data-name="Carpates"></div>
                <div class="point atlas" data-name="Atlas"></div>
                <div class="point alpes-japonaises" data-name="Alpes Japonaises"></div>
                <div class="point alpes-sud" data-name="Alpes du Sud"></div>
                <div class="point cordillere-australienne" data-name="Cordillère Australienne"></div>
                <div class="point tian-shan" data-name="Tian Shan"></div>
                <div class="point altai" data-name="Altaï"></div>
            </div>
        </div>

        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
    </body>
</html>