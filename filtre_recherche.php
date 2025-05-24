<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rechercher</title>
	<link rel="stylesheet" type="text/css" href="recherche.css">
</head>
    <body>
        <div class="fond">
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
            
            <div class="recherche">
                <form action="filtre_recherche.php" method="GET">
                    <input type="search" name="q" placeholder="Rechercher..." required>
                    <button type="submit">Rechercher</button>
                </form>
            </div>
            
            
            <div class="filtre">
                <form action="filtre_recherche.php" method="GET">
                    <ul>
                        <li>
                            <label for="region">Région :</label>
                            <select id="region" name="region">
                                <option value="region">-------Région-------</option>
                                <option value="alpes">Alpes</option>
                                <option value="pyrenees">Pyrénées</option>
                                <option value="himalaya">Himalaya</option>
                                <option value="oural">Oural</option>
                                <option value="caucase">Caucase</option>
                                <option value="rocheuses">Rocheuses</option>
                                <option value="andes">Andes</option>
                                <option value="appalaches">Appalaches</option>
                                <option value="carpates">Carpates</option>
                                <option value="atlas">Atlas</option>
                                <option value="alpes-japonaises">Alpes Japonaises</option>
                                <option value="alpes-sud">Alpes du Sud</option>
                            </select>
                        </li>
                        <li>
                            <label for="type">type :</label>
                            <select id="type" name="type">
                                <option value="famille">---Famille---</option>
                                <option value="extrême">extrême</option>
                                <option value="sportif">sportif</option>
                                <option value="detente">detente</option>
                            </select>
                        </li>
                        <li>
                            <label for="depart">Départ :</label>
                            <input type="date" name="depart">
                        </li>
                        <li>
                            <label for="retour">Retour :</label>
                            <input type="date" name="retour">
                        </li>
                        <li>
                            <label for="prix">Prix :</label>
                            <select id="prix" name="prix">
                                <option value=" moins de 5000">--- moins 5000 euros---</option>
                                <option value="moins de 2700"> moins 2700 euros</option>
                                <option value="moins"> moins 1800 euros</option>
                            </select> €
                        </li>

                        <li><button type="submit">filtrer</button></li>
                    </ul>
                </form>
            </div>
            



            <div class="annonces-container">
            <?php

$motrecherche= 'ZZ';


if (isset($_GET['q'])) {
    $motrecherche = $_GET['q'];
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

        }

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
            $destination     = $voyage["lieu"] ?? "";
            $description     = $voyage["description"];

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

            
           
            $minLength1 = min(strlen($voyage['lieu']), strlen($motrecherche));
            $minLength2 = min(strlen($voyage['tag1']), strlen($motrecherche));
            $minLength3 = min(strlen($voyage['tag2']), strlen($motrecherche));
            $minLength4 = min(strlen($voyage['tag3']), strlen($motrecherche));
            $minLength5 = min(strlen($voyage['tag4']), strlen($motrecherche));



            if(strncasecmp($voyage['lieu'],($motrecherche), $minLength1) === 0){
            include('annonce.php');
            }
             if(strncasecmp($voyage['tag1'],($motrecherche), $minLength2) === 0){
            include('annonce.php');
            }
              if(strncasecmp($voyage['tag2'],($motrecherche), $minLength3) === 0){
            include('annonce.php');
            }
               if(strncasecmp($voyage['tag3'],($motrecherche), $minLength4) === 0){
            include('annonce.php');
            }

        }
          
            ?>
                </div>

        </div>

        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>

    </body>
</html>
