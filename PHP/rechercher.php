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
                        if(isset($_SESSION['user_statut']) && $_SESSION['user_statut'] == 'admin'){
                            echo '<li><a href="administrateur.php">Admin</a></li>';
                        }
                    ?>
                    <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
                    <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
                </ul>
            </div>

            <div class="recherche">
                <form action="recherche.php" method="GET">
                    <input type="search" name="q" placeholder="Rechercher..." required>
                    <button type="submit">Rechercher</button>
                </form>
            </div>
            

            <div class="filtre">
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
                        <label for="formule">Formule :</label>
                        <select id="formule" name="formule">
                            <option value="formule">---Formule---</option>
                            <option value="logement">Logement</option>
                            <option value="activites">Activités</option>
                            <option value="voyage">Voyage</option>
                            <option value="all">All Inclusive</option>
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
                        <input type="range" name="prix" min="0" max="10000" step="100" value="5000">
                        <span id="valeurPrix">500</span> €
                    </li>
                </ul>
            </div>



            <div class="annonces-container">
                <div class="annonce">
                    <button><img src="montagne2.jpg" alt="Voyage 1"></button>
                    <p>(nom + description)</p>
                </div>
            
                <div class="annonce">
                    <button><img src="montagne2.jpg" alt="Voyage 2"></button>
                    <p>(nom + description)</p>
                </div>
                <div class="annonce">
                    <button><img src="montagne2.jpg" alt="Voyage 3"></button>
                    <p>(nom + description)</p>
                </div>
                <div class="annonce">
                    <button><img src="montagne2.jpg" alt="Voyage 3"></button>
                    <p>(nom + description)</p>
                </div>
                <div class="annonce">
                    <button><img src="montagne2.jpg" alt="Voyage 3"></button>
                    <p>(nom + description)</p>
                </div>
                <div class="annonce">
                    <button><img src="montagne2.jpg" alt="Voyage 3"></button>
                    <p>(nom + description)</p>
                </div>
            </div>

            <div class="swpage">
                <button><img src="p2.png"></button>
                <p>Page 1/4</p>
                <button><img src="p1.png"></button>
            </div>

        </div>

        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>

    </body>
</html>
