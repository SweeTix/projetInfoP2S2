<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rechercher</title>
	<link rel="stylesheet" type="text/css" href="site.css">
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
                    ?>
                    <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
                    <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
                </ul>
            </div>
            
            <div>
                <form action="rechercher.php" method="GET">
                    <div class="recherche-haut">
                        <input type="search" name="q" placeholder="Rechercher...">
                        <button type="submit">Rechercher</button>
                    </div>
                    
                    <div class="filtre">
                        <ul>
                            <li>
                                <label for="region">Région : </label>
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
                                <label for="type">Type : </label>
                                <select id="type" name="type">
                                    <option value="famille">---Famille---</option>
                                    <option value="extreme">extrême</option>
                                    <option value="sportif">sportif</option>
                                    <option value="detente">detente</option>
                                </select>
                            </li>
                            <li>
                                <label for="depart">Départ : </label>
                                <input type="date" name="depart">
                            </li>
                            <li>
                                <label for="retour">Retour : </label>
                                <input type="date" name="retour">
                            </li>
                            <li>
                                <label for="prix">Prix : </label>
                                <select id="prix" name="prix">
                                    <option value="prix">---Prix---</option>
                                    <option value="1000"> - 1000 €</option>
                                    <option value="1250"> - 1250 €</option>
                                    <option value="1500"> - 1500 €</option>
                                </select>
                            </li> 
                        </ul>
                    </div>
                </form>
            </div>
            
            <div class="annonces-container">
                <?php

                    $motrecherche = $_GET['motrecherche'] ?? '';
                    $region = $_GET['region'] ?? '';
                    $type = $_GET['type'] ?? '';
                    $depart = $_GET['depart'] ?? '';
                    $retour = $_GET['retour'] ?? '';
                    $prix = $_GET['prix'] ?? '';

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

                        $afficher = true;

                        // 🟢 1. Recherche par mot-clé (comme avant)
                        if (!empty($motrecherche)) {
                            $matchMotCle = false;
                            $champs = ['lieu', 'tag1', 'tag2', 'tag3', 'tag4'];
                            foreach ($champs as $champ) {
                                if (isset($voyage[$champ])) {
                                    $minLength = min(strlen($voyage[$champ]), strlen($motrecherche));
                                    if (strncasecmp($voyage[$champ], $motrecherche, $minLength) === 0) {
                                        $matchMotCle = true;
                                        break;
                                    }
                                }
                            }
                            if (!$matchMotCle) $afficher = false;
                        }

                        // 🟠 2. Région = tag1
                        if (!empty($region) && $region !== 'region') {
                            if (!isset($voyage['tag1']) || $voyage['tag1'] !== $region) {
                                $afficher = false;
                            }
                        }

                        // 🟠 3. Type = tag2
                        if (!empty($type) && $type !== 'famille') {
                            if (!isset($voyage['tag2']) || $voyage['tag2'] !== $type) {
                                $afficher = false;
                            }
                        }

                        // 🟢 4. Dates
                        if (!empty($depart) && $voyage['date_depart'] < $depart) {
                            $afficher = false;
                        }
                        if (!empty($retour) && $voyage['date_arrivee'] > $retour) {
                            $afficher = false;
                        }

                        // 🟢 5. Prix
                        if (!empty($montant_final) && $prix !== 'prix') {
                            $prixMax = 999999;
                            if (str_contains($prix, '1000')) $prixMax = 1000;
                            elseif (str_contains($prix, '1250')) $prixMax = 1250;
                            elseif (str_contains($prix, '1500')) $prixMax = 1500;

                            if ($voyage['montant_final'] > $prixMax) {
                                $afficher = false;
                            }
                        }

                        // ✅ Affichage si tout est bon
                        if ($afficher) {
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